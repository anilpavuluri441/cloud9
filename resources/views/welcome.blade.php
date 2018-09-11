 @extends ('template')
  @section('content')

    
<!--     <div id="myCarousel" class="carousel slide" data-ride="carousel">

      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
      </ol>
      <div class="carousel-inner carousel-holder" role="listbox">
        <div class="item carousel-item active" style="background:url(images/banner.jpg);background-size:cover">
     
          <div class="container">
             <div class="carousel-caption my-caption">
                  <h5 class="animated zoomIn first">Relax & Rejuvenate</h5>
                  <h1 class="animated flipInX second">Perfection is in the details</h1>
                  <a class="btn zoomInUp animated third"> Registered </a>
                </div>
          </div>
        </div>
        <div class="item carousel-item" style="background:url(images/banner-1.jpg);background-size:cover">
          
          <div class="container">
            <div class="carousel-caption my-caption">
                  <h5 class="animated zoomIn first">Relax & Rejuvenate</h5>
                  <h1 class="animated flipInX second">Perfection is in the details</h1>
                  <a class="btn zoomInUp animated third"> Registered </a>
                </div>
          </div>
        </div>
        <div class="item carousel-item" style="background:url(images/banner-2.jpg);background-size:cover">

          <div class="container">
             <div class="carousel-caption my-caption">
                  <h5 class="animated zoomIn first">Relax & Rejuvenate</h5>
                  <h1 class="animated flipInX second">Perfection is in the details</h1>
                  <a class="btn zoomInUp animated third"> Registered </a>
                </div>
          </div>
        </div>
      </div>
     
    </div> -->
    <section id="my-carousel" class="carousel slide"  data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#my-carousel" data-slide-to="1"></li>
            <li data-target="#my-carousel" data-slide-to="2"></li>

        </ol>
      <div class="carousel-holder container-fluid" role="listbox">
        <div class="item carousel-item active" >
                <img class="img-responsive" src="images/banner.jpg" />
                <div class="carousel-caption my-caption">
                  <h5 class="animated zoomIn first">Relax & Rejuvenate</h5>
                  <h1 class="animated flipInX second">Perfection is in the details</h1>
                  <a class="btn zoomInUp animated third"> Registered </a>
                </div>
        </div>  
        <div class="item carousel-item" style="background: ">
                <img class="img-responsive" src="images/banner-1.jpg" />
                <div class="carousel-caption my-caption">
                  <h5 class="animated bounceInLeft first">Relax & Rejuvenate</h5>
                  <h1 class="animated flipInX second">Perfection is in the details</h1>
                  <a class="btn bounce animated third"> Registered </a>
                </div>
        </div>
    
      <div class="item carousel-item" >
              <img class="img-responsive" src="images/banner-2.jpg" />
              <div class="carousel-caption my-caption">
                  <h5 class="animated flip first">Relax & Rejuvenate</h5>
                  <h1 class="animated flipInX second">Perfection is in the details</h1>
                  <a class="btn zoomInUp animated third"> Registered </a>
              </div>
      </div>
    </div>  

    </section>
        
        @endsection