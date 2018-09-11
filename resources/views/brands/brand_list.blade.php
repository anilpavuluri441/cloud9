@extends('layouts.app')
@section('content')

<div class="col-md-12">
    <div class="row">

        <div class="page-header-actions col-xs-6">
            <h2 class="page-title font_lato" style="float: left;">Client</h2>
        </div>
        <div class="col-xs-6"><a class="btn btn-success" href="{{url('admin/createclient')}}" style="float: right">Create Client</a></div>


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
                    <th>S. No</th>
                    <th>Client Name</th>
                    <th>Client Image</th>
                   
                    <th>Status </th>
                    <th>Actions</th>
                </tr>
            </thead>

            @foreach ($brands as $brand)
            <tr> 
                 <td>{{++$i}}</td>
                <td>{{ $brand->client_name}}</td>
                <td><img src="{{ URL::to('/images/client-logo/'.$brand->client_image) }}" height="30px" width="30px" /></td>
              
                <td> @if($brand->is_active == '0')
                    <span class="label label-success">Active</span>
            @else
        <span class="label label-danger">In Active</span>
            @endif
                </td>

                <td width="160px">
                    <a class="btn btn-primary btn-sm" href="editclient/{{ $brand->id }}">Edit</a>
                    <a class="btn btn-danger btn-sm" onClick="return confirm('delete confrim sure ')" href="deleteclient/{{ $brand->id }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
      
        {{$brands->appends(Request::get('page'))->links()}}

    </div>
</div>

@endsection

