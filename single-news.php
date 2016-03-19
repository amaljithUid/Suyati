<?php
/*
Author:Webcastle
URL:http://webcastltech.com
Theme Name: Suyati
Template Name : Single News
*/
get_header();?>
   <!-- Inner head-->
    <section class="inner-page">
	    <div class="head-banner advisory-board event-banner">
		   <?php 
                                $the_query = new WP_Query( 'page_id=746' );
                                       while ( $the_query->have_posts() ) :
                                         $the_query->the_post();?>                                           
                                             <h1><?php the_title();?></span></h1>
                                             <p> <?php the_content();?></p>
                    <?php  endwhile;
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
   <?php if (have_posts()) :
								       while (have_posts()) :
								       the_post();
							         ?>
	    <div class="container">
		    <div class="inner-container news">
			 
			    <div class="splitted-container">
				    <div class="row">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							
							<div class="events-wrapper detail">
								
								<div class="img-wrapper">
									<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($new->ID) ); ?>">
								</div>
								<div class="event-detail">
									<div class="event-detail-head">
										
											<h3><?php the_title();?></h3>
											<div class="row">
												<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
													<div class="info-divs">
														<?php //$s=the_date();
														 //$dates = strtotime($s);
														?>
														<span class="ico date"></span>
														<span class="info">Date :</span>
														<span class="value"><?php the_date('F j'); ?></span>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
													<div class="info-divs">
														<span class="ico share"></span>
														<span class="info">Share:</span>
														<a href="https://www.facebook.com/sharer/sharer.php?url=<?php echo urlencode(get_permalink($post->ID));?>" target="_blank" class="fb"></a>
														<a href="http://www.twitter.com/share?url=<?php echo urlencode(get_permalink($post->ID));?>" target="_blank" class="twitter"></a>
														<a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo urlencode(get_permalink($post->ID));?>" target="_blank" class="linkedin"></a>
														<a href="https://plus.google.com/share?url=<?php echo urlencode(get_permalink($post->ID));?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="gplus"></a>
														<span class="clearfix"></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									 <?php //echo do_shortcode ('[shareaholic app="share_buttons" id="14028992"]'); ?>
								<!--<div class="contact-social-links" id="news-sharelink">
							        <a href="<?php //echo get_field('facebook',141);?>" target="_blank" class="facebook"></a>
							        <a href="<?php //echo get_field('twitter',141);?>"  target="_blank" class="twitter" target="_blank"></a>
							        <a href="<?php //echo get_field('linkedin',141);?>"  target="_blank" class="linkedin" target="_blank"></a>
							        <a href="<?php //echo get_field('google_plus',141);?>"  target="_blank" class="gplus" target="_blank"></a> </div>-->
                                    <?php $mapusa = get_field('usa_map_id'); ?>    
							        <?php  $usa_lat = $mapusa['lat']; ?>
	         					    <?php  $usa_long = $mapusa['lng']; ?>
						   
								<div class="event-text">
											<p><?php the_content();?></p>
												<div class="special-wrapper">
											    </div>
											
											
										</div>
							</div>
								
					     </div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="sidebar">
								
								 <?php dynamic_sidebar('twitter-sidebar'); ?> 
							</div>
					    </div>
				    </div>
			    </div>
              
		    </div>
	    </div>
  <?php endwhile;?>
								<?php endif;?>
    </section>
	  
   <!-- <section class="footer-strip">
    </section>-->
    <span class="strip"></span>
<?php get_footer();?>
   <script>
		  $(document).ready(function(){
			  $(".img-block").fancybox({padding:0});
		  });
	  </script>
  
