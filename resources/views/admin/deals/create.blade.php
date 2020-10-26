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
                <form action="{{route('admin.deal.save')}}" method="POST" class="sl-form sl-manageServices">
                    @csrf
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

              <div class="col-md-12">
                  <div class="form-group">
                      <label class="control-label" for="categories">{{translateText( 'Categories')}}</label>
                      <select name="products[]" id="categories" class="form-control" multiple>
                          @foreach($products as $category)
                              <option value="{{ $category->id }}">{{translateText(  $category->name )}}</option>
                          @endforeach
                      </select>
                  </div>
              </div>
               <div class="col-6">
                 <div class="form-group">
                    <label for="maxBuyer">{{translateText('Minimum Products')}}</label>
                    <input type="number" name="min_product" class="form-control" id="maxBuyer" placeholder="Enter max number of buyers">
                  </div>
                </div>
                <div class="col-6">
                 <div class="form-group">
                    <label for="max_product">{{translateText('Maximum Products')}}</label>
                    <input type="number" name="max_product" class="form-control" id="max_product" placeholder="Enter number of coupan">
                  </div>
                </div>
                <div class="col-6">
                 <div class="form-group">
                    <label for="reward">{{translateText('Reward')}}</label>
                    <input type="number" name="reward" class="form-control" id="reward" placeholder="Enter number of coupan">
                  </div>
                </div>
                <div class="col-6">
                 <div class="form-group">
                    <label for="amount">{{translateText('Amount')}}</label>
                    <input type="number" name="amount" class="form-control" id="amount" placeholder="Enter number of coupan">
                  </div>
                </div>
                <div class="col-6">
                 <div class="form-group">
                    <label for="quantity">{{translateText('Quantity')}}</label>
                    <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Enter number of coupan">
                  </div>
                </div>
                <div class="col-6">
                 <div class="form-group">
                    <label for="quantity">{{translateText('Quantity')}}</label>
                    <select type="number" name="quantity" class="form-control" id="quantity">
                        <option value="{{true}}" selected="">{{translateText('Active')}}</option>
                        <option value="{{false}}">{{translateText('Disable')}}</option>
                    </select>
                  </div>
                </div>


                <div class="col-6">
                  <div class="form-group">
                      <label class="control-label" for="description">{{translateText( 'Description')}}</label>
                      <textarea name="description" id="description" rows="8" class="form-control"></textarea>
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
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/select2.min.js') }}"></script>
    <script>
        $( document ).ready(function() {
            $('#categories').select2();
        });
    </script>
@endpush
