@extends('layouts.app')
@section('content')
<div class="col-md-12">
    <div class="row">
        <div class="page-header-actions col-xs-6">
            <h2 class="page-title font_lato" style="float: left;">Enquiry List</h2>
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
                    <th>Name</th>
                    <th>Eamil</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Message</th>
                    <th>Mobile Number</th>
                    <th>Action</th>

                </tr>
            </thead>
            @foreach ($contactus as $contact)
            <tr> 
                <td>{{++$i}}</td>
                <td>{{$contact->name}}</td>
                <td>{{ $contact->email}}</td>
                <td>{{ $contact->city}}</td>
                <td>{{ $contact->state}}</td>
                <td>{{$contact->zip}}</td>
                <td>{{$contact->message}}</td>
                <td>{{$contact->mobile_number}}</td>
                <td><a class="btn btn-danger btn-sm" onClick="return confirm('delete confrim sure ')" href="delete-contactlist/{{ $contact->id }}">Delete</a></td>
            </tr>
            @endforeach
        </table>
       
        {{$contactus->appends(Request::get('page'))->links()}}

    </div>
</div>


@endsection

