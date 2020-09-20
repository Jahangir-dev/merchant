@extends('admin.master')
@section('title') {{translateText( $pageTitle) }} @endsection
@section('content')
<div class="container-fluid">
    <div class="row">
    <div class="app-title col-md-12">
        <div>
            <h1><i class="fa fa-tags"></i> {{translateText( $pageTitle) }}</h1>
            <p>{{translateText( $subTitle )}}</p>
        </div>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary pull-right">{{translateText('Add Category') }}</a>
    </div>
        <div class="col-md-12 mt-3">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> {{translateText('Name')}} </th>
                                <th> {{translateText('Slug')}} </th>
                                <th class="text-center"> {{translateText('Parent')}} </th>
                                <th class="text-center"> {{translateText('Featured')}} </th>
                                <th class="text-center"> {{translateText('Menu')}} </th>
                                <th class="text-center"> {{translateText('Order')}} </th>
                                <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                @if ($category->id)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{translateText( $category->name )}}</td>
                                        <td>{{translateText( $category->slug )}}</td>
                                        <td>{{translateText($category->parent->name ?? 'none' )}}</td>
                                        <td class="text-center">
                                            @if ($category->featured == 1)
                                                <span class="badge badge-success">{{translateText('Yes')}}</span>
                                            @else
                                                <span class="badge badge-danger">{{translateText('No')}}</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if ($category->menu == 1)
                                                <span class="badge badge-success">{{translateText('Yes')}}</span>
                                            @else
                                                <span class="badge badge-danger">{{translateText('No')}}</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            {{ $category->order }}
                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group" aria-label="Second group">
                                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                <a href="{{ route('admin.categories.delete', $category->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
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
