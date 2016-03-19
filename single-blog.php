<?php

/*

Author:Webcastle

URL:http://webcastltech.com

Theme Name:Suyati

Template Name : Single blog

*/

get_header();  ?>

<style>

	   .text-wrapper ul li{

	   list-style-type: disc;

list-style-position: inside;

}

/*.fancybox-inner{width:500px!important;}

.fancybox-wrap.fancybox-desktop.fancybox-type-inline.fancybox-opened{width:530px!important;}*/

  

                                                               

</style>

 <section class="inner-page">

	    <div class="head-banner advisory-board blog-detail">

               <?php $p_id = get_the_ID();

               ?>

             <?php

	      $args = array(

	'numberposts' => 1,

	'post_type' => 'inner-banner',

	'meta_key' => 'category',

	'meta_value' => $p_id,

        

);

$the_query = get_posts( $args );foreach($the_query as $qq){

?>

<img src="<?php  echo get_field( "image", $qq->ID );?>" />

<?php }?>

                                             <h1><?php

$category = get_the_category(); 

echo $category[0]->cat_name;

?></h1>

                                             <p> <?php the_title();?></p>

            

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

                    	<!--    <div class="row">-->

				    		 <?php if (have_posts()) :

								       while (have_posts()) :

								      the_post();

							         ?>



				    <div class="row">

                  

				    		

					     <div class="col-md-9 col-sm-8 col-xs-12">

							<div class="blog-post-item">

								 <div class="row">

									<div class="col-sm-2">

										<div class="date-column ">

											<div class="date  hidden-xs">

                                              

												<span class="num"><?php echo get_the_date( 'd' ); ?></span>

												<span class="month"><?php echo get_the_date( 'M/Y' ); ?></span>

												<span class="ball"></span>



											</div>

											<div class="clear"></div>

											<!--<div class="hits  hidden-xs">

																

												<span>Posted by : </span><span class="red"><?php the_author_nickname(); ?></span><br>

													<span>Category :</span><span class="red"><?php

	 $life = "";												$catc=0;

foreach((get_the_category()) as $category)

{

    if ($category->category_parent == "14")

    {$catc++;

	   $catid =$category->cat_ID;

       if($catc>1){echo ", ";} echo '<a href="' . get_category_link($category->cat_ID) . '">' . $category->cat_name . '</a>';

    }

   

    if($catid == 309){

	    $life = 309;

    }

}

?></span><br>



		     					</div>-->

		     					<div class="category-post hidden-xs">

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

                                        <div class="social share">

						  <?php

						   //echo do_shortcode ('[cresta-social-share]');

						 echo do_shortcode ('[shareaholic app="share_buttons" id="13000498"]');

						    ?>

                                            </div>

										</div>

									</div>

                                           <!--<div class="blogwhole-wrapper">-->

									<div class="col-sm-10 col-xs-12">

										<div class="blog-wrapper">

											

											<h1 class="blog-title"><?php  the_title();?></h1>

											                   

											

												<div class="blog-info visible-xs">

													<span class="date-num"><?php echo get_the_date( 'd' ); ?></span><span class="date-year"><?php echo get_the_date( 'M/Y' ); ?></span><br>

													<div class="clear"></div>

													<div class="hit-wrapper">

												<span>Posted by: </span><span class="red"><?php the_author_nickname();?></span><br>

												<span>Category :</span><span class="red"><?php

foreach((get_the_category()) as $category)

{

    if ($category->category_parent == "14")

    {

        echo '<a href="' . get_category_link($category->cat_ID) . '">' . $category->cat_name . '</a>';

    }

}

