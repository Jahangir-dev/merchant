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
                                <form action="{{route('merchant.deals.store')}}" method="POST" class="sl-form sl-manageServices">
                                    @csrf
                                    <fieldset>
                                        <div class="sl-form__wrap">
                                            <div class="sl-aboutDescription__content">
                                                <div class="form-group">
                                                    <div class="sl-aboutDescription__title">
                                                        <h6>{{translateText('Deal Details')}}</h6>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="title" class="form-control sl-form-control" type="text" placeholder="Title*">
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-half">
                                                    <label data-provide="datepicker">
                                                        <input name="start_date" type="text" id="sl-startdate" class="form-control sl-form-control" placeholder="Start From">
                                                        <a href="javascript:void(0);" class="sl-calendarbtn sl-right-icon"><i class="ti-calendar"></i></a>
                                                    </label>
                                                </div>
                                                <div class="form-group form-group-half">
                                                    <label data-provide="datepicker">
                                                        <input name="end_date" type="text" id="sl-enddate" class="form-control sl-form-control" placeholder="Finish By">
                                                        <a href="javascript:void(0);" class="sl-calendarbtn sl-right-icon"><i class="ti-calendar"></i></a>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <div class="sl-aboutDescription__title">
                                                        <h6>Select Categories</h6>
                                                    </div>
                                                    <label class="sl-aboutDescription__inputBtn">
                                                        <select name="category[]" id="sl-languages" class="form-control sl-form-control select2-hidden-accessible" multiple="" data-select2-id="sl-languages" tabindex="-1" aria-hidden="true">
                                                            <option data-select2-id="13">Chinese</option>
                                                            <option data-select2-id="14">English</option>
                                                            <option data-select2-id="15">Urdu</option>
                                                            <option data-select2-id="16">Japanese</option>
                                                        </select>
                                                        <span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="1" style="width: 663px;">
                                                            <span class="selection">
                                                                <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
                                                                    <ul class="select2-selection__rendered">
                                                                        <span class="select2-selection__clear" title="Remove all items" data-select2-id="27">
                                                                            ×
                                                                        </span>
                                                                        <li class="select2-selection__choice" title="English" data-select2-id="24">
                                                                            <span class="select2-selection__choice__remove" role="presentation">×</span>English</li>
                                                                        <li class="select2-selection__choice" title="Urdu" data-select2-id="25">
                                                                            <span class="select2-selection__choice__remove" role="presentation">×</span>Urdu</li>
                                                                        <li class="select2-selection__choice" title="Japanese" data-select2-id="26">
                                                                            <span class="select2-selection__choice__remove" role="presentation">×</span>Japanese</li>
                                                                        <li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;">
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                                            </span>
                                                            <span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        <a href="javascript:void(0);" class="btn sl-btn">Add Now</a>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <div class="sl-aboutDescription__title">
                                                        <h6>{{translateText('Details')}}</h6>
                                                    </div>
                                                    <textarea name="description" id="sl-tinymceeditor1" class="sl-tinymceeditor" placeholder="Description" style="visibility: hidden;"></textarea>
                                                </div>

                                                <div class="form-group form-group-half">
                                                    <div class="sl-aboutDescription__title">
                                                        <h6>{{translateText('Amount')}}</h6>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="amount" type="number" class="form-control sl-form-control" placeholder="{{translateText('Amount')}}">
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-half">
                                                    <div class="sl-aboutDescription__title">
                                                        <h6>{{translateText('Reward')}}</h6>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="reward" type="number" class="form-control sl-form-control" placeholder="{{translateText('Reward')}}">
                                                    </div>
                                                </div>
                                                <div class="form-group form-group-half">
                                                    <div class="sl-aboutDescription__title">
                                                        <h6>{{translateText('Quantity')}}</h6>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="quantity" type="number" class="form-control sl-form-control" placeholder="{{translateText('Quantity')}}">
                                                    </div>
                                                </div>


                                                <div class="form-group form-group-half">
                                                    <div class="sl-aboutDescription__title">
                                                        <h6>{{translateText('Status')}}</h6>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>
                                                            <select name="status" class="form-control sl-form-control">
                                                                <option value="{{true}}" selected="">{{translateText('Active')}}</option>
                                                                <option value="{{false}}">{{translateText('Disable')}}</option>
                                                            </select>
                                                        </label>
                                                    </div>
                                                </div>


                                                <div class="form-group sl-btnarea">
                                                    <button type="submit" class="btn sl-btn">{{translateText('Add Now')}}</button>
{{--                                                    <span>{{translateText('Click “Publish Now” to launch article')}}</span>--}}
{{--                                                    <a href="javascript:void(0);" class="btn sl-btn sl-btn-active">Preview Page</a>--}}
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- MAIN END -->
@endsection

