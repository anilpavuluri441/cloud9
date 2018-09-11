@extends ('template') @section('content')

<section class="header-banner">
  <div class="bg-content" style="background:url(images/content-banner.jpg) no-repeat;background-size:cover">
    <div class="container">
      <h1>Cloud 9 Salon Services</h1>
      <!-- <p>Give yourself, and rejuvenate your mind & soul</p> -->
    </div>
  </div>
</section>

<section class="salon-services">
  <section class="section2">
    <div class="container">
      <h1><strong>Salon Services</strong></h1>
      <div class="salon-services1">
        <div class="col-md-6 salon-occasion">
          <h1>The Right Look for Any Occasion</h1>
          <div style="background-color:; height: 15px;" class="nicdark_section"></div>
          <div class="wpb_wrapper">
            <p>Be pampered and primped “to the nines” by our professional staff. For any reason or occasion come in and get
              just the right hair style with new nails and fresh makeup giving you that terrific feeling of confidence and
              exceptional look.</p>
            <p>At Cloud 9, every stylist is independent, therefore, prices will vary. </p>

          </div>
        </div>
        <div class="col-md-6">
          <div><img src="images/cloud-9-salon-flower-mound.png"></div>

        </div>
      </div>
    </div>
  </section>

  <section class="service-tabs">
    <div class="container">

      <div id="exTab3" class="container">
        <ul class="nav nav-tabs">
          @foreach($servicetypes as $key => $teams) 
          @if($key == 0)
          <li class="active">
            <a href="#{{$teams->id}}b" data-toggle="tab">{{$teams->service_type}}</a>
          </li>
          @else
           <li class="">
            <a href="#{{$teams->id}}b" data-toggle="tab">{{$teams->service_type}}</a>
          </li>
          @endif
          @endforeach
        </ul>

        <div class="tab-content clearfix">
           @foreach($services as $key => $servicetypess) 
          @if($key == 0)
          <div class="tab-pane  active" id="{{$servicetypess->service_type_id}}b">
            <div class="row" style="padding-top: 30px; margin: 0px">
             {!! $servicetypess->service_name !!}
            </div>
          </div>
          @else
           <div class="tab-pane" id="{{$servicetypess->service_type_id}}b">
            <div class="row" style="padding-top: 30px; margin: 0px">
             {!! $servicetypess->service_name !!}
            </div>
          </div>
          @endif
          @endforeach
             
        </div>
      </div>
    </div>
  </section>
  @include ('footer')
@endsection