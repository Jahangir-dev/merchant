@extends('web::layouts.master')
@section('content')

    @php
        $keyword_s = !empty($_GET['search']) ? $_GET['search'] : '';
        $price_s = !empty($_GET['price']) ? $_GET['price'] : '';
        $merchant_s = !empty($_GET['merchant']) ? $_GET['merchant'] : '';
        $categories_s = !empty($_GET['categories']) ? $_GET['categories'] : '';

        $words = explode(' - ', $price_s);
        $ending_price = array_pop($words);
        $starting_price = implode(' ', $words);

        $starting_price = json_decode(str_replace('$', '', $starting_price), true); // Replaces all spaces with hyphens.
        $ending_price = json_decode(str_replace('$', '', $ending_price), true); // Replaces all spaces with hyphens.
    @endphp
    <!-- MAIN START -->
    <main class="sl-main">
        <!-- SERVICE PROVIDER START -->
        <section class="sl-main-section">
            <div class="container">
                <div class="sl-filters">
                    <p><a href="javascript:void(0);">All Categories</a><i class="ti-angle-right"></i>{{ !empty($_GET['search']) ? $_GET['search'] : '' }} ({{count($products)}} Results)</p>
                    {{--<div class="sl-filters--sort">
                        <h6>Sort By:</h6>
                        <div class="sl-filters--sort__content">
                            <div class="sl-filters--sort__match">
                                <a href="javascript:void(0);" class="btn sl-btn sl-prepend sl-match-active">Best Match</a>
                                <a href="javascript:void(0);" class="btn sl-btn sl-append">Newest<i class="ti-arrows-vertical"></i></a>
                            </div>
                            <div class="sl-filters--sort__sortbtn">
                                <a href="javascript:void(0);" class="btn sl-btn sl-prepend"><i class="ti-menu"></i></a>
                                <a href="javascript:void(0);" class="btn sl-btn sl-btn-active sl-append"><i class="ti-layout-grid2"></i></a>
                            </div>
                        </div>
                    </div>--}}
                </div>
                <div class="row">
                    <div class="col-lg-4 col-xl-3">
                        <aside id="sl-asidebar" class="sl-asidebar">
                            <div class="sl-asideholder">
                                <a href="javascript:void(0);" id="sl-closeasidebar" class="sl-closeasidebar">
                                    <i class="lnr lnr-layers"></i>
                                </a>
                                <div class="sl-asidescrollbar">
                                    <div class="sl-searchProductSidebar">
                                        <form method="get" action="{{route('search')}}" role="search" class="sl-sidebar__form sl-searchProductSidebar__form">
                                            <input name="search" type="keyword" value="{{$keyword}}" style="display: none">
                                            <div class="sl-searchProductSidebar__content">
                                                <div class="sl-sidebar__categories">
                                                    <h5>Categories</h5>
                                                    <div class="mCustomScrollbar">
                                                        <ul class="sl-sider-ul">
                                                            @foreach($categories as $index => $category)
                                                                <div class="sl-checkbox">
                                                                    @if($categories_s)
                                                                        @if(in_array($category->id, $categories_s))
                                                                            <input value="{{ $category->id }}" checked id="categoryChildAudio-{{$index}}" type="checkbox" name="categories[]">
                                                                            <label for="categoryChildAudio-{{$index}}">
                                                                                <span class="sl-sidebar__form--text">{{ $category->name }}</span>
                                                                            </label>
                                                                        @else
                                                                            <input value="{{ $category->id }}" id="categoryChildAudio-{{$index}}" type="checkbox" name="categories[]">
                                                                            <label for="categoryChildAudio-{{$index}}">
                                                                                <span class="sl-sidebar__form--text">{{ $category->name }}</span>
                                                                            </label>
                                                                        @endif
                                                                    @else
                                                                        <input value="{{ $category->id }}" id="categoryChildAudio-{{$index}}" type="checkbox" name="categories[]">
                                                                        <label for="categoryChildAudio-{{$index}}">
                                                                            <span class="sl-sidebar__form--text">{{ $category->name }}</span>
                                                                        </label>
                                                                    @endif
                                                                </div>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="sl-searchProductSidebar__sortPrice">
                                                    <h5>Sort By Price</h5>
                                                    <div class="sl-distance-side">
                                                        <div class="sl-distance__description">
                                                            <label for="amount">Price:</label>
                                                            <input min="{{ (int)$ending_price }}" max="{{ (int)$starting_price }}"  name="price" type="text" id="amount" readonly>
                                                        </div>
                                                        <div id="slider-range"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sl-searchProductSidebar__btn">
                                                <button type="submit" class="btn sl-btn sl-btn-active" href="javascript:void(0);">Apply Filter</button>
                                                <!-- <a class="btn sl-btn sl-btn-reset" href="javascript:void(0);">Reset all</a> -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8 col-xl-9">
                        <div class="sl-searchResultProduct">
                            <div class="row">
                                @foreach($products as $product)
                                    <div class="col-sm-6 col-xl-4">
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
                                                    <h6>{{ $product->name }}</h6>
                                                </div>
                                                <div class="sl-featuredProducts--post__price">
                                                    <h5>{{$product->price}}</h5>
                                                    <h6>{{$product->sale_price}}</h6>
                                                </div>
                                                <div class="sl-featureRating">
                                                    <span class="sl-featureRating__stars"><span></span></span>
                                                    <em>(1887 Feedback)</em>
                                                </div>
                                                <em>By: <a href="javascript:void(0);">{{$product->user->first_name}} {{$product->user->last_name}}</a></em>
                                                <button onclick="myFunction({{ $product }})" class="btn sl-btn">{{translateText('Add To Cart')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="sl-pagination">
                                {{--<div class="sl-pagination__button-left">
                                    <a class="btn sl-btn sl-btn-small" href="javascript:void(0);"><span class="lnr lnr-chevron-left"></span></a>
                                </div>--}}
                                <div class="sl-pagination__button-num">

                                    {!! $products->render() !!}

                                    {{--<a class="btn sl-btn sl-btn-small" href="javascript:void(0);"><span>1</span></a>
                                    <a class="btn sl-btn sl-btn-small sl-btn-active" href="javascript:void(0);"><span>2</span></a>
                                    <a class="btn sl-btn sl-btn-small" href="javascript:void(0);"><span>3</span></a>
                                    <a class="btn sl-btn sl-btn-small" href="javascript:void(0);"><span>4</span></a>
                                    <a class="btn sl-btn sl-btn-small" href="javascript:void(0);"><span class="sl-more">...</span></a>
                                    <a class="btn sl-btn sl-btn-small" href="javascript:void(0);"><span>50</span></a>--}}
                                </div>
                                {{--<div class="sl-pagination__button-right">
                                    <a class="btn sl-btn sl-btn-small sl-btn-active" href="javascript:void(0);"><span class="lnr lnr-chevron-right"></span></a>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SERVICE PROVIDER END -->
    </main>
    <!-- MAIN END -->




@endsection


@prepend('javascript')
    <script>

        let s_p = {!! (int)$starting_price !!};
        s_p = parseInt(s_p)
        let e_p = {!! (int)$ending_price !!};
        e_p = parseInt(e_p)
        var sliderRange = document.querySelector('#slider-range')
        if (sliderRange !== null) {
            console.log($( "#amount" ), s_p, e_p)
            $( function() {
                $( "#slider-range" ).slider({
                    range: true,
                    min: 0,
                    max: 2000,
                    values: [ s_p, e_p ],
                    slide: function( event, ui ) {
                        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                    }
                });
                $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
                    " - $" + $( "#slider-range" ).slider( "values", 1 ) );
            } );
        }

    </script>
@endprepend
