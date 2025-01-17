@extends('merchant::layouts.master')
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">        
  <!-- flaticon css -->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/flaticon/flaticon.css')}}"/>
  
@section('content')
    <!-- MAIN START -->
    <main class="sl-main">
        <div class="sl-main-section">
            <div class="container">
                <div class="row">
                    @include('merchant::layouts.asidebar')
                    <div class="col-lg-8 col-xl-9">
                        <div class="sl-dashboardbox sl-addNewArticle">
                            <div class="sl-dashboardbox__title">
                                <h2>{{translateText('Purchased Coupons')}}</h2>
                            </div>
                            <div class="sl-dashboardbox__content sl-aboutDescription">
                                <table id="table_id">
                                    <thead>
                                    
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Type</th>
                                        <th>Title</th>
                                        <th>Product</th>
                                        <th>Discount</th>
                                        <th>Coupon code</th>
                                        <th>User Name</th>
                                        <th>{{translateText('Coupon status')}}</th>
                                        <th>Paid/Free</th>
                                        
                                    
                                    </thead>
                                    @if (isset($coupon))
                                      <tbody>
                                        @foreach ($coupon as $key => $item)

                                         @php
                                    
                                    $today_date = Carbon\Carbon::now();

                                    
                                        $expire_date = Carbon\Carbon::createFromFormat('Y-m-d', $item->expiry);
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
                                            @if ($item->image != null)
                                              <img src="{{ asset('images/coupon/'.$item->image) }}" class="img-responsive" width="80" alt="image">
                                            @else
                                              N/A  
                                            @endif
                                          </td>
                                         <td>{{$item->type == 'c' ? 'Coupon' : 'Deal'}}</td>
                
                                          <td>{{\Illuminate\Support\Str::limit($item->title, 20)}}</td>
                                           <td>{{strtok($item->product->name, ' ')}}</td>
                                            <td>{{$item->discount ? $item->discount : '0'}}</td>
                                            <td>{{$item->code}}</td>
                                            <td>{{strtok($item->user_name,' ')}}</td>
                                            
                                             <td>
                                             @if($data_difference >= 0)
                                            <span class="badge badge-success">Active</span>
                                            @else 
                                                <span class="badge badge-warning">
                                                    Expire
                                                </span> 
                                            @endif
                                        </td>
                                           <td>{{$item->is_active == '1' ? 'Paid' : 'Free'}}</td>
                                          
                                        </tr>
                                        @endforeach
                                      </tbody>
                                     @endif  
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
