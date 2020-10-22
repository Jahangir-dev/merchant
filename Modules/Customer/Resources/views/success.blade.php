@extends('customer::layouts.master')
@section('title', 'Order Completed')
@section('content')
<main class="sl-main">
        <div class="sl-main-section">
            <div class="container">
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Order Completed</h2>
        </div>
    </section>
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <div class="row">
                <main class="col-sm-12">
                    <p class="alert alert-success">Your order placed successfully. Your order number is : {{ $order->order_number }}</p></main>
                    @if($code != '')
                        <main class="col-sm-12">
                            <p class="alert alert-success">Your coupon code is : {{ $code }}</p>
                        </main>
                    @endif
            </div>
        </div>
    </section>
</div>
</div>
</main>
@stop
