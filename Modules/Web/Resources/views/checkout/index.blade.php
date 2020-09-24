@extends('web::layouts.master')

@section('content')
    <!-- MAIN START -->
    <main class="sl-main">
        <div class="sl-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-9">
                        <div class="sl-dashboardbox">
                            <div class="sl-dashboardbox__title">
                                <h2>All Payouts</h2>
                            </div>
                            <div class="sl-dashboardbox__content">
                                <table class="table sl-my-payoutsTable">
                                    <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                    <tr>
                                        <td data-label="Account Details">{{$item->name}}<i class="ti-info-alt toltip-content" data-tipso="Plus Member"></i></td>
                                        <td data-label="Date">{{$item->price}}</td>
                                        <td data-label="Method">{{$item->quantity}}</td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN END -->
@endsection
