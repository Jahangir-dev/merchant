@extends('merchant::layouts.master')
@section('content')
    <!-- MAIN START -->
    <main class="sl-main">
        <div class="sl-main-section">
            <div class="container">
                <div class="row">
                @include('merchant::layouts.asidebar')
                <!-- MAIN START -->
                    <div class="col-lg-8 col-xl-9">
                        <div class="sl-tab sl-profileSetting">
                            <nav class="nav">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-companyDetail-tab" data-toggle="tab" href="#nav-companyDetail" role="tab" aria-controls="nav-companyDetail" aria-selected="true">Basic/Company Detail</a>
                                    {{--<a class="nav-item nav-link" id="nav-aboutDescription-tab" data-toggle="tab" href="#nav-aboutDescription" role="tab" aria-controls="nav-aboutDescription" aria-selected="true">About Description</a>
                                    <a class="nav-item nav-link" id="nav-experience-tab" data-toggle="tab" href="#nav-experience" role="tab" aria-controls="nav-experience" aria-selected="true">Experience & Awards</a>--}}
                                    <a class="nav-item nav-link" id="nav-gallery-tab" data-toggle="tab" href="#nav-gallery" role="tab" aria-controls="nav-gallery" aria-selected="true">Audio Video Gallery</a>
                                </div>
                            </nav>
                            <div id="nav-tabContent" class="tab-content">
                                <div class="tab-pane fade show active" id="nav-companyDetail" role="tabpanel" aria-labelledby="nav-companyDetail-tab">
                                    <div class="sl-dashboardbox__content">
                                        <form method="post" action="{{ route('merchant.products.update', ['id' => $product->id]) }}" class="sl-form sl-manageServices">
                                            @csrf
                                            <fieldset>
                                                <div class="sl-form__wrap">
                                                    <div class="form-group form-group">
                                                        <input name="name" value="{{$product->name}}" class="form-control sl-form-control" type="text" placeholder="Name*" required>
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input name="sku" value="{{$product->sku}}" class="form-control sl-form-control" type="text" placeholder="SKU*" required>
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input name="price" value="{{$product->price}}" class="form-control sl-form-control" type="text" placeholder="Price" required>
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input name="special_price" value="{{$product->sale_price}}" class="form-control sl-form-control" type="number" placeholder="Special Price*" required>
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input name="quantity" value="{{$product->quantity}}" class="form-control sl-form-control" type="number" placeholder="Quantity*" required>
                                                    </div>
                                                    @php
                                                        $cate = Array();
                                                            foreach($product->categories as $category) {
                                                            array_push($cate, $category->id);
                                                        }
                                                    @endphp
                                                    <div class="form-group">
                                                        <div class="sl-aboutDescription__title">
                                                            <h6>Select Categories</h6>
                                                        </div>
                                                        <label class="sl-aboutDescription__inputBtn">
                                                            <select name="category[]" id="sl-languages" class="form-control sl-form-control" multiple="multiple" required>
                                                                @foreach($categories as $category)
                                                                    <option value="{{$category->id}}" @if(in_array($category->id, $cate)) selected @endif>{{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </label>
                                                    </div>


                                                    <div class="form-group form-group-half">
                                                        <select name="brand_id" id="brand" class="form-control sl-form-control" required>
                                                            @foreach($brands as $brand)
                                                                <option value="{{$brand->id}}" @if($product->brand_id == $brand->id) selected @endif>{{ $brand->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>


                                                    <div class="form-group form-group-half">
                                                        <input name="quantity" value="{{$product->quantity}}" class="form-control sl-form-control" type="number" placeholder="Mobile" required>
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input name="weight" value="{{$product->weight}}" class="form-control sl-form-control" type="text" placeholder="Weight" required>
                                                    </div>
                                                    <div class="form-group form-group-half">
                                                        <input id="autocomplete" value="{{$product->address}}" name="address" class="form-control sl-form-control" type="text" placeholder="Address" required>
                                                        <input id="latitude" value="{{$product->latitude}}" name="latitude" class="form-control sl-form-control" type="hidden" placeholder="Address" required>
                                                        <input id="longitude" value="{{$product->longitude}}" name="longitude" class="form-control sl-form-control" type="hidden" placeholder="Address" required>
                                                    </div>
                                                    <div class="form-group form-group">
                                                        <textarea name="description" class="form-control sl-form-control" type="text" placeholder="Description" required> {!! $product->description !!} </textarea>
                                                    </div>

                                                    <div class="form-group sl-btnarea">
                                                        <button type="submit" class="btn sl-btn">Save Changes</button>
                                                        <span>Click “Save Changes” to update latest changes made</span>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                {{--                 <div class="tab-pane fade" id="nav-aboutDescription" role="tabpanel" aria-labelledby="nav-aboutDescription-tab">
                                                     <div class="sl-dashboardbox__content sl-aboutDescription">
                                                         <form class="sl-form sl-manageServices">
                                                             <fieldset>
                                                                 <div class="sl-form__wrap">
                                                                     <div class="sl-aboutDescription__content">
                                                                         <div class="form-group">
                                                                             <div class="sl-aboutDescription__title">
                                                                                 <h6>About You Or Your Company</h6>
                                                                             </div>
                                                                             <textarea id="sl-tinymceeditor1" class="sl-tinymceeditor" placeholder="Description"></textarea>
                                                                         </div>
                                                                     </div>
                                                                     <div class="sl-aboutDescription__content">
                                                                         <div class="form-group">
                                                                             <div class="sl-aboutDescription__title">
                                                                                 <h6>Add Your Languages</h6>
                                                                             </div>
                                                                             <label class="sl-aboutDescription__inputBtn">
                                                                                 <select id="sl-languages" class="form-control sl-form-control" multiple="multiple">
                                                                                     <option>Chinese</option>
                                                                                     <option>English</option>
                                                                                     <option>Urdu</option>
                                                                                     <option>Japanese</option>
                                                                                 </select>
                                                                                 <a href="javascript:void(0);" class="btn sl-btn">Add Now</a>
                                                                             </label>
                                                                             <table class="table sl-languageWeKnow__content sl-aboutDescription__table">
                                                                                 <tbody>
                                                                                 <tr>
                                                                                     <td>English</td>
                                                                                     <td>French</td>
                                                                                     <td>Chinese</td>
                                                                                     <td>Arabic</td>
                                                                                 </tr>
                                                                                 <tr>
                                                                                     <td>Spanish</td>
                                                                                     <td>Russian</td>
                                                                                     <td>Portuguese</td>
                                                                                     <td>Urdu</td>
                                                                                 </tr>
                                                                                 </tbody>
                                                                             </table>
                                                                         </div>
                                                                     </div>
                                                                     <div class="sl-aboutDescription__content">
                                                                         <div class="form-group">
                                                                             <div class="sl-aboutDescription__title">
                                                                                 <h6>Ameneties & Features</h6>
                                                                             </div>
                                                                             <label class="sl-aboutDescription__inputBtn">
                                                                                 <select id="sl-ameneties" class="form-control sl-form-control" multiple="multiple">
                                                                                     <option>Chinese</option>
                                                                                     <option>English</option>
                                                                                     <option>Urdu</option>
                                                                                     <option>Japanese</option>
                                                                                 </select>
                                                                                 <a href="javascript:void(0);" class="btn sl-btn">Add Now</a>
                                                                             </label>
                                                                             <table class="table sl-languageWeKnow__content sl-aboutDescription__table">
                                                                                 <tbody>
                                                                                 <tr>
                                                                                     <td>Accept Credit Cards</td>
                                                                                     <td>Beauty Shop</td>
                                                                                 </tr>
                                                                                 <tr>
                                                                                     <td>Bike Parking</td>
                                                                                     <td>Comfortable Chairs</td>
                                                                                 </tr>
                                                                                 </tbody>
                                                                             </table>
                                                                         </div>
                                                                     </div>
                                                                     <div class="sl-aboutDescription__content">
                                                                         <div class="form-group sl-btnarea">
                                                                             <button type="submit" class="btn sl-btn">Save Changes</button>
                                                                             <span>Click “Save Changes” to update latest changes made</span>
                                                                             <a href="javascript:void(0);" class="btn sl-btn sl-btn-active">Preview Page</a>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </fieldset>
                                                         </form>
                                                     </div>
                                                 </div>
                                                 <div class="tab-pane fade" id="nav-experience" role="tabpanel" aria-labelledby="nav-experience-tab">
                                                     <div class="sl-dashboardbox__content sl-aboutDescription sl-experienceTab">
                                                         <form class="sl-form sl-manageServices">
                                                             <fieldset>
                                                                 <div class="sl-form__wrap">
                                                                     <div class="sl-aboutDescription__content">
                                                                         <div class="form-group">
                                                                             <div class="sl-aboutDescription__title">
                                                                                 <h6>About You Or Your Company</h6>
                                                                             </div>
                                                                             <div class="sl-manageServices__upload">
                                                                                 <div class="sl-manageServices__uploadarea">
                                                                                     <span><i class="fas fa-cloud-upload-alt"></i></span>
                                                                                     <h5>Company Logo</h5>
                                                                                     <p>Drop image here or click <label for="file3"><span><input id="file3" type="file" name="file"> upload</span></label> <i class="far fa-question-circle toltip-content tipso_style" data-tipso="name"></i></p>
                                                                                     <svg>
                                                                                         <rect width="100%" height="204px"></rect>
                                                                                     </svg>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                         <div class="form-group form-group-half sl-input-btn">
                                                                             <label class="sl-input-group">
                                                                                 <input class="form-control sl-form-control sl-prepend" type="text" placeholder="Company Title*">
                                                                                 <a class="sl-append" href="javascript:void(0);"><i class="ti-link"></i></a>
                                                                             </label>
                                                                         </div>
                                                                         <div class="form-group form-group-half">
                                                                             <input class="form-control sl-form-control" type="text" placeholder="Job Designation">
                                                                         </div>
                                                                         <div class="form-group form-group-half">
                                                                             <label data-provide="datepicker">
                                                                                 <input type="text" id="sl-startdate" class="form-control sl-form-control" placeholder="Start Date">
                                                                                 <a href="javascript:void(0);" class="sl-calendarbtn sl-right-icon"><i class="ti-calendar"></i></a>
                                                                             </label>
                                                                         </div>
                                                                         <div class="form-group form-group-half">
                                                                             <label data-provide="datepicker">
                                                                                 <input type="text" id="sl-enddate" class="form-control sl-form-control" placeholder="End Date (Leave empty if you’re working)">
                                                                                 <a href="javascript:void(0);" class="sl-calendarbtn sl-right-icon"><i class="ti-calendar"></i></a>
                                                                             </label>
                                                                         </div>
                                                                         <div class="form-group">
                                                                             <textarea id="sl-tinymceedito2" class="sl-tinymceeditor" placeholder="Description"></textarea>
                                                                         </div>
                                                                         <div class="form-group sl-btnarea">
                                                                             <button type="submit" class="btn sl-btn">Add & Save Changes</button>
                                                                             <span>Click “Add & Save Changes” to update latest changes made</span>
                                                                         </div>
                                                                         <div class="form-group sl-experienceTab__accordian">
                                                                             <div id="accordion1" class="accordion">
                                                                                 <div  class="sl-servicedays sl-offeredServices">
                                                                                     <div class="sl-servicedays__title" data-toggle="collapse" role="list" data-target="#accordion1collapse1" aria-expanded="true">
                                                                                         <div class="sl-offeredServices__heading">
                                                                                             <h6>Business Planner Manager</h6>
                                                                                         </div>
                                                                                         <div class="sl-servicedays__title--rightarea">
                                                                                             <div class="sl-btnaction">
                                                                                                 <a href="javascript:void(0);" class="sl-icon sl-editbtn"><i class="fas fa-pencil-alt"></i></a>
                                                                                                 <a href="javascript:void(0);" class="sl-icon sl-delbtn"><i class="fas fa-trash"></i></a>
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                     <div id="accordion1collapse1" class="collapse show" data-parent="#accordion1">
                                                                                         <div class="sl-posts">
                                                                                             <div class="sl-post">
                                                                                                 <div class="sl-post__content">
                                                                                                     <img src="images/service-provider-single/experience/img-01.jpg" alt="Image Description">
                                                                                                     <div class="sl-post__title">
                                                                                                         <a href="javascript:void(0);">Bright Future Group &amp; Company</a>
                                                                                                         <h5>Business Planner Manager</h5>
                                                                                                         <span>May 2011 - Jun 2012</span>
                                                                                                     </div>
                                                                                                 </div>
                                                                                                 <div class="sl-post__description">
                                                                                                     <p>Dolor sit amet consectetur adipisicing elit, sed do eiusmod tempoer incididunt ut labore dolore magna aliquau ut enim ad minim veniam, quis nrud exercitation ullamco laboris.</p>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                                 <div  class="sl-servicedays sl-offeredServices">
                                                                                     <div class="sl-servicedays__title" data-toggle="collapse" role="list" data-target="#accordion1collapse2" aria-expanded="false">
                                                                                         <div class="sl-offeredServices__heading">
                                                                                             <h6>Sr. Business Planner</h6>
                                                                                         </div>
                                                                                         <div class="sl-servicedays__title--rightarea">
                                                                                             <div class="sl-btnaction">
                                                                                                 <a href="javascript:void(0);" class="sl-icon sl-editbtn"><i class="fas fa-pencil-alt"></i></a>
                                                                                                 <a href="javascript:void(0);" class="sl-icon sl-delbtn"><i class="fas fa-trash"></i></a>
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                     <div id="accordion1collapse2" class="collapse" data-parent="#accordion1">
                                                                                         <div class="sl-posts">
                                                                                             <div class="sl-post">
                                                                                                 <div class="sl-post__content">
                                                                                                     <img src="images/service-provider-single/experience/img-02.jpg" alt="Image Description">
                                                                                                     <div class="sl-post__title">
                                                                                                         <a href="javascript:void(0);">Delta Communication &amp; Development</a>
                                                                                                         <h5>Sr. Business Planner</h5>
                                                                                                         <span>Jul 2012 - Aug 2013</span>
                                                                                                     </div>
                                                                                                 </div>
                                                                                                 <div class="sl-post__description">
                                                                                                     <p>Dolor sit amet consectetur adipisicing elit, sed do eiusmod tempoer incididunt ut labore dolore magna aliquau ut enim ad minim veniam, quis nrud exercitation ullamco laboris.</p>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                                 <div  class="sl-servicedays sl-offeredServices">
                                                                                     <div class="sl-servicedays__title" data-toggle="collapse" role="list" data-target="#accordion1collapse3" aria-expanded="false">
                                                                                         <div class="sl-offeredServices__heading">
                                                                                             <h6>business Coordinator</h6>
                                                                                         </div>
                                                                                         <div class="sl-servicedays__title--rightarea">
                                                                                             <div class="sl-btnaction">
                                                                                                 <a href="javascript:void(0);" class="sl-icon sl-editbtn"><i class="fas fa-pencil-alt"></i></a>
                                                                                                 <a href="javascript:void(0);" class="sl-icon sl-delbtn"><i class="fas fa-trash"></i></a>
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                     <div id="accordion1collapse3" class="collapse" data-parent="#accordion1">
                                                                                         <div class="sl-posts">
                                                                                             <div class="sl-post">
                                                                                                 <div class="sl-post__content">
                                                                                                     <img src="images/service-provider-single/experience/img-03.jpg" alt="Image Description">
                                                                                                     <div class="sl-post__title">
                                                                                                         <a href="javascript:void(0);">Human Power &amp; Company</a>
                                                                                                         <h5>Business Coordinator</h5>
                                                                                                         <span>Nov 2014 - Aug 2015</span>
                                                                                                     </div>
                                                                                                 </div>
                                                                                                 <div class="sl-post__description">
                                                                                                     <p>Dolor sit amet consectetur adipisicing elit, sed do eiusmod tempoer incididunt ut labore dolore magna aliquau ut enim ad minim veniam, quis nrud exercitation ullamco laboris.</p>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                     <div class="sl-aboutDescription__content">
                                                                         <div class="form-group">
                                                                             <div class="sl-aboutDescription__title">
                                                                                 <h6>About Your Certificates & Awards</h6>
                                                                             </div>
                                                                             <div class="sl-manageServices__upload">
                                                                                 <div class="sl-manageServices__uploadarea">
                                                                                     <span><i class="fas fa-cloud-upload-alt"></i></span>
                                                                                     <h5>Add Photo</h5>
                                                                                     <p>Drop image here or click <label for="file4"><span><input id="file4" type="file" name="file"> upload</span></label> <i class="far fa-question-circle toltip-content tipso_style" data-tipso="name"></i></p>
                                                                                     <svg>
                                                                                         <rect width="100%" height="204px"></rect>
                                                                                     </svg>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                         <div class="form-group form-group-half">
                                                                             <input class="form-control sl-form-control" type="text" placeholder="Add Title Here">
                                                                         </div>
                                                                         <div class="form-group form-group-half">
                                                                             <label data-provide="datepicker">
                                                                                 <input type="text" id="sl-date" class="form-control sl-form-control" placeholder="Award Date">
                                                                                 <a href="javascript:void(0);" class="sl-calendarbtn sl-right-icon"><i class="ti-calendar"></i></a>
                                                                             </label>
                                                                         </div>
                                                                         <div class="form-group sl-btnarea">
                                                                             <button type="submit" class="btn sl-btn">Add & Save Changes</button>
                                                                             <span>Click “Add & Save Changes” to update latest changes made</span>
                                                                         </div>
                                                                         <div class="form-group sl-experienceTab__accordian">
                                                                             <div id="accordion2" class="accordion">
                                                                                 <div  class="sl-servicedays sl-offeredServices">
                                                                                     <div class="sl-servicedays__title" data-toggle="collapse" role="list" data-target="#accordion2collapse1" aria-expanded="true">
                                                                                         <div class="sl-offeredServices__heading">
                                                                                             <h6>Best Service Provider</h6>
                                                                                             <span>December 31, 1969</span>
                                                                                         </div>
                                                                                         <div class="sl-servicedays__title--rightarea">
                                                                                             <div class="sl-btnaction">
                                                                                                 <a href="javascript:void(0);" class="sl-icon sl-editbtn"><i class="fas fa-pencil-alt"></i></a>
                                                                                                 <a href="javascript:void(0);" class="sl-icon sl-delbtn"><i class="fas fa-trash"></i></a>
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                     <div id="accordion2collapse1" class="collapse show" data-parent="#accordion2">
                                                                                         <div class="sl-posts">
                                                                                             <div class="sl-post">
                                                                                                 <div class="sl-post__content">
                                                                                                     <img src="images/service-provider-single/experience/img-01.jpg" alt="Image Description">
                                                                                                     <div class="sl-post__title">
                                                                                                         <a href="javascript:void(0);">Bright Future Group &amp; Company</a>
                                                                                                         <h5>Business Planner Manager</h5>
                                                                                                         <span>May 2011 - Jun 2012</span>
                                                                                                     </div>
                                                                                                 </div>
                                                                                                 <div class="sl-post__description">
                                                                                                     <p>Dolor sit amet consectetur adipisicing elit, sed do eiusmod tempoer incididunt ut labore dolore magna aliquau ut enim ad minim veniam, quis nrud exercitation ullamco laboris.</p>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                                 <div  class="sl-servicedays sl-offeredServices">
                                                                                     <div class="sl-servicedays__title" data-toggle="collapse" role="list" data-target="#accordion2collapse2" aria-expanded="false">
                                                                                         <div class="sl-offeredServices__heading">
                                                                                             <h6>Character Animation</h6>
                                                                                             <span>April 14, 2001</span>
                                                                                         </div>
                                                                                         <div class="sl-servicedays__title--rightarea">
                                                                                             <div class="sl-btnaction">
                                                                                                 <a href="javascript:void(0);" class="sl-icon sl-editbtn"><i class="fas fa-pencil-alt"></i></a>
                                                                                                 <a href="javascript:void(0);" class="sl-icon sl-delbtn"><i class="fas fa-trash"></i></a>
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                     <div id="accordion2collapse2" class="collapse" data-parent="#accordion2">
                                                                                         <div class="sl-posts">
                                                                                             <div class="sl-post">
                                                                                                 <div class="sl-post__content">
                                                                                                     <img src="images/service-provider-single/experience/img-02.jpg" alt="Image Description">
                                                                                                     <div class="sl-post__title">
                                                                                                         <a href="javascript:void(0);">Delta Communication &amp; Development</a>
                                                                                                         <h5>Sr. Business Planner</h5>
                                                                                                         <span>Jul 2012 - Aug 2013</span>
                                                                                                     </div>
                                                                                                 </div>
                                                                                                 <div class="sl-post__description">
                                                                                                     <p>Dolor sit amet consectetur adipisicing elit, sed do eiusmod tempoer incididunt ut labore dolore magna aliquau ut enim ad minim veniam, quis nrud exercitation ullamco laboris.</p>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                                 <div  class="sl-servicedays sl-offeredServices">
                                                                                     <div class="sl-servicedays__title" data-toggle="collapse" role="list" data-target="#accordion2collapse3" aria-expanded="false">
                                                                                         <div class="sl-offeredServices__heading">
                                                                                             <h6>Company Video Intro </h6>
                                                                                             <span>Jun 27, 2019</span>
                                                                                         </div>
                                                                                         <div class="sl-servicedays__title--rightarea">
                                                                                             <div class="sl-btnaction">
                                                                                                 <a href="javascript:void(0);" class="sl-icon sl-editbtn"><i class="fas fa-pencil-alt"></i></a>
                                                                                                 <a href="javascript:void(0);" class="sl-icon sl-delbtn"><i class="fas fa-trash"></i></a>
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                     <div id="accordion2collapse3" class="collapse" data-parent="#accordion2">
                                                                                         <div class="sl-posts">
                                                                                             <div class="sl-post">
                                                                                                 <div class="sl-post__content">
                                                                                                     <img src="images/service-provider-single/experience/img-03.jpg" alt="Image Description">
                                                                                                     <div class="sl-post__title">
                                                                                                         <a href="javascript:void(0);">Human Power &amp; Company</a>
                                                                                                         <h5>Business Coordinator</h5>
                                                                                                         <span>Nov 2014 - Aug 2015</span>
                                                                                                     </div>
                                                                                                 </div>
                                                                                                 <div class="sl-post__description">
                                                                                                     <p>Dolor sit amet consectetur adipisicing elit, sed do eiusmod tempoer incididunt ut labore dolore magna aliquau ut enim ad minim veniam, quis nrud exercitation ullamco laboris.</p>
                                                                                                 </div>
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                         <div class="form-group sl-btnarea">
                                                                             <button type="submit" class="btn sl-btn">Save Changes</button>
                                                                             <span>Click “Save Changes” to update latest changes made</span>
                                                                             <a href="javascript:void(0);" class="btn sl-btn sl-btn-active">Preview Page</a>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </fieldset>
                                                         </form>
                                                     </div>
                                                 </div>--}}
                                <div class="tab-pane fade" id="nav-gallery" role="tabpanel" aria-labelledby="nav-gallery-tab">
                                    <div class="sl-dashboardbox__content sl-aboutDescription sl-galleryTab">
                                        <form action="{{route('merchant.product.image.update', ['id' => $product->id])}}" method="POST" class="sl-form sl-manageServices" enctype="multipart/form-data">
                                            @csrf
                                            <fieldset>
                                                <div class="sl-form__wrap">
                                                    <div class="form-group">
                                                        <div class="sl-manageServices__upload">
                                                            <div class="sl-manageServices__uploadarea">
                                                                <span><i class="fas fa-cloud-upload-alt"></i></span>
                                                                <h5>Upload Media Gallery</h5>
                                                                <p>Drop image here or click <label for="file5"><span><input id="file5" type="file" name="file"> upload</span></label> <i class="far fa-question-circle toltip-content tipso_style" data-tipso="name"></i></p>
                                                                <svg>
                                                                    <rect width="100%" height="204px"></rect>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="sl-galleryTab__gallery">
                                                            <div class="sl-row">
                                                                @foreach($product->images as $image)
                                                                    <div class="sl-col-1-of-2 sl-col-md-1-of-3 sl-col-xl-1-of-4">
                                                                        <figure class="sl-galleryTab__gallery--item">
                                                                            <img src="{{asset('storage/'.$image->full)}}" alt="Image Description">
                                                                            <a class="sl-deleteImg" href="{{route('merchant.product.delete.image', ['id' => $image->id])}}"><i class="fas fa-times"></i>Delete</a>
                                                                        </figure>
                                                                    </div>
                     <br>                                           @endforeach
    <div class="row">

                    <div class="col-sm-7">
                      <img src="#" id="profile-img-tag" width="200px"  style="display: none" />   <!--for preview purpose -->
                    </div>
      </div>
                                                                {{--<div class="sl-col-1-of-2 sl-col-md-1-of-3 sl-col-xl-1-of-4">
                                                                    <figure class="sl-galleryTab__gallery--item">
                                                                        <img src="images/profile-settings/gallery/img-01.jpg" alt="Image Description">
                                                                        <a class="sl-deleteImg" href="javascript:void(0);"><i class="fas fa-times"></i>Delete</a>
                                                                    </figure>
                                                                </div>
                                                                <div class="sl-col-1-of-2 sl-col-md-1-of-3 sl-col-xl-1-of-4">
                                                                    <figure class="sl-galleryTab__gallery--item">
                                                                        <img src="images/profile-settings/gallery/img-02.jpg" alt="Image Description">
                                                                        <a class="sl-deleteImg" href="javascript:void(0);"><i class="fas fa-times"></i>Delete</a>
                                                                    </figure>
                                                                </div>
                                                                <div class="sl-col-1-of-2 sl-col-md-1-of-3 sl-col-xl-1-of-4">
                                                                    <figure class="sl-galleryTab__gallery--item">
                                                                        <img src="images/profile-settings/gallery/img-03.jpg" alt="Image Description">
                                                                        <a class="sl-deleteImg" href="javascript:void(0);"><i class="fas fa-times"></i>Delete</a>
                                                                    </figure>
                                                                </div>
                                                                <div class="sl-col-1-of-2 sl-col-md-1-of-3 sl-col-xl-1-of-4">
                                                                    <figure class="sl-galleryTab__gallery--item">
                                                                        <img src="images/profile-settings/gallery/img-07.jpg" alt="img description">
                                                                        <a class="sl-deleteImg" href="javascript:void(0);"><i class="fas fa-times"></i>Delete</a>
                                                                    </figure>
                                                                </div>
                                                                <div class="sl-col-1-of-2 sl-col-md-1-of-3 sl-col-xl-1-of-4">
                                                                    <figure class="sl-galleryTab__gallery--item">
                                                                        <img src="images/profile-settings/gallery/img-05.jpg" alt="Image Description">
                                                                        <a class="sl-deleteImg" href="javascript:void(0);"><i class="fas fa-times"></i>Delete</a>
                                                                    </figure>
                                                                </div>
                                                                <div class="sl-col-1-of-2 sl-col-md-1-of-3 sl-col-xl-1-of-4">
                                                                    <figure class="sl-galleryTab__gallery--item">
                                                                        <img src="images/profile-settings/gallery/img-06.jpg" alt="Image Description">
                                                                        <a class="sl-deleteImg" href="javascript:void(0);"><i class="fas fa-times"></i>Delete</a>
                                                                    </figure>
                                                                </div>
                                                                <div class="sl-col-1-of-2 sl-col-md-1-of-3 sl-col-xl-1-of-4">
                                                                    <figure class="sl-galleryTab__gallery--item">
                                                                        <img src="images/profile-settings/gallery/img-07.jpg" alt="Image Description">
                                                                        <a class="sl-deleteImg" href="javascript:void(0);"><i class="fas fa-times"></i>Delete</a>
                                                                    </figure>
                                                                </div>
                                                                <div class="sl-col-1-of-2 sl-col-md-1-of-3 sl-col-xl-1-of-4">
                                                                    <figure class="sl-galleryTab__gallery--item">
                                                                        <img src="images/profile-settings/gallery/img-08.jpg" alt="Image Description">
                                                                        <a class="sl-deleteImg" href="javascript:void(0);"><i class="fas fa-times"></i>Delete</a>
                                                                    </figure>
                                                                </div>--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group sl-btnarea">
                                                        <button type="submit" class="btn sl-btn">Save Changes</button>
                                                        <span>Click “Save Changes” to update latest changes made</span>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MAIN END -->
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN END -->
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" integrity="sha512-WNLxfP/8cVYL9sj8Jnp6et0BkubLP31jhTG9vhL/F5uEZmg5wEzKoXp1kJslzPQWwPT1eyMiSxlKCgzHLOTOTQ==" crossorigin="anonymous"></script>

<script type="text/javascript">
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
                $('#profile-img-tag').show();
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
     $(document).ready(function(){
            $("#file5").change(function(){

                readURL(this);
            });
    });
</script>
