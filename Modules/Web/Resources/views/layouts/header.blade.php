<!-- HEADER START -->
<header>
    <div class="sl-main-header">
        <strong class="sl-main-header__logo" style="color:#fff;">
            <a href="{{route('web.index')}}"><!-- <img src="{{asset('frontend/images/main-logo.png')}}" alt="Logo"> --> Logo Here</a>
        </strong>
        @php
        $merchants = \App\User::where('role_id', '2')->get();
        @endphp
        <div class="sl-main-header__content">
            <div class="sl-main-header__upper sl-navbar-search">
                <form method="get" action="{{route('search')}}" role="search" class="sl-main-form">
                    <div class="sl-form-group sl-main-form__input1">
                        <input name="search" class="form-control sl-form-control" type="text" placeholder="Search anything you want">
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
                            <select name="merchant">
                                <option value="null" hidden="">Service Providers</option>
                                @foreach($merchants as $merchant)
                                <option value="{{ $merchant->id }}"> {{ $merchant->first_name }} {{ $merchant->last_name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="sl-input-group">
                        <button type="submit" href="javascript:void(0);" class="btn sl-btn sl-btn-active sl-advance-btn">
                            <span>Search Now</span>
                            <span>
                                    <em class="sl-advance-icon">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </em>
                                </span>
                        </button>
                    </div>
                </form>

                <div class="sl-topbar-notify" style="display: block;">
                    <div class="sl-topbar-notify__icons dropdown">
                        <a href="javascript:void(0);" class="sl-topbar-notify__anchor" id="slCart" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                            <i class="ti-shopping-cart"></i>
                            <span class="sl-topbar-notify__circle">
                                <em id="cart-items-total" class="sl-bg-blue">0</em>
                            </span>
                        </a>

                        <div class="dropdown-menu sl-dropdown__cart" aria-labelledby="slCart">
                            <h6>Shopping Cart</h6>
                            <ul id="cart-items-list">

                            </ul>
                            <div class="sl-cart-footer">
                                <div class="sl-cart-footer__total">
                                    <span>Subtotal</span>
                                    <em id="cart-total-price">
                                        0
                                    </em>
                                </div>
                                <div class="sl-cart-footer__btn">
                                    <a class="btn sl-btn" href="{{ route('checkout.index') }}">{{translateText('Proceed To Checkout')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @guest
                    <div class="sl-user" style="display: contents">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#loginpopup">
                            <i class="fa fa-user"></i>
                            <span class="sl-user__description"><em class="d-block">{{translateText('Login')}}</em></span>
                        </a>
                    </div>
                @else
                    @php
                        $user = \App\User::where('id', \Auth::id())->with('role')->first()
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
                                                                    <a href="" class="btn sl-btn">{{ translateText('View Product') }}</a>
                                                                </div>
                                                            </div>
                                                            <div class="sl-productsinfo">
                                                                <div class="sl-dropdown__cart">
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
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                            </li>
                    @php $brands = \App\Models\Brand::with('products')->get(); @endphp
                            <li class="menu-item-has-mega-menu mega-menu-nav-pages">
                                <a href="javascript:void(0);">Service Providers</a>
                                <div class="mega-menu">
                                    <ul class="mega-menu-row">
                                        <li class="mega-menu-col">
                                            @foreach($brands as $index => $brand)
                                                @if($index < 3)
                                                    <ul>
                                                        <li class="mega-menu-title"><h3>{{ $brand->name }}</h3></li>
                                                        @foreach($brand->products as $product)
                                                            <li><a href="{{route('web.brand.show', ['slug' => $brand->slug])}}">{{ $product->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            @endforeach
                                        </li>
                                        <li class="mega-menu-col">
                                            @foreach($brands as $index => $brand)
                                                @if($index < 6 && $index > 2)
                                                    <ul>
                                                        <li class="mega-menu-title"><h3>{{ $brand->name }}</h3></li>
                                                        @foreach($brand->products as $product)
                                                            <li><a href="{{route('web.brand.show', ['slug' => $brand->slug])}}">{{ $product->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            @endforeach
                                        </li>
                                        <li class="mega-menu-col">
                                            @foreach($brands as $index => $brand)
                                                @if($index < 9 && $index > 5)
                                                    <ul>
                                                        <li class="mega-menu-title"><h3>{{ $brand->name }}</h3></li>
                                                        @foreach($brand->products as $product)
                                                            <li><a href="{{route('web.brand.show', ['slug' => $brand->slug])}}">{{ $product->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            @endforeach
                                        </li>
                                        <li class="mega-menu-col">
                                            @foreach($brands as $index => $brand)
                                                @if($index < 12 && $index > 8)
                                                    <ul>
                                                        <li class="mega-menu-title"><h3>{{ $brand->name }}</h3></li>
                                                        @foreach($brand->products as $product)
                                                            <li><a href="{{route('web.brand.show', ['slug' => $brand->slug])}}">{{ $product->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            @endforeach
                                        </li>
                                        {{--<li class="mega-menu-col">
                                            <ul>
                                                <li class="mega-menu-title"><h3>Digital Marketing</h3></li>
                                                <li><a href="service-provider.html">Social Media Marketing</a></li>
                                                <li><a href="service-provider.html">Content Marketing</a></li>
                                                <li><a href="service-provider.html">Video Marketing</a></li>
                                                <li><a href="service-provider.html">Email Marketing</a></li>
                                                <li><a href="service-provider.html">Crowdfunding</a></li>
                                            </ul>
                                            <ul>
                                                <li class="mega-menu-title"><h3>Writing &amp; Translation</h3></li>
                                                <li><a href="service-provider.html">Articles &amp; Blog Posts</a></li>
                                                <li><a href="service-provider.html">Resumes &amp; Cover Letters<i class="sl-menutag sl-menutaghot">hot</i></a></li>
                                                <li><a href="service-provider.html">Technical Writing</a></li>
                                                <li><a href="service-provider.html">Translation<i class="sl-menutag sl-menutagnew">New</i></a></li>
                                            </ul>
                                            <ul>
                                                <li class="mega-menu-title"><h3>Lifestyle</h3></li>
                                                <li><a href="service-provider.html">Online Lessons</a></li>
                                                <li><a href="service-provider.html">Arts &amp; Crafts</a></li>
                                                <li><a href="service-provider.html">Relationship Advice</a></li>
                                                <li><a href="service-provider.html">Health, Nutrition &amp; Fitness</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col">
                                            <ul>
                                                <li class="mega-menu-title"><h3>Video &amp; Animation</h3></li>
                                                <li><a href="service-provider.html">Animated Explainers</a></li>
                                                <li><a href="service-provider.html">Video Editing<i class="sl-menutag sl-menutagnew">NEW</i></a></li>
                                                <li><a href="service-provider.html">Short Video Ads</a></li>
                                                <li><a href="service-provider.html">Animated GIFs</a></li>
                                                <li><a href="service-provider.html">Logo Animation</a></li>
                                                <li><a href="service-provider.html">Intros &amp; Outros</a></li>
                                                <li><a href="service-provider.html">Live Action Explainers</a></li>
                                                <li><a href="service-provider.html">Character Animation</a></li>
                                                <li><a href="service-provider.html">3D Product Animation</a></li>
                                                <li><a href="service-provider.html">Lyric & Music Videos</a></li>
                                                <li><a href="service-provider.html">Spokespersons Videos</a></li>
                                            </ul>
                                            <ul>
                                                <li class="mega-menu-title"><h3>Marketplace Listing</h3></li>
                                                <li><a href="service-provider.html">Product Descriptions<i class="sl-menutag sl-menutaghot">hot</i></a></li>
                                                <li><a href="service-provider.html">Product Photography</a></li>
                                                <li><a href="service-provider.html">Product Research</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-menu-col">
                                            <ul>
                                                <li class="mega-menu-title"><h3>Programming &amp; Tech</h3></li>
                                                <li><a href="service-provider.html">WordPress</a></li>
                                                <li><a href="service-provider.html">Website Builders &amp; CMS</a></li>
                                                <li><a href="service-provider.html">Game Development</a></li>
                                                <li><a href="service-provider.html">Web Programming</a></li>
                                                <li><a href="service-provider.html">E-Commerce Development</a></li>
                                                <li><a href="service-provider.html"><i class="sl-menutag sl-menutaghot">hot</i>Mobile Apps &amp; Web</a></li>
                                                <li><a href="service-provider.html">Desktop applications</a></li>
                                                <li><a href="service-provider.html">Support &amp; IT</a></li>
                                                <li><a href="service-provider.html">Chatbots</a></li>
                                                <li><a href="service-provider.html">Data Analysis &amp; Reports</a></li>
                                                <li><a href="service-provider.html">Convert Files</a></li>
                                                <li><a href="service-provider.html">Databases</a></li>
                                            </ul>
                                            <ul>
                                                <li class="mega-menu-title"><h3>Game Creation</h3></li>
                                                <li><a href="service-provider.html">Game Development</a></li>
                                                <li><a href="service-provider.html">Producers &amp; Composers</a></li>
                                            </ul>
                                        </li>--}}
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="">About</a>
                            </li>
                            <li>

                            </li>
                        </ul>
                    </div>
                </nav>
             <div class="sl-main-header">
                           Language:
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
