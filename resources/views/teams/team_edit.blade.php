@extends('layouts.app')

@section('content')
<style type="text/css">
    .input-group-addon>p{
        margin: 0 0px 0px 0px;
        width: 90px;

    text-align: left;
    }
</style>
    <div class="row">
        <div class="col-lg-12">
                <h2>Update Team</h2> 
        </div>
    </div>

<div class="row">
<div class="col-sm-12">

<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
<div class="row">
    <div class="col-sm-8">
    <div class="form-group col-sm-8">
    <div class="input-group">
    <span class="input-group-addon"><p>Team Name</p></span>
        <input type="text" class="form-control" name="team_name" id="team_name" value="{{$teams->team_name}}">
    </div>
    </div>
    </div>
</div>


    <div class="row">
    <div class="col-sm-8">
         <p style="color: #a94442;">Image must be size is 270*360 </p>
    <div class="col-sm-7" style="padding: 0px">
    <div class="input-group">

    <span class="input-group-addon">

        <p>Image <span class="spancolor" style="color: red;font-size: 15px">*</span></p></span>
      <input type="file" value="{{old('team_image')}}" class="form-control" name="team_image" id="team_image">
       
    </div>
    
    </div>
     <div class="form-group col-sm-1">
     <img src="{{ URL::to('/images/our-team/'.$teams->team_image) }}" height="30px" width="30px" /> 
     </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-8">
    <div class="form-group col-sm-8">
    <div class="input-group">
    <span class="input-group-addon"><p>Team Role</p></span>
        <input type="text" class="form-control" name="team_role" id="team_role" value="{{$teams->team_role}}">
    </div>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-8">
    <div class="form-group col-sm-8">
    <div class="input-group">
    <span class="input-group-addon"><p>Experiance</p></span>
        <input type="text" class="form-control" name="experiance" id="experiance" value="{{$teams->experiance}}">
    </div>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-8">
    <div class="form-group col-sm-8">
    <div class="input-group">
    <span class="input-group-addon"><p>Team About Me</p></span>
        <input type="text" class="form-control" name="team_about_me" id="team_about_me" value="{{$teams->team_about_me}}">
    </div>
    </div>
    </div>
</div>

<div class="col-sm-2">
    <div class="form-group col-sm-12">
    <div class="checkbox checkbox-primary">
        <?php if ($teams->is_active == '0') { ?>
           <label class="checkbox-inline"> <input id="checkbox2" type="radio" value="0" name="is_active" checked="checked">active </label>
           <?php } else{ ?>
           <label class="checkbox-inline"> <input id="checkbox2" type="radio" value="0" name="is_active"> active</label>
           <?php } ?>
   
    </div>
    </div>
    </div>

    <div class="col-sm-2">
    <div class="form-group col-sm-12">
    <div class="checkbox checkbox-primary">
        <?php if($teams->is_active == '1') {?>
        <label class="checkbox-inline"><input id="checkbox2" type="radio" value="1" name="is_active" checked="checked">Inactive</label>
        <?php } else{ ?>
         <label class="checkbox-inline"> <input id="checkbox2" type="radio" value="1" name="is_active"> Inactive</label>
        <?php } ?>

    </div>
    </div>
    </div>

<div class="col-sm-12">
<div class="">
  <button type="submit" class="btn btn-primary"> Update Team </button>
</div>
</div>
 {{csrf_field()}}

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

</form>
</div>
</div>

@endsection
