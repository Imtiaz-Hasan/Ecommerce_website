
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
<div class="container">
	  <br><br><br>
	 <div class="registration">
		 <div class="registration_left">

			 <h2>new user? <span> create an account </span></h2>

			 <?php 
         $massage = Session::get('massage');
         
         if($massage){  ?>
          <h4 class="alert alert-success"> <?php echo $massage; ?>  </h4>
          <?php   Session::put('massage',NULL); } ?> 

			 <!-- [if IE] 
				< link rel='stylesheet' type='text/css' href='ie.css'/>  
			 [endif] -->  
			  
			 <!-- [if lt IE 7]>  
				< link rel='stylesheet' type='text/css' href='ie6.css'/>  
			 <! [endif] -->  
			 <script>
				(function() {
			
				// Create input element for testing
				var inputs = document.createElement('input');
				
				// Create the supports object
				var supports = {};
				
				supports.autofocus   = 'autofocus' in inputs;
				supports.required    = 'required' in inputs;
				supports.placeholder = 'placeholder' in inputs;
			
				// Fallback for autofocus attribute
				if(!supports.autofocus) {
					
				}
				
				// Fallback for required attribute
				if(!supports.required) {
					
				}
			
				// Fallback for placeholder attribute
				if(!supports.placeholder) {
					
				}
				
				// Change text inside send button on submit
				var send = document.getElementById('register-submit');
				if(send) {
					send.onclick = function () {
						this.innerHTML = '...Sending';
					}
				}
			
			 })();
			 </script>
			 <div class="registration_form">
			 <!-- Form -->
				<form id="registration_form" action="{{URL('Registration-Page-Mitfarm')}}" method="post"   enctype="multipart/form-data">
					 {{csrf_field()}}
					 <div>
						<label>
							<input  name="customer_photo" type="file" tabindex="1" required autofocus>
						</label>
					</div>

					<div>
						<label>
							<input placeholder="Enter Name" name="customer_name" type="text" tabindex="1" required autofocus>
						</label>
					</div>
					<div>
						<label>
							<input type="email" placeholder="Email Address" name="customer_email"  tabindex="2" required autofocus>
						</label>
					</div>
					<div>
						<label>
							<input  type="text" placeholder="Enter Phone" name="customer_phone" tabindex="3" required>
						</label>
					</div>	
					<div>
						<label>
							<input  type="text" placeholder="Enter city" name="customer_city"  tabindex="3" required>
						</label>
					</div>
									
						 				
					 
					<div>
						<input type="submit" value="create an account" id="register-submit">
					</div>
					<div class="sky-form">
					 
					</div>
				</form>
				<!-- /Form -->
			 </div>
		 </div>
		 <div class="registration_left">
			 <h2></h2>
			 <div class="registration_form">
			 <!-- Form -->
				 
			 <!-- /Form -->
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
 @endsection
