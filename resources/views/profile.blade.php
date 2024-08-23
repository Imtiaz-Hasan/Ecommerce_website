 @extends('welcome')

   @section('title')

         <?php
     $images = DB::table('seo')->where('website_id' ,'1')->first(); ?>
      <title>Profile page || {{$customer->customer_name}} || mitfarm </title>
    <meta  name="keywords" content="{{$images->website_tags}} ">
    <meta name="viewport" content="{{$images->website_detels}}">
  

@endsection

@section('body')
 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- breadcrubm area start -->
    <section  class="breadcrumb-area breadcrumb-bg1 hosting">
        
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="breadcrumb-inner">
                        <h1 class="title">Your Profile</h1>
                        <div class="page-navigation">
                            <a href="{{route('mitfarm-home')}} ">Home</a> >
                            <span class="colored-text">Your Profile</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrubm area end -->

    <div class="blog-details-page-conent">

                 <?php 
         $massage = Session::get('massage');
         
         if($massage){  ?>
          <h4 class="alert alert-success"> <?php echo $massage; ?>  </h4>
          <?php   Session::put('massage',NULL); } ?>
          
        <!-- blog details page content -->
        <div class="container">
            <div class="row">

        
          
  <div class="col-md-4">
                    <aside class="sidebar">
                        
                        <!-- //.search widget-->
                        <div class="widget-area latest-post">
                            <!-- widget area -->
                            <div class="widget-title">
                                <h4 class="title">Your Profile</h4>
                            </div>
                            
                                <div class="single-latest-posts">
                                    <!-- single latest posts -->
                                    
    <div class="content">
        <img src="{{$customer->customer_photo}}" height="200px;" width="200px;" alt="">
         <h4  style="font-size: 20px; color: #D08D25"  class="title">{{$customer->customer_name}} </h4>
         <h4 style="font-size: 20px; color: #D08D25" class="title">{{$customer->customer_email}} </h4> 
         <h4 style="font-size: 20px; font-family: sans-serif; color: #D08D25" class="title">{{$customer->customer_phone}} </h4> 
         <h4 style="font-size: 20px; color: #D08D25" class="title">{{$customer->customer_city}} </h4> 

         <a style="color:red;" href="{{route('Update-Profile-mitfarm')}} "> <h3>Update Profile</h3> </a>
         <br>
         <a style="color:red;" href="{{route('Add-Blog-Post-Profile-mitfarm')}} "> <h3>Add Post</h3> </a>
        
    </div>
                                </div>
                            
                                 
                           
                        </div>
                        
                        
                    </aside>
                </div>









                <div class="col-md-7">
                    <div class="blog-single-page-content-area">
                        <article class="single-classic-blog-post">
                           <div class="content">
 <?php
    $customer_id = Session::get('customer_id');

  $customere =  DB::table('tbl_orders')
           ->where('order_status',0)
           ->where('customer_id' , $customer_id)
           ->limit(1)
           ->get();
   foreach ($customere as $v_content) {
    $cmrid =  $v_content->customer_id;
  
   
  if($cmrid){  }?> 
                             
    <table>
  <thead>
  <tr>
    <th>SL</th>
    <th>Product Name</th>
    <th>Product Image</th>
    <th>Product Price</th>
    <th>Quntity</th>
    <th>Total</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>

<?php 

 

  $customere =  DB::table('tbl_orders')
        ->where('customer_id',$customer_id)
        ->where('order_status',0)
        ->orderby('order_id','desc')
        ->get();

    $i=0;
   foreach ($customere as $v_content) {
    $i++;
?>    
  <tr>
    <td>{{ $i }} </td>
    <td>{{$v_content->or_product_name}} </td>
    <td> <img src="{{URL($v_content->or_product_image)}}" height="70px;" width="70px;" alt=""> </td>
    <td>{{$v_content->or_product_price}} tk</td> 
    <td>{{$v_content->or_product_qty}}  
       </td> 
    <td>{{$v_content->or_product_total}} tk</td>
      <td> <?php 
           if($v_content->order_pandding == 0){  
             echo "Pandding";
         }else{ ?> <a onclick="return confirm('ARE YOU SURE TO DELET');" href="{{route('Delete-order-mitfarm',$v_content->order_id)}}">Delete</a> <?php } ?> </td>
  </tr>
  </tr>

<?php } ?>   

  </tbody>
</table>

  

  
 
<?php  } ?>                             
                                
                            </div>
                        </article>
                    </div>
                </div>



                <!-- <div class="col-md-7">
                    <div class="blog-single-page-content-area">
                        <article class="single-classic-blog-post">
                           <div class="content"> -->
<?php
    $allblog=DB::table('blogs')
             
             ->where('blog_user_id',$customer_id)
             ->join('categories','blogs.blog_category_id','=', 'categories.category_id')
             ->orderby('blog_id','dsce')
             ->get();

    foreach($allblog as $v_blog){    ?>


            <div class="col-md-4 col-sm-7">
                <div class="single-news-item"><!-- single news item -->
                    <div class="thumb">
                       <a href="{{URL::to('Show-Blog-Detels-mitfarm', $v_blog->blog_id)}}"><img src="{{URL($v_blog->blog_image)}}" alt="news image" width="300px;" height="200px;" ></a>
                    </div>
                    <div class="content">
                        <span class="category">{{$v_blog->category_name}}</span>
                        <a href="{{URL::to('Show-Blog-Detels-mitfarm', $v_blog->blog_id)}}"><h4  class="title">{{$v_blog->blog_title}} </h4></a>
                        <span style="font-family: sans-serif;"  class="date"><?php echo date('F j ,Y g:i a', strtotime($v_blog->blog_date)); ?> </span>
                        <span style="color:red;" class="date">
                             <?php if($v_blog->blog_status == 1){echo "Pandding Blog";}else{ ?> 
                              ||  <a   onclick="return confirm('ARE YOU SURE TO DELET');" style="color:red;" href="{{route('delete-post-mitfarm',$v_blog->blog_id)}}">Delete Post</a>
                            <?php } ?>
                          </span>
                         <a href="{{URL::to('Show-Blog-Detels-mitfarm', $v_blog->blog_id)}}"> <p>{{substr($v_blog->blog_detels,0,60)}}</p></a>
                    </div>
                </div><!-- //.single news item -->
            </div>
<?php } ?>

 <br>




             





              

               
            </div>
        </div>
    </div>
    @endsection