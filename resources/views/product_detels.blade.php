	
 @extends('welcome')

    @section('title')

         <?php
     $images = DB::table('seo')->where('website_id' ,'1')->first(); ?>
      <title>{{$show_product_detels->product_title}} || mitfarm</title>
    <meta  name="keywords" content="{{$show_product_detels->product_tags}} ">
    <meta name="viewport" content="{{$show_product_detels->product_detels}}">
  

@endsection

@section('body')

  <meta name="viewport" content="width=device-width, initial-scale=1"> 
 

<div class="single-sec">
	 <div class="container">
		  <br><br><br>
		 <!-- start content -->	
			<div class="col-md-9 det">
				  <div class="single_left">
					 <div class="grid images_3_of_2">
						 <ul id="etalage">
							<li>
							 
									<img class="etalage_thumb_image" src="{{URL($show_product_detels->product_image)}}" class="img-responsive" />
								 
								 
							</li>
							 
						 </ul>
						 <div class="clearfix"></div>		
				      </div>
				  </div>
				  <div class="single-right">
					 <h3>{{$show_product_detels->product_title}}</h3>
					 
					  <h3>Category : {{$show_product_detels->category_name}}</h3>
					  <div class="cost">
					  	<form action="{{URL('add-to-cart-mitfarm')}}" method="post">
									{{csrf_field()}}
						 <div class="prdt-cost">

							 <ul>
								 
								 <li class="active">Price ${{$show_product_detels->product_price}}</li>
								 <input type="submit" class="btn btn-success" value=" BUY NOW">
							 </ul>
						 </div>
						 <div class="check">
							  
							</br>
							 <div class="navbar-form navbar-left" role="search">
								  <div class="form-group">
									<input type="text" name="qty" class="form-control" value="1">
									<input type="hidden"  name='product_id' value="{{$show_product_detels->product_id}}" />
								  </div>
								</div> 

							 </form>

						 </div>
						 <div class="clearfix"></div>
					  </div>
					   
					 				 
				  </div>
				  <div class="clearfix"></div>
				  <div class="sofaset-info">
				  	 <div class="single-bottom1">
						<h6>Details</h6>
						 
					 </div>	
						 <h4>{{$show_product_detels->product_title}}</h4>
						 <p>{{$show_product_detels->product_detels}}</p>
				  </div>				  					
		    </div>
			<div class="rsidebar span_1_of_left">
				<section  class="sky-form" style="padding: 0px;">
					 <div class="product_right">
						 <h4 class="m_2"> Categories</h4>
						 <div class="tab1">
								

<?php
    $allblog=DB::table('categories')
             ->where('category_status',0)
             ->where('category_type',2)
             ->limit(8)
             ->orderby('category_id','dsce')
             ->get();

    foreach($allblog as $v_blog){    ?>	
    	         <a href="{{URL('View-Product-Category-mitfarm',$v_blog->category_id)}}"> <ul  style="border-top: 1px solid black;" class="place">
								 <li class="sort">{{$v_blog->category_name}}</li>
								 
									<div class="clearfix"> </div>
									 </ul></a>
<?php } ?>	

							 
							 
					      </div>						  
						   
						  
						 
						<!-- script -->					 
				 </section>
				 			  
				 
				   <!---->
					 <script type="text/javascript" src="{{asset('fontpage/js/jquery-ui.min.js')}}"></script>
					 <link rel="stylesheet" type="text/css" href="{{asset('fontpage/css/jquery-ui.css')}}">
					<script type='text/javascript'>//<![CDATA[ 
					$(window).load(function(){
					 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 400000,
								values: [ 2500, 350000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

					});//]]>  

					</script>
					 
				 			  									 			 
			   </div>
		</div>	     				
		     <div class="clearfix"></div>
	  </div>	 
</div>


<div   class="recommendation">
     <div class="container">
         <div class="recmnd-head">
            <br>
             <h3>RECOMMENDATIONS FOR YOU</h3>
         </div>
         <div class="bikes-grids">           
             <ul id="flexiselDemo1">
<?php
    $allproduct=DB::table('products')
         ->where('product_status',0)
         ->where('product_category_id',$show_product_detels->category_id)
         ->orderby('product_id','dsce')
         ->get();
    foreach($allproduct as $vproduct){    ?> 

                 <li>
                     <a href="{{route('Show-Product-Detels-mitfarm',$vproduct->product_id)}}"><img src="{{URL($vproduct->product_image)}}" alt=""/></a>  
                     <h4><a href="{{route('Show-Product-Detels-mitfarm',$vproduct->product_id)}}">{{$vproduct->product_title}}</a></h4> 
                     <p>Rs. {{$vproduct->product_price}}/-</p>
 
                  <div class="item-info6">
                  <a href="{{route('Show-Product-Detels-mitfarm',$vproduct->product_id)}}">Buy Now</a>
                 </li>

    <?php } ?>  



                
            </ul>
                     
     </div>
     </div>
</div> 




@endsection