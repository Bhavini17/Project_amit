@extends('layouts.master')

@section('body')        
        <!-- Sub-header area -->
        
        <div class="pm-sub-header-container">
        
        	<div class="pm-sub-header-info">
            	
                <div class="container">
                	<div class="row">
                    	<div class="col-lg-12">
                        	
                            <p class="pm-post-title"> {{$post['title']}} </p>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="pm-sub-header-breadcrumbs single-post">
            	
                <div class="container">
                	<div class="row">
                    	<div class="col-lg-12">
                        	
                            <ul class="pm-breadcrumbs">
                            	<li><a href="{{URL:: asset('index')}}">Home </a></li>
                                <li><i class="fa fa-angle-right"></i></li>
                                <li><a href="{{URL:: asset('news')}}">News </a></li>
                                <li><i class="fa fa-angle-right"></i></li>
                                <li>asking the right...</li>
                            </ul>
                            
                            <ul class="pm-post-navigation">
           
                            	<li class="pm_tip_static_top" title="Prev. Post"><a href="#" class="fa fa-angle-left"></a></li>
                                <li class="pm_tip_static_top" title="Next Post"><a href="#" class="fa fa-angle-right"></a></li>

                            </ul>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
 		<!-- Sub-header area end -->
        
        <!-- BODY CONTENT starts here -->
                
        <!-- PANEL 1 -->
        <div class="container pm-containerPadding-top-110 pm-containerPadding-bottom-100">
        
        	<div class="row">
            	<div class="col-lg-12">
                	
                    <!-- Post image -->
                    <div class="pm-single-news-post">
                        <img src="{{url('uploads/'.$post['image'])}}" width="800" height="400" alt="icon" align="center">  </div>
                         <!-- one way of giving image source as in index page of serverfireteam-->

                        <div class="pm-single-news-post-overlay">
                            
                            <div class="pm-single-news-post-icon">
                                <img src="/uploads/{{$post['image']}}" width="33" height="41" alt="icon"> 
                                <!-- another way of giving the source of image -->
                            </div>
                            
                            <h6 class="pm-single-news-post-title"><a href="news-post.html">{{$post['title']}}</a></h6>
                            
                          <p class="pm-single-news-post-date">{{$post['created_at']->toFormattedDateString()}}  by {{$post['author']}}</p>  
                         <!-- <a href="news-post.html#comments" class="pm-standalone-news-post-comment-count">8 Comments</a> -->
                            
                        </div>
                    
                    </div>
                    <!-- Post image end -->
                    
                    <!-- Post info -->
                    <div class="pm-single-post-article">
                    
                           
                    <?php

                        $user = DB::table('blog')->where('id', '1')->first();

                        echo $user->content;
                    ?>


                    </div>
                    
                    <!-- Post info end -->
                    
                    <!-- Post info and tags -->
                    <div class="pm-single-post-social-features">
                    
                    	<div class="pm-single-post-tags">
                        	<p class="tags">Tagged in: <a href="#">education</a>, <a href="#">tips</a></p>
                        </div>
                        
                        <div class="pm-single-post-like-feature">
                        	<a href="#" class="pm-single-post-like-btn fa fa-thumbs-up"></a>
                            <span>22 Likes</span>
                        </div>
                        
                        <div class="pm-single-post-share-icons">
                        	<ul class="pm-single-post-social-icons">
                            
                            	<li><p>Share This:</p></li>
                            
                                <li title="Twitter" class="pm_tip_static_bottom"><a class="fa fa-twitter" href="#"></a></li>
                                <li title="Facebook" class="pm_tip_static_bottom"><a class="fa fa-facebook" href="#"></a></li>
                                <li title="Google Plus" class="pm_tip_static_bottom"><a class="fa fa-google-plus" href="#"></a></li>
                                <li title="Linkedin" class="pm_tip_static_bottom"><a class="fa fa-linkedin" href="#"></a></li>
                                <li title="Reddit" class="pm_tip_static_bottom"><a class="fa fa-reddit" href="#"></a></li>
                            </ul>
                        
                        </div>
                  
                        
                    </div>
                    <!-- Post info and tags end -->
                    
                    
                </div>
            </div>
        
        </div>
        <!-- PANEL 1 end -->
        
        <!-- PANEL 2 -->
        <div class="pm-column-container pm-containerPadding-bottom-50 pm-parallax-panel" style="background-color:#21BBC7; background-image:url({{url('/img/author-bg.jpg')}});" data-stellar-vertical-offset="-100" data-stellar-background-ratio="0.5">

        <!-- {{url('uploads/'.$post['image'])}} -->
        
        	<div class="container pm-containerPadding80">
            	<div class="row">
                	<div class="col-lg-12">
                    	
                        <h4 class="pm-author-column-title">About the Author</h4>
                        
                        <div class="row pm-containerPadding-top-30">
                        	
                            <div class="col-lg-3 col-md-3 col-sm-12">
                            	
                                <div class="pm-author-bio-img-bg" style="background-image:url({{url('img/news-post/avatar.jpg')}});">
                                	<div class="pm-single-news-post-avatar-icon">
                                        <img width="33" height="41" src="/img/news/post-icon.jpg" class="img-responsive" alt="icon">
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="col-lg-9 col-md-9 col-sm-12">
                            	<p class="pm-author-name">dr. john stanton</p>
                                <p class="pm-author-title">family physician</p>
                                <div class="pm-author-divider"></div>
                                <p class="pm-author-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc fringilla erat nec tellus consectetur sodales. Vivamus quis est eget velit scelerisque condimentum sed non lorem. Morbi commodo id magna nec semper. Nullam pulvinar erat nisl, ac laoreet orci tempus iaculis. Vivamus nec tortor velit. Praesent a tortor nulla. Nullam pulvinar erat nisl, ac laoreet orci tempus iaculis.</p>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        
        </div>
        <!-- PANEL 2 end -->
        
        <!-- PANEL 3 -->
        <div class="container pm-containerPadding-top-100 pm-containerPadding-bottom-70">
        	<div class="row">
            	<div class="col-lg-12">
                
                	<h4 class="pm-primary">Related Posts</h4>
                    
                    
                    <div class="pm-single-blog-post-related-posts">
                    
                    	<ul class="pm-related-blog-posts">
                            <!-- Post -->
                            <li>
                                <div class="pm-related-blog-post-thumb" style="background-image:url({{url('img/sidebar/post1.jpg')}});"></div>
                                <div class="pm-related-blog-post-details">
                                    <a href="news-post.html">Lorem ipsum dolor sit amet consectetur adipiscing elit.</a>
                                    <p class="pm-date">Jan 29, 2015 by Dr. Jane Williams</p>
                                </div>
                            </li>
                            <!-- Post end -->
                            <!-- Post -->
                            <li>
                                <div class="pm-related-blog-post-thumb" style="background-image:url(img/sidebar/post2.jpg);"></div>
                                <div class="pm-related-blog-post-details">
                                    <a href="news-post.html">Pellentesque congue semper massa vitae consectetur. </a>
                                    <p class="pm-date">Jan 29, 2015 by Dr. Jane Williams</p>
                                </div>
                            </li>
                            <!-- Post end -->
                            <!-- Post -->
                            <li>
                                <div class="pm-related-blog-post-thumb" style="background-image:url(img/sidebar/post3.jpg);"></div>
                                <div class="pm-related-blog-post-details">
                                    <a href="news-post.html">Phasellus vestibulum et velit at fringilla curabitur elementum.</a>
                                    <p class="pm-date">Jan 29, 2015 by Dr. Jane Williams</p>
                                </div>
                            </li>
                            <!-- Post end -->
                        </ul>
                    
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
        <!-- PANEL 3 end-->
        
        <!-- PANEL 4
        <a id="comments"></a>
        <div class="pm-column-container pm-containerPadding80" style="background-color:#21BBC7;">
        
        	<div class="container">
            	<div class="row">
                	<div class="col-lg-12">
                    	
                        <h4 class="pm-comments-response-title">1 response to "asking the right questions when meeting your family doctor"</h4>
                        
                        <!-- Comments
                        <div class="pm-comments-container">
                            
                            <!-- Comment
                            <div class="pm-comment-box-container">
                                                        
                                <div class="pm-comment-box-avatar-container">
                                    <div class="pm-comment-avatar" style="background-image:url(img/news/01_avatar.jpg);">
                                    </div>
                                    <ul class="pm-comment-author-list">
                                        <li><p class="pm-comment-name">Nick Doe</p></li>
                                        <li><p class="pm-comment-date">September 6, 2014</p></li>
                                    </ul>
                                    
                                    
                                </div>
                                
                                <div class="pm-comment">
                                    <p>Sed vitae arcu quis dolor pulvinar rhoncus id eget velit. Vivamus lectus dolor, consectetur quis magna ac, viverra mollis orci. Mauris eget fermentum erat. Maecenas mattis, dui quis mollis commodo, justo elit aliquam nulla, sit amet iaculis nisl velit vitae nibh. Aliquam erat volutpat. Sed scelerisque mattis euismod. Curabitur interdum lectus sit amet nisl tempus, sit amet laoreet.</p>
                                </div>
                                
                                <div class="pm-comment-reply-btn">
                                    <a href="#" class="pm-square-btn comment-reply">post a reply</a>
                                </div>
                                
                            </div>
                            <!-- Comment end 
                        
                        </div>
                        <!-- Comments end 
                        
                    </div>
                </div>
            </div>
        
        </div>
        <!-- PANEL 4 end -->
        
        
        <!-- PANEL 5 -->
        <div class="container pm-containerPadding-top-100 pm-containerPadding-bottom-80">
        	<div class="row">
            	<div class="col-lg-12">
                    
                    <h4 class="pm-primary">Submit a Comment</h4>
                    
                    <p class="pm-required-comments">Your email address will not be published. Required fields are marked *</p>
                    
                    <div class="row pm-containerPadding-top-20">
                        
                        <form name="pm-submit-comment-form" action="http://projects.pulsarmedia.ca/medical-link/post">
                        
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input name="pm-comment-name" type="text" placeholder="Name *" class="pm-comment-form-textfield">
                            </div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input name="pm-comment-email" type="text" placeholder="Email *" class="pm-comment-form-textfield">
                            </div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <input name="pm-comment-website" type="text" placeholder="Website" class="pm-comment-form-textfield">
                            </div>
                            
                            <div class="col-lg-12 pm-clear-element">
                                <textarea name="pm-comment-message" cols="20" rows="10" placeholder="Comment" class="pm-comment-form-textarea"></textarea>
                            </div>
                            
                            <div class="col-lg-12 pm-clear-element">
                                <div class="pm-comment-html-tags">
                                    <span>You may use these HTML tags and attributes: </span>
        <p>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;strike&gt; &lt;strong&gt; </p>
                                </div>
                                
                                <input name="pm-comment-submit-btn" class="pm-rounded-btn no-border" type="button" value="Post Comment &plus;">
                                
                            </div>
                            
                        </form>
                    
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- PANEL 5 end-->
        
       @stop