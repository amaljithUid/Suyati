<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:About Vision Page
*/?>
<?php get_header();?>
  <!-- Inner head-->
     <section class="inner-page">
	     <div class="head-banner management-team">
		 <?php if ( have_posts() ) :
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
				      <h1><?php the_title();?></span></h1>
				   <p> <?php the_content();?></p>
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
							<div class="v-m-wrapper">
								<div class="v-m-nav-wrapper">
									<ul class="v-m-nav">
										<li class="active"><a href="#vision"><?php  echo get_field( "vision_title", get_the_ID() ); ?><span></span></a></li>
										<li><a href="#mission"><?php echo get_field('mission_title',get_the_ID());?><span></span></a></li>
										<li><a href="#quality"><?php echo get_field('quality_policy_tilte',get_the_ID());?><span></span></a></li>
										<span class="clearfix"></span>
									</ul>
								</div>
								<div class="sion-block" id="vision">
									<div class="row">
										<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
											<div class="text-wrapper">
												<h2><?php  echo get_field( "vision_title", get_the_ID() ); ?></h2>
												<p><?php  echo get_field( "vision_content", get_the_ID() ); ?></p>
												<p><?php  echo get_field( "vision_content_two", get_the_ID() ); ?></p>
											</div>
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 hidden-xs">
											<div class="image-wrapper">
												<img src="<?php  echo get_field( "vision_image", get_the_ID() ); ?>" class="img-responsive">
											</div>
										</div>
									</div>
								</div>
								<div class="sion-block" id="mission">
									<h2><?php  echo get_field( "mission_title", get_the_ID() ); ?></h2>
									<div class="row">
										<div class="col-lg-5 col-md-5 col-sm-5 hidden-xs">
											
											<div class="image-wrapper">
													<img src="<?php  echo get_field( "mission_image", get_the_ID() ); ?>" class="img-responsive">
												</div>
										</div>
										<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
											<div class="text-wrapper">
												
													<p><?php  echo get_field( "mission_content", get_the_ID() ); ?></p>
													<p> <?php  echo get_field( "mission_content_two", get_the_ID() ); ?> </p>	
											</div>
										</div>
									</div>
								</div>
								<div class="sion-block quality" id="quality">
									<div class="row">
										<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
											<div class="text-wrapper">
												<h2><?php echo get_field('quality_policy_tilte',get_the_ID());?></h2>
                                                                                            <?php echo get_field('quality_policy_content',get_the_ID());?>
											</div>
										</div>
										<div class="col-lg-5 col-md-5 col-sm-5 hidden-xs">
											<div class="image-wrapper">
												<img src="<?php  echo get_field( "quality_policy_image", get_the_ID() ); ?>" class="img-responsive">
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