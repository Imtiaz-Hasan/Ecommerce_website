 @extends('welcome')

    @section('title')

         <?php
     $images = DB::table('seo')->where('website_id' ,'1')->first(); ?>
      <title>Prduct category || {{$images->website_title}} || mitfarm</title>
    <meta  name="keywords" content="{{$images->website_tags}} ">
    <meta name="viewport" content="{{$images->website_detels}}">
  

@endsection

@section('body')
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- header area start -->
 
<section style="margin-top:-60px;" class="service-area section-gap" id="service" >

         <div class="our-courses-section">
        <div class="section-title">
            <h3>All Products Category Page</h3>
        </div>
        <div class="container">
            <div class="row">
       <?php
     
    foreach($product as $vproduct){    ?> 

                <div class="col-md-3" data-aos="flip-up" data-aos-duration="2000">
                    <div class="single-course-box">
                        <div class="course-img">
                           <a href="{{route('Show-Product-Detels-mitfarm',$vproduct->product_id)}} "></a> <img src="{{URL($vproduct->product_image)}}" alt=""></a>
                            <div class="coures-img-hover">
                                <a href="{{route('Show-Product-Detels-mitfarm',$vproduct->product_id)}}"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                      <a href="{{route('Show-Product-Detels-mitfarm',$vproduct->product_id)}} ">  <span style="font-family: arial;" class="price">${{$vproduct->product_price}} tk</span></a>
                      <a href="{{route('Show-Product-Detels-mitfarm',$vproduct->product_id)}} ">   <h3>{{substr($vproduct->product_title,0,50)}} </h3></a>
                    </div>
                </div>
    <?php } ?>            
                 
            </div>
             

    
    </div>
    </div>
</section>

    @endsection