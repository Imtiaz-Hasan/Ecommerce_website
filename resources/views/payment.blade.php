  @extends('welcome')

   @section('title')

         <?php
     $images = DB::table('seo')->where('website_id' ,'1')->first(); ?>
      <title>payment page || {{$images->website_title}} || mitfarm</title>
    <meta  name="keywords" content="{{$images->website_tags}} ">
    <meta name="viewport" content="{{$images->website_detels}}">
  

@endsection

@section('body')
  <meta name="viewport" content="width=device-width, initial-scale=1">

<section id="form"><!--form-->
		<div class="container">
			<div class="row">	
				
				<div class="col-sm-12">
					<div class="signup-form"><!--sign up form-->
						<h2>You Shoping Product</h2>
						
						<?php 
         $massage = Session::get('massage');
         
         if($massage){  ?>
          <h4 class="alert alert-success"> <?php echo $massage; ?>  </h4>
          <?php   Session::put('massage',NULL); } ?> 

						<table>
	<thead>
	<tr>
		<th>SL</th>
		<th>Product Name</th>
		<th>Product Image</th>
		<th>Product Price</th>
		<th>Quntity</th>
		<th>Total</th>
		 
	</tr>
	</thead>
	<tbody>
<?php 


   $content = Cart::content();

 

    $i=0;
   foreach ($content as $v_content) {
    $i++;
?>		
	<tr>
		<td>{{ $i }} </td>
		<td>{{$v_content->name}} </td>
		<td> <img src="{{URL($v_content->options->image)}}" height="70px;" width="70px;" alt=""> </td>
		<td>{{$v_content->price}} tk </td> 
		<td>{{$v_content->qty}} </td> 
		<td>{{$v_content->total}} tk </td>
		 
	</tr>
<?php } ?>
  

	 

	</tbody>
</table>

<div class="cart_site">

	<div class="main">
		<div class="cart"> 
		      <p>Total Amound: {{Cart::total()}} tk</p>
		 </div> 
		     
	</div>
 
 </div>	 

<style>
	
	.payment ul li {
         float:left;
         margin:0 auto;
         margin:15px;
         color:#D08D25;
         text-align:center;

	}
	.payment h4{
		color:#D08D25;
	}
	#form{
		margin-top: 20px;
	}
</style>
		
					</div><!--/sign up form-->
				</div>
			</div>
			<div class="payment">
				
	<ul>
		 
 
<a href="{{URL('Order-Page-mitfarm')}}"> <li> <img src="{{asset('fontpage/css/mamber/assets/img/download (1).jpg')}} "  width="250px;" height="150px;" alt=""><br> <h4>Hand Cash</h4>  </li>  </a>




  

	</ul>
			</div>
		</div>
	</section>

	 @endsection