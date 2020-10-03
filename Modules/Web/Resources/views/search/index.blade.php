@extends('web::layouts.master')
@section('content')


    <!-- MAIN START -->
    <main class="sl-main">
        <!-- SERVICE PROVIDER START -->
        <section class="sl-main-section">
            <div class="container">
                <div class="sl-filters">
                    <p><a href="javascript:void(0);">All Categories</a><i class="ti-angle-right"></i>{{ $keyword }} ({{count($products)}} Results)</p>
                    <div class="sl-filters--sort">
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
                    </div>
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
                                        <form class="sl-sidebar__form sl-searchProductSidebar__form">
                                            <div class="sl-searchProductSidebar__content">
                                                <div class="sl-sidebar__categories">
                                                    <h5>Categories</h5>
                                                    <div class="mCustomScrollbar">
                                                        <ul class="sl-sider-ul">
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="categoryParentAudio1" class="sl-selectAll1" type="checkbox" name="category">
                                                                    <label for="categoryParentAudio1">
                                                                        <span class="sl-sidebar__form--heading">Audio & Television</span>
                                                                    </label>
                                                                </div>
                                                                <ul>
                                                                    <li>
                                                                        <div class="sl-checkbox">
                                                                            <input id="categoryChildAudio1" type="checkbox" name="category">
                                                                            <label for="categoryChildAudio1">
                                                                                <span class="sl-sidebar__form--text">Smart Phones</span>
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="sl-checkbox">
                                                                            <input id="categoryChildAudio2" type="checkbox" name="category">
                                                                            <label for="categoryChildAudio2">
                                                                                <span class="sl-sidebar__form--text">Tablets</span>
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="sl-checkbox">
                                                                            <input id="categoryChildAudio3" type="checkbox" name="category">
                                                                            <label for="categoryChildAudio3">
                                                                                <span class="sl-sidebar__form--text">Game Design</span>
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="sl-checkbox">
                                                                            <input id="categoryChildAudio4" type="checkbox" name="category">
                                                                            <label for="categoryChildAudio4">
                                                                                <span class="sl-sidebar__form--text">Wearables</span>
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="sl-checkbox">
                                                                            <input id="categoryChildAudio5" type="checkbox" name="category">
                                                                            <label for="categoryChildAudio5">
                                                                                <span class="sl-sidebar__form--text">Headphones</span>
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="sl-checkbox">
                                                                            <input id="categoryChildAudio6" type="checkbox" name="category">
                                                                            <label for="categoryChildAudio6">
                                                                                <span class="sl-sidebar__form--text">Chargers</span>
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="categoryParentPhoto1" class="sl-selectAll1" type="checkbox" name="category">
                                                                    <label for="categoryParentPhoto1">
                                                                        <span class="sl-sidebar__form--heading">Camera & Photo</span>
                                                                    </label>
                                                                </div>
                                                                <ul>
                                                                    <li>
                                                                        <div class="sl-checkbox">
                                                                            <input id="categoryChildPhoto1" type="checkbox" name="category">
                                                                            <label for="categoryChildPhoto1">
                                                                                <span class="sl-sidebar__form--text">DSLR</span>
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="sl-checkbox">
                                                                            <input id="categoryChildPhoto2" type="checkbox" name="category">
                                                                            <label for="categoryChildPhoto2">
                                                                                <span class="sl-sidebar__form--text">Digital Cameras</span>
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="sl-checkbox">
                                                                            <input id="categoryChildPhoto3" type="checkbox" name="category">
                                                                            <label for="categoryChildPhoto3">
                                                                                <span class="sl-sidebar__form--text">Spy Camera</span>
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="sl-checkbox">
                                                                            <input id="categoryChildPhoto4" type="checkbox" name="category">
                                                                            <label for="categoryChildPhoto4">
                                                                                <span class="sl-sidebar__form--text">Wires & Cables</span>
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="sl-checkbox">
                                                                            <input id="categoryChildPhoto5" type="checkbox" name="category">
                                                                            <label for="categoryChildPhoto5">
                                                                                <span class="sl-sidebar__form--text">Wires & Cables</span>
                                                                            </label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="sl-searchProductSidebar__sortPrice">
                                                    <h5>Sort By Price</h5>
                                                    <div class="sl-distance-side">
                                                        <div class="sl-distance__description">
                                                            <label for="amount">Price:</label>
                                                            <input type="text" id="amount" readonly>
                                                        </div>
                                                        <div id="slider-range"></div>
                                                    </div>
                                                </div>
                                                <div class="sl-searchProductSidebar__color">
                                                    <h5>Color</h5>
                                                    <div class="mCustomScrollbar">
                                                        <ul>
                                                            <li>
                                                                <div class="sl-checkbox sl-black">
                                                                    <input id="colorChildSide1" type="checkbox" name="category">
                                                                    <label for="colorChildSide1">
                                                                        <span class="sl-sidebar__form--text">Black</span>
                                                                        <span class="sl-sidebar__form--number">1258</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox sl-red">
                                                                    <input id="colorChildSide2" type="checkbox" name="category">
                                                                    <label for="colorChildSide2">
                                                                        <span class="sl-sidebar__form--text">Red</span>
                                                                        <span class="sl-sidebar__form--number">454</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox sl-blue">
                                                                    <input id="colorChildSide3" type="checkbox" name="category">
                                                                    <label for="colorChildSide3">
                                                                        <span class="sl-sidebar__form--text">Blue</span>
                                                                        <span class="sl-sidebar__form--number">752</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox sl-orange">
                                                                    <input id="colorChildSide4" type="checkbox" name="category">
                                                                    <label for="colorChildSide4">
                                                                        <span class="sl-sidebar__form--text">Orange</span>
                                                                        <span class="sl-sidebar__form--number">2324</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox sl-purple">
                                                                    <input id="colorChildSide5" type="checkbox" name="category">
                                                                    <label for="colorChildSide5">
                                                                        <span class="sl-sidebar__form--text">Purple</span>
                                                                        <span class="sl-sidebar__form--number">572</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox sl-green">
                                                                    <input id="colorChildSide6" type="checkbox" name="category">
                                                                    <label for="colorChildSide6">
                                                                        <span class="sl-sidebar__form--text">Green</span>
                                                                        <span class="sl-sidebar__form--number">7532</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox sl-yellow">
                                                                    <input id="colorChildSide7" type="checkbox" name="category">
                                                                    <label for="colorChildSide7">
                                                                        <span class="sl-sidebar__form--text">Yellow</span>
                                                                        <span class="sl-sidebar__form--number">412</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="sl-searchProductSidebar__memory">
                                                    <h5>Memory</h5>
                                                    <div class="mCustomScrollbar">
                                                        <ul>
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="memoryChildSide1" class="sl-selectAll2" type="checkbox" name="category">
                                                                    <label for="memoryChildSide1">
                                                                        <span class="sl-sidebar__form--text">All</span>
                                                                        <span class="sl-sidebar__form--number">12456</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="memoryChildSide2" type="checkbox" name="category">
                                                                    <label for="memoryChildSide2">
                                                                        <span class="sl-sidebar__form--text">256GB</span>
                                                                        <span class="sl-sidebar__form--number">3756</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="memoryChildSide3" type="checkbox" name="category">
                                                                    <label for="memoryChildSide3">
                                                                        <span class="sl-sidebar__form--text">128GB</span>
                                                                        <span class="sl-sidebar__form--number">75324</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="memoryChildSide4" type="checkbox" name="category">
                                                                    <label for="memoryChildSide4">
                                                                        <span class="sl-sidebar__form--text">64GB</span>
                                                                        <span class="sl-sidebar__form--number">2142</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="memoryChildSide5" type="checkbox" name="category">
                                                                    <label for="memoryChildSide5">
                                                                        <span class="sl-sidebar__form--text">32GB</span>
                                                                        <span class="sl-sidebar__form--number">657</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="memoryChildSide6" type="checkbox" name="category">
                                                                    <label for="memoryChildSide6">
                                                                        <span class="sl-sidebar__form--text">16GB</span>
                                                                        <span class="sl-sidebar__form--number">4542</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="memoryChildSide7" type="checkbox" name="category">
                                                                    <label for="memoryChildSide7">
                                                                        <span class="sl-sidebar__form--text">8GB</span>
                                                                        <span class="sl-sidebar__form--number">15</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="sl-sidebar__rating">
                                                    <h5>Sort By Rating</h5>
                                                    <div class="mCustomScrollbar">
                                                        <ul class="sl-sider-ul">
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="ratingParentside1" class="sl-selectAll2" type="checkbox" name="rating">
                                                                    <label for="ratingParentside1">
                                                                        <span class="sl-sidebar__form--text">All</span>
                                                                        <span class="sl-sidebar__form--number">12456</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="priceChildside1" type="checkbox" name="rating">
                                                                    <label for="priceChildside1">
                                                                        <span class="sl-featureRating">
                                                                            <span class="sl-featureRating__stars"><span></span></span>
                                                                        </span>
                                                                        <span class="sl-sidebar__form--number">3756</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="priceChildside2" type="checkbox" name="rating">
                                                                    <label for="priceChildside2">
                                                                        <span class="sl-featureRating">
                                                                            <span class="sl-featureRating__stars"><span></span></span>
                                                                        </span>
                                                                        <span class="sl-sidebar__form--number">75324</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="priceChildside3" type="checkbox" name="rating">
                                                                    <label for="priceChildside3">
                                                                        <span class="sl-featureRating">
                                                                            <span class="sl-featureRating__stars"><span></span></span>
                                                                        </span>
                                                                        <span class="sl-sidebar__form--number">2142</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="priceChildside4" type="checkbox" name="rating">
                                                                    <label for="priceChildside4">
                                                                        <span class="sl-featureRating">
                                                                            <span class="sl-featureRating__stars"><span></span></span>
                                                                        </span>
                                                                        <span class="sl-sidebar__form--number">657</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="priceChildside5" type="checkbox" name="rating">
                                                                    <label for="priceChildside5">
                                                                        <span class="sl-featureRating">
                                                                            <span class="sl-featureRating__stars"><span></span></span>
                                                                        </span>
                                                                        <span class="sl-sidebar__form--number">4542</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="sl-searchProductSidebar__display">
                                                    <h5>Display Type</h5>
                                                    <div class="mCustomScrollbar">
                                                        <ul>
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="displayChildSide1" type="checkbox" name="category">
                                                                    <label for="displayChildSide1">
                                                                        <span class="sl-sidebar__form--text">24 inch</span>
                                                                        <span class="sl-sidebar__form--number">2454</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="displayChildSide2" type="checkbox" name="category">
                                                                    <label for="displayChildSide2">
                                                                        <span class="sl-sidebar__form--text">22 Inch</span>
                                                                        <span class="sl-sidebar__form--number">32454</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="sl-checkbox">
                                                                    <input id="displayChildSide3" type="checkbox" name="category">
                                                                    <label for="displayChildSide3">
                                                                        <span class="sl-sidebar__form--text">20 Inch</span>
                                                                        <span class="sl-sidebar__form--number">552</span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sl-searchProductSidebar__btn">
                                                <a class="btn sl-btn sl-btn-active" href="javascript:void(0);">Apply Filter</a>
                                                <a class="btn sl-btn sl-btn-reset" href="javascript:void(0);">Reset all</a>
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
{{--                                                        <span class="sl-bg-red-orange">25% OFF</span>--}}
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
                                <div class="sl-pagination__button-left">
                                    <a class="btn sl-btn sl-btn-small" href="javascript:void(0);"><span class="lnr lnr-chevron-left"></span></a>
                                </div>
                                <div class="sl-pagination__button-num">
                                    <a class="btn sl-btn sl-btn-small" href="javascript:void(0);"><span>1</span></a>
                                    <a class="btn sl-btn sl-btn-small sl-btn-active" href="javascript:void(0);"><span>2</span></a>
                                    <a class="btn sl-btn sl-btn-small" href="javascript:void(0);"><span>3</span></a>
                                    <a class="btn sl-btn sl-btn-small" href="javascript:void(0);"><span>4</span></a>
                                    <a class="btn sl-btn sl-btn-small" href="javascript:void(0);"><span class="sl-more">...</span></a>
                                    <a class="btn sl-btn sl-btn-small" href="javascript:void(0);"><span>50</span></a>
                                </div>
                                <div class="sl-pagination__button-right">
                                    <a class="btn sl-btn sl-btn-small sl-btn-active" href="javascript:void(0);"><span class="lnr lnr-chevron-right"></span></a>
                                </div>
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
