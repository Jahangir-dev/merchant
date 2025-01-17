@extends('web::layouts.master')

@section('content')
    <!-- BANNER START -->
    @include('web::layouts.banner')
    <!-- BANNER END -->
    <!-- MAIN START -->
    <main class="sl-main">
        <!-- COMMUNITY END -->
        <!-- SERVICE PROVIDER START -->
        <section class="sl-main-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="sl-sectionHead">
                            <div class="sl-sectionHead__title sl-below-line sl-below-line__active">
                                <h2>Coupons</h2>
                            </div>
                            <div class="sl-sectionHead__description">
                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim adena minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slCategoryOwl" class="owl-carousel owl-theme sl-owl-nav">
                @if($coupons)
                        @foreach($coupons as $coupan)

                <div class="item">
                    <div class="sl-slider">
                        <figure>

                            <a href="{{url('post/'.$coupan->uni_id.'/'.$coupan->slug)}}" ><img src="{{ asset('images/coupon/'.$coupan->image) }}" alt="Image Description"></a>

                        </figure>
                        <div class="sl-slider__content">
                            <div class="sl-slider__header">
                                <div class="sl-slider__tags">
                                    @if($coupan->is_active == 1)
                                    <a href="{{url('post/'.$coupan->uni_id.'/'.$coupan->slug)}}"  class="sl-bg-red-orange">Paid</a>
                                    @else
                                    <a href="{{url('post/'.$coupan->uni_id.'/'.$coupan->slug)}}"  class="sl-bg-green">Free</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
        </section>
        <!-- CATEGORY START -->
        <section class="sl-main-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="sl-sectionHead">
                            <div class="sl-sectionHead__title sl-below-line sl-below-line__active">
                                <h2>Most Visited Categories</h2>
                            </div>
                            <div class="sl-sectionHead__description">
                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim adena minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sl-category sl-row">

                    @foreach($categories as $index => $category)

                        @if($index < 10)
                    <div class="sl-col sl-col-sm-1-of-2 sl-col-md-1-of-3 sl-col-lg-1-of-4 sl-col-xl-1-of-5">
                        <div class="sl-category__service">
                            <img src="{{asset('/storage/'.$category->image)}}" alt="image Description" style="width: 150px" />
                            <div class="sl-category__description">
                                <a href="{{route('web.category.show', ['slug' => $category->slug])}}">
                                    <h5>{{ translateText($category->name) }}</h5>
                                </a>
                                <span>{{translateText('Providers')}}</span>
                            </div>
                            <a href="{{route('web.category.show', ['slug' => $category->slug])}}" class="sl-category__icon"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                        @endif
                    @endforeach


                </div>
            </div>
        </section>

        <!-- CATEGORY END -->
        <!-- COMMUNITY START -->
        <section>
            <div class="sl-community">
                <div class="sl-overlay">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="sl-community__content sl-main-section">
                                    <div class="sl-community__description">
                                        <h5>{{translateText('We’re Spreading Day by Day')}}</h5>
                                        <h2>{{translateText('Join Our Friendy Community')}}</h2>
                                        <p>{{translateText('Consectetur adipisicing elit sed dotiane eiusmod tempor incididunt utna
                                            labore etnalorale magna aliqua enim ad minim veniam quis nostrud exerciteon
                                            ullamco.')}}</p>
                                    </div>
                                    <div class="sl-community__btn">
                                        <a href="{{route('web.register')}}" class="btn sl-btn sl-btn-active">{{translateText('Register Now')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- COMMUNITY END -->
        <!-- SERVICE PROVIDER START -->
        @if($brands != null)
        <section class="sl-main-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="sl-sectionHead">
                            <div class="sl-sectionHead__title sl-below-line sl-below-line__active">
                                <h2>Top Service Provider</h2>
                            </div>
                            <div class="sl-sectionHead__description">
                                <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim adena minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slCategoryOwl" class="owl-carousel owl-theme sl-owl-nav">
                @foreach($brands as $brand)

                <div class="item">
                    <div class="sl-slider">
                        <figure>
                            <!-- <a href="javascript:void(0);"><img src="{{asset('storage/'.$brand->logo )}}" alt="Image Description"></a> -->
                            <a href="javascript:void(0);"><img src="{{asset('storage/'.$brand->logo )}}" alt="Image Description"></a>
                            <!-- <a href="javascript:void(0);" class="sl-like"><i class="far fa-heart"></i></a> -->
                        </figure>
                        <div class="sl-slider__content">
                            <div class="sl-slider__header">
                                <div class="sl-slider__tags">
                                  <!--   <a href="javascript:void(0);" class="sl-bg-red-orange">Featured</a>
                                    <a href="javascript:void(0);" class="sl-bg-green">Verified</a> -->
                                </div>
                                <a href="{{route('web.brand.show', ['slug' => $brand->slug])}}">{{translateText($brand->name)}}</a>
                                <!-- <h5><a href="javascript:void(0);">A Place Where We Care Life</a></h5> -->
                                <div class="sl-featureRating">
                                    <!-- <span class="sl-featureRating__stars"><span></span></span>
                                    <em>(1887 Feedback)</em> -->
                                </div>
                                <em>By: <a href="{{route('web.brand.show', ['slug' => $brand->slug])}}">{{translateText($brand['user']->first_name)}}</a></em>
                            </div>
                            <div class="sl-slider__footer">
                                <em>{{$brand->address}}(<a href="{{'https://maps.google.com/?q='.$brand->latitude.'+'.$brand->longitude}}">{{translateText(translateText('Directions'))}}</a>)</em>

                                <div class="sl-shareHolder">
                                    <a href="javascript:void(0);" class="slShareHolder" ><i class="ti-more-alt"></i></a>
                                    <div class="sl-shareHolder__option">
                                        <span>Share:</span>
                                        <ul class="sl-socialicons">
                                            <li class="sl-facebook"><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                                            <li class="sl-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                            <li class="sl-youtube"><a href="javascript:void(0);"><i class="fab fa-youtube"></i></a></li>
                                            <li class="sl-instagram"><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        @endif
        <!-- SERVICE PROVIDER END -->
        <!-- STATS START -->
        <section>
            <div class="sl-statsBanner">
                <div class="sl-overlay">
                    <div class="container">
                        <div id="counter" class="sl-stats sl-main-section">
                            <div class="sl-stats__content">
                                <i class="ti-face-smile"></i>
                                <div class="sl-stats__description">
                                    <h3 data-from="0" data-to="35125" data-speed="8000" data-refresh-interval="50">35,125</h3>
                                    <p>{{translateText('Happy Clients')}}</p>
                                </div>
                            </div>
                            <div class="sl-stats__content">
                                <i class="ti-user"></i>
                                <div class="sl-stats__description">
                                    <h3 data-from="0" data-to="12556" data-speed="8000" data-refresh-interval="50">12,556</h3>
                                    <p>{{translateText('Active Members')}}</p>
                                </div>
                            </div>
                            <div class="sl-stats__content">
                                <i class="ti-shopping-cart"></i>
                                <div class="sl-stats__description">
                                    <h3 data-from="0" data-to="41856" data-speed="8000" data-refresh-interval="50">41,856</h3>
                                    <p>{{translateText('Products For Sale')}}</p>
                                </div>
                            </div>
                            <div class="sl-stats__content">
                                <i class="ti-cup"></i>
                                <div class="sl-stats__description">
                                    <h3 data-from="0" data-to="14753" data-speed="8000" data-refresh-interval="50">14,753</h3>
                                    <p>{{translateText('Cup Of Coffee')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- STATS END -->
        <!-- PACKAGES START -->

        <!-- PACKAGES END -->
        <!-- FEEDBACK START -->
        <section class="sl-feedbackBanner">
            <div class="sl-overlay">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9 col-xl-8">
                            <div class="sl-sectionHead">
                                <div class="sl-sectionHead__title sl-below-line sl-below-line__active">
                                    <h2>{{translateText('Feedback That Matters')}}</h2>
                                </div>
                                <div class="sl-sectionHead__description">
                                    <p>{{translateText('Consectetur adipisicing elit sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua enim adena minim veniam quis nostrud exercitation
                                        ullamco laboris nisi ut aliquip ex ea commodo consequat')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="slFeedbackOwl" class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="sl-feedback">
                                <div class="sl-feedback__title">
                                    <img src="{{asset('frontend/images/index/feedback/user-icon/img-01.jpg')}}" alt="Image Description">
                                    <div class="sl-feedback__title__text">
                                        <h5>{{translateText('Amenda Wigh')}}</h5>
                                        <p><em>{{translateText('United Arab Emirates')}}</em></p>
                                    </div>
                                </div>
                                <div class="sl-feedback__description">
                                    <p><em>“{{translateText('Consectetur adipisicing elit sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua enim adena minim veniam quis nostrud')}}”</em></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sl-feedback">
                                <div class="sl-feedback__title">
                                    <img src="{{asset('frontend/images/index/feedback/user-icon/img-02.jpg')}}" alt="Image Description">
                                    <div class="sl-feedback__title__text">
                                        <h5>{{translateText('Stuart Loney')}}</h5>
                                        <p><em>{{translateText('New york')}}</em></p>
                                    </div>
                                </div>
                                <div class="sl-feedback__description">
                                    <p><em>“{{translateText('Consectetur adipisicing elit sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua enim adena minim veniam quis nostrud')}}”</em></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FEEDBACK END -->

        <!-- FEATURED PRODUCTS START -->
        <section class="sl-main-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="sl-sectionHead">
                            <div class="sl-sectionHead__title sl-below-line sl-below-line__active">
                                <h2>{{translateText('Featured Products')}}</h2>
                            </div>
                            <div class="sl-sectionHead__description">
                                <p>{{translateText('Consectetur adipisicing elit sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua enim adena minim veniam quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sl-featuredProducts">
                    <div class="row">
                        @php $count = 0 @endphp
                        @foreach($products as $index => $product)
                            @if($product->featured && $count < 8)

                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="sl-featuredProducts--post">

                                    <figure>
                                        @if(count($product->images) > 0)
                                        <img src="{{asset('storage/'.$product->images[0]->full )}}" alt="Image Description">
                                        @else
                                        <img src="{{asset('storage/')}}" alt="Image Description">
                                        @endif
                                        <figcaption>
                                            <div class="sl-slider__tags">
                                                @if(in_array($product->id, $sale_products))
                                                    @php
                                                        $percentage = $product->codes[0];
                                                        $promocodes = DB::table('promocodes')->where('code', $percentage->promo)->first();
                                                    @endphp
                                                    <span class="sl-bg-red-orange"> {{$promocodes->reward}}% Off</span>
                                                @endif
                                            </div>
                                            <a id="wist-list-{{ $product->id }}" onclick="addToWishList({{ $product->id }})" href="javascript:void(0);" class=""><i class="far fa-heart"></i></a>
                                        </figcaption>
                                    </figure>
                                    <div class="sl-featuredProducts--post__content">
                                        <div class="sl-featuredProducts--post__title">
                                            <a href="{{route('web.product.show', ['slug' => $product->slug])}}">
                                                <h6>{{translateText($product->name)}}</h6>
                                            </a>
                                        </div>
                                        <div class="sl-featuredProducts--post__price">
                                            <h5>{{$product->sale_price}}</h5>
                                            <h6>{{$product->price}}</h6>
                                        </div>

                                        {{--<div class="sl-featureRating">
                                            <span class="sl-featureRating__stars"><span></span></span>
                                            <em>{{translateText('(1887 Feedback)')}}</em>
                                        </div>--}}
                                        <em>By: <a href="{{route('web.brand.show', ['slug' => $product->brand->slug])}}">{{translateText($product->brand->name)}}</a></em>
                                        <button onclick="myFunction({{ $product }})" class="btn sl-btn">{{translateText('Add To Cart')}}</button>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="sl-slider__footer">
                                                    <em>{{$product->address}}(<a href="{{'https://maps.google.com/?q='.$product->latitude.'+'.$product->longitude}}">{{translateText(translateText('Directions'))}}</a>)</em>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="sl-slider__footer sl-slider__tags">
                                                    @if(in_array($product->id, $sale_products))
                                                        @php
                                                            $date1=date_create(date("Y-m-d"));
                                                            $date2=date_create($product->codes[0]->end_date);
                                                            $diff=date_diff($date1,$date2);
                                                        @endphp
                                                        <span class="sl-bg-red-orange">{{ $diff->days }} Days Left</span>
                                                    @endif
                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                                @php $count++ @endphp
                            @endif
                        @endforeach


                    </div>
                </div>
            </div>
        </section>
        <!-- FEATURED PRODUCTS END -->
    </main>
    <!-- MAIN END -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-center">
                    <h1 class="modal-title" id="myModalLabel">Subscribe to our Newsletter.</h1>
                    <button type="button" class="modal-header close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="{{route('subscribe-newsletter')}}">
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-append"></span>
                                    <input type="email" name="user_email" class="form-control input-lg"  placeholder="Your email here">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Subscribe">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!--  <script>
        window.onload = function (){
            $('#myModal').modal('show');
        }
    </script> -->
@endsection
