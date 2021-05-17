{{-- stylesheet --}}
@push('websites-css')
    {{-- custom css --}}
    <link rel="stylesheet" href="{{asset('css/websites/work/work.css')}}">
    <link rel="stylesheet" href="{{asset('css/websites/work/client.css')}}">

@endpush

@extends('layouts.web')

{{-- title --}}
@section('title', 'Works')

{{-- BEING: work content --}}
@section('content')

<div class="work-container" id="work">
    {{-- work --}}
    <div class="our-work-wrapper">
        <div class="title text-center">
            OUR WORK
        </div>
        <div class="our-work">
            @for($i = 1; $i <= 12; $i++)
                <div class="shape"></div>
            @endfor
        </div>
    </div>
    <!-- Client container -->
    @include('websites.works.client')
</div>

@endsection
{{-- END: work content --}}