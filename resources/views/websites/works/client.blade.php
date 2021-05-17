{{-- our clients --}}
<div class="container mt-5">
    <div class="row" id="client">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="our-client text-center color-blue"> OUR CLIENT</div>
            <div class="row">
                @foreach ($ourClients as $key => $ourClient)
                    @if ($key<6) {{-- show 6x items --}}
                        <div class="col-lg-2 mt-5">
                            <div class="our-client-logo">
                                <a href="{{url('/detail', $ourClient->id)}}">
                                    <img class="image-fluid" width="100%" src="images/home/client.png" />
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div> 
</div>