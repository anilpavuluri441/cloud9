
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>cloud9</title>
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/css/fontawesome/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Great+Vibes|Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush|Great+Vibes" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{URL::to('/')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/css/style-lay.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" 
    rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>



    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="active">
            <ul>
                <li>
                    <a class="{{ Request::path() == '/' ? 'active' : '' }}" href="{{URL::to('/')}}">Home</a>
                </li>
                <li>
                    <a class="{{ Request::path() == 'about' ? 'active' : '' }}" href="{{URL::to('/about')}}">ABOUT US</a>
                </li>
                <li><a class="{{ Request::path() == 'salon-services' ? 'active' : '' }}" href="salon-services">SALON</a></li>
                <li><a class="{{ Request::path() == 'spa' ? 'active' : '' }}" href="spa">SPA</a></li>
                <li><a class="{{ Request::path() == 'boutique' ? 'active' : '' }}" href="boutique">BOUTIQUE</a></li>
                
                <li><a class="{{ Request::path() == 'contact-us' ? 'active' : '' }}" href="contact-us"">CONTACT US</a></li>
            </ul>


        </nav>

        <!-- Page Content  -->
          <div id="content">

            <nav class="navbar navbar-fixed-top nav-block">
                <div class="container">

                    <div class="col-sm-4 col-xs-3">
                     <div id="hamburger" class="icon"  onclick="openNav()">
                            <span></span> 
                            <span></span>
                            <span></span>
                    </div>
                    <p>Opening Hours - 9.00 AM to 8.00 PM</p>
                     </div>
                      <div class="col-sm-4 col-xs-8"><div class="logo"><img src="images/logo3.png" alt="logo"></div> </div>
                     <div class="col-sm-4 col-xs-4">
                     <div class="social-icons">
                     <h5>Call 9949836644<br/>Call 9949816644</h5>
                        <ul class="pull-right">
                            <li><a  href="#"><img src="images/facbook.png" alt="facbook"></a></li>
                            <li><a  href="#"><img src="images/googl+.png" alt="googl+"></a></li>
                            <li><a  href="#"><img src="images/twitter.png" alt="twitter"></a></li>
                            <li><a  href="#"><img src="images/youtub.png" alt="youtub"></a></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </nav>
          @yield('content')
      </div>
       
    </div>
    <div class="menu-backdrop"></div>
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/resCarousel.js"></script>
        <script type="text/javascript">
        $(document).ready(function () {
            $('#hamburger').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('.menu-backdrop').toggleClass('active');
            });
        });
         $(document).ready(function () {
            $('.menu-backdrop').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('.menu-backdrop').toggleClass('active');
            });
        });
    </script>
<!--    <script>
    $('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<1;i++) {
    next=next.next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    
    next.children(':first-child').clone().appendTo($(this));
  }
});
    </script>-->
   <script>
   (function(){
  $('.carousel-showmanymoveone .item').each(function(){
    var itemToClone = $(this);

    for (var i=1;i<3;i++) {
      itemToClone = itemToClone.next();

      // wrap around if at end of item collection
      if (!itemToClone.length) {
        itemToClone = $(this).siblings(':first');
      }

      // grab item, clone, add marker class, add to collection
      itemToClone.children(':first-child').clone()
        .addClass("cloneditem-"+(i))
        .appendTo($(this));
    }
  });
}());




   </script>
  </body>
</html>
