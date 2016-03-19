<?php
/*********************************************************
					Header for microsite
					created:SuyatiAJL
*********************************************************/
?>

<section class="banner">
		    <div class="banner-slider-wrapper">
			    <ul class="slides">
                    <?php $ban_args = array('posts_per_page'   => -1,'orderby'=>'menu_order','bannertype' => 'technology','order'=>'ASC', 'post_type'=>'banner');
                    $banners = get_posts( $ban_args );
                    foreach($banners as $banner):
		    if(get_field( "books_icon", $banner->ID )!=""){
				  if(get_field( "production_icon", $banner->ID) !=""){$classlist = "col-lg-3 col-md-3 col-sm-6 col-xs-12";}
				  else{$classlist = "col-lg-4 col-md-6 col-sm-6 col-xs-12";}
		    }
		    else{
			$classlist = "col-lg-6 col-md-6 col-sm-6 col-xs-12";	  
		    }
                    ?>
				   <li>
					    <div class="container banner-description">
						    <div class="row">
						    	<div class="col-lg-12">
							    	   <?php if(get_field('link_url',$banner->ID)!=""){?>
								   <a href="<?php echo get_field('link_url',$banner->ID);?>"> <?php }?>
								   <div class="banner-text">
									    <h1 class=""><?php echo $banner->post_title;?></h1>
									    <div class="block-row hidden-xs">
										    <div class="row">
											    <div class="<?php echo $classlist;?>">
												    <div class="banner-block first">
														<div class="row">
															<div class="col-xs-4">
																	<!--<i class="icoo">-->
																<img src="<?php echo get_field( "personal_cost_icon", $banner->ID );?>" />
																<!--</i>-->
															</div>
															<div class="col-xs-8">
																<p><?php echo get_field( "personal_cost", $banner->ID );?></p>
															</div>
														</div>
												    </div>
											    </div>
												<div class="<?php echo $classlist;?>">
													<div class="banner-block">
														<div class="row">
															<div class="col-xs-4">
																	<!--<i class="icoo">-->
																<img src="<?php echo get_field( "winner_icon", $banner->ID );?>" />
																<!--</i>-->
															</div>
															<div class="col-xs-8">
																<p><?php echo get_field( "winner", $banner->ID );?></p>
															</div>
														</div>
												    </div>
											    </div>
									    <?php if(get_field( "books_icon", $banner->ID )!=""){?>
												<div class="<?php echo $classlist;?>">
													<div class="banner-block">
														<div class="row">
															<div class="col-xs-4">
																	<!--<i class="icoo">-->
																<img src="<?php echo get_field( "books_icon", $banner->ID );?>" />
																	<!--</i>-->
															</div>
															<div class="col-xs-8">
																<p><?php echo get_field( "books", $banner->ID );?></p>
															</div>
														</div>
												    </div>
											    </div>
								    <?php }if(get_field( "production_icon", $banner->ID) !=""){?>
												<div class="<?php echo $classlist;?>">
													<div class="banner-block">
														<div class="row">
															<div class="col-xs-4">
																	<!--<i class="icoo">-->
															<img src="<?php echo get_field( "production_icon", $banner->ID );?>" />
																	<!--</i>-->
															</div>
															<div class="col-xs-8">
																<p><?php echo get_field( "production", $banner->ID );?></p>
															</div>
														</div>
												    </div>
											    </div>
								<?php }?>
										    </div>
									    </div>
									    <div class="block-row visible-xs">
										    <div class="banner-block">
												<div class="">
													<div class="col-xs-4">
														       <!--<i class="icoo">-->
																<img src="<?php echo get_field( "personal_cost_icon", $banner->ID );?>"/>
														       <!--</i>-->
															</div>
															<div class="col-xs-8">
																<p><?php echo get_field( "personal_cost", $banner->ID );?></p>
															</div>
													
												</div>
										    </div>
										    <div class="banner-block">
												<div class="">
													<div class="col-xs-4">
														       <!--<i class="icoo">-->
																<img src="<?php echo get_field( "winner_icon", $banner->ID );?>" />
														       <!--</i>-->
															</div>
															<div class="col-xs-8">
																<p><?php echo get_field( "winner", $banner->ID );?></p>
															</div>
													
												</div>
										    </div>
										    <div class="banner-block">
												<div class="">
														<div class="col-xs-4">
														       <!--<i class="icoo">-->
																<img src="<?php echo get_field( "books_icon", $banner->ID );?>"/>
																<!--</i>-->
															</div>
															<div class="col-xs-8">
																<p><?php echo get_field( "books", $banner->ID );?></p>
															</div>
													
												</div>
										    </div>
										    <div class="banner-block">
												<div class="">
													<div class="col-xs-4">
														       <!--<i class="icoo">-->
															<img src="<?php echo get_field( "production_icon", $banner->ID );?>">
															<!--</i>-->
															</div>
															<div class="col-xs-8">
																<p><?php echo get_field( "production", $banner->ID );?></p>
															</div>
													
												</div>
										    </div>
									    </div>
									    
								    </div>
								   <?php if(get_field('link_url',$banner->ID)!=""){?>
								   </a> <?php }?>
							     </div>
						    </div>
					    </div>
					   
					     <img width="50" height="50" class="hidden banner-img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($banner->ID) ); ?>">
				    </li>
                    <?php endforeach;?>
			    </ul>
		    </div>
	   
    </section>
