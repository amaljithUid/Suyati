<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name: Video Search Page
*/?>
<?php get_header();?>
 	  <!-- Inner head--> 
    <section class="inner-page">
	 
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
		    <div class="inner-container video-area">
			   
			    <div class="splitted-container">
				    <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							
							
							<div class="video-wrapper corporate">
								<h1>Search Results</h1>
								<div class="video-gallery corporate">
									<div class="row">
										<?php $args = array( 'post_type' => 'corporatevideo' );

											$args = array_merge( $args, $wp_query->query );
											query_posts( $args );?>
												<?php  if (have_posts() ) : ?>
													 <?php  while ( have_posts() ) :?>
													 <?php  the_post();?>    
													    <!---Inner-Area--->
										    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="v-gallery-block">
                                                                                        <a class="video"  href="http://www.youtube.com/v/<?php echo get_field('youtubueid',$corporate->ID);?>?fs=1&amp;autoplay=1"><img src="http://img.youtube.com/vi/<?php echo get_field('youtubueid',$corporate->ID);?>/0.jpg" class="img-responsive" />
										    </div>
											<p class="foot-note"><?php the_title();?></p>
										</div>
									<?php endwhile; ?>
								       <?php  endif;; ?>	
									</div>
									
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="quick-contact">
										<div class="wrapper">
											<div class="row">
												 <?php if (!have_posts() ) : ?>
												<div class="col-lg-7 col-xs-12">
													<p>Oops..No results found!!!</p>
												</div>
												<?php endif;?>
												<div class="col-lg-5 col-xs-12">
													
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
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