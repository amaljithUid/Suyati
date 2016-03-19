<?php
/*
Author:Webcastle
Theme Name:Suyati
*/
get_header();
$term = get_queried_object()->term_id;
?>
     <section class="inner-page cms">
	     <div class="head-banner cms">
               <?php
	      $args = array(
	'numberposts' => 1,
	'post_type' => 'inner-banner',
	'meta_key' => 'technology_category',
	'meta_value' => $term,
        
);
$the_query = get_posts( $args );foreach($the_query as $qq){
?>
<img src="<?php  echo get_field( "image", $qq->ID );?>" />
<?php }?>
		    <h1><?php single_cat_title();?></span></h1>
	    		<?php echo get_field('banner_content',"technology-type_".$term);?>
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
                                                           query_posts($query_string . "&order=ASC&order_by=menu_order");
                                                            $count_posts = wp_count_posts();
                                                           $t_cnt = $count_posts->publish;
                                                           $cnt == 0;
                                                           while ( have_posts() ) : the_post();
                                                           $cnt++;
							    $title=get_the_title();
							    $content = get_the_excerpt();
                                                            $p_id = get_the_ID();
                                                            if($cnt%3 == 1){ $block_color = "red";}
							    elseif($cnt%3 == 2){ $block_color = "green";}
							    else{ $block_color = "blue";}
                                                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $p_id ));
                                                            ?>
                                                            <div class="cms-row <?php echo $block_color; if($cnt == $t_cnt){echo " last";}?>">
									<div class="row">
										<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
											<div class="image-wrapper">
												<img src="<?php echo $image[0];?>" class="img-responsive">
											</div>
											
										</div>
										<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
											<div class="text-wrapper">
												<h2><?php echo $title;?></h2>
												<p><?php echo $content;?></p>
												<a href="<?php the_permalink(); ?>" class="cms-link <?php echo $block_color;?>">View More</a>
											</div>
										</div>
									</div>
									
								</div>
                                                                <?php endwhile; ?>
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
	  
   <!-- <section class="footer-strip">
    </section>-->
    <span class="strip"></span>
<?php get_footer();?>
