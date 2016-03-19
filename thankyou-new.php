<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:Thankyou Page New
*/
get_header();
?>							
    <!-- Inner head--> 
    <section class="inner-pages">
		<div class="head-banner" style="height:200px;">
			
			<img src="http://suyati.com/wp-content/uploads/2014/11/bg-advisory-board-banner1.png">
		    <h1><?php the_title();?></h1>
	    </div>
		<div class="breadcrumb-container">
			<div class="container">
				<div class="breadcrumb">
                	<span class="seperator"></span> <?php if(function_exists('bcn_display')) {bcn_display(); }?>
		    	</div>
			</div>
		</div>
	    <div class="container">
		   <div class="inner-container">
			   
			    <div class="splitted-container">
				    <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="content-wrapper text-center">
								<!-- <h2>Thank you</h2> -->
								<p>
									You have submitted your CV successfully. Thank you for showing your interest in Suyati. 
									Our HR representative will get in touch with you as soon as any relevant opportunities arise. 
									In the meantime, why don’t you checkout our blogs to know more about <a href="http://suyati.com/blog/life-at-suyati/">Life at Suyati</a>.
								</p>
								<p>
									Please feel free to <a href="http://suyati.com/contactus/"></a>contact us if you have any queries.
								</p>
							</div>
					    </div>
					    <div class="row our-partners-row">
									<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
										<div class="label-head">
											<h1>Our Partners</h1>
										</div>
									</div>
									<div class="col-lg-7 col-md-7 col-sm-7 col-xs-6">
										<div id="partner-carousel" class="owl-carousel">
											        <?php
											       $args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'partner');
											       $partner = get_posts( $args );
											       $count = 0;
											       foreach($partner as $partners):
											       $count++;
											       ?>
											  <div><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($partners->ID) );?>" class="img-responsive"></div>
											  <?php endforeach;?>
										</div>
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
										<div class="quick-enquiry-wrapper">
											<a href="<?php echo get_permalink(459);?>" class="quick-enquiry-button">Quick Enquiry <span class="element-animation"></span></a>
											<span class="clearfix"></span>
										</div>
									</div>
							    </div>
					</div>
						<!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="sidebar">
								<?php   //About us dynamic sidebar
                                dynamic_sidebar( 'about-sidebar' ); ?>
							</div>
					    </div> -->
				    </div>
			    </div>
		    </div>
	    </div>
    </section>
    <span class="strip"></span>
   <?php get_footer();?>
