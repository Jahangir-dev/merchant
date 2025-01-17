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
                            <h3><a href="javascript:void(0);"> {{auth()->user()->first_name}} {{auth()->user()->last_name}} </a></h3>
                            
                        </div>
                    </div>
                    <nav id="sl-navdashboard" class="sl-navdashboard">
                        <ul>
                            <li class="">
                                <a href="">
                                    <i class="ti-dashboard"></i><span>Dashboard</span>
                                </a>
                            </li>
                            <li class="{{ (\Request::route()->getName() == 'merchant.profile') ? 'sl-active' : '' }}">
                                <a href="{{route('merchant.profile')}}">
                                    <i class="ti-user"></i><span>Profile Settings</span>
                                </a>
                            </li>
                           <!--  <li>
                                <a href="#">
                                    <i class="ti-heart"></i><span>My Favorites</span>
                                </a>
                            </li> -->
{{--                            <li class="{{ (\Request::route()->getName() == 'merchant.deals') ? 'sl-active' : '' }}">
                                <a href="{{route('merchant.deals')}}">
                                    <i class="ti-user"></i><span>{{translateText('Deals')}}</span>
                                </a>
                            </li>--}}
                            <li class="menu-item-has-children page_item_has_children">
                                <a href="javascript:void(0);" class="sl-notification sl-noticolor1">
                                    <i class="ti-star"></i><span> {{translateText('Manage Deals')}}</span>
                                </a>
                                <ul class="sub-menu" style="{{ ((\Request::route()->getName() == 'merchant.deals') ? 'display: block'  : (\Request::route()->getName() == 'merchant.deals.create')) ? 'display: block' : '' }}">
                                    <li><a href="{{route('merchant.deals')}}">{{translateText('Deals')}}</a></li>
                                    <li><a href="{{route('merchant.deals.create')}}">{{translateText('Create Deals')}}</a></li>
                                </ul>
                            </li>
                             <li class="menu-item-has-children page_item_has_children">
                                <a href="javascript:void(0);" class="sl-notification sl-noticolor1">
                                    <i class="ti-star"></i><span> {{translateText('Manage Copuan')}}</span>
                                </a>
                                <ul class="sub-menu" style="{{ ((\Request::route()->getName() == 'mCoupon.create') ? 'display: block'  : (\Request::route()->getName() == 'mCoupon.edit')) ? 'display: block' : '' }}">
                                    <li><a href="{{route('mCoupon.index')}}">{{translateText('Coupons')}}</a></li>
                                    <li><a href="{{url('merchant/mCoupon/create')}}">{{translateText('Create Coupons')}}</a></li>
                                    <li><a href="{{url('merchant/pCoupon/purchase')}}">{{translateText('Purchased Coupons')}}</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children page_item_has_children">
                                <a href="javascript:void(0);" class="sl-notification sl-noticolor1">
                                    <i class="ti-star"></i><span>Manage {{translateText('Products')}}</span>
                                </a>
                                <ul class="sub-menu" style="{{ ((\Request::route()->getName() == 'merchant.products') ? 'display: block'  : (\Request::route()->getName() == 'merchant.products.create')) ? 'display: block' : '' }}">
                                    <li><a href="{{route('merchant.products')}}">{{translateText('Product')}}</a></li>
                                    <li><a href="{{route('merchant.products.create')}}">{{translateText('Create Products')}}</a></li>
                                </ul>
                            </li>

                           <li class="{{ Route::currentRouteName() == 'merchant.account.orders' ? 'sl-active' : ''}}">
                                <a href="{{route('account.orders')}}">
                                    <i class="ti-bookmark-alt"></i><span>{{ translateText('Orders') }}</span>
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
                <!-- <div class="sl-sidebar-ad">
                    <a href="javascript:void(0);"><img src="{{asset('frontend/images/service-provider-single/ad.jpg')}}" alt="Image Description"></a>
                    <p>Advertisement<span>255px X 355px</span></p>
                </div> -->
            </div>
        </div>
    </aside>
</div>
