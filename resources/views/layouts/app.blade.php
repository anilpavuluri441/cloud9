<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"> 
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ URL::to('images/faveicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('images/favicon.png') }}" />
<title>TQUBE</title>

 
<!-- Bootstrap -->
<link rel="shortcut icon" href="images/lakshs.ico" />
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
 <link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap.min.css">
 <link rel="stylesheet" href="{{URL::to('/')}}/css/styles.css">
  <link rel="stylesheet" href="{{URL::to('/')}}/css/font-awesome.css">
<link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montez|Roboto" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">

<script src="{{ asset('js/app.js') }}"></script>


<script type="text/javascript">
      $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
        alert(1);
    });
</script>
<!--datepicker links -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
<style type="text/css">
  .side-menu .anil  .active a{color: red}
</style>
</head>

<body>

<div id="wrapper">

<nav class="navbar navbar-inverse navbar-fixed-top top-nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle navbar-toggle2" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <div class="logo-header">
                        <a href="{{ URL::to('') }}">
                            <img src="{{ URL::to('/logo.png') }}" width="100%" height="80%" alt="" />
                        </a>
                    </div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

    <ul class=" nav navbar-nav nave-mobile">
       <li> <a href="{{url('/create-appointment')}}"> <i class="fa fa-book" aria-hidden="true"></i> Appointment Booking Screen</a> 


       </li>
       <li> <a href="{{url('/create-appointment')}}"> <i class="fa fa-book" aria-hidden="true"></i> Appointment Booking Screen</a> </li>
        <li> <a href="{{url('/search-update')}}"> <i class="fa fa-search" aria-hidden="true"></i>RO Status Update </a> </li>
        <li> <a href="{{url('/appointment')}}"> <i class="fa fa-book" aria-hidden="true"></i>Admin Report</a> </li>
        <li> <a href="{{url('/bookappointment')}}"> <i class="fa fa-book" aria-hidden="true"></i> Book An Appointment </a> </li>
        <li> <a href="{{url('/contactlist')}}"> <i class="fa fa-phone-square" aria-hidden="true"></i> Contact Us </a> </li>
        <li> <a href="{{url('/flashnews')}}"> <i class="fa fa-newspaper-o" aria-hidden="true"></i> Flash News </a> </li>
        <li> <a href="{{url('/gallerytypeindex')}}"> <i class="fa fa-cloud-upload" aria-hidden="true"></i> Gallery Types </a> </li>
        <li> <a href="{{url('/gallerys')}}"> <i class="fa fa-image" aria-hidden="true"></i> Gallerys </a> </li>
        
        <li> <a href="{{url('/sociallinks')}}"> <i class="fa fa-anchor" aria-hidden="true"></i> Social Links </a> </li>
        <li> <a href="{{url('/new-post')}}"> <i class="fa fa-list-alt" aria-hidden="true"></i> Blog </a> </li>
        <li> <a href="{{url('/myallposts')}}"> <i class="fa fa-list-alt" aria-hidden="true"></i> My ALl Posts </a> </li>
        <li> <a href="{{url('/pages')}}"> <i class="fa fa-list-ol" aria-hidden="true"></i> Pages </a> </li>
        <li> <a href="{{url('/clients')}}"> <i class="fa fa-list-ol" aria-hidden="true"></i> Client </a> </li>
      </ul>

      <ul class="nav navbar-nav navbar-right" >
              <!-- Authentication Links --> 
              @if (Auth::guest())
              <li><a href="{{ route('login') }}"> Login</a></li>
              @else
             <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>  {{ Auth::user()->name }}  </a>
                <ul class="dropdown-menu" role="menu">
                  <li> <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">  Logout </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </li>
                </ul>
              </li>
              @endif
      </ul>
    </div>
  </div>
