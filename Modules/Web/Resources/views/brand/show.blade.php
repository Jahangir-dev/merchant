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
                                        <img src="{{asset('/storage/'.$brand->logo)}}" alt="Image Description">
                                    </figure>
                                </div>
                            </div>
                            <div id="sl-sync2" class="sl-product__thumbnail owl-carousel owl-theme">
                                <div class="sl-item">
                                    <figure class="">
                                        <img src="{{asset('/storage/'.$brand->logo)}}" alt="Image Description">
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
                                        @if(count($product->images) > 0)
                                        <img src="{{asset('storage/'.$product->images[0]->full )}}" alt="Image Description">
                                        @else 
                                        <img src="{{asset('storage/')}}" alt="Image Description">
                                        @endif</a>
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
                                        <em>By: <a href="{{route('web.vendor.show', ['id' => $product->user->id])}}">{{translateText($brand->name)}}</a></em>
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
