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
    * Template Name: CTI Development & Integration
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
    <div class="landing-page-banner" style="background-image: url('http://suyati.com/wp-content/uploads/2015/02/CTI_BANNER.jpg');">
      <div class="container">
        
          <div class="landing-page-logo"><a href="http://suyati.com/">
          <img src="http://suyati.com/wp-content/uploads/2015/02/img-logo-head.png" alt= /></a></div>
          <div class="clear"></div>
          <div class="top-heading text-center">
            <!--<h1>SALESFORCE</h1>-->
            <h1>
           <!--  <img src="http://suyati.com/wp-content/uploads/2015/02/rwd-logo.png" alt="salesforce-logo2" width="474"  class="alignleft size-full wp-image-18662" /> -->
            CTI Development & Integration
            </h1>
            
        </div>
      </div>
    </div>
    <!-- top header section end-->
    <!-- content-->
    <div class="container">
      <div class="col-md-8 col-sm-12 col-xs-12">
        <p>
          Suyati’s Computer Telephony Integration (CTI) development capabilities range 
          from out-of-the-box CTI solutions to pre-integrated solutions with leading CRM tools 
          that allow for fully customized CTI implementations. We offer high-performance,
           scalable solutions for configuring and deploying CTI applications with third-party
            platforms including CRMs and workflow solutions.

        </p>
        <br>
      
        <p>
          Suyati’s unique specialization and niche capabilities offer its customers world-class and cutting edge 
          solutions in Open CTI development and integration for major CRMs like Salesforce. 
          Integrating your CTI system with your CRM ensures that you make the best use of your
           customer data that is already available. Following statistics show that CTI lays the 
           foundation for a cost effective contact center:


        </p>
         <!-- <div class="row we-offer">
           <ul>
             <li class="col-md-12"> <i class="fa fa-arrow-circle-right"></i><span class="inner">Handling a call on first contact- 96% customer retention</span></li>
             <li class="col-md-12"> <i class="fa fa-arrow-circle-right"></i><span class="inner">Each subsequent contact – 10% customer loss</span></li>
             <li class="col-md-12"> <i class="fa fa-arrow-circle-right"></i><span class="inner">Customers with positive contact center experience- 30% more likely to repurchase</span></li>

           </ul>
         </div> -->
        <div class="row">
          <div class="points clearfix">
            <ul class="highlight">
              <li class="col-md-4 col-sm-4 col-xs-6">
                <div class="inner"><p>Handling a call on first contact<br><br><span style="font-size: 48px; font-weight: bold;">96% </span><br/><br/>customer retention</p></div></li>
                <li class="col-md-4 col-sm-4 col-xs-6">
                  <div class="inner"><p>Each subsequent contact<br><br><span style="font-size: 48px;font-weight: bold;">10%</span><br/><br/>
                customer loss</p></div></li>
                <li class="col-md-4 col-sm-4 col-xs-12">
                  <div class="inner inner-last-percent"><p>Customers with positive contact center experience<br><br><span style="font-size: 48px;font-weight: bold;">30%</span><br/>
                more likely to repurchase</p></div></li>
                </ul>
              </div>
            </div>
           
            <p>
              <h3>Our CTI development capabilities include: </h3>
              
              <div class="row we-offer">
                <ul>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Building CTI cross-platform applications/ adapters </span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Interface adapters between disparate proprietary platforms </span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Enable platform interface to produce reports </span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Intelligent IVRS based applications like conference bridges/ call routers</span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Validating systems across any underlying telephony platform</span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Agent desktop & CTI pop-up applications</span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Real-time access to customer data</span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Automatic call logging</span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Facilitate one-click calls</span></li>
                </ul>
              </div>
            </p>
            <div class="row we-offer">
              <h3>Open CTI- Salesforce integration benefits:</h3>
              <ul>
                <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Increased customer satisfaction</span></li>
                <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Improved efficiency</span></li>
                <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Positive business impacts</span></li>
                <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Employee empowerment</span></li>
                
              </ul>
            </div>

            <div class="row we-offer">
              <h3>Suyati’s Open CTI integration with Salesforce constitutes:</h3>
                <ul>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Removing the need for adapters & plug-ins </span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Providing easy scalability </span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Separate installations not required on each system</span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Easy maintenance of the stand-alone adapters</span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Saving time and effort</span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">CTI system independent of specific browsers & platforms</span></li>
                  <li class="col-md-12"><i class="fa fa-circle-o"></i><span class="inner">Creating customizable SoftPhones for each user</span></li>
                  
                </ul>
              </div>

              <p>Open CTI is cloud based and comes with a single code base. The whole organization can transform 
              to Open CTI with a single installation process. CTI integration enables interaction 
              with other third-party applications to help provide a more enriching experience to the end-user. </p>
            
          </div>
          <!-- sidebar start-->
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="landing-page-sidebar"><?php echo do_shortcode( '[contact-form-7 id="21850" title="CTI Development & Integration landing page"]' ); ?></div>
          </div>
          <!-- sidebar end-->
        </div>
        <div class="container">
        <div class="row">
              <!-- <h3 class="text-center">We also support Responsive Web Design for multiple CMS</h3> -->
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