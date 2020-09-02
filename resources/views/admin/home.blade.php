@extends('admin.master')

@section('content')
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif  
@endsection
