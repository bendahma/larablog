<div class="w-full bg-white shadow flex flex-col my-4 p-6">
    <p class="text-xl font-semibold pb-5">Code snippet</p>
    <div class="grid grid-cols-3 gap-3">
        @foreach ($snippets as $snippet)
            <img class="hover:opacity-75 cursor-pointer " src="{{asset($snippet->imageUrl)}}">   
        @endforeach
    </div>
    <a href="{{route('codesnippets')}}" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
        See all code snippet
    </a>
</div>