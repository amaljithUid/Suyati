<?php
/*
Author:Webcastle
URL:http://webcastltech.com
Theme Name:Suyati
Template Name : Tag Blog
*/
get_header();  ?>
 <section class="inner-page">
	    <div class="head-banner advisory-board blog-detail">
           
		    <?php 
                                $the_query = new WP_Query( 'page_id=583' );
                                       while ( $the_query->have_posts() ) :
                                         $the_query->the_post();?>                                           
                                             <h1><?php the_title();?></span></h1>
                                             <p> <?php the_content();?></p>
                    <?php  endwhile;
                 wp_reset_postdata();?>
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
				    		 <?php if (have_posts()) :
								       while (have_posts()) :
								       the_post();
							         ?>

				    <div class="row">
				    		
					     <div class="col-md-9 col-sm-12 col-xs-12">
							<div class="blog-post-item">
								 <div class="row">
									<div class="col-sm-2 hidden-xs">
										<div class="date-column">
											<div class="date">
												<span class="num"><?php echo get_the_date( 'd' ); ?></span>
												<span class="month"><?php echo get_the_date( 'M/Y' ); ?></span>
												<span class="ball"></span>

											</div>
											<div class="clear"></div>
											<div class="hits">
                                                
												<span>Comment : </span><span class="red"><?php comments_number('0', '1', '%');?></span><br>
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
											<div class="flares">
												<span class="count">14</span>
												<span>Flare</span>
											</div>
                                            
                                        <div class="social share">
                                       <?php
if (function_exists('ssb_share_icons')) {
echo ssb_share_icons();
}
?>
                                            </div>
										</div>
									</div>
									<div class="col-sm-10 col-xs-12">
										<div class="blog-wrapper">
											
											<h1 class="blog-title"><?php the_title();?>  </h1>
											<div class="img-wrapper">
												<?php the_post_thumbnail('blog');?>

												<div class="blog-info visible-xs">
													<span class="date-num">22</span><span class="date-year">OCT 2014</span><br>
													<div class="clear"></div>
													<div class="hit-wrapper">
												<span>Comment : </span><span class="red"><?php comments_number('0', '1', '%');?></span><br>
												<span>Posted by : </span><span class="red"> <?php the_author_ID(); ?> </span><br>
												<span>Category </span><span class="red"> IT</span><br>
													</div>
												</div>
											</div>
											<div class="text-wrapper">
												<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
		</p>
											</div>
										</div>
									</div>
								</div>
							</div>

					     <div class=" col-md-3 col-sm-12 col-xs-12">
							<div class="sidebar">
								<div class="newsletter-widget">
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
                                 <?php
                                                             $args = array( 'posts_per_page' => 3,'orderby' => 'post_date', 'order' => 'DESC',  'category_name' => "blog" );
                                                             $myposts = get_posts( $args );$cnt= 0; 
                                                            foreach ( $myposts as $post ) :$cnt++; ?>
                                <?php if($cnt==1){?>
								<div class="sidebar-block">
									<h6>Recent Posts</h6>
									<div class="recent-news-block">
										<div class="row">
											<div class="col-xs-4">
												<div class="img-wrapper">
													<a href="<?php echo get_permalink($post->ID)?>"><?php the_post_thumbnail('blogpost');?></a>
												</div>
											</div>
											<div class="col-xs-8">
												<div class="text-wrapper">
													<label class="time"><?php 
                                    $after= ' ...';
                                    $title=get_the_title($post->ID);
                                    if ( strlen($title) > 10 ) {
	                               $title = substr($title,0,10);
	                              ?> <a href="<?php echo get_permalink($post->ID); ?>"> <?php echo  $title . $after;?></a><?php
	                               } else {
	                              ?> <a href="<?php echo get_permalink($post->ID); ?>"> <?php echo  $title;?></a><?php
	                                   }
                                    ?> | <?php echo get_the_date( 'd-m-Y', $blog->ID); ?></label>
													<p> <a href="<?php echo get_permalink($post->ID)?>"><?php echo excerpt(12); ?></a> </p>
												</div>
											</div>
										</div>
									</div>
								</div>
                                <?php   }else{?>
                                
								<div class="sidebar-block">
									<div class="recent-news-block">
										<div class="row">
											<div class="col-xs-4">
												<div class="img-wrapper">
													<a href="<?php echo get_permalink($post->ID)?>"><?php the_post_thumbnail('blog');?></a>
												</div>
											</div>
											<div class="col-xs-8">
												<div class="text-wrapper">
													<label class="time"><?php 
                                    $after= ' ...';
                                    $title=get_the_title($post->ID);
                                    if ( strlen($title) > 10 ) {
	                               $title = substr($title,0,10);
	                              ?> <a href="<?php echo get_permalink($post->ID); ?>"> <?php echo  $title . $after;?></a><?php
	                               } else {
	                              ?> <a href="<?php echo get_permalink($post->ID); ?>"> <?php echo  $title;?></a><?php
	                                   }
                                    ?> | <?php echo get_the_date( 'd-m-Y', $blog->ID); ?></label>
													<p> <a href="<?php echo get_permalink($post->ID)?>"><?php echo excerpt(12); ?></a> </p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>
									<?php endforeach; ?>
								
								
								<div class="sidebar-block big-link one">
									<h3>Whitepapers</h3>
									<a href="#" class="">View All</a>
								</div>
								<div class="sidebar-block big-link two">
									<h3>Casestudies</h3>
									<a href="#" class="">View All</a>
								</div>
                                  <?php
                                     $args = array('posts_per_page'   => 1,'orderby'=>'menu_order','order'=>'DESC', 'post_type'=>'corporatevideo');
                                     $corporatevideo = get_posts( $args );
                                     foreach($corporatevideo as $corporate):
				     $corporate_or_webinar= get_field('corporate_or_webinar',$corporate->ID);
                                     ?>
								<div class="sidebar-block">
									<h6>You Tube</h6>
									<a class="video"  href="http://www.youtube.com/v/<?php echo get_field('youtubueid',$corporate->ID);?>?fs=1&amp;autoplay=1"><img src="http://img.youtube.com/vi/<?php echo get_field('youtubueid',$corporate->ID);?>/0.jpg" class="img-responsive" /></a>
									<p>See Our You Tube Channel <span><big>&rarr;</big></span></p>
								</div>
                                  <?php endforeach;?>
					
								<div class="archive-list">
									<h3>Archives</h3> 
									<ul class="achive-list">
										  <?php
                            
                            $archi = wp_get_archives('echo=0&type=monthly&year='.$year );
                            $archi = explode( '</li>' , $archi );
                            $links = array();
                            foreach( $archi as $link ) {
                            $link = str_replace( array( '<li>' , "\n" , "\t" , "\s" ), '' , $link );
                            if( '' != $link )
                            $links[] = $link;
                            else
                            continue;
                            }
                            $fliplinks = array_reverse($links);
                            foreach( $fliplinks as $link ) {
                                
                            echo '<li>'.$link.'</li>';
                            }
                        ?>
									</ul>
								</div>
								
							</div>
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
    </section>
	  
<?php get_footer(); ?>