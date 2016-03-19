<?php
/*
Author:Webcastle
URL:http://webcastltech.com
Theme Na
Template Name: blog template
*/
get_header();
?>
<section class="inner-page">
	    <div class="head-banner advisory-board blog">
            <?php $category = get_the_category();$p_id = $category[0]->term_id;?>
             <?php
	      $args = array(
	'numberposts' => 1,
	'post_type' => 'inner-banner',
	'meta_key' => 'category',
	'meta_value' => $p_id,
        
);
$the_query = get_posts( $args );foreach($the_query as $qq){
?>
<img src="<?php echo get_field( "image", $qq->ID );?>" />
<?php }?>
                   <?php
		   $cur_cat_id = get_cat_id( single_cat_title("",false) );
$life = "";
 if($cur_cat_id == 309){
	    $life = 309;
    }
    ?>
<h1><?php single_cat_title(); ?>
</h1>
                                             <p> <?php echo category_description( get_category_by_slug('blog')->term_id ); ?></p>
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
			   
			    <div class="splitted-container blog-page">
				    <div class="row">
				    		
					     <div class="col-md-9 col-sm-12 col-xs-12">
                                       <?php
                     $big = 999999999; 
		    
		   while(have_posts()): 
		    the_post();?> 

                             
                             
							<div class="blog-post-item">
								 <div class="row">
									<div class="col-sm-2 hidden-xs b-right">
										<div class="date-column">
											<div class="date">
												<span class="num"><?php echo get_the_date( 'd' ); ?></span>
												<span class="month"><?php echo get_the_date( 'M/Y' ); ?></span>
												<span class="ball"></span>

											</div>
											<div class="clear"></div>
											<!--<div class="hits">										
												<span>Posted by : </span><span class="red"><?php the_author_nickname(); ?></span><br>
												<span>Category :</span><span class="red"><?php
													$catc=0;
foreach((get_the_category()) as $category)
{
    if ($category->category_parent == "14")
    {$catc++;
	   $catid =$category->cat_ID;
       if($catc>1){echo ", ";} echo '<a href="' . get_category_link($category->cat_ID) . '">' . $category->cat_name . '</a>';
    }

}
?></span><br>
											</div>-->
											<div class="category-post">
		     					<ul>
		     					   <li id="postby">Posted by :&nbsp  </li>
		     					   <li id="postby_value"><?php the_author_nickname(); ?></li>
		     					</ul>
		     					<ul>
		     					   <li id="category">Category &nbsp :&nbsp </li>
		     					   <li id="category_value"><?php
	                                                               $life = "";												
	                                                               $catc=0;
                                                                   foreach((get_the_category()) as $category)
                                                                   {
                                                                     if ($category->category_parent == "14")
                                                                       {
                                                                           $catc++;
	                                                                       $catid =$category->cat_ID;
                                                                           if($catc>1){echo ", ";} echo '<a href="' . get_category_link($category->cat_ID) . '">' . $category->cat_name . '</a>';
                                                                             }
                                                                            if($catid == 309){
	                                                                           $life = 309;
                                                                        }
                                                                     }
                                                            ?> 
                                      </li>
		     					</ul>
		     					</div>
										</div>
									</div>
									<div class="col-sm-10 col-xs-12 b-left">
										<div class="blog-wrapper">
											
											
											<div class="row">
												<div class="col-sm-5 col-xs-12 hidden">
													<div class="img-wrapper">
														<?php the_post_thumbnail('bloglist');?>
														<div class="blog-info visible-xs">
															<span class="date-num"><?php echo get_the_date( 'd' ); ?></span><span class="date-year"><?php echo get_the_date( 'M/Y' ); ?></span><br>
															<div class="clear"></div>
															<div class="hit-wrapper">																
												<span>Posted by : </span><span class="red"><?php the_author_nickname(); ?></span><br>
												<span>Category :</span><span class="red"><?php
