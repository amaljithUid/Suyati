<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:About Process Methdology
*/
get_header();
?>
   <!-- Inner head-->
    <section class="inner-page">
        <?php  if ( have_posts() ) :
			   while ( have_posts() ) : the_post();?>	
        
	    <div class="head-banner advisory-board">
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
		    <h1><?php the_title();?></span></h1>
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
								<div class="sion-block" id="vision">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="text-wrapper">
												 <?php the_content();?>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 hidden-sm hidden-xs">
											<div class="image-wrapper">
												
                                                                                                <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" class="img-responsive">
											</div>
										</div>
									</div>
								</div>
							</div>
					    </div>
                                                <?php  endwhile;
                                                       else :
                                                             echo wpautop( 'Sorry, no posts were found' );
                                                       endif;
                                                ?>
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
    <span class="strip"></span>
<?php get_footer();?>



