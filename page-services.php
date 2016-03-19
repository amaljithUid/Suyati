<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name: Services CMS
*/
get_header();
?>
    
     <section class="inner-page cms">
	     <div class="head-banner cms">
		<?php while ( have_posts() ) : the_post();$p_id = get_the_ID();?>
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
	    		<?php the_content();?>
		 <?php endwhile; ?>
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
                                                           <?php
							   $categories = get_terms( 'service-type' );
                                                           $t_cnt = wp_count_terms('service-type' );
                                                           $cnt == 0;
                                                           foreach ( $categories as $category ) :
							    $cnt++;
							    $title = $category->name;
							    $content = $category->description;
							    $category_link = get_term_link( $category);
                                                            if($cnt%5 == 1){ $block_color = "red";}
							    elseif($cnt%5 == 2){ $block_color = "green";}
							     elseif($cnt%5 == 3){ $block_color = "blue";}
							       elseif($cnt%5 == 4){ $block_color = "gold";}
							     else{ $block_color = "orange";}
                                                            $image = get_field('image',"service-type_".$category->term_id);
                                                            ?>
                                                            <div class="cms-row <?php echo $block_color; if($cnt == $t_cnt){echo " last";}?>">
									<div class="row">
										<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
											<div class="image-wrapper">
												<img src="<?php echo $image;?>" class="img-responsive">
											</div>
											
										</div>
										<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
											<div class="text-wrapper">
												<h2><?php echo $title;?></h2>
												<p><?php echo $content;?></p>
												<a href="<?php echo $category_link; ?>" class="cms-link <?php echo $block_color;?>">View More</a>
											</div>
										</div>
									</div>
									
								</div>
                                                                <?php endforeach; ?>
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
							</div>
							
							
							
					    </div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<?php get_sidebar('services'); ?>
							
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
    </section>
    <span class="strip"></span>
<?php get_footer();?>