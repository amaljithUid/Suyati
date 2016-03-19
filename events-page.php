<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:Events
*/?>
<?php get_header();?>
  <!-- Inner head-->
     <section class="inner-page">
	    <div class="head-banner advisory-board">
		    <?php
									
		  if ( have_posts() ) :
			   while ( have_posts() ) : the_post();?>
             <?php $p_id = get_the_ID();?>
             <?php
	    $args = array(
	'numberposts' => 1,
	'post_type' => 'inner-banner',
	'meta_key' => 'post',
	'meta_value' => $p_id,
        
);
$the_query = get_posts( $args );foreach($the_query as $qq){
?>
<img src="<?php  echo get_field( "image", $qq->ID );?>" /><?php }?>
				   <!--  Your loop code-->
				      <h1><?php the_title();?></span></h1>
				 <p><?php the_content();?></p>
				<?php  endwhile;
				    endif;
			   ?>
	    </div>
		<div class="breadcrumb-container">
			<div class="container">
			     <div class="breadcrumb">
                          <span class="seperator"></span> <?php if(function_exists('bcn_display'))
                                {
                                 bcn_display();
                                 }?>
		    </div>
			</div>
			
		</div>
	    <div class="container">
		    <div class="inner-container">
			   
			    <div class="splitted-container">
				    <div class="row">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">

							<div class="v-m-nav-wrapper event">
								<ul class="v-m-nav">
									<li class="active"><a href="javascrpit:void()" id="upcoming">Upcoming Events<span></span></a></li>
									<li><a href="javascrpit:void()" id="archives">Events Archive<span></span></a></li>
									<span class="clearfix"></span>
								</ul>
							</div>
							<div class="events-wrapper active animated fadeInUp" id="upcoming">
                                                                        <?php
                                                                      $args = array('posts_per_page'   => 6,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'events');
                                                                      $events = get_posts( $args );
                                                                       
								      $c_up = 0;
								      foreach($events as $event):
								      $events_category=get_field('category_events', $event->ID); 
                                                                    if($events_category[0]=='upcome'):
								       $c_up++;
								    endif;
								    endforeach;
								    $cc = 0;
                                                                      foreach($events as $event):
								      $events_category=get_field('category_events', $event->ID); 
                                                                    if($events_category[0]=='upcome'):
                                                                    $cc++;
								    if($cc % 2 == 1){echo '<div class="row">';}
                                                                     ?>
									<div class="col-lg-6 col-md- 6 col-sm-6 col-xs-12">
										<div class="event-block">
											<div class="img-wrapper">
												<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($event->ID) ); ?>" class="img-responsive">
											</div>
											<div class="text-wrapper">
												<?php $s =  $event->post_date;
                                                                                                $date = strtotime($s);
                                                                                               
                                                                                                ?>
													<div class="row">
														<div class="col-lg-6 col-sm-12 col-xs-12">
															<div class="info-wrapper">
																<div class="info-divs">
																	<span class="ico date"></span>
																	<span class="info"></span>
																	<span class="value"><?php echo get_field('event_date',$event->ID);?></span>
																</div>
															</div>
														</div>
														<div class="col-lg-6 col-sm-12 col-xs-12">
															<div class="info-wrapper">
																<div class="info-divs">
																	<span class="ico location"></span>
																	<span class="info"></span>
																	<span class="value"><?php echo get_field('location',$event->ID);?></span>
																</div>
															</div>
														</div>
													</div>
												
												
												<h4><?php echo $event->post_title;?>
</h4>
												<p><?php  echo substr(strip_tags($event->post_content),0,100);?>
                                                                                               
													<a href="<?php echo post_permalink($event->ID);?>">Read more</a>
</p>
											</div>
										</div>
                                                                                
									</div>
                                                                        <?php
									if($cc % 2 == 0 || $cc == $c_up){echo '</div>';}
									endif;?>
									<?php endforeach;?>
								
							</div>
							<div class="events-wrapper animated fadeInUp" id="archives">
								<div class="row">
                                                                       <?php
                                                                      $args = array('posts_per_page'   => 6,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'events');
                                                                      $eventspast = get_posts( $args );
								      $c_up = 0;
								      foreach($events as $event):
								      $events_archive=get_field('category_events', $event->ID); 
                                                                    if($events_archive[0]=='eventarchive'):
								      $c_ar++;
								    endif;
								    endforeach;
								     $ccar = 0;
                                                                      foreach($eventspast as $event):
                       
                                                                      $events_archive=get_field('category_events', $event->ID); 
                                                                    if($events_archive[0]=='eventarchive'):
								     $ccar++;
								    if($ccar % 2 == 1){echo '<div class="row">';}
                                                                 
                                                                     ?>
									<div class="col-lg-6 col-md- 6 col-sm-6 col-xs-12">
										<div class="event-block">
											<div class="img-wrapper">
												<img src="<?php  echo wp_get_attachment_url( get_post_thumbnail_id($event->ID) ); ?>" class="img-responsive">
											</div>
											<div class="text-wrapper">
												<?php $s =  $event->post_date;
                                                                                                $date = strtotime($s);?>
													<div class="row">
														<div class="col-lg-6 col-sm-12 col-xs-12">
															<div class="info-wrapper">
																<div class="info-divs">
																	<span class="ico date"></span>
																	<span class="info"></span>
																	<span class="value"> <?php echo get_field('event_date',$event->ID);?> </span>
																</div>
															</div>
														</div>
														<div class="col-lg-6 col-sm-12 col-xs-12">
															<div class="info-wrapper">
																<div class="info-divs">
																	<span class="ico location"></span>
																	<span class="info"></span>
																	<span class="value"><?php echo get_field('location',$event->ID);?></span>
																</div>
															</div>
														</div>
													</div>
												
												
												<h4><?php echo $event->post_title;?>
</h4>
												<p><?php  echo substr(strip_tags($event->post_content),0,100);?>
													<a href="<?php the_permalink($event->ID); ?>">Read more</a>
</p>
											</div>
										</div>
									</div>
									<?php if($ccar % 2 == 0 || $ccar == $c_ar){echo '</div>';} endif;?>
                                                                    <?php endforeach;?>    
                                                                        
                                                                        
								</div>
								
									
							</div>
							
					     </div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="sidebar">
								<div class="twitter-stream">
									<h2>Twitter Stream</h2>
									 <?php dynamic_sidebar('twitter-sidebar'); ?> 
								</div>
							</div>
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
    </section>
	  
   <!-- <section class="footer-strip">
    </section>-->
    <span class="strip"></span>

<?php get_footer();?>