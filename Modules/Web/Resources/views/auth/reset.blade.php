@extends('web::layouts.master')

@section('content')

<main class="sl-main sl-register-main">
    <div class="sl-registerfixed" style="min-height: 50vh; height: 50%">
        <div class="container">
            <div class="row">
                <!--  Error handle -->
                <div class="col-12">
                    <div class="sl-register-holder">
                        <div class="sl-registerarea" style="margin-left: 25%">
                            <div class="sl-registersignarea">
                                <div class="sl-registersignarea__title">
                                    <h3>{{translateText('Reset Your Password')}}</h3>
                                </div>
                                <div class="tab-content sl-signup" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="signupcustomer" role="tabpanel" aria-labelledby="sl-signupcustomer">
                                        <form method="POST" action="{{ route('password.email') }}" class="sl-formtheme sl-signupform">
                                            @csrf
                                            <fieldset>
                                                <div class="sl-signupform-wrap">

                                                    <div class="form-group">
                                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{translateText('Email')}}" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                                    </div>

                                                    <div class="form-group sl-btnarea">

                                                        <button type="submit" class="btn sl-btn">{{translateText('Reset')}}</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>

                            </div>

                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection