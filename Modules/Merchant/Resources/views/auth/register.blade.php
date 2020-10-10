<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Google fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600' rel='stylesheet' type='text/css'> -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="{{asset('frontend/css/boostrap.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/boostrap_responsive.css')}}">
    <!-- Font Awesome styles (icons) -->
    <link rel="stylesheet" href="{{asset('frontend/css/font_awesome.css')}}">
    <!-- Main Template styles -->
    <link rel="stylesheet" href="{{asset('frontend/css/styles.css')}}">

    <!-- IE 8 Fallback -->

    <!-- Your custom styles (blank file) -->
    <link rel="stylesheet" href="{{asset('frontend/css/mystyles.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/css/switcher.css')}}">

    <!-- Demo Examples -->
    <link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/css/schemes/pink.css')}}" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/css/schemes/teal.css')}}" title="teal" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/css/schemes/gold.css')}}" title="gold" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/css/schemes/downy.css')}}" title="downy" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/css/schemes/atlantis.css')}}" title="atlantis" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/css/schemes/red.css')}}" title="red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/css/schemes/violet.css')}}" title="violet" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/css/schemes/pomegranate.css')}}" title="pomegranate" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/css/schemes/violet-red.css')}}" title="violet-red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/css/schemes/mexican-red.css')}}" title="mexican-red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/css/schemes/curious-blue.css')}}" title="curious-blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/css/schemes/orient.css')}}" title="orient" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/css/schemes/jgger.css')}}" title="jgger" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/css/schemes/de-york.css')}}" title="de-york" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/css/schemes/blaze-orange.css')}}" title="blaze-orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="{{asset('frontend/css/schemes/hot-pink.css')}}" title="hot-pink" media="all" />
    <!-- END Demo Examples -->


</head>
<body>

<div id="register-dialog" class="mfp-with-anim mfp-dialog clearfix">
    <i class="icon-edit dialog-icon"></i>
    <h3>Member Register</h3>
    <h5>Ready to get best offers? Let's get started!</h5>
    <div class="row-fluid">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="first_name">First Name</label>
            <input id="first_name" type="text" class="span12 form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
            @error('first_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="last_name">Last Name</label>
            <input id="last_name" type="text" class="span12 form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
            @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="email">E-mail</label>
            <input id="email" type="email" class="span12 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            <label for="passwords">Password</label>
            <input id="password" type="password" class="span12 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            <label id="password-confirm">Repeat Password</label>
            <input id="password-confirm" type="password" class="span12 form-control" name="password_confirmation" required autocomplete="new-password">
            {{--<div class="row-fluid">
                <div class="span8">
                    <label>Your Area</label>
                    <input type="password" placeholder="Boston" class="span12">
                </div>
                <div class="span4">
                    <label>Postal/Zip</label>
                    <input type="password" placeholder="12345" class="span12">
                </div>
            </div>--}}
            {{--<label class="checkbox">
                <input type="checkbox">Get hot offers via e-mail
            </label>--}}
            <label>Role</label>
            <label>
                <input type="radio" name="role_id" value="3"> <span>Customer</span>
            </label>
            <label>
                <input type="radio" name="role_id" value="2"> <span>Merchant</span>
            </label>
            <br>
            <input type="submit" value="Sign up" class="btn btn-primary">
        </form>
    </div>
</div>



<!-- Scripts queries -->
<script src="{{asset('frontend/js/jquery.js')}}"></script>
<script src="{{asset('frontend/js/boostrap.min.js')}}"></script>
<script src="{{asset('frontend/js/nivo_slider.min.js')}}"></script>
<script src="{{asset('frontend/js/countdown.min.js')}}"></script>
<script src="{{asset('frontend/js/flexnav.min.js')}}"></script>
<script src="{{asset('frontend/js/magnific.min.js')}}"></script>
<script src="{{asset('frontend/js/tweet.min.js')}}"></script>
<script src="{{asset('frontend/js/gmap3.min.js')}}"></script>
<script src="{{asset('frontend/js/wilto_slider.min.js')}}"></script>
<script src="{{asset('frontend/js/mediaelement.min.js')}}"></script>
<script src="{{asset('frontend/js/fitvids.min.js')}}"></script>
<script src="{{asset('frontend/js/mail.min.js')}}"></script>

<!-- Custom scripts -->
<script src="{{asset('frontend/js/custom.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{{asset('frontend/js/switcher.js')}}"></script>
</body>
</html>
