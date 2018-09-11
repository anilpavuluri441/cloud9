
<!DOCTYPE html>

<html lang="en">

<head>

  <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- FAVICONS ICON -->
  <!--  // <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" /> -->
    
    <!-- PAGE TITLE HERE -->
    <title>TQUBE</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
  <![endif] -->
    
    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/fontawesome/css/font-awesome.min.css" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/flaticon.min.css">
    <!-- ANIMATE STYLE SHEET --> 
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/animate.min.css">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/owl.carousel.min.css">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/bootstrap-select.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/loader.min.css">    
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/style.css">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{URL::to('/')}}/css/skin/skin-1.css">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/custom.css">
   

    
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/plugins/revolution/revolution/css/navigation.css">
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>
<style type="text/css">
.active1 > a {
    color: #EC5598 !important;
}

.footer-bottom {
    padding: 30px 0px 30px 0px;
    color: #787878;
    font-size: 13px;
}
</style>
<!-- JAVASCRIPT  FILES ========================================= --> 
<script type="text/javascript"  src="{{URL::to('/')}}/js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
<script type="text/javascript"  src="{{URL::to('/')}}/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

<body>
 
  <div class="page-wraper"> 
        
        <!-- HEADER START -->
        <header class="site-header header-style-6">
        
            <!-- Search Form -->
             <div class="main-bar header-middle bg-white">
                <div class="container">
                    <div class="logo-header">
                        <a href="{{URL::to('/')}}">
                           <h2 style="    font-family: cursive;"><span style="color:  #ec5598;letter-spacing: 0px;font-size: 36px;">T</span>QUBE</h2>
                        </a>
                    </div>
                    <div class="header-info">
                        <ul>
                          <li>
                                <div>
                                    <div class="icon-sm">
                                        <span class="icon-cell  text-primary"><i class="flaticon-placeholder"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <strong>Ammerpet</strong>
                                        <span>Near Maytrivanmam</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="icon-sm">
                                        <span class="icon-cell  text-primary"><i class="flaticon-smartphone"></i></span>
                                    </div>
                                    <div class="icon-content">
                                        <strong>Phone Number</strong>
                                        <span>xxxx-xxxxxxxx</span>
                                    </div>
                                </div>
                            </li>
                            <li class="btn-col-last">
                                <a class="site-button text-uppercase radius-sm font-weight-700" href="{{URL::to('/book-appointment')}}">Request An Appointment</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Search Form -->
            <div class="sticky-header main-bar-wraper">
                <div class="main-bar header-botton nav-bg-secondry">
                    <div class="container">
                        <!-- NAV Toggle Button -->
                        <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- ETRA Nav -->
                      
                   
                        
                        <!-- MAIN Nav -->
                        <div class="header-nav navbar-collapse collapse ">
                            <ul class=" nav navbar-nav">
                                <li class="{{ Request::path() == '/' ? 'active' : '' }}">
                                  <a href="{{URL::to('/')}}">Home</a>
                                </li>
                                  <li class="{{ Request::path() == 'about' ? 'active1' : '' }}">
                                            <a  href="{{URL::to('/about')}}">About us</a>
                                           
                                        </li>
                                          <li class="{{ Request::path() == 'services' ? 'active' : '' }}">
                                  <a href="{{URL::to('/services')}}">Services</a>
                                </li>
                               
                                 <li class="{{ Request::path() == 'gallery' ? 'active' : '' }}">
                                  <a href="{{URL::to('/gallery')}}">Gallery</a>
                                </li>
                                  <li class="{{ Request::path() == 'career' ? 'active1' : '' }}">
                                            <a  href="{{URL::to('/career')}}">Career</a>
                                        </li>
                                       
                                      
                                        <li class="{{ Request::path() == 'faq' ? 'active1' : '' }}">
                                            <a  href="{{URL::to('/faq')}}">FAQ</a>
                                          
                                        </li>
                                      
                                        <li class="{{ Request::path() == 'our_team' ? 'active1' : '' }}"><a href="{{URL::to('/our_team')}}">Our Team</a></li>
                                              
                                      
                                       
                                     
                                   
                                <li class="{{ Request::path() == 'contact-us' ? 'active' : '' }}">
                                  <a href="{{URL::to('/contact-us')}}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>            
            
        </header>
        <!-- HEADER END -->
        
        <!-- CONTENT START -->
        @yield('content')
  <!-- CONTENT END -->
        
        <!-- FOOTER START -->
        <footer class="site-footer footer-light">
            <!-- COLL-TO ACTION START -->
            <div class="section-full overlay-wraper bg-primary" style="background-image:url(images/background/bg-7.png);">
                
                <div class="section-content ">
                <!-- COLL-TO ACTION START -->
                    <div class="wt-subscribe-box">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-sm-8">
                                    <div class="call-to-action-left p-tb20 p-r50">
                                        <h4 class="text-uppercase m-b10">We are ready to build your dream tell us more about your project</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor.</p>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="call-to-action-right p-tb30">
                                          <button type="button" class="site-button site-button-secondry text-uppercase radius-sm font-weight-600 " data-toggle="modal" data-target="#with-form">Contact Us <i class="fa fa-angle-double-right"></i></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
           
            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom overlay-wraper">
               <div class="overlay-main"></div>
                <div class="constrot-strip"></div>
                <div class="container p-t30">
                    <div class="row">
                        <div class="wt-footer-bot-left">
                            <span class="copyrights-text">@ 2018 TQUBE.COM. All Rights Reserved. Designed by zoom4web.com. </span>
                        </div>
                        <div class="wt-footer-bot-right">
                                <ul class="social-icons social-square social-darkest">
                                    @foreach($sociallink as $sociallinks)
                                    <li><a href="{{$sociallinks->value}}" target="_blank" class="{{$sociallinks->icon}}"></a></li>
                                   @endforeach
                                </ul>
                        
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->
        <!-- BUTTON TOP START -->
        <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Top</button>
    </div>
 <div style="clear: both;"></div>
