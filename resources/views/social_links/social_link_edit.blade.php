@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
                <h2>Update Social Link</h2> 
        </div>

    </div>

<div class="row">
<div class="col-sm-12">

<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">


<div class="row">
    <div class="col-sm-6">
    <div class="form-group">
    <div class="input-group">
    <span class="input-group-addon"><p>Key</p></span>
        <input type="text" class="form-control" name="key" id="key" value="{{$sociallinks->key}}">
    </div>
    </div>
    </div>
</div>
<div class="row">
   <div class="col-sm-6">
    <div class="form-group">
    <div class="input-group">
    <span class="input-group-addon"><p>Value</p></span>
        <input type="text" class="form-control" name="value" id="value" value="{{$sociallinks->value}}">
    </div>
    </div>
    </div>
    </div>
    <div class="row">
   <div class="col-sm-6">
    <div class="form-group">
    <div class="input-group">
    <span class="input-group-addon"><p>Icon Class</p></span>
        <input type="text" class="form-control" name="icon" id="icon" value="{{$sociallinks->icon}}">
    </div>
    </div>
    </div>
    </div>

</div>
</div>

<div class="col-sm-12">
<div class="">
  <button type="submit" class="btn btn-primary"> Update Social Link </button>
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
