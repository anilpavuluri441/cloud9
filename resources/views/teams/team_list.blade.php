@extends('layouts.app')
@section('content')

<div class="col-md-12">
 <div class="row">

  <div class="page-header-actions col-xs-6">
   <h2 class="page-title font_lato" style="float: left;">Teams</h2>
  </div>
  <div class="col-xs-6"><a class="btn btn-success" href="{{url('admin/createteam')}}" style="float: right">Create Team</a></div>
 

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
            <th>Team Name</th>
            <th>Image</th>
            <th>Team Role</th>
            <th>experiance</th>
            <th>Team About Me </th>
            <th>Status </th>
            <th>Actions</th>
        </tr>
        </thead>

    @foreach ($teams as $team)
    <tr> 
        <td>{{++$i}}</td>
        <td>{{ $team->team_name}}</td>
        <td><img src="{{ URL::to('/images/our-team/'.$team->team_image) }}" height="30px" width="30px" /></td>
        <td>{{ $team->team_role}}</td>
        <td>{{ $team->experiance}}</td>
        <td>{{ $team->team_about_me}}</td>
       <td> @if($team->is_active == '0')
           <span class="label label-success">Active</span>
            @else
        <span class="label label-danger">In Active</span>
            @endif
        </td>

        <td width="160px">
            <a class="btn btn-primary btn-sm" href="editteam/{{ $team->id }}">Edit</a>
            <a class="btn btn-danger btn-sm" href="deleteteam/{{ $team->id }}">Delete</a>
        </td>
    </tr>
    @endforeach
    </table>
  
{{$teams->appends(Request::get('page'))->links()}}

    </div>
    </div>

@endsection

