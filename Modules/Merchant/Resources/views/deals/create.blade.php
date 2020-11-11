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
                                                        <input name="start_date" type="date-time" id="sl-startdate" class="form-control sl-form-control" placeholder="Start From">
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
                                                        <h6>Select Products</h6>
                                                    </div>
                                                    <label class="sl-aboutDescription__inputBtn">
                                                        <select name="products[]" id="sl-products" class="form-control sl-form-control" multiple="multiple" required>
                                                            @foreach($products as $product)
                                                                <option value="{{$product->id}}">{{ $product->name }}</option>
                                                            @endforeach
                                                        </select>
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
                                                        <h6>{{translateText('Minimum Products')}}</h6>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="min_product" type="number" class="form-control sl-form-control" placeholder="{{translateText('Amount')}}">
                                                    </div>
                                                </div>

                                                <div class="form-group form-group-half">
                                                    <div class="sl-aboutDescription__title">
                                                        <h6>{{translateText('Maximum Products')}}</h6>
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="max_product" type="number" class="form-control sl-form-control" placeholder="{{translateText('Amount')}}">
                                                    </div>
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

