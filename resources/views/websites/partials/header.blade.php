{{-- BEING: header container --}}
<div class="container-fluid fixed-top" id="header">

  {{-- screen overlay --}}
  <div class="screen-overlay">
    <span class="material-icons btn-close">clear</span>
  </div>

  <div class="row">

    <div class="col-lg-4 col-md-12 col-sm-12">

      {{-- logo inage --}}
      <a href="/" class="navbar-brand d-inline">
        <img src="{{url('images/logos/vc-logo.png')}}" alt="logo image" width="50%" height="50%" class="img-fluid">
      </a>

      <div class="d-lg-none d-inline float-right color-blue">
        <span class="material-icons d-lg-none d-inline" data-trigger="#navbar_main">view_headline</span>
        <span data-trigger="#card_mobile" class="material-icons">apps</span>
      </div>

    </div>

    <div class="col-lg-8 col-md-4 col-sm-12">
      
      {{-- navbar contact --}}
      <nav id="navbar_main" class="mobile-offcanvas navbar navbar-dark">
        <ul id="ul" class="navbar-nav font-weight-bold">
          <li className="nav-item">
            <a href="{{url('about')}}" class="nav-link {{Request::path() === 'about' ? 'active' : ''}}">@lang('menu.about_menu')</a>
          </li>
          <li class="nav-item">
            <a href="{{url('service')}}" class="nav-link {{Request::path() === 'service' ? 'active' : ''}}">@lang('menu.service_menu')</a>
          </li>
          <li class="nav-item">
            <a href="{{url('work')}}" class="nav-link {{Request::path() === 'work' ? 'active' : ''}}">@lang('menu.work_menu')</a>
          </li>
          <li class="nav-item">
            <a href="{{url('career')}}"  class="nav-link {{Request::path() === 'career' ? 'active' : ''}}">@lang('menu.career_menu')</a>
          </li>
          <li class="nav-item">
            <a href="{{url('blog')}}"  class="nav-link {{Request::path() === 'blog' ? 'active' : ''}}">@lang('menu.blog_menu')</a>
          </li>
          <li class="nav-item" >
            <a href="#" data-trigger="#card_mobile" class="nav-link color-blue"><i class="fa fa-th" aria-hidden="true"></i></a>
          </li>

        </ul>

        {{-- btn colose mobile screen--}}
        <div class="offcanvas-buttom d-lg-none">
          <span class="material-icons btn-close">arrow_back_ios</span>
        </div>
    
      </nav> 

    </div>

  </div>

	{{-- get in touch with us --}}
  <section class="touch text-center bg-blue contact-mobile text-white contact-wrapper" id="card_mobile">
  <div class="container">
      <div class="row mt-4">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="logo-img pl-4">
            <img src="images/header/logo.png" width="80%" height="80%" alt="logo">
          </div>
        </div>
      </div>

      <div class="positions">
        <div class="heading1">Get in touch with us !</div>
        <div class="row mt-3">
            {{-- phone --}}
            <div class="col-lg-4 col-md-12 col-sm-12">
                <span class="material-icons">phone_iphone</span>
                <p>Phone</p>
                <p>Tel (+855) 11 626 666 <br>
                    Tel (+855) 81 646 269</p>
            </div>
            {{-- address --}}
            <div class="col-lg-4 col-md-12 col-sm-12 borders">
                <span class="material-icons">location_on</span>
                <p>Address</p>
                <p class="pl">No. 36, St 232 Corner St 115, Veal Vong,
                  7 Makara, Phnom Penh, Cambodia</p>
            </div>
            {{-- email --}}
            <div class="col-lg-4 col-md-12 col-sm-12">
                <span class="material-icons">mark_email_unread</span>
                <p>Email</p>
                <p>md@vicheasolutions.com <br> md@vicheasolutions.com</p>
            </div>
        </div>
      </div>

    </div>
  </section>

</div>
{{-- END: header container --}}