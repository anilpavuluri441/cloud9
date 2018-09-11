@extends('layouts.app')
@section('content')

<div class="col-md-12">
 <div class="row">

  <div class="page-header-actions col-xs-6">
   <h2 class="page-title font_lato" style="float: left;">Services</h2>
  </div>
  <div class="col-xs-6"><a class="btn btn-success" href="{{url('admin/createservice')}}" style="float: right">Create Service</a></div>
 

</div>
</div>

<div class="row">
<div class="col-sm-12">
   <div class="col-lg-12" id="successMessage">
@if(session('msg_success'))
    <div class="alert dark alert-icon alert-success alert-dismissible alertDismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <i class="icon wb-check" aria-hidden="true"></i> 
      {{session('msg_success')}}
    </div>
@endif
@if(session('msg_update'))
    <div class="alert dark alert-icon alert-info alert-dismissible alertDismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <i class="icon wb-check" aria-hidden="true"></i> 
      {{session('msg_update')}}
    </div>
@endif
@if(session('msg_delete'))
    <div class="alert dark alert-icon alert-danger alert-dismissible alertDismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <i class="icon wb-check" aria-hidden="true"></i> 
      {{session('msg_delete')}}
    </div>
@endif
</div>
    
    <table class="table table-bordered thead-inverse">

    <thead>
      <tr>
            <th width="50px">S. No</th>
            <th>Service Name</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
    @foreach ($services as $service)
    <tr>
        <td>{{ ++$i}}</td>
        <td>{!! $service->service_name !!}</td>
        <td>@if($service->is_active == '0')
<span class="label label-success">Active</span>

                    @else
                      <span class="label label-danger">In Active</span>
                      @endif

        </td>
        <td style="width: 140px;"><a class="btn btn-primary btn-sm" href="serviceedit/{{ $service->id }}">Edit</a>
        <a class="btn btn-danger btn-sm" onClick="return confirm('delete confrim sure ')" href="deleteservice/{{ $service->id }}">Delete</a></td>
    </tr>
    @endforeach
    </table>
    
{{$services->appends(Request::get('page'))->links()}}

    </div>
    </div>

@endsection

