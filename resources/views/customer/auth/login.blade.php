<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <title>Koupon - Index</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Koupon HTML5 Template" />
    <meta name="description" content="Koupon - Premiun HTML5 Template for Coupons Website">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <!--[if lt IE 9]>
    <![endif]-->

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

<div class="container">
    <div class="row">
        <div class="mfp-close-btn-in mfp-auto-cursor mfp-move-from-top mfp-ready" tabindex="-1" style="overflow: hidden;">
            <div class=" mfp-s-ready mfp-inline-holder">
                <div class="mfp-content">
                    <div id="login-dialog" class="mfp-with-anim mfp-dialog clearfix">
                        <i class="icon-signin dialog-icon"></i>
                        <h3>{{ __('Customer Login') }}</h3>
                        <div class="row-fluid">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <label>{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <label>{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"">
                                <label class="checkbox">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
                                </label>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </form>
                        </div>
                        <ul class="dialog-alt-links">
                            <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Not member yet</a>
                            </li>
                            <li>

                                @if (Route::has('password.request'))
                                    <a class="popup-text" href="{{ route('password.request') }}" data-effect="mfp-zoom-out">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </li>
                        </ul>
                        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                    </div>
                </div>
                <div class="mfp-preloader">Loading...</div>
            </div>
        </div>

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
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script src="{{asset('frontend/js/gmap3.min.js')}}"></script>
<script src="{{asset('frontend/js/wilto_slider.min.js')}}"></script>
<script src="{{asset('frontend/js/mediaelement.min.js')}}"></script>
<script src="{{asset('frontend/js/fitvids.min.js')}}"></script>
<script src="{{asset('frontend/js/mail.min.js')}}"></script>

<!-- Custom scripts -->
<script src="{{asset('frontend/js/custom.js')}}"></script>
<script src="{{asset('frontend/js/switcher.js')}}"></script>
</body>
</html>


