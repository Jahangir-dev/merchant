@extends('admin.master')
<link href="{{asset('css/datepicker.css')}}" rel="stylesheet" type="text/css"/> 
  <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@section('content')
  <div class="app-title col-md-12">
        <div>
            <h1><i class="fa fa-bar-chart"></i>  Add Coupon</h1>
        </div>
  </div>
  <div class="admin-form-main-block">
    {!! Form::open(['method' => 'POST', 'action' => 'Admin\CouponController@store', 'files' => true]) !!}
      <div class="row admin-form-block z-depth-1">
        <div class="col-md-12">
           <div class="bootstrap-checkbox form-group{{ $errors->has('type') ? ' has-error' : '' }}">
            <div class="row">
              <div class="col-md-4">
                <h5 class="bootstrap-switch-label">Select Coupon Or Deal</h5>
              </div>
              <div class="col-md-2 pad-0">
                <div class="make-switch">
                 <input type="hidden" name="type" value="Coupon">
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <small class="text-danger">{{ $errors->first('type') }}</small>
            </div>
          </div>
        </div>
        <div class="col-md-6">                              
          {{-- <input type="hidden" name="type" value="c">   --}}
          <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
            {!! Form::label('user_id', 'Select User*') !!} - <p class="inline info">Please select user name</p>
            {!! Form::select('user_id', $all_users, null, ['class' => 'form-control select2', 'required']) !!}
            <small class="text-danger">{{ $errors->first('user_id') }}</small>
          </div>            
        
          <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
              {!! Form::label('category_id', 'Select Category*') !!} - <p class="inline info">Please select category</p>
              {!! Form::select('category_id', $all_category, null, ['class' => 'form-control select2', 'required']) !!}
              <small class="text-danger">{{ $errors->first('category_id') }}</small>
          </div> 
          <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
              {!! Form::label('title', 'Coupon Name/Title*') !!} - <p class="inline info">Please enter coupon name</p>
              {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
              <small class="text-danger">{{ $errors->first('title') }}</small>
          </div>
          <div class="summernote-main form-group{{ $errors->has('detail') ? ' has-error' : '' }}">
              {!! Form::label('detail', 'Description*') !!} - <p class="inline info">Please enter deal description</p>
              {!! Form::textarea('detail', null, ['id' => 'summernote-main', 'class' => 'form-control']) !!}
              <small class="text-danger">{{ $errors->first('detail') }}</small>
          </div>
          <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }} input-file-block">
            {!! Form::label('image', 'Deal Image') !!} 
            {!! Form::file('image', ['class' => 'input-file', 'id'=>'image']) !!}
            <label for="image" class="btn btn-danger js-labelFile" data-toggle="tooltip" data-original-title="Coupon Image">
              <i class="icon fa fa-check"></i>
              <span class="js-fileName">Choose a File</span>
            </label>
            <p class="info">Choose custom image</p>
            <small class="text-danger">{{ $errors->first('image') }}</small>
          </div>          
          <div class="btn-group pull-right">
            <button type="reset" class="btn btn-info">Reset</button>
            <button type="submit" class="btn btn-success">Create</button>
          </div>
          <div class="clear-both"></div>
        </div>  
        <div class="col-md-6">

          <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
              {!! Form::label('price', 'Price') !!} - <p class="inline info">Please enter deal price</p>
              {!! Form::text('price', null, ['class' => 'form-control']) !!}
              <small class="text-danger">{{ $errors->first('price') }}</small>
          </div> 
          <div class="form-group{{ $errors->has('discount') ? ' has-error' : '' }}">
              {!! Form::label('discount', 'Discount') !!} - <p class="inline info">Please enter discount on deal</p>
              {!! Form::text('discount', null, ['class' => 'form-control']) !!}
              <small class="text-danger">{{ $errors->first('discount') }}</small>
          </div>
          <div id="ccode" class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
              {!! Form::label('code', 'Coupon Code*') !!} - <p class="inline info">Please enter coupon code</p>
              {!! Form::text('code', null, ['class' => 'form-control']) !!}
              <small class="text-danger">{{ $errors->first('code') }}</small>
          </div> 
          
          <div class="form-group{{ $errors->has('expiry') ? ' has-error' : '' }}">
              {!! Form::label('expiry', 'Expiry Date') !!} - <p class="inline info">Please enter deal expiry date</p>
              {!! Form::date('expiry', null, ['class' => 'form-control date-picker']) !!}
              <small class="text-danger">{{ $errors->first('expiry') }}</small>
          </div>
          <div class="form-group{{ $errors->has('is_featured') ? ' has-error' : '' }} switch-main-block" style="display: none">
            <div class="row">
              <div class="col-xs-4">
                {!! Form::label('is_featured', 'Featured') !!}
              </div>
              <div class="col-xs-5 pad-0">
                <label class="switch">                
                  {!! Form::checkbox('is_featured', 1, 1, ['class' => 'checkbox-switch']) !!}
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
            <div class="col-xs-12">
              <small class="text-danger">{{ $errors->first('is_featured') }}</small>
            </div>
          </div> 
          <div class="form-group{{ $errors->has('is_exclusive') ? ' has-error' : '' }} switch-main-block">
            
            <div class="col-xs-12">
              <small class="text-danger">{{ $errors->first('is_exclusive') }}</small>
            </div>
          </div> 
          {{-- <div class="form-group{{ $errors->has('is_front') ? ' has-error' : '' }} switch-main-block">
            <div class="row">
              <div class="col-xs-4">
                {!! Form::label('is_front', 'Show on Front Page') !!}
              </div>
              <div class="col-xs-5 pad-0">
                <label class="switch">                
                  {!! Form::checkbox('is_front', 0, null, ['class' => 'checkbox-switch']) !!}
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
            <div class="col-xs-12">
              <small class="text-danger">{{ $errors->first('is_front') }}</small>
            </div>
          </div>  --}}
          <div class="form-group{{ $errors->has('is_verified') ? ' has-error' : '' }} switch-main-block" style="display: none">
            <div class="row">
              <div class="col-xs-4">
                {!! Form::label('is_verified', 'Verify') !!}
              </div>
              <div class="col-xs-5 pad-0">
                <label class="switch">                
                  {!! Form::checkbox('is_verified', 0, null, ['class' => 'checkbox-switch']) !!}
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
            <div class="col-xs-12">
              <small class="text-danger">{{ $errors->first('is_verified') }}</small>
            </div>
          </div> 
          <div class="form-group{{ $errors->has('is_active') ? ' has-error' : '' }} switch-main-block">
            <div class="row">
              <div class="col-xs-4">
                {!! Form::label('is_active', 'Paid/Free') !!}
              </div>
              <div class="col-xs-5 pad-0">
                <label class="switch">                
                  {!! Form::checkbox('is_active', 1, 1, ['class' => 'checkbox-switch']) !!}
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
            <div class="col-xs-12">
              <small class="text-danger">{{ $errors->first('is_active') }}</small>
            </div>
          </div>
        </div>
      </div>
    {!! Form::close() !!}
  </div>
