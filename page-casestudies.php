<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name: Casestudy
*/
get_header();
?>
    
     <section class="inner-page">
	    <div class="head-banner advisory-board resources">
		    <?php  if ( have_posts() ) :
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
<?php }
			    the_content();
			    endwhile;
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
		    <div class="inner-container resources-page ">
			    <div class="splitted-container">
				    <div class="row">
				    		<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="casestudeis-listing">
								<ul>
                                                                    <?php
								     $big = 999999999; 
								    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
								    $args = array('posts_per_page'   => 4,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'casestudies','paged' => $paged,);
                                                                            $cases = query_posts( $args );
                                                                            foreach($cases as $case):
                                                                            $posts = get_post( $case->ID );
                                                                            ?>
									<li>
										<div class="row">
											<div class="col-sm-4 col-xs-12">
												<div class="img-wrapper">
													<img src="<?php $image= wp_get_attachment_image_src( get_post_thumbnail_id($case->ID),array(230,230) );echo $image[0];?>" class="img-responsive">
												</div>
											</div>
											<div class="col-sm-8 col-xs-12">
												<div class="text-wrapper">
													<h4><?php echo get_the_title( $case->ID ); ?> </h4>
													<p><?php echo $posts->post_excerpt;?>...</p>
													<a href="<?php echo get_permalink($case->ID);?>" class="casestudeis-link">Read More<i></i></a>
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
    </section>
	  
   
    <span class="strip"></span>
<?php get_footer();?>