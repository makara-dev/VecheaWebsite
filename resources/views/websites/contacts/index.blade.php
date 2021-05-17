{{-- stylesheet --}}
@push('websites-css')
    {{-- custom css --}}
    <link rel="stylesheet" href="{{asset('css/websites/contact/contact.css')}}">
    <link rel="stylesheet" href="{{asset('css/websites/contact/messange.css')}}">

@endpush

{{-- layouts --}}
@extends('layouts.web')

{{-- title --}}
@section('title', 'Contact Us')

{{-- BEING: contact container --}}
@section('content')

<div class="container-fluid" id="contact">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 p-0">
            <img id="img" src="images/contact/bg-mobile.png" class="img-fluid bg-mobile" alt="missing image" width="100%" height="100%">
            <div class="bg-text text-white">
                <div class="centers">
                    <h1 class="font-weight-bold">Contact Us</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and.</p>
                </div>
            </div>
        </div>

    </div>

    {{-- messange --}}
    @include('websites.contacts.messange')

    {{-- get in touch with us --}}
    <section class="touch text-center">
        <div class="heading1">Get in touch with us</div>
        <div class="description mt-3" style="font-size: 18px;">Little description</div>

        <div class="row" style="margin-top: 75px;">
            <div class="col-lg-3 col-md-12 col-sm-12"></div>
            {{-- phone --}}
            <div class="col-lg-2 col-md-12 col-sm-12">
                <span class="material-icons">phone_iphone</span>
                <p>Phone</p>
                <p>Tel (+855) 11 626 666 <br>
                    Tel (+855) 81 646 269</p>
            </div>
            {{-- address --}}
            <div class="col-lg-2 col-md-12 col-sm-12 borders">
                <span class="material-icons">location_on</span>
                <p>Address</p>
                <p>No. 36, St 232 Corner St 115, Veal Vong,
                7 Makara, Phnom Penh, Cambodia</p>
            </div>
            {{-- email --}}
            <div class="col-lg-2 col-md-12 col-sm-12">
                <span class="material-icons">mark_email_unread</span>
                <p>Email</p>
                <p>md@vicheasolutions.com <br> md@vicheasolutions.com</p>
            </div>

            <div class="col-lg-3 col-md-12 col-sm-12"></div>
        </div>
    </section>

</div>

@endsection
{{-- BEING: contact container --}}

{{-- script --}}
@section('script')
    {{-- custom script --}}
    <script src="{{asset('js/websites/contact.js')}}"></script>
    <script>
        onPageScrollChangeNavbarColor('#body','#header');
    </script>

@endsection