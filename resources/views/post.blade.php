@extends('layouts.frontendTemplate')

@section('header')
<header class="">
    <div class="h-2/3 bg-opacity-10  flex items-center justify-center object-cover " style="background-image: url('{{asset('/img/code-snippets.jpg')}}')">
        <div class="bg-opacity-80 h-full w-full flex flex-col justify-between bg-black">
        
        <x-frontend.nav />

        <div class="h-2/3 w-full flex flex-col items-start text-center my-20">
            <h1 class="font-bold text-center text-gray-100 uppercase w-full text-4xl " > {{$post->title}} </h1>
        </div>
        
      </div>
    </div>
</header>
@endsection

@section('content')

     <!-- Topic Nav -->
     <x-category-nav />

     <div class="container mx-auto flex flex-wrap py-6">

        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="{{asset($post->imageUrl)}}">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">{{$post->category->name}}</a>
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->title}}</a>
                    <p href="#" class="text-sm pb-8">
                        By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published  {{$post->created_at->diffForHumans()}}
                    </p>
                    {{$post->body}}
                </div>
            </article>

            <div class="w-full flex pt-6 text-center">
                @if ($prevPost != null)
                    <a href="{{route('post',$prevPost->title)}}" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                        <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Previous</p>
                        <p class="pt-2">{{$prevPost->title}}</p>
                    </a>
                @endif
                @if ($nextPost != null)
                <a href="{{route('post',$nextPost->title)}}" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
                    <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next <i class="fas fa-arrow-right pl-1"></i></p>
                    <p class="pt-2">{{$nextPost->title}}</p>
                </a>
            @endif
               
            </div>

            
        {{-- Author section --}} 

         <div class="w-full flex flex-col text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
            <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
                <img src="https://source.unsplash.com/collection/1346951/150x150?sig=1" class="rounded-full shadow h-32 w-32">
            </div>
            <div class="flex-1 flex flex-col justify-center md:justify-start">
                <p class="font-semibold text-2xl">David</p>
                <p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel neque non libero suscipit suscipit eu eu urna.</p>
                <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-blue-800 pt-4">
                    <a class="" href="#"> <i class="fab fa-facebook"></i> </a>
                    <a class="pl-4" href="#"> <i class="fab fa-instagram"></i> </a> 
                    <a class="pl-4" href="#"> <i class="fab fa-twitter"></i> </a> 
                    <a class="pl-4" href="#"> <i class="fab fa-linkedin"></i> </a>
                </div>
            </div>
        </div>
        </section>
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
            <x-frontend.tag />
        </aside>
     </div>
@endsection



