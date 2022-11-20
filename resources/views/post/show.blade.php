
<x-app-layout>
    @section('title',$post->title)
    @section('description',  Str::limit(preg_replace("/<.*?>/", "",$post->description),60))
{{--    <x-slot name="title">--}}
{{--        {{ $post->title }} | AND Voting--}}
{{--    </x-slot>--}}
    <div>
        <a href="{{ $backUrl }}" class="flex items-center w-20 dark:text-white  hover:underline  ">
            <svg class="w-4 h-4 stroke-current " fill="none"  viewBox="0 0 24 24" >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            <span class=" ml-2 ">Back</span>
        </a>
    </div>

    <livewire:post-show
        :post="$post"
{{--        :votesCount="$votesCount"--}}
{{--        :spamPostsCount="$spamPostsCount"--}}


    />

    <livewire:post-comments :post="$post" />

    <x-notification-success />

    <x-modals-container :post="$post"  />
{{--    @section('scripts')--}}
{{--        <script src="{{asset('/js/ckeditor.js')}}"></script>--}}
{{--        <script src="{{asset('/js/ckeFuncs.js')}}"></script>--}}
{{--        <script>--}}
{{--            loadCke('#submit','#textarea-post','description',"{{route('img_upload', ['_token' => csrf_token() ])}}");--}}
{{--            window.addEventListener('loadCkePostEdit', event => {--}}
{{--                loadCke('#submit','#textarea-post','description',"{{route('img_upload', ['_token' => csrf_token() ])}}");--}}
{{--            });--}}
{{--            --}}{{--loadCke('#comment_submit','#post_comment','comment',"{{route('img_upload', ['_token' => csrf_token() ])}}");--}}
{{--            window.addEventListener('loadCkeCommentCreate', event => {--}}
{{--                loadCke('#comment_submit','#post_comment','comment',"{{route('img_upload', ['_token' => csrf_token() ])}}");--}}
{{--            });--}}
{{--            loadCke('#edit_comment_submit','#post_comment_edit','body',"{{route('img_upload', ['_token' => csrf_token() ])}}");--}}
{{--            window.addEventListener('loadCkeCommentEdit', event => {--}}
{{--                loadCke('#edit_comment_submit','#post_comment_edit','body',"{{route('img_upload', ['_token' => csrf_token() ])}}");--}}
{{--            });--}}
{{--        </script>--}}
{{--    @endsection--}}

</x-app-layout>
