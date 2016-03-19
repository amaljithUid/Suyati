<?php
/*
Author:Webcastle
Theme Name:Suyati
Template Name:Talent
*/
get_header();

?>
  <!-- Inner head-->
   
    <section class="inner-page">
	    <div class="head-banner advisory-board">
		    <?php
									
		  if ( have_posts() ) :
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
<?php }?>
				      <h1><?php the_title();?></h1>
				    <?php the_content();?>
				<?php  endwhile;
				    endif;
			   ?>
	    </div>
		<div class="breadcrumb-container">
			<div class="container">
			     <div class="breadcrumb">
                          <span class="seperator"></span> <?php if(function_exists('bcn_display')){bcn_display();}?>
		    </div>
			</div>
			
		</div>
	    <div class="container">
		    <div class="inner-container video-area">
			   
			    <div class="splitted-container">
				    <div class="row">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="general-container">
								<div class="row">
									<div class="col-lg-7 col-md-6 col-sm-6 col-xs-12">
										<div class="text-wrapper">
                                                                                    
											<h2><?php echo get_field('title'); ?></h2>
											<?php echo get_field('content'); ?>
                                                                                       
										</div>
									</div>
									<div class="col-lg-5 col-md-6 col-sm-6 hidden-xs">
										<div class="img-wrapper">
										    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" class="img-responsive">

										</div>
									</div>
								</div>
							</div>
							
							
							
					    </div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<?php get_sidebar('talent'); ?>
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