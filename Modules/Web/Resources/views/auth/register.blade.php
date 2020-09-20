

    <!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->

<!-- Mirrored from amentotech.com/htmls/servosell/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Sep 2020 07:57:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BootStrap HTML5 CSS3 Theme</title>
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
</head>
<body>
<!-- Preloader Start -->
<div class="preloader-outer">
    <div class="sl-preloader-holder">
        <img src="{{asset('frontend/images/loader.png')}}" alt="loader img">
        <div class="sl-loader"></div>
    </div>
</div>
<!-- Preloader End -->
<!-- MAIN START -->
<main class="sl-main sl-register-main">
    <div class="sl-registerfixed">
        <div class="container">
            <div class="row">
                <!--  Error handle -->
                <div class="col-12">
                    <div class="sl-register-holder">
                        <div class="sl-registerarea">
                            <div class="sl-registersignarea">
                                <div class="sl-registersignarea__title">
                                    <h3>{{translateText('Signup For Free')}}</h3>
                                </div>
                                <ul class="nav sl-registertabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="sl-signupcustomer" data-toggle="tab" href="#signupcustomer" role="tab" aria-selected="true">
                                            <span><i class="fa fa-check"></i></span>
                                            <h4><em>{{translateText('Signup as')}}</em> {{translateText('Customer')}}
                                            </h4>
                                            <i class="ti-info-alt toltip-content" data-tipso="Custome"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="sl-signupprovider" data-toggle="tab" href="#signupprovider" role="tab" aria-selected="false">
                                            <span><i class="fa fa-check"></i></span>
                                            <h4><em>{{translateText('Signup as')}}</em> {{translateText('Merchant')}}
                                            </h4>
                                            <i class="ti-info-alt toltip-content" data-tipso="Provider"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content sl-signup" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="signupcustomer" role="tabpanel" aria-labelledby="sl-signupcustomer">
                                        <form method="POST" action="{{ route('register') }}" class="sl-formtheme sl-signupform">
                                            @csrf
                                            <fieldset>
                                                <div class="sl-signupform-wrap">
                                                    <div class="form-group form-group-half form-group-icon">
                                                        <i class="ti-info-alt toltip-content" data-tipso="name"></i>
                                                        <input type="text" name="first_name" value="" class="form-control sl-form-control" placeholder="{{translateText('First Name *')}}" required="">
                                                    </div>
                                                    <div class="form-group form-group-half form-group-icon">
                                                        <i class="ti-info-alt toltip-content" data-tipso="name"></i>
                                                        <input type="text" name="last_name" value="" class="form-control sl-form-control" placeholder="{{translateText('Last Name *')}}" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="email" value="" class="form-control sl-form-control" placeholder="{{translateText('Email*')}}" required="">
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <div class="sl-select">
                                                            <select name="gender">
                                                                <option value="" selected disabled>{{translateText('Gender*')}}</option>
                                                                <option value="Male">{{translateText('Male')}}</option>
                                                                <option value="Female">{{translateText('Female')}}</option>
                                                                <option value="Other">{{translateText('Other')}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input type="number" name="phone" value="" class="form-control sl-form-control" placeholder="{{translateText('Phone*')}}" required="">
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input type="password" name="password" value="" class="form-control sl-form-control" placeholder="{{translateText('Password*')}}" required="">
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input type="password" name="password_confirmation" value="" class="form-control sl-form-control" placeholder="{{translateText('Retype Password*')}}" required="">
                                                    </div>
                                                    <div class="form-group sl-btnarea">
                                                        <div class="sl-checkbox">
                                                            <input id="terms" type="checkbox" name="category">
                                                            <label for="terms">
                                                                <span>I agree to <a href="javascript:void(0);">{{translateText('Terms and Conditions')}}</a></span>
                                                            </label>
                                                        </div>
                                                        <button type="submit" class="btn sl-btn">{{translateText('Signup')}}</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <input type="hidden" value="3" name="role_id">
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="signupprovider" role="tabpanel" aria-labelledby="sl-signupprovider">
                                        <form method="POST" action="{{ route('register') }}" class="sl-formtheme sl-signupform">
                                            @csrf
                                            <fieldset>
                                                <div class="sl-signupform-wrap">
                                                    <div class="form-group">
                                                        <input type="text" name="email" value="" class="form-control sl-form-control" placeholder="{{translateText('Email*')}}" required="">
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input type="text" name="first_name" value="" class="form-control sl-form-control" placeholder="{{translateText('First Name*')}}" required="">
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input type="text" name="last_name" value="" class="form-control sl-form-control" placeholder="{{translateText('Last Name*')}}" required="">
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <div class="sl-select">
                                                            <select name="gender">
                                                                <option value="" selected disabled>{{translateText('Gender*')}}</option>
                                                                <option value="Male">{{translateText('Male')}}</option>
                                                                <option value="Female">{{translateText('Female')}}</option>
                                                                <option value="Other">{{translateText('Other')}}</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input type="number" name="phone" value="" class="form-control sl-form-control" placeholder="{{translateText('Phone*')}}" required="">
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input type="password" name="password" value="" class="form-control sl-form-control" placeholder="{{translateText('Password*')}}" required="">
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input type="password" name="password_confirmation" value="" class="form-control sl-form-control" placeholder="{{translateText('Retype Password*')}}" required="">
                                                    </div>
                                                    <div class="form-group sl-btnarea">
                                                        <div class="sl-checkbox">
                                                            <input id="terms2" type="checkbox" name="category">
                                                            <label for="terms2">
                                                                <span>{{translateText('I agree to')}} <a href="javascript:void(0);">{{translateText('Terms and Conditions')}}</a></span>
                                                            </label>
                                                        </div>
                                                        <button type="submit" class="btn sl-btn">{{translateText('Signup')}}</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <input type="hidden" value="2" name="role_id">
                                        </form>
                                    </div>
                                </div>
                                <div class="sl-oroption">
                                    <span>or</span>
                                </div>
                                <div class="sl-loginicon">
                                    <ul>
                                        <li><a href="javascript:void(0);" class="sl-facebookbox"><i class="fab fa-facebook-f"></i>{{translateText('Signup via facebook')}}</a></li>
                                        <li><a href="javascript:void(0);" class="sl-googlebox"><i class="fab fa-google"></i>{{translateText('Signup via google')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sl-registerarea__terms">
                                <p>
                                    {{translateText('By signing up you agree to these')}}
                                    <a href="javascript:void(0);">{{translateText('Terms &amp; Conditions</a> &amp; consent to')}}
                                        <a href="javascript:void(0);">
                                            {{translateText('Cookie Policy &amp; Privacy Policy.')}}
                                        </a>
                                    </a>
                                </p>
                            </div>
                            <div class="sl-registerarea__footer">
                                <p> Already a member? <a href="{{ route('web.index') }}"> {{translateText('Sigin Now')}}</a></p>
                            </div>
                        </div>
                        <div class="sl-registercontent">
                            <figure class="sl-registercontent__img">
                                <img src="{{asset('frontend/images/register/img-01.jpg')}}" alt="img">
                                <figcaption>
                                    <strong class="sl-registerlogo">
                                        <a href="index.html"><img src="{{asset('frontend/images/register/logo.png')}}" alt="Images Description"></a>
                                    </strong>
                                    <div class="sl-registertitle">
                                        <h4>{{translateText('We’re Spreading Day by Day')}}</h4>
                                        <h2>{{translateText('Join Our Growing Team')}}</h2>
                                    </div>
                                    <div class="sl-descritpion">
                                        <p>{{translateText('Consectetur adipisicing elit sed dotiane eiusmod tempor incididunt utna
                                            labore etnalorale magna aliqua enim adman minim veniam quis nostrud
                                            exerciteon ullamco.')}}</p>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- MAIN END -->
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
<script src="{{asset('frontend/js/vendor/lightpick.js')}}"></script>
<script src="{{asset('frontend/js/vendor/tipso.js')}}"></script>
<script src="{{asset('frontend/js/vendor/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/vendor/countdown.js')}}"></script>
<script src="{{asset('frontend/js/vendor/backgroundstretch.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script>$.backstretch("/frontend/images/register/main-bg.jpg");</script>
</body>

<!-- Mirrored from amentotech.com/htmls/servosell/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Sep 2020 07:57:58 GMT -->
</html>

