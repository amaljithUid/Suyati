<?php
/*********************************************************
					Header for microsite
					created:SuyatiAJL
*********************************************************/
?>

<section class="banner">
		    <div class="banner-slider-wrapper">

		    		<div class="container banner-description static-banner">
						    <div class="row">
						    	<div class="col-lg-12">
							    	   <?php if(get_field('link_url',$banner->ID)!=""){?>
								   <a href="<?php echo get_field('link_url',$banner->ID);?>"> <?php }?>
								   <div class="banner-text">
									    <h1 class=""><?php echo get_field('banner_text',$banner->ID);?></h1>
								    </div>
								   <?php if(get_field('link_url',$banner->ID)!=""){?>
								   </a> <?php }?>
							     </div>
						    </div>
					    </div>
					 <div class="banner-fade-strip"></div>
		    		<img class="banner-img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($banner->ID) ); ?>">
		    </div>
	   
    </section>
