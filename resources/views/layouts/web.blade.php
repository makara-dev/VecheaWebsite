<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- CSRF Token  --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Title  --}}
    <title>
        @yield('title') &mdash; 
        {{ env('APP_NAME') }}
    </title>
    
    {{-- bootstrap --}}
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{-- material icon --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    {{-- <link  type="text/css" rel="stylesheet" href="{{ asset('css/material-icons.min.css') }}" /> --}}
    
    {{-- font  --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
   
    
    {{-- Styles  --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/websites/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/websites/header/header.css') }}" rel="stylesheet">
    <link href="{{ asset('css/websites/footer/footer.css') }}" rel="stylesheet">

    {{-- Customize Styles --}}
    @stack('websites-css')
    <style>
        .grecaptcha-badge { 
           
}
    </style>

</head>
<body>
    <header>
        @include('websites.partials.header')
    </header>

    <main id="body">
        @yield('content')
    </main>

    <footer>
        @include('websites.partials.footer')
    </footer>
</body>

{{-- Script --}}
    {{-- jquery --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    {{-- google recaptcha --}}
    <script src="https://www.google.com/recaptcha/api.js?render=6LeAwHYaAAAAACrxIvtmMcQKRI30-npdCEP7ZJt5"></script>
    {{-- custom scripts --}}
    <script src="{{ asset('js/websites/header.js') }}"></script>
    <script src="{{asset('js/recaptchar-v3.js')}}"></script>

    @yield('script')
    
    <script>
        // recatpcha token Version 3
        generateV3RecaptcharToken('6LeAwHYaAAAAACrxIvtmMcQKRI30-npdCEP7ZJt5', '#token');
    </script>

</html>