@extends('layouts.app')

@section('content')
<style type="text/css">
    .input-group-addon>p{
        margin: 0 0px 0px 0px;
        width: 110px;

    text-align: left;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <h2>Update Appointment Enquirey</h2> 
    </div>

</div>

<div class="row">
    <div class="col-sm-12">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><p>First Name</p></span>
                        <input type="text" class="form-control" name="firstname" id="firstname" value="{{$bookappointments->first_name}}">
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><p>Email</p></span>
                        <input type="email" class="form-control" name="email" id="email" value="{{$bookappointments->email}}">
                    </div>
                </div>
            </div>
             </div>
            <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><p>Phone Number</p></span>
                        <input type="text" class="form-control" name="phonenumber" id="phonenumber" value="{{$bookappointments->phone_number}}">
                    </div>
                </div>
            </div>
             </div>
            <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><p>Chose Your Date</p></span>
                        <input type="text" class="form-control" name="chose_your_date" id="chose_your_date" value="{{$bookappointments->date}}">
                    </div>
                </div>
            </div>
             </div>
            <div class="row">
          
           
           




            <div class="col-sm-12">
                <div class="">
                    <div class="col-sm-2">
                        <div class="form-group col-sm-12">
                            <div class="checkbox checkbox-primary">
                                <?php if ($bookappointments->status == 'new') { ?>
                                    <label class="checkbox-inline"> <input id="checkbox2" type="radio" value="new" name="status" checked="checked">New </label>
                                <?php } else { ?>
                                    <label class="checkbox-inline"> <input id="checkbox2" type="radio" value="new" name="status"> New</label>
                                <?php } ?>

                            </div>
                        </div>
                    </div>


                    <div class="col-sm-2">
                        <div class="form-group col-sm-12">
                            <div class="checkbox checkbox-primary">
                                <?php if ($bookappointments->status == 'closed') { ?>
                                    <label class="checkbox-inline"><input id="checkbox2" type="radio" value="closed" name="status" checked="checked">Closed</label>
                                <?php } else { ?>
                                    <label class="checkbox-inline"> <input id="checkbox2" type="radio" value="closed" name="status"> Closed</label>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
</div>
                <div class="col-sm-12">
                    <div class="">
                        <button type="submit" class="btn btn-primary"> Update Appointment Enquirey</button>
                    </div>
                </div>
            </div>

            {{csrf_field()}}

        </form> 

    </div>
</div>

@endsection