@endsection
@push('scripts')
<script src="{{asset('js/admin.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/summernote/js/summernote-bs4.min.js')}}"></script>
<!-- summernote js -->
<script src="{{asset('js/datepicker.js')}}" type="text/javascript"></script>
<script src="{{asset('js/utils.js')}}" type="text/javascript"></script>
<script>
  $(document).ready(function () {
    $('input[type="checkbox"]').change(function(){
        this.value = (Number(this.checked));
    });

    var loadstate = $('#CouponCheckBox').bootstrapSwitch('state');
    if(loadstate == false){                                   
      $("#ccode").hide();
    }
    else{ 
      $("#ccode").show();
    }
    $('#CouponCheckBox').on('switchChange.bootstrapSwitch', function (event, state) {     
      var urlLike = '{{ url('dropdown') }}';   
      var up = $('#forum_category_id').empty();
      var state = state; 
          console.log(state);  
      $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type:"GET",
        url: urlLike,
        data: {state: state},
        success:function(data){   
          console.log(data);
          $.each(data, function(id, title) {
            up.append($('<option>', {value:id, text:title}));
          });
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
          console.log(XMLHttpRequest);
        }
      });
      if(state == false){                                   
        $("#ccode").hide();
      }
      else{ 
        $("#ccode").show();
      }
      });

       $('#summernote-main').summernote({
      height: 100,
    });

    $(".js-select2").select2({
        placeholder: "Pick states",
        theme: "material"
    });
    
    
});
</script>
@endpush