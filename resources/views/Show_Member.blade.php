@extends('welcome')
  @section('title')

         <?php
     $images = DB::table('seo')->where('website_id' ,'1')->first(); ?>
      <title> {{$show_Member->member_name}} || mitfarm </title>
    <meta  name="keywords" content="{{$images->website_tags}} ">
    <meta name="viewport" content="{{$images->website_detels}}">
  

@endsection

@section('body')
 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- breadcrubm area start -->
    <section  class="breadcrumb-area breadcrumb-bg3 hosting">
        
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="breadcrumb-inner">
                        <h1 class="title">Member Details</h1>
                        <div class="page-navigation">
                            <a href="{{route('mitfarm-home')}} ">Home</a> >
                            <span class="colored-text">Member Details</span>
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
                                <img src="{{URL($show_Member->member_image)}} " alt="blog post image">
                            </div>
                            <div class="content">
                                 
                                <a href="#">
                                    <h4 class="title"><span style="font-size: 20px; color: #D08D25">{{$show_Member->member_name}}</span></h4>
                                </a>
                                 
                                <p>{{$show_Member->member_detels}}</p>
                                 
                                
                            </div>
                        </article>
                      <!-- //.post share area -->
                        
                    </div>
                </div>
                 
            </div>
        </div>
    </div>
    @endsection