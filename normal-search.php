<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name: Search Page
*/?>
<?php get_header();?>
 	  <!-- Inner head--> 
    <section class="inner-page">
	    <div class="head-banner advisory-board">
		    
		    <h1>Search Results!</h1>	
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
		    <div class="inner-container video-area">
			    <div class="splitted-container">
				    <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h3>Search Results for "<?php echo $_GET['s'];?>"</h3>
												<?php   if ( have_posts() ) : ?>
													  <?php while ( have_posts() ) : the_post(); $postCount++; array_push($exclude, $post->ID); ?>
														 <a href="<?php echo get_the_permalink();?>"><?php the_title();?></a>
														 <p><?php  echo substr(strip_tags(get_the_content()),0,300);?></p>
														 
														<?php endwhile; ?>
													       <?php endif;; ?>
										 <?php if (!have_posts() ) : ?>
										<h1>Oops..No results found!!!</h1>
									     <?php endif?>
					    </div>
						
				    </div>
			    </div>
		    </div>
	    </div>
    </section>
    <span class="strip"></span>
 <?php get_footer();?>  