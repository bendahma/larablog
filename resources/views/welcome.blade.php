@extends('layouts.frontendTemplate')


@section('hero')
<x-frontend.Hero />
@endsection

@section('content')

    

     <!-- Topic Nav -->
     <x-category-nav />

     <div class="container mx-auto flex flex-wrap py-6">

         <!-- Posts Section -->
         <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            <x-frontend.post-list />

         </section>

         <!-- Sidebar Section -->
         <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <x-frontend.tag />

            <x-frontend.codesnippets /> 

            

         </aside>

     </div>


@endsection