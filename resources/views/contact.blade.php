@extends ('template') @section('content')
<!-- <link href="{{URL::to('/')}}/css/style-lay1.css" rel="stylesheet"> -->

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);


  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
    -o-font-smoothing: antialiased;
    font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
  }

  #contact input[type="text"],
  #contact input[type="email"],
  #contact input[type="tel"],
  #contact input[type="url"],
  #contact textarea,
  #contact button[type="submit"] {
    font: 400 12px/16px "Open Sans", Helvetica, Arial, sans-serif;
  }


  #contact h3 {
    color: #F96;
    display: block;
    font-size: 30px;
    font-weight: 400;
  }

  #contact h4 {
    margin: 5px 0 15px;
    display: block;
    font-size: 13px;
  }

  fieldset {
    border: medium none !important;
    margin: 0 0 10px;
    min-width: 100%;
    padding: 0;
    width: 100%;
  }

  #contact input[type="text"],
  #contact input[type="email"],
  #contact input[type="tel"],
  #contact input[type="url"],
  #contact textarea {
    width: 100%;
    border: 1px solid #CCC;
    background: #FFF;
    margin: 0 0 5px;
    padding: 10px;
  }

  #contact input[type="text"]:hover,
  #contact input[type="email"]:hover,
  #contact input[type="tel"]:hover,
  #contact input[type="url"]:hover,
  #contact textarea:hover {
    -webkit-transition: border-color 0.3s ease-in-out;
    -moz-transition: border-color 0.3s ease-in-out;
    transition: border-color 0.3s ease-in-out;
    border: 1px solid #AAA;
  }

  #contact textarea {
    height: 100px;
    max-width: 100%;
    resize: none;
  }

  #contact button[type="submit"] {
    cursor: pointer;
    width: 100%;
    border: none;
    background: #0CF;
    color: #FFF;
    margin: 0 0 5px;
    padding: 10px;
    font-size: 15px;
  }

  #contact button[type="submit"]:hover {
    background: #09C;
    -webkit-transition: background 0.3s ease-in-out;
    -moz-transition: background 0.3s ease-in-out;
    transition: background-color 0.3s ease-in-out;
  }

  #contact button[type="submit"]:active {
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
  }

  #contact input:focus,
  #contact textarea:focus {
    outline: 0;
    border: 1px solid #999;
  }

  ::-webkit-input-placeholder {
    color: #888;
  }

  :-moz-placeholder {
    color: #888;
  }

  ::-moz-placeholder {
    color: #888;
  }

  :-ms-input-placeholder {
    color: #888;
  }

  input:invalid {
    border: 2px solid red;
  }

  #darkBack {
    background: rgba(255, 255, 255, 0.75);
    width: 100%;
    height: 100%;
  }

  #timeDiv {
    font-size: 15px;
    text-transform: uppercase;
    position: relative;
    max-width: 334px;
    background: #fff;
    width: 85%;
    margin: 0 auto;
    top: 50%;
    padding: 10px;
    border-radius: 3px;
    -webkit-box-shadow: 0 8px 16px -8px #adadad;
    -moz-box-shadow: 0 8px 16px -8px #adadad;
    box-shadow: 0 8px 16px -8px #adadad;
    display: inline-block;
    vertical-align: top;
    font-weight: 600;
  }

  .open {
    color: #27ae60;
    border: 2px solid #27ae60;
  }

  .closed {
    color: rgba(231, 76, 60, 0.85);
    border: 2px solid rgba(231, 76, 60, 0.8);
  }

  .viewOpen {
    font-size: 15px;

    position: relative;
    display: inline-block;
    vertical-align: top;
    border: 2px solid rgba(70, 70, 70, 0.7);
    max-width: 170px;
    background: #fff;
    width: 100%;
    color: rgba(70, 70, 70, 0.8);
    margin: 0 auto;
    top: 50%;
    padding: 10px;
    border-radius: 3px;
    -webkit-box-shadow: 0 8px 16px -8px #adadad;
    -moz-box-shadow: 0 8px 16px -8px #adadad;
    box-shadow: 0 8px 16px -8px #adadad;
    cursor: pointer;
  }

  .viewOpen i {
    color: rgba(70, 70, 70, 0.8);
  }

  @media all and (max-width: 600px) {
    #timeDiv {
      margin-bottom: 20px;
    }
  }

  @media all and (min-width: 601px) {
    #timeDiv {
      margin-right: 15px;
    }
  }

  .dateTime {
    max-width: 320px;
    margin: 0 auto;
  }

  .day {
    display: inline-block;
    float: left;
  }

  .time {
    display: inline-block;
    float: right
  }

  .today {
    color: rgb(200, 85, 39);
    font-weight: 600;
  }

  @media all and (max-height: 420px) {
    #timeDiv,
    .viewOpen {
      top: 60%;
    }
  }

  /* view hours modal */

  @keyframes fade-in {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }

  .modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(173, 173, 173, 0.5);
    display: none;
  }

  #modal-state {
    display: none;
  }

  #modal-state:checked+.modal-overlay {
    opacity: 1;
    animation: fade-in .4s;
    display: block;
  }

  .modal {
    position: absolute;
    margin: 0 auto;
    padding: 30px 25px;
    background: #fff;
    right: 0;
    left: 0;
    text-align: center;
    box-shadow: 0px 12px 24px rgba(0, 0, 0, 0.2);
    max-width: 400px;
    line-height: 1.8;
    display: block;
    bottom: initial;
  }



  .modal h2 {
    margin-top: 0;
    line-height: 25px;
    font-size: 22px;
    border-bottom: 1px solid #dce0d8;
    margin-bottom: 10px;
    padding-bottom: 10px;
    font-weight: 400;
  }

  @media all and (max-width: 470px) {
    .modal {
      width: 75%;
      display: block;
    }
    .modal h2 {
      font-size: 20px;
    }
  }

  #modal-state:checked+.modal-overlay .modal {
    top: 20%;
  }

  .modal-overlay-close {
    height: 100%;
    width: 100%;
    position: absolute;
    left: 0;
    top: 0;
  }

  .button-close {
    text-decoration: none;
    position: absolute;
    color: #fff;
    background: #464646;
    padding: 0px 7px;
    font-weight: bold;
    top: 0px;
    right: 0;
    cursor: pointer
  }

  .maps-heading li {
    font-size: 15px;
  }
