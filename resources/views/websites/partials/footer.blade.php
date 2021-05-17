{{-- BEING: footer container--}}
<footer id="footer">

    <div class="container-fluid">
        <section class="subscribe">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 l-side bg-blue"></div>
    
                {{-- stay in touch --}}
                <div class="col-lg-6 col-md-12 col-sm-12 r-side p-5 bg-gray " id="stay-intouch">
                    <div class="row">
                      <div class="col-lg-2 col-md-2 col-sm-12"></div>
                      <div class="col-lg-8 col-md-8 col-sm-12">
                          <p class="text-white font-weight-bold fs-18" style="font-size: 17px;">Stay in touch</p>
                          {{-- description --}}
                          <div class="description text-white">
                              Subscribe for our monthly roundup of great free resources and updates.
                          </div>
  
                          {{-- form --}}
                          <form action="#" method="POST">
                            {{-- input email --}}
                            <div class="input-group mb-3 mt-4">
                              <input type="text" class="form-control p-3 border-radius-left" placeholder="Email Address">
                              <div class="input-group-append">
                                  <button type="submit" class="btn pl-4 pr-4 text-white bg-blue border-radius-right">SENT</button>
                              </div>
                            </div>
                          </form>
                            
                        </div>
    
                        <div class="col-lg-2 col-md-2 col-sm-12"></div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="footer mt-3">
            <div class="row p-4 bg-blue">
              <div class="col-12 text-center">
                {{-- logo footer --}}
                <img src="{{url('images/footer/logo-footer.png')}}" alt="logo footer" width="171px" height="121px" class="img-fluid">
                {{-- icon social in footer --}}
                <div class="social">
                    <img src="{{url('images/footer/fb.png')}}" alt="fb footer" class="img-fluid">
                    <img src="{{url('images/footer/twitter.png')}}" alt="twitter footer" class="img-fluid">
                    <img src="{{url('images/footer/h.png')}}" alt="h footer" class="img-fluid">
                    <img src="{{url('images/footer/instagram.png')}}" alt="instagram footer" class="img-fluid">
                    <img src="{{url('images/footer/linkedin.png')}}" alt="linkedin footer" class="img-fluid pr-0">
                </div>
                <div class="desciption">
                    Vichea Solution. All rights reserved
                </div>
              </div>
            </div>
        </section>
    
    </div>
</footer>
{{-- END: footer container --}}

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v9.0'
    });
  };
  (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
  attribution="setup_tool"
  page_id="106879214030146">
</div>

<!-- Load Facebook SDK for JavaScript -->
{{-- <div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v9.0'
    });
  };

    (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div class="container">
    <!-- Your Chat Plugin code -->
  <div class="fb-customerchat"
    attribution="setup_tool"
    page_id="110328767760787"
    logged_in_greeting="Hello...! How can we help you?"
    logged_out_greeting="Hello...! How can we help you?">
  </div>
</div> --}}