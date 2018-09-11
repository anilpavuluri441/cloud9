@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Social Link</h2> 
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
<form class="form-horizontal" method="post" action="{{url('admin/storesociallink')}}" enctype="multipart/form-data">

<div class="col-sm-12">
<div class="row">

    <div class="col-md-6">
    <div class="form-group col-sm-12">
    <div class="input-group">
    <span class="input-group-addon"><p>key <span class="spancolor" style="color: red;font-size: 22px">*</span></p> </span>
        <input type="text" value="{{old('key')}}" class="form-control" name="key" id="key" required="">
    </div>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
    <div class="form-group col-sm-12">
    <div class="input-group">
    <span class="input-group-addon"><p>Value<span class="spancolor" style="color: red;font-size: 22px">*</span></p></span>
        <input type="text" value="{{old('value')}}" class="form-control" name="value" id="value" required="">
    </div>
    </div>
    </div>
    </div>
<div class="row">
    <div class="col-md-6">
    <div class="form-group col-sm-12">
    <div class="input-group">
    <span class="input-group-addon"><p>Icon Class<span class="spancolor" style="color: red;font-size: 22px">*</span></p></span>
        <input type="text" value="{{old('icon')}}" class="form-control" name="icon" id="icon" required="">
    </div>
    </div>
    </div>

</div>

</div>

<div class="col-sm-12">
<button type="submit" class="btn btn-primary">Create Social Link</button>
</div>
 {{csrf_field()}}

    

</form>

@endsection
