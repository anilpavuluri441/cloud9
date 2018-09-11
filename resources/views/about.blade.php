 @extends ('template')
  @section('content')
        
<section class="header-banner" > 
  <div class="bg-content" style="background:url(images/content-banner.jpg) no-repeat;background-size:cover">
<div class="container">
        <h1>About Us</h1>
        <p>Give yourself, and rejuvenate your mind & soul</p>
   </div>
</div>  
</section>

<section class="section2">
    <div class="container"> 
    <div class="bg-back-section1">
       <div class="col-md-6">
          <div class="content-section2">
                <h4>Denton County has recognized Cloud 9 Salon & Spa as the Best Salon, Best Massage, Best Spa, Best Nail Salon, Best Special Occasion Hair and Best Color Salon.</h4>
                <p>Cloud 9 is located in a beautiful 8,000 square-foot salon, spa and wellness center nestled in Flower Mound, Texas. The concept blends the high energy of a Salon downstairs with the serenity of a Spa upstairs. The original Cloud 9 Salon and Spa was only 800 square feet and housed only 8 stylists. With the tremendous growth over the past 25 years many talented and educated professionals have joined the team at Cloud 9 Salon and Spa. </p>
           </div>
       </div>
       <div class="col-md-6">
            <div class="video-section2">
            <svg class="video-overlay-play-button" viewBox="0 0 200 200" alt="Play video" width="100px">                    
                <circle cx="100" cy="100" r="90" fill="none" stroke-width="15" stroke="#fff"></circle>                    
                <polygon points="70, 55 70, 145 145, 100" fill="#fff"></polygon>                
                </svg>
            </div>
            
            </div>
</div>
    </div>
</section>        
 
<section class="section3">
    <div class="container">
    <div class="col-md-3">
        <img src="images/icon.png" alt="" >
        <h3>Experience</h3>
        <p>Expect nothing but the most experienced professionals in the business from the time you step foot in the door at Cloud 9 Salon, Spa & Boutique.</p>
        </div>
         <div class="col-md-3">
        <img src="images/icon2.png" alt="" >
        <h3>Service</h3>
        <p> From the time you book your appointment to the day of your visit you can rest assured that the entire team at Cloud 9 works tirelessly to ensure the highest quality service.</p>
        </div>
            <div class="col-md-3">
        <img src="images/icon3.png" alt="" >
        <h3>Comfort</h3>
        <p>At Cloud 9 our number one goal was to build one of the most elegant spas available to provide our clients with the best possible experience.</p>
        </div>
         <div class="col-md-3">
        <img src="images/icon4.png" alt="" >
        <h3>Quality</h3>
        <p>At Cloud 9 we only offer the products that we would use ourselves, we only the best in class hair, skin and nail products available.</p>
        </div>
    </div>
</section> 
        
<section class="bottm-slider">  
        
<div class="container">
  
<div class="row">
   <div class="col-md-12">
      <div class="carousel carousel-showmanymoveone slide" id="carousel-tilenav" data-interval="false">
         <div class="carousel-inner">
            <div class="item active">
               <div class="col-xs-12 col-sm-6 col-md-4">
               <div class="slider-card">
                  <a href="#"><img src="images/slider-img.jpg" class="img-responsive" alt=""></a>
                  <div class="slider-box">
                  <h3>Haircut & Styling</h3>
                  <p>Your hair is a reflection of you, and at Bubbles, we take pride in creating styles for any occasion! Whether its cuts, colour or styling our luxury products.</p>
               </div>
               </div>
               </div>
            </div>
            <div class="item ">
               <div class="col-xs-12 col-sm-6 col-md-4">
               <div class="slider-card">
                  <a href="#"><img src="images/slider-img1.jpg" class="img-responsive" alt=""></a>
                  <div class="slider-box">
                  <h3>Manicure & Pedicure</h3>
                  <p>Your hair is a reflection of you, and at Bubbles, we take pride in creating styles for any occasion! Whether its cuts, colour or styling our luxury products.</p>
               </div>
               </div>
               </div>
            </div>
            <div class="item ">
               <div class="col-xs-12 col-sm-6 col-md-4">
               <div class="slider-card">
                  <a href="#"><img src="images/slider-img2.jpg" class="img-responsive" alt=""></a>
                  <div class="slider-box">
                  <h3> Makeup </h3>
                  <p>Your hair is a reflection of you, and at Bubbles, we take pride in creating styles for any occasion! Whether its cuts, colour or styling our luxury products.</p>
               </div>
               </div>
               </div>
            </div>
                       <div class="item ">
               <div class="col-xs-12 col-sm-6 col-md-4">
               <div class="slider-card">
                  <a href="#"><img src="images/slider-img1.jpg" class="img-responsive" alt=""></a>
                  <div class="slider-box">
                  <h3>Haircut & Styling</h3>
                  <p>Your hair is a reflection of you, and at Bubbles, we take pride in creating styles for any occasion! Whether its cuts, colour or styling our luxury products.</p>
               </div>
               </div>
               </div>
            </div>
            <div class="item ">
               <div class="col-xs-12 col-sm-6 col-md-4">
               <div class="slider-card">
                  <a href="#"><img src="images/slider-img2.jpg" class="img-responsive" alt=""></a>
                  <div class="slider-box">
                  <h3>Haircut & Styling</h3>
                  <p>Your hair is a reflection of you, and at Bubbles, we take pride in creating styles for any occasion! Whether its cuts, colour or styling our luxury products.</p>
               </div>
               </div>
               </div>
            </div>
         </div>
         <a class="left carousel-control" href="#carousel-tilenav" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
         <a class="right carousel-control" href="#carousel-tilenav" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
   </div>
</div>

   
</div>
 </section>         
 
<section class="section5">
 <div class="container">

    <h2>Meet Our Experts</h2>
    <p>The people of Spa wellness behind us</p>
    </div>
     <div class="container">
    <div class="row experts">  
     @foreach($ourteams as $key => $teams)     
    <div class="col-md-4">
        <img src="{{ URL::to('/images/our-team/'.$teams->team_image) }}" alt="" class="img-circle">
         <h3> {{$teams->team_name }} </h3>
         <p>{{ $teams->team_role }} <span>{{ $teams->experiance }}</span></p>
   </div>
   @endforeach
</div>
 <div>
 </div>
 </div>
 </section>
 
<section class="section6">
    <div class="container"><div class="bg-section6">
    <div class="col-md-4 col-lg-5 col-lg-offset-1">
    
    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mauris felis, auctor non metus ultrices, ultricies efficitur neque. Suspendisse ac elit et orci pellentesque feugiat. Vivamus congue 
</h3>
   <a>- Name Comes Here</a>
</div>
    <div class="col-md-6"><img src="images/img-2.jpg" alt=" "></div>
    </div></div>
 </section>
 @include ('footer')
        @endsection