?></span><br>

													</div>

												

											</div>

											<div class="text-wrapper">

												 <?php

												 the_content();?>

												<?php  if ( get_post_gallery() ) :?>

												<script>

													      $(function() {

														     Grid.init();

														      

													      });

												      </script>

											<?php

											endif;

											?>

											</div>

									

										<!-- for popup window div -->

										<?php

                                             $i=0; $id=0;

                                             foreach((get_the_category()) as $category)

                                                                   {

																	   																	   

                                                                     if ($category->category_parent == "14")

                                                                       {

																		   

                                                                           $catc++;

	                                                                       $catid =$category->cat_ID;

	                                                                      

																		   if($i!=1)

																		   {

																			   $cat_name=$category->cat_name;

							

																				$d_id = get_field('cat_white_paper_download', 'category_'. $catid .'');

																				$w_id = get_field('cat_white_paper', 'category_'. $catid .'');

																				$c_id = get_field('cat_contact_form', 'category_'. $catid .'');	

																			    $download_id=$d_id->ID;

																			    $whitepad_id = $w_id->ID;

																				$contact_id=$c_id->ID;

																				$download=get_field('cat_white_paper_download',$catid);

																				$heading=get_field('download_heading','category_'. $catid .'');	

																				//$caturl = get_field('Permalink', 'category_'. $catid .'');	

																			}

																			 if($d_id!="")

																			{

																			   $i=1;

																			}

                                                                        }

                                                                    }?>

								   

                                           <?php  if($d_id!=""){?>

												<div class="popup-window" style="display:none;">
													
													<h2><?php echo $heading; ?> </h2>
													<h3><?php echo $download_id; ?></h3>
													<h3><?php echo $caturl; ?></h3>
													<h3><?php echo $cat_name; ?></h3>
													<h3><?php echo $catid; ?></h3>
													<h3><?php echo $whitepad_id; ?></h3>
													<h3><?php echo get_permalink($download_id); ?></h3>
													<h3><?php echo get_category_link($category->cat_ID)?></h3>

													<div id="guide-to-download">
														<a id="guide_to_download" href="#blog_download">
														    Download
															<!--<input type="button" name="download-guide" class="js__p_start" value="Download" id="guide-to-download-button"> -->
														</a>
													</div>
										</div>

												

											<?php }?>

									 </div>

									</div>

								  <section class="blog_download" id="blog_download">

                                                                  <!--<div class="title">        

                                                                  </div>-->

                                                                <div class="form-wrapper">

                                                                 <?php // echo do_shortcode('[email-download download_id="'.$download_id.'" contact_form_id="'.$contact_id.'"]'); ?>

                                                               </div>

                                                           </section>

							<!--</div>-->

                             <?php

                            $args = array(

	                       'status' => 'approve',

	                       'number' => '4',

                           'post_id' => get_the_ID(),

                                );



                        $comments = get_comments($args); $cnt= 0; 

                    foreach($comments as $comment) :$cnt++;?>

                             <?php if($cnt==1){?>

                         <div class="comment-section first">

								<div class="row">

									<div class="col-sm-2 hidden-xs">

										<div class="date-column">

											<div class="comment-author-wrapper">

												<div class="comment-author">

													<hr></hr>

													<div class="img-wrapper">

														<?php echo get_avatar( get_the_author_meta( 'ID' ),60); ?>

													</div>

												</div>

											</div>

										</div>

									</div>

									<div class="col-sm-10 col-xs-12">

										<div class="comment-wrapper">

											<h6>Comments (<?php comments_number('0', '1', '%');?>)</h6>

											<div class="comment-block">

												<span class="dialouge-edge"></span>

												<span class="title"><span class="red"><?php echo($comment->comment_author)?> </span> (<?php echo human_time_diff( get_comment_time('U'), current_time('timestamp') ) . ' ago'; ?>)</span>

												<p><?php echo  ($comment->comment_content); ?></p>

											</div>

										</div>

									</div>

								</div>

							</div>

                      <?php   }else{?>

						    <div class="comment-section">

								<div class="row">

									<div class="col-sm-2 hidden-xs">

										<div class="date-column">

											<div class="comment-author-wrapper">

												<div class="comment-author">

													<hr></hr>

													<div class="img-wrapper">

                                                        <?php echo get_avatar( get_the_author_meta( 'ID' ),60); ?>

													</div>

												</div>

											</div>



										</div>

									</div>

									<div class="col-sm-10 col-xs-12">

										<div class="comment-wrapper">



											<div class="comment-block">

												<span class="dialouge-edge"></span>

												<span class="title"><span class="red"><?php echo($comment->comment_author)?> </span> (<?php echo human_time_diff( get_comment_time('U'), current_time('timestamp') ) . ' ago'; ?>)</span>

												<p><?php echo  ($comment->comment_content); ?></p>

											</div>

										</div>

									</div>

								</div>

							</div>

                                <?php } ?>

                                <?php endforeach; ?>

				    			<div class="comment-section">

								<div class="row">

									<div class="col-sm-2 hidden-xs">

										<div class="date-column">

											



										</div>

									</div>

									<div class="col-sm-10 col-xs-12">

										<div class="comment-wrapper">

											<div class="comment-form-section">

												   <h3>Leave a Comment</h3>

												

                                                 <?php 

                    //$commenter = wp_get_current_commenter();

                   // $req = get_option( 'require_name_email' );

                    $aria_req = ( $req ? " aria-required='true'" : '' );



                    $comments_args = array(

                            'fields' => array(

				'redirect_to' => '<input type="hidden" name="redirect_to" value="'.get_permalink().'?message=success"/>',



                                          'author' => '<br><div class="row"><div class="col-sm-6 col-xs-12 first"><div class="form-group"><label for="author">' . __( 'Name *') . '</label>' . '<input id="author" name="author"  class="form-control" type="text" value="" size="30"' . $aria_req . ' /></div></div>',

                                        'email'  =>  '<div class="col-sm-6 col-xs-12"><div class="form-group"><label for="email">' . __( '&nbsp Email Address') . '</label> ' .

                                            '<input  type="email" class="form-control" value="" size="30"></div></div></div>'),



 'comment_field' =>  '<div class="row"><div class="col-md-12 col-sm-12 col-xs-12"><div class="form-group"><label for="comment">' . _x( 'Comment', 'noun' ) .(' <span class="required">*</span>') .

    '</label><textarea class="form-control" id="comment1" name="comment"  rows="5" aria-required="true">' .

    '</textarea></div></div></div>',

                            'label_submit'=>'SUBMIT',

                            'title_reply'=>'',

                            'comment_notes_after' => '',    

);

 

