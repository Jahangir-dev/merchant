@extends('admin.master')
@section('title') {{translateText( $pageTitle )}} @endsection
@section('content')
<div class="container-fluid">
    <div class="row">
    <div class="app-title col-md-12">
        <div>
            <h1><i class="fa fa-tags"></i> {{translateText( $pageTitle) }}</h1>
            <p>{{ $subTitle }}</p>
        </div>
        <a href="{{ route('admin.attributes.create') }}" class="btn btn-primary pull-right">{{translateText('Add Attribute')}}</a>
    </div>
        <div class="col-md-12 mt-3">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th> {{translateText('Code')}} </th>
                            <th> Name </th>
                            <th class="text-center"> {{translateText('Frontend Type')}} </th>
                            <th class="text-center"> {{translateText('Filterable')}} </th>
                            <th class="text-center"> {{translateText('Required')}} </th>
                            <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($attributes as $attribute)
                                <tr>
                                    <td>{{ $attribute->code }}</td>
                                    <td>{{translateText( $attribute->name )}}</td>
                                    <td>{{translateText( $attribute->frontend_type )}}</td>
                                    <td class="text-center">
                                        @if ($attribute->is_filterable == 1)
                                            <span class="badge badge-success">{{translateText('Yes')}}</span>
                                        @else
                                            <span class="badge badge-danger">{{translateText('No')}}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if ($attribute->is_required == 1)
                                            <span class="badge badge-success">{{translateText('Yes')}}</span>
                                        @else
                                            <span class="badge badge-danger">{{translateText('No')}}</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Second group">
                                            <a href="{{ route('admin.attributes.edit', $attribute->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('admin.attributes.delete', $attribute->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
