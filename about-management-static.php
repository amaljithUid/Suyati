<?php  /*
Author:Suyati Technologies
Theme Name:Suyati
Template Name:About Management Page static
*/?>
<?php get_header();?>
	  <!-- Inner head-->
   
    <section class="inner-page">
	     <div class="head-banner management-team">
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
				    <?php /*?><?php the_content();?><?php */?>
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
						       <?php the_content(); ?>
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
<?php get_footer();?>
