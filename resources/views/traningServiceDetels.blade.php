@extends('welcome')

@section('title')

         <?php
     $images = DB::table('seo')->where('website_id' ,'1')->first(); ?>
      <title>{{$allservice->service_title}} || mitfarm </title>
    <meta  name="keywords" content="{{$images->website_tags}} ">
    <meta name="viewport" content="{{$allservice->service_detels}}">
  

@endsection

@section('body')
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- breadcrubm area start -->
    <section class="breadcrumb-area breadcrumb-bg hosting">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="breadcrumb-inner">
                        <h1 class="title">Service Details</h1>
                        <div class="page-navigation">
                            <a href="{{route('mitfarm-home')}} ">Home</a> >
                            <span class="colored-text">Service Details</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrubm area end -->

    <div class="blog-details-page-conent">
        <!-- blog details page content -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-single-page-content-area">
                        <article class="single-classic-blog-post">
                            <!-- single classic blog item -->
                            <div class="thumb">
                                <img src="{{URL($allservice->service_image)}} " alt="blog post image">
                            </div>
                            <div class="content">
                                 
                                <a href="#">
                                    <h4 class="title">{{$allservice->service_title}}</h4>
                                </a>
                                
                                <p>{{$allservice->service_detels}}</p>
                                 
                                
                            </div>
                        </article>
                          <br>
           <br>
           <br>
           <hr>
            <div class="comment-form"><!-- comment form -->
                             <h4 class="title"> Comments</h4>

                              <?php 
         $massage = Session::get('massage');
         
         if($massage){  ?>
          <h4 class="alert alert-success"> <?php echo $massage; ?>  </h4>
          <?php   Session::put('massage',NULL); } ?>

                            <div class="comment-form-wrapper">
                                <div class="row">
                                    <form action="{{route('Commert-Internation-Service-mitfarm',$allservice->service_id)}} " method="post">
                                        {{csrf_field()}}
                                    <div class="col-md-6">
                                        <div class="form-element margin-bottom-20">
                                            <input type="text" required="" name="user_name" class="input-field" placeholder="Name*">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-element margin-bottom-20">
                                            <input type="email" required="" name="user_email" class="input-field" placeholder="E-mail*">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-element textarea margin-bottom-20">
                                            <textarea rows="30" required="" name="user_massage" placeholder="Message" cols="10" class="input-field textarea"></textarea>
                                        </div>
                                        <button type="submit" class="submit-btn">Send Comments</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- //. comment form -->            
                      <!-- //.post share area -->
                        <div class="comments-area"><!-- comments area -->
                          
                            <span class="separator"></span>
                          <!-- single comment list -->
                    
                    <?php
    $allservice=DB::table('tbl_comments')
             ->where('user_status',1)
             ->where('comment_service_id', $allservice->service_id)
            ->orderby('comment_id','dsce')
             ->get();
    foreach($allservice as $vservice){    ?>            
                                 <div class="single-comment-list">
                                <div class="content">
                                    <h4 class="title">{{$vservice->user_name}}</h4>
                                    <h4 class="title">{{$vservice->user_email}}</h4>
                                    <span class="time"> </span>
                                    <p>{{$vservice->user_massage}} </p>
                                </div>
                            </div><!-- //.single comment list -->
                            <span class="comments-separator"></span>

          <?php  } ?>                 
                          
                        </div><!-- //.comments area -->
                        
                    </div>
                </div>

                <div class="col-md-4">
                    <aside class="sidebar">
                        <div class="search-widget">
                            <div class="search-form">
                                
                            </div>
                        </div>
                        <!-- //.search widget-->
                        <div class="widget-area latest-post">
                            <!-- widget area -->
                            <div class="widget-title">
                                <h4 class="title">Reletive Service</h4>
                            </div>
                            <div class="widget-body">
                    <?php
    $allservice=DB::table('services')
             ->where('service_type',3)
             ->where('service_status',0)
             ->limit(6)
             ->get();
    foreach($allservice as $vservice){    ?>
                                <div class="single-latest-posts">
                                    
                                    <div class="thumb">
                                     <a href="{{route('Traning-Service-Detels-Page-mitfarm',$vservice->service_id)}} "> <img src="{{URL($vservice->service_image)}}" height="60px;" width="60px;" alt=""> </a>
                                    </div>
                                    <div class="content">
                                        
                                       <a href="{{route('Traning-Service-Detels-Page-mitfarm',$vservice->service_id)}} "> <h4 class="title">{{$vservice->service_title}}</h4></a>
                                       
                                    </div>
                                </div>
      <?php } ?>                          
                            </div>
                        </div>
                        <!-- //. widget area -->
                        
                        <!-- //. widget area -->
                         
                        <!-- //. widget area -->
                    </aside>
                </div>
            </div>
        </div>
    </div>
    @endsection