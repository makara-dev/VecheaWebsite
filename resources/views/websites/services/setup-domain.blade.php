{{-- stylesheet --}}
@push('websites-css')
    {{-- custom css --}}
    <link rel="stylesheet" href="{{asset('css/websites/service/setup-domain.css')}}">
    <link rel="stylesheet" href="{{asset('css/websites/service/web-hosting.css')}}">

@endpush

{{-- layout --}}
@extends('layouts.web')

{{-- title --}}
@section('title', 'SetUp Domain')

{{-- BEING: Setup domain container --}}
@section('content')

<div class="container-fluid" id="setup-domain">

    {{-- service title --}}
    <div class="d-flex flex-row">
        <div class="icon-arrow-back pt-2"><span class="material-icons color-gray font-weight-bold">arrow_back_ios</span></div>
        <div class="hosting-heading text-uppercase color-blue" style="margin: 0 auto;">Web Hosting</div>
    </div>

    {{-- description --}}
    <div class="row text-center text-uppercase color-blue margin-top">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="hosting-title font-weight-bold">
                Setup your domain
            </div>
            <div class="hosting-description mt-3">
                Established in 2016, GBS is an authorised coffee machine
            </div>
        </div>
    </div>

    {{-- domain --}}
    <div class="addClassContainer">
        <div class="row" id="create-domain">
            {{-- creat new domain --}}
            <div class="col-lg-6 col-md-12 col-sm-12 bg-mobile remove-bg mt-5">
                <div class="addClassCard">
                    <div class="card-body mt-2 mb-2">
                        <div class="card-title text-center color-blue">Create a new domain</div>
                        {{-- form --}}
                        <form action="{{url('/payment')}}" method="get">
                            <div class="input-group mb-3 mt-4 padding-4">
                                <input type="text" class="form-control p-3 border-radius-left" placeholder="example">
                                <div class="input-group-append">
                                    <select id="lunch" class="selectpicker form-control pl-3 pr-3 text-white bg-blue border-radius-right" data-live-search="true" >
                                        <option>.com</option>
                                        <option>.kh</option>
                                        <option>.test</option>
                                    </select>
                                </div>
                            </div>
                            {{-- btn submit --}}
                            <div class="form-group text-center domain-btn">
                                <button type="submit" class="btn text-white bg-blue pl-5 pr-5 pt-2 border-radius">NEXT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- use domain existing --}}
            <div class="col-lg-6 col-md-12 col-sm-12 bg-mobile remove-bg mt-5">
                <div class="addClassCard">
                    <div class="card-body mt-2 mb-2">
                        <div class="card-title text-center color-blue">Use your Existing Domain</div>
                        {{-- form --}}
                        <form action="{{url('/payment')}}" method="get">
                            @csrf
                            <div class="input-group mb-3 mt-4 padding-4">
                                <input type="text" class="form-control p-3 border-radius" placeholder="example">
                            </div>
                            {{-- btn submit --}}
                            <div class="form-group text-center domain-btn">
                                <button type="submit" class="btn text-white bg-blue pl-5 pr-5 pt-2 border-radius">NEXT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
             
        </div>

    </div>

</div>

@endsection
{{-- END: Setup domain container --}}

{{-- script --}}
@section('script')
    {{-- custom script--}}
    <script src="{{asset('js/websites/client_detail.js')}}"></script>
    <script>
        onPageScrollChangeNavbarColor('#body','#header');
        if($(window).width() >= 992){
            addClass('.addClassContainer', 'container');
            addClass('.addClassCard', 'card bg-card');
            removeClass('.remove-bg', 'bg-mobile');
        }
    </script> 

@endsection