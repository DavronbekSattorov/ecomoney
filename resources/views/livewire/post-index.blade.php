<div class="relative min-h-[450px] sm:flex-auto post-container md:hover:ring-2 md:hover:ring-gray-400  rounded-lg  cursor-pointer mt-4 bg-gray-50 dark:bg-gray-700 overflow-hidden "
     x-data
        @click="const clicked = $event.target
                const target = clicked.tagName.toLowerCase()
                const ignores = ['button', 'svg', 'path', 'a','span','ul']

                if (! ignores.includes(target)) {
                    clicked.closest('.post-container').querySelector('.post-link').click()
                }
        "

>
    <img class="w-full h-60 object-cover " src="https://oceanbites.org/wp-content/uploads/2021/08/Plastic_bottles_for_recycling-1500x800.jpeg" alt="Mountain">
    <div class="px-6 py-4 ">
        <div class="font-bold text-xl mb-2 text-gray-600 dark:text-white line-clamp-2">
            <a class="post-link" href="{{route('post.show', $post->slug)}}">{{ucfirst($post->title)}}</a>
        </div>
       <div class="absolute bottom-2 max-w-[90%]">
           <div class=" pb-2 ">
        <span class="flex justify-between  text-sm font-semibold text-gray-700  mb-2">
            @foreach($post->wasteTypes as $wasteType)
                <a href="{{route('waste_type.show', $wasteType->slug)}}" class=" flex flex-row items-center md:hover:underline underline-offset-2 group bg-gray-200 rounded-full px-3 my-3">
{{--                <img src="{{ $wasteType->getProfilePhotoUrlAttribute() }}"--}}
                    {{--                     alt="avatar" class="w-6 h-6 object-cover rounded-full md:group-hover:ring-2 ring-main-green-light">--}}
                    <div class=" truncate text-xs ">
                        {{$wasteType->title}}
                    </div>

                </a>


            @endforeach
             <a disabled  class=" flex flex-row items-center  underline-offset-2 group bg-gray-200 rounded-full px-3 my-3 ml-2">
{{--                <img src="{{ $wasteType->getProfilePhotoUrlAttribute() }}"--}}
                 {{--                     alt="avatar" class="w-6 h-6 object-cover rounded-full md:group-hover:ring-2 ring-main-green-light">--}}
                    <div class=" truncate text-xs ">
                        {{$post->option}}
                    </div>

                </a>
              <a
                  href="#"
                  @click.prevent="
                                        isOpen = false
                                        navigator.clipboard.writeText('{{route('post.show', $post)}}')

                            "
                  wire:click.prevent="copied();"
                  class="  block transition ease-out duration-100 px-3 py-3 flex justify-between items-center group md:hover:bg-gray-200/75 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 text-gray-600 dark:text-white rounded-full"
              >
{{--                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard  md:group-hover:scale-125 transition ease-out duration-100 stroke-current " width="28" height="28" viewBox="0 0 24 24" stroke-width="1"  fill="none" stroke-linecap="round" stroke-linejoin="round">--}}
                  {{--                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>--}}
                  {{--                            <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />--}}
                  {{--                            <rect x="9" y="3" width="6" height="4" rx="2" />--}}
                  {{--                        </svg>--}}
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clipboard  md:group-hover:scale-125 transition ease-out duration-100 stroke-current " width="28" height="28" viewBox="0 0 192 191" fill="none">
<path d="M145.385 52H70.6154C61.439 52 54 60.8165 54 71.6923V160.308C54 171.183 61.439 180 70.6154 180H145.385C154.561 180 162 171.183 162 160.308V71.6923C162 60.8165 154.561 52 145.385 52Z" stroke-width="8.16667" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M41.9231 144H33.6154C29.2087 144 24.9825 141.925 21.8665 138.232C18.7505 134.539 17 129.53 17 124.308V35.6923C17 30.4696 18.7505 25.4608 21.8665 21.7677C24.9825 18.0747 29.2087 16 33.6154 16H108.385C112.791 16 117.017 18.0747 120.133 21.7677C123.249 25.4608 125 30.4696 125 35.6923V45.5385"  stroke-width="8.16667" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                    </a>
        </span>
           </div>
           <div class="flex justify-between">
               <p class="w-1/3 text-sm text-gray-700 dark:text-white truncate">
                   {{ $post->created_at->diffForHumans(null, false, true) }}
               </p>
               <p class="w-3/5 text-base text-gray-700 dark:text-white truncate">
                   {{ucfirst($post->location)}}
               </p>

           </div>
           <div class=" text-gray-700 dark:text-white flex justify-between">
               <p class="flex items-center" >
                   <span class="text-2xl font-bold mr-1">{!! is_null($post->price)? 'Free' :ucfirst($post->price).'<span class="text-base font-normal">zł</span>'!!} </span>
               </p>
               @if ($hasSaved)
                   <div class=" w-1/5  flex  justify-end">
                       <button wire:click.prevent="save" class="group p-2 flex items-center rounded-lg transition-transform md:hover:transition-all ease-out duration-100 md:hover:bg-gray-200/75 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 md:hover:text-gray-800 ">
                           <svg class="stroke-red-500 fill-red-500 scale-125 transition ease-out duration-100 md:dark:group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                               <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                           </svg>
                       </button>
                   </div>
               @else
                   <div class=" w-1/5  flex items-center justify-end">
                       <button wire:click.prevent="save"  class=" group p-2 flex items-center rounded-lg md:hover:bg-gray-200/75 md:dark:hover:bg-gray-600 md:active:bg-gray-200 md:dark:active:bg-gray-500 transition-transform md:hover:transition-all ease-out duration-100 md:dark:hover:text-white">
                           <svg class="stroke-current  md:group-hover:scale-125 md:group-hover:fill-red-500 md:group-hover:stroke-red-500 transition-transform  ease-out duration-100 "
                                xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                                fill="none"
                                stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                               <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
                           </svg>
                           <span class="hidden sm:block md:group-hover:text-gray-600 md:dark:group-hover:text-white"> Save</span>
                       </button>
                   </div>
               @endif
           </div>
       </div>
    </div>

</div>
