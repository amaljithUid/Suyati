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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <?php
    /**
    * Template Name: Responsive Web Design
    Author:Suyati
    Theme Name:Suyati
    */
    wp_head();
    $p_id = get_the_ID();
    ?>
    <style>
    .landing-page-form input, .landing-page-form textarea{color:#fff !important}
    ::-webkit-input-placeholder {
    color:#fff ;
    }
    :-moz-placeholder { /* Firefox 18- */
    color:#fff ;
    }
    ::-moz-placeholder {  /* Firefox 19+ */
    color: red;
    }
    :-ms-input-placeholder {
    color:#fff ;
    }
    .landing-page .highlight li {
    min-height: 86px;
    }
    html { margin-top: 0px !important;}
    .alignleft{float: left;}
    .text-center{text-align: center;font-weight: 700}
    </style>
  </head>
  
  <body>

    <!-- Google Tag Manager -->

<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-57DV7H"

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-57DV7H');</script>

<!-- End Google Tag Manager -->

    <?php /*?>    <?php
    
    if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    // Your loop code
    the_content();
    endwhile;
    endif;
    ?>
    <?php */?>
    <div class="landing-page"><!-- top header section -->
    <div class="landing-page-banner" style="background-image: url('http://suyati.com/wp-content/uploads/2015/02/rwd-img.jpg');">
      <div class="container">
        
          <div class="landing-page-logo"><a href="http://suyati.com/">
          <img src="http://suyati.com/wp-content/uploads/2015/02/img-logo-head.png" alt= /></a></div>
          <div class="clear"></div>
          <div class="top-heading text-center">
            <!--<h1>SALESFORCE</h1>-->
            <h1>
            <img src="http://suyati.com/wp-content/uploads/2015/02/rwd-logo.png" alt="salesforce-logo2" width="474"  class="alignleft size-full wp-image-18662" />
            <p>Transforming the web experience through responsive designs</p>
            </h1>
            
        </div>
      </div>
    </div>
    <!-- top header section end-->
    <!-- content-->
    <div class="container">
      <div class="col-md-8 col-sm-8 col-xs-12">
        <p>
          Suyati’s expertise in Responsive Web Design services help our clients synchronize with the dynamic world of cutting edge technology. Building a responsive website is an industry best practice of the day. Two principles that rule the creation of sites today are: creating mobile responsive designs and delivering user friendly designs to suit different types of devices. <br/>
Recent figures show a steep increase in the usage of mobile devices for accessing internet with 80% using smartphones. 90% of web users alternate between devices in pursuit of an online goal. After the large major algorithm update of April 2015, it is found that:

        </p>
        <div class="row">
          <div class="points clearfix">
            <ul class="highlight">
              <li class="col-md-6 col-sm-6 col-xs-6">
                <div class="inner"><p><span style="font-size: 48px; font-weight: bold;">32.1% </span><br/>of mobile friendly pages have gained in rankings</p></div></li>
                <li class="col-md-6 col-sm-6 col-xs-6">
                  <div class="inner"><p><span style="font-size: 48px;font-weight: bold;">46.5%</span><br/>
                of non-mobile friendly pages lost rankings</p></div></li>
                </ul>
              </div>
            </div>
           
            <p>
              <h3>Our sophisticated Responsive Web Design approach covers: </h3>
              
              <div class="row we-offer">
                <ul>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Responsive website designs to suit the device structure and orientation </span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Heeding to conventions like faster page-loads, minimal designs, call to action buttons, catchy headlines and so on </span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Mobile-first approach to optimize user experience </span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Optimization of marketing efforts by tracking user preferences effectively</span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Fluid designs that adapt well to the user environment</span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Responsive grid system- from single to 12 column grids that fit well with your device</span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Established web design patterns that work well across mobile devices</span></li>
                </ul>
              </div>
            </p>
            <div class="row we-offer">
              <h3>Suyati’s Responsive Web Design capabilities include:</h3>
              <ul>
                <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Mobile and tablet responsive sites</span></li>
                <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">High quality and cost affordability</span></li>
                <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Integration with social media</span></li>
                <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Reduction in load time</span></li>
                <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Websites built on custom themes and designs</span></li>
                <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Moving your business to a global level</span></li>
                <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Better CMS Platform</span></li>
                <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Search Engine Optimized sites</span></li>
              </ul>
            </div>

            
          </div>
          <!-- sidebar start-->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="landing-page-sidebar"><?php echo do_shortcode( '[contact-form-7 id="21617" title="Contact form for RWD landing page"]' ); ?></div>
          </div>
          <!-- sidebar end-->
        </div>
        <div class="container">
        <div class="row">
              <h3 class="text-center">We also support Responsive Web Design for multiple CMS</h3>
              <div class="brand">
                <a href="http://suyati.com/service/episerver/"><img src="<?php bloginfo('template_directory'); ?>/img/client-logo/episerver.png" height="30" alt=""></a>
                <a href="http://suyati.com/service/ektron/"><img src="<?php bloginfo('template_directory'); ?>/img/client-logo/ektron.png" height="30" alt=""></a>
                <a href="http://suyati.com/service/sitecore/"><img src="<?php bloginfo('template_directory'); ?>/img/client-logo/sitecore.png" height="30" alt=""></a>
                <a href="http://suyati.com/service/sitefinity/"><img src="<?php bloginfo('template_directory'); ?>/img/client-logo/sitefinity.png" height="30" alt=""></a>
                <a href="http://suyati.com/service/kentico/"><img src="<?php bloginfo('template_directory'); ?>/img/client-logo/kentico.png" height="30" alt=""></a>
                <a href="http://suyati.com/service/drupal/"><img src="<?php bloginfo('template_directory'); ?>/img/client-logo/drupal.png" height="30" alt=""></a>
                <a href="http://suyati.com/service/wordpress/"><img src="<?php bloginfo('template_directory'); ?>/img/client-logo/wp.png" height="30" alt=""></a>
                <a href="http://suyati.com/service/joomla/"><img src="<?php bloginfo('template_directory'); ?>/img/client-logo/joomla.png" height="30" alt=""></a>
              </div>
            </div>
            </div>
        <!-- content end-->
        <!-- testimonials-->
        <div class="testimonials-wrapp">
          <div class="container">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="testimonial">
                <!-- Content -->
                <div class="testimonial-content">
                  <p>
                  "Suyati expertly managed the transition from our previous development partner and were up to speed in no time. Since taking over, they 
                  have delivered all product enhancements on schedule and in a more cost effective way."</p>
                  <p class="testimonial-author"><strong>Aaron Sweetman</strong> - Co-founder SalesITV</p>
                </div>
                <!-- Avatar -->
                <div class="testimonial-avatar"><a><img src="http://suyati.com/wp-content/uploads/2015/02/aaron-sweetman.jpg" alt="" /></a>
                <!-- <a><img src="http://suyati.com/suyati/wp-content/uploads/2015/02/aaron-sweetman.jpg" alt="" /></a> --></div>
                <div class="clear"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="testimonial">
                <!-- Content -->
                <div class="testimonial-content">
                  <p>"The DGT model allows us to work closely with Suyati to hire the most talented people in the market and offers us great flexibility in scaling and deploying those resources."</p>
                  <p class="testimonial-author"><strong>Randy Davis</strong> - Author Solutions LLC</p>
                </div>
                <!-- Avatar -->
                <div class="testimonial-avatar">
                  <!-- <a><img src="http://suyati.com/suyati/wp-content/uploads/2014/10/mark.jpg" alt="" /></a> -->
                  <a><img src="<?php bloginfo('template_directory'); ?>/img/randy.jpg" alt="" /></a></div>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- testimonials end-->
          <div class="abt-us text-center">
            <h1>Read more about Suyati</h1>
            <a class="btn btn-lg" href="http://suyati.com/services/" target="_blank">Know More</a>
            <!--<a class="btn btn-lg" href="http://suyati.com/?service=salesforce-consulting/" >Know More</a>-->
          </div>
        </div>
        <section class="copyright">
          <div class="container">
            <p class="pull-left">
              <a href="/about-us/privacy-policy/">Privacy policy</a> | &copy; 
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Suyati Technologies</a> 
              <?php echo date("Y");?>. All rights reserved.
            </p>
            <div class="social-links">
              <a href="<?php echo get_field('facebook',141);?>" class="facebook" target="_blank"></a>
              <a href="<?php echo get_field('twitter',141);?>" class="twitter" target="_blank"></a>
              <a href="<?php echo get_field('linkedin',141);?>" class="linkedin" target="_blank"></a>
              <a href="<?php echo get_field('google_plus',141);?>" class="gplus" target="_blank"></a>
            </div>
            <span class="clearfix"></span>
            
          </div>
        </section>
      </body>