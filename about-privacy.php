<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:Privacy Policy
*/
get_header();
?>
 <!-- Inner head-->
    <section class="inner-page">
	    <div class="head-banner advisory-board">
		 <?php    if ( have_posts() ) :
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
				    <?php //the_content();?>
				<?php  endwhile;
				       endif; ?>
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
							<div class="v-m-wrapper process-methodoly">
								<div class="sion-block quality" id="quality">
									<div class="row">
										<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
											<div class="text-wrapper">
											 <?php    if ( have_posts() ) :
												   while ( have_posts() ) : the_post();?>
												  <!--  Your loop code-->
												 <?php the_content();?>
												<?php  endwhile;
												   endif; ?>
														 
											</div>
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 hidden-xs">
											<div class="image-wrapper p-p">
												<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" class="img-responsive">
											</div>
										</div>
									</div>
								</div>
							</div>
					    </div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="sidebar">
								 <?php dynamic_sidebar('about-sidebar'); ?> 
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