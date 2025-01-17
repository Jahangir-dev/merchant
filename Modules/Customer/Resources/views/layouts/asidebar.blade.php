<div class="col-lg-4 col-xl-3">
    <aside id="sl-asidebar" class="sl-asidebar">
        <div class="sl-asideholder sl-dashboardAsideholder">
            <a href="javascript:void(0);" id="sl-closeasidebar" class="sl-closeasidebar">
                <i class="lnr lnr-layers"></i>
            </a>
            <div class="sl-asidescrollbar">
                <div id="sl-sidebarwrapper" class="sl-sidebarwrapper">
                    <div class="sl-usersinfo">
                        <div class="single-chart">
                            <svg viewBox="0 0 36 36" class="circular-chart orange">
                                <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                                <path class="circle"
                                      stroke-dasharray="90, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"/>
                            </svg>
                           
                            <figure class="sl-userprofileimg">
                                <img src="{{asset('frontend/images/insight/profile.jpg')}}" alt="img description">
                            </figure>
                        </div>
                        <div class="sl-title">
                           
                            <h3><a href="javascript:void(0);"> {{translateText(Auth::user()->first_name)}} {{translateText(Auth::user()->last_name)}} </a></h3>
                            
                        </div>
                    </div>
                    <nav id="sl-navdashboard" class="sl-navdashboard">
                        <ul>
                            <li class="">
                                <a href="">
                                    <i class="ti-dashboard"></i><span>Dashboard</span>
                                </a>
                            </li>
                            <li class="{{ (\Request::route()->getName() == 'customer.profile') ? 'sl-active' : '' }}">
                                <a href="{{route('customer.profile')}}">
                                    <i class="ti-user"></i><span>Profile Settings</span>
                                </a>
                            </li>
                            <li class="{{ Route::currentRouteName() == 'wish-list-items' ? 'sl-active' : ''}}">
                                <a href="{{ route('wish-list-items') }}">
                                    <i class="ti-heart"></i><span>My Favorites</span>
                                </a>
                            </li>

                            <li class="{{ Route::currentRouteName() == 'customer.checkout.index' ? 'sl-active' : ''}}">
                                <a href="{{route('customer.checkout.index')}}">
                                    <i class="ti-shopping-cart"></i><span>{{ translateText('Checkout') }}</span>
                                </a>
                            </li>

                            <li class="{{ Route::currentRouteName() == 'customer.account.orders' ? 'sl-active' : ''}}">
                                <a href="{{route('customer.account.orders')}}">
                                    <i class="ti-bookmark-alt"></i><span>{{ translateText('Orders') }}</span>
                                </a>
                            </li>
                             <li class="{{ Route::currentRouteName() == 'customer.account.coupons' ? 'sl-active' : ''}}">
                                <a href="{{route('customer.account.coupons')}}">
                                    <i class="ti-bookmark-alt"></i><span>{{ translateText('Coupons') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="ti-key"></i><span>{{ translateText('Logout') }}</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </li>
                        </ul>
                    </nav>
                </div>
                <!--<div class="sl-sidebar-ad">
                    <a href="javascript:void(0);"><img src="{{asset('frontend/images/service-provider-single/ad.jpg')}}" alt="Image Description"></a>
                    <p>Advertisement<span>255px X 355px</span></p>
                </div>-->
            </div>
        </div>
    </aside>
</div>
