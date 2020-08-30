@extends('admin.master')
@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Update User Information</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="{{ route('admin.profile.update', $user->id)}}">
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
                <div class="form-group">
                    <label for="role">Role Select</label>
                    <select class="select2-blue" id="role" name="role">
                        @foreach($roles as $role)
                            @if($role->name == $user->role->name)
                                <option value="{{ $role->id }}" selected> {{ $role->name }} </option>
                            @else
                            <option value="{{ $role->id }}"> {{ $role->name }} </option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- /.card -->
@endsection
