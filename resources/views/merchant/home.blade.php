@extends('merchant.master')
@section('content')
<form method="POST" action="{{ route('merchant.profile.update') }}">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">First Name</label>
        <input type="text" name="first_name" value="{{$user->first_name}}" class="form-control" id="first_name" aria-describedby="first_name" placeholder="Enter First Name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Last Name</label>
        <input type="text" name="last_name" value="{{$user->last_name}}" class="form-control" id="last_name" aria-describedby="last_name" placeholder="Enter Last Name">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Confirm Password</label>
        <input type="password" name="confirm-password" class="form-control" id="confirmPassword" placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
