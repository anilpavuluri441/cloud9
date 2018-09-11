@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Service</h2> 
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{url('admin/services')}}">Services</a>
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
<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">

<div class="col-sm-12">
<div class="row">

    <div class="col-md-8">
    <div class="form-group col-sm-12">
    <div class="input-group">
    <span class="input-group-addon">Service Type <span class="spancolor" style="color: red;font-size: 22px">*</span> </span>
        <select class="form-control" name="service_type_id">
        <option value="{{$services->service_type_id}}">{{$services->serviceType->service_type}}</option>
         @foreach($servicetypes as $servicetype)
         @if($servicetype->id != $services->service_type_id)
        <option value="{{$servicetype->id}}">
            {{$servicetype->service_type}}
        </option>
        @endif
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
    <span class="input-group-addon">Service Name<span class="spancolor" style="color: red;font-size: 22px">*</span> </span>
        <textarea name="service_name" value="" maxlength="255" style="width: 100%" id="froala-editor">{{$services->service_name}}</textarea>
    </div>
    </div>
    </div>

</div>

<div class="row">
    <div class="col-md-12">
    <div class="form-group col-sm-12">
    <div class="input-group">
    <span class="input-group-addon">Service Description<span class="spancolor" style="color: red;font-size: 22px">*</span> </span>
        <textarea name="description" value="" maxlength="255" style="width: 100%" id="froala-editor">{{$services->description}}</textarea>
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
        <?php if ($services->is_active == '0') { ?>
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
        <?php if($services->is_active == '1') {?>
        <label class="checkbox-inline"><input id="checkbox2" type="radio" value="1" name="is_active" checked="checked">Inactive</label>
        <?php } else{ ?>
         <label class="checkbox-inline"> <input id="checkbox2" type="radio" value="1" name="is_active"> Inactive</label>
        <?php } ?>

    </div>
    </div>
    </div>
</div>

</div>
<div class="col-sm-12">
<button type="submit" class="btn btn-primary">Update Service</button>
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
