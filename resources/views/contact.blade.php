@extends('layouts.frontendTemplate')

@section('header')
    <x-frontend.Hero />
@endsection

@section('content')

<div class="container mx-auto flex flex-wrap py-6 ">

    <!-- Posts Section -->
    <section class="w-full md:w-1/2 bg-white p-10">
        <h1 class="text-4xl font-extrabold tracking-wide">Contact us</h1>
        <div class="flex mt-6 mb-4 gap-x-4 text-lg font-medium">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <span>(+213) 6 66 93 01 03 </span> / <span>(+213) 7 76 36 95 78</span>
        </div>
        
        <div class="flex mt-4 mb-4 gap-x-4 text-lg font-medium">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <span>mkaddourbendahma@gmail.com</span>
        </div>
        <div class="flex mt-4 mb-8 gap-x-4 text-lg font-medium">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <span>Ain Temouchent Ain Temouchent - Algeria</span>
        </div>
        <h1 class="text-4xl font-extrabold tracking-wide ">Send us a message </h1>
        @if(session()->has('message'))
        <div class="px-6 py-3 bg-blue-800 text-gray-100 font-semibold rounded shadow mt-3">
            {{ session()->get('message') }}
            </div>
        @endif
        
        <div class="flex gap-y-3 w-full mt-6 justify-center bg-gray-100 px-4 rounded shadow-sm">
            <form action="{{route('getMessage')}}" method="POST" class="w-full">
                @csrf
                <div class="mt-4 mb-2 ">
                    <label for="name" class="block text-sm font-medium text-gray-700">Full name * </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input type="text" name="name" class="focus:ring-blue-800 focus:border-blue-800 w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="John parker">
                    </div>
                    </div>
                <div class="mt-4 mb-2 ">
                    <label for="name" class="block text-sm font-medium text-gray-700">E-mail</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input type="email" name="email" class="focus:ring-blue-800 focus:border-blue-800 w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="john.parker@gmail.com">
                    </div>
                    </div>
                <div class="mt-4 mb-2 ">
                    <label for="name" class="block text-sm font-medium text-gray-700">Phone *</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input type="text" name="phone" id="" class="focus:ring-blue-800 focus:border-blue-800 w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="(213) 6 66 93 01 03">
                    </div>
                    </div>
                <div class="mt-4 mb-2 ">
                    <label for="name" class="block text-sm font-medium text-gray-700">Message *</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <textarea type="text" name="message" id="" cols="" rows="10" class="focus:ring-blue-800 focus:border-blue-800 w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" ></textarea>
                    </div>
                </div>
                <div class="flex justify-end">
                    <button class="bg-blue-800 text-gray-100 px-6 py-2 rounded-md shadow mb-6 hover:bg-blue-700 hover:text-gray-200 uppercase"> Send message </button>
                </div>
            </form>
        </div>
       

    </section>

    <section class="w-full md:w-1/2 py-10">

        <h1 class="text-4xl font-extrabold tracking-wide mb-6"> Visit us </h1>
        <div class="">
            <img src="{{asset('/img/map.png')}}" alt="">
        </div>
     </section>
</div>

@endsection