</nav>

  <!-- Sidebar -->
  <div id="sidebar-wrapper" >
    



 <div class="side-menu">
    
    <nav class="navbar navbar-default" role="navigation" style="background-color: #101010; color: white;">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <div class="brand-wrapper">
            <!-- Hamburger -->
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Brand -->
            <div class="brand-name-wrapper">
                <a class="navbar-brand" href="#">
                    Brand
                </a>
            </div>

            <!-- Search -->
            <a data-toggle="collapse" href="#search" class="btn btn-default" id="search-trigger">
                <span class="glyphicon glyphicon-search"></span>
            </a>

            <!-- Search body -->
            <div id="search" class="panel-collapse collapse">
                <div class="panel-body">
                    <form class="navbar-form" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-ok"></span></button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">

         <li class="panel panel-default name " id="dropdown">
                <a data-toggle="collapse" class="color" href="#dropdown-lvl">
                    <span class="fa fa-book"></span> Appointments <span style="    margin: 9px 46px 0;" class="caret"></span>
                </a>

                <!-- Dropdown level 1 -->
                <div id="dropdown-lvl" class="panel-collapse collapse {{ Request::is('create-appointment','search-update','create-appointment','inventory','appointment','parts','uoms','suppliers','taxes','admin/bookappointment') ? 'active in' : '' }}">
                    <div class="panel-body">
                        <ul class="nav navbar-nav anil">
                       
                            <li class="{{ Request::is('admin/bookappointment') ? 'active' : '' }}"> <a href="{{url('admin/bookappointment')}}"><i class="fa fa-address-book" aria-hidden="true"></i>Appointment Enquiry</a> </li>

                            <!-- Dropdown level 2 -->
                            
                        </ul>
                    </div>
                </div>


            </li>

              <li class="panel panel-default name" id="dropdown">
                <a data-toggle="collapse" class="color" href="#dropdown-lvl2">
                    <span class="fa fa-cloud-upload"></span> Gallery <span style="    margin: 9px 46px 0;" class="caret"></span>
                </a>

                <!-- Dropdown level 1 -->
                <div id="dropdown-lvl2" class="panel-collapse collapse {{ Request::is('admin/gallerys','admin/gallerytypeindex') ? 'active in' : '' }}">
                    <div class="panel-body">
                        <ul class="nav navbar-nav anil">
                               <li class="{{ Request::is('admin/gallerytypeindex') ? 'active' : '' }}"> <a href="{{url('admin/gallerytypeindex')}}"> <i class="fa fa-cloud-upload" aria-hidden="true"></i> Gallery Types </a> </li>
                              <li class="{{ Request::is('admin/gallerys') ? 'active' : '' }}"> <a href="{{url('admin/gallerys')}}"> <i class="fa fa-image" aria-hidden="true"></i> Gallerys </a> </li>
                            <!-- Dropdown level 2 -->
                            
                        </ul>
                    </div>
                </div>


            </li>

             <li class="panel panel-default name" id="dropdown">
                <a data-toggle="collapse" class="color" href="#dropdown-lvl3">
                    <span class="fa fa-briefcase"></span> Services <span style="    margin: 9px 46px 0;" class="caret"></span>
                </a>

                <!-- Dropdown level 1 -->
                <div id="dropdown-lvl3" class="panel-collapse collapse {{ Request::is('admin/servicetypes','admin/services') ? 'active in' : '' }}">
                    <div class="panel-body">
                        <ul class="nav navbar-nav anil">
                                   <li class="{{ Request::is('admin/servicetypes') ? 'active' : '' }}"> <a href="{{url('admin/servicetypes')}}"> <i class="fa fa-list-ol" aria-hidden="true"></i>Service Types</a> </li>
        <li class="{{ Request::is('admin/services') ? 'active' : '' }}"> <a href="{{url('admin/services')}}"> <i class="fa fa-list-ol" aria-hidden="true"></i> Services </a> </li>
                            <!-- Dropdown level 2 -->
                            
                        </ul>
                    </div>
                </div>


            </li>

   
            <li class="panel panel-default name" id="dropdown">
                <a data-toggle="collapse" class="color" href="#dropdown-lvl5">
                    <span class="fa fa-anchor"></span> Other Links <span style="    margin: 9px 46px 0;" class="caret"></span>
                </a>

                <!-- Dropdown level 1 -->
                <div id="dropdown-lvl5" class="panel-collapse collapse {{ Request::is('meetus','admin/contactlist','flashnews','admin/sociallinks','admin/pages','admin/teamlist','admin/clients') ? 'active in' : '' }}">
                    <div class="panel-body">
                        <ul class="nav navbar-nav anil">
                            <li class="{{ Request::is('admin/contactlist') ? 'active' : '' }}"> <a href="{{url('admin/contactlist')}}"><i class="fa fa-phone-square" aria-hidden="true"></i>Enquiry List</a></li>
        <li class="{{ Request::is('flashnews') ? 'active' : '' }}"> <a href="{{url('/flashnews')}}"> <i class="fa fa-newspaper-o" aria-hidden="true"></i>Flash News </a> </li>
        <li class="{{ Request::is('admin/sociallinks') ? 'active' : '' }}"> <a href="{{url('/admin/sociallinks')}}"> <i class="fa fa-anchor" aria-hidden="true"></i> Social Links </a> </li>
        <li class="{{ Request::is('admin/pages') ? 'active' : '' }}"> <a href="{{url('admin/pages')}}"> <i class="fa fa-list-ol" aria-hidden="true"></i> Pages </a> </li>
        <li class="{{ Request::is('admin/teamlist') ? 'active' : '' }}"> <a href="{{url('admin/teamlist')}}"> <i class="fa fa-users" aria-hidden="true"></i> Our Teams </a> </li>
        <li class="{{ Request::is('admin/clients') ? 'active' : '' }}"> <a href="{{url('admin/clients')}}"> <i class="fa fa-car" aria-hidden="true"></i>Clients </a> </li>
        <li class="{{ Request::is('meetus') ? 'active' : '' }}"> <a href="{{url('/meetus')}}"> <i class="fa fa-clock-o" aria-hidden="true"></i> Meet Us </a> </li>
       

                            <!-- Dropdown level 2 -->
                            
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

    </div> 
  </div>
  <!-- Page content -->
  <div id="page-content-wrapper">
    <div class="page-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12"> @yield('content') </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $("#successMessage" ).fadeOut(6000);
  </script>
  

</body>
</html>
