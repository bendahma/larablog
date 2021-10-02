<nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
    <div class="block sm:hidden">
        <a href="#" class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
            @click="open = !open" >
            Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
        </a>
    </div>
    <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
        <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
            @foreach ($categories as $category)
                <div class="hover:bg-blue-800 hover:text-gray-100 hover:text-md  rounded-lg py-2 px-4 mx-2 relative">
                    <a href="{{route('categoryPosts',$category->name)}}" class=" px-3">
                        {{$category->name}} <span class="absolute top-0 ml-1 text-xs font-bold"> {{$category->numberOfPosts}} </span>
                    </a>
                    
                </div>
            @endforeach
            
        </div>
    </div>
</nav>