</style>
<section class="header-banner">
  <div class="bg-content" style="background:url(images/content-banner.jpg) no-repeat;background-size:cover">
    <div class="container">
      <h1>Contact</h1>
      <!-- <p>Give yourself, and rejuvenate your mind & soul</p> -->
    </div>
  </div>
</section>

<section class="salon-services">
  <section class="section2">
    <div class="container">
      <h1><strong>Contact</strong></h1>
      <div class="salon-services1">
        <div class="col-md-6 salon-occasion">

          <div style="background-color:; height: 15px;" class="nicdark_section"></div>
          <div class="wpb_wrapper">
            <p>If you would like to schedule an appointment please fill out the contact request form below or email us directly
              or give us a call today. As a courtesy, we ask for 24 hours notice on all canceled appointments.</p>
            <div style="background-color:; height: 10px;" class="nicdark_section"></div>
            <h3 style="color: #737373;; text-align:; font-size:20px; line-height:20px; letter-spacing: px; font-weight:normal;" class=" nd_options_first_font ">Write
              Us</h3>
            <div style="background-color:; height: 20px;" class="nicdark_section"></div>
            <div class="nd_options_section nd_options_line_height_0  nd_options_text_align_left ">
              <span style="height:2px; width:30px; background-color:#f1f1f1;" class="nd_options_display_inline_block"></span>
            </div>
            <div style="background-color:; height: 20px;" class="nicdark_section"></div>
            <div class="map-heading">
              <form id="contact" action="{{URL::to('/contact_store')}}" method="post">
                {{ csrf_field() }}
                <div class="col-lg-12" id="successMessage">
                  @if(session('msg_success'))
                  <div class="alert dark alert-icon alert-success alert-dismissible alertDismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                    <i class="icon wb-check" aria-hidden="true"></i>
                    {{session('msg_success')}}
                  </div>
                  @endif

                </div>
                <h4>Contact us today, and get reply with in 24 hours!</h4>
                <fieldset>
                  <input placeholder="Your name" type="text" tabindex="1" autofocus name="username" value="{{ old('username') }}" required="">
                </fieldset>
                <fieldset>
                  <input placeholder="Your Email Address" type="email" tabindex="2" name="email" value="{{ old('email') }}" required>
                </fieldset>
                <fieldset>
                  <input placeholder="Your Phone Number" type="text" tabindex="3" name="phone" value="{{ old('phone')}}" required>
                </fieldset>
                <fieldset>
                  <textarea placeholder="Type your Message Here...." tabindex="5" name="message" value="{{ old('message') }}" required></textarea>
                </fieldset>
                <fieldset>
                  <button name="submit" type="submit" id="contact-submit" data-submit="...Sending" value="{{ old('phonenumber') }}" required>Submit</button>
                </fieldset>
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
        </div>
        <div class="col-md-6">
          <div><div class="maps-heading">
