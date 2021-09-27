@extends('layouts.frontendTemplate')

@section('header')
<header class="h-screen object-cover relative">
    <div class="h-full bg-opacity-50  flex items-center justify-center object-cover " style="background-image: url('{{$category->imageUrl}}')">
        <div class="text-center bg-opacity-40 h-full w-full flex flex-col justify-between bg-black">
        
        <x-frontend.nav />

        <div class="h-full flex flex-col justify-center">
            <h1 class="font-bold text-gray-100 uppercase tracking-widest text-5xl md:text-9xl " > {{$category->name}} </h1>
           
        </div>

      </div>
    </div>
</header>
@endsection

@section('content')
    <div class="flex flex-wrap justify-center overflow-hidden ">
        @foreach ($posts as $post)
            <div class="w-1/4 overflow-hidden mx-3 shadow my-4 ">
                    <!-- div Image -->
                    <a href="#" class="hover:opacity-75">
                        <img src="{{asset($post->imageUrl)}}" class="" >
                    </a>
                    <div class="bg-white flex flex-col justify-start p-6">
                        <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{$post->category->name}}</a>
                        <a href="#" class="text-xl font-bold hover:text-gray-700 pb-4"> {{$post->title}} </a>
                        <p href="#" class="text-sm pb-3">
                            By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published {{$post->created_at->diffForHumans()}}
                        </p>
                        <a href="#" class="uppercase text-gray-800 hover:text-gray-200 hover:bg-blue-800 w-48 px-4 py-3 rounded-lg ">Continue Reading <i class="fas fa-arrow-right"></i></a>
                    </div>
            </div> 
                        
         @endforeach

        </div>
        <div class=" my-6 flex justify-center">
            {{$posts->links()}}
        </div>
@endsection














