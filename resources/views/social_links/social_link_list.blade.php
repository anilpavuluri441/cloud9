@extends('layouts.app')
@section('content')

<div class="col-md-12">
 <div class="row">

  <div class="page-header-actions col-xs-6">
   <h2 class="page-title font_lato" style="float: left;">Social Links</h2>
  </div>
  <div class="col-xs-6"><a class="btn btn-success" href="{{url('/admin/createsociallink')}}" style="float: right">Create SocialLink</a></div>
 

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
           
            <th>Value</th>
           
            <th>Actions</th>
        </tr>
        </thead>
    @foreach ($sociallinks as $sociallink)
    <tr> 
        
        <td>{{++$i}}</td>
       
        <td>{{ $sociallink->value}}</td>
       
        <td width="160px">
            <a class="btn btn-primary btn-sm" href="editsociallink/{{ $sociallink->id }}">Edit</a>
            <a class="btn btn-danger btn-sm" onClick="return confirm('delete confrim sure ')" href="deletesocial/{{ $sociallink->id }}">Delete</a>
        </td>
    </tr>
    @endforeach
    </table>
    
{{$sociallinks->appends(Request::get('page'))->links()}}

    </div>
    </div>

@endsection