<div class="">
                               
                                <!-- MODAL -->
                                <div id="with-form" class="modal fade" role="dialog">
                                  <div class="modal-dialog">
                                    <!-- Modal content-->
                                      <form  action="{{URL::to('/contact_store')}}" method="post" id="demo-form" class="form-horizontal mb-lg">
                                    <div class="modal-content">
                                      <div class="modal-header bg-primary">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title text-white">Modal Header</h4>
                                      </div>
                                     
                                      <div class="modal-body">
                                       
                                              {{ csrf_field() }}
                                            <div class="form-group mt-lg">
                                                <label class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9">
                                                    <input name="username" class="form-control" placeholder="Type your name..." required type="text">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input name="email" class="form-control" placeholder="Type your email..." required type="email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Phone</label>
                                                <div class="col-sm-9">
                                                    <input name="phone" class="form-control" placeholder="Type an phone..." type="number">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Message</label>
                                                <div class="col-sm-9">
                                                <textarea rows="5" class="form-control" placeholder="Type your message..." required></textarea>
                                                </div>
                                            </div>
                                        
                                      </div>
                                      <div class="modal-footer">
                                        <input type="button" type="button" class="site-button  m-r15" data-dismiss="modal" value="Close">

                                        <button  class="site-button ">Submit
                                         <i class="fa fa-angle-double-right"></i></button>
                                       
                                      </div>
                                      
                                    </div>
                                     </form>
                                  </div>
                                </div>
                               
                            </div>


<script type="text/javascript"  src="{{URL::to('/')}}/js/bootstrap-select.min.js"></script><!-- FORM JS -->
<script type="text/javascript"  src="{{URL::to('/')}}/js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->

<script type="text/javascript"  src="{{URL::to('/')}}/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

<script type="text/javascript"  src="{{URL::to('/')}}/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script type="text/javascript"  src="{{URL::to('/')}}/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script type="text/javascript"  src="{{URL::to('/')}}/js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->

<script type="text/javascript" src="{{URL::to('/')}}/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

<script type="text/javascript"  src="{{URL::to('/')}}/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->

<script type="text/javascript"  src="{{URL::to('/')}}/js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   --> 
<script type="text/javascript"  src="{{URL::to('/')}}/js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->

<script type="text/javascript"  src="{{URL::to('/')}}/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script type="text/javascript"  src="{{URL::to('/')}}/js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->



<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{URL::to('/')}}/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="{{URL::to('/')}}/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
<script type="text/javascript" src="{{URL::to('/')}}/plugins/revolution/revolution/js/extensions/revolution-plugin.js"></script>

<!-- REVOLUTION SLIDER FUNCTION  ===== -->
<script type="text/javascript"  src="{{URL::to('/')}}/js/rev-script-1.js"></script>
<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-container">
            <div class="cssload-progress cssload-float cssload-shadow">
                <div class="cssload-progress-item"></div>
            </div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->




</body>

</html>
