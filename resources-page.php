<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name: Resources
*/
get_header();
?>
    <!-- Inner head-->
    <section class="inner-page">
	    <div class="head-banner advisory-board resources">
		 	
                        <?php 
                                $the_query = new WP_Query( 'page_id=695' );
                                while ( $the_query->have_posts() ) :
                                $the_query->the_post();?>                                           
                                 <h1><?php the_title();?></span></h1>
                                 <?php the_content();?>
                                <?php  endwhile;
                                        wp_reset_postdata();
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
		    <div class="inner-container general-container resources-page browse ">
			   <div class="row">
				  <div class="col-md-3 hidden-xs hidden-sm"></div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="resources-widget-links">
						<div class="row">
							<div class="col-md-6 col-sm-12 col-xs-12">
								 <a href="<?php echo get_permalink(701);?>"><div class="rq-block rq-1 red">
                                                                  <?php 
                                                                          $the_query = new WP_Query( 'page_id=695' );
                                                                          while ( $the_query->have_posts() ) :
                                                                          $the_query->the_post();?>                                           
                                                                          <?php echo get_field('white_paper_link');?>
                                                                          <?php  endwhile;
                                                                                wp_reset_postdata();
                                                                           ?>
                                                                            <span class="resource-view-all">View All<i></i></span>
								</div></a>
							</div>
							<div class="col-md-6 col-sm-12 col-xs-12">
								<a href="<?php echo get_permalink(836);?>"><div class="rq-block rq-2 green">
                                                                      <?php 
                                                                          $the_query = new WP_Query( 'page_id=695' );
                                                                          while ( $the_query->have_posts() ) :
                                                                          $the_query->the_post();?>                                           
                                                                         <?php echo get_field('case_studies_link');?>
                                                                          <?php  endwhile;
                                                                                wp_reset_postdata();
                                                                           ?>
									<span class="resource-view-all">View All<i></i></span>
								</div></a>
							</div>
							<div class="col-md-6 col-sm-12 col-xs-12">
							 <a href="<?php echo get_page_link(572);?>">	<div class="rq-block rq-3 blue">
                                                                     <?php 
                                                                          $the_query = new WP_Query( 'page_id=695' );
                                                                          while ( $the_query->have_posts() ) :
                                                                          $the_query->the_post();?>                                           
                                                                      <?php echo get_field('latest_webinar_link');?>
                                                                          <?php  endwhile;
                                                                            wp_reset_postdata();
                                                                           ?>	
								</div></a>
							</div>
							<div class="col-md-6 col-sm-12 col-xs-12">
								<div class="rq-block rq-4 orange">
                                                                     <?php 
                                                                          $the_query = new WP_Query( 'page_id=695' );
                                                                          while ( $the_query->have_posts() ) :
                                                                          $the_query->the_post();?>                                           
                                                                          <?php echo get_field('browse_resource_link');?>
                                                                          <?php  endwhile;
                                                                             wp_reset_postdata();
                                                                           ?>	
								</div>
							</div>
						</div>
						<div class="search-resource">
							<form role="search" method="get" action="<?php echo esc_url( home_url( '' ) ); ?><?php //echo get_page_link(695);?>">
								<span class="edge"></span>
                                                                <input type="text" role="search" value="<?php echo get_search_query();?>" name="s" id="s" placeholder="Enter your keyword">
								<input type="hidden" name="search" value="resources" />
								<button  class="submit-resource" name="submit" type="s" value="<?php esc_attr_e( 's'); ?>" id="submit-resource"><i></i></button>     
							</form>
                                                     
                        
                                                        
						</div>
					
					</div>
				</div> 
			   </div>
			   <?php  if($s!=""){?>
			    <div class="featured-carousel-wrapper search-results ">
                                <?php  $postcount=0;?>
                                <?php $args= array('post_type' => array('webinar','casestudies'),'s'    => $s) ;?>
                                                 <?php query_posts($args);?>
                                <?php   if ( have_posts() ) : ?>
				    <?php while ( have_posts() ) : the_post(); $postcount++; ?>
                                     <?php endwhile;?>
                                <?php endif;?>
				     <h2>Search Results - <span><?php echo $postcount;?></span></h2>
			    		<div class="carousel-wrapper">
						<div class="featured-carousel" id="search-results-carousel">
                                                 <?php $args= array('post_type' => array('webinar','casestudies'),'s'    => $s) ;?>
                                                 <?php query_posts($args);?>
							<?php   if ( have_posts() ) : ?>
							    <?php while ( have_posts() ) : the_post(); $postCount++; array_push($exclude, $post->ID); ?>
                                                       
							<div>
								<div class="featured-block">
									<a href="<?php echo post_permalink($post->ID);?>">
                                                                           <img width="266" src="<?php  echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" class="img-responsive">
									<div class="text-wrapper">
										<h5><?php echo $post->post_title;?></h5>
									</div>
									</a>
								
								</div>
							</div>
                                                      <?php $countresults=$postCount;?>
							<?php endwhile; ?>
							    <?php endif;?>
                                                            
							 <?php if (!have_posts() ) : ?>
								<h1>No results found!</h1>
							 <?php endif?>
									
						</div>
				    </div>
			    </div><?php }?>
			    <div class="featured-carousel-wrapper">
				     <h2>Featured Resource</h2>
			    		<div class="carousel-wrapper">
						<div class="featured-carousel fratured-resources-div" id="featured-carousel">
							 <?php $featureds = get_field('featured_posts', 695);/* print_r($featureds);*/
                                                                      foreach($featureds as $featuredwebinar):
?>   
							<div>
								
								<div class="featured-block">
									<a href="<?php echo post_permalink($featuredwebinar->ID);?>">
                                                                           <img src="<?php  echo wp_get_attachment_url( get_post_thumbnail_id($featuredwebinar->ID) ); ?>" class="img-responsive">
									<div class="text-wrapper">
										<h5><?php echo $featuredwebinar->post_title;?></h5>
									</div>
									</a>
								</div>
							</div>
                                                        <?php endforeach;?>
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
