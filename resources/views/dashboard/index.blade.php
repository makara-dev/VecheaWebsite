{{-- stylesheet --}}
@push('websites-css')
    {{-- custom css --}}
    <link rel="stylesheet" href="{{asset('css/dashboard/blogs/style.css')}}">

@endpush

{{-- layout --}}
@extends('dashboard.layouts.app')
 
{{-- BEING: Home Content --}}
@section('main-content')
    <div class="container" id="view_blog">
        <h2 class="color-blue">Blog</h2>

        <div class="row mt-5">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="btn-add">
                    <a href="{{url('admin/blog/create')}}" class="btn bg-blue text-white text-center pl-4 pr-4 pt-2 pb-2">ADD BLOG</a>                        
                    </button>
                </div>

                <table class="table table-striped mt-4">
                    <thead class="bg-blue text-white">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Detail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{$blog->id}}</td>
                                <td>{{$blog->title}}</td>
                                <td class="truncate">{{$blog->description}}</td>
                                <td>
                                    <img class="img_blog" src="/images/blogs/{{$blog->image}}">
                                </td>
                                <td class="truncate">{{$blog->detail}}</td>
                                <td>
                                    {{-- edit --}}
                                    <a href="{{url('admin/blog/edit', $blog->id )}}" class="blog-icon">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    {{-- delete --}}
                                    <a href="{{url('admin/blog/destroy', $blog->id )}}" class="blog-icon" onclick="return confirm('Are you sure to delete this blog ?')">
                                        <i class="fa fa-trash text-danger" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
        
                    </tbody>
                </table>

            </div>
        </div>

  </div>  
@endsection