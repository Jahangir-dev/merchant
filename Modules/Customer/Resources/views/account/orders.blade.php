@extends('web::layouts.master')
@section('content')
    <!-- MAIN START -->
    <main class="sl-main">
        <div class="sl-main-section">
            <div class="container">
                <div class="row">
                    @include('customer::layouts.asidebar')
                    <div class="col-lg-8 col-xl-9">
                        <div class="sl-dashboardbox sl-addNewArticle">
                            <div class="sl-dashboardbox__title">
                                <h2>{{translateText('My Account - Orders')}}</h2>
                            </div>
                            <div class="sl-dashboardbox__content sl-aboutDescription">
                                <table id="table_id">
                                    <thead>
                                    <tr>
                                        <th>{{translateText('Order No.')}}</th>
                                        <th>{{translateText('First Name')}}</th>
                                        <th>{{translateText('Last Name')}}</th>
                                        <th>{{translateText('Order Amount')}}</th>
                                        <th>{{translateText('Qty.')}}</th>
                                        <th>{{translateText('Type')}}</th>
                                        <th>{{translateText('Status')}}</th>
                                    </tr>
                                    </thead>

                                    @foreach($orders as $order)
                                    <tr>
                                      
                                        <td>
                                            {{ $order->order_number }}
                                        </td>

                                        <td>
                                           {{ $order->first_name }}
                                        </td>
                                        <td>
                                            {{ $order->last_name }}
                                        </td>
                                        <td>
                                            {{ config('settings.currency_symbol') }}{{ round($order->grand_total, 2) }}
                                        </td>
                                        <td>
                                            @if($order->type == 'coupon')
                                                1
                                            @else
                                            {{ $order->item_count }}
                                            @endif
                                        </td>
                                        <td>
                                            @if($order->type == 'coupon')
                                            <span class="badge badge-success">{{ strtoupper($order->type) }}</span>
                                            @elseif ($order->type == 'order')
                                            <span class="badge badge-success">{{ strtoupper('Product') }}</span>
                                            @endif
                                        </td>
                                         <td><span class="badge badge-success">{{ strtoupper($order->status) }}</span></td>
                                      
                                    </tr>
                                    @endforeach
                                    <thead>
                                    <tr>
                                        <th>{{translateText('Order No.')}}</th>
                                        <th>{{translateText('First Name')}}</th>
                                        <th>{{translateText('Last Name')}}</th>
                                        <th>{{translateText('Order Amount')}}</th>
                                        <th>{{translateText('Qty.')}}</th>
                                        <th>{{translateText('Type')}}</th>
                                        <th>{{translateText('Status')}}</th>
                                    </tr>
                                    </thead>
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

