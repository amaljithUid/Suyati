<?php
/*
Author:Webcastle
URL:http://webcastltech.com
Theme Name: Suyati
Template Name : Single Events
*/
//get_header();?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		 

		<title>Walk-in@suyati  16 may 2015</title>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico">
		<?php wp_head();
		$p_id = get_the_ID();
		?>
		<style>
		body{overflow-x: hidden;}
		.ls-desktop{display: none;}
			div.wpcf7-mail-sent-ok {
				border: 2px solid #00b858;
				margin: 0;
				color: #fff;
				font-size: 15px;
				background: #00b858;
			}
			span.wpcf7-not-valid-tip {
				border: red 1px solid;
				font-size: 1em;
				display: block;
				right: 0;
				color: white;
				background: red;
				padding-left: 5px;
			}
			.wpcf7-response-output.wpcf7-display-none.wpcf7-validation-errors {
				margin: 0;
				margin-top: 6px;
				background: red;
				border: red;
				color: #fff;
				margin-left: 30px;
			}
			.new-contact .wpcf7-captchac{
				margin-bottom: 10px;
			}
		.events-wrapper img{
			width: 100%
		}
		.single-events .event-detail{
		
		margin:0px;
		}
		.single-events  .events-wrapper{
		padding: 0px 0px;
		}
		.single-events .info-divs>span.ico,.single-events .info-divs>span.info{
		top: 0px;
		}
		.single-events  .sidebar{
		padding-top: 30px;
		background: #e8e8e8;
		border-top: 5px solid #d5d5d5;
		border-left: none;
		}
		.single-events .info-divs.header-share{
		height: 50px;
		margin-top: 50px;
		}
		.single-events .form-group label{
		color: #666;
		font-size: 12px;
		}
		.single-events .event-form-submit{
		margin-bottom: 30px;
		margin-left: 17px;
		}
		.single-events  input.form-control{
		margin-top: 0px !important;
		height: 40px !important;
		}
		.single-events  .sidebar .form-group p{
		padding-bottom: 10px;
		}
		.single-events  .sidebar h5{
		margin-bottom: 28px;
		padding: 0px !important;
		color: #145daa;
		font-weight: 400;
		}
		.single-events  .sidebar .form-block{
		border: none;
		padding-top: 0px;
		padding-left: 17px;
		}
		.single-events  .sidebar .form-block h4{
			margin-bottom: 10px;
			color: #fff;
			font-size: 28px;
			color: #145daa;
			border: thin solid #ccc;
			line-height: 50px;
			text-align: center;
			border-left: none;
			border-right: none;
		}
		.single-events  .sidebar .form-block p{
			color: #222;
			font-size: 12px;
			margin-bottom: 15px;
		}
		.single-events  .sidebar .form-block input[type=file]{
			color: #666;
		}
		.single-events  .sidebar .form-block sup{
			color: red;
		}
		.event-detail-head h3{
			font-size: 36px;
			font-weight: bold;
			color: #444;
			text-transform: inherit;
			display: none;
		}
		.event-text h3{
			font-size: 24px;
			font-weight: bold;
			color: #00c35d;
			margin: 20px 0px 0px;
			text-transform: capitalize;
			float: left;
		}
		.event-text h5{
			font-size: 18px;
			font-weight: normal;
			color: #109AF3;
			margin:10px 0px 20px 0px;
			text-transform: capitalize;
			float: left;
			clear: left;
		}
		.event-text p strong{
			font-size: 18px;
			font-weight: bold;
			color: #666;
			
		}
		.event-text p {
			font-size: 14px;
			font-weight: normal;
			color: #777;
			margin-bottom: 5px;
			clear: left;
		}
		.single-events.google-map-wrapper{
			padding-top: 0px;
		}
		.single-events .div.wpcf7-mail-sent-ok{
			position: inherit !important;
		}
		@-moz-document url-prefix() {
			.wpcf7-form-control-wrap{
				float: left;
			}

			.single-events .event-form-submit{
				margin-top: 20px;
			}

			span.wpcf7-form-control-wrap{
				clear: left;
				float: left;
				margin-bottom: 14px;
			}

			.single-events .form-group label{
				float: left;
				clear: both;
			}

			.single-events  .sidebar .form-block input[type=file]{
			margin-bottom: 10px;
		  }

		  .new-contact .wpcf7-captchac{
		  	float: left;
		  	clear: left;
		  }
		}
		
		@media (max-width: 760px) {
		}
		@media (max-width: 760px) {
			.webinar-head h4{display: inline-block;}
			
			.webinar-head .text-wrapper{
				height: 73px;
			}
			.single-events .info-divs.header-share{
				height: 35px;
					margin-top: 20px;
				margin-bottom: 0px;
			}
			.xs-border{
				border-top: #e1e1e1 1px solid;
			}
			.webinar-head .image-wrapper{
				padding-right: 10px;
			}
			.info-divs a{
			width: 24px;
			height: 24px;
			display: inline-block;
			margin-right: 3px;
			margin-top: -11px;
			position: absolute;
			background: url(../img/bg-contact-sprite.png) no-repeat;
			background-size: 491%;
			}
		}
		</style>
	</head>
	<body class="inner-page single-events">
		<!-- Google Tag Manager -->

