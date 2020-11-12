@extends('web::layouts.master')

@section('content')

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
                                    <!-- <h3>{{translateText('Signup as customer')}}</h3> -->
                                </div>
                                <ul class="nav sl-registertabs" role="tablist">
                                    <li class="nav-item" style="width: 100%">
                                        <a class="nav-link active" id="sl-signupcustomer" data-toggle="tab" href="#signupcustomer" role="tab" aria-selected="true">
                                            <span><i class="fa fa-check"></i></span>
                                            <h4>{{translateText('Signup As')}} {{translateText('Customer')}}
                                            </h4>
                                            <i class="ti-info-alt toltip-content" data-tipso="Custome"></i>
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" id="sl-signupprovider" data-toggle="tab" href="#signupprovider" role="tab" aria-selected="false">
                                            <span><i class="fa fa-check"></i></span>
                                            <h4><em>{{translateText('Signup as')}}</em> {{translateText('Merchant')}}
                                            </h4>
                                            <i class="ti-info-alt toltip-content" data-tipso="Provider"></i>
                                        </a>
                                    </li> -->
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
                                                        <div class="sl-select"  style="border: 1px solid #d2d6dc">
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
                                                    <div class="form-group form-group-half">
                                                        <div class="sl-select" style="border: 1px solid #d2d6dc">
                                                            <select name="gender">
                                                                <option value="" selected disabled>{{translateText('City of Intrest*')}}</option>
                                                                
                                                            </select>
                                                        </div>
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
                            
                        </div>
                        <div class="sl-registercontent">
                          <div class="sl-registersignarea">
                        	<div class="sl-registersignarea__title">
                                    <!-- <h3>{{translateText('Signup as customer')}}</h3> -->
                            </div>
                            <ul class="nav sl-registertabs" role="tablist">
                                    <li class="nav-item" style="width: 100%">
                                        <a class="nav-link active" id="sl-signupcustomer" data-toggle="tab" href="#signupcustomer" role="tab" aria-selected="true">
                                            <span><i class="fa fa-check"></i></span>
                                            <h4>{{translateText('Login')}}
                                            </h4>
                                            <i class="ti-info-alt toltip-content" data-tipso="Custome"></i>
                                        </a>
                                    </li>
                                </ul>
                               <div class="tab-content sl-signup" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="signupcustomer" role="tabpanel" aria-labelledby="sl-signupcustomer">

                                    	 <form method="POST" action="{{ route('login') }}" class="sl-formtheme sl-formlogin">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control sl-form-control" placeholder="Your Email*">
                                </div>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                    <input name="password" required autocomplete="current-password" type="password" class="form-control sl-form-control @error('password') is-invalid @enderror" placeholder="Password*">
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                                <div class="form-group sl-btnarea" >
                                    <button type="submit" class="btn sl-btn">{{translateText('login')}}</button>
                                    <div class="sl-checkbox">
                                        <input id="terms2" type="checkbox" name="category">
                                        <label for="terms2">
                                          <span>{{translateText('Remember me')}}</a></span>
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <div class="sl-loginfooterinfo" style="margin-top: 40px">
                            <a href="{{route('web.register')}}">{{translateText('Are  you a Merchant?')}} {{translateText('Signin now')}}</a>
                            <a href="{{route('web.forgot-password')}}" class="sl-forgot-password">{{translateText('Forgot password?')}}</a>
                        </div>
                        <span class="sl-optionsbar" style="margin-top: 90px"><em>or</em></span>
                        <div class="sl-loginicon">
                            <ul>
                                <li><a href="javascript:void(0);" class="sl-facebookbox"><i class="fab fa-facebook-f"></i>{{translateText('Via facebook') }}</a></li>
                                <li><a href="javascript:void(0);" class="sl-googlebox"><i class="fab fa-google"></i>{{translateText('Via google') }}</a></li>
                            </ul>
                        </div>

                                 </div>
                             </div>
                        </div>

                    </div>
                    </div>
                    <div class="sl-registerarea__terms" style="">
                                <p>
                                    {{translateText('By signing up you agree to these')}}
                                    <a href="javascript:void(0);">{{translateText('Terms &amp; Conditions &amp; consent to')}} </a>
                                        <a href="javascript:void(0);">
                                            {{translateText('Cookie Policy &amp; Privacy Policy.')}}
                                        </a>
                                    </a>
                                </p>
                            </div>
                            <div class="sl-registerarea__footer" style="">
                                <p style="font-size: 17px"> Are  you a Merchant? <a href="{{ route('web.register') }}"> {{translateText('Sign in / Sign up')}}</a></p>
                            </div>
                </div>
            </div>
        </div>
    </div>
</main>    
<style type="text/css">
	.sl-registersignarea{
	    border-right: 1px solid #d2d6dc;
	}
</style>
@endsection