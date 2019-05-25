<!DOCTYPE html>
<html>
<head>
	<title>Welcome To KIB</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css">





<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

<link rel="stylesheet" type="text/css" href="{{ asset('main_site/css/main.css') }}">

  <link href="{{ asset('main_site/css/JiSlider.css') }}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{ asset('main_site/css/round_icons.css') }}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js.map"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js.map"></script>
</head>
<body>
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
          <a class="dropdown-item" href="#">My account</a>
          <a class="dropdown-item" href="#">Log out</a>
        </div>
      </li>
        @endif
      
      </ul>
    </div>
  </div>
</nav>
  </header>
</section>
<section id="content">
  @yield('content')
</section>


</body>

<footer class="page-footer font-small blue pt-4" style="background-color:#3544ab;color:white">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-12 col-lg-3 mt-md-0 mt-3" style="margin-left:5%">

          <!-- Content -->
          <div class="row" style="margin-bottom:5%">
          <h5 class="text-uppercase">About us</h5>  
          </div>

      {{--     <div class="row" style="margin-bottom:5%">
            <img src="{{ asset('main_site/img/Logo.png') }}" class="rounded-circle img-responsive" style="width:60px;height:60px">
          </div> --}}
          
          <div class="row" style="margin-bottom:5%">
                      <p>Khouri Insurance Brokerage Office is specialized in insurance studies and consultations. We seek through our consultations and studies to ensure that customers receive the best insurance services in addition to the follow-up to any inquiries required by individuals and groups in all insurance fields
</p>
          </div>
        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-12 col-lg-3 mb-md-0 mb-3" style="margin-left:5%">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

    
            <ul class="list-unstyled">
              <li>
                <a href="/" style="color: white;display:flex;margin-bottom:3%;font-weight:bold;">Home</a>
              </li>
              <li>
                <a href="/services" style="color: white;display:flex;margin-bottom:3%;font-weight:bold;">Services</a>
              </li>
              <li>
                <a href="/products" style="color: white;display:flex;margin-bottom:3%;font-weight:bold;">Buy Insurance</a>
              </li>
              <li>
                <a href="/galleries" style="color: white;display:flex;margin-bottom:3%;font-weight:bold;">Galleries</a>
              </li>

               <li>
                <a href="/news" style="color: white;display:flex;margin-bottom:3%;font-weight:bold;">News</a>
              </li>
              <li>
                <a href="/aboutus" style="color: white;display:flex;margin-bottom:3%;font-weight:bold;">About us</a>
              </li>

              <li>
                <a href="contact" style="color: white;display:flex;margin-bottom:3%;font-weight:bold;">Contact us</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-12 col-lg-3 mb-md-0 mb-3" style="margin-left:5%">

            <!-- Links -->
            <div class="row">
                  <h5 class="text-uppercase">Contact us</h5>
            </div>
        

            <div class="row">
           <div class="mapouter"><div class="gmap_canvas"><iframe width="250" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=%D8%A7%D9%84%D8%AA%D8%AC%D8%A7%D8%B1%D8%A9&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.emojilib.com">emojilib.com</a></div><style>.mapouter{position:relative;text-align:right;height:200px;width:250px;}.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:250px;}</style></div>

          </div>

          <div class="row">
            <p id="email">
              email@gmail.com
            </p>
          </div>

          <div class="row">
            <p id="phone">
              +96300000000
            </p>
          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
 
    <!-- Copyright -->

  </footer>

     <div style="background-color:#3544ab" class="footer">
      <div class="container">
        
      
      <div class="row" style="margin-left:4%">
        <div class="col-lg-4 col-md-12 col-sm-12">
<i style="color:white;font-size:20px;margin-left:-5%;margin-right:2%" class="fab fa-facebook-square"></i>
<i style="color:white;font-size:20px;" class="fab fa-twitter"></i>
        </div>
      <div class="col-lg-4 col-md-12 col-sm-12" style="color: white">All Rights Reserved To KIB ©2019
  </div>
      </div>
      </div>
    </div>
<script type="text/javascript" src="{{ asset('main_site/js/contact.js')}}">
</script>
<script type="text/javascript">
    $(document).ready(function(){
      social();

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



    $("#owl").owlCarousel({
                items: 5,
                responsiveClass: true,
                rtl: true,
                mouseDrag: true,
                touchDrag: true,
                loop:false,
                autoplay:true,
                autoplayTimeout:2000,
              
            });

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
</html>
