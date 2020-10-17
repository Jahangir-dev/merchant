@extends('admin.master')
<!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">        
  <!-- flaticon css -->
  <link rel="stylesheet" type="text/css" href="{{asset('vendor/flaticon/flaticon.css')}}"/>
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@section('content')
  <div class="content-main-block  mrg-t-40">
    <div class="admin-create-btn-block">
      <a href="{{route('coupon.create')}}" class="btn btn-danger btn-md">Add Coupon</a>
      <!-- Delete Modal -->
      <a type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#bulk_delete"><i class="material-icons left">delete</i> Delete Selected</a>   
      <!-- Modal -->
      <div id="bulk_delete" class="delete-modal modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <div class="delete-icon"></div>
            </div>
            <div class="modal-body text-center">
              <h4 class="modal-heading">Are You Sure ?</h4>
              <p>Do you really want to delete these records? This process cannot be undone.</p>
            </div>
            <div class="modal-footer">
              {!! Form::open(['method' => 'POST', 'action' => 'Admin\CouponController@bulk_delete', 'id' => 'bulk_delete_form']) !!}
                <button type="reset" class="btn btn-gray translate-y-3" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-danger">Yes</button>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content-block box-body table-responsive">
      <table id="full_detail_table" class="table table-hover table-bordered table-responsive">
        <thead>
          <tr class="table-heading-row">
            <th>
              <div class="inline">
                <input id="checkboxAll" type="checkbox" class="filled-in" name="checked[]" value="all" id="checkboxAll">
                <label for="checkboxAll" class="material-checkbox"></label>
              </div>#</th>
            <th>Image</th>
            <th>Type</th>
            
            <th>Title</th>
            
            <th>Category</th>
            {{-- <th>Price</th>
            <th>Discount</th>
            <th>Coupon code</th>
            <th>Link</th> --}}
            <th>User</th>
            
            {{-- <th>Like</th>
            <th>Dislike</th> --}}
            
            <th>Paid/Free</th>
            <th>Actions</th>
          </tr>
        </thead>
        @if (isset($coupon))
          <tbody>
            @foreach ($coupon as $key => $item)
              <tr>
                <td>
                  <div class="inline">
                    <input type="checkbox" form="bulk_delete_form" class="filled-in material-checkbox-input" name="checked[]" value="{{$item->id}}" id="checkbox{{$item->id}}">
                    <label for="checkbox{{$item->id}}" class="material-checkbox"></label>
                  </div>
                  {{$key+1}}
                </td>
                <td>
                  @if ($item->image != null)
                    <img src="{{ asset('images/coupon/'.$item->image) }}" class="img-responsive" width="80" alt="image">
                  @else
                    N/A  
                  @endif
                </td>
                <td>{{$item->type == 'c' ? 'Coupon' : 'Deal'}}</td>
                
                <td>{{\Illuminate\Support\Str::limit($item->title, 20)}}</td>
                
                <td>{{strtok($item->category->name, ' ')}}</td>
                {{-- <td>{{$item->price}}</td>
                <td>{{$item->discount ? $item->discount : '0'}}</td>
                <td>{{$item->code}}</td>
                <td>{{$item->link ? \Illuminate\Support\Str::limit($item->link,10) : "NA"}}</td> --}}
                {{-- <td>{{\Illuminate\Support\Str::limit($item->detail,20)}}</td> --}}
                <td>{{strtok($item->user->first_name,' ')}}</td>
                
               {{--  <td>{{$item->likes()->where('value','1')->count()}}</td>
                <td>{{$item->likes()->where('value','-1')->count()}}</td> --}}
                
                <td>{{$item->is_active == '1' ? 'Paid' : 'Free'}}</td>
                <td>
                  <div class="admin-table-action-block">
                    <a href="{{route('coupon.edit', $item->id)}}" data-toggle="tooltip" data-original-title="Edit" class="btn-info btn-floating"><i class="material-icons">mode_edit</i></a>
                    <!-- Delete Modal -->
                    <button type="button" class="btn-danger btn-floating" data-toggle="modal" data-target="#{{$item->id}}deleteModal"><i class="material-icons">delete</i> </button>
                    <!-- Modal -->
                    <div id="{{$item->id}}deleteModal" class="delete-modal modal fade" role="dialog">
                      <div class="modal-dialog modal-sm">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="delete-icon"></div>
                          </div>
                          <div class="modal-body text-center">
                            <h4 class="modal-heading">Are You Sure ?</h4>
                            <p>Do you really want to delete these records? This process cannot be undone.</p>
                          </div>
                          <div class="modal-footer">
                            {!! Form::open(['method' => 'DELETE', 'action' => ['Admin\CouponController@destroy', $item->id]]) !!}
                                <button type="reset" class="btn btn-gray translate-y-3" data-dismiss="modal">No</button>
                                <button type="submit" class="btn btn-danger">Yes</button>
                            {!! Form::close() !!}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        @endif  
      </table>
      {{-- <div class="eloquent-pagination">
        {{ $cities->links() }}
      </div> --}}
    </div>
  </div>
@endsection
@push('scripts')
<script src="{{asset('js/admin.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/summernote/js/summernote-bs4.min.js')}}"></script>
<script src="{{asset('js/datatables.min.js')}}" type="text/javascript"></script>
<!-- summernote js -->
<script src="{{asset('js/datepicker.js')}}" type="text/javascript"></script>
<script src="{{asset('js/utils.js')}}" type="text/javascript"></script>
<script>
  $(function () {
    
    // DataTables
    $('#movies_table').DataTable({
      responsive: true,
      "sDom": "<'row'><'row'<'col-md-4'l><'col-md-4'B><'col-md-4'f>r>t<'row'<'col-sm-12'p>>",
      "language": {
        "paginate": {
          "previous": '<i class="material-icons paginate-btns">keyboard_arrow_left</i>',
          "next": '<i class="material-icons paginate-btns">keyboard_arrow_right</i>'
          }
      },
      buttons: [
        {
          extend: 'print',
          exportOptions: {
              columns: ':visible'
          }
        },
        'csvHtml5',
        'excelHtml5',
        'colvis',
      ]
    });

    $('#full_detail_table').DataTable({
      "sDom": "<'row'><'row'<'col-md-4'l><'col-md-4'B><'col-md-4'f>r>t<'row'<'col-sm-12'p>>",
      "language": {
      "paginate": {
        "previous": '<i class="material-icons paginate-btns">keyboard_arrow_left</i>',
        "next": '<i class="material-icons paginate-btns">keyboard_arrow_right</i>'
        }
      },
      buttons: [
        {
          extend: 'print',
          exportOptions: {
              columns: ':visible'
          }
        },
        'csvHtml5',
        'excelHtml5',
        'colvis',
      ]
    });
    });
  </script>
@endpush