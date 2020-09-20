@extends('web::layouts.master')

@section('content')
    <!-- BANNER START -->
    @include('web::layouts.banner')
    <!-- BANNER END -->
    <!-- MAIN START -->
    <main class="sl-main">
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
                            <img src="{{asset('/storage/'.$category->image)}}" alt="image Description">
                            <div class="sl-category__description">
                                <a href="{{route('web.category.show', ['slug' => $category->slug])}}">
                                    <h5>{{ translateText($category->name) }}</h5>
                                </a>
                                <span>{{translateText('12,568 Providers')}}</span>
                            </div>
                            <a href="{{route('web.category.show', ['slug' => $category->slug])}}" class="sl-category__icon"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                        @endif
                    @endforeach
{{--                    <div class="sl-col sl-col-sm-1-of-2 sl-col-md-1-of-3 sl-col-lg-1-of-4 sl-col-xl-1-of-5">
                        <div class="sl-category__service">
                            <img src="{{asset('frontend/images/index/category/img-02.jpg')}}" alt="image Description">
                            <div class="sl-category__description">
                                <h5>IT Services</h5>
                                <span>11,756 Providers</span>
                            </div>
                            <a href="javascript:void(0);" class="sl-category__icon"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="sl-col sl-col-sm-1-of-2 sl-col-md-1-of-3 sl-col-lg-1-of-4 sl-col-xl-1-of-5">
                        <div class="sl-category__service">
                            <img src="{{asset('frontend/images/index/category/img-03.jpg')}}" alt="image Description">
                            <div class="sl-category__description">
                                <h5>Networking</h5>
                                <span>11,125 Providers</span>
                            </div>
                            <a href="javascript:void(0);" class="sl-category__icon"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="sl-col sl-col-sm-1-of-2 sl-col-md-1-of-3 sl-col-lg-1-of-4 sl-col-xl-1-of-5">
                        <div class="sl-category__service">
                            <img src="{{asset('frontend/images/index/category/img-04.jpg')}}" alt="image Description">
                            <div class="sl-category__description">
                                <h5>Plumbing</h5>
                                <span>10,045 Providers</span>
                            </div>
                            <a href="javascript:void(0);" class="sl-category__icon"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="sl-col sl-col-sm-1-of-2 sl-col-md-1-of-3 sl-col-lg-1-of-4 sl-col-xl-1-of-5">
                        <div class="sl-category__service">
                            <img src="{{asset('frontend/images/index/category/img-05.jpg')}}" alt="image Description">
                            <div class="sl-category__description">
                                <h5>Learning & Driver</h5>
                                <span>10,575 Providers</span>
                            </div>
                            <a href="javascript:void(0);" class="sl-category__icon"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="sl-col sl-col-sm-1-of-2 sl-col-md-1-of-3 sl-col-lg-1-of-4 sl-col-xl-1-of-5">
                        <div class="sl-category__service">
                            <img src="{{asset('frontend/images/index/category/img-06.jpg')}}" alt="image Description">
                            <div class="sl-category__description">
                                <h5>Law & Finance</h5>
                                <span>9,245 Providers</span>
                            </div>
                            <a href="javascript:void(0);" class="sl-category__icon"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="sl-col sl-col-sm-1-of-2 sl-col-md-1-of-3 sl-col-lg-1-of-4 sl-col-xl-1-of-5">
                        <div class="sl-category__service">
                            <img src="{{asset('frontend/images/index/category/img-07.jpg')}}" alt="image Description">
                            <div class="sl-category__description">
                                <h5>Medical</h5>
                                <span>9,421 Providers</span>
                            </div>
                            <a href="javascript:void(0);" class="sl-category__icon"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="sl-col sl-col-sm-1-of-2 sl-col-md-1-of-3 sl-col-lg-1-of-4 sl-col-xl-1-of-5">
                        <div class="sl-category__service">
                            <img src="{{asset('frontend/images/index/category/img-08.jpg')}}" alt="image Description">
                            <div class="sl-category__description">
                                <h5>Handyman Services</h5>
                                <span>7,123 Providers</span>
                            </div>
                            <a href="javascript:void(0);" class="sl-category__icon"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="sl-col sl-col-sm-1-of-2 sl-col-md-1-of-3 sl-col-lg-1-of-4 sl-col-xl-1-of-5">
                        <div class="sl-category__service">
                            <img src="{{asset('frontend/images/index/category/img-09.jpg')}}" alt="image Description">
                            <div class="sl-category__description">
                                <h5>Print & Publishing</h5>
                                <span>5,058 Providers</span>
                            </div>
                            <a href="javascript:void(0);" class="sl-category__icon"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="sl-col sl-col-sm-1-of-2 sl-col-md-1-of-3 sl-col-lg-1-of-4 sl-col-xl-1-of-5">
                        <div class="sl-category__service">
                            <img src="{{asset('frontend/images/index/category/img-10.jpg')}}" alt="image Description">
                            <div class="sl-category__description">
                                <h5>House Cleaning</h5>
                                <span>4,982 Providers</span>
                            </div>
                            <a href="javascript:void(0);" class="sl-category__icon"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>--}}
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
                @foreach($products as $index => $product)
                    @if($index < 10)
                <div class="item">
                    <div class="sl-slider">
                        <figure>
                            <a href="javascript:void(0);"><img src="{{asset('/storage/'. count($product->images) > 0 ? $product->images[0]->full : 'null')}}" alt="Image Description"></a>
                            <a href="javascript:void(0);"><img src="{{asset($product->user->profile->image)}}" alt="Image Description"></a>
                            <a href="javascript:void(0);" class="sl-like"><i class="far fa-heart"></i></a>
                        </figure>
                        <div class="sl-slider__content">
                            <div class="sl-slider__header">
                                <div class="sl-slider__tags">
                                    <a href="javascript:void(0);" class="sl-bg-red-orange">Featured</a>
                                    <a href="javascript:void(0);" class="sl-bg-green">Verified</a>
                                </div>
                                @php $category = $product->categories->first(); @endphp
                                <a href="{{route('web.category.show', ['slug' => $category ? $category->slug : 'null'])}}">{{translateText($category ? $category->name : '')}}</a>
                                <h5><a href="{{route('web.product.show', ['slug' => $product ? $product->slug : 'null'])}}">{{translateText($product->name)}}</a></h5>
                                <div class="sl-featureRating">
                                    <span class="sl-featureRating__stars"><span></span></span>
                                    <em>(1887 Feedback)</em>
                                </div>
                                <em>By: <a href="{{route('web.brand.show', ['slug' => $product->brand->slug])}}">{{translateText($product->brand->name)}}</a></em>
                            </div>
                            <div class="sl-slider__footer">
                                <em>Leeds, UK (<a href="javascript:void(0);">{{translateText(translateText('Directions'))}}</a>)</em>
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
                {{--<div class="item">
                    <div class="sl-slider">
                        <figure>
                            <a href="javascript:void(0);"><img src="{{asset('frontend/images/index/service-provider/img-02.jpg')}}" alt="Image Description"></a>
                            <a href="javascript:void(0);"><img src="{{asset('frontend/images/index/service-provider/user-icon/img-02.jpg')}}" alt="Image Description"></a>
                            <a href="javascript:void(0);" class="sl-like"><i class="far fa-heart"></i></a>
                        </figure>
                        <div class="sl-slider__content">
                            <div class="sl-slider__header">
                                <div class="sl-slider__tags">
                                    <a href="javascript:void(0);" class="sl-bg-red-orange">Featured</a><a href="javascript:void(0);" class="sl-bg-green">Verified</a>
                                </div>
                                <a href="javascript:void(0);">IT Services</a>
                                <h5><a href="javascript:void(0);">Let’s Make Your Event Great</a></h5>
                                <div class="sl-featureRating">
                                    <span class="sl-featureRating__stars"><span></span></span>
                                    <em>(1642 Feedback)</em>
                                </div>
                                <em>By: <a href="javascript:void(0);">Triona Buckley</a></em>
                            </div>
                            <div class="sl-slider__footer">
                                <em>Manchester, UK (<a href="javascript:void(0);">Directions</a>)</em>
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
                <div class="item">
                    <div class="sl-slider">
                        <figure>
                            <a href="javascript:void(0)"><img src="{{asset('frontend/images/index/service-provider/img-03.jpg')}}" alt="Image Description"></a>
                            <a href="javascript:void(0)"><img src="{{asset('frontend/images/index/service-provider/user-icon/img-03.jpg')}}" alt="Image Description"></a>
                            <a href="javascript:void(0);" class="sl-like sl-liked"><i class="far fa-heart"></i></a>
                        </figure>
                        <div class="sl-slider__content">
                            <div class="sl-slider__header">
                                <div class="sl-slider__tags">
                                    <a href="javascript:void(0);" class="sl-bg-red-orange">Featured</a><a href="javascript:void(0);" class="sl-bg-green">Verified</a>
                                </div>
                                <a href="javascript:void(0);">IT Services</a>
                                <h5><a href="javascript:void(0)">We Plan, Manage and Enjoy</a></h5>
                                <div class="sl-featureRating">
                                    <span class="sl-featureRating__stars"><span></span></span>
                                    <em>(1586  Feedback)</em>
                                </div>
                                <em>By: <a href="javascript:void(0);">New York Conference Dude</a></em>
                            </div>
                            <div class="sl-slider__footer">
                                <em>Birmingham, UK (<a href="javascript:void(0);">Directions</a>)</em>
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
                <div class="item">
                    <div class="sl-slider">
                        <figure>
                            <a href="javascript:void(0);"><img src="{{asset('frontend/images/index/service-provider/img-04.jpg')}}" alt="Image Description"></a>
                            <a href="javascript:void(0);"><img src="{{asset('frontend/images/index/service-provider/user-icon/img-04.jpg')}}" alt="Image Description"></a>
                            <a href="javascript:void(0);" class="sl-like sl-liked"><i class="far fa-heart"></i></a>
                        </figure>
                        <div class="sl-slider__content">
                            <div class="sl-slider__header">
                                <div class="sl-slider__tags">
                                    <a href="javascript:void(0);" class="sl-bg-red-orange">Featured</a><a href="javascript:void(0);" class="sl-bg-green">Verified</a>
                                </div>
                                <a href="javascript:void(0);">IT Services</a>
                                <h5><a href="javascript:void(0);">Give Your Day a New Start</a></h5>
                                <div class="sl-featureRating">
                                    <span class="sl-featureRating__stars"><span></span></span>
                                    <em>(1485 Feedback)</em>
                                </div>
                                <em>By: <a href="javascript:void(0);">Candice Krikorian</a></em>
                            </div>
                            <div class="sl-slider__footer">
                                <em>Newcastle, UK (<a href="javascript:void(0);">Directions</a>)</em>
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
                <div class="item">
                    <div class="sl-slider">
                        <figure>
                            <a href="javascript:void(0);"><img src="{{asset('frontend/images/index/service-provider/img-05.jpg')}}" alt="Image Description"></a>
                            <a href="javascript:void(0);"><img src="{{asset('frontend/images/index/service-provider/user-icon/img-05.jpg')}}" alt="Image Description"></a>
                            <a href="javascript:void(0);" class="sl-like"><i class="far fa-heart"></i></a>
                        </figure>
                        <div class="sl-slider__content">
                            <div class="sl-slider__header">
                                <div class="sl-slider__tags">
                                    <a href="javascript:void(0);" class="sl-bg-red-orange">Featured</a><a href="javascript:void(0);" class="sl-bg-green">Verified</a>
                                </div>
                                <a href="javascript:void(0);">Handyman Services</a>
                                <h5><a href="javascript:void(0);">Professional Plumbers</a></h5>
                                <div class="sl-featureRating">
                                    <span class="sl-featureRating__stars"><span></span></span>
                                    <em>(1242 Feedback)</em>
                                </div>
                                <em>By: <a href="javascript:void(0);">Markus Wickman</a></em>
                            </div>
                            <div class="sl-slider__footer">
                                <em>Sheffield , UK (<a href="javascript:void(0);">Directions</a>)</em>
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
                <div class="item">
                    <div class="sl-slider">
                        <figure>
                            <a href="javascript:void(0);"><img src="{{asset('frontend/images/index/service-provider/img-06.jpg')}}" alt="Image Description"></a>
                            <a href="javascript:void(0);"><img src="{{asset('frontend/images/index/service-provider/user-icon/img-06.jpg')}}" alt="Image Description"></a>
                            <a href="javascript:void(0);" class="sl-like"><i class="far fa-heart"></i></a>
                        </figure>
                        <div class="sl-slider__content">
                            <div class="sl-slider__header">
                                <div class="sl-slider__tags">
                                    <a href="javascript:void(0);" class="sl-bg-red-orange">Featured</a><a href="javascript:void(0);" class="sl-bg-green">Verified</a>
                                </div>
                                <a href="javascript:void(0);">DIY & Lifestyle</a>
                                <h5><a href="javascript:void(0);">Spread Love With Flowers</a></h5>
                                <div class="sl-featureRating">
                                    <span class="sl-featureRating__stars"><span></span></span>
                                    <em>(1206 Feedback)</em>
                                </div>
                                <em>By: <a href="javascript:void(0);">Love Sign - Flower Shop</a></em>
                            </div>
                            <div class="sl-slider__footer">
                                <em>Southampton, UK (<a href="javascript:void(0);">Directions</a>)</em>
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
                <div class="item">
                    <div class="sl-slider">
                        <figure>
                            <a href="javascript:void(0);"><img src="{{asset('frontend/images/index/service-provider/img-06.jpg')}}" alt="Image Description"></a>
                            <a href="javascript:void(0);"><img src="{{asset('frontend/images/index/service-provider/user-icon/img-06.jpg')}}" alt="Image Description"></a>
                            <a href="javascript:void(0);" class="sl-like"><i class="far fa-heart"></i></a>
                        </figure>
                        <div class="sl-slider__content">
                            <div class="sl-slider__header">
                                <div class="sl-slider__tags">
                                    <a href="javascript:void(0);" class="sl-bg-red-orange">Featured</a><a href="javascript:void(0);" class="sl-bg-green">Verified</a>
                                </div>
                                <a href="javascript:void(0);">DIY & Lifestyle</a>
                                <h5><a href="javascript:void(0);">Spread Love With Flowers</a></h5>
                                <div class="sl-featureRating">
                                    <span class="sl-featureRating__stars"><span></span></span>
                                    <em>(1206 Feedback)</em>
                                </div>
                                <em>By: <a href="javascript:void(0);">Love Sign - Flower Shop</a></em>
                            </div>
                            <div class="sl-slider__footer">
                                <em>Southampton, UK (<a href="javascript:void(0);">Directions</a>)</em>
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
                </div>--}}
                    @endif
                @endforeach
            </div>
        </section>
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
        <section class="sl-main-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="sl-sectionHead">
                            <div class="sl-sectionHead__title sl-below-line sl-below-line__active">
                                <h2>{{translateText('Price You Can Afford')}}</h2>
                            </div>
                            <div class="sl-sectionHead__description">
                                <p>{{translateText('Consectetur adipisicing elit sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua enim adena minim veniam quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sl-packagePlan">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="sl-package">
                                <div class="sl-package__title">
                                    <img src="{{asset('frontend/images/index/packages/img-01.jpg')}}" alt="Image Description">
                                    <h3>Basic Plan</h3>
                                    <em>Starter Plan For Newbie</em>
                                </div>
                                <div class="sl-package__deal sl-bg-blue">
                                    <div class="sl-package__price">
                                        <h3><sup>$</sup>37</h3>
                                        <p>\ Month</p>
                                    </div>
                                    <em>Includes all taxes*</em>
                                </div>
                                <div class="sl-package__footer">
                                    <ul class="sl-package__details">
                                        <li>
                                            <p>No. Of Offer To Post</p>
                                            <p>10</p>
                                        </li>
                                        <li>
                                            <p>No. Of Featured Jobs</p>
                                            <p class="sl-red-orange"><i class="ti-na"></i></p>
                                        </li>
                                        <li>
                                            <p>Package Duration</p>
                                            <p>30 Days</p>
                                        </li>
                                        <li>
                                            <p>Best Freelancer Search</p>
                                            <p>Yes</p>
                                        </li>
                                        <li>
                                            <p>Professional Offer Template</p>
                                            <p class="sl-red-orange"><i class="ti-na"></i></p>
                                        </li>
                                        <li>
                                            <p>Free 07 Days Extension</p>
                                            <p class="sl-red-orange"><i class="ti-na"></i></p>
                                        </li>
                                    </ul>
                                    <a href="javascript:void(0)" class="btn sl-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="sl-package">
                                <div class="sl-package__title">
                                    <img src="{{asset('frontend/images/index/packages/img-02.jpg')}}" alt="Image Description">
                                    <h3>Standard</h3>
                                    <em>Populor Plan For Professionals</em>
                                    <div class="sl-tag"><h6>Best Deal</h6></div>
                                </div>
                                <div class="sl-package__deal sl-bg-green">
                                    <div class="sl-package__price">
                                        <h3><sup>$</sup>79</h3>
                                        <p>\ Month</p>
                                    </div>
                                    <em>Includes all taxes*</em>
                                </div>
                                <div class="sl-package__footer">
                                    <ul class="sl-package__details">
                                        <li>
                                            <p>No. Of Offer To Post</p>
                                            <p>10</p>
                                        </li>
                                        <li>
                                            <p>No. Of Featured Jobs</p>
                                            <p class="sl-green"><i class="ti-check"></i></p>
                                        </li>
                                        <li>
                                            <p>Package Duration</p>
                                            <p>30 Days</p>
                                        </li>
                                        <li>
                                            <p>Best Freelancer Search</p>
                                            <p>Yes</p>
                                        </li>
                                        <li>
                                            <p>Professional Offer Template</p>
                                            <p class="sl-red-orange"><i class="ti-na"></i></p>
                                        </li>
                                        <li>
                                            <p>Free 07 Days Extension</p>
                                            <p class="sl-green"><i class="ti-check"></i></p>
                                        </li>
                                    </ul>
                                    <a href="javascript:void(0)" class="btn sl-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="sl-package">
                                <div class="sl-package__title">
                                    <img src="{{asset('frontend/images/index/packages/img-01.jpg')}}" alt="Image Description">
                                    <h3>Extended</h3>
                                    <em>Extended Plan For Managerial</em>
                                </div>
                                <div class="sl-package__deal sl-bg-red-orange">
                                    <div class="sl-package__price">
                                        <h3><sup>$</sup>199</h3>
                                        <p>\ Month</p>
                                    </div>
                                    <em>Includes all taxes*</em>
                                </div>
                                <div class="sl-package__footer">
                                    <ul class="sl-package__details">
                                        <li>
                                            <p>No. Of Offer To Post</p>
                                            <p>10</p>
                                        </li>
                                        <li>
                                            <p>No. Of Featured Jobs</p>
                                            <p class="sl-green"><i class="ti-check"></i></p>
                                        </li>
                                        <li>
                                            <p>Package Duration</p>
                                            <p>30 Days</p>
                                        </li>
                                        <li>
                                            <p>Best Freelancer Search</p>
                                            <p>Yes</p>
                                        </li>
                                        <li>
                                            <p>Professional Offer Template</p>
                                            <p class="sl-green"><i class="ti-check"></i></p>
                                        </li>
                                        <li>
                                            <p>translateText(Free 07 Days Extension)</p>
                                            <p class="sl-green"><i class="ti-check"></i></p>
                                        </li>
                                    </ul>
                                    <a href="javascript:void(0)" class="btn sl-btn">Buy Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                                        <img src="{{asset('/storage/'. count($product->images) > 0 ? $product->images[0]->full : 'null')}}" alt="Image Description">
                                        <figcaption>
                                            <div class="sl-slider__tags">
{{--                                                <span class="sl-bg-red-orange">10% OFF</span>--}}
                                            </div>
                                            <a href="javascript:void(0);" class="sl-liked"><i class="far fa-heart"></i></a>
                                        </figcaption>
                                    </figure>
                                    <div class="sl-featuredProducts--post__content">
                                        <div class="sl-featuredProducts--post__title">
                                            <a href="{{route('web.product.show', ['slug' => $product->slug])}}">
                                                <h6>{{translateText($product->name)}}</h6>
                                            </a>
                                        </div>
                                        <div class="sl-featuredProducts--post__price">
                                            <h5>{{translateText($product->sale_price)}}</h5>
                                            <h6>{{translateText($product->price)}}</h6>
                                        </div>
                                        <div class="sl-featureRating">
                                            <span class="sl-featureRating__stars"><span></span></span>
                                            <em>{{translateText('(1887 Feedback)')}}</em>
                                        </div>
                                        <em>By: <a href="{{route('web.brand.show', ['slug' => $product->brand->slug])}}">{{translateText($product->brand->name)}}</a></em>
                                        <button class="btn sl-btn">{{translateText('Add To Cart')}}</button>
                                    </div>
                                </div>
                            </div>
                                @php $count++ @endphp
                            @endif
                        @endforeach

                        {{--<div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="sl-featuredProducts--post">
                                <figure>
                                    <img src="{{asset('frontend/images/index/featured-products/img-01.jpg')}}" alt="Image Description">
                                    <figcaption>
                                        <div class="sl-slider__tags">
                                            <span class="sl-bg-red-orange">25% OFF</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="far fa-heart"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="sl-featuredProducts--post__content">
                                    <div class="sl-featuredProducts--post__title">
                                        <h6>Phanteks 614LTG special edition</h6>
                                    </div>
                                    <div class="sl-featuredProducts--post__price">
                                        <h5>$212.30</h5>
                                        <h6>$220.30</h6>
                                    </div>
                                    <div class="sl-featureRating">
                                        <span class="sl-featureRating__stars"><span></span></span>
                                        <em>(1887 Feedback)</em>
                                    </div>
                                    <em>By: <a href="javascript:void(0);">Onfleek Gaming Zone</a></em>
                                    <button class="btn sl-btn">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="sl-featuredProducts--post">
                                <figure>
                                    <img src="{{asset('frontend/images/index/featured-products/img-02.jpg')}}" alt="Image Description">
                                    <figcaption>
                                        <div class="sl-slider__tags">
                                            <span class="sl-bg-red-orange">10% OFF</span>
                                        </div>
                                        <a href="javascript:void(0);" class="sl-liked"><i class="far fa-heart"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="sl-featuredProducts--post__content">
                                    <div class="sl-featuredProducts--post__title">
                                        <h6>Linkwow 3 Outlet Power Strip</h6>
                                    </div>
                                    <div class="sl-featuredProducts--post__price">
                                        <h5>$12.19</h5>
                                        <h6>$19.99</h6>
                                    </div>
                                    <div class="sl-featureRating">
                                        <span class="sl-featureRating__stars"><span></span></span>
                                        <em>(1887 Feedback)</em>
                                    </div>
                                    <em>By: <a href="javascript:void(0);">Techsol Bros.</a></em>
                                    <button class="btn sl-btn">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="sl-featuredProducts--post">
                                <figure>
                                    <img src="{{asset('frontend/images/index/featured-products/img-03.jpg')}}" alt="Image Description">
                                    <figcaption>
                                        <div class="sl-slider__tags">
                                            <span class="sl-bg-red-orange">50% OFF</span>
                                        </div>
                                        <a href="javascript:void(0);" class="sl-liked"><i class="far fa-heart"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="sl-featuredProducts--post__content">
                                    <div class="sl-featuredProducts--post__title">
                                        <h6>Nub's Adventures Jailbreak</h6>
                                    </div>
                                    <div class="sl-featuredProducts--post__price">
                                        <h5>$26.40</h5>
                                        <h6>$30.50</h6>
                                    </div>
                                    <div class="sl-featureRating">
                                        <span class="sl-featureRating__stars"><span></span></span>
                                        <em>(1887 Feedback)</em>
                                    </div>
                                    <em>By: <a href="javascript:void(0);">Catepilar Fleet</a></em>
                                    <button class="btn sl-btn">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="sl-featuredProducts--post">
                                <figure>
                                    <img src="{{asset('frontend/images/index/featured-products/img-04.jpg')}}" alt="Image Description">
                                    <figcaption>
                                        <div class="sl-slider__tags">
                                            <span class="sl-bg-red-orange">12% OFF</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="far fa-heart"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="sl-featuredProducts--post__content">
                                    <div class="sl-featuredProducts--post__title">
                                        <h6>Kensington Contour 2.0 Backpack</h6>
                                    </div>
                                    <div class="sl-featuredProducts--post__price">
                                        <h5>$12.19</h5>
                                        <h6>$19.99</h6>
                                    </div>
                                    <div class="sl-featureRating">
                                        <span class="sl-featureRating__stars"><span></span></span>
                                        <em>(1887 Feedback)</em>
                                    </div>
                                    <em>By: <a href="javascript:void(0);">Bags & Bags Co.</a></em>
                                    <button class="btn sl-btn">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="sl-featuredProducts--post">
                                <figure>
                                    <img src="{{asset('frontend/images/index/featured-products/img-05.jpg')}}" alt="Image Description">
                                    <figcaption>
                                        <div class="sl-slider__tags">
                                            <span class="sl-bg-red-orange">25% OFF</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="far fa-heart"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="sl-featuredProducts--post__content">
                                    <div class="sl-featuredProducts--post__title">
                                        <h6>Digitus USB2.0 Serial Adapter</h6>
                                    </div>
                                    <div class="sl-featuredProducts--post__price">
                                        <h5>$8.50</h5>
                                        <h6>$19.99</h6>
                                    </div>
                                    <div class="sl-featureRating">
                                        <span class="sl-featureRating__stars"><span></span></span>
                                        <em>(1887 Feedback)</em>
                                    </div>
                                    <em>By: <a href="javascript:void(0);">Connecto Zolio</a></em>
                                    <button class="btn sl-btn">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="sl-featuredProducts--post">
                                <figure>
                                    <img src="{{asset('frontend/images/index/featured-products/img-06.jpg')}}" alt="Image Description">
                                    <figcaption>
                                        <div class="sl-slider__tags">
                                            <span class="sl-bg-red-orange">25% OFF</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="far fa-heart"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="sl-featuredProducts--post__content">
                                    <div class="sl-featuredProducts--post__title">
                                        <h6>Poppin Mouse Pad - Lime Green</h6>
                                    </div>
                                    <div class="sl-featuredProducts--post__price">
                                        <h5>$19.79</h5>
                                        <h6>$30.50</h6>
                                    </div>
                                    <div class="sl-featureRating">
                                        <span class="sl-featureRating__stars"><span></span></span>
                                        <em>(1887 Feedback)</em>
                                    </div>
                                    <em>By: <a href="javascript:void(0);">Office Mentor</a></em>
                                    <button class="btn sl-btn">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="sl-featuredProducts--post">
                                <figure>
                                    <img src="{{asset('frontend/images/index/featured-products/img-07.jpg')}}" alt="Image Description">
                                    <figcaption>
                                        <div class="sl-slider__tags">
                                            <span class="sl-bg-red-orange">50% OFF</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="far fa-heart"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="sl-featuredProducts--post__content">
                                    <div class="sl-featuredProducts--post__title">
                                        <h6>Fractal Design Define R6 PC Case</h6>
                                    </div>
                                    <div class="sl-featuredProducts--post__price">
                                        <h5>$171.51</h5>
                                        <h6>$180.99</h6>
                                    </div>
                                    <div class="sl-featureRating">
                                        <span class="sl-featureRating__stars"><span></span></span>
                                        <em>(1887 Feedback)</em>
                                    </div>
                                    <em>By: <a href="javascript:void(0);">Die Hard Gaming</a></em>
                                    <button class="btn sl-btn">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="sl-featuredProducts--post">
                                <figure>
                                    <img src="{{asset('frontend/images/index/featured-products/img-08.jpg')}}" alt="Image Description">
                                    <figcaption>
                                        <div class="sl-slider__tags">
                                            <span class="sl-bg-red-orange">12% OFF</span>
                                        </div>
                                        <a href="javascript:void(0);" class="sl-liked"><i class="far fa-heart"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="sl-featuredProducts--post__content">
                                    <div class="sl-featuredProducts--post__title">
                                        <h6>Thermaltake Pure ARGB Sync Case</h6>
                                    </div>
                                    <div class="sl-featuredProducts--post__price">
                                        <h5>$44.36</h5>
                                        <h6>$19.99</h6>
                                    </div>
                                    <div class="sl-featureRating">
                                        <span class="sl-featureRating__stars"><span></span></span>
                                        <em>(1887 Feedback)</em>
                                    </div>
                                    <em>By: <a href="javascript:void(0);">Infloz Corporation</a></em>
                                    <button class="btn sl-btn">Add To Cart</button>
                                </div>
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
        </section>
        <!-- FEATURED PRODUCTS END -->
    </main>
    <!-- MAIN END -->
@endsection
