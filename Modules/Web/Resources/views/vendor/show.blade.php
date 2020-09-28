@extends('web::layouts.master')
@section('content')

    <!-- MAIN START -->
    <main class="sl-main">
        <!-- SIDEBAR START -->
        <aside id="sl-sidebar" class="sl-sidebar">
            <div class="sl-sidebar__holder mCustomScrollbar">
                <div class="sl-sidebar__header">
                    <h4>Advance Search</h4>
                    <a href="javascript:void(0);" id="sl-close"><i class="ti-close"></i></a>
                </div>
                <form class="sl-sidebar__form">
                    <div class="sl-sidebar__categories ">
                        <h5>Categories</h5>
                        <div class="mCustomScrollbar">
                            <div class="sl-input-group">
                                <input class="form-control sl-form-control sl-prepend" type="text" placeholder="Search Category">
                                <button class="btn sl-btn sl-btn-active sl-append"><i class="lnr lnr-magnifier"></i></button>
                            </div>
                            <ul class="sl-sider-ul">
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="categoryParent1" class="sl-selectAll1" type="checkbox" name="category">
                                        <label for="categoryParent1">
                                            <span class="sl-sidebar__form--heading">Graphic & Design</span>
                                        </label>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="sl-checkbox">
                                                <input id="categoryChild1" type="checkbox" name="category">
                                                <label for="categoryChild1">
                                                    <span class="sl-sidebar__form--text">Logo Design</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sl-checkbox">
                                                <input id="categoryChild2" type="checkbox" name="category">
                                                <label for="categoryChild2">
                                                    <span class="sl-sidebar__form--text">Brand Style Guides</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sl-checkbox">
                                                <input id="categoryChild3" type="checkbox" name="category">
                                                <label for="categoryChild3">
                                                    <span class="sl-sidebar__form--text">Game Design</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sl-checkbox">
                                                <input id="categoryChild4" type="checkbox" name="category">
                                                <label for="categoryChild4">
                                                    <span class="sl-sidebar__form--text">Graphics for Streamers</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sl-checkbox">
                                                <input id="categoryChild5" type="checkbox" name="category">
                                                <label for="categoryChild5">
                                                    <span class="sl-sidebar__form--text">Illustration</span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="categoryParent2" class="sl-selectAll1" type="checkbox" name="category">
                                        <label for="categoryParent2">
                                            <span class="sl-sidebar__form--heading">Business</span>
                                        </label>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="sl-checkbox">
                                                <input id="categoryChild6" type="checkbox" name="category">
                                                <label for="categoryChild6">
                                                    <span class="sl-sidebar__form--text">Virtual Assistant</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sl-checkbox">
                                                <input id="categoryChild7" type="checkbox" name="category">
                                                <label for="categoryChild7">
                                                    <span class="sl-sidebar__form--text">Data Entry</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sl-checkbox">
                                                <input id="categoryChild8" type="checkbox" name="category">
                                                <label for="categoryChild8">
                                                    <span class="sl-sidebar__form--text">Market Research</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sl-checkbox">
                                                <input id="categoryChild9" type="checkbox" name="category">
                                                <label for="categoryChild9">
                                                    <span class="sl-sidebar__form--text">Product Research</span>
                                                </label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sl-checkbox">
                                                <input id="categoryChild10" type="checkbox" name="category">
                                                <label for="categoryChild10">
                                                    <span class="sl-sidebar__form--text">Product Research</span>
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sl-sidebar__price">
                        <h5>Sort By Price</h5>
                        <div class="mCustomScrollbar">
                            <ul class="sl-sider-ul">
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="priceParent1" class="sl-selectAll2" type="checkbox" name="price">
                                        <label for="priceParent1">
                                            <span class="sl-sidebar__form--text">All</span>
                                            <span class="sl-sidebar__form--number">12456</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="priceChild1" type="checkbox" name="price">
                                        <label for="priceChild1">
                                            <span class="sl-featureRatingDollars">
                                                <span class="sl-featureRatingDollars__dollars"><span></span></span>
                                                <span class="sl-sidebar__form--text">Inexpensive</span>
                                            </span>
                                            <span class="sl-sidebar__form--number">3756</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="priceChild2" type="checkbox" name="price">
                                        <label for="priceChild2">
                                            <span class="sl-featureRatingDollars">
                                                <span class="sl-featureRatingDollars__dollars"><span></span></span>
                                                <span class="sl-sidebar__form--text">Moderate</span>
                                            </span>
                                            <span class="sl-sidebar__form--number">75324</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="priceChild3" type="checkbox" name="price">
                                        <label for="priceChild3">
                                            <span class="sl-featureRatingDollars">
                                                <span class="sl-featureRatingDollars__dollars"><span></span></span>
                                                <span class="sl-sidebar__form--text">Pricey</span>
                                            </span>
                                            <span class="sl-sidebar__form--number">2142</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="priceChild4" type="checkbox" name="price">
                                        <label for="priceChild4">
                                            <span class="sl-featureRatingDollars">
                                                <span class="sl-featureRatingDollars__dollars"><span></span></span>
                                                <span class="sl-sidebar__form--text">High End</span>
                                            </span>
                                            <span class="sl-sidebar__form--number">657</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="priceChild5" type="checkbox" name="price">
                                        <label for="priceChild5">
                                            <span class="sl-featureRatingDollars">
                                                <span class="sl-featureRatingDollars__dollars"><span></span></span>
                                                <span class="sl-sidebar__form--text">Ultra High End</span>
                                            </span>
                                            <span class="sl-sidebar__form--number">4542</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sl-sidebar__days">
                        <h5>Working Days</h5>
                        <div class="mCustomScrollbar">
                            <ul class="sl-sider-ul">
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="days1" type="checkbox" name="days">
                                        <label for="days1">
                                            <span class="sl-featureRatingDollars">
                                                <span class="sl-featureRatingDollars__dollars"><span></span></span>
                                                <span class="sl-sidebar__form--text">Monday</span>
                                            </span>
                                            <span class="sl-sidebar__form--number">12456</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="days2" type="checkbox" name="days">
                                        <label for="days2">
                                            <span class="sl-featureRatingDollars">
                                                <span class="sl-featureRatingDollars__dollars"><span></span></span>
                                                <span class="sl-sidebar__form--text">Tuesday</span>
                                            </span>
                                            <span class="sl-sidebar__form--number">3756</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="days3" type="checkbox" name="days">
                                        <label for="days3">
                                            <span class="sl-featureRatingDollars">
                                                <span class="sl-featureRatingDollars__dollars"><span></span></span>
                                                <span class="sl-sidebar__form--text">Wednesday</span>
                                            </span>
                                            <span class="sl-sidebar__form--number">75324</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="days4" type="checkbox" name="days">
                                        <label for="days4">
                                            <span class="sl-featureRatingDollars">
                                                <span class="sl-featureRatingDollars__dollars"><span></span></span>
                                                <span class="sl-sidebar__form--text">Thursday</span>
                                            </span>
                                            <span class="sl-sidebar__form--number">2142</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="days5" type="checkbox" name="days">
                                        <label for="days5">
                                            <span class="sl-featureRatingDollars">
                                                <span class="sl-featureRatingDollars__dollars"><span></span></span>
                                                <span class="sl-sidebar__form--text">Friday</span>
                                            </span>
                                            <span class="sl-sidebar__form--number">657</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="days6" type="checkbox" name="days">
                                        <label for="days6">
                                            <span class="sl-featureRatingDollars">
                                                <span class="sl-featureRatingDollars__dollars"><span></span></span>
                                                <span class="sl-sidebar__form--text">Saturday</span>
                                            </span>
                                            <span class="sl-sidebar__form--number">4542</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="days7" type="checkbox" name="days">
                                        <label for="days7">
                                            <span class="sl-featureRatingDollars">
                                                <span class="sl-featureRatingDollars__dollars"><span></span></span>
                                                <span class="sl-sidebar__form--text">Sunday</span>
                                            </span>
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
                                        <input id="ratingParent1" class="sl-selectAll2" type="checkbox" name="rating">
                                        <label for="ratingParent1">
                                            <span class="sl-sidebar__form--text">All</span>
                                            <span class="sl-sidebar__form--number">12456</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="ratingChild1" type="checkbox" name="rating">
                                        <label for="ratingChild1">
                                            <span class="sl-featureRating">
                                                <span class="sl-featureRating__stars"><span></span></span>
                                            </span>
                                            <span class="sl-sidebar__form--number">3756</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="ratingChild2" type="checkbox" name="rating">
                                        <label for="ratingChild2">
                                            <span class="sl-featureRating">
                                                <span class="sl-featureRating__stars"><span></span></span>
                                            </span>
                                            <span class="sl-sidebar__form--number">75324</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="ratingChild3" type="checkbox" name="rating">
                                        <label for="ratingChild3">
                                            <span class="sl-featureRating">
                                                <span class="sl-featureRating__stars"><span></span></span>
                                            </span>
                                            <span class="sl-sidebar__form--number">2142</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="ratingChild4" type="checkbox" name="rating">
                                        <label for="ratingChild4">
                                            <span class="sl-featureRating">
                                                <span class="sl-featureRating__stars"><span></span></span>
                                            </span>
                                            <span class="sl-sidebar__form--number">657</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="ratingChild5" type="checkbox" name="rating">
                                        <label for="ratingChild5">
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
                    <div class="sl-sidebar__miscellaneous">
                        <h5>Miscellaneous</h5>
                        <div class="mCustomScrollbar">
                            <ul class="sl-sider-ul">
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="miscellaneous1" type="checkbox" name="miscellaneous">
                                        <label for="miscellaneous1">
                                            <span class="sl-featureRatingDollars">
                                                <span class="sl-featureRatingDollars__dollars"><span></span></span>
                                                <span class="sl-sidebar__form--text">User With Photos</span>
                                            </span>
                                            <span class="sl-sidebar__form--number">2454</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="miscellaneous2" type="checkbox" name="miscellaneous">
                                        <label for="miscellaneous2">
                                            <span class="sl-featureRatingDollars">
                                                <span class="sl-featureRatingDollars__dollars"><span></span></span>
                                                <span class="sl-sidebar__form--text">Search Male Only</span>
                                            </span>
                                            <span class="sl-sidebar__form--number">32454</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="sl-checkbox">
                                        <input id="miscellaneous3" type="checkbox" name="miscellaneous">
                                        <label for="miscellaneous3">
                                            <span class="sl-featureRatingDollars">
                                                <span class="sl-featureRatingDollars__dollars"><span></span></span>
                                                <span class="sl-sidebar__form--text">Search Female Only</span>
                                            </span>
                                            <span class="sl-sidebar__form--number">552</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sl-sidebar__btn">
                        <a href="javascript:void(0);" class="btn sl-btn sl-btn-active">Apply Filter</a>
                        <a href="javascript:void(0);" class="btn sl-btn">Reset All</a>
                    </div>
                </form>
            </div>
        </aside>
        <!-- SIDEBAR END -->
        <!-- SERVICE PROVIDER START -->
        <section class="sl-main-section">
            <div class="container">
                <div class="sl-serviceProvider">
                    <div class="sl-filters">
                        <p><a href="javascript:void(0);">All Categories</a><i class="ti-angle-right"></i>"{{ $user->first_name }} {{ $user->last_name }}" ({{ count($user->products) }})</p>
                    </div>
                    <div class="sl-serviceProvider__content">
                        <div class="row">
                            @foreach($user->products as $product)
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="sl-slider">
                                        <figure>
                                            <a href="javascript:void(0);">@if(count($product->images) > 0)
                                        <img src="{{asset('storage/'.$product->images[0]->full )}}" alt="Image Description">
                                        @else 
                                        <img src="{{asset('storage/')}}" alt="Image Description">
                                        @endif</a></a>
                                        @if($user->profile != null)
                                            <a href="javascript:void(0);"><img src="{{$user->profile->image}}" alt="Image Description"></a>
                                        @endif
                                            <a href="javascript:void(0);" class="sl-like"><i class="far fa-heart"></i></a>
                                        </figure>
                                        <div class="sl-slider__content">
                                            <div class="sl-slider__header">
                                                <div class="sl-slider__tags">
                                                    <a href="javascript:void(0);" class="sl-bg-red-orange">Featured</a>
                                                    <a href="javascript:void(0);" class="sl-bg-green">Verified</a>
                                                    <a href="javascript:void(0);" class="sl-slider__tags--dollar">
                                                        <i class="fas fa-dollar-sign"></i>
                                                        <i class="fas fa-dollar-sign"></i>
                                                        <i class="fas fa-dollar-sign"></i>
                                                        <i class="fas fa-dollar-sign"></i>
                                                    </a>
                                                </div>
                                                <a href="javascript:void(0);">{{ count($product->categories) ? $product->categories[0]->name : '' }}</a>
                                                <h5><a href="javascript:void(0);">{{ $product->name }}</a></h5>
                                                <div class="sl-featureRating">
                                                    <span class="sl-featureRating__stars"><span></span></span>
                                                    <em>(0)</em>
                                                </div>
                                                <em>By: <a href="javascript:void(0);">{{ $user->first_name }} {{ $user->last_name }}</a></em>
                                            </div>
                                            <div class="sl-slider__footer">
                                                <em>Leeds, UK (<a href="javascript:void(0);">Directions</a>)</em>
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
                    </div>
                    <!-- <div class="sl-pagination">
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
                    </div> -->
                </div>
            </div>
        </section>
        <!-- SERVICE PROVIDER END -->
    </main>
    <!-- MAIN END -->

@endsection
