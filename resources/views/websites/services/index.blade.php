{{-- stylesheet --}}
@push('websites-css')
    {{-- custom css --}}
    <link rel="stylesheet" href="{{asset('css/websites/service/service.css')}}">
    <link rel="stylesheet" href="{{asset('css/websites/home/home.css')}}">
@endpush

{{-- layout --}}
@extends('layouts.web')

{{-- title --}}
@section('title', 'Service')

{{-- BEING: service container --}}
@section('content')

<div class="container service">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h1 class="title text-center color-blue">Our Service</h1>
        </div>
    </div>
</div>

<div class="card-wrapper mt-5">
    {{-- SOFTWARE --}}
    <div class="service-wrapper bg-blue ">
        <a href="{{url('/service/software')}}" class="text-decoration-none text-center">
        <div class="icons" >
            <div><img class="image-fluid icon" src="images/service/service1.png" /></div>
            <div class="sub-title text-white ">Software Mobile Application</div>
        </div>
        </a>
    </div>

    {{-- ELV --}}
    <div class="service-wrapper bg-blue ">
        <a href="{{url('/service/elv')}}" class="text-decoration-none text-center">
        <div class="icons" >
            <div><img class="image-fluid icon" src="images/service/service2.png" /></div>
            <div class="sub-title text-white ">elv system</div>
        </div>
        </a>
    </div>

    {{-- HOSTING --}}
    <div class="service-wrapper bg-blue ">
        <a href="{{url('/service/hosting')}}" class="text-decoration-none text-center">
        <div class="icons" >
            <div><img class="image-fluid icon" src="images/service/service3.png" /></div>
            <div class="sub-title text-white ">Web hosting </div>
        </div>
        </a>
    </div>
  

    {{-- DATA --}}
    <div class="service-wrapper bg-blue ">
        <a href="{{url('/service/datanetwork')}}" class="text-decoration-none text-center">
        <div class="icons" >
            <div><img class="image-fluid icon" src="images/service/service4.png" /></div>
            <div class="sub-title text-white ">data center Network</div>
        </div>
        </a>
    </div>
   

</div>

@endsection
{{-- END: service container --}}

{{-- script --}}
@section('script')
    {{-- custom script --}}
    <script src="{{asset('js/websites/client_detail.js')}}"></script>
    <script>
        onPageScrollChangeNavbarColor('#body','#header');
        if($(window).width() >= 992 ){
            addClass('.adding', 'container');
        }
    // HIDE STAY IN TOUCH ::
    var stayintouch = document.getElementById("stay-intouch");
    stayintouch.style.display = "none";

    </script> 
@endsection