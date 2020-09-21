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
                                        <th>{{translateText('Name')}}</th>
                                        <th>{{translateText('SKU')}}</th>
                                        <th>{{translateText('Promo')}}</th>
                                        <th>{{translateText('Brand')}}</th>
                                        <th>{{translateText('Categories')}}</th>
                                        <th>{{translateText('Price / Sale Price')}}</th>
                                        <th>{{translateText('Status')}}</th>
                                        <th>{{translateText('Featured')}}</th>
                                        <th>{{translateText('Actions')}}</th>
                                    </tr>
                                    </thead>

                                    @foreach($user->products as $product)
                                    <tr>
                                        <td>
                                            <div class="sl-newAppointments__userDetail">
                                                <div class="sl-newAppointments__userLogo">
                                                    <figure>
{{--                                                        <img src="{{asset('frontend/images/insight/user/img-01.jpg')}}" alt="Image Description">--}}
                                                    </figure>
                                                </div>
                                                <div class="sl-newAppointments__userText">
                                                    <h5><a href="javascript:void(0);"> {{ $product->name }} </a></h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            {{$product->sku}}
                                        </td>

                                        <td>
                                            {{$product->promo}}
                                        </td>
                                        <td>
                                            {{$product->brand_id}}
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            {{$product->price}} / {{$product->sale_price}}
                                        </td>
                                        <td>
                                            {{$product->status}}
                                        </td>
                                        <td>
                                            {{$product->featured}}
                                        </td>
{{--                                        @php         $promocodes = DB::table('promocodes')->where('code', $deal->promo)->first(); @endphp--}}
{{--                                        <td>{!! $promocodes->data !!}</td>--}}
                                        <td>
                                            <div class="sl-servicedays__title--rightarea" style="padding: 0">
                                                <div class="sl-btnaction">
                                                    <a href="{{route('merchant.products.edit', ['id' => $product->id])}}" class="sl-icon sl-editbtn"><i class="fas fa-pencil-alt"></i></a>
                                                    <a href="{{route('merchant.products.delete', ['id' => $product->id])}}" class="sl-icon sl-delbtn"><i class="fas fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <thead>
                                    <tr>
                                        <th>{{translateText('Name')}}</th>
                                        <th>{{translateText('SKU')}}</th>
                                        <th>{{translateText('Promo')}}</th>
                                        <th>{{translateText('Brand')}}</th>
                                        <th>{{translateText('Categories')}}</th>
                                        <th>{{translateText('Price / Sale Price')}}</th>
                                        <th>{{translateText('Status')}}</th>
                                        <th>{{translateText('Featured')}}</th>
                                        <th>{{translateText('Actions')}}</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    <!-- MAIN END -->
@endsection

