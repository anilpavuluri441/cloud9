




<!DOCTYPE html>
<HTML>
<HEAD>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style type="text/css">

 .servicename>span:after{
    content:",";
  
  }
  .servicename>span:last-child:after{
    content:"";
  }
</style>


</HEAD>
<BODY>
<DIV >
<p ><strong>First Name:</strong>{{$first}}</p>
<p><strong>Last Name:</strong>{{$last}}</p>
<p><strong>Phone Number:</strong>{{$no}}</p>
<p><strong> EMail:</strong>{{$mail}}</p>
<p><strong>Appoitment Date:</strong>{{$appdate}}</p>
<p class="servicename"><strong>Request For Service:</strong> 

                 @foreach($requestservice as $service)
<span>{{$service}} </span>

    
       @endforeach

</p>
</DIV>

</BODY>
</HTML>
