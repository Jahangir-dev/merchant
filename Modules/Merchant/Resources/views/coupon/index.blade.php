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
                                <h2>{{translateText('Coupons')}}</h2>
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
                                        <th>User</th>
                                        <th>Paid/Free</th>
                                        <th>Actions</th>
                                    
                                    </thead>
                                    @if (isset($coupon))
                                      <tbody>
                                        @foreach ($coupon as $key => $item)
                                       
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
                                            <td>{{strtok($item->user->first_name,' ')}}</td>
                                            <td>{{$item->is_active == '1' ? 'Paid' : 'Free'}}</td>
                                            
                                            <td>
                  <div class="admin-table-action-block">
                    <a href="{{route('mCoupon.edit', $item->id)}}" data-toggle="tooltip" data-original-title="Edit" ><i class="fa fa-pen" aria-hidden="true"></i></a>
                    <!-- Delete Modal -->
                    <button type="button" data-toggle="modal" data-target="#{{$item->id}}deleteModal"><i class="fa fa-trash" aria-hidden="true"></i> </button>
                    <!-- Modal -->
                    <div id="{{$item->id}}deleteModal" class="delete-modal modal fade" role="dialog">
                      <div class="modal-dialog modal-sm">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="delete-icon"></div>
                          </div>
                          <div class="modal-body text-center">
                            <h4 class="modal-heading">Are You Sure ?</h4>
                            <p>Do you really want to delete these records? This process cannot be undone.</p>
                          </div>
                          <div class="modal-footer">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['Admin\CouponController@destroy', $item->id]]) !!}
                                <button type="reset" class="btn btn-gray translate-y-3" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-danger">Yes</button>
                            {!! Form::close() !!}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
                                          
                                          
                                          
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
