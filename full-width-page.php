<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:Full Width Page
*/?>
<?php get_header();?>
	  <!-- Inner head-->
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
    <section class="inner-page">
	     <div class="">
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
				    <?php the_content();?>
				<?php  endwhile;
				    endif;
			   ?>
	    </div>
		
    </section>
<?php get_footer();?>
