@extends('web::layouts.master')
@section('content')
	<!-- post -->
	
		<main class="sl-main">
        <section class="sl-main-section">
            <div class="container">
                <div class="sl-product">
                    <div class="row">
                        <div class="col-lg-5">
                            <div id="sl-sync1" class="sl-product__img owl-carousel owl-theme">
                                <div class="sl-item item">
                                    <figure>
                                        <img src="{{$post->image != null ? asset('images/coupon/'.$post->image) : ''}}" alt="Image Description">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="sl-product__description">
                                <div class="sl-slider__tags">
                                	@if(!empty($post->price))
                                    <span class="sl-bg-red-orange">Paid</span>
                                    @else
                                    <span class="sl-bg-green">Free</span>
                                    @endif
                                </div>
                                <h5>{!! $post->detail != null ? $post->detail : ''!!}</h5>
                               
                                <div class="sl-product__stars">
                                	<div class="sl-appointment__location">
	                                	@if(!empty($post->price))
	                                    <em style="font-size: 20px;">Copuon Price: ${{$post->price != null ? $post->price : ''}}</em>
	                                    @else
	                                    <div class="sl-appointment__location">
	                                      <em style="font-size: 20px;">Copuon Code: {{$post->code != null ? $post->code : ''}}</em>
	                                    </div>
	                                    @endif
                                	</div>
                                    <div class="sl-appointment__feature">
                                        
                                        <div class="sl-appointment__location">
                                            <em>By: <a href="javascript:void(0);">{{$user_name[0]->first_name != null ? $user_name[0]->first_name : ''}} {{$user_name[0]->last_name != null ? $user_name[0]->last_name : ''}}</a></em>
                                        </div>
                                    </div>
                                </div>
                                <div class="sl-detail" style="display: none">
                                    <div class="sl-detail__view">
                                        <em><i class="ti-eye"></i>15,063 Viewed</em>
                                    </div>
                                    <div class="sl-detail__comment">
                                        <em><i class="ti-comment"></i>164 Comments</em>
                                    </div>
                                    <div class="sl-detail__report">
                                        <em><a href="javascript:void(0);"><i class="ti-alert"></i><span class="sl-alert-color">Report now</span></a></em>
                                    </div>
                                    <div class="sl-detail__report">
                                        <em><a href="javascript:void(0);"><i class="ti-share"></i>Share Profile</a></em>
                                    </div>
                                </div>
                                <div class="sl-product__color" style="display: none">
                                    <h6>Available Colors:</h6>
                                    <ul>
                                        <li>
                                            <input id="sl-product-color1" type="radio" name="color">
                                            <label class="sl-bg-yellow" for="sl-product-color1"></label>
                                        </li>
                                        <li>
                                            <input id="sl-product-color2" type="radio" name="color">
                                            <label class="sl-bg-pink" for="sl-product-color2"></label>
                                        </li>
                                        <li>
                                            <input id="sl-product-color3" type="radio" name="color">
                                            <label class="sl-bg-darkOrange" for="sl-product-color3"></label>
                                        </li>
                                        <li>
                                            <input id="sl-product-color4" type="radio" name="color">
                                            <label class="sl-bg-green" for="sl-product-color4"></label>
                                        </li>
                                        <li>
                                            <input id="sl-product-color5" type="radio" name="color">
                                            <label class="sl-bg-orange" for="sl-product-color5"></label>
                                        </li>
                                        <li>
                                            <input id="sl-product-color6" type="radio" name="color">
                                            <label class="sl-bg-red" for="sl-product-color6"></label>
                                        </li>
                                        <li>
                                            <input id="sl-product-color7" type="radio" name="color">
                                            <label class="sl-bg-darkGreen" for="sl-product-color7"></label>
                                        </li>
                                        <li>
                                            <input id="sl-product-color8" type="radio" name="color">
                                            <label class="sl-bg-blue" for="sl-product-color8"></label>
                                        </li>
                                        <li>
                                            <input id="sl-product-color9" type="radio" name="color">
                                            <label class="sl-bg-gray" for="sl-product-color9"></label>
                                        </li>
                                    </ul>
                                </div>
                                @php
								    use Carbon\Carbon;
								    $today_date = Carbon::now();

								    
								        $expire_date = Carbon::createFromFormat('Y-m-d', $post->expiry);
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
                                <div class="sl-product__stock">
                                	 @if($data_difference > 0)
                                    <h6>Status: <span class="sl-green">In Stock</span></h6>
                                    @else
                                    <h6>Status: <span class="sl-red">Expire</span></h6>
                                    @endif
                                    <div class="sl-product__stock--content">
                                       
                                        @if($data_difference > 0)
                                        <a href="javascript:void(0);" class="btn sl-btn sl-btn-active">Buy Now</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="sl-product__safty" style="display: none">
                                    <img src="images/product-single/img-01.png" alt="Image Description">
                                    <div class="sl-product__safty--description">
                                        <h6>Safty Instruction:</h6>
                                        <p>Deserunt mollit anim idamsti esta <em class="sl-red">“aperspiciatis unde omnis natusta error auptatem”</em> acaentium doloremque laudantium totam rem aperiam eaque ipsa quae inventore veritatis etiame quasi explicabo <a href="javascript:void(0);">enim ipsam voluptatem quia</a> voluptas spernatur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<!-- end forum -->
@endsection
@section('custom-scripts')

@endsection
