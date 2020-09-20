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
                                @foreach($product->images as $image)
                                    <div class="sl-item item">
                                        <figure>
                                            <img src="{{asset('/storage/'.$image->full)}}" alt="Image Description">
                                        </figure>
                                    </div>
                                @endforeach
                            </div>
                            <div id="sl-sync2" class="sl-product__thumbnail owl-carousel owl-theme">
                                @foreach($product->images as $image)
                                    <div class="sl-item">
                                        <figure class="">
                                            <img src="{{asset('/storage/'.$image->full)}}" alt="Image Description">
                                        </figure>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="sl-product__description">
                                <div class="sl-slider__tags">
                                    <span class="sl-bg-red-orange">25% OFF</span>
                                </div>
                                <h5>{{ translateText($product->name) }}</h5>
                                <div class="sl-product__price">
                                    <h3>{{translateText($product->price)}}</h3>
                                    <h4>{{translateText($product->sale_price)}}</h4>
                                </div>
                                <div class="sl-product__stars">
                                    <div class="sl-appointment__feature">
                                        <div class="sl-featureRating">
                                            <span class="sl-featureRating__stars"><span></span></span>
                                            <em>({{translateText('1642 Feedback')}})</em>
                                        </div>
                                        <div class="sl-appointment__location">
                                            <em>By: <a href="javascript:void(0);">Onfleek Gaming Zone</a></em>
                                        </div>
                                    </div>
                                </div>
                                <div class="sl-detail">
                                    <div class="sl-detail__view">
                                        <em><i class="ti-eye"></i>15,063 Viewed</em>
                                    </div>
                                    <div class="sl-detail__comment">
                                        <em><i class="ti-comment"></i>164 Comments</em>
                                    </div>
                                    <div class="sl-detail__report">
                                        <em><a href="javascript:void(0);"><i class="ti-alert"></i><span class="sl-alert-color">Report now</span></a></em>
                                    </div>
                                    <div class="sl-detail__report">
                                        <em><a href="javascript:void(0);"><i class="ti-share"></i>Share Profile</a></em>
                                    </div>
                                </div>
                                <div class="sl-product__color">
                                    <h6>Available Colors:</h6>
                                    <ul>
                                        <li>
                                            <input id="sl-product-color1" type="radio" name="color">
                                            <label class="sl-bg-yellow" for="sl-product-color1"></label>
                                        </li>
                                        <li>
                                            <input id="sl-product-color2" type="radio" name="color">
                                            <label class="sl-bg-pink" for="sl-product-color2"></label>
                                        </li>
                                        <li>
                                            <input id="sl-product-color3" type="radio" name="color">
                                            <label class="sl-bg-darkOrange" for="sl-product-color3"></label>
                                        </li>
                                        <li>
                                            <input id="sl-product-color4" type="radio" name="color">
                                            <label class="sl-bg-green" for="sl-product-color4"></label>
                                        </li>
                                        <li>
                                            <input id="sl-product-color5" type="radio" name="color">
                                            <label class="sl-bg-orange" for="sl-product-color5"></label>
                                        </li>
                                        <li>
                                            <input id="sl-product-color6" type="radio" name="color">
                                            <label class="sl-bg-red" for="sl-product-color6"></label>
                                        </li>
                                        <li>
                                            <input id="sl-product-color7" type="radio" name="color">
                                            <label class="sl-bg-darkGreen" for="sl-product-color7"></label>
                                        </li>
                                        <li>
                                            <input id="sl-product-color8" type="radio" name="color">
                                            <label class="sl-bg-blue" for="sl-product-color8"></label>
                                        </li>
                                        <li>
                                            <input id="sl-product-color9" type="radio" name="color">
                                            <label class="sl-bg-gray" for="sl-product-color9"></label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="sl-product__stock">
                                    <h6>Quantity: <span class="sl-green">In Stock</span></h6>
                                    <div class="sl-product__stock--content">
                                        <form class="sl-vlaue-btn">
                                            <a href="javascript:void(0);" class="sl-input-decrement">-</a>
                                            <input class="sl-input-number" type="number" value="01" min="0" max="1000">
                                            <a href="javascript:void(0);" class="sl-input-increment">+</a>
                                        </form>
                                        <a href="javascript:void(0);" class="btn sl-btn sl-cart-btn">Add To Cart</a>
                                        <a href="javascript:void(0);" class="btn sl-btn sl-btn-active">Buy Now</a>
                                    </div>
                                </div>
                                <div class="sl-product__safty">
                                    <img src="{{asset('frontend/images/product-single/img-01.png')}}" alt="Image Description">
                                    <div class="sl-product__safty--description">
                                        <h6>Safty Instruction:</h6>
                                        <p>Deserunt mollit anim idamsti esta <em class="sl-red">“aperspiciatis unde omnis natusta error auptatem”</em> acaentium doloremque laudantium totam rem aperiam eaque ipsa quae inventore veritatis etiame quasi explicabo <a href="javascript:void(0);">enim ipsam voluptatem quia</a> voluptas spernatur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sl-twocolumns" class="sl-twocolumns sl-inner-product">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-xl-3">
                            <aside id="sl-asidebar" class="sl-asidebar">
                                <div class="sl-asideholder">
                                    <a href="javascript:void(0);" id="sl-closeasidebar" class="sl-closeasidebar">
                                        <i class="lnr lnr-layers"></i>
                                    </a>
                                    <div class="sl-asidescrollbar">
                                        <div id="sl-sidebarprivacy" class="sl-sidebarprivacy">
                                            <div class="sl-widget-holder">
                                                <div class="sl-widget sl-widget-profile">
                                                    <figure class="sl-profileimg">
                                                        <img src="{{asset('frontend/images/blog-single/user-imgs/img-05.jpg')}}" alt="Image Description">
                                                    </figure>
                                                    <div class="sl-profile-content">
                                                        <span>June 27, 2014</span>
                                                        <h3>Gaynell Rockefeller</h3>
                                                        <ul class="sl-socialicons">
                                                            <li class="sl-facebook"><a href="javascript:void(0);"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li class="sl-twitter"><a href="javascript:void(0);"><i class="fab fa-twitter"></i></a></li>
                                                            <li class="sl-youtube"><a href="javascript:void(0);"><i class="fab fa-youtube"></i></a></li>
                                                            <li class="sl-instagram"><a href="javascript:void(0);"><i class="fab fa-instagram"></i></a></li>
                                                        </ul>
                                                        <a href="javascript:void(0);" class="btn sl-btn">View All Posts</a>
                                                    </div>
                                                </div>
                                                <div class="sl-widget">
                                                    <div class="sl-widget__title">
                                                        <h3>Search</h3>
                                                    </div>
                                                    <div class="sl-widget__content">
                                                        <div class="sl-input-group">
                                                            <input class="form-control sl-form-control sl-prepend" type="text" placeholder="Search Here">
                                                            <button class="btn sl-btn sl-btn-active sl-append"><i class="lnr lnr-magnifier"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sl-widget">
                                                    <div class="sl-widget__title">
                                                        <h3>Categories</h3>
                                                    </div>
                                                    <div class="sl-widget__content">
                                                        <ul class="sl-widget__categories">
                                                            <li>
                                                                <a href="javascript:void(0)">Smart Phones <span>12456</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)">Tablets <span>3756</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)">Wearables<span>75324</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)">Headphones<span>2142</span></a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)">Chargers<span>657</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sl-sidebar-ad">
                                                <a href="javascript:void(0);"><img src="{{asset('frontend/images/service-provider-single/ad.jpg')}}" alt="Image Description"></a>
                                                <p>Advertisement<span>255px X 355px</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <div class="col-lg-8 col-xl-9">
                            <div class="sl-tab">
                                <nav class="nav">
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-productDescription-tab" data-toggle="tab" href="#nav-productDescription" role="tab" aria-controls="nav-productDescription" aria-selected="true">Product Description</a>
                                        <a class="nav-item nav-link" id="nav-faqs-tab" data-toggle="tab" href="#nav-faqs" role="tab" aria-controls="nav-faqs" aria-selected="true">F.A.Qs</a>
                                        <a class="nav-item nav-link" id="nav-reviews-tab" data-toggle="tab" href="#nav-reviews" role="tab" aria-controls="nav-reviews" aria-selected="true">Reviews</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-productDescription" role="tabpanel" aria-labelledby="nav-productDescription-tab">
                                        <div class="sl-productDescripton">
                                            <div class="sl-productDescripton__premium">
                                                <div class="sl-productDescripton__text">
                                                    <h5>We Give Special Attention To Quality</h5>
                                                    <div class="sl-productDescripton__text--para">
                                                        <p>{{ $product->description }}</p>
                                                    </div>
                                                </div>
                                                <img src="{{asset('frontend/images/product-single/img-03.jpg')}}" alt="Image Description">
                                            </div>
                                            {{--<div class="sl-tab__text">
                                                <h5>Came With Beast Inside Beauty</h5>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utnaloek labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip extainea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                                            </div>
                                            <div class="sl-productDescripton__product">
                                                <img src="{{asset('frontend/images/product-single/img-04.jpg')}}" alt="Image Description">
                                                <div class="sl-productDescripton__product--items">
                                                    <img src="{{asset('frontend/images/product-single/img-05.jpg')}}" alt="Image Description">
                                                    <img src="{{asset('frontend/images/product-single/img-06.jpg')}}" alt="Image Description">
                                                    <img src="{{asset('frontend/images/product-single/img-07.jpg')}}" alt="Image Description">
                                                </div>
                                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sede ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam remea aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemoea enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos quivere ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, aconsectetur, adipisci velit, sed quia non numquam eius modi</p>
                                            </div>
                                            <div class="sl-tab__text">
                                                <h5>We Don’t Leave You Alone</h5>
                                                <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autetaewe irure dolor in reprehenderit in voluptate velit esse cillum dolore. Excepteur sint occaecat cupidatat non proident, sunt in teculpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error site voluptatem accusantium  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
                                            </div>
                                            <div class="sl-video">
                                                <ul class="la-blogliststyle">
                                                    <li><span><i class="fa fa-check"></i>Sed uperspiciatis unde omnis iste</span></li>
                                                    <li><span><i class="fa fa-check"></i>Natus error site voluptatem accusantium</span></li>
                                                    <li><span><i class="fa fa-check"></i>Doloremque laudantium</span></li>
                                                    <li><span><i class="fa fa-check"></i>Totam rem aperiam eaque ipsaquae</span></li>
                                                    <li><span><i class="fa fa-check"></i>Inventore veritatis et quasi architecto</span></li>
                                                    <li><span><i class="fa fa-check"></i>Beatae vitae dicsunt explicabo</span></li>
                                                    <li><span><i class="fa fa-check"></i>Nemo enim ipsam voluptatem quia</span></li>
                                                    <li><span><i class="fa fa-check"></i>Natus error site voluptatem accusantium</span></li>
                                                    <li><span><i class="fa fa-check"></i>Doloremque laudantium</span></li>
                                                    <li><span><i class="fa fa-check"></i>Totam rem aperiam eaque ipsaquae</span></li>
                                                </ul>
                                                <figure class="sl-video__banner">
                                                    <a class="sl-video__img" data-rel="prettyPhoto" href="https://youtu.be/XxxIEGzhIG8">
                                                        <img src="{{asset('frontend/images/product-single/img-video.jpg')}}" alt="img description">
                                                    </a>
                                                </figure>
                                                <div class="w-100">
                                                    <p>Weuia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eostateums asdeyyqui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sitam amet, sasctetur, adipisci velit, sed quia non numquam eius modi</p>
                                                </div>
                                            </div>--}}
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-faqs" role="tabpanel" aria-labelledby="nav-faqs-tab">
                                        <div class="sl-faqs">
                                            <div class="sl-tab__text">
                                                <h4>Frequently Asked Questions</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempoer incididunt utenalo labore et dolore magna aliqua. Ut enim ad minim veniam, quis nrud exercitation ullamco laboris nisi ut aliquip acommodo consequat. duis auete irure dolor in reprehenderit in voluptate velit.</p>
                                            </div>
                                            <div class="sl-faqs__content">
                                                <div class="accordion" id="sl-accordian">
                                                    <div class="sl-faqs__question">
                                                        <h6>
                                                            <a data-toggle="collapse" role="button" href="#collapse1" aria-expanded="true">
                                                                <span class="sl-red-orange">Q.</span>How to activate Windows lock? and it says 3 modes but I can only access breathing mode and that's it?
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse1" class="collapse show" data-parent="#sl-accordian">
                                                        <div class="sl-faqs__answer">
                                                            <p>Weuia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eostateums asdeyyqui ratione voluptatem sequi nesciunt. Neque porro quisquam est</p>
                                                        </div>
                                                    </div>
                                                    <div class="sl-faqs__question">
                                                        <h6>
                                                            <a data-toggle="collapse" role="button" href="#collapse2" aria-expanded="true">
                                                                <span class="sl-red-orange">Q.</span>Can't you do like custom colors macros on a software?
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse2" class="collapse" data-parent="#sl-accordian">
                                                        <div class="sl-faqs__answer">
                                                            <p>Weuia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eostateums asdeyyqui ratione voluptatem sequi nesciunt. Neque porro quisquam est</p>
                                                        </div>
                                                    </div>
                                                    <div class="sl-faqs__question">
                                                        <h6>
                                                            <a data-toggle="collapse" role="button" href="#collapse3" aria-expanded="true">
                                                                <span class="sl-red-orange">Q.</span>Is it Mechanical Keyboard. And when ir comes back in stock?
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse3" class="collapse" data-parent="#sl-accordian">
                                                        <div class="sl-faqs__answer">
                                                            <p>Weuia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eostateums asdeyyqui ratione voluptatem sequi nesciunt. Neque porro quisquam est</p>
                                                        </div>
                                                    </div>
                                                    <div class="sl-faqs__question">
                                                        <h6>
                                                            <a data-toggle="collapse" role="button" href="#collapse4" aria-expanded="true">
                                                                <span class="sl-red-orange">Q.</span>Is there a software to change the rgb and macros?
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse4" class="collapse" data-parent="#sl-accordian">
                                                        <div class="sl-faqs__answer">
                                                            <p>Weuia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eostateums asdeyyqui ratione voluptatem sequi nesciunt. Neque porro quisquam est</p>
                                                        </div>
                                                    </div>
                                                    <div class="sl-faqs__question">
                                                        <h6>
                                                            <a data-toggle="collapse" role="button" href="#collapse5" aria-expanded="true">
                                                                <span class="sl-red-orange">Q.</span>I ordered it but didnt get sent a confirmation message or email?
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse5" class="collapse" data-parent="#sl-accordian">
                                                        <div class="sl-faqs__answer">
                                                            <p>Weuia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eostateums asdeyyqui ratione voluptatem sequi nesciunt. Neque porro quisquam est</p>
                                                        </div>
                                                    </div>
                                                    <div class="sl-faqs__question">
                                                        <h6>
                                                            <a data-toggle="collapse" role="button" href="#collapse6" aria-expanded="true">
                                                                <span class="sl-red-orange">Q.</span>Is it Mechanical Keyboard. And when ir comes back in stock?
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse6" class="collapse" data-parent="#sl-accordian">
                                                        <div class="sl-faqs__answer">
                                                            <p>Weuia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eostateums asdeyyqui ratione voluptatem sequi nesciunt. Neque porro quisquam est</p>
                                                        </div>
                                                    </div>
                                                    <div class="sl-faqs__question">
                                                        <h6>
                                                            <a data-toggle="collapse" role="button" href="#collapse7" aria-expanded="true">
                                                                <span class="sl-red-orange">Q.</span>Is there a software to change the rgb and macros?
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse7" class="collapse" data-parent="#sl-accordian">
                                                        <div class="sl-faqs__answer">
                                                            <p>Weuia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eostateums asdeyyqui ratione voluptatem sequi nesciunt. Neque porro quisquam est</p>
                                                        </div>
                                                    </div>
                                                    <div class="sl-faqs__question">
                                                        <h6>
                                                            <a data-toggle="collapse" role="button" href="#collapse8" aria-expanded="true">
                                                                <span class="sl-red-orange">Q.</span>Is it made of good quality or plastic?
                                                            </a>
                                                        </h6>
                                                    </div>
                                                    <div id="collapse8" class="collapse" data-parent="#sl-accordian">
                                                        <div class="sl-faqs__answer">
                                                            <p>Weuia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eostateums asdeyyqui ratione voluptatem sequi nesciunt. Neque porro quisquam est</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                                        <div class="sl-reviews">
                                            <div class="sl-reviews__ratingProgress">
                                                <div class="sl-reviews__userRating">
                                                    <img src="{{asset('frontend/images/product-single/Reviews/img-01.jpg')}}" alt="Image Description">
                                                    <h3>4.0 / <span>5</span></h3>
                                                    <div class="sl-featureRating">
                                                        <span class="sl-featureRating__stars"><span></span></span>
                                                    </div>
                                                    <p>(1887 Feedback)</p>
                                                </div>
                                                <div class="sl-reviews__progressbar">
                                                    <div class="sl-tab__text">
                                                        <h5>Users Rating Breakdown</h5>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed eiusmod</p>
                                                    </div>
                                                    <ul>
                                                        <li>
                                                            <div class="sl-reviews__progressbar--description">
                                                                <p>05 Stars - </p><h6>90% Reviews</h6>
                                                            </div>
                                                            <div id="progressbar1"></div>
                                                        </li>
                                                        <li>
                                                            <div class="sl-reviews__progressbar--description">
                                                                <p>04 Stars - </p><h6>70% Reviews</h6>
                                                            </div>
                                                            <div id="progressbar2"></div>
                                                        </li>
                                                        <li>
                                                            <div class="sl-reviews__progressbar--description">
                                                                <p>03 Stars - </p><h6>32% Reviews</h6>
                                                            </div>
                                                            <div id="progressbar3"></div>
                                                        </li>
                                                        <li>
                                                            <div class="sl-reviews__progressbar--description">
                                                                <p>02 Stars - </p><h6>20% Reviews</h6>
                                                            </div>
                                                            <div id="progressbar4"></div>
                                                        </li>
                                                        <li>
                                                            <div class="sl-reviews__progressbar--description">
                                                                <p>01 Stars - </p><h6>05% Reviews</h6>
                                                            </div>
                                                            <div id="progressbar5"></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="sl-customerReviews">
                                                <div class="sl-title">
                                                    <h4>Customer Reviews</h4>
                                                </div>
                                                <div class="sl-posts">
                                                    <div class="sl-post">
                                                        <div class="sl-post__content">
                                                            <div class="sl-round"><h4>AK</h4></div>
                                                            <div class="sl-post__title">
                                                                <span class="sl-featureRating__stars"><span></span></span>
                                                                <h5>Great Product Of Its Own Category</h5>
                                                                <span>10 min ago</span>
                                                            </div>
                                                        </div>
                                                        <div class="sl-post__description">
                                                            <p>Dolor sit amet consectetur adipisicing elit, sed do eiusmod tempoer incididunt ut labore dolore magna aliquau ut enim ad minim veniam, quis nrud exercitation ullamco laboris.</p>
                                                        </div>
                                                    </div>
                                                    <div class="sl-post">
                                                        <div class="sl-post__content">
                                                            <div class="sl-round"><h4>RU</h4></div>
                                                            <div class="sl-post__title">
                                                                <span class="sl-featureRating__stars"><span></span></span>
                                                                <h5>Great Quality But Loose Focus At The Wire</h5>
                                                                <span>02 hrs ago</span>
                                                            </div>
                                                        </div>
                                                        <div class="sl-post__description">
                                                            <p>Dolor sit amet consectetur adipisicing elit, sed do eiusmod tempoer incididunt ut labore dolore magna aliquau ut enim ad minim veniam, quis nrud exercitation ullamco laboris.</p>
                                                        </div>
                                                    </div>
                                                    <div class="sl-post">
                                                        <div class="sl-post__content">
                                                            <div class="sl-round"><h4>UI</h4></div>
                                                            <div class="sl-post__title">
                                                                <span class="sl-featureRating__stars"><span></span></span>
                                                                <h5>This is Old Tech But Yes Acceptable</h5>
                                                                <span>03 years ago</span>
                                                            </div>
                                                        </div>
                                                        <div class="sl-post__description">
                                                            <p>Dolor sit amet consectetur adipisicing elit, sed do eiusmod tempoer incididunt ut labore dolore magna aliquau ut enim ad minim veniam, quis nrud exercitation ullamco laboris.</p>
                                                        </div>
                                                        <figure class="sl-post__figure">
                                                            <img src="{{asset('frontend/images/product-single/Reviews/img-02.jpg')}}" alt="Image Description">
                                                            <img src="{{asset('frontend/images/product-single/Reviews/img-03.jpg')}}" alt="Image Description">
                                                            <img src="{{asset('frontend/images/product-single/Reviews/img-04.jpg')}}" alt="Image Description">
                                                        </figure>
                                                    </div>
                                                </div>
                                                <div class="sl-customerReviews__btn">
                                                    <a href="javascript:void(0);" class="btn sl-btn">Load More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="sl-sellerRecommend">
                    <h4>Seller Recommendations</h4>
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="sl-featuredProducts--post">
                                <figure>
                                    <img src="{{asset('frontend/images/index/featured-products/img-13.jpg')}}" alt="Image Description">
                                    <figcaption>
                                        <div class="sl-slider__tags">
                                            <span class="sl-bg-red-orange">25% OFF</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="far fa-heart"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="sl-featuredProducts--post__content">
                                    <div class="sl-featuredProducts--post__title">
                                        <h6>Phanteks 614LTG special edition</h6>
                                    </div>
                                    <div class="sl-featuredProducts--post__price">
                                        <h5>$212.30</h5>
                                        <h6>$220.30</h6>
                                    </div>
                                    <div class="sl-featureRating">
                                        <span class="sl-featureRating__stars"><span></span></span>
                                        <em>(1887 Feedback)</em>
                                    </div>
                                    <em>By: <a href="javascript:void(0);">Onfleek Gaming Zone</a></em>
                                    <button class="btn sl-btn">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="sl-featuredProducts--post">
                                <figure>
                                    <img src="{{asset('frontend/images/index/featured-products/img-14.jpg')}}" alt="Image Description">
                                    <figcaption>
                                        <div class="sl-slider__tags">
                                            <span class="sl-bg-red-orange">10% OFF</span>
                                        </div>
                                        <a href="javascript:void(0);" class="sl-liked"><i class="far fa-heart"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="sl-featuredProducts--post__content">
                                    <div class="sl-featuredProducts--post__title">
                                        <h6>Linkwow 3 Outlet Power Strip</h6>
                                    </div>
                                    <div class="sl-featuredProducts--post__price">
                                        <h5>$12.19</h5>
                                        <h6>$19.99</h6>
                                    </div>
                                    <div class="sl-featureRating">
                                        <span class="sl-featureRating__stars"><span></span></span>
                                        <em>(1887 Feedback)</em>
                                    </div>
                                    <em>By: <a href="javascript:void(0);">Techsol Bros.</a></em>
                                    <button class="btn sl-btn">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="sl-featuredProducts--post">
                                <figure>
                                    <img src="{{asset('frontend/images/index/featured-products/img-15.jpg')}}" alt="Image Description">
                                    <figcaption>
                                        <div class="sl-slider__tags">
                                            <span class="sl-bg-red-orange">50% OFF</span>
                                        </div>
                                        <a href="javascript:void(0);" class="sl-liked"><i class="far fa-heart"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="sl-featuredProducts--post__content">
                                    <div class="sl-featuredProducts--post__title">
                                        <h6>Nub's Adventures Jailbreak</h6>
                                    </div>
                                    <div class="sl-featuredProducts--post__price">
                                        <h5>$26.40</h5>
                                        <h6>$30.50</h6>
                                    </div>
                                    <div class="sl-featureRating">
                                        <span class="sl-featureRating__stars"><span></span></span>
                                        <em>(1887 Feedback)</em>
                                    </div>
                                    <em>By: <a href="javascript:void(0);">Catepilar Fleet</a></em>
                                    <button class="btn sl-btn">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="sl-featuredProducts--post">
                                <figure>
                                    <img src="{{asset('frontend/images/index/featured-products/img-16.jpg')}}" alt="Image Description">
                                    <figcaption>
                                        <div class="sl-slider__tags">
                                            <span class="sl-bg-red-orange">12% OFF</span>
                                        </div>
                                        <a href="javascript:void(0);"><i class="far fa-heart"></i></a>
                                    </figcaption>
                                </figure>
                                <div class="sl-featuredProducts--post__content">
                                    <div class="sl-featuredProducts--post__title">
                                        <h6>Kensington Contour 2.0 Backpack</h6>
                                    </div>
                                    <div class="sl-featuredProducts--post__price">
                                        <h5>$12.19</h5>
                                        <h6>$19.99</h6>
                                    </div>
                                    <div class="sl-featureRating">
                                        <span class="sl-featureRating__stars"><span></span></span>
                                        <em>(1887 Feedback)</em>
                                    </div>
                                    <em>By: <a href="javascript:void(0);">Bags &amp; Bags Co.</a></em>
                                    <button class="btn sl-btn">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- MAIN END -->

@endsection
