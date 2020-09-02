@extends('admin.master')
@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update {{Auth::user()->first_name}} {{Auth::user()->last_name}} Information</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('admin.myprofile.update', $user->id)}}">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <div class="card-body">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" value="{{$user->first_name}}" name="first_name" class="form-control" id="first_name" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" value="{{$user->last_name}}" name="last_name" class="form-control" id="last_name" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" value="{{$user->email}}" name="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="confirm-password">Password</label>
                    <input type="password" name="confirm-password" class="form-control" id="confirm-password" placeholder="Confirm Password">
                </div>
               
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
