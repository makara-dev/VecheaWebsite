{{-- layout --}}
@extends('dashboard.layouts.app')
 
{{-- BEING: update blog Content --}}
@section('main-content')

<div class="container-fluid" id="blog-create">

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12"></div>
            <div class="col-lg-6 col-md-6 col-sm-12">

                <div class="card">
                    <div class="card-header bg-blue">
                        <h4 class="text-center text-white text-uppercase">update blog</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{url('admin/blog/update', $blog->id )}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="{{$blog->title}}" placeholder="title" class="form-control" required>
                            </div>
    
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" placeholder="description" id="description" cols="30" rows="3" class="form-control">{{$blog->description}}</textarea>
                            </div>
    
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" value="{{$blog->image}}" name="image" class="form-control">
                            </div>
    
                            <div class="form-group">
                                <label for="detail">Detail of blog</label>
                                <textarea name="detail" placeholder="detail of blog" id="detail" cols="30" rows="3" class="form-control">{{$blog->detail}}</textarea>
                            </div>
    
                            <div class="from-group">
                                <button type="submit" class="btn color-blue float-right">UPDATE</button>
                                <button type="button" class="btn text-danger float-right" data-dismiss="modal">DISCARD</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12"></div>
        </div>
    </div>    

</div>

@endsection
{{-- END: update blog container --}}