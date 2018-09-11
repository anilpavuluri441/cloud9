@extends ('template') @section('content')

<section class="header-banner">
  <div class="bg-content" style="background:url(images/content-banner.jpg) no-repeat;background-size:cover">
    <div class="container">
      <h1>CLOUD 9 BOUTIQUE</h1>
      <!-- <p>Give yourself, and rejuvenate your mind & soul</p> -->
    </div>
  </div>
</section>

<section class="salon-services">
  <section class="section2">
    <div class="container">
      <h1><strong>BOUTIQUE</strong></h1>
      <div class="salon-services1">
        <div class="col-md-6 salon-occasion">
          <h1>C9 Boutique is Our Little Secret!</h1>
          <div style="background-color:; height: 15px;" class="nicdark_section"></div>
          <div class="wpb_wrapper">
            <p>The fashions in the Boutique are high-quality unique fashions at reasonable price-points. We’ll make you look chic without breaking the budget. With new styles arriving daily, you’ll always be sure to find something new. Whether you are trying to find game-day garb or something perfect for a special event, we will make sure you are dressed to the nine’s for every occasion. </p>

          </div>
        </div>
        <div class="col-md-6">
          <div><img src="images/website-boutique-2.jpg"></div>

        </div>
      </div>
    </div>
  </section>
  @include ('footer')
@endsection