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
                                        <th>{{translateText('Code')}}</th>
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
                                        <td>
                                            {{$deal->promo}}
                                        </td>
                                        @php         $promocodes = DB::table('promocodes')->where('code', $deal->promo)->first(); @endphp
                                        <td>{!! $promocodes->data !!}</td>
                                        <td>
                                            <div class="sl-newAppointments__services">
                                               
                                                <a href="{{route('merchant.deals.edit', ['id' => $deal->id])}}"><i class="fa fa-pen" aria-hidden="true"></i></a>
                                                <a onclick="deleteDeal({{$deal->id}})" href="javascript:void(0)"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                            </div>

                                        </td>
                                    </tr>
                                    @endforeach
                                    <thead>
                                    <tr>
                                        <th>{{translateText('Data')}}</th>
                                        <th>{{translateText('Code')}}</th>
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


                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-center">
                    <h1 class="modal-title" id="myModalLabel">Enter Redemption Code to delete</h1>
                    <button type="button" class="modal-header close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

                </div>
                <div class="modal-body">
                    <div class="row">
                        <form method="post" action="{{route('merchant.deal.delete')}}">
                            @csrf
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <span class="input-group-append"></span>
                                    <input id="dealId" type="hidden" value="" name="id">
                                    <input type="text" name="code" class="form-control input-lg"  placeholder="Redemption Code Enter Here">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Delete">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MAIN END -->
@endsection

<script>
    function deleteDeal(id) {
        $('#myModal').modal('show');
        document.querySelector('#dealId').value = id
        console.log(document.querySelector('#dealId').value)
    }
</script>
