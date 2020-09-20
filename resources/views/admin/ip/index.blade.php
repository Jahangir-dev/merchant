@extends('admin.master')
@section('content')
<br>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{translateText( 'All Blocked IP')}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table id="example1" class="table example1 table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{translateText( 'Ip Address')}}</th>
                                    <th>{{translateText( 'Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ips as $index => $ip)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{translateText( $ip->ip_address)}}</td>
                                            <td>
                                                <a href="{{route('admin.ip.delete', $ip->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                    <th>#</th>
                                    <th>{{translateText( 'Ip Address')}}</th>
                                    <th>{{translateText( 'Action')}}</th>
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
