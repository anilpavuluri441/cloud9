@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Flash News</h2> 
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
<form class="form-horizontal" method="post" action="{{url('/storeflashnews')}}" enctype="multipart/form-data">

    <div class="col-sm-12">
        <div class="row">

            <div class="col-sm-6">
                <div class="form-group col-sm-12">
                    <div class="input-group">
                        <span class="input-group-addon">Title <span class="spancolor" style="color: red;font-size: 22px">*</span> </span>
                        <input type="text" value="{{old('title')}}" class="form-control" name="title" id="title" required="">
                    </div>
                </div>
            </div>



        </div>

    </div>
    <div class="col-sm-12">
        <button type="submit" class="btn btn-primary">Create Flash News</button>
    </div>
    {{csrf_field()}}



</form>

@endsection
