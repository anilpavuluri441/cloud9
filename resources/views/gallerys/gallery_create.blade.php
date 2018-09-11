@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add Gallery</h2> 
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
<form class="form-horizontal" method="post" action="{{url('admin/storegallery')}}" enctype="multipart/form-data">

    <div class="col-sm-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="row">

            <div class="col-md-6">
                <div class="form-group col-sm-12">
                     <p style="color: #a94442;">Add image must contain width 500px and height 313px </p>
                    <div class="input-group">
                        <span class="input-group-addon"><p>Image <span class="spancolor" style="color: red;font-size: 22px">*</span></p> </span>
                        <input type="file" value="{{old('image')}}" class="form-control" name="image" id="image">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <div class="form-group col-sm-12">
                    <div class="input-group">
                        <span class="input-group-addon"><p>Gallery Type <span class="spancolor" style="color: red;font-size: 22px">*</span></p> </span>
                        <select class="form-control" name="gallery_type_id">
                            <option value="" disabled selected>Select your option</option>
                            @foreach($galleryTypes as $galleryType)
                            <option value="{{$galleryType->id}}">
                                {{$galleryType->type}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group col-sm-12">
                    <div class="input-group">
                        <span class="input-group-addon"><p>Image Tilte<span class="spancolor" style="color: red;font-size: 22px">*</span></p> </span>
                        <input type="text" value="{{old('image_tilte')}}" class="form-control" name="image_tilte" id="image_tilte">
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group col-sm-12">
                    <div class="input-group">
                        <span class="input-group-addon"><p>Image Description</p> </span>
                        <textarea type="text" value="{{old('description')}}" class="form-control" name="description" id="description"> </textarea>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="col-sm-12">
        <button type="submit" class="btn btn-primary">Create Gallery</button>
    </div>
    {{csrf_field()}}



</form>
@endsection
