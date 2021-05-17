{{-- css style --}}
@push('websites-css')
    {{-- costom css --}}
    <link rel="stylesheet" href="{{asset('css/websites/career/career.css')}}">
@endpush

{{-- layouts --}}
@extends('layouts.web')

{{-- title --}}
@section('title', 'Career')

@section('content')
    <div class="container career">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h1 class="title text-center color-blue">Career</h1>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                {{-- VALIDATION:: --}}
                @if (count($errors) > 0)
                    <div class="alert alert-danger">    
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- FORM :: --}}
                <form action="{{route('store')}}" method="post" id="career" name="career" onsubmit="validation()" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input placeholder="Name" class="form-control " id="name" name="name" type="text" >
                        <p id="name-error" class="text-danger"></p>
                    </div>
                    <div class="form-group input-mail-phon-career" >
                        <input placeholder="Mail" class="form-control" id="email" name="email" type="email" >
                        <input placeholder="Phone" class="form-control phone-num" id="phone" name="phone" type="tel" >
                    </div>

                    {{-- UPLOAD :: FILE && MESSAGE --}}
                    <div class="form-group input-msg-upload">
                        <textarea placeholder="Message" class="form-control msg" name="message"  type="mail" cols="14" rows="1"></textarea>
                        <div class="file-upload" >
                            <label for="cv-file-input" style="width: 100%;">
                                <small class="form-control" id="get-cv-file">CV</small>
                                <i class="fa fa-upload" aria-hidden="true"></i>
                            </label>
                            <input type="file" id="cv-file-input" name="cv_path" class="form-control d-none" />
                        </div>

                        <div class="file-upload">
                            <label for="cl-file-input" style="width: 100%;">
                                <small class="form-control" id="get-cl-file">Cl</small>
                                <i class="fa fa-upload" aria-hidden="true"></i>
                            </label>
                            <input id="cl-file-input" name="cl_path" class="form-control d-none" multiple type="file"/>
                        </div>

                        <div class="file-upload">
                            <label for="attachment-file-input" style="width: 100%;">
                                <small class="form-control" id="get-attachment-file">Extra Attachment</small>
                                <i class="fa fa-upload" aria-hidden="true"></i>
                            </label>
                            <input id="attachment-file-input" name="attachment_path"  class="form-control d-none"  type="file"/>
                        </div>

                    </div>

                    <button type="submit" class="career-submission">Submission<i class="fas fa-angle-right ml-5"></i></button>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
<script>
            
    var bytePerMb = 1048576; //byte
    var maxSize = 5*bytePerMb;

    // // GET CV FILE NAME FROM INPUT
    $("#cv-file-input").on("change", function(){
        $("#get-cv-file").empty();
        var cvfile = $("#cv-file-input");
        var lengthCV = cvfile[0].files.length;
        var itemCV = cvfile[0].files;
        var frageCV = "";
        
       if(length>0){
        for(var i=0; i<lengthCV; i++){
            var filecvname = itemCV[i].name;
            var filecvsize = itemCV[i].size;
            var filecvtype = itemCV[i].type;
            var cv_error = document.getElementById('cv-error');
            if(filecvsize > maxSize){
                cv_error.innerHTML = "Your file is bigger than 5mb!";
            }else{
                frageCV += filecvname + " " +(filecvsize/bytePerMb).toFixed(2) + " MB " + filecvtype;
            }
        }
        $("#get-cv-file").append(frageCV);
        }
    });

    // GET CL FILE NAME FROM INPUT
    $("#cl-file-input").on("change", function(){
        $("#get-cl-file").empty();
        var clfile = $("#cl-file-input");
        var lengthCL = clfile[0].files.length;
        var itemCL = clfile[0].files;
        var frageCL = "";
        var cl_error = document.getElementById('cl-error');
       if(length>0){
        for(var j=0; j<lengthCL; j++){
            var fileclname = itemCL[j].name;
            var fileclsize = itemCL[j].size;
            var filecltype = itemCL[j].type;
            if(fileclsize > maxSize){
                cl_error.innerHTML = "Your file is bigger than 5mb!";
            }else{
                frageCL += fileclname + " " + (fileclsize/bytePerMb).toFixed(2) + " MB " + filecltype;
            }
        }
        $("#get-cl-file").append(frageCL);
        }
    });

    // GET ATTACHMENT FILE NAME FROM INPUT
    $("#attachment-file-input").on("change", function(){
        $("#get-attachment-file").empty();
        var att = $("#attachment-file-input");
        var attLength = att[0].files.length;
        var itemAtt = att[0].files;
        var frageAtt = "";
        var att_error = document.getElementById('att-error');

       if(length>0){
        for(var i=0; i<attLength; i++){
            var fileattname = itemAtt[i].name;
            var fileattsize = itemAtt[i].size;
            var fileatttype = itemAtt[i].type;
            var test = document.getElementById('cv_error');
            if(fileattsize > maxSize){
                att_error.innerHTML = "Your file is bigger than 5mb!";
            }else{
                frageAtt += fileattname + " " + (fileattsize/bytePerMb).toFixed(2) + " MB " + fileatttype;
            }
        }
        $("#get-attachment-file").append(frageAtt);
        }
    });

    // HIDE:: STAY IN TOUCH
    var stayintouch = document.getElementById("stay-intouch");
    stayintouch.style.display = "none";

    </script>
@endsection