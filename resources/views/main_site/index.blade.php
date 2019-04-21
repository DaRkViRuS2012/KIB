@extends('layouts.main_layout')

@section('content')
	<div class="banner-silder">
    <div id="JiSlider" class="jislider">
      <ul>
        <li>
          <div class="w3layouts-banner-top">
            <div class="bs-slider-overlay">
              <div class="container">
                <!-- Slide Text Layer -->
                <div class="w3l-slide-text col-lg-6">
                  <h3 style="color:#414141" data-animation="animated zoomInRight">Have The Right Insurance</h3>
                  <p class="aos-init aos-animate" data-aos="fade-down">To Keep Your Family Safe</p>
                  <a  href="services.html" target="_blank" class="button-style" data-animation="animated fadeInDown" data-aos="fade-down">Get A Qutation</a>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="w3layouts-banner-top w3layouts-banner-top1">
            <div class="bs-slider-overlay">
              <div class="container">
                <div class="row">
                <!-- Slide Text Layer -->
                <div class="w3l-slide-text col-lg-6">
                   <h3 style="color:#3544ab;" data-animation="animated zoomInRight">KIB</h3>
                  <p class="aos-init aos-animate" data-aos="fade-down">Excepteur sint occaecat cupidatat non proident</p>
                  <a href="services.html" target="_blank" class="button-style" data-animation="animated fadeInDown" data-aos="fade-down">View
                    Our Services</a>
                </div>
                  <div class="w3l-slide-text col-lg-6">
                        <div class='circle-container'>
      <a style="color: white!important" href='#' class='center'>why why why why </a>
      <a href='#' class='deg0'><img style="border-radius:50%!important"  src='{{ asset('main_site/img/cover.jpg') }}'></a>
      <a href='#' class='deg45'><img style="border-radius:50%!important"  src='{{ asset('main_site/img/cover.jpg') }}'></a>
      <a href='#' class='deg95'><img style="border-radius:50%!important"  src='{{ asset('main_site/img/cover.jpg') }}'></a>
      <a href='#' class='deg135'><img style="border-radius:50%!important"  src='{{ asset('main_site/img/cover.jpg') }}'></a>
      <a href='#' class='deg180'><img style="border-radius:50%!important"  src='{{ asset('main_site/img/cover.jpg') }}'></a>
      <a href='#' class='deg225'><img style="border-radius:50%!important"  src='{{ asset('main_site/img/cover.jpg') }}'></a>
      <a href='#' class='deg267'><img style="border-radius:50%!important"  src='{{ asset('main_site/img/cover.jpg') }}'></a>
      <a href='#' class='deg315'><img style="border-radius:50%!important"  src='{{ asset('main_site/img/cover.jpg') }}'></a>
    </div>
                </div>
                </div>

              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="w3layouts-banner-top w3layouts-banner-top2">
            <div class="bs-slider-overlay">
              <div class="container">
                <!-- Slide Text Layer -->
                <div class="w3l-slide-text col-lg-7">
                  <h3 data-animation="animated zoomInRight">Why You Should Choose <span style="color:#202e9c">KIB</span></h3>
                  <p>
  <a style="font-size:25px;color:#414141;font-weight:bold" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
     <span class="right"></span>
    Reason1
  </a>
</p>
<div class="collapse" id="collapseExample1">
  <div class="card card-body" style="background-color: transparent;color: white;">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>


                <p>

  <a style="font-size:25px;color:#414141;font-weight:bold" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
      <span class="right" ></span>
    Reason2
  </a>
</p>
<div class="collapse" id="collapseExample2">
  <div class="card card-body" style="background-color: transparent;color: white;">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>

                <p style="margin-bottom:100px">

  <a style="font-size:25px;color:#414141;font-weight:bold" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
       <span class="right"></span>
    Reason3
  </a>
</p>
<div class="collapse" id="collapseExample3">
  <div class="card card-body" style="background-color: transparent;color: white;">
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  </div>
</div>
                </div>
              </div>
            </div>
          </div>
        </li>


@foreach ($sliders as $key => $slider)
	{{-- expr --}}

                <li>
          <div class="w3layouts-banner-top{{$key+4}}" style="background: url({{env('image_storage')}}/{{$slider->media->url}}) no-repeat 0px 0px;background-size: cover;-webkit-background-size: cover;-moz-background-size:cover;-o-background-size: cover;-moz-background-size: cover;">
            <div class="bs-slider-overlay">
              <div class="container">
                <!-- Slide Text Layer -->
                <div class="w3l-slide-text col-lg-6">
                  <h3 style="color:#414141" data-animation="animated zoomInRight">{{$slider->en_title}}</h3>
                  <p class="aos-init aos-animate" data-aos="fade-down">{{$slider->en_sub_title}}</p>
                  <a  href="services.html" target="_blank" class="button-style" data-animation="animated fadeInDown" data-aos="fade-down">Get A Qutation</a>
                </div>
              </div>
            </div>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  
      
@endsection