?>

                                                <?php if( $_GET['message'] == "success"){?>

    <p class="comment-success">Your comment has been posted and is awaiting moderation. Thank you!</p>

<?php }?>

<?php 

comment_form($comments_args,get_the_ID());?>       

											</div>

										</div>

									</div>

								</div>

							</div>

					    </div>

                    </div> 

                <?php endwhile;?>

								<?php endif;?>	

                                </div>

					     <div class=" col-md-3 col-sm-4 col-xs-12">

						       

							<div class="sidebar">

							<div class="subscribe-sidebar">

								<?php dynamic_sidebar('subscribe-sidebar'); ?> 

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

								    <?php if($life!=309){?>

                                 <?php

                                                             $args = array( 'posts_per_page' => 3,'category' => $catid, 'orderby' => 'post_date', 'order' => 'DESC',  'category_name' => "Blog" );

                                                             $myposts = get_posts( $args );$cnt= 0; ?>

							     <div class="sidebar-block">

							     

							     <?php

                                                            foreach ( $myposts as $postsv ) :$cnt++; ?>

                                <?php if($cnt==1){?>

								

									<h6>Recent Posts</h6>

									<div class="recent-news-block">

										<div class="row">

											<div class="col-xs-4 hidden">

												<div class="img-wrapper">

													<a href="<?php echo get_permalink($postsv->ID)?>"><?php the_post_thumbnail('blogpost');?></a>

												</div>

											</div>

											<div class="col-xs-12 col-md-12">

												<div class="text">

													<label class="time"> <?php echo get_the_date( 'd-m-Y', $postsv->ID); ?> </label>

													 <a href="<?php echo get_permalink($postsv->ID)?>"><?php echo get_the_title($postsv->ID); ?></a>

												</div>

											</div>

										</div>

									</div>

								

                                <?php }else{ ?>

								

									<div class="recent-news-block">

										<div class="row">

											<div class="col-xs-4 hidden">

												<div class="img-wrapper">

													<a href="<?php echo get_permalink($postsv->ID)?>"><?php the_post_thumbnail('blogpost');?></a>

												</div>

											</div>

											<div class="col-xs-12">

												<div class="text">

													<label class="time"> <?php echo get_the_date( 'd-m-Y', $postsv->ID); ?> </label>

													<a href="<?php echo get_permalink($postsv->ID)?>"><?php echo get_the_title($postsv->ID); ?></a>

												</div>

											</div>

										</div>

									</div>

								

								<?php } ?>

									<?php endforeach; ?>

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

											<div class="tag-area">

												<a href="<?php echo get_field('youtube_link',141);?>" target="_blank">

												<p>SEE OUR YOUTUBE CHANNEL</p></a>

											 </div>

										 </div>

										  <p></p>

										 <?php endforeach;?>

								</div>

                                 

								<div class="archive-list">

									<h3>Archives</h3> 

										  <?php dynamic_sidebar('blog');?>

								</div>

								<?php }else{ ?>

								<div class="newsletter-widget"><?php dynamic_sidebar('life');?>

								</div>

								<?php }?>

							</div>

					    </div>

				    <!--</div>-->

			    </div>

		    </div>

	    </div>

	    </div>

    </section>

<?php get_footer(); ?>

<script>



	  $("#guide_to_download").fancybox();

 </script>



