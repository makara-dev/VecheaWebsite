{{-- messange --}}
<div class="row text-white" id="messange">
    <div class="col-lg-2 col-md-12 col-sm-12"></div>
    <div class="col-lg-8 col-md-12 col-sm-12 bg-blue">

        <div class="cards">
            <div class="header text-center mb-5" style="font-size: 18px;">Send Us Message</div>
            {{-- form input --}}
            <form action="{{url('/sendmail')}}" enctype="multipart/form-data"  method="POST">
                @csrf
                <div class="row row-space">

                    {{-- first name --}}
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="input-group">
                            <label for="fname">First Name</label>
                            <input class="input" type="text" name="fname" id="fname">
                        </div>
                    </div>

                    {{-- last name --}}
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="input-group">
                            <label for="lname">Last Name</label>
                            <input class="input" type="text" name="lname">
                        </div>
                    </div>

                </div>

                <div class="row row-space">

                    {{-- phone number --}}
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="input-group">
                            <label for="phone">Phone Number</label>
                            <input class="input" type="number" name="phone" id="phone">
                        </div>
                    </div>

                    {{-- email address --}}
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="input-group">
                            <label for="email">Email Address</label>
                            <input class="input" type="email" name="email" id="email">
                        </div>
                    </div>

                </div>

                {{-- text messange --}}
                <div class="input-group" style="border: none;">
                    <label for="messange">Messange</label>
                    <textarea name="messange" cols="50" rows="5"></textarea>
                </div>
                {{-- end text messange --}}
                
                <div class="d-flex flex-row align-items-center">
                    <div class="ver-line mb-2"></div>
                    {{-- button submit --}}
                    <input type="hidden" id="token" name="token">
                    <button class="btn" style="padding: 2px;" type="submit"><span class="material-icons">send</span></button>
                </div>
                
            </form>
            {{-- end form input --}}
        </div>

    </div>
    <div class="col-lg-2 col-md-12 col-sm-12"></div>
</div>