@extends('layouts.frontendTemplate')


@section('header')
<header class="">
    <div class="h-2/3 bg-opacity-10  flex items-center justify-center object-cover " style="background-image: url('{{asset('/img/code-snippets.jpg')}}')">
        <div class="bg-opacity-80 h-full w-full flex flex-col justify-between bg-black">
        
        <x-frontend.nav />

        <div class="h-2/3 flex flex-col items-start  m-28">
            <h1 class="font-bold  text-gray-100 uppercase tracking-wide text-4xl " > Code snippet </h1>
           <p class="font-bold  text-gray-100 text-xl my-6">
                A small region of re-usable clear-objectif and piece of code examples . . . </p>
        </div>
        
      </div>
    </div>
</header>
@endsection

@section('content')

    <div class="flex flex-wrap justify-center  overflow-hidden my-10">
        @foreach ($snippets as $snippet)
            <div class="w-1/4 overflow-hidden mx-3  my-4 flex flex-col items-center">
                    <a href="#" class="hover:opacity-75 shadow cursor-pointer"> <img src="{{asset($snippet->imageUrl)}}" class="" > </a>
                    <span class="mt-2"> {{$snippet->title}} </span>
            </div> 
         @endforeach
        </div>
        <div class=" my-6 flex justify-center">
            {{$snippets->links()}}
        </div>
@endsection














