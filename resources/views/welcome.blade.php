 
 @include('inc.hader')
</head>

<body id="page-top">
	<div class="fullbody">
	<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
				 
					<li><a href="{{route('Contick-Page-mitfarm')}}">Contact</a></li>|
					<li><a class="font" href="">+8801861559750</a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link">Email:<a href="">demo@gmail.com</a></li>|
                     <?php 
                  $customer = Session::get('customer_id');
               
          if($customer != Null){ ?> 
					<li class="top_link"><a href="{{route('Customer-Profile-mitfarm')}}">My Account</a></li>|	  <?php } ?>				
				</ul>
				<div class="social">
					<ul>
						<li><a href="#"><i class="facebook"></i></a></li>
						<li><a href="#"><i class="twitter"></i></a></li>
						<li><a href="#"><i class="dribble"></i></a></li>	
						<li><a href="#"><i class="google"></i></a></li>										
					</ul>
				</div>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header_top">
	 <div class="container">
		 <div class="logo">
		 	<?php
     $imag = DB::table('seo')->where('website_id' ,'1')->first(); ?>

		 	<a href="{{route('mitfarm-home')}}"><img src="{{url($imag->website_image)}}" alt=""/></a>			 
		 </div>
		 <div class="header_right">	
            <div class="login">
            	<h2>
                 <?php 
                  $customer = Session::get('customer_id');
               
                   if($customer != Null){  ?> 
				 <a href="{{route('Logout-Page-mitfarm')}}">LogOut</a>
                 <?php }else{ ?> 
                 <a href="{{route('Login-Page-mitfarm')}}">Login</a>
                 <?php } ?>
             </h2>
			 </div>

			 <?php 


 $content = Cart::content();

     $i=0;
    $sum =0;
   foreach ($content as $v_content) {
    $i++;

   $sum = $v_content->qty+$sum;
 }
?>	
			 <div class="cart box_1">
				<a href="{{route('Show-Cart-mitfarm')}}">
			<h3 class="font">{{ Cart::total() }} (  {{ $sum }} items )<img src="{{asset('fontpage/images/bag.png')}}" alt=""></h3>
				</a>	
				 
				<div class="clearfix"> </div>
			 </div>				 
		 </div>
		  <div class="clearfix"></div>	
	 </div>
</div>



<div id='cssmenu'>

<ul>
   <li><a href="{{url('mitfarm-home')}} "> Home </a></li>
   <li class='active'><a href="{{route('Show-All-Products-mitfarm')}}">All-Product</a></li>
   <li><a href="{{route('More-Blog')}} ">All-Blog</a></li>
   <li><a href="{{route('Contick-Page-mitfarm')}}" >Contact</a></li>
</ul>
</div>




	 
	@yield('body')
  
<footer>
 <!---->
<div class="footer-content">
	 <div class="container">
		 <div class="ftr-grids">
		 	<div class="col-md-3 ftr-grid">
				 <h4>Blog Categories</h4>
				 <ul>
					   <?php
    $allblog=DB::table('categories')
             ->where('category_status',0)
             ->where('category_type',1)
             ->limit(8)
             ->orderby('category_id','dsce')
             ->get();

    foreach($allblog as $v_blog){    ?>                 
                                <li>
        <a href="{{route('Blog-Category-Page-mitfarm',$v_blog->category_id)}}">
            <i class="fas fa-angle-right"></i> {{$v_blog->category_name}}</a>
                                </li>
       <?php } ?> 				 					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4 >Product Categories</h4>
				 <ul>
					 <?php
    $allblog=DB::table('categories')
             ->where('category_status',0)
             ->where('category_type',2)
             ->limit(8)
             ->orderby('category_id','dsce')
             ->get();

    foreach($allblog as $v_blog){    ?>  
                                 <li>                        
                                    <a href="{{URL('View-Product-Category-mitfarm',$v_blog->category_id)}}">
                                        <i class="fas fa-angle-right"></i>{{$v_blog->category_name}}</a>
                                </li>
                    <?php } ?>  					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul>
					
					 <li><a href="{{route('Contick-Page-mitfarm')}}">Contact Us</a></li>
					 <li><a href="{{route('More-Blog')}}">In The News</a></li>
					 <li><a href="{{route('Show-All-Products-mitfarm')}}">All Product</a></li>
					 <li><a href="{{route('See-More-Photo-mitfarm')}} ">Gellery</a></li>					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Customer service</h4>
				 <ul>
					 <li><a href="#">mtfarm@gmail.com</a></li>
					 <li><a href="#">+8801851708087</a></li>
					 				 
				 </ul>
			 </div>
			 
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
</footer>  
			 
	
			
	<script   src="{{asset('fontpage/css/mamber/assets/js/jquery.js')}}"></script>
	<!-- bootstrap -->
    <script  src="{{asset('fontpage/css/mamber/assets/js/bootstrap.min.js')}}"></script>
    <!-- owl carousel -->
    <script  src="{{asset('fontpage/css/mamber/assets/js/owl.carousel.min.js')}}"></script>
    <!-- magnific popup -->
    <script   src="{{asset('fontpage/css/mamber/assets/js/jquery.magnific-popup.js')}}"></script>
    <!-- way poin js-->
    <script  src="{{asset('fontpage/css/mamber/assets/js/waypoints.min.js')}}"></script>
    <!-- wow js-->
    <script  src="{{asset('fontpage/css/mamber/assets/js/wow.min.js')}}"></script>
    <!-- counterup js-->
    <script  src="{{asset('fontpage/css/mamber/assets/js/jquery.counterup.min.js')}}"></script>
    <!-- main -->
    <script  src="{{asset('fontpage/css/mamber/assets/js/main.js')}}"></script>


	
	        
			
			
	
    
   
     
	
	<script  src="{{asset('fontpage/css/blog/js/vendor/jquery-2.2.4.min.js')}}"></script>
	 <script  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	 <script  src="{{asset('fontpage/css/blog/js/vendor/bootstrap.min.js')}}"></script>
			<script  src="{{asset('fontpage/css/blog/js/jquery.ajaxchimp.min.js')}}"></script>
			<script  src="{{asset('fontpage/css/blog/js/parallax.min.js')}}"></script>			
			<script  src="{{asset('fontpage/css/blog/js/owl.carousel.min.js')}}"></script>		
			<script  src="{{asset('fontpage/css/blog/js/jquery.magnific-popup.min.js')}}"></script>				
			<script  src="{{asset('fontpage/css/blog/js/jquery.sticky.js')}}"></script>
			<script  src="{{asset('fontpage/css/blog/js/main.js')}}"></script>
			
			
	<script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script  type="text/javascript" src="{{asset('fontpage/js/jquery.flexisel.js')}}"></script>	

	 
	</div>
	
 
</body>

</html>