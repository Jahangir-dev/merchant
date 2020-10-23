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
                                <h2>{{translateText('My Account - Coupons')}}</h2>
                            </div>
                            <div class="sl-dashboardbox__content sl-aboutDescription">
                                <table id="table_id">
                                    <thead>
                                    <tr>
                                        <th>{{translateText('No.')}}</th>
                                        <th>{{translateText('Coupon Name')}}</th>
                                        <th>{{translateText('Discount')}}</th>
                                        <th>{{translateText('Coupon Code')}}</th>
                                        <th>{{translateText('Coupon status')}}</th>
                                        <th>{{translateText('Used status')}}</th>
                                    </tr>
                                    </thead>

                                    @foreach($coupons as $key => $order)

                                     @php
                                    
                                    $today_date = Carbon\Carbon::now();

                                    
                                        $expire_date = Carbon\Carbon::createFromFormat('Y-m-d', $order[0]->expiry);
                                        $data_difference = $today_date->diffInDays($expire_date, false);  //false param

                                        if($data_difference > 0) {
                                            //not expired
                                        }
                                        elseif($data_difference < 0) {
                                            //expired
                                        } else {
                                            //today
                                        }
                                    

                                    @endphp
                                    <tr>
                                        
                                        <td>{{$key+1}}</td>
                                        <td>
                                            {{ $order[0]->title }}
                                        </td>

                                        <td>
                                            {{ $order[0]->discount }}
                                        </td>
                                        <td>
                                            {{ $order[0]->code }}
                                        </td>
                                         <td>
                                             @if($data_difference >= 0)
                                            <span class="badge badge-success">Active</span>
                                            @else 
                                                <span class="badge badge-warning">
                                                    Expire
                                                </span> 
                                            @endif
                                        </td>
                                        <td>
                                             @if($order[0]['pCoupon']['status'] == null || $order[0]['pCoupon']['status'] == 0)
                                            <span class="badge badge-success">Available</span>
                                            @else 
                                                <span class="badge badge-warning">
                                                    USED
                                                </span> 
                                            @endif

                                        </td>
                                      
                                    </tr>
                                    @endforeach
                                    <thead>
                                    <tr>
                                        <th>{{translateText('No.')}}</th>
                                        <th>{{translateText('Coupon Name')}}</th>
                                        <th>{{translateText('Discount')}}</th>
                                        <th>{{translateText('Coupon Code')}}</th>
                                        <th>{{translateText('Coupon status')}}</th>
                                        <th>{{translateText('Used status')}}</th>
                                    
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

