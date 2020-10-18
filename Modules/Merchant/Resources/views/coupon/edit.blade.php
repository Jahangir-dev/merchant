@extends('merchant::layouts.master')


 @section('content')
    <!-- MAIN START -->
    <main class="sl-main">
        <div class="sl-main-section">
            <div class="container">
                <div class="row">
                    @include('merchant::layouts.asidebar')
                     <div class="col-lg-8 col-xl-9">
                        <div class="sl-dashboardbox sl-addNewArticle">
                            <div class="sl-dashboardbox__title">
                                <h2>{{translateText('Edit Coupons')}}</h2>
                            </div>
                            <div class="sl-dashboardbox__content sl-aboutDescription">
                              <fieldset>
                                {!! Form::model($coupon, ['method' => 'PATCH', 'action' => ['CouponController@update', $coupon->id], 'files' => true, 'class' => 'sl-form sl-manageServices']) !!}
                                   @csrf
                                        <div class="sl-form__wrap">
                                            <div class="sl-aboutDescription__content">
                                                <div class="form-group">
                                                    <div class="sl-aboutDescription__title">
                                                        <h6>{{translateText('Select Product')}}</h6>
                                                    </div>
                                                     <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                                 
                                                    {!! Form::select('category_id', $all_category, null, ['class' => 'form-control select2', 'required']) !!}
                                                    <small class="text-danger">{{ $errors->first('category_id') }}</small>
                                                </div> 
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
          <div class="col-md-6 form-group{{ $errors->has('image') ? ' has-error' : '' }} input-file-block">
            {!! Form::label('image', 'Deal Image') !!} 
            {!! Form::file('image', ['class' => 'input-file', 'id'=>'image']) !!}
          
            <p class="info">Choose custom image</p>
            <small class="text-danger">{{ $errors->first('image') }}</small>
          </div>          

          <div class="col-md-6 form-group{{ $errors->has('price') ? ' has-error' : '' }}">
              {!! Form::label('price', 'Price') !!} - <p class="inline info">Please enter deal price</p>
              {!! Form::text('price', null, ['class' => 'form-control']) !!}
              <small class="text-danger">{{ $errors->first('price') }}</small>
          </div> 
          <div class="col-md-6 form-group{{ $errors->has('discount') ? ' has-error' : '' }}">
              {!! Form::label('discount', 'Discount') !!} - <p class="inline info">Please enter discount on deal</p>
              {!! Form::text('discount', null, ['class' => 'form-control']) !!}
              <small class="text-danger">{{ $errors->first('discount') }}</small>
          </div>
          <div id="ccode" class="col-md-6 form-group{{ $errors->has('code') ? ' has-error' : '' }}">
              {!! Form::label('code', 'Coupon Code*') !!} - <p class="inline info">Please enter coupon code</p>
              {!! Form::text('code', null, ['class' => 'form-control']) !!}
              <small class="text-danger">{{ $errors->first('code') }}</small>
          </div> 
          
          <div class="col-md-6 form-group{{ $errors->has('expiry') ? ' has-error' : '' }}">
              {!! Form::label('expiry', 'Expiry Date') !!} - <p class="inline info">Please enter deal expiry date</p>
              {!! Form::date('expiry', null, ['class' => 'form-control date-picker']) !!}
              <small class="text-danger">{{ $errors->first('expiry') }}</small>
          </div>
                        <div class="form-group sl-btnarea">
           
            <button type="submit" class="btn btn-success">Update</button>
          </div> 
            <div class="clear-both"></div>
        </div>      
                          </div>
                        {!! Form::close() !!}
                      </fieldset>
                        </div>
                </div>
            </div>
          </div>
    </main>  
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