@extends('web::layouts.master')
@section('content')
    <main class="sl-main">
        <div class="sl-main-section">
            <div class="container">
                <div class="row">
                    @include('customer::layouts.asidebar')
        <div class="sl-dashboardbox">
            <div class="sl-dashboardbox__title">
                <h2>Proceed</h2>
            </div>
            <div class="sl-dashboardbox__content">
            <form action="{{route('checkout.place.coupon')}}" method="POST" role="form">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <header class="card-header">
                                <h4 class="card-title mt-2">Billing Details</h4>
                            </header>
                            <article class="card-body">
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label>First name</label>
                                        <input type="text" value="{{$user->first_name}}" class="form-control" name="first_name" required="">
                                    </div>
                                    <div class="col form-group">
                                        <label>Last name</label>
                                        <input type="text" value="{{$user->last_name}}" class="form-control" name="last_name" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" required="">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input type="text" class="form-control" name="city" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Country</label>
                                        <input type="text" class="form-control" name="country" required="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-6">
                                        <label>Post Code</label>
                                        <input type="text" class="form-control" name="post_code" required="">
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Phone Number</label>
                                        @if(isset($user->profile->phone_number))
                                        <input type="text" value="{{$user->profile->phone_number}}" class="form-control" name="phone_number" required="">
                                        @else
                                        <input type="text" value="" class="form-control" name="phone_number" required="">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" disabled>
                                    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label>Order Notes</label>
                                    <textarea class="form-control" name="notes" rows="6"></textarea>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <header class="card-header">
                                        <h4 class="card-title mt-2">Your Order</h4>
                                    </header>
                                    <article class="card-body">
                                        <dl class="dlist-align">
                                            <dt>Total cost: </dt>
                                            <dd class="text-right h5 b"> {{ config('settings.currency_symbol') }}{{ $total_price }} </dd>
                                        </dl>
                                    </article>
                                </div>
                            </div>
                            <input type="hidden" class="form-control" name="code" value="{{ $promocode }}">
                            <input type="hidden" class="form-control" name="grand_total" value="{{ $total_price }}">

                            <div class="col-md-12 mt-4">
                                <button type="submit" class="subscribe btn btn-success btn-lg btn-block">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
        </div>
        </div>
        </div>
    </main>
    </section>
@endsection
