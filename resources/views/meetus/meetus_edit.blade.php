@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12">
                <h2>Update MeetUs</h2> 
        </div>

    </div>


<div class="col-sm-12">

<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">

<div class="row">

    <div class="col-md-8">
    <div class="form-group col-sm-12">
    <div class="input-group">
    <span class="input-group-addon">tittle<span class="spancolor" style="color: red;font-size: 22px">*</span> </span>
        <input type="text" value="{{$meetus->tittle}}" class="form-control" name="tittle" id="page_title" required="">
    </div>
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
    <div class="form-group col-sm-12">
    <div class="input-group">
    <label class="control-label" for="inputBasicImage">Description<span class="spancolor" style="color: red;font-size: 22px">*</span> </label>
        <textarea name="description"  maxlength="255" style="width: 100%" id="froala-editor">{{$meetus->description}}</textarea>
    </div>
    </div>
    </div>

</div>

</div>


<div class="col-sm-12">
<div class="">
  <button type="submit" class="btn btn-primary"> Update MeetUs </button>
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
