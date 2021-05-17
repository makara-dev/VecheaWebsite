{{-- stylesheet --}}
@push('websites-css')
{{-- custom css --}}
<link rel="stylesheet" href="{{asset('css/websites/home/home.css')}}">
<link rel="stylesheet" href="{{asset('css/websites/work/client.css')}}">
<link rel="stylesheet" href="{{asset('css/websites/about/about-us.css')}}">
<link rel="stylesheet" href="{{asset('css/websites/contact/messange.css')}}">

@endpush

{{-- layout --}}
@extends('layouts.web')

{{-- section title --}}
@section('title', 'Home')

{{-- BEING: Home Content --}}
@section('content')
    <div class="container-fluid text-center" id="home">

        {{-- panorama --}}
        <div class="row">
            <div class="col-lg-12 co-md-12 col-sm-12 color-blue">
                <h4 class="title font-weight-bold">WELCOME TO VICHEA</h4>
                <div class="descrption mt-4">
                    INFORMATION TECHNOLOGY SOLUTION
                </div>
            </div>
        </div>

        {{-- services --}}
        <div class="row bg-product text-white mt-3" id="service">

            {{-- Software Development --}}
            <div class="col-lg-3 mt-4 pl-0 padding-left">
                <a href="{{url('/service/software')}}" class="text-decoration-none">
                    <div class="icons bg-blue-light">
                        <img class="image-fluid icon" src="images/home/network.png"/>
                        <div class="sub-title text-white">SOFTWARE & MOBILE APPLICATION</div>
                    </div>
                </a>
            </div>

            {{-- Website service --}}
            <div class="col-lg-3 mt-4 pr-0 padding-right">
                <a href="{{url('/service/elv')}}" class="text-decoration-none">
                    <div class="icons bg-blue-light">
                        <img class="image-fluid icon" src="images/home/transformer.png" />
                        <div class="sub-title text-white">ELV SYSTEM</div>
                    </div>
                </a>
            </div>

            {{-- web hosting --}}
            <div class="col-lg-3 mt-4 pl-0 padding-left">
                <a href="{{url('/service/hosting')}}" class="text-decoration-none">
                    <div class="icons bg-blue-light ">
                        <img class="image-fluid icon" src="images/home/hosting.png" />
                        <div class="sub-title text-white">web hosting</div>
                    </div>
                </a>
            </div>

                {{-- Mobile application --}}
                <div class="col-lg-3 mt-4 pr-0 padding-right">
                    <a href="{{url('/service/datanetwork')}}" class="text-decoration-none">
                        <div class="icons bg-blue-light">
                            <img class="image-fluid icon" src="images/home/software.png" />
                            <div class="sub-title text-white">DATA CENTER NETWORKING</div>
                        </div>
                    </a>
                </div>
    
            </div>

         {{-- btn --}}
         <div class="margin-top">
            <a href="{{url('contact')}}" class="text-decoration-none font-weight-bold text-white">
                <div class="button-contact-us bg-blue" style="padding-top: 19px;">
                    CONTACT US
                </div>
            </a>
        </div>

        {{-- our clients --}}
        @include('websites.works.client')

        <div class="mt-5">
            {{-- about us --}}
            @include('websites.about-us.about-us')
        </div>

        {{-- messange --}}
        <div id="about-infomation">
            <div class="titles color-blue">
                CONTACT US
            </div>
        </div>
        @include('websites.contacts.messange')
  
    </div>

@endsection
{{-- END: Home Content --}}

{{-- script --}}
@section('script')
    
    {{-- custom js --}}
    <script src="{{asset('js/websites/home.js')}}"></script>
    <script src="{{asset('js/websites/contact.js')}}"></script>
    <script>
        onPageScrollChangeNavbarColor('#body','#header');
    </script>
    
@endsection
