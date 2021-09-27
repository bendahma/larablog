<div class="h-screen  " style="background-image: url({{asset('/img/code-snippets.jpg')}})">
    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-opacity-80 bg-black h-full w-full">

        <div>
            {{ $logo }}
        </div>
        
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-200 shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</div>
