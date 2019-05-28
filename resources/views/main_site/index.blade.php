<!DOCTYPE html>
<html>
<head>
  <title>Welcome To KIB</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="{{ asset('main_site/css/main.css') }}">

  <link href="{{ asset('main_site/css/JiSlider.css') }}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{ asset('main_site/css/round_icons.css') }}">

</head>
<body style="height:100vh;">
  <div id="loader">
    <img src="{{ asset('main_site/img/logo.gif') }}" width="30%">
  </div>
  <script type="text/javascript">
    var loader=document.getElementById("loader");
    window.addEventListener("load",function() {
      loader.style.height = '100px';
      loader.style.width = '100px';
      loader.style.borderRadius = '50%';
      loader.style.visibility = 'hidden';
    });
  </script>
<section id="navbar">
  <header>
   <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
  <div class="container-fluid">
    <div class="col-3">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('main_site/img/Logo.png') }}" class="rounded-circle img-responsive" style="width:60px;height:60px">
        </a>
        </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
     <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/products">Buy Insurance</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="/galleries">Galleries</a>
        </li>

          <li class="nav-item">
          <a class="nav-link" href="/news">News</a>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="/aboutus">About us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact us</a>
        </li>
        @if (Auth::check())
           <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> Profile </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="/account">My account</a>
          <a class="dropdown-item" href="/logout">Log out</a>
        </div>
      </li>
      @else
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
  </header>
</section>
<section id="content" style="height:100vh;">
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
                  <p class="aos-init aos-animate" data-aos="fade-down">We make your insurance easy</p>
                  <a href="/services" class="button-style" data-animation="animated fadeInDown" data-aos="fade-down">View
                    Our Services</a>
                </div>
                  <div class="w3l-slide-text col-lg-6">
                        <div class='circle-container'>
      <a style="color: white!important" href='#' class='center'>why why why why </a>
      <a href='#' class='deg0'><img {{-- style="border-radius:50%!important"  --}} src='{{ asset('main_site/img/car_insurance.svg') }}'></a>
      <a href='#' class='deg45'><img {{-- style="border-radius:50%!important"  --}} src='{{ asset('main_site/img/car_insurance.svg') }}'></a>
      <a href='#' class='deg95'><img {{-- style="border-radius:50%!important"  --}} src='{{ asset('main_site/img/car_insurance.svg') }}'></a>
      <a href='#' class='deg135'><img {{-- style="border-radius:50%!important"  --}} src='{{ asset('main_site/img/car_insurance.svg') }}'></a>
      <a href='#' class='deg180'><img {{-- style="border-radius:50%!important"  --}} src='{{ asset('main_site/img/car_insurance.svg') }}'></a>
      <a href='#' class='deg225'><img {{-- style="border-radius:50%!important"  --}} src='{{ asset('main_site/img/car_insurance.svg') }}'></a>
      <a href='#' class='deg267'><img {{-- style="border-radius:50%!important"  --}} src='{{ asset('main_site/img/car_insurance.svg') }}'></a>
      <a href='#' class='deg315'><img {{-- style="border-radius:50%!important"  --}} src='{{ asset('main_site/img/family_insurance.svg') }}'></a>
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
  <a style="font-size:18px;color:#414141;font-weight:bold" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
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

  <a style="font-size:18px;color:#414141;font-weight:bold" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
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

  <a style="font-size:18px;color:#414141;font-weight:bold" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
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


{{-- @foreach ($sliders as $key => $slider) --}}
  

{{--                 <li>
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
        </li> --}}
        {{-- @endforeach --}}
      </ul>
    </div>
  </div>
  
      
</section>


</body>




<script type="text/javascript">
    $(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});

    function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
</script>
<!-- Latest compiled JavaScript -->

<script src="{{ asset('main_site/js/JiSlider.js') }}"></script>
  <script>


    $(window).on('load', function () {
      $('#JiSlider').JiSlider({
        color: '#fff',
        start: 3,
        reverse: true
      }).addClass('ff')
    })
  </script>

    <script>
    $(document).ready(function () {
      $(".dropdown").hover(
        function () {
          $('.dropdown-menu', this).stop(true, true).slideDown("fast");
          $(this).toggleClass('open');
        },
        function () {
          $('.dropdown-menu', this).stop(true, true).slideUp("fast");
          $(this).toggleClass('open');
        }
      );
    });
  </script>
  <!-- //dropdown smooth -->
  <!-- fixed nav -->
  <script>
    $(window).scroll(function () {
      if ($(document).scrollTop() > 50) {
        $('nav').addClass('shrink');
      } else {
        $('nav').removeClass('shrink');
      }
    });
  </script>

<script type="text/javascript">
  $('.collapse').on('show.bs.collapse', function () {
    $('.collapse.in').each(function(){
        $(this).collapse('hide');
    });
  });
</script>
<style type="text/css">
      nav.navbar.navbar-expand-lg.navbar-light.bg-light.static-top {
    display: block;
    margin: 0px;
    position: fixed;
    width: 100%;
    z-index: 100;
    background: #00000000!important;
    border-radius: 0px;
    color: white;
}


.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
        color: rgb(32, 46, 156);
        font-weight: bold;
}

.navbar-light .navbar-nav .nav-link {
    color: rgb(255, 255, 255);
}
</style>
</html>