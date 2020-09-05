{{--@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection--}}
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Koupon - Index</title>

    <!-- meta info -->
    <meta name="keywords" content="Koupon HTML5 Template" />
    <meta name="description" content="Koupon - Premiun HTML5 Template for Coupons Website">
    <meta name="author" content="Tsoy">
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


{{--MAIN HEADER--}}
<header class="main">
    <div class="container">
        <div class="row">
            <div class="span2">
                <a href="index-2.html">
                    <img src="frontend/img/logo-small.png" alt="logo" title="logo" class="logo">
                </a>
            </div>
            <div class="span8">
                <!-- MAIN NAVIGATION -->
                <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                <nav>
                    <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                        <li class="active"><a href="index-2.html">Home</a>
                            <ul>
                                <li class="active"><a href="index-2.html">Slider</a>
                                    <ul>
                                        <li class="active"><a href="index-2.html">Full Width</a>
                                        </li>
                                        <li><a href="index-slider-container.html">Container</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="index-hero-image.html">Hero Image</a>
                                </li>
                                <li><a href="index-no-top.html">No Top Area</a>
                                </li>
                                <li><a href="index-category-right.html">Category Nav</a>
                                    <ul>
                                        <li><a href="index-category-right.html">Side Right</a>
                                        </li>
                                        <li><a href="index-category-nav-inline-top.html">Inline Top</a>
                                        </li>
                                        <li><a href="index-category-nav-main.html">Main Nav</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="index-featured-item.html">Featured Item</a>
                                </li>
                                <li><a href="index-coupon-4-columns.html">Coupons</a>
                                    <ul>
                                        <li><a href="index-coupon-4-columns.html">4 Columns</a>
                                        </li>
                                        <li><a href="index-coupon-6-columns.html">6 columns</a>
                                        </li>
                                        <li><a href="index-coupon-category-icon.html">Category icons</a>
                                        </li>
                                        <li><a href="index-coupon-labels.html">Labels</a>
                                        </li>
                                        <li><a href="index-coupon-holded.html">Holded</a>
                                        </li>
                                        <li><a href="index-coupon-load-more.html">Load More Btn</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="coupon-page.html">Coupon page</a>
                            <ul>
                                <li><a href="coupon-page-meta-left.html">Meta Left</a>
                                </li>
                                <li><a href="coupon-page.html">Meta Right</a>
                                </li>
                                <li><a href="coupon-page-similar.html">Similar Offers</a>
                                </li>
                                <li><a href="coupon-page-image.html">Image Preview</a>
                                </li>
                                <li><a href="coupon-page-video-hosted.html">Video</a>
                                    <ul>
                                        <li><a href="coupon-page-video-hosted.html">Self Hosted</a>
                                        </li>
                                        <li><a href="coupon-page-video-vimeo.html">Vimeo</a>
                                        </li>
                                        <li><a href="coupon-page-video-youtube.html">Youtube</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="coupon-page-gallery-3-col.html">Gallery</a>
                                    <ul>
                                        <li><a href="coupon-page-gallery-3-col.html">3 columns</a>
                                        </li>
                                        <li><a href="coupon-page-gallery-4-col.html">4 Columns</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="features-typography.html">Features</a>
                            <ul>
                                <li><a href="features-typography.html">Typography</a>
                                </li>
                                <li><a href="features-elements.html">Elements</a>
                                </li>
                                <li><a href="features-grid.html">Grid</a>
                                </li>
                                <li><a href="features-icons.html">Icons</a>
                                </li>
                                <li><a href="features-image-hover.html">Image Hovers</a>
                                </li>
                                <li><a href="features-sliders.html">Sliders</a>
                                </li>
                                <li><a href="features-media.html">Media</a>
                                </li>
                                <li><a href="features-lightbox.html">Lightbox</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="page-full-width.html">Pages</a>
                            <ul>
                                <li><a href="page-full-width.html">Full Width</a>
                                </li>
                                <li><a href="page-sidebar-right.html">Sidebar Right</a>
                                </li>
                                <li><a href="page-sidebar-left.html">Sidebar Left</a>
                                </li>
                                <li><a href="page-faq.html">FAQ</a>
                                </li>
                                <li><a href="page-about-us.html">About Us</a>
                                </li>
                                <li><a href="page-team.html">Team</a>
                                </li>
                                <li><a href="page-payment.html">Payment</a>
                                </li>
                                <li><a href="page-sticky-header.html">Sticky Header</a>
                                </li>
                                <li><a href="page-sticky-search.html">Sticky Search</a>
                                </li>
                                <li><a href="page-sticky-header-search.html">Sticky Header & Seach</a>
                                </li>
                                <li><a href="page-no-search.html">No search</a>
                                </li>
                                <li><a href="page-404.html">404</a>
                                </li>
                                <li><a href="page-search-results.html">Search Results</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="blog-sidebar-right.html">Blog</a>
                            <ul>
                                <li><a href="blog-sidebar-right.html">Sidebar Right</a>
                                </li>
                                <li><a href="blog-sidebar-left.html">Sidebar Left</a>
                                </li>
                                <li><a href="blog-full-width.html">Full Width</a>
                                </li>
                                <li><a href="post-sidebar-right.html">Post</a>
                                    <ul>
                                        <li><a href="post-sidebar-right.html">Sidebar Right</a>
                                        </li>
                                        <li><a href="post-sidebar-left.html">Sidebar Left</a>
                                        </li>
                                        <li><a href="post-full-width.html">Full Width</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </nav>
                <!-- END MAIN NAVIGATION -->
            </div>
            <div class="span2">
                <!-- LOGIN REGISTER LINKS -->
                @if(Auth::user())
                    <ul class="login-register">
                        <li><a class="popup-text" href="{{route('logout')}}" data-effect="mfp-move-from-top"><i class="icon-signout"></i>Sign Out</a>
                        </li>
                    </ul>
                @else
                    <ul class="login-register">
                        <li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i class="icon-signin"></i>Sign in</a>
                        </li>
                        <li><a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top"><i class="icon-edit"></i>Sign up</a>
                        </li>
                    </ul>
                @endif

            </div>
        </div>
    </div>
