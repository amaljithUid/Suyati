<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:Job
*/?>
<?php get_header();?>
<!-- Inner head-->

<section class="inner-page">
	<div class="head-banner advisory-board">
		<?php    if ( have_posts() ) :
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
		<img src="<?php  echo get_field( "image", $qq->ID );?>" /><?php }?>
	<h1><?php the_title();?></span></h1>
	<?php the_content();?>
	<?php  endwhile;
	endif; ?>
	
</div>
<div class="breadcrumb-container">
	<div class="container">
		<div class="breadcrumb">
			<span class="seperator"></span><?php if(function_exists('bcn_display'))
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
				<div class="dxgd" style="display:none"></div>
				<div class="col-xs-12 m-top40 m-bottom40">
					<div class="row">
						
						<div class="col-lg-3 col-md-6 col-sm-6 hidden-xs">
							<div class="img-wrapper">
								<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" class="img-responsive">
							</div>
						</div>
						<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
							<div class="text-wrapper">
								<h2><?php echo get_field('title');?></h2>
								<p><?php echo get_field('content');?></p>
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="general-container">
						
						<div class="job-category-tab">
							
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane active" id="home">
									<ul class="job-list">
										<?php
										$args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'jobopening');
											$jobopening = get_posts( $args );
											$catleft=array();
											
										?>
										<?php /*Code For Get All job-category Taxonomy starts here*/
										$categories = get_terms( 'job_category' );
										$t_cnt = wp_count_terms('job_category' );
										$cnt == 0;
										// print_r($jobopening);
										$post_cat_array = array();
										foreach ($jobopening as $opening){

											$post_id = $opening->ID;
											$country_info= get_field('country',$post_id);
											// $country = $country_info[0];
											foreach ($country_info as $country) {																						
												$terms = get_the_terms($opening->ID,'job_category');
												foreach ( $terms as $term ) {
													$jobtaxonomy = $term->name;
												}
												if (array_key_exists($jobtaxonomy, $post_cat_array)){
													$post_cat_array[$jobtaxonomy][] = $country;
												}
												else{
													$post_cat_array[$jobtaxonomy] = array($country);
												}
											}
										}
										// print_r($post_cat_array);
										// 	echo "<br />";

										foreach ( $categories as $category ) :
																				
																					
										$cnt++;
										$title = $category->name;
										$content = $category->description;
										$category_link = get_term_link( $category);
										if($cnt%5 == 1){ $block_color = "red";}
										elseif($cnt%5 == 2){ $block_color = "green";}
										elseif($cnt%5 == 3){ $block_color = "blue";}
										elseif($cnt%5 == 4){ $block_color = "orange";}
										else{ $block_color = "gold";}
										$category_image = get_field('category_image',"job_category_".$category->term_id);
										?>
										
										<li>
											<div class="row">
												<div class="table-wrapper">
													
													<div class="ic-wrapper">
														<img src="<?php echo $category_image;?>">
													</div>
													<div class="job-list-container">
														<div class="contry-flag">
															<div class="<?php echo in_array('india', $post_cat_array[$title])?'india enebled':'india disabled';?>"></div>
															<div class="<?php echo in_array('usa', $post_cat_array[$title])?'us enebled':'us disabled';?>"></div>
														</div>
														<h4><?php echo $title;?></h4>
														<div id="toggler_div" class="toggler_div" >
														<?php $jobopening_array=array();?>
														
															<ul  class="category-list">
																<?php
																foreach($jobopening as $jobopenings):
																$country= get_field('country',$jobopenings->ID);
																$country_india = $country[0];
																$title = $category->name;
																$terms = get_the_terms($jobopenings->ID,'job_category');
																foreach ( $terms as $term ) {
																$jobtaxonomy = $term->name;
																}
																?>
																<?php if($title == $jobtaxonomy):?>
																<?php //if($country_india == 'india'):?>
																<li><i></i><a href="<?php echo post_permalink($jobopenings->ID);?>"> <?php echo $jobopenings->post_title;?></a><span>(<?php echo get_field('count',$jobopenings->ID);?>)</span></li>
																<?php //endif;?>
																<?php endif;?>
																<?php endforeach;
																?>
															</ul>

														</div>
													</div>

													<a href="#" id="toggler_btn" class="toggler_btn" >
														<i class=""></i>
													</a>

												</div>
												
											</div>
											
										</li>
										<?php endforeach;?>
									</ul>
									
								</div>
								<div class="tab-pane" id="profile">
									<ul class="job-list">
										<?php
										$args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'jobopening');
											$jobopening = get_posts( $args );
											$catleft=array();
											
										?>
										<?php /*Code For Get All job-category Taxonomy starts here*/
										$categories = get_terms( 'job_category' );
										$t_cnt = wp_count_terms('job_category' );
										$cnt == 0;
										foreach ( $categories as $category ) :
																				
																					
										$cnt++;
										$title = $category->name;
										$content = $category->description;
										$category_link = get_term_link( $category);
										if($cnt%5 == 1){ $block_color = "red";}
										elseif($cnt%5 == 2){ $block_color = "green";}
										elseif($cnt%5 == 3){ $block_color = "blue";}
										elseif($cnt%5 == 4){ $block_color = "orange";}
										else{ $block_color = "gold";}
										$category_image = get_field('category_image',"job_category_".$category->term_id);
										?>
										
										<li class="<?php echo $block_color;?>">
											<div class="row">
												<div class="col-sm-4 col-xs-12">
													<div class="table-wrapper">
														
														<div class="ic-wrapper">
															
															<img src="<?php echo $category_image;?>">
														</div>
														<h4><?php echo $title;?></h4>
													</div>
												</div>
												<div class="col-sm-8 col-xs-12">
													
													<div class="list-wrapper">
														<ul class="category-list">
															<?php
															
															$jobopening_array=array();
															foreach($jobopening as $jobopen):
															$country= get_field('country',$jobopen->ID);
															$country_usa = $country[0];
															$title = $category->name;
																										$terms = get_the_terms($jobopen->ID,'job_category');
																										foreach ( $terms as $term ) {
															$jobtaxonomy = $term->name;
															}
															
															?>
															
															<?php if($title == $jobtaxonomy):?>
															<?php if($country_usa == 'usa'):?>
															<!--<div class="col-sm-8 col-xs-12">
																
																	<div class="list-wrapper">
																	<ul class="category-list">-->
																		
																		<!--<li><i></i><a href="<?php //echo post_permalink($jobopen->ID);?>"> <?php //echo $jobopen->post_title;?></a><span>(<?php //echo get_field('count',$jobopen->ID);?>)</span></li>
																		-->
																	<!--</ul>
																</div>
																
															</div>-->
															<?php endif;?>
															<?php endif;?>
															<?php endforeach;?>
														</ul>
													</div>

													
													
												</div>
											</div>
											
										</li>
										
										
										<?php endforeach;?>
										
										
									</ul>
									
								</div>
								
							</div>
						</div>
					</div>
					
					
					
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="height: 1040px;">
					
					<?php get_sidebar('job'); ?>
					
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



