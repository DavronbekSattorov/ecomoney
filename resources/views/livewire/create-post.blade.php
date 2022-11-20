@section('header')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <style>
        #map {
            height: 100%;
        }

        /*
         * Optional: Makes the sample page fill the window.
         */
        .form-create {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #description {
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
        }

        #infowindow-content .title {
            font-weight: bold;
        }

        #infowindow-content {
            display: none;
        }

        #map #infowindow-content {
            display: inline;
        }

        .pac-card {
            background-color: #fff;
            border: 0;
            border-radius: 2px;
            box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
            margin: 10px;
            padding: 0 0.5em;
            font: 400 18px Roboto, Arial, sans-serif;
            overflow: hidden;
            font-family: Roboto;
            padding: 0;
        }

        #pac-container {
            padding-bottom: 12px;
            margin-right: 12px;
        }

        .pac-controls {
            display: inline-block;
            padding: 5px 11px;
        }

        .pac-controls label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }

        /*#pac-input {*/
        /*    background-color: #fff;*/
        /*    font-family: Roboto;*/
        /*    font-size: 15px;*/
        /*    font-weight: 300;*/
        /*    margin-left: 12px;*/
        /*    padding: 0 11px 0 13px;*/
        /*    text-overflow: ellipsis;*/
        /*    width: 400px;*/
        /*}*/

        #pac-input:focus {
            border-color: #4d90fe;
        }

        #title {
            color: #fff;
            background-color: #4d90fe;
            font-size: 25px;
            font-weight: 500;
            padding: 6px 12px;
        }

        #target {
            width: 345px;
        }

    </style>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
@endsection
<div>
    @auth
        <form wire:submit.prevent="createPost" action="#" method="POST" class="space-y-4 px-4 py-6 form-create" enctype="multipart/form-data" >
{{--            <livewire:select-club />--}}
            <div class=" w-full  ">
                <x-jet-input wire:model.defer="title"  type="text" placeholder="Post Title" class="block mt-1 w-full"  autofocus="autofocus"></x-jet-input>
                {{--                @error('title')--}}
                <x-jet-input-error for="title" class="mt-2" />
                {{--                @enderror--}}



            </div>
            <div class="flex justify-between">
                <select
                    wire:model="option"
                    {{--                    wire:model="clubsId"--}}
                    {{--                wire:model="clubsToPost"--}}
                    name="option"
                    {{--                                    name="other_filters" id="other_filters"--}}
                    class="sm:w-1/3 w-full border-gray-300 dark:bg-gray-700  focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm cursor-pointer dark:text-white mr-2">
                    <option   value="buy" >Buy</option>
                    <option   value="sell" selected >Sell</option>

                </select>

                <select
                    wire:model.defer="wasteTypes"
                    {{--                    wire:model="clubsId"--}}
                    {{--                wire:model="clubsToPost"--}}
                    name="wasteTypes"
                    {{--                                    name="other_filters" id="other_filters"--}}
                    class="sm:w-1/3 w-full border-gray-300 dark:bg-gray-700  focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm cursor-pointer dark:text-white mr-2">
                    <option   value="not-selected" >Choose waste type</option>
                    @forelse($wasteTypes as $wasteType)

                        <option value="{{$wasteType->slug}}"
                            {{($wasteType->slug) == $wasteTypesToPost ? 'selected' : ''}}
                        >
                            {{$wasteType->title}}
                        </option>
                    @empty
                        <x-no-posts message="No waste types available..."/>
                    @endforelse
                </select>


                <div class=" w-full sm:w-1/3">
                    <x-jet-input wire:model.defer="price" step="0.01"  type="number" placeholder="0, 00 pln" class="block w-full"  autofocus="autofocus"></x-jet-input>
                    {{--                @error('title')--}}
                    {{--                @enderror--}}



                </div>
            </div>
            <x-jet-input-error for="option" class="mt-2" />
            <x-jet-input-error for="wasteTypesId" class="mt-2" />
            <x-jet-input-error for="price" class="mt-2" />

            <div class="flex justify-between">
                <div class="sm:w-1/2 max-h-36 mr-4">
                    @if($file)
                        {{--                @foreach($files as $file)--}}
                        <img src="{{$file->temporaryUrl()}}" alt="" class="w-full h-full  object-cover inline-block mx-auto rounded-lg">
                        {{--                @endforeach--}}
                    @endif

                </div>

                <div
                    class="w-full"
                    wire:ignore
                    x-data
                    x-init="
                FilePond.setOptions({
                    allowMultiple: true,
                    server: {
                        process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                            @this.upload('file', file, load, error, progress)
                        },
                        revert: (filename, load) => {
                            @this.removeUpload('file', filename, load)
                        }
                    }
                })

            FilePond.create($refs.input)
            "
                >

                    <input x-ref="input" type="file"  wire:model="files" id="files" >

                </div>
            </div>
            <x-jet-input-error for="files" class="mt-2" />



            <div class="h-60"  wire:ignore>
                <x-jet-input
                   wire:model.defer="location"
                    name="location"
                    id="pac-input"
                    class="controls mt-2 sm:w-1/2"
                    type="text"
                    placeholder="Search Box"
                    x-data="{ show: false }" x-show="show" x-init="setTimeout(() => show = true, 500)"
                />

                <div                     wire:ignore
                                         id="map" ></div>
            </div>
            <x-jet-input-error for="location" class="mt-2" />

            <div>
                <textarea   id="textarea-post" wire:model.defer="description" cols="30" rows="4" class=" w-full border-gray-300 dark:bg-gray-700 dark:text-white  focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50  px-4 py-2 rounded-md placeholder-white" placeholder="Content(optional)" ></textarea>
                @error('description')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <x-jet-button
{{--                wire:click="loadCke"--}}
{{--            wire:click="changeChild"--}}
            id="submit"

            >Submit</x-jet-button>

        </form>

    @else
       <x-not-authorized/>
    @endauth
</div>

@section('scripts')
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMpLsLhN7M-jXH8cAm2UDDemQyD6H_BMc&region=PL&callback=initAutocomplete&libraries=places&v=weekly"
        defer
    ></script>
    <script type="text/javascript">
        function initAutocomplete() {
            const map = new google.maps.Map(document.getElementById("map"), {
                center: { lat:52.2297, lng: 21.0122 },
                zoom: 13,
                mapTypeId: "roadmap",
            });
            // Create the search box and link it to the UI element.
            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input);

            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
            // Bias the SearchBox results towards current map's viewport.
            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });

            let markers = [];

            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }

                // Clear out the old markers.
                markers.forEach((marker) => {
                    marker.setMap(null);
                });
                markers = [];

                // For each place, get the icon, name and location.
                const bounds = new google.maps.LatLngBounds();

                places.forEach((place) => {
                    if (!place.geometry || !place.geometry.location) {
                        console.log("Returned place contains no geometry");
                        return;
                    }

                    const icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25),
                    };

                    // Create a marker for each place.
                    markers.push(
                        new google.maps.Marker({
                            map,
                            icon,
                            title: place.name,
                            position: place.geometry.location,
                        })
                    );
                    if (place.geometry.viewport) {
                        // Only geocodes have viewport.
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }
        // autocomplete.setComponentRestrictions({
        //     country: ["pl"],
        // });

        window.initAutocomplete = initAutocomplete;


    </script>
    <script src="https://unpkg.com/filepond@4.30.4/dist/filepond.js"></script>
{{--    <script>--}}
{{--    const inputElement = document.querySelector('input[id="wasteImages"]');--}}
{{--    const pond = ;--}}
{{--    </script>--}}
@endsection
