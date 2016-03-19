<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name: Casestudy
*/
get_header();
?>
    
     <section class="inner-page">
	    <div class="head-banner advisory-board resources">
		    <?php
                     $page = get_page( 836 );
                     echo $page->post_content;
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
		    <div class="inner-container resources-page new">
			    <div class="splitted-container">
				    <div class="row">
				    		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="casestudeis-listing">
								<ul>
                                                                    <?php
                                                                    global $wp_query;
								     $big = 999999999; 
								    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
								     if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
									<li>
										<div class="row">
											<div class="col-sm-4 col-xs-12">
												<div class="img-wrapper">
													<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($case->ID) );?>" class="img-responsive">
												</div>
											</div>
											<div class="col-sm-8 col-xs-12">
												<div class="text-wrapper">
													<h4><?php echo get_the_title(); ?> </h4>
													<p><?php echo get_the_excerpt();?></p>
													<a href="<?php echo get_permalink($case->ID);?>" class="casestudeis-link">View More<i></i></a>
												</div>
											</div>
										</div>
									</li>
                                                                        <?php endwhile;?>
									</ul>
						    </div>
							<div class="pagination">
							              
                 <?php 
               
                echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),'format' => '?page%#%','current' => max( 1, get_query_var('paged') ),	'total' => $wp_query->max_num_pages, 'prev_next' => true,'prev_text' => '<span><big>&larr;</big></span>&nbspPrevious','next_text' => 'Last&nbsp<span><big>&rarr;</big></span>') );
               endif; ?>   
						    </div>
					    </div>
					    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						    <div class="sidebar">
								<?php dynamic_sidebar('resource-sidebar'); ?> 
							    <div class="selecter-wrapper">
                                                                    <?php $tags =  get_terms( 'casestudy-tag' );?>
								    <select  onchange='document.location.href=this.options[this.selectedIndex].value;'>
								    		<option value="">Browse by technology</option>
										<?php foreach ($tags as $tag){?>
									      <option value="<?php echo get_term_link($tag); ?>"><?php echo $tag->name;?></option>
								    <?php  } ?>
								    </select>
							    </div>
							</div>
					    </div>
				    </div>
			    </div>
			    
			  
			    
		    </div>
	    </div>
    </section>
	  
   
    <span class="strip"></span>
<?php get_footer();?>