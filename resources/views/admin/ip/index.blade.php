@include('admin.master')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Customers</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Ip Address</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ips as $index => $ip)
                                        <tr>
                                            <td>{{$index}}</td>
                                            <td>{{$ip->ip}}</td>
                                            <td>
                                                <a href="{{route('admin.ip.delete', $ip->id)}}" class="danger btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                            </td>
                                @endforeach
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