</header>

<!-- LOGIN REGISTER LINKS CONTENT -->
<div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="icon-signin dialog-icon"></i>
    <h3>Member Login</h3>
    <h5>Welcome back, friend. Login to get started</h5>
    <div class="row-fluid">
        <form method="POST" class="dialog-form" action="{{ route('login') }}">
                        @csrf

                        
                            <label for="email" >{{ __('E-Mail Address') }}</label>

                            
                                <input id="email" type="email" class="span12 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        

                        
                            <label for="password">{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="span12 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         <label class="checkbox">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}
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
                    <a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">{{ __('Forgot Your Password?') }}</a>
                @endif
        </li>
    </ul>
</div>


<div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="icon-edit dialog-icon"></i>
    <h3>Member Register</h3>
    <h5>Ready to get best offers? Let's get started!</h5>
    <div class="row-fluid">
        <!-- <form class="dialog-form">
            <label>E-mail</label>
            <input type="text" placeholder="email@domain.com" class="span12">
            <label>Password</label>
            <input type="password" placeholder="My secret password" class="span12">
            <label>Repeat Password</label>
            <input type="password" placeholder="Type your password again" class="span12">
            <div class="row-fluid">
                <div class="span8">
                    <label>Your Area</label>
                    <input type="password" placeholder="Boston" class="span12">
                </div>
                <div class="span4">
                    <label>Postal/Zip</label>
                    <input type="password" placeholder="12345" class="span12">
                </div>
            </div>
            <label class="checkbox">
                <input type="checkbox">Get hot offers via e-mail
            </label>
            <input type="submit" value="Sign up" class="btn btn-primary">
        </form> -->

        <form method="POST" class="dialog-form" action="{{ route('register') }}">
                        @csrf

                        
                            <label for="first_name">{{ __('First Name') }}</label>

                            
                                <input id="first_name" type="text" class="span12 @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         

                        
                            <label for="last_name">{{ __('Last Name') }}</label>

                            
                                <input id="last_name" type="text" class="span12 @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        
                            <label for="email">{{ __('E-Mail Address') }}</label>
                           
                                <input id="email" type="email" class="span12 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        
                            <label for="password" >{{ __('Password') }}</label>

                            
                                <input id="password" type="password" class="span12 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            

                        <input type="hidden" name="role_id" value="2">

                        
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                            
                                <input id="password-confirm" type="password" class="span12" name="password_confirmation" required autocomplete="new-password">
                           
                       
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            
                    </form>
    </div>
    <ul class="dialog-alt-links">
        <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">Already member</a>
        </li>
    </ul>
</div>


<div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
    <i class="icon-retweet dialog-icon"></i>
    <h3>Password Recovery</h3>
    <h5>Fortgot your password? Don't worry we can deal with it</h5>
    <div class="row-fluid">
        <form class="dialog-form" action="{{ route('password.request') }}">
            <label>E-mail</label>
            <input type="text" required="" placeholder="email@domain.com" class="span12">
            <input type="submit" value="Request new password" class="btn btn-primary">
        </form>
    </div>
</div>
<!-- END LOGIN REGISTER LINKS CONTENT -->


<!-- TOP AREA -->
<div class="top-area">
    <!-- START BOOTSTRAP CAROUSEL -->
    <div id="my-carousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="active item">
                <img src="frontend/img/old_no7_1200x480.jpg" alt="Image Alternative text" title="Old No7" />
                <div class="carousel-caption countdown-caption">
                    <h3>Jack Daniels Huge Pack</h3>
                    <!-- COUNTDOWN -->
                    <div data-countdown="Aug 25, 2013 5:30:00" class="countdown"></div><a href="#" class="btn btn-primary btn-large">Save 70%</a>
                </div>
            </div>
            <div class="item">
                <img src="frontend/img/iphone_5_ipad_mini_ipad_3_1200x480.jpg" alt="Image Alternative text" title="iPhone 5 iPad mini iPad 3" />
                <div class="carousel-caption countdown-caption">
                    <h3>Apple Big Deal</h3>
                    <!-- COUNTDOWN -->
                    <div data-countdown="Aug 30, 2013 10:45:00" class="countdown"></div><a href="#" class="btn btn-primary btn-large">Save 50%</a>
                </div>
            </div>
            <div class="item">
                <img src="frontend/img/the_best_mode_of_transport_here_in_maldives_1200x480.jpg" alt="Image Alternative text" title="the best mode of transport here in maldives" />
                <div class="carousel-caption countdown-caption">
                    <h3>Finshing in Maldives</h3>
                    <!-- COUNTDOWN -->
                    <div data-countdown="Sep 2, 2013 22:00:00" class="countdown"></div><a href="#" class="btn btn-primary btn-large">Save 30%</a>
                </div>
            </div>
        </div>
        <a class="carousel-control left" href="#my-carousel" data-slide="prev"></a>
        <a class="carousel-control right" href="#my-carousel" data-slide="next"></a>
    </div>
    <!-- END BOOTSTRAP CAROUSEL -->
</div>
<!-- END TOP AREA -->

<!-- SEARCH AREA -->
<div class="search-area">
    <div class="container">
        <div class="row-fluid">
            <div class="span8">
                <label><i class="icon-search"></i>I am searching for</label>
                <div class="search-area-division search-area-division-input">
                    <input class="span12" type="text" placeholder="Travel Vacation" />
                </div>
            </div>
            <div class="span3">
                <label><i class="icon-map-marker"></i>In</label>
                <div class="search-area-division search-area-division-location">
                    <input class="span12" type="text" placeholder="Boston" />
                </div>
            </div>
            <div class="span1">
                <button class="btn btn-block btn-white search-btn" type="submit">Search</button>
            </div>
        </div>
    </div>
</div>
<!-- END SEARCH AREA -->

<div class="gap"></div>

{{--END MAIN HEADER--}}



{{--PAGE CONTENT--}}

<div class="container">
    <div class="row">
        <div class="span3">
            <ul class="nav nav-tabs nav-stacked nav-coupon-category">
                <li class="active"><a href="#"><i class="icon-ticket"></i>All</a>
                </li>
                <li><a href="#"><i class="icon-food"></i>Food & Drink</a>
                </li>
                <li><a href="#"><i class="icon-calendar"></i>Events</a>
                </li>
                <li><a href="#"><i class="icon-female"></i>Beauty</a>
                </li>
                <li><a href="#"><i class="icon-bolt"></i>Fitness</a>
                </li>
                <li><a href="#"><i class="icon-headphones"></i>Electronics</a>
                </li>
                <li><a href="#"><i class="icon-picture"></i>Furniture</a>
                </li>
                <li><a href="#"><i class="icon-umbrella"></i>Fashion</a>
                </li>
                <li><a href="#"><i class="icon-shopping-cart"></i>Shopping</a>
                </li>
                <li><a href="#"><i class="icon-home"></i>Home & Garden</a>
                </li>
                <li><a href="#"><i class="icon-plane"></i>Travel</a>
                </li>
            </ul>
        </div>
        <div class="span9">
            <div class="row row-wrap">
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Playstation Accessories</h5>
                            <p class="coupon-desciption">Quam volutpat erat ad semper risus integer cubilia</p>
                            <div class="coupon-meta"><span class="coupon-time">5 days 46 h remaining</span><span class="coupon-save">Save 60%</span>
                                <div class="coupon-price"><span class="coupon-old-price">376$</span><span class="coupon-new-price">150$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/the_violin_800x600.jpg" alt="Image Alternative text" title="The Violin" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Violin Lessons</h5>
                            <p class="coupon-desciption">Nec varius ante aptent augue dictumst lacinia at</p>
                            <div class="coupon-meta"><span class="coupon-time">10 days 35 h remaining</span><span class="coupon-save">Save 40%</span>
                                <div class="coupon-price"><span class="coupon-old-price">272$</span><span class="coupon-new-price">163$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/food_is_pride_800x600.jpg" alt="Image Alternative text" title="Food is Pride" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Best Pasta</h5>
                            <p class="coupon-desciption">Habitasse feugiat commodo posuere nascetur lorem adipiscing cursus</p>
                            <div class="coupon-meta"><span class="coupon-time">7 days 25 h remaining</span><span class="coupon-save">Save 75%</span>
                                <div class="coupon-price"><span class="coupon-old-price">263$</span><span class="coupon-new-price">66$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/aspen_lounge_chair_800x600.jpg" alt="Image Alternative text" title="Aspen Lounge Chair" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Aspen Lounge Chair</h5>
                            <p class="coupon-desciption">A ante ipsum curabitur diam nascetur gravida penatibus</p>
                            <div class="coupon-meta"><span class="coupon-time">10 days 10 h remaining</span><span class="coupon-save">Save 40%</span>
                                <div class="coupon-price"><span class="coupon-old-price">815$</span><span class="coupon-new-price">489$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/waipio_valley_800x600.jpg" alt="Image Alternative text" title="waipio valley" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Awesome Vacation</h5>
                            <p class="coupon-desciption">Facilisis pulvinar orci in eget lacinia pulvinar habitasse</p>
                            <div class="coupon-meta"><span class="coupon-time"> 5 h remaining</span><span class="coupon-save">Save 45%</span>
                                <div class="coupon-price"><span class="coupon-old-price">427$</span><span class="coupon-new-price">235$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/ana_29_800x600.jpg" alt="Image Alternative text" title="Ana 29" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Hot Summer Collection</h5>
                            <p class="coupon-desciption">Nostra odio ridiculus lacinia erat semper mattis auctor</p>
                            <div class="coupon-meta"><span class="coupon-time">10 days 55 h remaining</span><span class="coupon-save">Save 60%</span>
                                <div class="coupon-price"><span class="coupon-old-price">531$</span><span class="coupon-new-price">212$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/old_no7_800x600.jpg" alt="Image Alternative text" title="Old No7" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Jack Daniels Huge Pack</h5>
                            <p class="coupon-desciption">Habitasse aenean quam pulvinar lacus tempus ultricies nunc</p>
                            <div class="coupon-meta"><span class="coupon-time"> 41 h remaining</span><span class="coupon-save">Save 75%</span>
                                <div class="coupon-price"><span class="coupon-old-price">349$</span><span class="coupon-new-price">87$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/a_turn_800x600.jpg" alt="Image Alternative text" title="a turn" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Diving with Sharks</h5>
                            <p class="coupon-desciption">Mus integer commodo quam class tristique natoque sociosqu</p>
                            <div class="coupon-meta"><span class="coupon-time">2 days 18 h remaining</span><span class="coupon-save">Save 25%</span>
                                <div class="coupon-price"><span class="coupon-old-price">680$</span><span class="coupon-new-price">510$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/amaze_800x600.jpg" alt="Image Alternative text" title="AMaze" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">New Glass Collection</h5>
                            <p class="coupon-desciption">Curae convallis orci dui gravida turpis facilisis tortor</p>
                            <div class="coupon-meta"><span class="coupon-time">4 days 31 h remaining</span><span class="coupon-save">Save 40%</span>
                                <div class="coupon-price"><span class="coupon-old-price">149$</span><span class="coupon-new-price">89$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/the_hidden_power_of_the_heart_800x600.jpg" alt="Image Alternative text" title="The Hidden Power of the Heart" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Beach Holidays</h5>
                            <p class="coupon-desciption">Praesent mus eros sit ipsum potenti enim faucibus</p>
                            <div class="coupon-meta"><span class="coupon-time"> 59 h remaining</span><span class="coupon-save">Save 45%</span>
                                <div class="coupon-price"><span class="coupon-old-price">328$</span><span class="coupon-new-price">180$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/the_best_mode_of_transport_here_in_maldives_800x600.jpg" alt="Image Alternative text" title="the best mode of transport here in maldives" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Finshing in Maldives</h5>
                            <p class="coupon-desciption">Senectus hac nibh conubia sociosqu nostra interdum arcu</p>
                            <div class="coupon-meta"><span class="coupon-time">6 days 5 h remaining</span><span class="coupon-save">Save 75%</span>
                                <div class="coupon-price"><span class="coupon-old-price">655$</span><span class="coupon-new-price">164$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/our_coffee_miss_u_800x600.jpg" alt="Image Alternative text" title="Our Coffee miss u" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Coffe Shop Discount</h5>
                            <p class="coupon-desciption">Dictumst amet tempor magnis nostra enim vivamus tortor</p>
                            <div class="coupon-meta"><span class="coupon-time">1 day 20 h remaining</span><span class="coupon-save">Save 75%</span>
                                <div class="coupon-price"><span class="coupon-old-price">595$</span><span class="coupon-new-price">149$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/hot_mixer_800x600.jpg" alt="Image Alternative text" title="Hot mixer" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Modern DJ Set</h5>
                            <p class="coupon-desciption">Amet magnis fames imperdiet lobortis amet eu sapien</p>
                            <div class="coupon-meta"><span class="coupon-time">2 days 24 h remaining</span><span class="coupon-save">Save 20%</span>
                                <div class="coupon-price"><span class="coupon-old-price">281$</span><span class="coupon-new-price">225$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/green_furniture_800x600.jpg" alt="Image Alternative text" title="Green Furniture" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Green Furniture Pack</h5>
                            <p class="coupon-desciption">Magna at ridiculus mi turpis himenaeos molestie porta</p>
                            <div class="coupon-meta"><span class="coupon-time"> 41 h remaining</span><span class="coupon-save">Save 25%</span>
                                <div class="coupon-price"><span class="coupon-old-price">607$</span><span class="coupon-new-price">455$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/cascada_800x600.jpg" alt="Image Alternative text" title="cascada" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Adventure in Woods</h5>
                            <p class="coupon-desciption">Pellentesque habitasse nisi aliquet bibendum commodo etiam suscipit</p>
                            <div class="coupon-meta"><span class="coupon-time">1 day 36 h remaining</span><span class="coupon-save">Save 25%</span>
                                <div class="coupon-price"><span class="coupon-old-price">879$</span><span class="coupon-new-price">659$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/my_ice_cream_and_your_ice_cream_spoons_800x600.jpg" alt="Image Alternative text" title="My Ice Cream and Your Ice Cream Spoons" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Lovely Ice Cream Spoons</h5>
                            <p class="coupon-desciption">Eleifend per velit nibh faucibus feugiat lacus auctor</p>
                            <div class="coupon-meta"><span class="coupon-time">9 days 43 h remaining</span><span class="coupon-save">Save 40%</span>
                                <div class="coupon-price"><span class="coupon-old-price">607$</span><span class="coupon-new-price">364$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/iphone_5_ipad_mini_ipad_3_800x600.jpg" alt="Image Alternative text" title="iPhone 5 iPad mini iPad 3" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Apple Big Deal</h5>
                            <p class="coupon-desciption">Dapibus vulputate hendrerit et penatibus aenean molestie urna</p>
                            <div class="coupon-meta"><span class="coupon-time"> 46 h remaining</span><span class="coupon-save">Save 35%</span>
                                <div class="coupon-price"><span class="coupon-old-price">231$</span><span class="coupon-new-price">150$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="span3">
                    <!-- COUPON THUMBNAIL -->
                    <a href="#" class="coupon-thumb">
                        <img src="frontend/img/urbex_esch_lux_with_laney_and_laaaaag_800x600.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />
                        <div class="coupon-inner">
                            <h5 class="coupon-title">Canon Camera</h5>
                            <p class="coupon-desciption">Quisque montes pretium taciti mattis laoreet purus vel</p>
                            <div class="coupon-meta"><span class="coupon-time">8 days 9 h remaining</span><span class="coupon-save">Save 65%</span>
                                <div class="coupon-price"><span class="coupon-old-price">373$</span><span class="coupon-new-price">131$</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="pagination">
                <ul>
                    <li class="prev disabled">
                        <a href="#"></a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li class="next">
                        <a href="#"></a>
                    </li>
                </ul>
            </div>
            <div class="gap"></div>
        </div>
    </div>
</div>

{{--END PAGE CONTENT--}}



{{--MAIN FOOTER--}}

<footer class="main">
    <div class="footer-top-area">
        <div class="container">
            <div class="row row-wrap">
                <div class="span3">
                    <a href="index-2.html">
                        <img src="frontend/img/logo.png" alt="logo" title="logo" class="logo">
                    </a>
                </div>
                <div class="span3">
                    <h5>Get it Anywhere</h5>
                    <p>Eu dui dis aliquam penatibus facilisi taciti accumsan bibendum justo laoreet posuere odio sed purus class turpis diam cras nunc ac purus ligula euismod mattis elementum amet mollis metus tellus</p>
                    <ul class="list list-app-download">
                        <li>
                            <a href="#" class="icon-windows box-icon" title="Get Windows Phone App" data-toggle="tooltip"></a>
                        </li>
                        <li>
                            <a href="#" class="icon-apple box-icon" title="Get iPhone App" data-toggle="tooltip"></a>
                        </li>
                        <li>
                            <a href="#" class="icon-android box-icon" title="Get Android App" data-toggle="tooltip"></a>
                        </li>
                    </ul>
                </div>
                <div class="span3">
                    <h5>Koupon on Twitter</h5>
                    <!-- START TWITTER -->
                    <div class="twitter-ticker" id="twitter-ticker"></div>
                    <!-- END TWITTER -->
                </div>
                <div class="span3">
                    <h5>Recent News</h5>
                    <ul class="list post-list">
                        <li class="post-thumb">
                            <h5 class="title"><a href="#">Facilisis sagittis lobortis</a></h5><small>09 August, 2013</small>
                            <p class="post-desciption">Dapibus pulvinar elementum rutrum sem pulvinar sagittis venenatis ullamcorper rhoncus</p>
                        </li>
                        <li class="post-thumb">
                            <h5 class="title"><a href="#">Mi dui</a></h5><small>02 August, 2013</small>
                            <p class="post-desciption">Fermentum sapien arcu erat himenaeos euismod lobortis felis ullamcorper duis</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row row-wrap">
            <div class="span3">
                <h5>About Koupon</h5>
                <p>Quam habitasse odio habitasse ultrices dis varius ultrices imperdiet aliquam aliquam etiam malesuada gravida ac ornare condimentum bibendum libero quam montes primis lobortis sem pellentesque enim ornare molestie scelerisque congue</p>
            </div>
            <div class="span2">
                <h5>Company</h5>
                <ul class="list">
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Blog</a>
                    </li>
                    <li><a href="#">Press</a>
                    </li>
                    <li><a href="#">Jobs</a>
                    </li>
                    <li><a href="#">Investors</a>
                    </li>
                </ul>
            </div>
            <div class="span2">
                <h5>For Business</h5>
                <ul class="list">
                    <li><a href="#">Advertising</a>
                    </li>
                    <li><a href="#">Runnig a Deal</a>
                    </li>
                    <li><a href="#">Accept Payments</a>
                    </li>
                    <li><a href="#">Referral Program</a>
                    </li>
                    <li><a href="#">Developers/API</a>
                    </li>
                    <li><a href="#">Merchant Terms</a>
                    </li>
                </ul>
            </div>
            <div class="span2">
                <h5>Get Help</h5>
                <ul class="list">
                    <li><a href="#">FAQ</a>
                    </li>
                    <li><a href="#">Customer Support</a>
                    </li>
                    <li><a href="#">Return Policy</a>
                    </li>
                    <li><a href="#">Terms Of Use</a>
                    </li>
                    <li><a href="#">Privacy Statement</a>
                    </li>
                </ul>
            </div>
            <div class="span3">
                <h5>Keep in touch</h5>
                <p>Bibendum cum scelerisque eu hendrerit himenaeos ad eleifend nibh justo</p>
                <ul class="list list-social">
                    <li>
                        <a href="#" class="icon-facebook box-icon" data-toggle="tooltip" title="Facebook"></a>
                    </li>
                    <li>
                        <a href="#" class="icon-twitter box-icon" data-toggle="tooltip" title="Twitter"></a>
                    </li>
                    <li>
                        <a href="#" class="icon-flickr box-icon" data-toggle="tooltip" title="Flickr"></a>
                    </li>
                    <li>
                        <a href="#" class="icon-linkedin box-icon" data-toggle="tooltip" title="Linkedin"></a>
                    </li>
                    <li>
                        <a href="#" class="icon-tumblr box-icon" data-toggle="tooltip" title="Tumblr"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

{{--END MAIN  FOOTER--}}



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
