@extends('admin.master')
@section('content')
    <section class="content">
        @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{translateText('All Merchants')}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table id="example1" class="table example1 table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{translateText('First Name')}}</th>
                                    <th>{{translateText('Last Name')}}</th>
                                    <th>{{translateText('Email')}}</th>
                                    <th>{{translateText('Ip Address')}}</th>
                                    <th>{{translateText('Actions')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $index => $user)
                                    @if($user->role->name === 'Merchant')
                                    <tr>
                                        <td>{{translateText($user->id)}}</td>
                                        <td>{{translateText($user->first_name)}}</td>
                                        <td>{{translateText($user->last_name)}}</td>
                                        <td>{{translateText($user->email)}}</td>
                                        <td>
                                           {{translateText($user->ip_address)}}
                                            @if($ips->contains('ip_address', $user->ip_address))
                                                <a href="{{route('admin.user.unblock.ip', $user->id)}}" class="btn btn-success">
                                                    <i class="fa fa-unlock" aria-hidden="true"></i>
                                                </a>
                                            @else
                                                <a href="{{route('admin.user.block.ip', $user->id)}}" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-ban" aria-hidden="true"></i>
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            <label class="radio-inline">

                                                @if(!$user->status)
                                                <a href="{{route('admin.user.block', $user->id)}}" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-ban" aria-hidden="true"></i>
                                                </a>
                                                @else
                                                <a href="{{route('admin.user.unblock', $user->id)}}" class="btn btn-success">
                                                    <i class="fa fa-unlock" aria-hidden="true"></i>
                                                </a>
                                                @endif
                                            </label>

                                            <a href="{{route('admin.merchants.delete', $user->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            <a href="{{route('admin.merchants.edit', $user->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pen" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                @endif
                                @endforeach
                            </tbody>
                            <tfoot>
                                    <tr>
                                    <th>#</th>
                                    <th>{{translateText('First Name')}}</th>
                                    <th>{{translateText('Last Name')}}</th>
                                    <th>{{translateText('Email')}}</th>
                                    <th>{{translateText('Ip Address')}}</th>
                                    <th>{{translateText('Actions')}}</th>
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
