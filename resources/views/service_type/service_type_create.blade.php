@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Service Type</h2> 
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{url('admin/servicetypes')}}">ServiceTypes</a>
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
<form class="form-horizontal" method="post" action="{{url('admin/storeservicetype')}}" enctype="multipart/form-data">

<div class="col-sm-12">
<div class="row">

    <div class="col-md-6">
    <div class="form-group col-sm-12">
    <div class="input-group">
    <span class="input-group-addon"><p>Service Type <span class="spancolor" style="color: red;font-size: 22px">*</span> </p></span>
        <input type="text" value="{{old('service_type')}}" class="form-control" name="service_type" id="service_type" required="">
    </div>
    </div>
    </div>
</div>


 <div class="row">
<div class="col-md-8">
    <label class="control-label" for="inputBasicImage">Slider Image<span class="spancolor" style="color: red;font-size: 22px">*</span> (Add image sliders must contain width 1920px and height 1080px)
  @if ($errors->has('image'))
  <span class="text-danger">
  {{ $errors->first('image') }}
  </span>
  @endif
  </label>

 <div id="show-me" class="col-md-12">
 
  <div class="total1">
  <table id="table-21" class="add table table-bordered orderlinelist form-group" border="1" style="border-top-color: white;">
  <tbody>
  <tr class="tabRow1" id="1item">
  <td>
    <input type="file" class ="txtMult2 form-control"  name="image[]" >
  </td>
  <td>
    <a  class=" remove1 btn btn-icon btn-danger btn-outline btn-round" ><i class="fa fa-remove" aria-hidden="true"></i></a>
  </td>
  </tr>
  </tbody>
  <tfoot>
  <tr><th style="color:black;"><input type="button" name="" id="butVal1"  onkeyup="total1()" value="Add New Row"> </th></tr>    
  </tfoot>
  </table>
</div>
</div>
</div>
           
</div>
 <div class="row">

            <div class="col-md-6">
                <div class="form-group col-sm-12">
                     <p style="color: #a94442;">Add image must contain width 600px and height 600px </p>
                    <div class="input-group">
                        <span class="input-group-addon"><p>Small Image <span class="spancolor" style="color: red;font-size: 22px">*</span></p> </span>
                        <input type="file" value="{{old('smallimage')}}" class="form-control" name="smallimage" id="smallimage">
                    </div>
                </div>
            </div>
        </div>

<div class="row">
    <div class="col-md-6">
    <div class="form-group col-sm-12">
    <div class="input-group">
    <span class="input-group-addon"><p>Service Description</p> </span>
        <textarea type="text" value="{{old('description')}}" class="form-control" name="description" id="description" ></textarea>
    </div>
    </div>
    </div>

</div>

</div>
<div class="col-sm-12">
<button type="submit" class="btn btn-primary">Create Service Type</button>
</div>
 {{csrf_field()}}

    

</form>
<script type="text/javascript">
  
  $(document).ready(function(){
    $('#watch-me').click(function(){
        if(this.checked){
            $('#show-me').show();
          }
        else{
            $('#show-me').hide();
            }
    });
});


   $(document).ready(function () {

           var nowDate = new Date();
var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
 $("[id=datepicker]").datepicker({ 
    
       startDate: today,
       format: "yyyy-mm-dd",
        autoclose: true
    });

        $('#butVal1').click(function () {

            var rowLen = $('tr.tabRow1').length;
            //alert(rowLen);

            if (rowLen > 9)
            {
                alert("no of row is reached 10");
            } else
            {
             var row=$(">tbody>tr:last", "#table-21").clone().appendTo("#table-21>tbody");

 $(":text[id^=datepicker]", row).removeClass("datepicker hasDatepicker").attr("id", "datepicker"+rowLen).datepicker({ 
    
       startDate: today,
       format: "yyyy-mm-dd",
        autoclose: true
    });

                $(".tabRow1:last").children("td").children("input").each(function (index, element) {
                    $(element).val("");
                    
                });
                 $(".tabRow1:last").children("td").children("div").children("input").each(function (index, element) {
                    $(element).val("1");
                    
                });
                  $(".tabRow1:last").children("td").children("textarea").each(function (index, element) {
                    $(element).val("");
                    
                });
       }
        });

        $(document).on("click", "a.remove1", function () {

            if ($(this).parents("tr").siblings("tr.tabRow1").length > 0)
            {
                $(this).closest("tr.tabRow1").remove();
            } else
            {
                alert("you can.t remove1 this record");
            }
        });


//FOR Serial Number- use ON 
        $(document).on("click", ".add, .remove1", function () {

            $("td.sno1").each(function (index, element) {
                $(element).text(index + 1);
            });
        });
    });

</script>

@endsection
