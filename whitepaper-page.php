<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name: Resources WhitePaper
*/
get_header();
?>
<!-- Inner head-->
    <section class="inner-page">
	    <div class="head-banner advisory-board resources">
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
<img src="<?php  echo get_field( "image", $qq->ID );?>" />
<?php }?>
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
		    <div class="inner-container resources-page ">
			    <div class="splitted-container">
				    <div class="row">
				    		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="casestudeis-listing white-papers">
								<ul>                 

						  
                                                      <?php
						       $big = 999999999; 
                                                       $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        					       $args = array('posts_per_page'   => 4,'orderby'=>'ID','order'=>'DESC', 'post_type'=>'whitepaper','paged' => $paged,);
						       $whitepaper = query_posts( $args );
            					       $count = 0;
						       foreach($whitepaper as $whitepaper):
						       $count++;
						       ?>
                                                                        <li>
										<div class="row">
											<div class="col-sm-4 col-xs-12">
												<div class="img-wrapper">
                                                   <img src="<?php $image= wp_get_attachment_image_src( get_post_thumbnail_id($whitepaper->ID),array(230,230) );echo $image[0];?>" class="img-responsive">
											
												</div>
											</div>
											<div class="col-sm-8 col-xs-12">
												<div class="text-wrapper">
													<a href="<?php echo post_permalink($whitepaper->ID);?>" ><h4><?php echo $whitepaper->post_title;?></h4></a>
                                                                                                        <p><?php if(strlen($whitepaper->post_title)<40){  echo substr(strip_tags($whitepaper->post_content),0,200);}else{ echo substr(strip_tags($whitepaper->post_content),0,100);}?>...<?php// echo $whitepaper->post_excerpt;?></p>
													<!--<a href="#downloadform" class="casestudeis-link">Download<i></i></a>-->
                                                                                                     <a href="<?php echo post_permalink($whitepaper->ID);?>" class="casestudeis-link">Read more<i></i></a> 
												</div>
											</div>
										</div>
									</li>
							 <?php endforeach;?>	
									
							    </ul>
						    </div>
								<div class="pagination">
                                                              <?php 
               
                echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),'format' => '?page%#%','current' => max( 1, get_query_var('paged') ),	'total' => $wp_query->max_num_pages, 'prev_next' => true,'prev_text' => '<span><big>&larr;</big></span>&nbspPrevious','next_text' => 'Last&nbsp<span><big>&rarr;</big></span>') );
                ?>       
                       
	    <span class="clearfix"></span>
								</div>
									
					    </div>
					    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						    <div class="sidebar">
							    <?php dynamic_sidebar('resource-sidebar'); ?>  
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