<div id="main">
   <div id="darkBack"></div>
   <div id="timeDiv"></div>
  <label class="viewOpen" for="modal-state">View Hours&nbsp;&nbsp;<i class="fa fa-clock-o"></i></label>
  <input type="checkbox" name="modal-state" id="modal-state">
  <div class="modal-overlay">
    <label for="modal-state" class="modal-overlay-close"></label>
  <div class="modal">
      <label class="button-close" for="modal-state"><i class="fa fa-times"></i></label>
      <h2>We are Open At These Times</h2>
      <div id="Monday" class="dateTime">
        <div class="day">Monday</div>
        <div class="time">9am - 6pm</div>
      </div>
      <br>
      <div id="Tuesday" class="dateTime">
        <div class="day">Tuesday</div>
        <div class="time">9am - 6pm</div>
      </div>
      <br>
      <div id="Wednesday" class="dateTime">
        <div class="day">Wednesday</div>
        <div class="time">9am - 6pm</div>
      </div>
      <br>
      <div id="Thursday" class="dateTime">
        <div class="day">Thursday</div>
        <div class="time">9am - 6pm</div>
      </div>
      <br>
      <div id="Friday" class="dateTime">
        <div class="day">Friday</div>
        <div class="time">9am - 6pm</div>
      </div>
      <br>
      <div id="Saturday" class="dateTime">
        <div class="day">Saturday</div>
        <div class="time">9am - 6pm</div>
      </div>
      <br>
      <div id="Sunady" class="dateTime">
        <div class="day">Sunday</div>
        <div class="time">9am - 1pm</div>
      </div>
    </div>
  </div>
</div>
<h3>Address & phone</h3>
<address> 
   <li><i class="fa fa-hand-o-right ok" aria-hidden="true"></i>Karlstraße 120</li><br/> 
   <li><i class="fa fa-hand-o-right ok" aria-hidden="true"></i>D-40210 Düsseldorf</li><br/> 
   <li><i class="fa fa-hand-o-right ok" aria-hidden="true"></i>Germany</li><br/> 
   <li><i class="fa fa-hand-o-right ok" aria-hidden="true"></i>Tel: +49 1234 5678</li><br/> 
   <li><i class="fa fa-hand-o-right ok" aria-hidden="true"></i>Fax: +49 1234 5679 </li>
</address>

<h3>Map & directions</h3>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15225.783246379584!2d78.445955!3d17.4383637!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf449a949ebf49dcd!2sZoom+4+Web+Technologies!5e0!3m2!1sen!2sin!4v1536395026575" width="530" height="130" frameborder="0" style="border:0" allowfullscreen></iframe> 
</div></div>

        </div>
      </div>
    </div>
  </section>

  @include ('footer')

  <script type="text/javascript">
  var now = new Date();
var weekday = new Array(7);
weekday[0] = "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";

var checkTime = function() {
 var now = new Date();
  
  var today = weekday[now.getDay()];
  var timeDiv = document.getElementById('timeDiv');
  var dayOfWeek = now.getDay();
  //alert(dayOfWeek);
  var hour = now.getHours();

  var minutes = now.getMinutes();
  var seconds = now.getSeconds();

  //add AM or PM
  var suffix =   hour + '.' + minutes  ;
  //alert(suffix);

  // add 0 to one digit minutes
  if (minutes < 10) {
    minutes = "0" + minutes
  };

  if ((dayOfWeek == 1 || dayOfWeek == 5  || dayOfWeek == 6  || dayOfWeek == 7 ) && suffix >= 9.00 && suffix <= 18.00 ) {
    //i.e. show 1:15 instead of 13:15
    timeDiv.innerHTML = 'it\'s ' + today + ' ' + hour + ':' + minutes  + ':' + seconds  + ' - we\ are open! ';
    timeDiv.className = 'open';
  } 
  
  else if ((dayOfWeek == 3 || dayOfWeek == 4 || dayOfWeek == 2) && suffix >= 9.00 && suffix <= 18.00) {
  
    timeDiv.innerHTML = ' it\'s ' + today + ' ' + hour + ':' + minutes  + ':' + seconds  + ' - we\ are open!';
    timeDiv.className = 'open';
  } 

  else if((dayOfWeek == 0) && suffix >= 9.00 && suffix <= 1.00) {
  
    timeDiv.innerHTML = 'it\'s ' + today + ' ' + hour + ':' + minutes  + ':' + seconds  + ' - we\ are open!';
    timeDiv.className = 'open';
  } 
  
  else {
    
    timeDiv.innerHTML = 'It\'s ' + today + ' ' + hour + ':' + minutes + ':' +  seconds   + ' - we\ are closed!';
    timeDiv.className = 'closed';
  }
};

var currentDay = weekday[now.getDay()];
var currentDayID = "#" + currentDay; 
console.log(currentDayID);
//alert(currentDayID);//gets todays weekday and turns it into id
$(currentDayID).toggleClass("today"); //hightlights today in the view hours modal popup

setInterval(checkTime, 1000);
checkTime();
</script>
  @endsection
