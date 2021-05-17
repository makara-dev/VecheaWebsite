{{-- stylesheet --}}
@push('websites-css')
    {{-- custom css --}}
    <link rel="stylesheet" href="{{asset('css/websites/service/elv.css')}}">
    <link rel="stylesheet" href="{{asset('css/websites/home/home.css')}}">

@endpush

{{-- layout --}}
@extends('layouts.web')

{{-- title --}}
@section('title', 'Service')

@section('content')

<div class="container" id="elv">
    <div class="row">
        <div class="col-12">
            <h1 class="title text-center color-blue ">Elv System</h1>
        </div>
    </div>
    <p class="description mt-5 text-center">Established in 2016, GBS is an authorised coffee machine distributor 
        in Cambodia for various international brands including Nuova Simonelli, 
        Victoria Arduino and many more. Being a one-stop destination for every 
        coffee shop owner, the company also offers other products such as grinders, blenders, 
        ingredients and cleaning solutions.</p>
        <div class="row " >
            <div class="col-12 mt-3 " id="web">
                <div class="blank-card bg-secondary"></div>
            </div>
        </div>
    </div>
    
    <div class="blank-card bg-secondary mobile hidden mt-4" id="mobile"></div>
    
    @endsection
    
    {{-- SCRIPT --}}
    @section('script')
        {{-- custom script --}}
        <script src="{{asset('js/websites/client_detail.js')}}"></script>
        <script>
         var cardmobile = document.getElementById("mobile");
         var web = document.getElementById("web");
         if ( $(window).width() <= 992 )  {
                web.style.display = "none";
        }else{
            web.style.display = "inline";
            cardmobile.style.display = "none";
        }
    // HIDE STAY IN TOUCH ::
    var stayintouch = document.getElementById("stay-intouch");
    stayintouch.style.display = "none";

    </script> 
@endsection