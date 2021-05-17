{{-- css style --}}
@push('websites-css')
    {{-- costom css --}}
    <link rel="stylesheet" href="{{asset('css/websites/about/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/websites/about/about-us.css')}}">

@endpush

{{-- layouts --}}
@extends('layouts.web')

{{-- title --}}
@section('title', 'About Us')

{{-- BEING: about container --}}
@section('content')

<div class="container-fluild" id="about">
    {{-- about info --}}
    @include('websites.about-us.about-us')

    {{-- our team --}}
    <section class="bg-blue our-team mt-5">
       <div class="container">
            <div class="titles text-center text-white">
                OUR TEAM
            </div>

            <div class="row">
              @for ($i = 1; $i <= 8; $i++)
                <div class="col-lg-3 mt-5">
                    <div class="image-our-team">
                        <div class="staff-info text-center">
                            <img src="images/about/intersection3.png" width="100%">
                            <div class="staff-name text-white pt-3">Name</div>
                            <div class="staff-position mt-2 pb-2">Position</div>
                        </div>
                    </div>
                </div>
              @endfor

            </div>
       </div>
    </section> 
    
</div>

@endsection
{{-- END: about container --}}

{{-- script --}}
@section('script')
    <script>
        onPageScrollChangeNavbarColor('#body','#header');
    </script>

@endsection