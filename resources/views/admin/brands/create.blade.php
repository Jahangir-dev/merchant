@extends('admin.master')
@section('title') {{translateText(  $pageTitle ) }} @endsection
@section('content')
<div class="container-fluid">
    <div class="row">
    <div class="app-title col-md-12">
        <div>
            <h1><i class="fa fa-briefcase"></i> {{translateText(  $pageTitle) }}</h1>
        </div>
    </div>
        <div class="col-md-8 mt-3 mx-auto">
            <div class="tile">
                <h3 class="tile-title">{{translateText( $subTitle )}}</h3>
                <form action="{{ route('admin.brands.store') }}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="tile-body">
                        <div class="form-group">
                            <label class="control-label" for="name">{{translateText('Name')}} <span class="m-l-5 text-danger"> *</span></label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}"/>
                            @error('name') {{translateText(  $message )}} @enderror
                        </div>
                        <div class="form-group">
                            <input id="autocomplete" name="address" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Address" required>
                            <input id="latitude" name="latitude" class="form-control @error('name') is-invalid @enderror" type="hidden" placeholder="Address" required>
                            <input id="longitude" name="longitude" class="form-control @error('name') is-invalid @enderror" type="hidden" placeholder="Address" required>
                            @error('name') {{translateText(  $message )}} @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">{{translateText( 'Brand Logo')}}</label>
                            <input class="form-control @error('logo') is-invalid @enderror" type="file" id="logo" name="logo"/>
                            @error('logo') {{translateText(  $message )}} @enderror
                        </div>
                        <div class="form-group">
                             <label class="control-label">{{translateText('Merchant')}}</label>
                            <select name="user_id" id="merchnat" class="form-control">
                                @foreach($users as $user)
                               <option value="{{$user['id']}}">{{$user['first_name']}}</option>
                               @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="tile-footer">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>{{translateText( 'Save Brand')}}</button>
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="{{ route('admin.brands.index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>{{translateText( 'Cancel')}}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')

@endpush
