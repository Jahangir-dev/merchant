@extends('admin.master')
@section('content')
<br>
	<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title"> <small>Deal Detail</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm">
                <div class="card-body">
                  <div class="row">
                  <div class="col-6">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
                  </div>
                </div>
                <div class="col-6">
                    <!-- Date and time range -->
                <div class="form-group">
                  <label>Date and time validate deal:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-clock"></i></span>
                    </div>
                    <input type="text" name="datatime" class="form-control float-right" id="reservationtime">
                  </div>
                  <!-- /.input group -->
                </div>
              </div>
              <div class="col-6">
                 <div class="form-group">
                    <label for="minBuyer">Minimun Buyer</label>
                    <input type="number" name="minBuyer" class="form-control" id="minBuyer" placeholder="Enter min number of buyers">
                  </div>
                </div>
                 <div class="col-6">
                 <div class="form-group">
                    <label for="maxBuyer">Maximum Buyer</label>
                    <input type="number" name="maxBuyer" class="form-control" id="maxBuyer" placeholder="Enter max number of buyers">
                  </div>
                </div>
                <div class="col-6">
                 <div class="form-group">
                    <label for="maxCoupn">Maximum Coupn</label>
                    <input type="number" name="maxCoupn" class="form-control" id="maxCoupn" placeholder="Enter number of coupan">
                  </div>
                </div>
              </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
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