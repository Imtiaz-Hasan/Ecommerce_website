  @extends('welcome')
  
    @section('title')

         <?php
     $images = DB::table('seo')->where('website_id' ,'1')->first(); ?>
      <title> {{$images->website_title}} </title>
    <meta  name="keywords" content="{{$images->website_tags}} ">
    <meta name="viewport" content="{{$images->website_detels}}">
  

@endsection

@section('body')

  <meta name="viewport" content="width=device-width, initial-scale=1">
<section id="form"><!--form-->
		<div class="container">
			<div class="row">	
			<div class="col-sm-10" >	

		<?php $name = Session::get('customer_name'); ?>		 
						 
						 
		 <h3 class="succ"> Thank You <spam style="color:#D08D25" ><?php echo $name; ?></spam>  . Your Order Is Successfull .Your Product is delevery After 12 Horus .Your Delevary As Any Problam Pls <a style="color:#D08D25" href="{{route('Contick-Page-mitfarm')}} "> Contick Our</a> . <br>
                  <a style="color:#D08D25"  href="{{route('Customer-Profile-mitfarm')}} ">Your Order Detels</a>  </h3>
				 
			 
			 
		 
 
		</div>
		</div>
		</div>
	</section>

	 @endsection