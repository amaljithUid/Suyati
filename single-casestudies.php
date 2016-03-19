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
    <style>
    .download-form-wrapper span input {
	width: 100%;
	margin-bottom: 15px;
	height: 44px;
	text-indent: 20px;
	font-family: 'open_sansregular';
	font-size: 15px;
	line-height: 15px;
	color: #fff;
	background: none;
	border: #fff 1px solid;
	border-radius: 4px;
      }
    .download-form-wrapper span input {
	width: 100%;
	margin-bottom: 15px;
	height: 44px;
	text-indent: 20px;
	font-family: 'open_sansregular';
	font-size: 15px;
	line-height: 15px;
	color: #fff;
	background: none;
	border: #fff 1px solid;
	border-radius: 4px;
      }
      .download-form-wrapper .wpcf7-submit{
	width: 100%;
	height: 50px;
	background: #00b858;
	border: none;
	text-transform: uppercase;
	font-family: 'open_sanssemibold';
	font-size: 19px;
	line-height: 19px;
	color: #fff;
	border-radius: 5px;
	margin-top: 10px;
      }
      .download-form-wrapper .wpcf7-submit:hover {
	background: #5b5b5b;
      }
      .download-form-wrapper span input::-webkit-input-placeholder {
	color:#fff;
     }
     
     .download-form-wrapper span input:-moz-placeholder { /* Firefox 18- */
       color:#fff;
     }
     
     .download-form-wrapper span input::-moz-placeholder {  /* Firefox 19+ */
	color:#fff;  
     }
     
     .download-form-wrapper span input:-ms-input-placeholder {  
	color:#fff;  
     }
     div.wpcf7-response-output{
      position: absolute;
     }
     #download-case-form{
      background: #0a62bc;
      padding: 10px;
     }
     /*span.wpcf7-not-valid-tip {
      border: #f00 1px solid;
      font-size: 1em;
      display: block;
      position: absolute;
      top: -5px;
      right: 8px;
      color: #fff;
      padding: 2px;
    }*/
 span.wpcf7-not-valid-tip {
        font-size: 1em;
        display: block;
        position: relative;
        left: 0;
        right: 0;
        top: -15px;
        color: #fff;
        background: red;
        padding: 2px;
   }
 .wpcf7-response-output.wpcf7-display-none.wpcf7-validation-errors {
		margin: 0;
		margin-top: 6px;
		background: red;
		border: red;
		color: #fff;
		margin-left: 0px;
	}
    form p{
      position: relative;
    }
    div.wpcf7 img.ajax-loader {
      border: none;
      vertical-align: middle;
      right: 11px;
      position: absolute;
      bottom: 20px;
      }
      div.wpcf7-mail-sent-ok{
	    position: relative;
        margin-top: 24px;
        font-size: 24px;
        color: white;
        width: 513px;
        border:none;
      }
    a.download-icon{
	width: 100%;
	height: 50px;
	background: #00b858;
	border: none;
	text-transform: uppercase;
	font-family: 'open_sanssemibold';
	font-size: 19px;
	line-height: 19px;
	color: #fff;
	border-radius: 5px;
	margin-top: 70px;
	display: none;
	text-align: center;
	padding-top: 15px;

      }
      .case-studies .general-container{
	padding-top:0;
      }
     .share-links {
      padding-left: 50px;
      position: relative;
      bottom: 34px;
      padding-top: 0;
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
			<div class="image-wrapper">
				<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri();?>/img/img-logo-head.png" class="img-responsive"></a>
			</div>
		</div>
		<div class=" col-xs-10">
			<div class="text-wrapper">
				<h4><?php echo get_the_title();?></h4>
			</div>
			
		</div>
			</div>
		</div>
		
	</section>
	  <!-- Inner head-->
	  <section class="case-studies-banner">
		  <div class="container">
			    <div class="case-studies-detail">
				    <h2><b><?php echo get_field( "title", $p_id);?></b></h2>
				    <div class="download-form">
					    <div class="row">
					    		<div class="col-sm-6 col-xs-12">
								<div class="img-wrapper">
									<img src="<?php $image= wp_get_attachment_image_src( get_post_thumbnail_id($case->ID),array(550,550) );echo $image[0];?>" class="img-responsive">
									<div class="shadow"></div>
								</div>
						    </div>
						    <div class="col-sm-6 col-xs-12">
						      <div class="row">
							<div class="col-sm-12 col-xs-12">
							    <div class="download-form-wrapper">
							      <?php $cid = get_field( "contact", $p_id);
							      $fid = get_field( "file", $p_id);
							     
							      echo do_shortcode('[email-download download_id="'.$fid->ID.'" contact_form_id="'.$cid->ID.'"]');
							      ?>
							    </div>
							</div>
							
						    </div>
					    </div>
				    </div>
				    
		  		</div>
		  </div>
		
	  </section>
    <section class="inner-page">

	    <div class="container">
		    <div class="inner-container case-studies">
			   
			    <div class="splitted-container general-container">
			      <div class="row">
				<div class="col-sm-6 col-xs-12 pull-right">
							    <div class="share-links">
							    		<label>Share:</label>
								    <div class="link-wrapper">
								    		<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink();?>" class="facebook" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></a>
									    <a href="http://www.twitter.com/share?url=<?php echo get_the_permalink();?>" class="twitter" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></a>
									    <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo get_the_permalink();?>" class="linkedin" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></a>
									    <a href="https://plus.google.com/share?url={<?php echo get_the_permalink();?>}" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" class="gplus"></a>
									    <span class="clear"></span>
								    </div>
								    <div class="clear"></div>
							    </div>
							  </div>
							
			      </div>
				    <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<?php echo wpautop(get_the_content());?>
					     </div>
						
				    </div>
			    </div>
		    </div>
	    </div>
    </section>
	  
   <!-- <section class="footer-strip">
    </section>-->
   <?php endif;?>
    
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
    function downloadblog()
	  {
			var href = $('.download-icon').attr('href');			
			window.location.href = href;
			return true;
	  }
      $(window).load(function(){
    $(".img-wrapper").each( function(){
					var imageUrl = $(this).find('img').attr("src");
                    $(this).find('img').css("visibility","hidden");
				    $(this).css('background-image', 'url(' + imageUrl + ')').css("background-repeat","no-repeat").css("background-size","cover").css("background-position","50% 50%");
				});
});
      
      $(document).ready(function() {
	 $("#download-case").hide();    
	setTimeout(function(){
      $("#download-case").show();        
    }, 1000);
	
       $('.download-pop-button').fancybox({
              
              padding: 10,
	      'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
        });
          
     $('.wpcf7-submit').bind('click', function() {
       $(".icon-button.download-icon").hide(); 
       });
       //$(".download-button").click(function(){
		  //setTimeout('downloadblog()', 4000);	
     // }); 
//       $(".wpcf7-submit").click(function(){
//	      $(this).hide();
//	});

});
    </script>
  </body>
</html>
