{{-- stylesheet --}}
@push('websites-css')
    {{-- custom css --}}
    <link rel="stylesheet" href="{{asset('css/websites/service/web-hosting.css')}}">

@endpush

{{-- layout --}}
@extends('layouts.web')

{{-- title --}}
@section('title', 'WEB Hosting')

{{-- BEING: Web hosting container --}}
@section('content')

<div class="container-fluid" id="hosting">

    {{-- service title --}}
    <div class="d-flex flex-row">
        <div class="icon-arrow-back pt-2"><span class="material-icons color-gray font-weight-bold">arrow_back_ios</span></div>
        <div class="hosting-heading text-uppercase color-blue" style="margin: 0 auto;">Web Hosting</div>
    </div>

    {{-- description --}}
    <div class="row text-center text-uppercase color-blue margin-top">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="hosting-title font-weight-bold">
                Hosting your domain
            </div>
            <div class="hosting-description mt-3">
                Established in 2016, GBS is an authorised coffee machine
            </div>
        </div>
    </div>

    {{-- hosting domain --}}
    <div class="container">
        <div class="row" id="domain">

            {{-- basic domail --}}
            <div class="col-lg-4 col-md-12 col-sm-12 mt-5" id="basic-domain">
                <div class="card">
                    {{-- card boody --}}
                    <div class="card-body">
                        <div class="heading color-skyblue text-center">
                            <div class="card-title">Basic</div>
                            {{-- price per month --}}
                            <p class="price">$10/mo*</p>
                        </div>
                        <div class="container" >
                            <div class="card-text" >
                                <div class="d-flex flex-row mt-3">
                                    <div class="done"><span class="material-icons font-weight-bold">done</span></div>
                                    <div class="text pl-2">Simple Text Here</div>
                                </div>
                            </div>
                            <div class="card-text">
                                <div class="d-flex flex-row mt-3">
                                    <div class="icon-close"><span class="material-icons font-weight-bold">clear</span></div>
                                    <div class="text pl-2">Other Text Title</div>
                                </div> 
                            </div>
                            <div class="card-text">
                                <div class="d-flex flex-row mt-3">
                                    <div class="icon-close"><span class="material-icons font-weight-bold">clear</span></div>
                                    <div class="text pl-2">Text Space Goes Here</div>
                                </div>
                            </div>
                            <div class="card-text">
                                <div class="d-flex flex-row mt-3">
                                    <div class="icon-close"><span class="material-icons font-weight-bold">clear</span></div>
                                    <div class="text pl-2">Description Space</div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    {{-- card footer --}}
                    <a href="{{url('/service/setup-domain')}}">
                        <div class="card-footer text-white text-center bg-skyblue mt-5">
                            Select
                        </div>
                    </a>
                </div>
            </div>
            
            {{-- premium domail --}}
            <div class="col-lg-4 col-md-12 col-sm-12 mt-5" id="premium-domain">
                <div class="card">
                    {{-- card boody --}}
                    <div class="card-body">
                        <div class="heading color-orange text-center">
                            <div class="card-title">Premium</div>
                            {{-- price per month --}}
                            <p class="price">$20/mo*</p>
                        </div>
                        <div class="container">
                            <div class="card-text">
                                <div class="d-flex flex-row align-items-center mt-3">
                                    <div class="done"><span class="material-icons font-weight-bold">done</span></div>
                                    <div class="text pl-2">Simple Text Here</div>
                                </div>
                            </div>
                            <div class="card-text">
                                <div class="d-flex flex-row align-items-center mt-3">
                                    <div class="icon-close"><span class="material-icons font-weight-bold">clear</span></div>
                                    <div class="text pl-2">Other Text Title</div>
                                </div> 
                            </div>
                            <div class="card-text">
                                <div class="d-flex flex-row mt-3">
                                    <div class="icon-close"><span class="material-icons font-weight-bold">clear</span></div>
                                    <div class="text pl-2">Text Space Goes Here</div>
                                </div>
                            </div>
                            <div class="card-text">
                                <div class="d-flex flex-row align-items-center mt-3">
                                    <div class="icon-close"><span class="material-icons font-weight-bold">clear</span></div>
                                    <div class="text pl-2">Description Space</div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    {{-- card footer --}}
                    <a href="{{url('/service/setup-domain')}}">
                        <div class="card-footer text-white text-center bg-orange mt-5">
                            Select
                        </div>
                    </a>
                </div>
            </div>

            {{-- standard domail --}}
            <div class="col-lg-4 col-md-12 col-sm-12 mt-5" id="standard-domain">
                <div class="card">
                    {{-- card boody --}}
                    <div class="card-body">
                        <div class="heading color-purple text-center">
                            <div class="card-title">Standard</div>
                            {{-- price per month --}}
                            <p class="price">$30/mo*</p>
                        </div>
                        <div class="container">
                            <div class="card-text">
                                <div class="d-flex flex-row align-items-center mt-3">
                                    <div class="done"><span class="material-icons font-weight-bold">done</span></div>
                                    <div class="text pl-2">Simple Text Here</div>
                                </div>
                            </div>
                            <div class="card-text">
                                <div class="d-flex flex-row align-items-center mt-3">
                                    <div class="icon-close"><span class="material-icons font-weight-bold">clear</span></div>
                                    <div class="text pl-2">Other Text Title</div>
                                </div> 
                            </div>
                            <div class="card-text">
                                <div class="d-flex flex-row mt-3">
                                    <div class="icon-close"><span class="material-icons font-weight-bold">clear</span></div>
                                    <div class="text pl-2">Text Space Goes Here</div>
                                </div>
                            </div>
                            <div class="card-text">
                                <div class="d-flex flex-row align-items-center mt-3">
                                    <div class="icon-close"><span class="material-icons font-weight-bold">clear</span></div>
                                    <div class="text pl-2">Description Space</div>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    {{-- card footer --}}
                    <a href="{{url('/service/setup-domain')}}">
                        <div class="card-footer text-white text-center bg-purple mt-5">
                            Select
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
{{-- END: Web hosting container --}}

{{-- script --}}
@section('script')
    {{-- custom script--}}
    <script>
        onPageScrollChangeNavbarColor('#body','#header');
    </script> 

@endsection