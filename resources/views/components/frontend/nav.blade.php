<nav {{ $attributes->merge(['class' => 'w-full py-4 bg-transparent']) }}>
    <div class="w-full flex justify-between container items-center">
        <nav class="mx-5">
            <ul class="text-gray-100 uppercase font-extrabold  text-md">
                <li><a href="{{url('/')}}" class="tracking-widest text-xl">LARABLOG</a></li>
            </ul>
        </nav>
        <nav class="">
            
            <ul class="flex items-center justify-between font-semibold text-sm text-gray-100 uppercase no-underline">
                <li class="flex items-center px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                      </svg>
                    <a class="hover:text-gray-200 hover:underline pl-1" href="{{route('contact')}}">Contact us</a>
                </li>
                @if (Route::has('login'))
                    @auth
                       <li class="flex items-center px-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                          </svg>
                            <a href="{{ url('/dashboard') }}" class="hover:text-gray-200 hover:underline pl-1 cursor-pointer">Dashboard</a>
                        </li> 
                       <li class="flex items-center px-2 text-xs">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                          </svg>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <input type="submit" class="bg-transparent cursor-pointer text-xs" value="Logout" />
                            </form>
                        </li> 
                    @else
                        <li class="flex items-center px-2 text-xs">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                              </svg>
                            <a href="{{ route('login') }}"class="hover:text-gray-200 hover:underline pl-1 text-xs cursor-pointer">Log in</a>
                        </li> 

                        
                    @endauth
                
                @endif
            </ul>
        </nav>

        {{-- <div class="flex items-center text-lg no-underline text-white pr-6">
            <a class="" href="#">
                <i class="fab fa-facebook"></i>
            </a>
            <a class="pl-6" href="#">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="pl-6" href="#">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="pl-6" href="#">
                <i class="fab fa-linkedin"></i>
            </a>
        </div> --}}

    </div>

</nav>