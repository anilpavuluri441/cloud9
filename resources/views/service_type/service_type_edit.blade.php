@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Service Type</h2> 
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
<div class="row">
    <div class="col-sm-6">
    <div class="form-group">
    <div class="input-group">
    <span class="input-group-addon"><p>Service Type</p></span>
        <input type="text" class="form-control" name="service_type" id="service_type" value="{{$servicetypes->service_type}}">
    </div>
    </div>
    </div>
</div>


<div class="row">

<div id="show-me" class="col-md-8">
<label class="control-label" for="inputBasicImage">Slider Image<span class="spancolor">*</span>
@if ($errors->has('image'))
<span class="text-danger">
{{ $errors->first('image') }}
</span>
@endif
</label>
<div class="total1">
<table id="table-21" class="add table table-bordered orderlinelist form-group" border="1" style="border-top-color: white ">
<tbody>
@if($count>0)
@foreach($attachments as $attachment)
<tr class="tabRow1" id="1item">
<td>
<div class="input-group input-group-file">
  <input type="text"  class="form-control" readonly="" placeholder="Image" value="{{$attachment->attachment_path}}">
  <input type="hidden" id="id" class="form-control" name="rfqiid[]" value="{{$attachment->id}}">
  <input type="hidden"  class="form-control" name="path[]" placeholder="Image" value="{{$attachment->attachment_path}}">
  <input type="hidden"  class="form-control" name="mimetype[]" placeholder="Image" value="{{$attachment->attachment_type}}">
  <span class="input-group-btn">
  <span class="btn btn-outline btn-file">
  <i class="wb-upload" aria-hidden="true"></i>
 <input type="file"  name="image[]" multiple="" value="{{$attachment->attachment_path}}">
  </span>
    </span>   
</div>
</td>
<td>
  <img src="{{ URL::to('/images/banner/'.$attachment->attachment_path) }}" height="30px" width="30px" /> 
</td>
<td><a  class="remove1 btn btn-icon btn-danger btn-outline btn-round" ><i class="fa fa-remove" aria-hidden="true"></i></a></td>
</tr>
@endforeach
@else
 <tr class="tabRow1" id="1item">
  <td>
    <input type="file" class ="txtMult2 form-control"  name="image[]" >
  </td>
  <td>
    <a  class=" remove1 btn btn-icon btn-danger btn-outline btn-round" ><i class="fa fa-remove" aria-hidden="true"></i></a>
  </td>
  </tr>
@endif
</tbody>
<tfoot>
<tr><th style="color:black;"><input type="button" name="" id="butVal1"  onkeyup="total1()" value="Add New Row"> </th></tr>    
</tfoot>
</table>
</div>
</div>
</div>
            <div class="row">
               

                    <div class="">
                         <p style="color: #a94442;">Add image  must contain width 600px and height 600px </p>
                    <div class="col-sm-6" style="padding: 0px">
                        

                        <div class="input-group">
                            <span class="input-group-addon"><p>Image <span class="spancolor" style="color: red;font-size: 22px">*</span></p></span>
                            <input type="file" value="{{old('smallimage')}}" class="form-control" name="smallimage" id="smallimage">

                        </div>
                        </div>
                    <div class="form-group col-sm-1">
                        <img src="{{ URL::to('/images/our-services/'.$servicetypes->image) }}" height="30px" width="30px" style="float: right;" /> 
                    </div>
                   
                    </div>

                </div>
            


<div class="row">
 <div class="col-sm-6">
    <div class="form-group">
    <div class="input-group">
    <span class="input-group-addon"><p>Service Description</p></span>
        <textarea type="text" class="form-control" name="description" id="description" value="{{$servicetypes->description}}">{{$servicetypes->description}}</textarea>
    </div>
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
        <?php if ($servicetypes->is_active == '0') { ?>
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
        <?php if($servicetypes->is_active == '1') {?>
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
<div class="">
  <button type="submit" class="btn btn-primary"> Update Servic Type</button>
</div>
</div>
</div>

 {{csrf_field()}}

</form> 

</div>
</div>
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
                 //var rowLen = $('tr.tabRow1').length;
                // $(">tbody>tr:last", "#table-21").clone().appendTo("#table-21");
                //$("tr.tabRow1:last").clone(true).appendTo("#table-21>tbody");
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
$(element).val("");
});
$(".tabRow1:last").children("td").children("image").each(function (index, element)
{
  $(element).src("");
 });
 }
});

$(document).on("click", "a.remove1", function(){

 if($(this).parents("tr").siblings("tr.tabRow1").length > 0)
 
  {
    var ans = confirm('Do you want Delete this Record...?');
      if(ans){
       var dbid = $(this).parents("tr").find("#id").val();
       //alert(dbid);
       if(dbid == ''){
          $(this).closest("tr.tabRow1").remove();
       } else {
        $(this).closest("tr.tabRow1").remove();
          $.ajax({
            type: "POST",
            url: "{{ url('admin/deletesetyajax') }}",
            data: {"id" : dbid, _token: "{{ csrf_token() }}"},
            success: function( msg ) {
              console.log(msg);
                if(msg == 1){
                  $(this).closest("tr.tabRow1").remove();
                         alert("Image Deleted Successfully...!");
                } else {
                  alert("Record Delection Failed...! Please Try Again");
                }
            }
        });
       }
     }
  }
 else
 {
    alert("you can.t remove this record");
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
