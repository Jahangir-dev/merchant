<!-- HEADER START -->
<header>
    <div class="sl-main-header">
        <strong class="sl-main-header__logo" style="color:#fff;">
            <a href="{{route('web.index')}}"><!-- <img src="{{asset('frontend/images/main-logo.png')}}" alt="Logo"> --> Logo Here</a>
        </strong>


        <div class="sl-main-header__content">
            <div class="sl-main-header__upper">
                <form class="sl-main-form">
                    <div class="sl-form-group sl-main-form__input1 sl-loading">
                        <input class="form-control sl-form-control" type="text" placeholder="Search anything you want">
                    </div>
                    <div class="sl-form-group sl-main-form__input2">
                        <input class="form-control sl-form-control" type="text" placeholder="Detect my location">
                        <a href="javascript:void(0);" class="sl-right-icon sl-arrow-icon"><i class="ti-angle-down"></i></a>
                        <a href="javascript:void(0);" class="sl-right-icon"><i class="ti-target"></i></a>
                        <div class="sl-distance">
                            <div class="sl-distance__description">
                                <label for="amountfour">Distance:</label>
                                <input type="text" id="amountfour" readonly>
                            </div>
                            <div id="slider-range-min"></div>
                        </div>
                    </div>
                    <div class="sl-form-group sl-main-form__input3">
                        <div class="sl-select">
                            <select>
                                <option hidden="">Service Providers</option>
                                <option>type 1</option>
                                <option>type 2</option>
                                <option>type 3</option>
                            </select>
                        </div>
                    </div>
                </form>
                <div class="sl-input-group">
                    <a href="javascript:void(0);" class="btn sl-btn sl-btn-active sl-advance-btn">
                        <span>Search Now</span>
                        <span>
                                <em class="sl-advance-icon">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </em>
                            </span>
                    </a>
                </div>
               
                <div class="sl-topbar-notify" style="display: none">

                    <div class="sl-topbar-notify__icons dropdown">
                        <a href="javascript:void(0);" class="sl-topbar-notify__anchor" id="slCart" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-shopping-cart"></i>
                            <span class="sl-topbar-notify__circle">
                                    <em class="sl-bg-blue">12</em>
                                </span>
                        </a>
                        <div class="dropdown-menu sl-dropdown__cart" aria-labelledby="slCart">
                            <h6>Shopping Cart</h6>
                            <ul>
                                <li>
                                    <img src="{{asset('frontend/images/index/cart/img-01.png')}}" alt="Image Description">
                                    <div class="sl-dropdown__cart__description">
                                        <a class="sl-cart-title" href="javascript:void(0);">Earbuds Earphones Stereo</a>
                                        <span class="sl-cart-price">$11.19</span>
                                        <a class="sl-cart-delete" href="javascript:void(0);">Delete Item</a>
                                    </div>
                                    <form class="sl-vlaue-btn">
                                        <a href="javascript:void(0);" class="sl-input-decrement">-</a>
                                        <input class="sl-input-number" type="number" value="1" min="0" max="1000">
                                        <a href="javascript:void(0);" class="sl-input-increment">+</a>
                                    </form>
                                </li>
                                <li>
                                    <img src="{{asset('frontend/images/index/cart/img-02.png')}}" alt="Image Description">
                                    <div class="sl-dropdown__cart__description">
                                        <a class="sl-cart-title" href="javascript:void(0);">Vintage Round Sunglasses</a>
                                        <span class="sl-cart-price">$13.50</span>
                                        <a class="sl-cart-delete" href="javascript:void(0);">Delete Item</a>
                                    </div>
                                    <form class="sl-vlaue-btn">
                                        <a href="javascript:void(0);" class="sl-input-decrement">-</a>
                                        <input class="sl-input-number" type="number" value="1" min="0" max="1000">
                                        <a href="javascript:void(0);" class="sl-input-increment">+</a>
                                    </form>
                                </li>
                                <li>
                                    <img src="{{asset('frontend/images/index/cart/img-03.png')}}" alt="Image Description">
                                    <div class="sl-dropdown__cart__description">
                                        <a class="sl-cart-title" href="javascript:void(0);">Phone Holder for Car</a>
                                        <span class="sl-cart-price">$8.30</span>
                                        <a class="sl-cart-delete" href="javascript:void(0);">Delete Item</a>
                                    </div>
                                    <form class="sl-vlaue-btn">
                                        <a href="javascript:void(0);" class="sl-input-decrement">-</a>
                                        <input class="sl-input-number" type="number" value="1" min="0" max="1000">
                                        <a href="javascript:void(0);" class="sl-input-increment">+</a>
                                    </form>
                                </li>
                            </ul>
                            <div class="sl-cart-footer">
                                <div class="sl-cart-footer__total">
                                    <span>Subtotal</span>
                                    <em>$32.99</em>
                                </div>
                                <div class="sl-cart-footer__btn">
                                    <a class="btn sl-btn" href="javascript:void(0);">Proceed To Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    @guest
                    <div class="sl-user">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#loginpopup">
                            <i class="fa fa-user"></i>
                            <span class="sl-user__description"><em class="d-block">{{translateText('Login')}}</em></span>
                        </a>
                    </div>
                    @else
                    @php
                        $user = \App\User::where('id', Auth::user()->id)->with('role')->first()
                    @endphp
                    <div class="sl-user sl-userdropdown">
                        <a href="javascript:void(0);">
                            <img src="{{asset('frontend/images/insight/user-img.jpg')}}" alt="Image Description">
                            <span class="sl-user__description"><em class="d-block">{{ $user->first_name }}</em>{{ $user->last_name }}</span>
                            <i class="ti-angle-down"></i>
                        </a>
                        <ul class="sl-usermenu">


                            @if($user->role->name == 'Merchant')
                                <li>
                                    <a href="{{route('merchant.profile')}}">
                                        <i class="ti-user"></i><span>Profile Settings</span>
                                    </a>
                                </li>
                            @endif
                            @if($user->role->name == 'Customer')
                                <li>
                                    <a href="{{route('customer.profile')}}">
                                        <i class="ti-user"></i><span>Profile Settings</span>
                                    </a>
                                </li>
                            @endif
                            @if($user->role->name == 'Merchant')
                                <li>
                                    <a href="{{route('merchant.deals')}}">
                                        <i class="ti-user"></i><span>Deals</span>
                                    </a>
                                </li>
                            @endif

                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ translateText('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                @endguest
                <div class="sl-main-upperBackbtn">
                    <a href="javascript:void(0);"><i class="ti-close"></i></a>
                </div>
                </div>

                @php
                    $categories = App\Models\Category::where('menu', true)->with('products')->get();
                @endphp


                <div class="sl-main-header__lower">
                <nav class="navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#slMainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="lnr lnr-menu"></i>
                    </button>
                    <div class="collapse navbar-collapse sl-navigation" id="slMainNavbar">
                        <ul class="navbar-nav mr-auto sl-navbar-nav">
                            <li class="nav-item sl-navactive menu-item-has-mega-menu">
                                <a class="nav-link" href="javascript:void(0);">Home</a>
                                <div class="mega-menu nav">
                                    <ul class="mega-menu-row">
                                        <li class="mega-menu-col mega-menu-nav">
                                            <ul class="nav nav-tabs">
                                                @foreach($categories as $index => $category)
                                                    @if($index < 10)
                                                        <li class="nav-item nav-link">
                                                            <a data-toggle="tab" href="#{{$category->slug}}" class="@if($index == 0) active @endif">{{ translateText($category->name) }}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                                {{--<li class="nav-item nav-link">
                                                    <a data-toggle="tab" href="#jewelry">Jewelry and Watches</a>
                                                </li>
                                                <li class="nav-item nav-link">
                                                    <a data-toggle="tab" href="#camera">Camera And Photo</a>
                                                </li>
                                                <li class="nav-item nav-link">
                                                    <a data-toggle="tab" href="#clothing">Clothing and Shoes</a>
                                                </li>
                                                <li class="nav-item nav-link">
                                                    <a data-toggle="tab" href="#television">Audio and Television</a>
                                                </li>
                                                <li class="nav-item nav-link">
                                                    <a data-toggle="tab" href="#computers">Computers and IT</a>
                                                </li>
                                                <li class="nav-item nav-link">
                                                    <a data-toggle="tab" href="#health">Health &amp; Beauty</a>
                                                </li>--}}
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col sl-viewproducts-holder tab-content">
                                            @foreach($categories as $index => $category)
                                                @if($index < 10)
                                                    <div id="{{$category->slug}}" class="tab-pane fade @if($index == 0) active show @endif" >
                                                        <div class="sl-productstab">
                                                            <div class="sl-viewproducts">
                                                                <figure class="sl-viewproducts__img">
                                                                    <img src="{{asset('frontend/images/img-02.jpg')}}" alt="img description">
                                                                    <a href="javascript:void(0);" class="sl-sellertag"><em>Best Seller</em></a>
                                                                </figure>
                                                                <div class="sl-viewproducts__content">
                                                                    <h3>{{$category->name}}</h3>
                                                                    <div class="sl-featureRating">
                                                                        <span class="sl-featureRating__stars"><span></span></span>
                                                                        <em>({{translateText('1648 Feedback')}})</em>
                                                                    </div>
                                                                    <a href="vendor-single.html" class="btn sl-btn">{{ translateText('View Product') }}</a>
                                                                </div>
                                                            </div>
                                                            <div class="sl-productsinfo">
                                                                <div class="sl-dropdown__cart">
                                                                    <!-- <div class="sl-productsinfo__title">
                                                                        <h6>Audio and Television</h6>
                                                                        <a href="vendor-single.html">{{translateText('Show All')}}</a>
                                                                    </div> -->
                                                                    <ul>
                                                                        @foreach($category->products as $index => $product)
                                                                            <li>
                                                                                <img src="{{asset('frontend/images/index/cart/img-01.png')}}" alt="Image Description">
                                                                                <div class="sl-dropdown__cart__description">
                                                                                    <a class="sl-cart-title" href="javascript:void(0);">{{ translateText($product->name) }}</a>
                                                                                    <span class="sl-cart-price">{{translateText($product->price)}}</span>
                                                                                    <a class="sl-soldby" href="javascript:void(0);"><em>{{translateText('Sold by')}}</em> {{translateText('Life Simplify')}}</a>
                                                                                </div>
                                                                            </li>
                                                                        @endforeach
                                                                        {{--<li>
                                                                            <img src="{{asset('frontend/images/index/cart/img-02.png')}}" alt="Image Description">
                                                                            <div class="sl-dropdown__cart__description">
                                                                                <a class="sl-cart-title" href="javascript:void(0);">Vintage Round Sunglasses</a>
                                                                                <span class="sl-cart-price">$13.50</span>
                                                                                <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Life Simplify</a>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <img src="{{asset('frontend/images/index/cart/img-03.png')}}" alt="Image Description">
                                                                            <div class="sl-dropdown__cart__description">
                                                                                <a class="sl-cart-title" href="javascript:void(0);">Phone Holder for Car</a>
                                                                                <span class="sl-cart-price">$8.30</span>
                                                                                <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Ryan &amp; John</a>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <img src="{{asset('frontend/images/index/cart/img-04.png')}}" alt="Image Description">
                                                                            <div class="sl-dropdown__cart__description">
                                                                                <a class="sl-cart-title" href="javascript:void(0);">Earbuds Earphones Stereo</a>
                                                                                <span class="sl-cart-price">$11.19</span>
                                                                                <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Ryan &amp; John</a>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <img src="{{asset('frontend/images/index/cart/img-05.png')}}" alt="Image Description">
                                                                            <div class="sl-dropdown__cart__description">
                                                                                <a class="sl-cart-title" href="javascript:void(0);">Vintage Round Sunglasses</a>
                                                                                <span class="sl-cart-price">$13.50</span>
                                                                                <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Crown Lost Group</a>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <img src="{{asset('frontend/images/index/cart/img-06.png')}}" alt="Image Description">
                                                                            <div class="sl-dropdown__cart__description">
                                                                                <a class="sl-cart-title" href="javascript:void(0);">Phone Holder for Car</a>
                                                                                <span class="sl-cart-price">$8.30</span>
                                                                                <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Crown Lost Group</a>
                                                                            </div>
                                                                        </li>--}}
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                            {{--<div id="jewelry" class="tab-pane fade">
                                                <div class="sl-productstab">
                                                    <div class="sl-viewproducts">
                                                        <figure class="sl-viewproducts__img">
                                                            <img src="{{asset('frontend/images/img-02.jpg')}}" alt="img description">
                                                            <a href="javascript:void(0);" class="sl-sellertag"><em>Best Seller</em></a>
                                                        </figure>
                                                        <div class="sl-viewproducts__content">
                                                            <h3>Office Mentor</h3>
                                                            <div class="sl-featureRating">
                                                                <span class="sl-featureRating__stars"><span></span></span>
                                                                <em>(1648 Feedback)</em>
                                                            </div>
                                                            <a href="vendor-single.html" class="btn sl-btn">View Products</a>
                                                        </div>
                                                    </div>
                                                    <div class="sl-productsinfo">
                                                        <div class="sl-dropdown__cart">
                                                            <div class="sl-productsinfo__title">
                                                                <h6>Jewelry and Watches</h6>
                                                                <a href="vendor-single.html">Show All</a>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-01.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Earbuds Earphones Stereo</a>
                                                                        <span class="sl-cart-price">$11.19</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Life Simplify</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-02.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Vintage Round Sunglasses</a>
                                                                        <span class="sl-cart-price">$13.50</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Life Simplify</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-03.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Phone Holder for Car</a>
                                                                        <span class="sl-cart-price">$8.30</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Ryan &amp; John</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-04.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Earbuds Earphones Stereo</a>
                                                                        <span class="sl-cart-price">$11.19</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Ryan &amp; John</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-05.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Vintage Round Sunglasses</a>
                                                                        <span class="sl-cart-price">$13.50</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Crown Lost Group</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-06.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Phone Holder for Car</a>
                                                                        <span class="sl-cart-price">$8.30</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Crown Lost Group</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="camera" class="tab-pane fade">
                                                <div class="sl-productstab">
                                                    <div class="sl-viewproducts">
                                                        <figure class="sl-viewproducts__img">
                                                            <img src="{{asset('frontend/images/img-02.jpg')}}" alt="img description">
                                                            <a href="javascript:void(0);" class="sl-sellertag"><em>Best Seller</em></a>
                                                        </figure>
                                                        <div class="sl-viewproducts__content">
                                                            <h3>Office Mentor</h3>
                                                            <div class="sl-featureRating">
                                                                <span class="sl-featureRating__stars"><span></span></span>
                                                                <em>(1648 Feedback)</em>
                                                            </div>
                                                            <a href="vendor-single.html" class="btn sl-btn">View Products</a>
                                                        </div>
                                                    </div>
                                                    <div class="sl-productsinfo">
                                                        <div class="sl-dropdown__cart">
                                                            <div class="sl-productsinfo__title">
                                                                <h6>Audio and Television</h6>
                                                                <a href="vendor-single.html">Show All</a>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-01.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Earbuds Earphones Stereo</a>
                                                                        <span class="sl-cart-price">$11.19</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Life Simplify</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-02.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Vintage Round Sunglasses</a>
                                                                        <span class="sl-cart-price">$13.50</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Life Simplify</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-03.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Phone Holder for Car</a>
                                                                        <span class="sl-cart-price">$8.30</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Ryan &amp; John</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-04.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Earbuds Earphones Stereo</a>
                                                                        <span class="sl-cart-price">$11.19</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Ryan &amp; John</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-05.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Vintage Round Sunglasses</a>
                                                                        <span class="sl-cart-price">$13.50</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Crown Lost Group</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-06.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Phone Holder for Car</a>
                                                                        <span class="sl-cart-price">$8.30</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Crown Lost Group</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="clothing" class="tab-pane fade">
                                                <div class="sl-productstab">
                                                    <div class="sl-viewproducts">
                                                        <figure class="sl-viewproducts__img">
                                                            <img src="{{asset('frontend/images/img-02.jpg')}}" alt="img description">
                                                            <a href="javascript:void(0);" class="sl-sellertag"><em>Best Seller</em></a>
                                                        </figure>
                                                        <div class="sl-viewproducts__content">
                                                            <h3>Office Mentor</h3>
                                                            <div class="sl-featureRating">
                                                                <span class="sl-featureRating__stars"><span></span></span>
                                                                <em>(1648 Feedback)</em>
                                                            </div>
                                                            <a href="vendor-single.html" class="btn sl-btn">View Products</a>
                                                        </div>
                                                    </div>
                                                    <div class="sl-productsinfo">
                                                        <div class="sl-dropdown__cart">
                                                            <div class="sl-productsinfo__title">
                                                                <h6>Audio and Television</h6>
                                                                <a href="vendor-single.html">Show All</a>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-01.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Earbuds Earphones Stereo</a>
                                                                        <span class="sl-cart-price">$11.19</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Life Simplify</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-02.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Vintage Round Sunglasses</a>
                                                                        <span class="sl-cart-price">$13.50</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Life Simplify</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-03.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Phone Holder for Car</a>
                                                                        <span class="sl-cart-price">$8.30</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Ryan &amp; John</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-04.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Earbuds Earphones Stereo</a>
                                                                        <span class="sl-cart-price">$11.19</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Ryan &amp; John</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-05.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Vintage Round Sunglasses</a>
                                                                        <span class="sl-cart-price">$13.50</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Crown Lost Group</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-06.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Phone Holder for Car</a>
                                                                        <span class="sl-cart-price">$8.30</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Crown Lost Group</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="television" class="tab-pane fade " >
                                                <div class="sl-productstab">
                                                    <div class="sl-viewproducts">
                                                        <figure class="sl-viewproducts__img">
                                                            <img src="{{asset('frontend/images/img-02.jpg')}}" alt="img description">
                                                            <a href="javascript:void(0);" class="sl-sellertag"><em>Best Seller</em></a>
                                                        </figure>
                                                        <div class="sl-viewproducts__content">
                                                            <h3>Office Mentor</h3>
                                                            <div class="sl-featureRating">
                                                                <span class="sl-featureRating__stars"><span></span></span>
                                                                <em>(1648 Feedback)</em>
                                                            </div>
                                                            <a href="vendor-single.html" class="btn sl-btn">View Products</a>
                                                        </div>
                                                    </div>
                                                    <div class="sl-productsinfo">
                                                        <div class="sl-dropdown__cart">
                                                            <div class="sl-productsinfo__title">
                                                                <h6>Audio and Television</h6>
                                                                <a href="vendor-single.html">Show All</a>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-01.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Earbuds Earphones Stereo</a>
                                                                        <span class="sl-cart-price">$11.19</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Life Simplify</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-02.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Vintage Round Sunglasses</a>
                                                                        <span class="sl-cart-price">$13.50</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Life Simplify</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-03.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Phone Holder for Car</a>
                                                                        <span class="sl-cart-price">$8.30</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Ryan &amp; John</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-04.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Earbuds Earphones Stereo</a>
                                                                        <span class="sl-cart-price">$11.19</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Ryan &amp; John</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-05.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Vintage Round Sunglasses</a>
                                                                        <span class="sl-cart-price">$13.50</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Crown Lost Group</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-06.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Phone Holder for Car</a>
                                                                        <span class="sl-cart-price">$8.30</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Crown Lost Group</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="computers" class="tab-pane fade">
                                                <div class="sl-productstab">
                                                    <div class="sl-viewproducts">
                                                        <figure class="sl-viewproducts__img">
                                                            <img src="{{asset('frontend/images/img-02.jpg')}}" alt="img description">
                                                            <a href="javascript:void(0);" class="sl-sellertag"><em>Best Seller</em></a>
                                                        </figure>
                                                        <div class="sl-viewproducts__content">
                                                            <h3>Office Mentor</h3>
                                                            <div class="sl-featureRating">
                                                                <span class="sl-featureRating__stars"><span></span></span>
                                                                <em>(1648 Feedback)</em>
                                                            </div>
                                                            <a href="vendor-single.html" class="btn sl-btn">View Products</a>
                                                        </div>
                                                    </div>
                                                    <div class="sl-productsinfo">
                                                        <div class="sl-dropdown__cart">
                                                            <div class="sl-productsinfo__title">
                                                                <h6>Audio and Television</h6>
                                                                <a href="vendor-single.html">Show All</a>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-01.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Earbuds Earphones Stereo</a>
                                                                        <span class="sl-cart-price">$11.19</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Life Simplify</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-02.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Vintage Round Sunglasses</a>
                                                                        <span class="sl-cart-price">$13.50</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Life Simplify</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-03.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Phone Holder for Car</a>
                                                                        <span class="sl-cart-price">$8.30</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Ryan &amp; John</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-04.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Earbuds Earphones Stereo</a>
                                                                        <span class="sl-cart-price">$11.19</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Ryan &amp; John</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-05.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Vintage Round Sunglasses</a>
                                                                        <span class="sl-cart-price">$13.50</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Crown Lost Group</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-06.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Phone Holder for Car</a>
                                                                        <span class="sl-cart-price">$8.30</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Crown Lost Group</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="health" class="tab-pane fade">
                                                <div class="sl-productstab">
                                                    <div class="sl-viewproducts">
                                                        <figure class="sl-viewproducts__img">
                                                            <img src="{{asset('frontend/images/img-02.jpg')}}" alt="img description">
                                                            <a href="javascript:void(0);" class="sl-sellertag"><em>Best Seller</em></a>
                                                        </figure>
                                                        <div class="sl-viewproducts__content">
                                                            <h3>Office Mentor</h3>
                                                            <div class="sl-featureRating">
                                                                <span class="sl-featureRating__stars"><span></span></span>
                                                                <em>(1648 Feedback)</em>
                                                            </div>
                                                            <a href="vendor-single.html" class="btn sl-btn">View Products</a>
                                                        </div>
                                                    </div>
                                                    <div class="sl-productsinfo">
                                                        <div class="sl-dropdown__cart">
                                                            <div class="sl-productsinfo__title">
                                                                <h6>Audio and Television</h6>
                                                                <a href="vendor-single.html">Show All</a>
                                                            </div>
                                                            <ul>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-01.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Earbuds Earphones Stereo</a>
                                                                        <span class="sl-cart-price">$11.19</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Life Simplify</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-02.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Vintage Round Sunglasses</a>
                                                                        <span class="sl-cart-price">$13.50</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Life Simplify</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-03.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Phone Holder for Car</a>
                                                                        <span class="sl-cart-price">$8.30</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Ryan &amp; John</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-04.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Earbuds Earphones Stereo</a>
                                                                        <span class="sl-cart-price">$11.19</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Ryan &amp; John</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-05.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Vintage Round Sunglasses</a>
                                                                        <span class="sl-cart-price">$13.50</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Crown Lost Group</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <img src="{{asset('frontend/images/index/cart/img-06.png')}}" alt="Image Description">
                                                                    <div class="sl-dropdown__cart__description">
                                                                        <a class="sl-cart-title" href="javascript:void(0);">Phone Holder for Car</a>
                                                                        <span class="sl-cart-price">$8.30</span>
                                                                        <a class="sl-soldby" href="javascript:void(0);"><em>Sold by</em> Crown Lost Group</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>--}}
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">About</a>
                            </li>

                        </ul>
                    </div>
                </nav>
                <div class="sl-main-header">
                <select name="target" class="target form-control">
            <option>Select</option>
            <option value="en" @if(Session::get("target") == "en") selected="selected" @endif>English</option>
            <option value="zh-CN" @if(Session::get("target") == "zh-CN") selected="selected" @endif>Chinese</option>
        </select>
    </div>
            </div>
        </div>
        <!-- Login Popup Start-->
        <div class="modal fade sl-loginpopup" tabindex="-1" role="dialog" id="loginpopup" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="sl-modalcontent modal-content">
                    <div class="sl-popuptitle">
                        <h4>{{translateText('Login') }}</h4>
                        <a href="javascript:void(0);" class="sl-closebtn close"><i class="lnr lnr-cross" data-dismiss="modal"></i></a>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('login') }}" class="sl-formtheme sl-formlogin">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control sl-form-control" placeholder="Your Email*">
                                </div>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group">
                                    <input name="password" required autocomplete="current-password" type="password" class="form-control sl-form-control @error('password') is-invalid @enderror" placeholder="Password*">
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="form-group sl-btnarea">
                                    <button type="submit" class="btn sl-btn">{{translateText('login')}}</button>
                                    <div class="sl-checkbox">
                                        <input id="remember" type="checkbox">
                                        <label for="remember">{{translateText('Remember me here') }}</label>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <span class="sl-optionsbar"><em>or</em></span>
                        <div class="sl-loginicon">
                            <ul>
                                <li><a href="javascript:void(0);" class="sl-facebookbox"><i class="fab fa-facebook-f"></i>{{translateText('Via facebook') }}</a></li>
                                <li><a href="javascript:void(0);" class="sl-googlebox"><i class="fab fa-google"></i>{{translateText('Via google') }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="sl-popup-footerterms">
                            <span>{{translateText('By signing in  you agree to these')}} <a href="legalprivacy.html"> {{translateText('Terms &amp; Conditions</a> &amp; consent to')}}<a href="legalprivacy.html">{{ translateText('Cookie Policy &amp; Privacy Policy.')}}</a></span>
                        </div>
                        <div class="sl-loginfooterinfo">
                            <a href="{{route('web.register')}}"><em>{{translateText('Not a member?')}}</em> {{translateText('Signup Now')}}</a>
                            <a href="{{route('web.forgot-password')}}" class="sl-forgot-password">{{translateText('Forgot password?')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Login Popup End-->
    </div>
</header>
<!-- HEADER END -->
<style type="text/css">
    .sl-main-form {

        display: flex;
        width: 718px !important;
    }
    .sl-input-group {

        display: block !important;
        margin-top:37px;
    }
</style>