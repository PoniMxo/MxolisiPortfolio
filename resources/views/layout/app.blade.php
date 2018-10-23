<!DOCTYPE html>
<html lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="discrption" content="parallax one page">
    <meta name="keyword" content="agency, business, corporate, creative, freelancer, interior, joomla theme, K2 Blog, minimal, modern, multipurpose, personal, portfolio, responsive, simple">

    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="http://example.com/favicon.png"/>
    <title>Mxolisi Poni</title>

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,800,900%7cRaleway:300,400,500,600,700" rel="stylesheet">
   <!-- Bootstrap -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- custom styles (optional) -->
    <link href="{{asset('css/plugins/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/responsive.css') }}" rel="stylesheet">
  </head>
  <body>



    @include('layout.nav')

    @include('layout.header')

   <div class="section">
     <div>
      @yield('content')
     </div>
   </div>
    <!-- Footer
    ================================================== -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">

          <div class="logo">
            <img src="img/logo-2.jpg" alt="logo" class="logo-1">
          </div>

          <div class="scoial-icon text-center">
            <a href="https://www.facebook.com/Mxolisi.Stober.Poni"><span style="color:white;"><i class="fab fa-facebook-f"></i></span></a>
            <a href="https://twitter.com/Mxo_Stober_Poni"><span "color:whitecolor:white;"><i class="fab fa-twitter"></i></span></a>
            <a href="https://www.linkedin.com/in/mxolisi-poni-8b8352157/"><span "color:white;"><i class="fab fa-linkedin-in"></i></span></a>
            <a href="https://plus.google.com/u/0/112199752297824565541"><span "color:white;"><i class="fab fa-google-plus-g"></i></span></a>
          </div>

          <div class="cop">
            <h6>© 2018 Mxolisi Poni the Web Developer</del></h6>
          </div>

        </div>
      </div>
    </footer>
    <!-- End Footer
    ================================================== -->


    <!-- Optional JavaScript -->
    <!--Bootstrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='{{URL::asset("/js/jquery-3.1.1.min.js") }}'></script>
    <script src='{{ URl::asset("js/popper.min.js") }}'></script>
    <script src='{{ URl::asset("js/bootstrap.min.js") }}'></script>

    <!-- owl carousel js -->
    <script src='{{ URL::asset("js/owl.carousel.min.js") }}'></script>

    <!-- slick js -->
    <script src='{{URL::asset("js/slick.min.js") }}'></script>


    <!-- scrollIt js -->
    <script src='{{ URL::asset("js/scrollIt.min.html")}}'></script>

    <!-- typed -->
    <script src='{{ URL::asset("js/typed.js") }}'></script>
    <script src='{{  URL::asset("js/drawsvg.min.js")}}'></script>

    <!-- magnific-popup -->
		<script src='{{ URL::asset("js/jquery.fancybox.min.js") }}'></script>

		<!-- isotope.pkgd.min js -->
		<script src='{{ URL::asset("js/isotope.pkgd.min.js") }}'></script>

    <!-- particles js -->
    <script src='{{ URL::asset("js/particles.js") }}'></script>

    <!-- App js -->
    <script src='{{ URL::asset("js/app.js") }}'></script>

    <!-- validator js -->
    <script src='{{  URL::asset("js/validator.js")}}'></script>

    <!-- custom JavaScript -->
    <script src='{{ URL::asset("js/custom.js") }}'></script>

   <!--ckEditor-->
   <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace('editor');
    </script>
    <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    </body>

</html>
