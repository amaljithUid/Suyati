<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:About Corporate Video
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
		    <div class="inner-container video-area">
			   
			    <div class="splitted-container">
				    <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							
							
							<div class="video-wrapper corporate">
								<h4><?php echo get_field('corporate_title');?></h4>
								<p><?php echo get_field('corporate_content'); ?> </p>
								<div class="video-gallery corporate">
							
								 <?php
					  $args = array('posts_per_page'   => 9,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'corporatevideo');
					  $corporatevideo = get_posts( $args );$count=0;
					  foreach($corporatevideo as $corporate):
						$corporate_or_webinar= get_field('corporate_or_webinar',$corporate->ID);
						 $corporates=$corporate_or_webinar[0];
						// echo($corporates);
							if($corporates =='corporate')   { $count++;?>
							<?php if($count%3 == 1) echo '<div class="row">'?>
								        
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="v-gallery-block">
                                                                                        
												<a class="video"  href="http://www.youtube.com/v/<?php echo get_field('youtubueid',$corporate->ID);?>?fs=1&amp;autoplay=1"><img src="http://img.youtube.com/vi/<?php echo get_field('youtubueid',$corporate->ID);?>/0.jpg" class="img-responsive" />
													<div class="overlay"></div></a>
												
											</div>
											<p class="foot-note"><?php echo $corporate->post_title;?></p>
										</div>
								
									<?php if($count%3 == 0) echo '</div>'?>
										<?php } ?>	
									  <?php endforeach;?>			
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="quick-contact">
										<div class="wrapper">
											<div class="row">
												<div class="col-lg-7 col-xs-12">
													<p>Looking for more information?</p>
												</div>
												<div class="col-lg-5 col-xs-12">
												<a href="<?php echo get_permalink(459);?>" class="quick-enquiry-button">Contact Us <span class="element-animation"></span></a>
												</div>
											</div>
										</div>
									</div>
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
