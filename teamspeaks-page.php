<?php
/*
Author:Webcastle
Theme Name:Suyati
Template Name:Teamspeaks
*/
get_header();
?>
   <?php $p_id = get_the_ID();?>
    <section class="inner-page">
	 <div class="head-banner advisory-board">
		    <?php    if ( have_posts() ) :
                             while ( have_posts() ) : the_post();?>
				<?php
		$args = array(
	'numberposts' => 1,
	'post_type' => 'inner-banner',
	'meta_query' =>  array(
            'key' => 'post',
            'value' => $p_id,
         'compare' => 'LIKE',
        ),
);
$the_query = get_posts( $args );foreach($the_query as $qq){
?>
<img src="<?php  echo get_field( "image", $qq->ID );?>" /><?php }?>
			           <h1><?php the_title();?></span></h1>
				    <?php the_content();?>
			    <?php  endwhile;
			           endif; ?>
	    		
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
										<div class="quote">
											<div class="text-wrapper">
													  <?php
                                                                      $args = array('posts_per_page'   => 1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'team');
                                                                      $speaks = get_posts( $args );
																	
                                                                      foreach($speaks as $speak):
                                                ?>
											<p><?php echo get_field('speech',$speak->ID);?></p>
												<span class="quote-author">-<?php echo get_field('name',$speak->ID);?></span>
                                                 <?php endforeach;?>
											
											</div>
										</div>
									</div> 
									<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
										<div class="tile-navigator">
										
										
											<div class="row">
                                                
                                                 <?php
                                                                      $args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'team');
                                                                      $speaks = get_posts( $args );
																	 $cnt == 0;
                                                                      foreach($speaks as $speak):$cnt++;
                                                ?>
										<?php if($cnt==1){?>
											<div class="row">
											
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
													<div class="member-block left green">
														<div class="row">
															<div class="col-xs-6">
																<div class="member-label">
																	<span class="member-name"><?php echo get_field('name',$speak->ID);?><i></i></span>
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
																<h4><?php echo $speak->post_title;?></h4>
									
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
											<?php } elseif($cnt%5 == 2) {?>                
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
													<div class="member-block right red">
														<div class="row">
															<div class="col-xs-6">
																<div class="member-avatar">
																	<div class="img-wrapper">
																		<img src="<?php  echo wp_get_attachment_url( get_post_thumbnail_id($speak->ID) ); ?>" class="img-responsive">
																	</div>
																</div>
															</div>
															<div class="col-xs-6">
																<div class="member-label">
																	<span class="member-name"><?php echo get_field('name',$speak->ID);?><i></i></span>
																</div>
															</div>
															
														</div>
														<div class="member-words animated fadeInDown">
															<div class="text-wrapper">
																<h4><?php echo $speak->post_title;?></h4>
									
																<p><?php  echo ($speak->post_content);?></p>
																<span class="close-detail"></span>
															</div>
														
														</div>
													</div>
												</div>
                                                <?php }elseif($cnt%5 == 3) {?>
                                                  
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
													<div class="member-block right red">
														<div class="row">
															<div class="col-xs-6">
																<div class="member-avatar">
																	<div class="img-wrapper">
																		<img src="<?php  echo wp_get_attachment_url( get_post_thumbnail_id($speak->ID) ); ?>" class="img-responsive">
																	</div>
																</div>
															</div>
															<div class="col-xs-6">
																<div class="member-label">
																	<span class="member-name"><?php echo get_field('name',$speak->ID);?><i></i></span>
																</div>
															</div>
															
														</div>
														<div class="member-words animated fadeInDown">
															<div class="text-wrapper">
																<h4><?php echo $speak->post_title;?></h4>
									
																<p><?php  echo ($speak->post_content);?></p>
																<span class="close-detail"></span>
															</div>
														
														</div>
													</div>
												</div>
                                                <?php }  elseif($cnt%5 == 4){?>
													<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
													<div class="member-block left red">
														<div class="row">
															<div class="col-xs-6">
																<div class="member-label">
																	<span class="member-name"><?php echo get_field('name',$speak->ID);?><i></i></span>
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
																<h4><?php echo $speak->post_title;?></h4>
									
																<p><?php  echo ($speak->post_content);?></p>
																<span class="close-detail"></span>
															</div>
														
														</div>
													</div>
												</div>
                                                <?php }  else{?>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
													<div class="member-block left blue">
														<div class="row">
															<div class="col-xs-6">
																<div class="member-label">
																	<span class="member-name"><?php echo get_field('name',$speak->ID);?><i></i></span>
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
																<h4><?php echo $speak->post_title;?></h4>
									
															<p><?php  echo ($speak->post_content);?></p>
																<span class="close-detail"></span>
															</div>
														
														</div>
													</div>
                                                   
												</div>
                                                 <?php $cnt++;} endforeach;?>
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
	  
   <!-- <section class="footer-strip">
    </section>-->
    <span class="strip"></span>
   <?php get_footer();?>
