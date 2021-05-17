{{-- css style --}}
@push('websites-css')
    {{-- costom css --}}
    <link rel="stylesheet" href="{{asset('css/websites/blogs/blog.css')}}">

@endpush

{{-- layouts --}}
@extends('layouts.web')

{{-- title --}}
@section('title', 'Blog')

{{-- BEING: blog container --}}
@section('content')

<div class="container-fluid" id="blog">

    <div class="addcontainer">
        {{-- title --}}
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="header-title text-center color-blue">
                    Blog
                </div>
            </div>
        </div>

        {{-- blog --}}
        <div class="row">
            @foreach ($blogs as $key => $blog)
                <div class=" {{ (($key+1)%3 == 0) ? 'col-lg-12' : 'col-lg-6' }} col-md-12 col-sm-12 margin-top remove-bg-blue bg-blue mt-5">
                    <a href="{{url('/blog/show', $blog->id)}}" class="text-decoration-none ">
                        <div class="mouse-hover">
                            {{-- title's blog --}}
                            <div class="title-blog text-center add-bg-blue text-uppercase text-white">
                                <p>{{$blog->title}}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
        
    </div>

    <!-- Modal edit department -->
    <div class="modal" id="editblog">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title color-blue text-uppercase" style="margin: 0 auto;">update blog</h4>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                    <form id="modaleditblog" action="" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="edit_title" id="edit_title" placeholder="title" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="edit_description" placeholder="description" id="edit_description" cols="30" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <div class="row space">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <label for="edit_image">Image</label>
                                    <input type="file" name="edit_image" class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="image-blog">
                                        <img width="100%" src="" id="show_image" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="edit_detail">Detail of blog</label>
                            <textarea name="edit_detail" placeholder="detail of blog" id="edit_detail" cols="30" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="from-group">
                            <button type="submit" class="btn color-blue float-right">UPDATE</button>
                            <button type="button" class="btn text-danger float-right" data-dismiss="modal">DISCARD</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Modal edit blog -->

</div>

@endsection
{{-- END: blog container --}}

{{-- script --}}
@section('script')
    {{-- custom script--}}
    <script src="{{asset('js/websites/client_detail.js')}}"></script>
    <script src="{{asset('js/websites/blog.js')}}"></script>

@endsection