@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2>Update Flash News</h2> 
    </div>

</div>

<div class="row">
    <div class="col-sm-12">

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

            <div class="col-sm-6">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Title</span>
                        <input type="text" class="form-control" name="title" id="title" value="{{$flashnews->title}}">
                    </div>
                </div>
            </div>




            <div class="col-sm-12">
                <div class="">
                    <div class="col-sm-2">
                        <div class="form-group col-sm-12">
                            <div class="checkbox checkbox-primary">
                                <?php if ($flashnews->status == '0') { ?>
                                    <label class="checkbox-inline"> <input id="checkbox2" type="radio" value="0" name="status" checked="checked">active </label>
                                <?php } else { ?>
                                    <label class="checkbox-inline"> <input id="checkbox2" type="radio" value="0" name="status"> active</label>
                                <?php } ?>

                            </div>
                        </div>
                    </div>


                    <div class="col-sm-2">
                        <div class="form-group col-sm-12">
                            <div class="checkbox checkbox-primary">
                                <?php if ($flashnews->status == '1') { ?>
                                    <label class="checkbox-inline"><input id="checkbox2" type="radio" value="1" name="status" checked="checked">Inactive</label>
                                <?php } else { ?>
                                    <label class="checkbox-inline"> <input id="checkbox2" type="radio" value="1" name="status"> Inactive</label>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="">
                        <button type="submit" class="btn btn-primary"> Update Flash News</button>
                    </div>
                </div>
            </div>

            {{csrf_field()}}

        </form> 

    </div>
</div>

@endsection
