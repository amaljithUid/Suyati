<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:About Management Page
*/?>
<?php get_header();?>
	  <!-- Inner head-->
   
    <section class="inner-page">
	     <div class="head-banner management-team">
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
				   <!--  Your loop code-->
				      <h1><?php the_title();?></span></h1>
				    <?php the_content();?>
				<?php  endwhile;
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
		    <div class="inner-container">
			   
			      <div class="splitted-container">
				    <div class="row">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						       <div class="advisory-wrapper">
						       <?php
						       $args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'managementteam');
						       $members = get_posts( $args );
						       $count = 0;
						       foreach($members as $member):
						       $count++;
						       ?>
								<div class="person-data-block animated fadeInUp <?php if($count == 1){echo "active";}?>" id="person-<?php echo $count;?>">
									<div class="row">
										<div class="col-lg-6 col-xs-12">
											<div class="big-avtar">
												<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($member->ID) );?>">
											</div>
										</div>
										<div class="col-lg-6 col-xs-12">
											<div class="person-info" id="p-info-<?php echo $count;?>">
												<h2><?php echo $member->post_title;?></h2>
												<h3><?php echo get_field( "Position", $member->ID );?></h3>
												<p class="scroll-p"><?php echo $member->post_content;?></p>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach;?>
							       <div class="board-scroller-wrapper">
								       <div class="board-scroller" id="board-scroller">
									 <?php $cnt=0;  foreach($members as $memb):
										    $cnt++;?>
									       <div>
										       <div class="block-wrapper" id="person-<?php echo $cnt;?>">
											       <div class="board-block">
												       <img src="<?php echo get_field("image",$memb->ID );?>" class="img-responsive">
												       <div class="overlay">
													       <h4><?php echo $memb->post_title;?></h4>
													       <div class="board-social-links">
															    <?php if(get_field('facebook',$memb->ID)!=""){?>
														       <a href="<?php echo get_field( "facebook", $memb->ID );?>" target=_"blank" class="facebook"></a><?php } ?>
														          <?php if(get_field('twitter',$memb->ID)!=""){?>
														       <a href="<?php echo get_field( "twitter", $memb->ID );?>" target=_"blank" class="twitter"></a><?php } ?>
														       <?php if(get_field('linked_in',$memb->ID)!=""){?>
																    <a href="<?php echo get_field( "linked_in", $memb->ID );?>" target=_"blank" class="linkedin"></a><?php } ?>
														       <span class="clear"></span>
													       </div>
												       </div>
											       </div>
										       </div>
									       </div>
									       <?php endforeach;?>
								       </div>
							       </div>
							</div>
							
					    </div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="sidebar">
								 <?php dynamic_sidebar('about-sidebar'); ?> 
							</div>
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
    </section>
<?php get_footer();?>
