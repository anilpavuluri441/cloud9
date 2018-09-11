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
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Our Team</h2> 
            </div>
        </div>
    </div>  
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
<form class="form-horizontal" method="post" action="{{url('admin/storeteam')}}" enctype="multipart/form-data">

<div class="col-sm-12">
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
    <div class="col-md-6">
    <div class="form-group col-sm-12">
    <div class="input-group">
    <span class="input-group-addon"><p>Team Name<span class="spancolor" style="color: red;font-size: 15px">*</span></p> </span>
        <input type="text" value="{{old('team_name')}}" class="form-control" name="team_name" id="team_name">
    </div>
    </div>
    </div>

</div>
<div class="row">
<div class="col-md-6">
    <div class="form-group col-sm-12">
        <p style="color: #a94442;">Image must be size is 270*360 </p>
    <div class="input-group">
    <span class="input-group-addon">
        <p>Team Image<span class="spancolor" style="color: red;font-size: 15px">*</span> </p></span>
        <input type="file" value="{{old('team_image')}}" class="form-control" name="team_image" id="team_image">
    </div>
    </div>
    </div>
    </div>
<div class="row">
    <div class="col-md-6">
    <div class="form-group col-sm-12">
    <div class="input-group">
    <span class="input-group-addon"><p>Team Role<span class="spancolor" style="color: red;font-size: 15px">*</span></p> </span>
        <input type="text" value="{{old('team_role')}}" class="form-control" name="team_role" id="team_role">
    </div>
    </div>
    </div>

</div>

<div class="row">
    <div class="col-md-6">
    <div class="form-group col-sm-12">
    <div class="input-group">
    <span class="input-group-addon"><p>Experiance<span class="spancolor" style="color: red;font-size: 15px">*</span> </p></span>
        <input type="text" value="{{old('experiance')}}" class="form-control" name="experiance" id="experiance">
    </div>
    </div>
    </div>
</div>

<div class="row">
    </div>
<div class="row">
    <div class="col-md-6">
    <div class="form-group col-sm-12">
    <div class="input-group">
    <span class="input-group-addon"><p>Team About Me<span class="spancolor" style="color: red;font-size: 15px">*</span></p> </span>
        <input type="text" value="{{old('team_about_me')}}" class="form-control" name="team_about_me" id="team_about_me">
    </div>
    </div>
    </div>

</div>

</div>
<div class="col-sm-12">
<button type="submit" class="btn btn-primary">Create Team</button>
</div>
 {{csrf_field()}}

    

</form>
@endsection
