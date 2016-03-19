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

    <meta name="p:domain_verify" content="15e1f8fe79e87799b8170c177f93bbea"/>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico">

    <title><?php wp_title();?></title>



    <![endif]-->

    <?php wp_head(); ?>



  </head>

<!-- NAVBAR

================================================== -->

  <body <?php body_class();?>>

	<!-- Google Tag Manager -->

<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-57DV7H"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-57DV7H');</script>

<!-- End Google Tag Manager -->

    <div class="wpc-note bounce">

        <a href="http://suyati.com/microsoft-partner-conference-2015/"><img src="<?php bloginfo('template_directory'); ?>/img/wpc-note.png" alt="" /></a>

    </div>

<div class="wpc-walk-in bounce">

	<a href="http://suyati.com/events/walk-in-at-suyati/"><img src="<?php bloginfo('template_directory'); ?>/img/wpc-walkin-jan-16.png" alt="" /></a>

    </div>

<!--<div class="dreamforce bounce">

<button id="toggle-drm"><img src="<?php //bloginfo('template_directory'); ?>/img/toggle-button3.png" alt="" /></button>

	<a class="drm-img" href="http://suyati.com/dreamforce-summit/"><img src="<?php //bloginfo('template_directory'); ?>/img/dreamforce-stickyimage.png" alt="" /></a>

    </div>-->
  
<!--div class="ascend bounce">
	<button id="toggle-ascend"><img src="<?php //bloginfo('template_directory'); ?>/img/close-button.png" alt="" /></button>

	<a href="http://suyati.com/ascend15/"><img src="<?php //bloginfo('template_directory'); ?>/img/wpc-ascend.png" alt="" /></a>

    </div-->
   <div class="top-menu hidden-xs">

	   <div class="container">

		   <div class="row top-menu-row">

			   <div class="col-lg-2 col-md-3 col-sm-6 col-xs-6">

				   <span class="call-us">

					   <span class="ico call"></span>

					  <?php echo get_field('phone_number',141);?>

				   </span>

			   </div>

			   <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">

				   <a href="mailto:<?php echo get_field('email_id',141);?>" class="mail-us">

					   <span class="ico mail"></span>

					   <?php echo get_field('email_id',141);?>

				   </a>

			   </div>

			   <div class="col-lg-3 col-md-2 hidden-sm hidden-xs"></div>

			   <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">

				     <?php wp_nav_menu(array('theme_location' => 'top','menu' => 'top','menu_class' => 'top-nav','container' => false ) ); ?>

			   </div>

			   <div class="col-lg-2 col-md-2 col-sm-6 col-xs-6">

				  <div class="social-links">

				   <a href="<?php echo get_field('facebook',141);?>" target="_blank" class="facebook"></a>

				  <a href="<?php echo get_field('twitter',141);?>" target="_blank" class="twitter"></a>

                        <a href="<?php echo get_field('linkedin',141);?>" target="_blank" class="linkedin"></a>

				   <a href="<?php echo get_field('google_plus',141);?>" target="_blank" class="googleplus"></a>

				    <span class="clearfix"></span>

				  </div>

			   </div>

		   </div>

	   </div>

   </div>

    <header class="navbar-wrapper">

      <div class="container">

        <div class="navbar navbar-static-top" role="navigation">

          <div class="container">

            <div class="navbar-header">

              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                <span class="sr-only">Toggle navigation</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

              </button>

              <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri();?>/img/img-logo-head.png"></a>

            </div>

            <div class="navbar-collapse collapse">

	      <ul id="search-form-ul" class="nav navbar-nav navbar-right">

	      <li class="hidden-xs hidden-sm">

		 <?php get_search_form(); ?>

	      </li>

              </ul>

	      

	      <?php

	      wp_nav_menu( array( 'theme_location' => 'header', 'walker' => new themeslug_walker_nav_menu,'menu' => 'header', 'menu_class' => ' nav navbar-nav navbar-right',  'container' => false,) );

	      ?>

            </div>

         <form role="search" onSubmit="return title_validatem()" name="f1" method="get" id="searchform" class="seach-sm-device visible-xs visible-sm" action="<?php echo esc_url( home_url( '' ) ); ?>/">

			 <input type="text" value="<?php echo get_search_query(); ?>" role="search"  name="s" id="s" class="search-box search-box-sm" />

             <input type="hidden" name="search" value="s" />

			  <button type="submit"></button>

		  </form>

          </div>

        </div>



      </div>
      <script type="text/javascript">

 			$(document).ready(function(){

    $("#toggle-ascend").click(function(){
        $(".ascend").hide();
    });
   
});
      </script>

    </header>