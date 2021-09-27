<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARABLOG - Blog build with Laravel 8</title>
    <meta name="author" content="kaddour bendahma Med El-ami">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-white h-screen font-family-karla">

        @if(Route::is('index'))
            @yield('hero')
        @else
            @yield('header')
        @endif
        
        @yield('content')

       
        <x-frontend.footer />
    

</body>
</html>