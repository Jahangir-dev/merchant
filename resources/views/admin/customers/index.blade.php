@extends('admin.master')
@section('content')
    <section class="content">
        @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif  
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Customers</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table example1 table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Ip Address</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $index => $user)
                                    @if($user->role->name === 'Customer')
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->first_name}}</td>
                                        <td>{{$user->last_name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->ip_address}}</td>
                                        <td>
                                             <label class="radio-inline">
                                                <input type="radio" name="optradio{{$index}}" >Active
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio{{$index}}">Block
                                            </label>
                                            <a href="{{route('admin.customers.delete', $user->id)}}" class="danger btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            <a href="{{route('admin.customers.edit', $user->id)}}" class="btn btn-secondary"><i class="fa fa-pen" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endif
                                @endforeach
                            </tbody>
                             <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Ip Address</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
