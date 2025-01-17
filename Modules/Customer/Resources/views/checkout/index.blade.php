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
                                <form method="post" action="{{ route('customer.order') }}">
                                    @csrf
                                    <div class="row mt-2">
                                        <div class="col-9">
                                            <input id="promo" name="code" class="form-control sl-form-control" type="text" placeholder="Enter Your Promo">
                                            <input id="total_price" name="total_price" class="form-control sl-form-control" type="hidden" value="{{\Cart::getSubTotal()}}" placeholder="Enter Your Promo">
                                        </div>
                                        <div class="col-3">
                                            <a onclick="checkPromo()" id="checkPromoBtn" class="btn btn-success sl-form-control" style="color:white">Apply Promo</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-3 mt-2">
                                            <button class="btn btn-primary sl-form-control" style="padding-top: 9px;color: white;">Proceed To checkout</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <!-- MAIN END -->
@endsection

