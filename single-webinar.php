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
    <script>
    
    </script>
    <style>
	div.wpcf7-mail-sent-ok {
		border: 2px solid #00b858;
		/*position: absolute;*/
		margin: 0;
		/*bottom: 10px;*/
		left: 33px;
		color: #fff;
		font-size: 15px;
		background: #00b858;
	}
	span.wpcf7-not-valid-tip {
		border: none 1px solid;
		font-size: 12px;
		display: block;
		right: 0;
		color: red;
		padding-left: 5px;
		width:229px;
		position:relative;
		top:0px!important;
	}
	div.wpcf7-validation-errors,
	.wpcf7-response-output.wpcf7-display-none.wpcf7-validation-errors {
		margin: 0;
		margin-top: 6px;
		background: red;
		border: red;
		color: #fff;
	}
	.gotowp-date,.gotowp-subject{
	  display: none;
	}
	.webinar-form form {
	  padding: 20px;
	  padding-top: 12px;
	  color: #fff;
	  font-size: 14px;
	  }
	   .webinar-form h3
	  {
	    color: #fff;
	    padding: 30px 0 0 16px;
	  }
	  .webinar-form p
	  {
	    color: #fff;
	    padding: 16px;
	    font-size: 16px;
	    height: 312px;
	    line-height: 20px;
	  }
	.webinar-form td{
	  width : 100%;
	  float: left;
	  display: block;
	  font-family: 'open_sanssemibold';
	  font-size: 14px;
	  line-height: 14px;
	  color: #fff;
	  padding-bottom: 3px;
	}
	#gotowp_personal_webinar_registration .tableborder{
	  border: 0px;
	  margin-top: 10px;
	}
	#gotowp_personal_webinar_registration input {
	    border-radius: 0px;
	    border: #c2c2c2 1px solid;
	    height: 30px;
	    width: 100%;
	    margin-bottom: 4px;
	    color: #555;
	    padding: 4px 12px;
	}
	#gotowp_personal_webinar_registration #register_now_submit {
	    height: 40px;
	    width: 100%;
	    border: none;
	    border-radius: 5px;
	    background: #00C35D;
	    font-family: 'proxima_novasemibold';
	    font-size: 18px;
	    line-height: 18px;
	    color: white;
	    margin-top: 7px;
	}
	.webinar-form label.error
	{
	  border: red 1px solid;
	  font-size: 1em;
	  display: block;
	  color: white;
	  background: red;
	  padding: 5px;
	}
	@media (max-width:767px){
	  .video_div {
	   left:0;
	   width: auto;
	  }
	}
	@media (max-width:450px){
	.video_div iframe {
	height: 95%!important;
	width: 95%!important;
	}
	}
    </style>
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
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="events-wrapper detail webinar-wrapper">
								<div class="row">
									<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
										<div class="img-wrapper" >
											<img src="<?php //$image= wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),array(805,450) );echo $image[0];
											echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" class="img-responsive">
										</div>
										<div class="hit-row">
											<div class="row">
											<?php 
											         $featured= get_field('webinar_type', $p_id);
											         $featured=$featured[0];

                                                     if($featured!='featured' && $featured!='archives' ){
								      
											 ?>
												<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
													<div class="info-divs">
														<span class="ico date"></span>
														<span class="info">Date :</span>
                                                        <span class="value"><?php echo get_field('webinar_date');?></span> 
													</div>
												</div>
												<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
													<div class="info-divs">
														<span class="ico date"></span>
														<span class="info">Time:</span>
                                                                                  <?php
                                                                                       $get_date=get_field('time',$post->ID);
                                                                                       $zone=3600*-5;
                                                                                       $date=gmdate("h:i a", $get_date + $zone); ?>
                                                                                       <span class="value"><?php echo $get_date=get_field('time',$post->ID);?></span>                                                      
													</div>
												</div>
											<?php }?>
											     <?php if($featured=='featured' || $featured=='archives' ){
											      ?>
											        <script>
											           $(document).ready(function(){
											           $('.wpcf7-submit').attr('value','Access Now');
											           });
											          
											        </script>
											      <?php }?>   
												<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
													<div class="info-divs">
														<span class="ico share"></span>
														<span class="info">Share:</span>
														<a href="https://www.facebook.com/sharer/sharer.php?url=<?php echo get_the_permalink();?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="fb"></a>
														<a href="http://www.twitter.com/share?url=<?php echo get_the_permalink();?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="twitter"></a>
                                                        <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_the_permalink();?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="linkedin"></a>
													<span class="clearfix"></span>
													</div>
												</div>
											</div>
										</div>								
									</div>
									<div class="video_div col-xs-12">
									<?php $videoID = get_post_meta($p_id, 'youtube', true);
										      if ($videoID) {
	                                                echo '<div class="videoContainer ">';
	                                                // Echo the embed code via oEmbed
	                                                echo wp_oembed_get( 'http://www.youtube.com/watch?v=' . $videoID ,array('width'=>350,'height'=>'280')); 
	                                                echo '</div>';
                                                }
                                                else{ echo "sorry,no video for watch!";}
                                               ?>
								     </div>		      
									<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
										<div class="webinar-form">
											<div class="head">
											<?php if($featured!='upcome'){ ?>
												<h1>Enter Your Details</h1>
											<?php }
											    else{?>
											        <h1>Register Form</h1>
											    <?php }?>
												<span class="edge"></span>
											</div>
                                            <?php 
										      if(get_field('goto_wp_shortcode',$p_id)!=""){
										      if($_GET['registration']=="success"){
										     if($featured!='featured'){?> 
											<h3>You're Registered!</h3><p>
A confirmation email with information on how to join the webinar has been sent to you.</br>
Questions or Comments? </br>Contact: webinar@suyati.com</p>
										      <?php }}
										      else{
 											wp_enqueue_script( GOTOWP_PERSONAL_PLUGIN_SLUG . '-validate-js', GOTOWP_PERSONAL_PLUGIN_URL.'assets/js/jquery.validate.min.js', array( 'jquery' ), GOTOWP_PERSONAL_PLUGIN_VERSION );

										       echo do_shortcode(get_field('goto_wp_shortcode',$p_id));?>

										     <!-- <div  class=""> -->
										     <div  class="hidden">
										      <?php echo do_shortcode('[contact-form-7 id="834" title="Webinar Registraion"]'); 
										      ?>
										     </div>
										    <?php }
										     }
										     else{
										     echo do_shortcode('[contact-form-7 id="834" title="Webinar Registraion"]');
										     if($_GET['registration']=="success"){?>
										     <script>
										      $('.img-wrapper').hide();
                                              $('.head').hide();
                                              $('.hit-row').hide();
                                              $('.webinar-form').hide();	
                                              $(".video_div").show();
										     </script>
										    <?php }}
										     ?>        
										</div>
									</div>
								</div>
								<div class="text-wrapper register-details">
											<p><?php the_content();	    
											?></p>
										</div>
								<div class="speakers">
									<div class="speaker-heading">
										<h1>Speakers</h1>
									</div>
									<div class="row">
                                                                            <?php $speakers_name_two= get_field('speakers_name_two', $p_id); ?>
                                                                       <?php  if(!$speakers_name_two==''){
                                                                               $count=6;
                                                                                 }
                                                                                 else
                                                                                 {
                                                                                  $count=12;
                                                                                 }?>
                                                                           
										<div class="col-sm-<?php echo $count;?> col-xs-12">
											<div class="speaker-avatar-wrapper">
												<div class="wrapper">
													<div class="image-wrapper">
												    <img src="<?php echo get_field('speakers_image', $p_id);?>" class="img-repsonsive">
													</div>
													<div class="text-wrapper">
														<h6><?php echo get_field('speakers_name', $p_id); ?></h6>
														<?php echo get_field('designation', $p_id); ?>
													</div>	
												</div>
												<div class="text-wrapper">
													<p><?php echo get_field('speakers_description', $p_id); ?></p>
												</div>
											</div>
										</div>                                                                        
										<div class="col-sm-6 col-xs-<?php echo $count;?>" <?php if ($count==12){ echo 'style="display:none;"'; } ?>>
											<div class="speaker-avatar-wrapper">
												<div class="wrapper">
													<div class="image-wrapper">
														   <img src="<?php echo get_field('speakers_image_two',$p_id);?>" class="img-repsonsive">
													</div>
													<div class="text-wrapper">
														<h6><?php echo get_field('speakers_name_two', $p_id); ?></h6>
														<?php echo get_field('speakers_designation_two', $p_id); ?>
													</div>
													
												</div>
												<div class="text-wrapper">
													<p><?php echo get_field('speakers_description_two', $p_id); ?></p>
												</div>
												
											</div>
										</div>       
									</div>
								</div>
								<div class="video-area webinar hidden">
									<h4>Webinar Archives</h4>
									
									<div class="row">
                                                                                   <?php
                                                                      $args = array('posts_per_page'   => 4,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'webinar');
                                                                      $archivewebinar = get_posts( $args );
                                                                      foreach($archivewebinar as $archivewebinars):
                                                                      $archive= get_field('webinar_type',$archivewebinars->ID);
                                                                      $archives=$archive[0];
                                                                       $s =  $archivewebinars->post_date;
                                                                      $date = strtotime($s);     
                                                                      if($archive[0]=='archives'){
								      ?>
										<div class="col-sm-3 col-xs-12">
											<div class="webinar-block">
												<div class="img-wrapper">
														<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($archivewebinars->ID) );?>" class="img-responsive" id="webinararchives">
													<div class="detail-sec">
														<span class="date-num"><?php  echo date('d', $date);?></span>
														<span class="m-y"><?php  echo date('M Y', $date);?></span>-->
														<a href="<?php $blog = get_field('related_blog',$archivewebinars->ID); echo post_permalink( $blog ); ?>;?>" class="register">Read Blog</a>
														<span class="edge"></span>
													</div>
													
												</div>
												<p><?php echo $archivewebinars->post_title;?></p>
											</div>
										</div>
										
                                                                          <?php } ?>
										<?php //endif;?>
                                                                                <?php endforeach;?>      
                                                                                
										
									</div>
								</div>
									
									
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
