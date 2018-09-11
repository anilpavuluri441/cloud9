@extends('layouts.app')
@section('content')
<style type="text/css">
  .servicename>span:after{
    content:",";
  }
  .servicename>span:last-child:after{
    content:"";
  }
</style>
<div class="col-md-12">
    <div class="row">
        <div class="page-header-actions col-xs-6">
            <h2 class="page-title font_lato" style="float: left;">Appointments Enquiry</h2>
        </div>

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
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Contact Preference</th>
                    <th>Service Reqired</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>

                </tr>

            </thead>
            @foreach ($bookappointments as $bookappointment)
            <tr> 
                <td>{{++$i}}</td>
                <td>{{$bookappointment->first_name}}</td>
                <td>{{ $bookappointment->last_name}}</td>
                <td>{{ $bookappointment->email}}</td>
                <td>{{ $bookappointment->phone_number}}</td>
                <td>{{$bookappointment->contact_preference}}</td>
              <?php $services = explode(',', $bookappointment->service_req);?>
                <td class="servicename">@foreach($services as $service)

<span> {{$service}} </span>

    
       @endforeach



               </td>
                <td>{{$bookappointment->date}}</td>
                <td>@if($bookappointment->status == 'new')
                <span class="label label-success">New</span>
                @else
                <span class="label label-danger">Closed</span>
                @endif
                </td>
                <td><a class="btn btn-primary btn-sm" href="edit-bookappointment/{{ $bookappointment->id }}" >Edit</a></td>
            </tr>
            @endforeach
        </table>
        {{$bookappointments->appends(Request::get('page'))->links()}}

    </div>
</div>


@endsection

