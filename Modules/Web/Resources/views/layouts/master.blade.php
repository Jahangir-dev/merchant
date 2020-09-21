<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Groupon Hk</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{asset('frontend/apple-touch-icon.html')}}">
    <link rel="icon" href="{{asset('frontend/images/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/linearicons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/lightpick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/tipso.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/prettyPhoto.css')}}">

</head>
    <body class="sl-home">
    <!-- Preloader Start -->
    <div class="preloader-outer">
        <div class="sl-preloader-holder">
            <img src="{{asset('frontend/images/loader.png')}}" alt="loader img">
            <div class="sl-loader"></div>
        </div>
    </div>
    <!-- Preloader End -->
    <!-- HEADER START -->
    @include('web::layouts.header')
    <!-- HEADER END -->

    <!-- MAIN START -->
        @yield('content')
    <!-- MAIN END -->
    <!-- FOOTER START -->
    @include('web::layouts.footer')
    <!-- FOOTER END -->
        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/web.js') }}"></script> --}}
    <script src="{{asset('frontend/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/jquery-library.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/appear.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/countTo.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/gmap3.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/select2.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/readmore.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/jquery-ui.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/lightpick.j')}}s"></script>
    <script src="{{asset('frontend/js/vendor/tipso.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/jquery.ui.touch-punch.js')}}"></script>

    <script src="{{asset('frontend/js/vendor/prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/vendor/jquery.ui.touch-punch.js')}}"></script>

    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script type="text/javascript">
    $('.target').on('change',function(){
          var target = $(this).val();
          $.ajax({
              url:"{{url('/setTarget')}}",
              type:"POST",
              dataType:'json',
              data:{"_token": "{{ csrf_token() }}","target":target},
              success: function(data) {
                location.reload();
              },
              error: function(e) {

              }
          });
      });
  </script>
    </body>
</html>
