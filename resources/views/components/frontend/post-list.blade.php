<div class="">
    @foreach ($posts as $post)
        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="{{route('post',$post->title)}}" class="hover:opacity-75">
                <img src="{{asset($post->imageUrl)}}" class="">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="{{route('categoryPosts',$post->category->name)}}" class="text-blue-700 text-sm font-bold uppercase pb-4">{{$post->category->name}}</a>
                <a href="{{route('post',$post->title)}}" class="text-3xl font-bold hover:text-gray-700 pb-4"> {{$post->title}} </a>
                <p href="{{route('post',$post->title)}}" class="text-sm pb-3">
                    By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published {{$post->created_at->diffForHumans()}}
                </p>
                <a href="{{route('post',$post->title)}}" class="pb-4">{{ \Illuminate\Support\Str::limit($post->body, 150, $end='...') }}</a>
                <a href="{{route('post',$post->title)}}" class="uppercase text-gray-800 hover:text-gray-200 hover:bg-blue-800 w-52 px-4 py-3 rounded-lg ">Continue Reading <i class="fas fa-arrow-right"></i></a>
            </div>
        </article>
    @endforeach
    

    <!-- Pagination -->
    <div class="flex justify-center items-center py-8">
        {{$posts->links()}}
    </div>
</div>