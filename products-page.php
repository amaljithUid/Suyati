<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:Products
*/?>
<?php get_header();?>
 <style>
	div.wpcf7-mail-sent-ok {
		border: 2px solid #00b858;
		position: absolute;
		margin: 0;
		bottom: 10px;
		left: 33px;
		color: #fff;
		font-size: 15px;
		background: #00b858;
	}
	span.wpcf7-not-valid-tip {
		border: red 1px solid;
		font-size: 1em;
		display: block;
		right: 0;
		color: white;
		background: red;
		padding-left: 5px;
		top:0 !important;color: red;border: 0;background: white;
	}
	.wpcf7-response-output.wpcf7-display-none.wpcf7-validation-errors {
		margin: 0;
		margin-top: 6px;
		background: red;
		border: red;
		color: #fff;
		margin-left: 30px;
	}
	@media (max-width:767px){
	      span.wpcf7-not-valid-tip{top:0 !important;color: red;border: 0;background: white;}
	}
    </style>
  <!-- Inner head-->
    <section class="inner-page">
	    <div class="head-banner advisory-board product-page">
		  <!--  <h1>Products</span></h1>
	    		<p>Why we made these products?</p>
	    		<p class="small">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>-->
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
				      <h1><?php the_title();?></span></h1>
                                          <?php the_content();?>
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
			   <div class="product-page">
				   <div class="v-m-wrapper">
								<div class="v-m-nav-wrapper">
									<ul class="v-m-nav">
										<li class="active"><a href="#socxo">Socxo<span></span></a></li>
										<li><a href="#voraka">Voraka<span></span></a></li>
										<li><a href="#linecontrol">Line Control<span></span></a></li>
										<span class="clearfix"></span>
									</ul>
								</div>
								<div class="sion-block product-block" id="socxo">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="text-wrapper" style="height: 422px;">
												<h2><?php echo get_field('socxo_title');?></h2>
												<?php echo get_field('socxo_content');?>
												<div class="more-data animated fadeInDown">
												<?php echo get_field(socxo_more_content);?>
                                                                                                </div>
												<div class="product-links-wrapper">
													<span class="product-links green">View More <span></span></span>
													<span class="product-links red" style="display:none;">View Less <span></span></span>
													<a href="<?php echo get_field('socxo_website');?>" target="_blank" class="product-links black">Visit Website <span></span></a>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
											<div class="image-wrapper" >
												<img src="<?php echo get_field('socxo_image');?>" class="img-responsive">
											</div>
										</div>
									</div>
								</div>
								<div class="sion-block product-block" id="voraka">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
											<div class="image-wrapper" >
												<img src="<?php echo get_field('voraka_image');?>" class="img-responsive">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="text-wrapper" style="height: 422px;">
												<h2><?php echo get_field('voraka_title'); ?></h2>
												<?php echo get_field('voraka_content'); ?>
												<div class="more-data animated fadeInDown">
                                                                                                        <?php echo get_field('voraka_more_content'); ?>
												</div>
												<div class="product-links-wrapper">
													<span class="product-links green">View More <span></span></span>
													<span class="product-links red" style="display:none;">View Less <span></span></span>
													<a href="<?php echo get_field('voraka_website');?>" target="_blank" class="product-links black">Visit Website <span></span></a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
					   			<div class="sion-block product-block" id="linecontrol">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
											<div class="text-wrapper" style="height: 422px;">
												<h2><?php echo get_field('line_control_title');?></h2>
												<?php echo get_field('line_control_content');?>
												<div class="more-data animated fadeInDown">
                                                                                                <?php echo get_field('line_control_more_content');?>
												</div>
												<div class="product-links-wrapper">
													<span class="product-links green">View More <span></span></span>
													<span class="product-links red" style="display:none;">View Less <span></span></span>
													<a href="<?php echo get_field('line_control_website');?>" target="_blank"class="product-links black">Visit Website <span></span></a>
												</div>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
											<div class="image-wrapper" >
												<img src="<?php echo get_field('line_control_image');?>" class="img-responsive">
											</div>
										</div>
									</div>
								</div>
								<div class="special-wrapper">
									<div class="title-section">
										<h1>Talk to Us</h1>
										<p>We are glad to help you! Feel free to submit your Enquiries</p>
									</div>
									<?php echo do_shortcode('[contact-form-7 id="637" title="Product Talk to us"]');?>
							    </div>
							<!--</div>-->
			    </div>
			    
		    </div>
	    </div>
            </div>
    </section>
	  
   <!-- <section class="footer-strip">
    </section>-->
    <span class="strip"></span>
<?php get_footer();?>
