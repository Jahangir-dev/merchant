@extends('admin.master')
@section('title') {{translateText( $pageTitle) }} @endsection
@section('content')
<div class="container-fluid">
    <div class="row">
    <div class="app-title col-md-12">
        <div>
            <h1><i class="fa fa-tags"></i> {{translateText( $pageTitle )}}</h1>
        </div>
    </div>
        <div class="col-md-8 mx-auto mt-3">
            <div class="tile">
                <h3 class="tile-title">{{translateText( $subTitle )}}</h3>
                <form action="{{ route('admin.categories.store') }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label" for="name">{{translateText( 'Name')}} <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}"/>
                            @error('name') {{translateText(  $message ) }} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="description">{{translateText( 'Description') }}</label>
                            <textarea class="form-control" rows="4" name="description" id="description">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="parent">{{translateText( 'Parent Category')}} <span class="m-l-5 text-danger"> *</span></label>
                            <select id=parent class="form-control custom-select mt-15 @error('parent_id') is-invalid @enderror" name="parent_id">
                                <option value="0">{{translateText( 'Select a parent category')}}</option>
                                @foreach($categories as $key => $category)
                                    <option value="{{ $key }}"> {{translateText(  $category )}} </option>
                                @endforeach
                            </select>
                            @error('parent_id') {{translateText(  $message )}} @enderror
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="featured" name="featured"/>{{translateText( 'Featured Category')}}
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="menu" name="menu"/>{{translateText( 'Show in Menu')}}
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">{{translateText( 'Category Image')}}</label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"/>
                            @error('image') {{translateText(  $message )}} @enderror
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>{{translateText( 'Save Category')}}</button>
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="{{ route('admin.categories.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>{{translateText( 'Cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')

@endpush
