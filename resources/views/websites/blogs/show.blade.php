{{-- css style --}}
@push('websites-css')
    {{-- costom css --}}
    <link rel="stylesheet" href="{{asset('css/websites/blogs/show.css')}}">

@endpush

{{-- layouts --}}
@extends('layouts.web')

{{-- title --}}
@section('title', 'Blog Detail')

{{-- BEING: detail blog container --}}
@section('content')

<div class="container-fluid" id="blog-detail">

    <div class="container text-center">
        {{-- title --}}
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header-title text-center color-blue">{{$blog->title}}</div>
                {{-- description --}}
                <div class="description-blog mt-5">{{$blog->description}}</div>
            </div>
        </div>

        {{-- image --}}
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                <div class="image-blog">
                    <div>
                        <img src="/images/blogs/{{$blog->image}}" width="100%" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        {{-- detail of blog --}}
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                <div class="detail-blog">{{$blog->detail}}</div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 mt-5">
                <div class="vertical-line"></div>
                <div class="request-proposal text-center mt-5 font-weight-bold">
                    <p>Request a Proposal.</p>
                </div>
                <div class="info mt-4">
                    <p>
                        If you would like to #workwithmad then send us an email at <span class="color-blue font-weight-bold">md@vicheasolutions.com</span>
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
{{-- END: detail blog container --}}