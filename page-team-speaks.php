<?php
/*
Author:Webcastle
Theme Name:Suyati

Template Name: Team Speaks
*/

get_header();
$p_id = get_the_ID();?>
<section class="inner-page">
	    <div class="head-banner advisory-board">
		      <?php    if ( have_posts() ) :
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
<?php }?>
			           <h1><?php the_title();?></span></h1>
				    <?php the_content();?>
			    <?php  endwhile;
			endif; ?>
	    </div>
		<div class="breadcrumb-container">
			<div class="container">
			   <div class="breadcrumb">
				  <span class="seperator"></span> <?php if(function_exists('bcn_display')){  bcn_display();}?>
			    </div>
			</div>
			
		</div>
	    <div class="container">
		    <div class="inner-container video-area">
			   
			    <div class="splitted-container">
				    <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="general-container">
								<div class="row">
									<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
										<div class="text-wrapper">
											<h2><?php echo get_field('title');?></h2>
											<p><?php echo get_field('content');?></p>
										</div>
										<div class="quote-slider" id="quote-slider">
                                                                                    <?php
                                                                    $args = array('posts_per_page'=> -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'team');
                                                                    $speaks = get_posts( $args );
								    foreach($speaks as $speak):
								    if(get_field('speech',$speak->ID)!=""){
                                                                    ?>
											<div>
												<div class="quote">
													<div class="text-wrapper">
														<p><?php echo get_field('speech',$speak->ID);?></p>
											<span class="quote-author">-<?php echo $speak->post_title;?></span>
													</div>
												</div>
											</div>
                                                                    <?php }endforeach;?>

										</div>
									</div>
									<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
										<div class="tile-navigator">
										    <?php $cnt=0; foreach($speaks as $speak): $cnt++;
										    if($cnt % 3 == 1){$color = "green";}
										    elseif($cnt % 3 == 2){$color = "red";}
										    else{$color = "blue";}
										    if($cnt == 1){?>
												<div class="row">
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
													<div class="member-block left <?php echo $color;?>">
														<div class="row">
															<div class="col-xs-6">
																<div class="member-label">
																	<span class="member-name"><?php echo $speak->post_title;?><i></i></span>
																</div>
															</div>
															<div class="col-xs-6">
																<div class="member-avatar">
																	<div class="img-wrapper">
																		<img src="<?php  echo wp_get_attachment_url( get_post_thumbnail_id($speak->ID) ); ?>" class="img-responsive">
																	</div>
																</div>
															</div>
														</div>
														<div class="member-words animated fadeInDown">
															<div class="text-wrapper">
																<h4><?php echo get_field('name',$speak->ID);?></h4>
									
																<p><?php  echo ($speak->post_content);?></p>
																<span class="close-detail"></span>
															</div>
														
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="member-block right">
														<div class="team-big-label">
															Our People at Suyati
														</div>
													</div>
												</div>
											</div>
										   <?php  }
										    else{
										    if($cnt % 2 == 0 && $cnt > 1){echo '<div class="row">';}
										    ?>
											
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
													<div class="member-block <?php if($cnt % 4 == 0 || $cnt % 4 == 1){echo " left ";}else{echo " right ";} echo $color;?>">
														<div class="row">
															<?php if($cnt % 4 == 0 || $cnt % 4 == 1){?>
															<div class="col-xs-6">
																<div class="member-label">
																	<span class="member-name"><?php echo $speak->post_title;?><i></i></span>
																</div>
															</div>
															<div class="col-xs-6">
																<div class="member-avatar">
																	<div class="img-wrapper">
																		<img src="<?php  echo wp_get_attachment_url( get_post_thumbnail_id($speak->ID) ); ?>" class="img-responsive">
																	</div>
																</div>
															</div>
															<?php }else{?>
															<div class="col-xs-6">
																<div class="member-avatar">
																	<div class="img-wrapper">
																		<img src="<?php  echo wp_get_attachment_url( get_post_thumbnail_id($speak->ID) ); ?>" class="img-responsive">
																	</div>
																</div>
															</div>
															<div class="col-xs-6">
																<div class="member-label">
																	<span class="member-name"><?php echo $speak->post_title;?><i></i></span>
																</div>
															</div>
															<?php }?>
														</div>
														<div class="member-words animated fadeInDown">
															<div class="text-wrapper">
																<h4><?php echo get_field('name',$speak->ID);?></h4>
									
																<p><?php  echo ($speak->post_content);?></p>
																<span class="close-detail"></span>
															</div>
														
														</div>
													</div>
												</div>
										        <?php  if($cnt % 2 == 1 || $cnt == count($speaks)){echo '</div>';}
										    }endforeach;?>
										</div>
									</div>
								</div>
								<div class="bottom-widgets">
									<div class="row">
										<div class="col-sm-6 col-cs-12">
											<div class="widget job first">
												<h4>see<span class="red"> jobs</span></h4>
												<p><?php echo get_field('see_job');?></p>
												<a href="<?php echo get_permalink(484);?>" class="learn-more">Learn more<i></i></a>
												<span class="clear"></span>
											</div>
										</div>
										<div class="col-sm-6 col-cs-12">
											<div class="widget life">
												<h4>life<span class="green"> @Suyati</span></h4>
												<p><?php echo get_field('life_at_suyati');?></p>
												<a href="http://suyati.com/blog/life-at-suyati/" class="learn-more">Learn more<i></i></a>
												<span class="clear"></span>
											</div>
										</div>
									</div>
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