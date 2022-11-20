@props([
'message' => 'No Posts were found...',
])
<div class="mx-auto  sm:w-70 w-40 mt-12">
    <img src="
    {{ asset('images/no-data.svg') }}
        " alt="No Posts" class="mx-auto opacity-60">
    <div class="text-gray-400 text-center font-bold mt-6">{{$message}}</div>
</div>

