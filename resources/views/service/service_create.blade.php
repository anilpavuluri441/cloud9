@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Service</h2> 
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{url('/services')}}">Services</a>
            </div>
            </div>
    </div> 
    @if ($message = Session::get('message'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif 
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
<form class="form-horizontal" method="post" action="{{url('admin/storeservice')}}" enctype="multipart/form-data">

<div class="col-sm-12">
<div class="row">

    <div class="col-md-8">
    <div class="form-group col-sm-12">
    <div class="input-group">
    <span class="input-group-addon">Service Type <span class="spancolor" style="color: red;font-size: 22px">*</span> </span>
        <select class="form-control" name="service_type_id">
        <option value="">Select Your Option</option>
        @foreach($servicetypes as $servicetype)
        <option value="{{$servicetype->id}}">
            {{$servicetype->service_type}}
        </option>
        @endforeach
        </select>
    </div>
    </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
    <div class="form-group col-sm-12">
    <div class="input-group">
    <span class="input-group-addon">Service Details<span class="spancolor" style="color: red;font-size: 22px">*</span> </span>
        <textarea name="service_name"  maxlength="255" style="width: 100%"></textarea>
    </div>
    </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
    <div class="form-group col-sm-12">
    <div class="input-group">
    <span class="input-group-addon">Description<span class="spancolor" style="color: red;font-size: 22px">*</span> </span>
        <textarea name="description"  maxlength="255" style="width: 100%" id="froala-editor"></textarea>
    </div>
    </div>
    </div>

</div>


</div>
<div class="col-sm-12">
<button type="submit" class="btn btn-primary">Create Service</button>
</div>
 {{csrf_field()}}

    

</form>

<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
    tinymce.init({
        selector : "textarea",
        plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste jbimages"],
        toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
        image_advtab: true,
    relative_urls: false
    }); 
</script>
@endsection
