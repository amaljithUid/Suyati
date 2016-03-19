<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:About Infrastructure
*/
get_header();
?>
  <!-- Inner head-->
    <section class="inner-page">
	    <div class="head-banner advisory-board">
                 <?php   if ( have_posts() ) :
                                 while ( have_posts() ) : the_post();?>
             <?php  $p_id = get_the_ID();?>
             <?php
		$args = array(
			'numberposts' => 1,
			'post_type' => 'inner-banner',
			'meta_key' => 'post',
			'meta_value' => $p_id,
			
		);
		$the_query = get_posts( $args );
foreach($the_query as $qq){?>
<img src="<?php  echo get_field( "image", $qq->ID );?>" /><?php }?>
		     <h1><?php the_title();?></span></h1>
                    <?php   endwhile;
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
							<div class="infrastructure">
								<div class="row">
									<div class="col-lg-6 col-md-6 hidden-sm col-xs-12">
										<a href="#infrastructure-tabs"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" class="img-responsive"></a>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<div class="infrastructure-info">
											<h2><?php  echo get_field("at_suyati_technologies_tltle", get_the_ID() ); ?></h2>
											<p><?php  echo get_field( "at_suyati_technologies_content", get_the_ID() ); ?></p>
											<p><?php  echo get_field( "at_suyati_technologies_content_two", get_the_ID() ); ?></p>
										</div>
									</div>
									
								</div>
							</div>
                                                      <?php
						       $args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'serverroom');
						       $servers = get_posts( $args );
						       $count = 0;
						       ?>    
							<div class="infrastructure-tabs" id="infrastructure-tabs">
								<div class="row"  id="row">
									<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                                <div class="image-scroller-wrapper" >
									<div class="image-scroller">
                                                                                <?php  foreach($servers as $server):
                                                                                       $count++;
                                                                                ?><style>.img-block{height : 169px;?></style>
												<a href="<?php echo get_field( "server_room_detailed_image", $server->ID );?>" class="img-block active" id="img-block-<?php echo $count;?>">
													<img src="<?php echo get_field( "server_room_image", $server->ID );?>">
													<div class="img-overlay animated pulse">
													</div>
												</a>
												<div class="inline-info hidden-lg hidden-md">
														<h2><?php echo $server->post_title;?></h2>
														<p><?php echo get_field( "content", $server->ID );?></p>
												</div>
                                                                                         <?php endforeach;?>
											 </div>
										</div>
									</div>
									<div class="col-lg-7 col-md-7 hidden-sm hidden-xs">
										<div class="infra-info-wrapper">
										<?php $cnt=0;  foreach($servers as $serv):
                                                                                                          $cnt++;?>
											
												<div class="infra-info <?php if($cnt == 1){echo "active";}?>" id="img-block-<?php echo $cnt;?>">
													<h3><?php echo $serv->post_title;?></h3>
													<p><?php echo get_field( "content", $serv->ID );?></p>
												</div>
											
											<?php endforeach;?>
										</div>
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
    <span class="strip"></span>
<?php get_footer()?>