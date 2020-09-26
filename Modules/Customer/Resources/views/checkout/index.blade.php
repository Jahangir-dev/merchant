@extends('web::layouts.master')
@section('content')
    <!-- MAIN START -->
    <main class="sl-main">
        <div class="sl-main-section">
            <div class="container">
                <div class="row">
                    @include('customer::layouts.asidebar')

                    <div class="col-lg-8 col-xl-9">
                        <div class="sl-dashboardbox">
                            <div class="sl-dashboardbox__title">
                                <h2>Payment Method</h2>
                            </div>
                            <div class="sl-dashboardbox__content">
                                <div id="sl-payment-accordion" class="sl-payment-method accordion">
                                    <div class="sl-payment-method__content">
                                        <div class="sl-bank" data-toggle="collapse" role="list" data-target="#collapse1" aria-expanded="false">
                                            <div class="sl-payment-method__bank">
                                                <div class="sl-payment-method__radio">
                                                    <img src="images/all-payouts/img-01.jpg" alt="Image Description">
                                                </div>
                                                <div class="sl-payment-method__description">
                                                    <h5>Paypal</h5>
                                                    <p>All earnings will be sent direct to your paypal account</p>
                                                </div>
                                                <div class="sl-payment-method__btn">
                                                    <a href="javascript:void(0);" class="btn sl-btn">Select</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse1" class="collapse at-class" data-parent="#sl-payment-accordion">
                                            <div class="sl-payment-method__dropdown">
                                                <input class="form-control sl-form-control" type="text" placeholder="Enter Your Paypal ID*">
                                                <p>* You need to add your paypal ID above field. For more about <a href="javascript:void(0);">Paypal</a><a href="javascript:void(0);">Create an account</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sl-payment-method__content">
                                        <div class="sl-bank" data-toggle="collapse" role="list" data-target="#collapse2" aria-expanded="false">
                                            <div class="sl-payment-method__bank">
                                                <div class="sl-payment-method__radio">
                                                    <img src="images/all-payouts/img-02.jpg" alt="Image Description">
                                                </div>
                                                <div class="sl-payment-method__description">
                                                    <h5>Bank Transfer</h5>
                                                    <p>All earnings will be sent direct to your bank account</p>
                                                </div>
                                                <div class="sl-payment-method__btn">
                                                    <a href="javascript:void(0);" class="btn sl-btn">Select</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="collapse2" class="collapse at-class" data-parent="#sl-payment-accordion">
                                            <div class="sl-payment-method__dropdown">
                                                <input class="form-control sl-form-control" type="text" placeholder="Enter Your Bank Account*">
                                                <p>* You need to add your Bank Account above field.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sl-dashboardbox">
                            <div class="sl-dashboardbox__title">
                                <h2>All Payouts</h2>
                            </div>
                            <div class="sl-dashboardbox__content">
                                <table id="checkout-cart-item" class="table sl-my-payoutsTable">
                                    {{--<thead>
                                    <tr>
                                        <th scope="col">{{ translateText('Name') }}</th>
                                        <th scope="col">{{ translateText('Price') }}</th>
                                        <th scope="col">{{ translateText('Quantity') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                    <tr id="tr-{{ $item->id }}">
                                        <td data-label="Details">{{ $item->name }}</td>
                                        <td data-label="Price">{{ $item->price }}</td>
                                        <td data-label="Amount">
                                            <form class="sl-vlaue-btn">
                                                <a href="javascript:void(0);" data-id="{{ $item->id }}" data-quantity="{{ $item->quantity }}" onclick="cartItemDecrement(this)" class="sl-input-decrement">-</a>
                                                <input class="sl-input-number" type="number" value="{{ $item->quantity }}" min="1" max="1000">
                                                <a href="javascript:void(0);" data-id="{{ $item->id }}" data-quantity="{{ $item->quantity }}" onclick="cartItemIncrement(this)" class="sl-input-increment">+</a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td>Your total is :</td>
                                        <td></td>
                                        <td><span class="border p-2" id="checkout-total-price"></span></td>
                                    </tr>
                                    </tbody>--}}
                                </table>
                                <div class="row">
                                    <div class="col-9">
                                        <input id="promo" name="promo" class="form-control sl-form-control" type="text" placeholder="Enter Your Promo">
                                    </div>
                                    <div class="col-3">
                                        <button onclick="checkPromo()" class="btn btn-success sl-form-control">Apply Promo</button>
                                    </div>
                                </div>
                                <div class="row">
                                        <button onclick="{{ route('proceed.to.payment') }}" class="btn btn-success sl-form-control">Proceed To checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <!-- MAIN END -->
@endsection

