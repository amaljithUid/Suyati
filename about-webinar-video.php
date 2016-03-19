
<?php  /*
Author:Webcastle
Theme Name:Webinar
Template Name:About Webinar Video
*/?>
<?php get_header();?>
 	  <!-- Inner head-->
   
    <section class="inner-page ">
	    <div class="head-banner advisory-board">
                 <?php							
                          if ( have_posts() ) :
                                 while ( have_posts() ) : the_post();?>
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
				<?php  endwhile;
			 endif;
			   ?>
		 
	    		 <?php 
                                $the_query = new WP_Query( 'page_id=218' );
                                while ( $the_query->have_posts() ) :
                                $the_query->the_post();?>                                           
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
		    <div class="inner-container video-area webinar">
			   
			    <div class="splitted-container">
				    <div class="row">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							
							<div class="v-m-wrapper">
								<div class="v-m-nav-wrapper">
									<ul class="v-m-nav">
										<li class="active"><a href="#upcome">Upcoming Webinar<span></span></a></li>
										<li><a href="#featured">Featured<span></span></a></li>
										<li><a href="#archives">Webinar Archives<span></span></a></li>
										<li class="hidden">
											<select>
												<option>New</option>
											</select>
										</li>
										<span class="clearfix"></span>
									</ul>
								</div>
							</div>
							<div class="webinar-wrapper" id="upcome">
							<h4>Upcoming webinar</h4>
								<div class="row">
                                                                        <?php
                                                                      $args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'webinar');
                                                                      $webinars = get_posts( $args );
                                                                   
                                                                      foreach($webinars as $webinar):
                                                                      //$s =  $webinar->post_date;
                                                                      //$date = strtotime($s);
                                                                        $upcomes= get_field('webinar_type',$webinar->ID);
                                                                      $upcomes=$upcomes[0];
                                                                      if($upcomes=='upcome'){
								      ?>
                                                                      <?php //echo "<pre>"; echo $upcomes; echo "</pre>";?>
										<div class="col-sm-4 col-xs-12">
											<div class="webinar-block">
												<div class="img-wrapper">
													<a href="<?php echo post_permalink($webinar->ID);?>" target="_blank"><img src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($webinar->ID),array(254,169) );echo $image[0];?>" class="img-responsive"></a>
													<div class="detail-sec">
													<!--	<span class="date-num"><?php  //echo date('d', $date);?></span>
														<span class="m-y"><?php  //echo date('M Y', $date);?></span>-->
                                                                                                               <span class="m-y"> <?php echo get_field('webinar_date',$webinar->ID);?></span>
														<a href="<?php echo post_permalink($webinar->ID);?>" class="register">Register</a>
														<span class="edge"></span>
													</div>
												</div>
												<?php 
                                                        $after= ' ...';
                                                        $title=get_the_title($webinar->ID);
                                                        if ( strlen($title) > 30 ) {
                                                        $title = substr($title,0,30);
                                                ?> 
                                                     <a href="<?php echo post_permalink($webinar->ID); ?>"><p><?php echo  $title . $after;?></p></a>
                                                     <?php
                                                       } else {
                                                                  ?> <a href="<?php echo get_permalink($webinar->ID); ?>"><p><?php echo  $title;?></p></a><?php
                                                              }
                                                ?>
											</div>
										</div>
									<?php } ?>
								    	 <?php endforeach;?>	
										
									</div>
								
							</div>
							<div class="video-wrapper" id="featured">
								<h4>Featured webinar</h4>
								
								<div class="video-gallery">
									<div class="row">
                                                                                 <?php
                                                                      $args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'webinar');
                                                                      $featuredwebinar = get_posts( $args );$vfi = 0;$cfb=0;
								       //foreach($featuredwebinar as $featuredwebina):
								       // $featured= get_field('webinar_type',$featuredwebina->ID);
                                                                      //$featureds=$featured[0];
                                                                      //if($featured[0] =='featured'){
								      // $cfb ++;
								      //}
								       //endforeach;
                                                                      foreach($featuredwebinar as $featuredwebinars):
                                                                      $featured= get_field('webinar_type',$featuredwebinars->ID);
                                                                      $featureds=$featured[0];
                                                                      if($featured[0] =='featured'){$vfi++;
								      ?>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
										<div class="webinar-block">
										<div class="img-wrapper">
													<a href="<?php echo post_permalink($featuredwebinars->ID);?>" "><img src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($featuredwebinars->ID),array(254,188) );echo $image[0];?>" class="img-responsive"></a>
													<div class="detail-sec">
                                                               <span class="m-y"></span>
														<a href="<?php echo post_permalink($featuredwebinars->ID);?>" class="register">Access</a>
														<span class="edge"></span>
													</div>
												</div>
												<?php 
                                                        $after= ' ...';
                                                        $title=get_the_title($featuredwebinars->ID);
                                                        if ( strlen($title) > 30 ) {
                                                        $title = substr($title,0,30);
                                                ?> 
                                                     <a href="<?php echo post_permalink($featuredwebinars->ID); ?>"><p><?php echo  $title . $after;?></p></a>
                                                     <?php
                                                       } else {
                                                                  ?> <a href="<?php echo get_permalink($featuredwebinars->ID); ?>"><p><?php echo  $title;?></p></a><?php
                                                              }
                                                ?>
					
										</div>
										</div>
										<?php  } ?>
										<?php //endif;?>
                                      <?php endforeach;?>
									</div>
								</div>
							</div>
							<div class="video-wrapper" id="archives">
								<h4>Webinar Archive</h4>
								
								<div class="video-gallery">
									<div class="row">
                                                                            <?php
                                                                      $args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'webinar');
                                                                      $archivewebinar = get_posts( $args );
                                                                      foreach($archivewebinar as $archivewebinars):
                                                                      $archive= get_field('webinar_type',$archivewebinars->ID);
                                                                      $archives=$archive[0];
                                                                      if($archive[0]=='archives'){
								      ?>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
										<div class="webinar-block">
										<div class="img-wrapper">
											
												<a href="<?php echo post_permalink($archivewebinars->ID);?>" target="_blank"><img src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($archivewebinars->ID),array(254,188) );echo $image[0];?>" class="img-responsive"></a>
												<div class="detail-sec">   
														<a href="<?php echo post_permalink($archivewebinars->ID);?>" class="register">Access</a>
														<span class="edge"></span>
											</div>
											</div>
											<?php 
                                                        $after= ' ...';
                                                        $title=get_the_title($archivewebinars->ID);
                                                        if ( strlen($title) > 30 ) {
                                                        $title = substr($title,0,30);
                                                ?> 
                                                     <a href="<?php echo post_permalink($archivewebinars->ID); ?>"><p><?php echo  $title . $after;?></p></a>
                                                     <?php
                                                       } else {
                                                                  ?> <a href="<?php echo get_permalink($archivewebinars->ID); ?>"><p><?php echo  $title;?></p></a><?php
                                                              }
                                                ?>
										
										</div>
										</div>
										
										<?php } ?>
										<?php //endif;?>
                                        <?php endforeach;?>
									</div>
								</div>
							</div>
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
    <span class="strip"></span>

<?php get_footer();?>
 

