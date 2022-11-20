{{--<select--}}
{{--    wire:model.defer="clubsToPost"--}}
{{--                            wire:model="wasteTypesToPost"--}}
{{--name="clubsToPost"--}}
{{--        --}}{{--                    name="other_filters" id="other_filters" --}}
{{--        class="w-full border-gray-300 dark:bg-gray-700  focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50 rounded-md shadow-sm cursor-pointer dark:text-white">--}}
{{--    @if($clubsToPost)--}}
{{--        <option wire:ignore value="{{$clubsToPost }}" >--}}
{{--            {{$clubsToPost }}--}}
{{--        </option>--}}
{{--    @endif--}}
{{--    <option  value="anyone" >To anyone</option>--}}
{{--    @forelse($clubs as $club)--}}
{{--        {{$clubsToPost ? $clubsToPost : 'anyone' }}--}}
{{--        {{$clubsToPost ?$clubsToPost :'To anyone' }}--}}

{{--        <option wire:ignore value="{{$club->slug}}"--}}
{{--            {{($club->slug) == $clubsToPost ? 'selected' : ''}}--}}
{{--        >--}}
{{--            {{$club->title}}--}}
{{--        </option>--}}
{{--    @empty--}}
{{--        <x-no-posts message="No clubs available..."/>--}}
{{--    @endforelse--}}
{{--</select>--}}
