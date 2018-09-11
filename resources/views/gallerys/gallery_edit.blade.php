@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2>Update Gallery</h2> 
    </div>
</div>

<div class="row">
    <div class="col-sm-12">

        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-8">

                    <div class="">
                         <p style="color: #a94442;">Add image  must contain width 500px and height 313px </p>
                    <div class="col-sm-7" style="padding: 0px">
                        

                        <div class="input-group">
                            <span class="input-group-addon"><p>Image <span class="spancolor" style="color: red;font-size: 22px">*</span></p></span>
                            <input type="file" value="{{old('image')}}" class="form-control" name="image" id="image">

                        </div>
                        </div>
                    <div class="form-group col-sm-1">
                        <img src="{{ URL::to('/images/latest-projects/'.$gallerys->image) }}" height="30px" width="30px" style="float: right;" /> 
                    </div>
                   
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon"><p>Gallery Type <span class="spancolor" style="color: red;font-size: 22px">*</span></p> </span>
                            <select class="form-control" name="gallery_type_id">
                                @foreach($galleryTypes as $galleryType)
                                @if($gallerys->gallery_type_id == $galleryType->id)
                            <option value="{{$galleryType->id}}" selected>{{$gallerys->galleryType->type}}</option>
                                @else
                                <option value="{{$galleryType->id}}">
                                    {{$galleryType->type}}
                                </option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon"><p>Image Tilte<span class="spancolor" style="color: red;font-size: 22px">*</span></p></span>
                            <input type="text" class="form-control" name="image_tilte" id="image_tilte" value="{{$gallerys->image_tilte}}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon"><p>Image Description</p></span>
                            <textarea type="text" class="form-control" name="description" id="description" value="{{$gallerys->description}}">{{$gallerys->description}}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="">
                    <button type="submit" class="btn btn-primary"> Update Gallery </button>
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
