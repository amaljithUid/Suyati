<?php
/*
Header for suyati theme
*/
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Suyati Technologies">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico">
		<title><?php wp_title();?></title>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<!-- NAVBAR
	================================================== -->
	
	<body <?php body_class('home-page cbp-spmenu-push');?> >
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
			<h3>
			<?php get_search_form(); ?>
			</h3>
			<div class="clr"></div>
			<?php
				$menu_args = array(
				'theme_location' => 'home_slide_nav',
				'walker' => new themeslug_walker_nav_menu,'menu' => 'home_slide_nav',
				'menu'            => 'Main Menu',
				'container'       => 'false',
				'container_class' => 'container_class',
				'container_id'    => 'container_id',
				'menu_id'         => 'menu_Nav',
				'menu_class'      => 'slide_menu_nav',
				'echo'            => true);
			?>
			<?php wp_nav_menu($menu_args);?>
			<p class="clr"><i class="fa fa-phone"></i>+ (91) 484-424-2800</p>
			<p class="clr"><i class="fa fa-envelope"></i>services@suyati.com</p>
			<div class="social-links">
				<a href="<?php echo get_field('facebook',141);?>" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a>
				<a href="<?php echo get_field('twitter',141);?>" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
				<a href="<?php echo get_field('linkedin',141);?>" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a>
				<a href="<?php echo get_field('google_plus',141);?>" target="_blank" class="googleplus"><i class="fa fa-google-plus"></i></a>
			</div>
			
		</nav>
		<div class="container-fluid">
			<div class="row">
				<header class="clearfix">
					<div class="header-top">
						<div class="logo-nav-search-container">
							
							<div class="col-lg-12 col-md-12 col-sm-12">
								
								<div class="logo-brand">
									<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri();?>/img/suyati-logo.png"></a>
								</div>
								
								
								<a href="<?php echo get_permalink(459);?>" class="quick-enq pull-right hidden-xs">Quick Enquiry</a>
								<button id="showRightPush" class="more-btn"><!-- <i class="fa fa-bars"></i> --><div data-icon="&#xe032;" class="icon"></div></button>
								
								
								<div class="clr-sm"></div>
								
								<?php
									$menu_args = array(
									'theme_location' => 'home_main_nav',
									'walker' => new themeslug_walker_nav_menu,'menu' => 'home_main_nav',
									'menu'            => 'Main Menu',
									'container'       => 'false',
									'container_class' => 'container_class',
									'container_id'    => 'container_id',
									'menu_id'         => 'main_nav',
									'menu_class'      => 'main_menu_nav hidden-xs',
									'echo'            => true);
								?>
								<?php wp_nav_menu($menu_args);?>
								
								
							</div>
						</div>
					</div>
					<div class="slider-image">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


							<!-- Indicators -->
							
							
							<section class="suyt-tagline visible-xs">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<h1 class="sect-tittle">Dream. Dare. Do</h1>
											<h5 class="sec-para-medium col-md-6 col-md-offset-3">At Suyati, we create new business realities by bridging the gap between your entrepreneurial ideas and its realization.</h5>
											<div class="clr"></div>
											<div class="col-md-6 col-md-offset-3 clearfix">
												<a href="<?php echo get_permalink(459);?>" class="quick-enq">Quick Enquiry</a>
											</div>
											
										</div>
									</div>
								</div>
							</section>
							
							<!-- Wrapper for slides -->
							<div class="container">
								<div class="row">

								<div class="webi-link pull-right">
									<p>Check out our upcoming webinar schedule</p>
									<a href="">Click Here</a>
								</div>
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="3"></li>
									<li data-target="#carousel-example-generic" data-slide-to="4"></li>
								</ol>
									<div class="carousel-inner" role="listbox">
										
										<div class="item active">
											<div class="carousel-caption">
												<div class="col-lg-12">
													<a href="http://suyati.com/domain/publishing/">
														<div class="banner-text">
															<h1 class="">Marketing Technology Solution Provider and Systems Integrator</h1>
															<div class="block-row hidden-xs">
																<div class="row">
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																		<div class="banner-block first">
																			<div class="row">
																				<div class="col-xs-4">
																					<!--<i class="icoo">-->
																					<img src="http://suyati.com/wp-content/uploads/2014/10/ban1.png" />
																					<!--</i>-->
																				</div>
																				<div class="col-xs-8">
																					<p>Comprehensive client partner: Assistance all through the customer lifecycle</p>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																		<div class="banner-block">
																			<div class="row">
																				<div class="col-xs-4">
																					<!--<i class="icoo">-->
																					<img src="http://suyati.com/wp-content/uploads/2014/10/ban21.png" />
																					<!--</i>-->
																				</div>
																				<div class="col-xs-8">
																					<p>Integrated technology stack: Value addition at each stage with end-to-end solutions</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</a>
												</div>
												
											</div>
										</div>
										<div class="item">
											<div class="carousel-caption">
												
												<div class="col-lg-12">
													<a href="http://suyati.com/services/cms/ektron/">
														<div class="banner-text">
															<h1 class="">Centers of Excellence to Offer Your Business the Best of Technologies</h1>
															<div class="block-row hidden-xs">
																<div class="row">
																	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
																		<div class="banner-block first">
																			<div class="row">
																				<div class="col-xs-4">
																					<!--<i class="icoo">-->
																					<img src="http://suyati.com/wp-content/uploads/2014/10/icon1final.png" />
																					<!--</i>-->
																				</div>
																				<div class="col-xs-8">
																					<p>Powering up your CRM with Salesforce</p>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
																		<div class="banner-block">
																			<div class="row">
																				<div class="col-xs-4">
																					<!--<i class="icoo">-->
																					<img src="http://suyati.com/wp-content/uploads/2014/10/2.png" />
																					<!--</i>-->
																				</div>
																				<div class="col-xs-8">
																					<p> Effective content, driven by EPiserver, Sitecore, Sitefinity & Ektron</p>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
																		<div class="banner-block">
																			<div class="row">
																				<div class="col-xs-4">
																					<!--<i class="icoo">-->
																					<img src="http://suyati.com/wp-content/uploads/2014/10/sub.png" />
																					<!--</i>-->
																				</div>
																				<div class="col-xs-8">
																					<p>Cross platform applications, backed by Microsoft.Net & Open Source</p>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
																		<div class="banner-block">
																			<div class="row">
																				<div class="col-xs-4">
																					<!--<i class="icoo">-->
																					<img src="http://suyati.com/wp-content/uploads/2014/10/integrationdotnet.png" />
																					<!--</i>-->
																				</div>
																				<div class="col-xs-8">
																					<p>Seamlessly extending your business to mobile</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</a>
												</div>
												
											</div>
										</div>
										
										<div class="item ">
											<div class="carousel-caption">
												
												<div class="col-lg-12">
													<a href="http://suyati.com/services/crm/salesforce/">
														<div class="banner-text">
															<h1 class="">Accomplishing Business Goals with an All-Encompassing Dedicated Team</h1>
															<div class="block-row hidden-xs">
																<div class="row">
																	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
																		<div class="banner-block first">
																			<div class="row">
																				<div class="col-xs-4">
																					<!--<i class="icoo">-->
																					<img src="http://suyati.com/wp-content/uploads/2014/11/ban3icon11.png" />
																					<!--</i>-->
																				</div>
																				<div class="col-xs-8">
																					<p>Build your team your way</p>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
																		<div class="banner-block">
																			<div class="row">
																				<div class="col-xs-4">
																					<!--<i class="icoo">-->
																					<img src="http://suyati.com/wp-content/uploads/2014/11/ban3icon2.png" />
																					<!--</i>-->
																				</div>
																				<div class="col-xs-8">
																					<p>Flexible scaling, up or down</p>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
																		<div class="banner-block">
																			<div class="row">
																				<div class="col-xs-4">
																					<!--<i class="icoo">-->
																					<img src="http://suyati.com/wp-content/uploads/2014/11/ban3icon3.png" />
																					<!--</i>-->
																				</div>
																				<div class="col-xs-8">
																					<p>Complete control, seamless communication</p>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
																		<div class="banner-block">
																			<div class="row">
																				<div class="col-xs-4">
																					<!--<i class="icoo">-->
																					<img src="http://suyati.com/wp-content/uploads/2014/11/developers-icon-home-new.png" />
																					<!--</i>-->
																				</div>
																				<div class="col-xs-8">
																					<p>Transparent costing, easy transition</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															
															
														</div>
													</a>
												</div>
												
												
											</div>
										</div>
										
										<div class="item ">
											<div class="carousel-caption">
												
												<div class="col-lg-12">
													<a href="http://suyati.com/products/">
														<div class="banner-text">
															<h1 class="">Indigenous Products Engineered to Delight</h1>
															<div class="block-row hidden-xs">
																<div class="row">
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																		<div class="banner-block first">
																			<div class="row">
																				<div class="col-xs-4">
																					<!--<i class="icoo">-->
																					<img src="http://suyati.com/wp-content/uploads/2014/11/ban6icon2.png" />
																					<!--</i>-->
																				</div>
																				<div class="col-xs-8">
																					<p>Voraka - Content Management Platform</p>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
																		<div class="banner-block">
																			<div class="row">
																				<div class="col-xs-4">
																					<!--<i class="icoo">-->
																					<img src="http://suyati.com/wp-content/uploads/2014/11/ban6icon1.png" />
																					<!--</i>-->
																				</div>
																				<div class="col-xs-8">
																					<p>SoCXO - Employee Advocacy Platform</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</a>
												</div>
												
												
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</header>
					</div>
					
				</div>
			</div>
		</div>
		
		<script type="text/javascript">
			// function initMenu() {
					// 	    $('.main-menu-item ul').hide();
					// 	    $('.main-menu-item li').click(
					// 	    function() {
					// 	        $('.main-menu-item ul').hide('normal');
					// 	        $(this).next().slideToggle('normal');
					// 	    });
					// 	}
					// 	$(document).ready(function() {
					// 	    initMenu();
					// 	});
				$( document ).ready(function() {
					//$('.sub-menu').addClass('dropdown-menu');
					//$('.video-tab-wrapper .yutube-vdo:nth-child(4)').addClass("col-md-offset-2 clr");
					$('.menu-item-has-children a').filter(function(){
						return $(this).closest("li").find("ul").length>0;
					}).after('<i class="icon icon-arrows-down"></i>');
					if($())
					$(document).on("click","i.icon",function(){
						$(this).toggleClass("icon-arrows-down icon-arrows-up")
						$(this).closest("li").siblings().find("ul").slideUp(function(){
							$(this).prev().addClass("icon-arrows-down").removeClass("icon-arrows-up");
						});
						$(this).next().slideToggle();
					});
					
				});
		</script>
		<script type="text/javascript">
			var showRightPush = document.getElementById( 'showRightPush' ),menuRight = document.getElementById( 'cbp-spmenu-s2' ),
			body = document.body;
				showRightPush.onclick = function() {
					classie.toggle( this, 'active' );
					classie.toggle( body, 'cbp-spmenu-push-toleft' );
					classie.toggle( menuRight, 'cbp-spmenu-open' );
					disableOther( 'showRightPush' );
				};
				function disableOther( button ) {
					if( button !== 'showRightPush' ) {
						classie.toggle( showRightPush, 'disabled' );
					}
				}
		</script>