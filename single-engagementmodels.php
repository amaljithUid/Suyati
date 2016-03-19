<?php
/*
Author:Webcastle
Theme Name:Suyati
*/
get_header();
?>
 <section class="inner-page cms">
	     <div class="head-banner cms">
                   <?php  if ( have_posts() ) :
            while ( have_posts() ) : the_post();$p_id = get_the_ID();?>
              <?php
	      $args = array(
	'numberposts' => 1,
	'post_type' => 'inner-banner',
	'meta_key' => 'post',
	'meta_value' => $p_id,
        
);
$the_query = get_posts( $args );foreach($the_query as $qq){
?>
<img src="<?php  echo get_field( "image", $qq->ID );?>" />
<?php } $content_post = get_post(1152);
$content = $content_post->post_content;?>
		    <h1><?php echo get_the_title($p_id);?></h1>
	    		<p><?php echo get_field( "sub_title", $p_id );?></p>
			
	    </div>
		<div class="breadcrumb-container">
			<div class="container">
			   <div class="breadcrumb">
				 <span class="seperator"></span> <?php if(function_exists('bcn_display')){bcn_display();}?>
			    </div>
			</div>
			
		</div>
	    <div class="container">
		    <div class="inner-container">
			    <div class="splitted-container ">
				    <div class="row">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="cms-wrapper engage-page">
                                                            <div class="cms-row"><p><?php the_content();?></p></div>
							    
								<div class="spot-contact">
									<div class="row">
										<div class="col-lg-8 col-md-12">
											<div class="text-wrapper">
												<p><?php echo get_post_meta( $content_post->ID,"contact", true ); ?></p>
											</div>
											
										</div>
										<div class="col-lg-4 col-md-12">
											<div class="button-wrapper">
												<a href="<?php echo get_permalink(459);?>" class="quick-enquiry-button">Contact Us<span class="element-animation"></span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
							
					    </div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="sidebar">
                                                            <?php get_sidebar('domain'); ?>
							</div>
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
    </section>
<span class="strip"></span>
<?php endwhile;endif;get_footer();?>