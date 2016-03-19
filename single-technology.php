<?php
/*
Author:Webcastle
Theme Name:Suyati
*/
get_header();
$p_id = get_the_ID();
?>
 <div class="Microsite_Main_Page">
<?php locate_template( array( 'includes_microsite/ms_header_menu.php' ), true, true ); ?>

<?php locate_template( array( 'includes_microsite/ms_static_banner.php' ), true, true ); ?>

<div class="breadcrumb-container">
	<div class="container">
		  <?php global $post; 
		  $site_url = get_site_url();
		  $test = get_the_category($post->ID);
		  $techtype = get_the_terms( $post->ID, 'technology-type' );
		  $tname = preg_replace('/\s+/', '-', $techtype[0]->name);
		  $tslug = strtolower($tname);
		  if($tslug != 'bigdata') {
		    $techtypeurl = $site_url.'/technology-'.$tslug;
		  }
		  else {
		  	$techtypeurl = $site_url.'/technology';
		  }
		  ?>
		  <div class="breadcrumb">
			<span class="seperator"></span> 
            <a rel="v:url" property="v:title" title="Go to Suyati Technologies." href="<?php echo $site_url;?>" class="home">Home</a>
            <span class="seperator"></span>
            <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to Technology." href="<?php echo $site_url;?>/technology/">Technology</a></span>
            <span class="seperator"></span>
            <span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="Go to <?php echo $techtype[0]->name;?> Category archives." href="<?php echo $techtypeurl;?>"><?php echo $techtype[0]->name;?> </a></span>
            <span class="seperator active"></span><span typeof="v:Breadcrumb"><a rel="v:url" class="active" property="v:title" title="Go to <?php echo $post->post_title;?>." href=""><?php echo $post->post_title;?></a></span>		  
          </div>
	</div>
			
</div>

<?php locate_template( array( 'includes_microsite/ms_section_single_content.php' ), true, true ); ?>

<?php get_footer();?>

</div>
    <span class="strip"></span>
<!-- for popup window -->       
<!--<div class="js__p_starts"></div>
<div class="p_body js__p_body js__fadeout"></div>
<div class="popup1 js__popup js__slide_top"> <a href="#" class="p_close js__p_close" title="Close"></a>
<h2 class="get-in-touch">"Get in touch with us"</h2><br>
<div class="form-content">
    <?php //echo do_shortcode('[contact-form-7 id="17756" title="get-touch-contact"]');?>
    
</div>
</div>-->
</div>
