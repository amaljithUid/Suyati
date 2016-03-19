 <?php
 /*
Author:Webcastle
URL:http://webcastltech.com
Theme Name: Suyati
Template Name:Front page template
*/
get_header();?>
   <section class="banner">
		    <div class="banner-slider-wrapper">
			    <ul class="slides">
                    <?php $ban_args = array('posts_per_page'   => -1,
                    	'orderby'=>'menu_order',
                    	'order'=>'ASC', 
                    	'post_type'=>'banner',
						'bannertype' => 'home' 

                    	);
                    $banners = get_posts( $ban_args );
                    foreach($banners as $banner):
		    if(get_field( "books_icon", $banner->ID )!=""){
				  if(get_field( "production_icon", $banner->ID) !=""){$classlist = "col-lg-3 col-md-3 col-sm-6 col-xs-12";}
				  else{$classlist = "col-lg-4 col-md-6 col-sm-6 col-xs-12";}
		    }
		    else{
			$classlist = "col-lg-6 col-md-6 col-sm-6 col-xs-12";	  
		    }
                    ?>
				   <li>
					    <div class="container">
						    <div class="row">
						    		<div class="col-lg-12">
							    	   <?php if(get_field('link_url',$banner->ID)!=""){?>
								   <a href="<?php echo get_field('link_url',$banner->ID);?>"> <?php }?>
								   <div class="banner-text">
									    <h1 class=""><?php echo $banner->post_title;?></h1>
									    <div class="block-row hidden-xs">
										    <div class="row">
											    <div class="<?php echo $classlist;?>">
												    <div class="banner-block first">
														<div class="row">
															<div class="col-xs-4">
																	<!--<i class="icoo">-->
																<img src="<?php echo get_field( "personal_cost_icon", $banner->ID );?>" />
																<!--</i>-->
															</div>
															<div class="col-xs-8">
																<p><?php echo get_field( "personal_cost", $banner->ID );?></p>
															</div>
														</div>
												    </div>
											    </div>
												<div class="<?php echo $classlist;?>">
													<div class="banner-block">
														<div class="row">
															<div class="col-xs-4">
																	<!--<i class="icoo">-->
																<img src="<?php echo get_field( "winner_icon", $banner->ID );?>" />
																<!--</i>-->
															</div>
															<div class="col-xs-8">
																<p><?php echo get_field( "winner", $banner->ID );?></p>
															</div>
														</div>
												    </div>
											    </div>
									    <?php if(get_field( "books_icon", $banner->ID )!=""){?>
												<div class="<?php echo $classlist;?>">
													<div class="banner-block">
														<div class="row">
															<div class="col-xs-4">
																	<!--<i class="icoo">-->
																<img src="<?php echo get_field( "books_icon", $banner->ID );?>" />
																	<!--</i>-->
															</div>
															<div class="col-xs-8">
																<p><?php echo get_field( "books", $banner->ID );?></p>
															</div>
														</div>
												    </div>
											    </div>
								    <?php }if(get_field( "production_icon", $banner->ID) !=""){?>
												<div class="<?php echo $classlist;?>">
													<div class="banner-block">
														<div class="row">
															<div class="col-xs-4">
																	<!--<i class="icoo">-->
															<img src="<?php echo get_field( "production_icon", $banner->ID );?>" />
																	<!--</i>-->
															</div>
															<div class="col-xs-8">
																<p><?php echo get_field( "production", $banner->ID );?></p>
															</div>
														</div>
												    </div>
											    </div>
								<?php }?>
										    </div>
									    </div>
									    <div class="block-row visible-xs">
										    <div class="banner-block">
													<div class="col-xs-4">
														       <!--<i class="icoo">-->
																<img src="<?php echo get_field( "personal_cost_icon", $banner->ID );?>"/>
														       <!--</i>-->
															</div>
															<div class="col-xs-8">
																<p><?php echo get_field( "personal_cost", $banner->ID );?></p>
															</div>
												
										    </div>
										    <div class="banner-block">

													<div class="col-xs-4">
														       <!--<i class="icoo">-->
																<img src="<?php echo get_field( "winner_icon", $banner->ID );?>" />
														       <!--</i>-->
															</div>
															<div class="col-xs-8">
																<p><?php echo get_field( "winner", $banner->ID );?></p>
															</div>
													

										    </div>
										    <div class="banner-block">
														<div class="col-xs-4">
														       <!--<i class="icoo">-->
																<img src="<?php echo get_field( "books_icon", $banner->ID );?>"/>
																<!--</i>-->
															</div>
															<div class="col-xs-8">
																<p><?php echo get_field( "books", $banner->ID );?></p>
															</div>
													

										    </div>
										    <div class="banner-block">
													<div class="col-xs-4">
														       <!--<i class="icoo">-->
															<img src="<?php echo get_field( "production_icon", $banner->ID );?>">
															<!--</i>-->
															</div>
															<div class="col-xs-8">
																<p><?php echo get_field( "production", $banner->ID );?></p>
															</div>
													
										    </div>
									    </div>
									    
								    </div>
								   <?php if(get_field('link_url',$banner->ID)!=""){?>
								   </a> <?php }?>
							     </div>
						    </div>
					    </div>
					   
					     <img width="50" height="50" class="hidden banner-img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($banner->ID) ); ?>">
				    </li>
                    <?php endforeach;?>
			    </ul>
		    </div>
	   
    </section>

    <section class="our-partners">
	    <div class="container">
		    <div class="row our-partners-row">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
					<div class="label-head">
						<h1>Our Partners</h1>
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-7 col-xs-6">
					<div id="partner-carousel" class="owl-carousel">
						        <?php
						       $args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'partner');
						       $partner = get_posts( $args );
						       $count = 0;
						       foreach($partner as $partners):
						       $count++;
						       ?>
						  <div><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($partners->ID) );?>" class="img-responsive"></div>
						  <?php endforeach;?>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					<div class="quick-enquiry-wrapper">
						<a href="<?php echo get_permalink(459);?>" class="quick-enquiry-button">Quick Enquiry <span class="element-animation"></span></a>
						<span class="clearfix"></span>
					</div>
				</div>
		    </div>
	    </div>
    </section>
    <section class="intro">
	    <div class="container intro-container">
		    <div class="row">
			    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				    <div class="intro-wrapper">
					  
					    <?php echo get_field('dream_content');?>
					    
					    <a href="<?php echo get_permalink(29);?>" class="more-suyati">More About suyati  <span class="element-animation"></span></a>
				    </div>
			    </div>
		    </div>
		    <div class="img-wrapper hidden-md visible-lg visible-md">
		    		<img src="<?php echo get_template_directory_uri();?>/img/img-bottle-top.png">
		    </div>
	    </div>
    </section>
   <section class="services">
	    <div class="container">
		    <div class="head">
			    <h2><?php echo get_field("what_suyati_title");?></h2>
			    <?php echo get_field("what_suyati_content");?>
		    </div>
		    <div class="service-wheel visible-lg">
			   <ul class="service-list">
			   	   <li title="service-1"><a href="<?php echo get_permalink(493);?>"><?php echo get_field( "rotation_title_1");?></a></li>
				   <li title="service-2"><a href="<?php echo get_permalink(494);?>"><?php echo get_field( "rotation_title_2");?></a></li>
				   <li title="service-3" class="active"><a href="<?php echo get_permalink(498);?>"><?php echo get_field( "rotation_title_3");?></a></li>
				   <li title="service-4" ><a href="<?php echo get_permalink(656);?>"><?php echo get_field( "rotation_title_4");?> </a></li>
				   <li title="service-5"><a href="<?php echo get_permalink(505);?>"><?php echo get_field( "rotation_title_5");?></a></li>
				   <span class="clearfix"></span>
			    </ul>
			    <ul class="services-wheel">
				  <li class="service-1 pos-1"> <a href="<?php echo get_permalink(499);?>"> </a></li>
				   <li class="service-2 pos-2"><a href="<?php echo get_permalink(25);?>"> </a></li>
				   <li class="service-3 pos-3"  title="active"><a href="<?php echo get_permalink(24);?>" > </a></li>
				   <li class="service-4 pos-4"> <a href="<?php echo get_permalink(656);?>"></a></li>
				  <li class="service-5 pos-5"> <a href="<?php echo get_permalink(26);?>"> </a></li>
			    </ul>
                
			    <div class="service-details">
				    <div class="block serivice-1 animated fadeInUp" id="service-1"> 
					    <h1><?php echo get_field( "rotation_title_1");?></h1>
					    <?php echo get_field("cms_content");?>
				  <img src="<?php echo get_field( "service_image");?>">
				    </div>
				    <div class="block serivice-2 animated fadeInUp" id="service-2"> 
					    <h1><?php echo get_field( "rotation_title_2");?></h1>
					     <?php echo get_field("crm_content");?>
					      <img src="<?php echo get_field( "rotation_center_image_2");?>">
				    </div>
				    <div class="block serivice-3 animated fadeInUp" id="service-3" style="display:block"> 
					    <h1><?php echo get_field( "rotation_title_3");?></h1>
					    
					    <?php echo get_field("ecommerce_content");?>
					    <img src="<?php echo get_field( "rotation_center_image_3");?>">
				    </div>
				    <div class="block serivice-4 animated fadeInUp" id="service-4"> 
					    <h1><?php echo get_field( "rotation_title_4");?></h1>
					  
					   <?php echo get_field(".net_content");?>
					     <img src="<?php echo get_field( "rotation_center_image_4");?>">
				    </div>
				    <div class="block serivice-5 animated fadeInUp" id="service-5"> 
					    <h1><?php echo get_field( "rotation_title_5");?></h1>
					     <?php echo get_field("foss_content");?>
					     <img src="<?php echo get_field( "rotation_center_image_5");?>">
				    </div>
			    </div>
			    <a  class="controls prev"></a>
			    <a  class="controls next"></a>
			    <span class="clearfix"></span>
		    </div>
		    <div class="service-carousel-wrapper hidden-lg">
		    		<div class="service-carousel">
					<div>
						<div class="service-item">
							<a href="<?php echo get_permalink(493);?>"><img src="<?php echo get_field( "cms_image");?>"></a>
							<h4><?php echo get_field( "rotation_title_1");?></h4>
							   <?php echo get_field("cms_content");?>
						</div>
					</div>
					<div>
						<div class="service-item">
							<a href="<?php echo get_permalink(494);?>"> <img src="<?php echo get_field( "crm_image");?>"></a>
							<h4><?php echo get_field( "rotation_title_2");?></h4>
					    		    <?php echo get_field("crm_content");?>
						</div>
					</div>
					<div>
						<div class="service-item">
						<a href="<?php echo get_permalink(498);?>"><img src="<?php echo get_field( "ecommerce_image");?>"></a>
							<h4><?php echo get_field( "rotation_title_3");?></h4>
							<?php echo get_field("ecommerce_content");?>
							 
						</div>
					</div>
					<div>
						<div class="service-item">
							<a href="<?php echo get_permalink(656);?>"> <img src="<?php echo get_field( ".net_image");?>"></a>
							<h4><?php echo get_field( "rotation_title_4");?></h4>
							<?php echo get_field(".net_content");?>
							  
						</div>
					</div>
					<div>
						<div class="service-item">
						<a href="<?php echo get_permalink(23);?>">  <img src="<?php echo get_field( "foss_image");?>"></a>
							<h4><?php echo get_field( "rotation_title_5");?></h4>
							<?php echo get_field("foss_content");?>
						</div>
					</div>
			     </div>
		    </div>
		    
	    </div>
    </section>
    <section class="testimonial" id="testimonial">
	    <div class="container testimonial-container">
		  
		    <div class="wrapper">
			    <h2><?php echo get_field( "what_they_say_title_one" );?> <span><?php echo get_field( "what_they_say_title_two" );?></span></h2>
			       <?php
						       $args = array('posts_per_page'   => 3,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'whattheysay');
						       $whatthey = get_posts( $args );
						       $count = 0;
						       foreach($whatthey as $whattheys):
						       $count++;
						       ?>
			    <div class="words-block animated fadeInDown <?php if($count == 1){echo "active";}?>" id="block-<?php echo $count;?>">
				    <p><?php  echo $whattheys->post_excerpt;?><a href="<?php echo get_permalink(413);?>">..read more</a></p>
			    </div>
		        <?php endforeach;?>  	  
			    <div class="testimonial-nav">
				    <div class="row">
				  <?php $cnt=0;  foreach($whatthey as $what):
									$cnt++;?>	   
					    <div class="col-sm-4 col-xs-12 testi-nav <?php if($cnt == 1){echo "active";}else{echo "hidden-xs";}?>" id="block-<?php echo $cnt;?>">
					     
						    <div class="row">
							    <div class="col-md-4">
								    <img src="<?php echo get_field( "image", $what->ID );?>" class="img-circle img-responsive"><?php the_post_thumbnail('whattheysay');?>
							    </div>
							    <div class="col-md-8 col-xs-12">
								    <div class="person-detail">
								    		<h3><?php echo get_field( "image_name", $what->ID );?> </h3>
									    	<p><?php echo get_field("publish_company",$what->ID);?></p>
								    </div>
							    </div>
						    </div>
					    </div>
					     <?php endforeach;?>        
				    </div>
			    </div>
			 
			    <a href="<?php echo get_permalink(413);?>" class="case-studies">view testimonials<span class="element-animation"></span></a>
			   
		    </div>
	    </div>
    </section>
	<section class="customers">
		<div class="container">
			<div class="row our-partners-row">
				<div class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
					<div class="label-head">
						<h1>Our Satisfied <br>Customers</h1>
					</div>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-9 col-xs-8">
					<div id="customer-carousel" class="owl-carousel">
						        <?php
						       $args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'satisfiedcustomer');
						       $customer = get_posts( $args );
						       $count = 0;
						       foreach($customer as $customers):
						       $count++;
						       ?>
						  <div><img src="<?php echo get_field( "customer_image", $customers->ID );?>" class="img-responsive"> </div>
						<?php endforeach;?>
					</div>
				</div>
				
		    </div>
		</div>
	  </section>
    <section class="video-lesson">
	    <div class="container">
		    
		    <div class="video-tab-wrapper">
			    	<div class="switcher">
					<?php echo get_field('lesson_content');?>
					<!--<div class="switcher-button">
						<span class="switch one active" id="webinars">Webinars</span>
						<span class="switch two" id="corporate">Corporate Video</span>
						<span class="switch-bg"></span>
					<span class="clearfix"></span>
					</div>-->
			     </div>
			    <div class="carousel-back">
				    
			    </div>
			    <div class="carousel-wrapper">
				    <div class="video-carousel">
					    <div id="video-carousel" class="owl-carousel webinars active">
						   <?php
                                     $args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'corporatevideo');
                                     $corporatevideo = get_posts( $args );
                                     foreach($corporatevideo as $corporate):
				     $corporate_or_webinar= get_field('corporate_or_webinar',$corporate->ID);
                                     ?>
				    <?php 
				    /*if($corporate_or_webinar[0]=='webinar') {?> 
						  <div>
				   
							  <div class="safe-div"></div>
							  <div class="video-block">
									<a class="video"  href="http://www.youtube.com/v/<?php echo get_field('youtubueid',$corporate->ID);?>?fs=1&amp;autoplay=1"><img src="http://img.youtube.com/vi/<?php echo get_field('youtubueid',$corporate->ID);?>/0.jpg" class="img-responsive" />
									 <div class="overlay animated fadeInDown"></div></a>
								  <div class="tag-area">
									<p><?php 
			    $after= ' ...';
			    $title=get_the_title($corporate->ID);
			    if ( strlen($title) > 50) {
			       $title = substr($title,0,50);
			      ?><?php echo  $title . $after;?><?php
			       } else {
			      ?><?php echo  $title;?><?php
				   }
			    ?> </p>
								  </div>
							  </div>
				  
						  </div>
				    <?php }?>
				    <?php endforeach;?>
					
				           </div>
				    </div>
				    <div class="video-carousel">
					    <div id="video-carousel" class="owl-carousel corporate">
						   <?php
                                     $args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'corporatevideo');
                                     $corporatevideo = get_posts( $args );
                                     foreach($corporatevideo as $corporate):
				     $corporate_or_webinar= get_field('corporate_or_webinar',$corporate->ID);
                                     ?>*/
				   
				    if($corporate_or_webinar[0]=='corporate') {?>   
						  <div> 
							  <div class="safe-div"></div>
							  <div class="video-block">
									<a class="video"  href="http://www.youtube.com/v/<?php echo get_field('youtubueid',$corporate->ID);?>?fs=1&amp;autoplay=1"><img src="http://img.youtube.com/vi/<?php echo get_field('youtubueid',$corporate->ID);?>/0.jpg" class="img-responsive" />
									  <div class="overlay animated fadeInDown"></div></a>
								  <div class="tag-area">
									<p><?php 
			    $after= ' ...';
			    $title=get_the_title($corporate->ID);
			    if ( strlen($title) > 50) {
			       $title = substr($title,0,50);
			      ?><?php echo  $title . $after;?><?php
			       } else {
			      ?><?php echo  $title;?><?php
				   }
			    ?> </p>
								  </div>
							  </div>
						  </div>
						        <?php }?>
						         <?php endforeach;?>
						</div>
				    </div>
			    </div>
		    </div>
	    </div>
    </section>
    <section class="introduction">
	    <div class="container introduction-container">
		    <div class="row">
			    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				    <div class="tab-container">
					    <ul class="intro-tabs nav nav-tabs nav-justified" role="tablist">
						  <li><a href="#home" role="tab" data-toggle="tab">News<span class="animated bounceIn"></span></a></li>
						  <li><a href="#profile" role="tab" data-toggle="tab">Events<span class="animated bounceIn"></span></a></li>
						  <li class="active"><a href="#messages" role="tab" data-toggle="tab">Blog<span class="animated bounceIn"></span></a></li>
						</ul>

						<!-- Tab panes -->
						<div class="intro-tabs-content tab-content">
						  <div class="tab-pane " id="home">
                              <?php
                                 $args = array('posts_per_page'  =>3, 'post_type'=>'news');
                                 query_posts($args); 
                                 $news = get_posts( $args ); 
                                 foreach($news as $new): ?>
							  <div class="news-block ">
								  <div class="row">
									  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										  <div class="img-wrapper">
											<span class="top"></span>
											<span class="right"></span>
											<span class="bottom"></span>
											<span class="left"></span>
												<img src="<?php $image= wp_get_attachment_image_src( get_post_thumbnail_id($new->ID),array(150,135) );echo $image[0];?>" class="img-responsive">
										  </div>
									  </div>
									  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										  <div class="text-wrapper">
											   <a href="<?php echo post_permalink($new->ID);?>" ><h2><?php echo $new->post_title;?></h2></a>
											  <span class="date"><span class="ico date-icon"></span><?php echo get_the_date( 'd/M/Y', $new->ID); ?></span>
											  <p class="hidden-xs"><?php  echo substr(strip_tags($new->post_content),0,80);?>... </p>
										  </div>
									  </div>
								  </div>
								  <a href="<?php echo post_permalink($new->ID);?>" class="side-view-more"></a>
							  </div>
                              <?php endforeach;?>
							  <a href="<?php echo get_permalink(746);?>" class="view-all-bar">View all<span class="arrow-spec"></span></a>
						  </div>
						  <div class="tab-pane" id="profile">
						                                                  <?php
                                                                      $args = array('posts_per_page'   => 3,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'events');
                                                                      $event = get_posts( $args );
								      $cent = 0;
                                                                      foreach($event as $events):$cent++;
						                         $events_category=get_field('category_events', $events->ID); 
                                                                     ?>
								   
							  <div class="news-block">
								  <div class="row">
									  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										  <div class="img-wrapper">
											<span class="top"></span>
											<span class="right"></span>
											<span class="bottom"></span>
											<span class="left"></span>
											<img src="<?php $image= wp_get_attachment_image_src( get_post_thumbnail_id($events->ID),array(150,135) );echo $image[0];?>" class="img-responsive">
										  </div>
									  </div>
									  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										  <div class="text-wrapper">
											 <a href="<?php echo post_permalink($events->ID);?>">  <h2><?php echo $events->post_title;?></h2></a>
											  <span class="date"><span class="ico date-icon"></span><?php echo get_field('event_date',$events->ID);?></span>
											  <p class="hidden-xs"><?php  echo substr(strip_tags($events->post_content),0,80);?> </p>
										  </div>

									  </div>
								  </div>
								  <a href="<?php echo post_permalink($events->ID);?>" class="side-view-more"></a>
							  </div>
							  <?php endforeach;?>
							  <?php //echo $cent;
							  if($cent<3){
							   $args = array('posts_per_page'   => 3-$cent,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'webinar','meta_query' => array(array('key' => 'webinar_type','value' => 'upcome','compare' => 'LIKE')));
                                                                      $webinars = get_posts( $args );
								      foreach($webinars as $events){?>
						        <div class="news-block">
								  <div class="row">
									  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										  <div class="img-wrapper">
											<span class="top"></span>
											<span class="right"></span>
											<span class="bottom"></span>
											<span class="left"></span>
											<img src="<?php $image= wp_get_attachment_image_src( get_post_thumbnail_id($events->ID),array(150,135) );echo $image[0];?>" class="img-responsive">
										  </div>
									  </div>
									  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										  <div class="text-wrapper">
											 <a href="<?php echo post_permalink($events->ID);?>">  <h2><?php echo $events->post_title;?></h2></a>
											  <span class="date"><span class="ico date-icon"></span><?php echo get_field('webinar_date',$events->ID);?></span>
											  <p class="hidden-xs"><?php  echo substr(strip_tags($events->post_content),0,80);?> </p>
										  </div>
						<!---->
									  </div>
								  </div>
								  <a href="<?php echo post_permalink($events->ID);?>" class="side-view-more"></a>
							  </div>     
								     <?php }
							  }
							?>
							  
							 
							  <a href="<?php if($cent<2){echo get_permalink(572);}else{echo get_permalink(316);} ?>" class="view-all-bar">View all<span class="arrow-spec"></span></a>
						  </div>
						  <div class="tab-pane active" id="messages">
						  <?php     $args = array( 'posts_per_page' => 3,  'category_name' => "Blog" );
						            query_posts($args); 
						            $myposts = get_posts( $args );
                   
						            foreach ( $myposts as $post ) : setup_postdata( $post ); the_post();?> 

							  <div class="news-block">
								  <div class="row">
									  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 hidden">
										  <div class="img-wrapper">
											<span class="top"></span>
											<span class="right"></span>
											<span class="bottom"></span>
											<span class="left"></span>
											<?php the_post_thumbnail('bloghome');?>
										  </div>
									  </div>
									  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										  <div class="text-wrapper">
											 <a href="<?php echo post_permalink($post->ID);?>"> <h2><?php echo the_title();?></h2></a>
											  <span class="date"><span class="ico date-icon"></span><?php echo get_the_date( 'd/M/Y' ); ?></span>
											 <p><?php echo strip_tags(excerpt(30)); ?> </p>
										  </div>

									  </div>
								  </div>
								  <a href="<?php echo post_permalink($post->ID);?>" class="side-view-more"></a>
							  </div>
							     <?php endforeach; ?>
                               <a href="<?php echo get_category_link( 14 ); ?> " class="view-all-bar">View all<span class="arrow-spec"></span></a>
						  </div>  
						</div>
					</div>
			    </div>
			    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 right-side">
				    <div class="spec-block">
					    <div class="title">
						       <?php 
                                $the_query = new WP_Query( 'page_id=701' );
                                while ( $the_query->have_posts() ) :
                                $the_query->the_post();?>                                           
                                <h1> <?php the_title();?></h1>
		    <?php  endwhile;
                 wp_reset_postdata();?>
							<!--<h1>Whitepapers</h1>-->
					    </div>
					    <div class="paper-block-wrapper">
						            <?php
						       $args = array('posts_per_page'   => 3,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'whitepaper');
						       $whitepaper = get_posts( $args );
						       $count = 0;
						       foreach($whitepaper as $whitepaper):
						       $count++;
						       ?>
						    <div class="news-block">
								  <div class="row">
									  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										  <div class="img-wrapper">
											   <img src="<?php  $image= wp_get_attachment_image_src( get_post_thumbnail_id($whitepaper->ID),array(150,135) );echo $image[0];?>"  class="img-responsive">
										  </div>
									  </div>
									  <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										  <div class="text-wrapper">
											  <h2><?php echo $whitepaper->post_title;?></h2>
											
											<?php if(strlen($whitepaper->post_title)<60){?>  <p>
											 <?php  echo substr(strip_tags($whitepaper->post_content),0,80);?>
											  </p><?php }?>
											<a href="<?php echo post_permalink($whitepaper->ID);?>" class="download"></a>
										  </div>
									  </div>
								  </div>
							</div>
						    <?php endforeach;?>
						     <a href="<?php echo get_permalink(701);?>" class="view-all-bar">View all<span class="arrow-spec"></span></a>
				    </div>
					    				    </div>
                    <?php      $args = array('posts_per_page'   => 2,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'whitepaper','paged' => $paged,);
			       $whitepaper = get_posts( $args );
            		       $count = 0;
			       foreach($whitepaper as $white):
                               $count++;
		    ?>                                       
                        <?php endforeach;?>	
				   
			    </div>
		    </div>
	    </div>
    </section> 
  	<span class="strip"></span>
	<?php get_footer();?>
