@extends('merchant::layouts.master')
@section('content')
    <!-- MAIN START -->
    <main class="sl-main">
        <div class="sl-main-section">
            <div class="container">
                <div class="row">
                    @include('merchant::layouts.asidebar')
                    <div class="col-lg-8 col-xl-9">
                        <div class="sl-dashboardbox sl-addNewArticle">
                            <div class="sl-dashboardbox__title">
                                <h2>{{translateText('Add New Deal')}}</h2>
                            </div>
                            <div class="sl-dashboardbox__content sl-aboutDescription">
                                <table id="table_id">
                                    <thead>
                                    <tr>
                                        <th>{{translateText('Data')}}</th>
                                        <th>{{translateText('Details')}}</th>
                                        <th>{{translateText('Action')}}</th>
                                    </tr>
                                    </thead>

                                    @foreach($user->deals as $deal)
                                    <tr>
                                        <td>
                                            <div class="sl-newAppointments__userDetail">
                                                <div class="sl-newAppointments__userLogo">
                                                    <figure>
{{--                                                        <img src="{{asset('frontend/images/insight/user/img-01.jpg')}}" alt="Image Description">--}}
                                                    </figure>
                                                </div>
                                                <div class="sl-newAppointments__userText">
                                                    <div class="sl-slider__tags">
{{--                                                        <span class="sl-bg-green">New</span>--}}
                                                    </div>
                                                    <h5><a href="javascript:void(0);"> {{ $deal->title }} </a></h5>
                                                    <p>{{ $deal->start_date }} - {{ $deal->end_date }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{!! $deal->title !!}</td>
                                        <td>
                                            <div class="sl-newAppointments__services">
                                                <div class="sl-newAppointments__services--description">
                                                    <h6> {{translateText('Services:')}}</h6>
                                                </div>
                                                <a href="{{route('merchant.deals.edit', ['id' => $deal->id])}}" class="btn sl-btn sl-btn-md">{{translateText('edit')}}</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <thead>
                                    <tr>
                                        <th>{{translateText('Data')}}</th>
                                        <th>{{translateText('Details')}}</th>
                                        <th>{{translateText('Action')}}</th>
                                    </tr>
                                    </thead>
                                </table>

                                {{--<div class="sl-pagination">
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
                                </div>--}}
                            </div>
                        </div>
                    </div>

                    {{--<div class="col-lg-8 col-xl-9">
                        <div class="sl-buyPackage">
                            <div class="sl-buyPackage__count sl-detailNoti sl-busy-before">
                                <div class="sl-buyPackage__count--content">
                                    <div class="sl-buyPackage__count--title">
                                        <h4>Gold Package</h4>
                                        <h6>Will Expire in:</h6>
                                    </div>
                                    <ul id="sl-packagecounter" class="sl-packagecounter sl-buyPackage__count--down"><li><div class="sl-buyPackage__heading"><h3>138</h3><h6>Days</h6></div></li><li><div class="sl-buyPackage__heading"><h3>09</h3><h6>Hours</h6></div></li><li><div class="sl-buyPackage__heading"><h3>57</h3><h6>Minutes</h6></div></li><li><div class="sl-buyPackage__heading"><h3>59</h3><h6>Seconds</h6></div></li></ul>
                                </div>
                            </div>
                            <div class="sl-buyPackage__count--btn">
                                <a href="javascript:void(0);" class="btn sl-btn">Renew Now</a>
                                <p>Click the button above to renew package</p>
                            </div>
                        </div>
                        <div class="sl-buyPackages">
                            <div class="sl-buyPackages__title">
                                <h6>Buy a Package</h6>
                            </div>
                            <div class="sl-buyPackagesCard">
                                <div class="sl-buyPackagesCard__card">
                                    <div class="sl-buyPackagesCard__card--content">
                                        <img src="{{asset('frontend/images/buy-package/card/img-01.jpg')}}" alt="Images Description">
                                        <strong><sup>$</sup>199</strong>
                                        <h5>Silver Package</h5>
                                        <p><em>include all taxes <i class="ti-info-alt toltip-content tipso_style" data-tipso="Plus Member"></i></em></p>
                                    </div>
                                    <div class="sl-buyPackagesCard__feature">
                                        <h6>Package Features:</h6>
                                        <ul>
                                            <li>
                                                <p>No. of products to post:</p>
                                                <span>05</span>
                                            </li>
                                            <li>
                                                <p>No. of featured products:</p>
                                                <span>03</span>
                                            </li>
                                            <li>
                                                <p>No. of free products:</p>
                                                <span>02</span>
                                            </li>
                                            <li>
                                                <p>Option to add photo slider:</p>
                                                <span class="sl-red-orange"><i class="fas fa-times-circle"></i></span>
                                            </li>
                                            <li>
                                                <p>Option to upload video demo:</p>
                                                <span class="sl-red-orange"><i class="fas fa-times-circle"></i></span>
                                            </li>
                                            <li>
                                                <p>Product Post photos limit:</p>
                                                <span>10</span>
                                            </li>
                                            <li>
                                                <p>Top rated tag:</p>
                                                <span class="sl-red-orange"><i class="fas fa-times-circle"></i></span>
                                            </li>
                                        </ul>
                                        <a href="javascript:void(0);" class="btn sl-btn">Buy Now</a>
                                    </div>
                                </div>
                                <div class="sl-buyPackagesCard__card sl-goldPackage">
                                    <div class="sl-buyPackagesCard__card--content">
                                        <img src="{{asset('frontend/images/buy-package/card/img-02.jpg')}}" alt="Images Description">
                                        <strong><sup>$</sup>499</strong>
                                        <h5>Gold Package</h5>
                                        <p><em>include all taxes <i class="ti-info-alt toltip-content tipso_style" data-tipso="Plus Member"></i></em></p>
                                        <div class="sl-slider__tags">
                                            <span class="sl-bg-red-orange">POPULAR</span>
                                        </div>
                                    </div>
                                    <div class="sl-buyPackagesCard__feature">
                                        <h6>Package Features:</h6>
                                        <ul>
                                            <li>
                                                <p>No. of products to post:</p>
                                                <span>15</span>
                                            </li>
                                            <li>
                                                <p>No. of featured products:</p>
                                                <span>05</span>
                                            </li>
                                            <li>
                                                <p>No. of free products:</p>
                                                <span>10</span>
                                            </li>
                                            <li>
                                                <p>Option to add photo slider:</p>
                                                <span class="sl-green2"><i class="fas fa-check-circle"></i></span>
                                            </li>
                                            <li>
                                                <p>Option to upload video demo:</p>
                                                <span class="sl-green2"><i class="fas fa-check-circle"></i></span>
                                            </li>
                                            <li>
                                                <p>Product Post photos limit:</p>
                                                <span>30</span>
                                            </li>
                                            <li>
                                                <p>Top rated tag:</p>
                                                <span class="sl-red-orange"><i class="fas fa-times-circle"></i></span>
                                            </li>
                                        </ul>
                                        <a href="javascript:void(0);" class="btn sl-btn sl-btn-active">Buy Now</a>
                                    </div>
                                </div>
                                <div class="sl-buyPackagesCard__card">
                                    <div class="sl-buyPackagesCard__card--content">
                                        <img src="{{asset('frontend/images/buy-package/card/img-03.jpg')}}" alt="Images Description">
                                        <strong><sup>$</sup>1099</strong>
                                        <h5>Platinium Package</h5>
                                        <p><em>include all taxes <i class="ti-info-alt toltip-content tipso_style" data-tipso="Plus Member"></i></em></p>
                                    </div>
                                    <div class="sl-buyPackagesCard__feature">
                                        <h6>Package Features:</h6>
                                        <ul>
                                            <li>
                                                <p>No. of products to post:</p>
                                                <span>30</span>
                                            </li>
                                            <li>
                                                <p>No. of featured products:</p>
                                                <span>20</span>
                                            </li>
                                            <li>
                                                <p>No. of free products:</p>
                                                <span>10</span>
                                            </li>
                                            <li>
                                                <p>Option to add photo slider:</p>
                                                <span class="sl-green2"><i class="fas fa-check-circle"></i></span>
                                            </li>
                                            <li>
                                                <p>Option to upload video demo:</p>
                                                <span class="sl-green2"><i class="fas fa-check-circle"></i></span>
                                            </li>
                                            <li>
                                                <p>Product Post photos limit:</p>
                                                <span>50+</span>
                                            </li>
                                            <li>
                                                <p>Top rated tag:</p>
                                                <span class="sl-green2"><i class="fas fa-check-circle"></i></span>
                                            </li>
                                        </ul>
                                        <a href="javascript:void(0);" class="btn sl-btn">Buy Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>--}}

                </div>
            </div>
        </div>
    </main>
    <!-- MAIN END -->
@endsection