<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-57DV7H"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-57DV7H');</script>

<!-- End Google Tag Manager -->
		<!-- Inner head-->
		<section class="webinar-head">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
						<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>"><div class="image-wrapper">
							<img src="<?php echo get_template_directory_uri();?>/img/img-logo-head.png" class="img-responsive">
						</div></a>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-6 col-xs-8">
						<div class="text-wrapper">
							<h4><?php echo get_the_title();?> </h4>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 xs-border">
						<div class="info-divs header-share">
								<span class="ico share"></span>
								<span class="info">Share:</span>
							<a href="https://www.facebook.com/sharer/sharer.php?url=<?php  echo(get_page_uri( $page_id ))?>" class="fb"></a>
							<a href="http://www.twitter.com/share?url=<?php  echo(get_page_uri( $page_id ))?>" class="twitter"></a>
							<span class="clearfix"></span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="inner-page">
			
			<div class="container">
				<div class="inner-container">
					
					<div class="splitted-container">
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
								
								<div class="events-wrapper detail">
									<?php if (have_posts()) :
									while (have_posts()) :
									the_post();
									?>
									<div class="img-wrapper">
										<img src="<?php echo get_field('image')["url"];?>">
									</div>
									<div class="event-detail">
										<div class="event-detail-head">
											
											<h3><?php the_title();?></h3>
											<div class="row">
												<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
													<div class="info-divs">
														<?php //$s=the_date();
														//$dates = strtotime($s);
														?>
														<span class="ico date"></span>
														<span class="info">Date :</span>
														<span class="value"><?php echo get_field('event_date');?></span>
													</div>
												</div>
												<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
													<div class="info-divs">
														<span class="ico location"></span>
														<span class="info">Location:</span>
														<span class="value"><?php echo get_field('location');?></span>
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
													<div class="info-divs">
														<span class="ico organisor"></span>
														<span class="info">Organizer :</span>
														<span class="value"><?php echo get_field('organisor');?></span>
													</div>
												</div>
												
											</div>
										</div>
										<div class="event-text">
											<p><?php the_content();?></p>
											<!-- <a href="#special-wrapper" class="green-but">Meet Us</a> -->
											<div class="google-map-wrapper event-form-wrapper">
												<h4>Google Map</h4>
												<?php //print_r(get_field('location_map'));
												?>
												<?php $map = get_field('location_map', get_the_ID()); ?>
												<?php //echo $map['lat']; ?>
												<?php //echo $map['lng']; ?>
												<div class="map-canvas" id="map-canvas">
													
												</div>
												
												
											</div>
										</div>
										
									</div>
								</div>
								
							</div>
							<?php endwhile;?>
							<?php endif;?>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="sidebar">
									
									<div class="special-wrapper" id="special-wrapper">
										<?php echo do_shortcode('[contact-form-7 id="18888" title="walkin-Registration"]');?>
										<?php echo do_shortcode('[contact-form-7 id="18889" title="Alternate-Interview"]');?>
										
										<?php //dynamic_sidebar('twitter-sidebar'); ?>
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
		<script>
				$(document).ready(function(){
					$(".img-block").fancybox({padding:0});
				});
		</script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script>
				var map;
			
				
				//var iconBase = 'http://192.168.1.18/suyatitech-wp/wp-content/themes/suyati/img/'
				var iconBase = 'http://192.168.1.18/suyatitech-wp/wp-content/themes/suyati/img/'
				function initialize() {
					var styles = [
					{
					stylers: [
						{ hue: "#fff" },
						{ saturation: -100 },
						{ lightness: 30 }
					]
					}
					];
					
					
				var mapOptions = {
					zoom: 12,
		center: new google.maps.LatLng(<?php echo $map['lat']; ?>, <?php echo $map['lng']; ?>)
		};
		
		
		
		map = new google.maps.Map(document.getElementById('map-canvas'),
		mapOptions);
		
		
		
		var india =new google.maps.LatLng(<?php echo $map['lat']; ?>, <?php echo $map['lng']; ?>);
		
		
		var marker = new google.maps.Marker({
		position: india,
		map: map,
		title: 'Suyati',
		icon: iconBase + 'img-map-marker.png'
		});
		
		map.setOptions({styles: styles});
		
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
		
		
		
		
		$('.alphaonly').bind('keyup blur',function(){ 
		    var node = $(this);
		    node.val(node.val().replace(/[^a-z A-Z]/g,'') ); }
		);

		$('.numonly').bind('keyup blur',function(){ 
		    var node = $(this);
		    node.val(node.val().replace(/[^0-9]/g,'') ); }
		);

		</script>

	</body>
</html>