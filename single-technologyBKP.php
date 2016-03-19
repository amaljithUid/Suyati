<?php
/*
Author:Webcastle
Theme Name:Suyati
*/
get_header();
$p_id = get_the_ID();
?>
     <section class="inner-page cms">
	     <div class="head-banner cms">
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
		    <h1><?php echo get_the_title();?></span></h1>
	    		<?php echo get_field( "banner_content", $p_id);?>
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
							<div class="cms-wrapper">
								<?php $num = get_field( "show_numbers", $p_id);?>
								<h2><?php echo get_field( "top_title", $p_id);?></h2>
								<?php if(get_field( "template", $p_id)=="color"):?>
								<?php if(get_field( "red_content", $p_id)!=""):?>
								<div class="cms-row ektron">
									<div class="row">
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="text-wrapper">
												<?php if($num):?>
												<h6 class="special-num red">01</h6><?php endif;?>
												<?php echo get_field( "red_content", $p_id);?>
												
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="image-wrapper">
												<img src="<?php echo get_field( "red_image", $p_id);?>">
											</div>
										</div>
									</div>
									
								</div>
								<?php endif;?>
								<?php if(get_field( "green_content", $p_id)!=""):?>
								<div class="cms-row ektron">
									<div class="row">
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="text-wrapper">
												<?php if($num):?>
												<h6 class="special-num green">02</h6><?php endif;?>
												<?php echo get_field( "green_content", $p_id);?>
												
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="img-wrapper">
												<img src="<?php echo get_field( "green_image", $p_id);?>">
											</div>
										</div>
									</div>
									
								</div>
								<?php endif;?>
								<?php if(get_field( "blue_content", $p_id)!=""):?>
								<div class="cms-row ektron">
									<div class="row">
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="text-wrapper">
												<?php if($num):?>
												<h6 class="special-num blue">03</h6><?php endif;?>
												<?php echo get_field( "blue_content", $p_id);?>
												
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="img-wrapper">
												<img src="<?php echo get_field( "blue_image", $p_id);?>">
											</div>
										</div>
									</div>
									
								</div>
								<?php endif;?>
								<?php if(get_field( "orange_content", $p_id)!=""):?>
								<div class="cms-row ektron">
									<div class="row">
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="text-wrapper">
												<?php if($num):?>
												<h6 class="special-num orange">04</h6><?php endif;?>
												<?php echo get_field( "orange_content", $p_id);?>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="img-wrapper">
												<img src="<?php echo get_field( "orange_image", $p_id);?>">
											</div>
										</div>
									</div>
									
								</div>
								<?php endif;?>
								<?php endif;?>
								<?php if(get_field( "template", $p_id)=="blocks"):?>
								
								<div class="cms-row ektron blocks">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="text-wrapper">
												<?php echo get_field( "block_1_content", $p_id);?>
											</div>
											<div class="space"></div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="text-wrapper">
												<?php echo get_field( "block_1_side_text", $p_id);?>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<!--<div class="img-wrapper no-circle">-->
												<?php if(get_field( "block_1_image", $p_id)!=""){?><img class="img-responsive" src="<?php echo get_field( "block_1_image", $p_id);?>"><?php }?>
											<!--</div>-->
										</div>
									</div>
									
								</div>
								<?php if(get_field( "block_2_content", $p_id)!=""){?>
								<div class="cms-row ektron blocks">
									<div class="row">
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											<div class="text-wrapper">
												<?php echo get_field( "block_2_content", $p_id);?>
											</div>
											<div class="space"></div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<!--<div class="img-wrapper no-circle">-->
												<?php if(get_field( "block_2_image", $p_id)!=""){?><img class="img-responsive"  src="<?php echo get_field( "block_2_image", $p_id);?>"><?php }?>
											<!--</div>-->
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="text-wrapper">
												<?php echo get_field( "block_2_side_text", $p_id);?>
											</div>
										</div>
									</div>
									
								</div>
								<?php }?>
							<?php endif;?>
								<div class="cms-clients">
									<div class="row our-partners-row">
										<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
											<div class="label-head">
												<h1>Our Clients</h1>
											</div>
										</div>
										<div class="col-lg-9 col-md-9 col-sm-9 col-xs-6">
											<div id="partner-carousel" class="owl-carousel">
                                                                                            <?php
                                                                                            $args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'satisfiedcustomer');
                                                                                            $customers = get_posts( $args );
                                                                                            $count = 0;
                                                                                            foreach($customers as $customer):
                                                                                            ?>
												  <div> <img src="<?php echo get_field( "customer_image", $customer->ID );?>" class="img-responsive"></div>
                                                                                            <?php endforeach;?>
											</div>
										</div>
										
								    </div>
								</div>
								<div class="client-words">
									<div class="client-word-slider">
										 <?php
                                                                            $args = array('posts_per_page'   => 5,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'whattheysay');
                                                                            $whatthey = get_posts( $args );
                                                                            $count = 0;
                                                                            foreach($whatthey as $testimonial): ?>
										<div>
											<div class="word-slide">
												<img src="<?php echo get_field( "image", $testimonial->ID );?>" class="img-circle img-responsive">
												<p> <?php echo $testimonial->post_content;?>
												<h4><?php echo get_field( "image_name", $testimonial->ID );?> <span>,<?php echo get_field( "publish_company", $testimonial->ID );?></span></h4>
												<a href="<?php echo esc_url( get_permalink( get_page_by_path( 'testimonials' ) ) ); ?>">Learn more on how we helped our clients</a>
											</div>
										</div>
										<?php endforeach;?>
									</div>
									
								</div>
								<div class="talk-us-wrapper">
									<div class="title">
										<h4>Talk to Us</h4>
									</div>
									<p>We are glad to help you! Feel free to submit your Enquiries</p>
									<a href="<?php echo get_permalink(459);?>" class="quick-enquiry-button">Quick Enquiry <span class="element-animation"></span></a>
								</div>
							</div>
					    </div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<?php get_sidebar('services-detail'); ?>
							
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
    </section>
    <span class="strip"></span>
<!-- for popup window -->       
<!--<div class="js__p_starts"></div>
<div class="p_body js__p_body js__fadeout"></div>
<div class="popup1 js__popup js__slide_top"> <a href="#" class="p_close js__p_close" title="Close"></a>
<h2 class="get-in-touch">"Get in touch with us"</h2><br>
<div class="form-content">
    <?php echo do_shortcode('[contact-form-7 id="17756" title="get-touch-contact"]');?>
    
</div>
</div>-->
</div>
<?php get_footer();?>
