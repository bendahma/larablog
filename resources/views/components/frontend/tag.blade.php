<div class="w-full bg-white shadow flex flex-col my-4 p-6">
    <p class="text-xl font-semibold pb-5">Tags</p>
    <div class="flex flex-wrap w-full justify-evenly items-center gap-2">
        @foreach ($tags as $t)   
            <a href="" class="w-1/5  font-bold  py-1 text-xs px-1 rounded hover:bg-blue-800 hover:text-gray-100 text-center"> 
                {{$t->name}}
            </a>
        @endforeach
    </div>
</div>