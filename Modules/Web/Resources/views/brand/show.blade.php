@extends('web::layouts.master')
@section('content')

    <!-- MAIN START -->
    <main class="sl-main">
        <section class="sl-main-section">
            <div class="container">
                <div class="sl-product">
                    <div class="row">
                        <div class="col-lg-5">
                            <div id="sl-sync1" class="sl-product__img owl-carousel owl-theme">
                                <div class="sl-item item">
                                    <figure>
                                        <img src="{{('/storage/'.$brand->logo)}}" alt="Image Description">
                                    </figure>
                                </div>
                            </div>
                            <div id="sl-sync2" class="sl-product__thumbnail owl-carousel owl-theme">
                                <div class="sl-item">
                                    <figure class="">
                                        <img src="{{('/storage/'.$brand->logo)}}" alt="Image Description">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="sl-product__description">
                                <div class="sl-slider__tags">
                                </div>
                                <h5>{{translateText($brand->name)}}</h5>
                                <p>
                                    {{translateText($brand->description)}}
                                </p>
                                {{--<div class="sl-product__price">
                                    <h3>$212.30</h3>
                                    <h4>$220.30</h4>
                                </div>--}}
                                {{--<div class="sl-product__stars">
                                    <div class="sl-appointment__feature">
                                        <div class="sl-featureRating">
                                            <span class="sl-featureRating__stars"><span></span></span>
                                            <em>(1642 Feedback)</em>
                                        </div>
                                        <div class="sl-appointment__location">
                                            <em>By: <a href="javascript:void(0);">Onfleek Gaming Zone</a></em>
                                        </div>
                                    </div>
                                </div>--}}
                                {{--<div class="sl-detail">
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
                                </div>--}}
                                {{--<div class="sl-product__color">
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
                                <div class="sl-product__stock">
                                    <h6>Quantity: <span class="sl-green">In Stock</span></h6>
                                    <div class="sl-product__stock--content">
                                        <form class="sl-vlaue-btn">
                                            <a href="javascript:void(0);" class="sl-input-decrement">-</a>
                                            <input class="sl-input-number" type="number" value="01" min="0" max="1000">
                                            <a href="javascript:void(0);" class="sl-input-increment">+</a>
                                        </form>
                                        <a href="javascript:void(0);" class="btn sl-btn sl-cart-btn">Add To Cart</a>
                                        <a href="javascript:void(0);" class="btn sl-btn sl-btn-active">Buy Now</a>
                                    </div>
                                </div>
                                <div class="sl-product__safty">
                                    <img src="images/product-single/img-01.png" alt="Image Description">
                                    <div class="sl-product__safty--description">
                                        <h6>Safty Instruction:</h6>
                                        <p>Deserunt mollit anim idamsti esta <em class="sl-red">“aperspiciatis unde omnis natusta error auptatem”</em> acaentium doloremque laudantium totam rem aperiam eaque ipsa quae inventore veritatis etiame quasi explicabo <a href="javascript:void(0);">enim ipsam voluptatem quia</a> voluptas spernatur.</p>
                                    </div>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="sl-sellerRecommend">
                    <h4>Products</h4>
                    <div class="row">
                        @foreach($brand->products as $product)
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="sl-featuredProducts--post">
                                    <figure>
                                        <img src="{{asset('/storage/'.$product->full)}}" alt="Image Description">
                                        <figcaption>
                                            <div class="sl-slider__tags">
                                                <span class="sl-bg-red-orange">25% OFF</span>
                                            </div>
                                            <a href="javascript:void(0);"><i class="far fa-heart"></i></a>
                                        </figcaption>
                                    </figure>
                                    <div class="sl-featuredProducts--post__content">
                                        <div class="sl-featuredProducts--post__title">
                                            <a href="{{route('web.product.show', [$product->slug])}}">
                                                <h6>{{translateText($product->name)}}</h6>
                                            </a>
                                        </div>
                                        <div class="sl-featuredProducts--post__price">
                                            <h5>{{translateText($product->sale_price)}}</h5>
                                            <h6>{{translateText($product->price)}}</h6>
                                        </div>
                                        <div class="sl-featureRating">
                                            <span class="sl-featureRating__stars"><span></span></span>
                                            <em>({{translateText('1887 Feedback')}})</em>
                                        </div>
                                        <em>By: <a href="{{route('web.brand.show', ['slug' => $brand->slug])}}">{{translateText($brand->name)}}</a></em>
                                        <button class="btn sl-btn">{{translateText('Add To Cart')}}</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- MAIN END -->

@endsection
