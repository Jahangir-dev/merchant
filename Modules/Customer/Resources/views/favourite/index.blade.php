@extends('web::layouts.master')
@section('content')
    <!-- MAIN START -->
    <main class="sl-main">
        <div class="sl-main-section">
            <div class="container">
                <div class="row">
                    @include('customer::layouts.asidebar')

                    <div class="col-lg-8 col-xl-9">
                        <div class="sl-dashboardbox">
                            <div class="sl-dashboardbox__title">
                                <h2>Saved Items</h2>
                            </div>
                            <div class="row">
                                @foreach($products as $index => $product)

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
                                                            <span class="sl-bg-red-orange">sale</span>
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

                                                <div class="sl-featureRating">
                                                    <span class="sl-featureRating__stars"><span></span></span>
                                                    <em>{{translateText('(1887 Feedback)')}}</em>
                                                </div>
                                                <em>By: <a href="{{route('web.brand.show', ['slug' => $product->brand->slug])}}">{{translateText($product->brand->name)}}</a></em>
                                                <button onclick="myFunction({{ $product }})" class="btn sl-btn">{{translateText('Add To Cart')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <!-- MAIN END -->
@endsection

