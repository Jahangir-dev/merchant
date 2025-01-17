@extends('admin.master')
@section('title') {{translateText(  $pageTitle) }} @endsection
@section('content')
<div class="container-fluid">
    <div class="row">
    <div class="app-title col-md-12">
        <div>
            <h1><i class="fa fa-briefcase"></i> {{translateText(  $pageTitle ) }}</h1>
            <p>{{translateText(  $subTitle )}}</p>
        </div>
        <a href="{{ route('admin.brands.create') }}" class="btn btn-primary pull-right">{{translateText( 'Add Brand')}}</a>
    </div>
        <div class="col-md-12 mt-3">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th> # </th>
                            <th>{{translateText('Name')}} </th>
                            <th> {{translateText( 'Slug')}} </th>
                            <th> {{translateText( 'Merchant')}} </th>
                            <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{ $brand->id }}</td>
                                <td>{{translateText(  $brand->name )}}</td>
                                <td>{{translateText( $brand->slug) }}</td>
                                <td>{{translateText( $brand->first_name) }}</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Second group">
                                        <a href="{{ route('admin.brands.edit', $brand->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('admin.brands.delete', $brand->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush
