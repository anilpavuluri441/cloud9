@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="row">

        <div class="page-header-actions col-xs-6">
            <h2 class="page-title font_lato" style="float: left;">Flash News</h2>
        </div>
        <div class="col-xs-6"><a class="btn btn-success" href="{{url('/createfashnews')}}" style="float: right">Create Flashnews</a></div>
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
                    <th>Title</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            @foreach ($flashnews as $flashnew)
            <tr>
               <td>{{++$i}}</td>
                <td>{{ $flashnew->title}}</td>
                <td>@if($flashnew->status == '0')
                   <span class="label label-success">Active</span>

                    @else
                      <span class="label label-danger">In Active</span>
                      @endif
                </td>
                <td width="160px"><a class="btn btn-primary btn-sm" href="editflashnews/{{ $flashnew->id }}">Edit</a>
                    <a class="btn btn-danger btn-sm" onClick="return confirm('delete confrim sure ')" href="delete-flashnews/{{ $flashnew->id }}">Delete</a></td>
            </tr>
            @endforeach
        </table>
       
        {{$flashnews->appends(Request::get('page'))->links()}}
        <table class="table table-bordered" class="row" id="anil">

        </table>

    </div>
</div>
@endsection

