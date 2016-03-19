<?php
/*Header for suyati theme*/
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <title><?php wp_title();?></title>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
<!-- NAVBAR
================================================== -->
<body <?php body_class();?>>
<!-- Google Tag Manager -->
<noscript>
  <iframe src="//www.googletagmanager.com/ns.html?id=GTM-57DV7H" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
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

<?php locate_template( array( 'includes_microsite/ms_header_menu.php' ), true, true ); ?>



