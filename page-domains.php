<?php
/*
Author:Webcastle
Theme Name:Suyati
Template Name:domain
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
<?php } ?>
		    <h1><?php the_title();?></h1>
	    		<p><?php the_content();?></p>
			
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
							    <?php   $args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'domain'); $domains = get_posts( $args ); $cnt = 0; foreach($domains as $domain):$cnt++;
							    if($cnt % 3 == 1){$color = "red";}elseif($cnt % 3 == 2){$color = "blue";}else{$color = "green";}?>
								<div class="cms-row <?php echo $color;?> <?php if($cnt == count($domains)){echo "last";}?>">
									<div class="row">
										<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
											<div class="image-wrapper">
												<img src="<?php  echo wp_get_attachment_url( get_post_thumbnail_id($domain->ID) ); ?>" class="img-responsive">
											</div>
											
										</div>
										<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
											<div class="text-wrapper">
												<h2><?php echo $domain->post_title;?></h2>
												<p>  <?php echo $domain->post_excerpt;?></p>
												<a href="<?php echo get_permalink($domain->ID);?>" class="cms-link <?php echo $color;?>">View More</a>
											</div>
										</div>
									</div>
									
								</div>
								<?php endforeach;?>

								
								<div class="spot-contact">
									<div class="row">
										<div class="col-lg-8 col-md-12">
											<div class="text-wrapper">
												<p> <?php echo get_post_meta( $p_id,"contact", true ); ?></p>
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
<?php endwhile;endif; get_footer();?>