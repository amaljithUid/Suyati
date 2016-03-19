<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:News
*/
get_header();
?>
  <!-- Inner head-->
     <section class="inner-page cms">
	     <div class="head-banner cms">
		  <?php while ( have_posts() ) : the_post();?>
              <?php $p_id = get_the_ID();?>
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
							<div class="newsblocknews">
								<div class="row">
                                                                        <?php
                     global $wp_query;
                     $big = 999999999; 
                     $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                     $args = array('posts_per_page'  =>4, 'post_type'=>'news' ,'paged' => $paged);
            query_posts($args); 
             $news = get_posts( $args ); 

																		foreach($news as $new):
                        
                                                                     ?>
									<div class="col-lg-6 col-md- 6 col-sm-6 col-xs-12">
										<div class="event-block">
											<div class="img-wrapper">
												<img src="<?php $image= wp_get_attachment_image_src( get_post_thumbnail_id($new->ID),array(370,210) );echo $image[0];?>" style="height:210px" class="img-responsive">
											</div>
											<div class="text-wrapper">
												<?php $s =  $new->post_date;
                                                                                                $date = strtotime($s);
                                                                                               
                                                                                                ?>
													<div class="row">
														<div class="col-lg-6 col-sm-12 col-xs-12">
															<div class="info-wrapper">
																<div class="info-divs">
																	<span class="ico date"></span>
																	<span class="info"></span>
																	<span class="value"><?php 
                                                                                                                                         echo date('d M Y', $date);
                                                                                                                                        ?></span>
																</div>
															</div>
														</div>
													</div>
												
												
												<h4><?php echo $new->post_title;?>
</h4>
												<p><?php  echo substr(strip_tags($new->post_content),0,100);?>...
                                                                                               
													<a href="<?php echo post_permalink($new->ID);?>">Read more</a>
</p>
											</div>
										</div>
                                                                                
									</div>
									<?php endforeach;?>
								
								</div>
							</div>
							 <?php 
               if($wp_query->max_num_pages>1){ ?><div class="pagination">     
                 <?php 
                echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),'format' => '?page%#%','current' => max( 1, get_query_var('paged') ),	'total' => $wp_query->max_num_pages, 'prev_next' => true,'prev_text' => '<span><big>&larr;</big></span>&nbspPrevious','next_text' => 'Last&nbsp<span><big>&rarr;</big></span>') );
	       
                ?>       
                       
	    <span class="clearfix"></span>
						    </div>   <?php }?>
					     </div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="sidebar">
								<div class="twitter-stream">
									<h2>Twitter Stream</h2>
									 <?php dynamic_sidebar('twitter-sidebar'); ?> 
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