<x-app-layout>
    @section('title','Create post')
    @section('description','Don\'t be shy, share your thoughts ')
    <livewire:create-post/>

{{--    @section('scripts')--}}
{{--        <script src="{{asset('/js/ckeditor.js')}}" ></script>--}}
{{--        <script src="{{asset('/js/ckeFuncs.js')}}" ></script>--}}
{{--        <script >--}}
{{--            loadCke('#submit','#textarea-post','description',"{{route('img_upload', ['_token' => csrf_token() ])}}");--}}
{{--            window.addEventListener('loadCke', event => {--}}
{{--                loadCke('#submit','#textarea-post','description',"{{route('img_upload', ['_token' => csrf_token() ])}}");--}}
{{--            });--}}
{{--        </script>--}}


{{--    @endsection--}}

</x-app-layout>
