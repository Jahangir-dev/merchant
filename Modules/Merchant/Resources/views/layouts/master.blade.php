<!DOCTYPE HTML>

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

    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/dashboard.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/prettyPhoto.css')}}">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">


    @notifyCss
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
@include('merchant::layouts.header')
<!-- HEADER END -->
<!-- BANNER START -->
{{--    @include('merchant::layouts.banner')--}}
<!-- BANNER END -->
<!-- MAIN START -->


@yield('content')
<!-- MAIN END -->
<!-- FOOTER START -->
@include('merchant::layouts.footer')
<!-- FOOTER END -->
  @include('notify::messages')

        <x:notify-messages />
        @notifyJs
<style type="text/css">
    .w-full {
        position: absolute !important;
        bottom: 30px !important;
    }
</style>
{{-- Laravel Mix - JS File --}}
{{-- <script src="{{ mix('js/merchant.js') }}"></script> --}}


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
<script src="{{asset('frontend/js/vendor/countdown.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#table_id').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        } );
    } );
</script>

<script src="{{asset('frontend/js/vendor/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('frontend/js/vendor/prettyPhoto.js')}}"></script>
{{--<script src="{{asset('frontend/js/vendor/tinymce/tinymce.min4bb5.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci')}}"></script>--}}

{{-- javascript code --}}
<script src='http://maps.googleapis.com/maps/api/js?v=3&sensor=false&amp;libraries=places&key=AIzaSyCTtKFT6ROLiapWLQf-ATNCdy5fn_VJ68s'></script>

{{--<script src="https://maps.google.com/maps/api/js?key=AIzaSyCfLDEqciJFYH4niKBKrOdLD3UzGgz-9DM=places&callback=initAutocomplete" type="text/javascript"></script>--}}
<script>
    /*    $(document).ready(function() {
            $("#lat_area").addClass("d-none");
            $("#long_area").addClass("d-none");
        });*/

    $(document).ready(function (){
        console.log('hello world')
        google.maps.event.addDomListener(window, 'load', initialize);

        function initialize() {
            var input = document.getElementById('autocomplete');
            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.addListener('place_changed', function() {
                var place = autocomplete.getPlace();
                $('#latitude').val(place.geometry['location'].lat());
                $('#longitude').val(place.geometry['location'].lng());
            });
        }
    })

</script>
</body>
</html>
