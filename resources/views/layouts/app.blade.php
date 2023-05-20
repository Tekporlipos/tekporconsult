<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <link rel="icon" src="{{ asset('images/favicon.png') }}" type="image/x-icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TekporAcademy</title>
@include('include/head')
 @include('include.header')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
	<link rel="stylesheet" href=" {{ asset('css/style.css') }}">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    
    <div id="app">
  
  
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  
      @include('include.header')
      
        <main class="py-4" style="background-image: url({{ asset('images/bg_5.jpg') }});">
            @yield('content')
        </main>
    </div>
   
   
    @include('include/footer')
    
    @include('include/down')


</body>
</html>
