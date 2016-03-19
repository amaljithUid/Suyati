<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:Partners
*/?>
<?php get_header();?>
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
							<div class="">
								<?php the_content();?>
							</div>
							

							<div class="partners-tab-wrapper">
								<div class="tab-content responsive">
								<?php
                                                                      $args = array('posts_per_page'   => 9,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'partner');
                                                                      $partners = get_posts( $args );
                                                                      foreach($partners as $part):
                                                                      $tab++;
								      ?>
									<div class="row nav-tabs responsive" id="myTab">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 tab-div" <?php if($tab ==1){echo 'class="active"';}?>>
											<a href="#tab-<?php echo $tab;?>">
											<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($part->ID) );?>">
											</a>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 tab-pane animated fadeInUp <?php if($tb==1){echo "active";}?>" id="tab-<?php echo $tab;?>">
										<div class="tab-text-wrapper">
										  <h2><?php echo $part->post_title;?></h2>
										  <p><?php echo $part->post_content;?></p>
                                                        
									  </div>
										</div>
                                    </div>
                                    <?php endforeach;?>

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
  <script type="text/javascript">
		  (function($) {
			 fakewaffle.responsiveTabs(['xs', 'sm']);
		  })(jQuery);
		</script>