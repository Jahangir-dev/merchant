@extends('admin.master')
@section('content')
<br>
	<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-10">
          </div>
          	<div class="col-2 float-right">
            	<a href="{{route('admin.deal.create')}}"><button type="button"  class="btn btn-primary btn-block">Create Deal</button></a>
          	</div>
          <div class="col-md-12">

          	<br>
            <!-- jquery validation -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> Deals</h3>
              </div>
              <!-- /.card-header -->
             	<div class="card">

              <!-- /.card-header -->
              <div class="card-body">
                <table id="deals" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>{{translateText('Title')}}</th>
                    <th>{{translateText('Start Date')}}</th>
                    <th>{{translateText('End Date')}}</th>
                    <th>{{translateText('Status')}}</th>
                    <th>{{translateText('User')}}</th>
                    <th>{{translateText('Promo')}}</th>
                    <th>{{translateText('Min Products')}}</th>
                    <th>{{translateText('Max Products')}}</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($deals as $deal)

                      <tr>
                          <td>{{$deal->title}}</td>
                          <td>{{$deal->start_date}}</td>
                          <td>{{$deal->end_date}}</td>
                          <td>{{$deal->status}}</td>
                          <td>{{$deal->user->first_name}} {{$deal->user->last_name}} </td>
                          <td>{{$deal->promo}}</td>
                          <td>{{$deal->min_product}}</td>
                          <td>{{$deal->max_product}}</td>
                  </tr>
                  @endforeach

                  </tbody>
                  <tfoot>
                  <tr>
                      <th>{{translateText('Title')}}</th>
                      <th>{{translateText('Start Date')}}</th>
                      <th>{{translateText('End Date')}}</th>
                      <th>{{translateText('Status')}}</th>
                      <th>{{translateText('User')}}</th>
                      <th>{{translateText('Promo')}}</th>
                      <th>{{translateText('Min Products')}}</th>
                      <th>{{translateText('Max Products')}}</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