foreach((get_the_category()) as $category)
{
    if ($category->category_parent == "14")
    {
        echo '<a href="' . get_category_link($category->cat_ID) . '">' . $category->cat_name . '</a>';
    }
    
}
?></span>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-sm-12  col-xs-12">
													   <a href="<?php the_permalink();?>"><h1 class="blog-title"><?php echo the_title();?></h1></a>
													<div class="text-wrapper ccc">
														<p><?php echo strip_tags(get_the_excerpt(50)); ?> </p>
													</div>
                                                     <a href="<?php the_permalink(); ?>" class="view-more">View More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
                              <?php //endforeach;
			      endwhile;
			      ?>
                             	<div class="pagination">
                        
                 <?php 
               
                echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),'format' => '?page%#%','current' => max( 1, get_query_var('paged') ),	'total' => $wp_query->max_num_pages, 'prev_next' => true,'mid_size' => 2,'prev_text' => '<span><big>&larr;</big></span>&nbspPrevious','next_text' => 'Next&nbsp<span><big>&rarr;</big></span>') );
                ?>       
                       
	    <span class="clearfix"></span>
						    </div>    
					    </div>
					     <div class=" col-md-3 col-sm-12 col-xs-12">
							<div class="sidebar">
							
							
							<div class="subscribe-sidebar">
								<?php dynamic_sidebar('subscribe-sidebar'); ?> 
								</div>
								<div class="newsletter-widget" id="newsletter">
									<h4>Get the Newsletter</h4>
									<?php echo do_shortcode('[email-subscribers namefield="NO" desc="" group="Public"]'); ?>

								</div>
								<div class="selecter-wrapper">
									<h4>Categories</h4>
								  <select  class="event-dropdown"  onchange='document.location.href=this.options[this.selectedIndex].value;'> 
 <option value=""><?php echo esc_attr(__('Browse by Category ')); ?></option> 
 <?php 
  $categories = get_categories('child_of=14'); 
  foreach ($categories as $category) {
     // echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a><br/>';
  	$option = '<option value="'. get_category_link( $category->term_id ) . '">';
	$option .= $category->cat_name;
	$option .= '</option>';
	echo $option;
  }
 ?>
</select>            	  
							    </div>		
								<div class="twitter-stream">
									<h2>Twitter Stream</h2>
									<?php dynamic_sidebar('twitter-sidebar'); ?> 
								</div>
								<div class="sidebar-block big-link one">
									<h3>Whitepapers</h3>
								<a href="<?php echo get_permalink(701);?>" class="">View All</a>
								</div>
								<div class="sidebar-block big-link two">
									<h3>Casestudies</h3>
									<a href="<?php echo get_permalink(836);?>" class="">View All</a>
								</div>
                                
								<div class="sidebar-block">
                                 <?php
                                     $args = array('posts_per_page'   => 1,'orderby'=>'menu_order','order'=>'DESC', 'post_type'=>'corporatevideo');
                                     $corporatevideo = get_posts( $args );
                                     foreach($corporatevideo as $corporate):
				     $corporate_or_webinar= get_field('corporate_or_webinar',$corporate->ID);
                                     ?>
								<h6>YouTube</h6>
                                   <div class="v-gallery-block">
                                      
												<a class="video"  href="http://www.youtube.com/v/<?php echo get_field('youtubueid',$corporate->ID);?>?fs=1&amp;autoplay=1"><img src="http://img.youtube.com/vi/<?php echo get_field('youtubueid',$corporate->ID);?>/0.jpg" class="img-responsive" />
													<div class="overlay"></div></a>
												<div class="tag-area" style="position:inherit">
													 <a href="<?php echo get_field('youtube_link',141);?>" target="_blank"><p>SEE OUR YOUTUBE CHANNEL</p></a>
												 </div>
											</div>
                                      <p></p>

                                     <?php endforeach;?>
                                
								</div>
                                 <div class="suyati-step-widget" id="suyati-step" style="margin-top:20px;">
								<a href="http://suyati.com/blog/suyatistep/"><?php echo do_shortcode('[Best_Wordpress_Gallery id="7" gal_title="SuyatiSTEP"]') ?></a>
							</div>
								<div class="archive-list">
									<h3>Archives</h3> 
									
										<?php dynamic_sidebar('blog');?>
								</div>
								</div>
							</div>
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
    </section>
<?php get_footer(); ?>