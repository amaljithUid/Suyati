<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php wp_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico">
    <?php wp_head();
    $p_id = get_the_ID();
    ?>
    
  </head>
<!-- NAVBAR
================================================== -->
  <body class="inner-page">

  	
	   <span class="strip"></span>
              <?php if (have_posts()) :the_post(); ?>
	<section class="webinar-head">
		<div class="container">
			<div class="row">
				<div class=" col-xs-2">
			<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>"><div class="image-wrapper">
				 <img src="<?php echo get_template_directory_uri();?>/img/img-logo-head.png" class="img-responsive">
			</div></a>
		</div>
		<div class=" col-xs-10">
			<div class="text-wrapper">
				<h4><?php echo get_the_title();?> </h4>
			</div>
		</div>
			</div>
		</div>
	</section>
	  <!-- Inner head-->
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
									<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($events->ID) ); ?>">
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
												<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
													<div class="info-divs">
														<span class="ico organisor"></span>
														<span class="info">Organisor :</span>
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
													<div class="info-divs">
														<span class="ico share"></span>
														<span class="info">Share:</span>
														<a href="https://www.facebook.com/sharer/sharer.php?url=<?php  echo(get_page_uri( $page_id ))?>" class="fb"></a>
														<a href="http://www.twitter.com/share?url=<?php  echo(get_page_uri( $page_id ))?>" class="twitter"></a>
														<span class="clearfix"></span>
													</div>
								
									
												<div class="special-wrapper" id="special-wrapper">
												<?php echo do_shortcode('[contact-form-7 id="17849" title="WalkinRegisterForm"]');?>

								 <?php //dynamic_sidebar('twitter-sidebar'); ?> 
							</div>
					    </div>
						
				    </div>
			    </div>
		    </div>
	    </div>
    </section>
    <?php endif;?>  
   <!-- <section class="footer-strip">
    </section>-->
    <section class="copyright">
	    <div class="container">
		     <p class="pull-left">Privacy policy | &copy; <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Suyati Technologies</a> <?php echo date("Y");?>. All rights reserved.</p>
		    <div class="social-links">
		    	    <a href="<?php echo get_field('facebook',141);?>" class="facebook"></a>
			    <a href="<?php echo get_field('twitter',141);?>" class="twitter"></a>
			    <a href="<?php echo get_field('linkedin',141);?>" class="linkedin"></a>
			    <a href="<?php echo get_field('google_plus',141);?>" class="gplus"></a>
		    </div>
		    <span class="clearfix"></span>
		    
	    </div>
    </section>
    <!-- Carousel
    ================================================== -->
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php wp_footer();?>
    <script>
      $(window).load(function(){
    $(".img-wrapper").each( function(){
					var imageUrl = $(this).find('img').attr("src");
                    $(this).find('img').css("visibility","hidden");
				    $(this).css('background-image', 'url(' + imageUrl + ')').css("background-repeat","no-repeat").css("background-size","cover").css("background-position","50% 50%");
				});
    });
    $(document).ready(function(){
    var name =$('.webinar-head h4').text(); 
      $("#webinarid").val(name);
      
      $("#register_now_submit").click(function(e){
	e.stopPropagation();
	 $("#cf-name").val($("#firstName").val());
	$("#cf-lname").val($("#lastName").val());
	$("#cf-email").val($("#email").val());
	$(".wpcf7").submit();
	$(".wpcf7-submit").click();
	setTimeout(function(){
	  _gaq.push(['_trackEvent', 'Webinar Register Button', 'Form Submit', 'Goto Webinar', 1, true]);
	  $("#gotowp_personal_webinar_registration").submit();
	 }, 5000);
	
	
	});
});
    </script>
  </body>
</html>

