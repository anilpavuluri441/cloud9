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
    <div class="col-lg-12">
        <h2>Update Client</h2> 
    </div>
</div>

<div class="row">
    <div class="col-sm-12">

        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon"><p>Client Name</p></span>
                            <input type="text" class="form-control" name="brand_name" id="brand_name" value="{{$brands->client_name}}">
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-8">
                    <div class="col-sm-7" style="padding: 0px">
                        <div class="input-group">
                            <span class="input-group-addon"><p>Client Image <span class="spancolor" style="color: red;font-size: 15px">*</span></p></span>
                            <input type="file" value="{{old('client_image')}}" class="form-control" name="brand_image" id="brand_image">

                        </div>

                    </div>
                    <div class="form-group col-sm-1">
                        <img src="{{ URL::to('/images/client-logo/'.$brands->client_image) }}" height="30px" width="100%" /> 
                    </div>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group col-sm-12">
                    <div class="checkbox checkbox-primary">
                        <?php if ($brands->is_active == '0') { ?>
                            <label class="checkbox-inline"> <input id="checkbox2" type="radio" value="0" name="is_active" checked="checked">active </label>
                        <?php } else { ?>
                            <label class="checkbox-inline"> <input id="checkbox2" type="radio" value="0" name="is_active"> active</label>
                        <?php } ?>

                    </div>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group col-sm-12">
                    <div class="checkbox checkbox-primary">
                        <?php if ($brands->is_active == '1') { ?>
                            <label class="checkbox-inline"><input id="checkbox2" type="radio" value="1" name="is_active" checked="checked">Inactive</label>
                        <?php } else { ?>
                            <label class="checkbox-inline"> <input id="checkbox2" type="radio" value="1" name="is_active"> Inactive</label>
                        <?php } ?>

                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="">
                    <button type="submit" class="btn btn-primary"> Update Client </button>
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
