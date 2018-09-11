@extends('layouts.app')

@section('content')
<style type="text/css">
    .input-group-addon>p{
        margin: 0 0px 0px 0px;
        width: 100px;

    text-align: left;
    }
</style>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Our Client</h2> 
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
<form class="form-horizontal" method="post" action="{{url('admin/storeclient')}}" enctype="multipart/form-data">

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
                        <span class="input-group-addon"><p>Client Name<span class="spancolor" style="color: red;font-size: 15px">*</span> </p></span>
                        <input type="text" value="{{old('brand_name')}}" class="form-control" name="brand_name" id="brand_name">
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group col-sm-12">
                    <div class="input-group">
                        <span class="input-group-addon"><p>Client Image<span class="spancolor" style="color: red;font-size: 15px">*</span></p> </span>
                        <input type="file" value="{{old('brand_image')}}" class="form-control" name="brand_image" id="brand_image">
                    </div>
                </div>
            </div>
        </div>
      

    </div>
    <div class="col-sm-12">
        <button type="submit" class="btn btn-primary">Create Client</button>
    </div>
    {{csrf_field()}}



</form>
@endsection
