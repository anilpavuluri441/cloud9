@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Update Banner</h2> 
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
<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">

    <div class="col-sm-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
         <div class="row">
                <div class="col-sm-8">

                    <div class="">
                         <p style="color: #a94442;">Add image slider  must contain width 1920px and height 948px </p>
                    <div class="col-sm-7" style="padding: 0px">
                        

                        <div class="input-group">
                            <span class="input-group-addon"><p>Banner Image <span class="spancolor" style="color: red;font-size: 22px">*</span></p></span>
                            <input type="file" value="{{old('image')}}" class="form-control" name="image" id="image">

                        </div>
                        </div>
                    <div class="form-group col-sm-1">
                        <img src="{{ URL::to('/images/main-slider/'.$banner->image) }}" height="30px" width="30px" style="float: right;" /> 
                    </div>
                   
                    </div>

                </div>
            </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group col-sm-12">
                    <div class="input-group">
                        <span class="input-group-addon"><p>Banner Tilte<span class="spancolor" style="color: red;font-size: 22px">*</span></p> </span>
                        <input type="text" value="{{$banner->title}}" class="form-control" name="title" id="title">
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group col-sm-12">
                    <div class="input-group">
                        <span class="input-group-addon"><p>Banner Description</p> </span>
                        <textarea type="text" value="{{old('description')}}" class="form-control" name="description" id="description">{{$banner->description}} </textarea>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
   <div class="col-sm-2">
    <div class="form-group col-sm-12">
    <div class="checkbox checkbox-primary">
        <?php if ($banner->is_active == '0') { ?>
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
        <?php if($banner->is_active == '1') {?>
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
        <button type="submit" class="btn btn-primary">Update Banner</button>
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
