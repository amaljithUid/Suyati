<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:Contact Page
*/?>
<?php get_header();?>
 <style>
	div.wpcf7-mail-sent-ok {
        border: 2px solid #00b858;
        position: relative;
        width: 340px;
        color: #fff;
        font-size: 15px;
        background: #00b858;
        margin: 0 auto;
	}
	span.wpcf7-not-valid-tip {
		border: red 1px solid;
		font-size: 1em;
		display: block;
		right: 0;
		color: white;
		background: red;
		padding-left: 5px;
		top:0 !important;color: red;border: 0;background: white;
	}
	.wpcf7-response-output.wpcf7-display-none.wpcf7-validation-errors {
		margin: 0;
		margin-top: 6px;
		background: red;
		border: red;
		color: #fff;
		margin-left: 30px;
	}
	@media (max-width:767px){
	      span.wpcf7-not-valid-tip{top:0 !important;color: red;border: 0;background: white;}
	}
	.contact-social-links{
	      width: 250px;
	}
.form-block label{padding-bottom:5px;}
textarea.form-control, input.form-control{margin-top:-5px;}
img.wpcf7-form-control.wpcf7-captchac.wpcf7-captcha-captcha-908{margin-bottom:10px;}
    </style>
  <!-- Inner head-->
   
    <section class="inner-page">
	    <div class="head-banner">
             <?php $p_id = get_the_ID();?>
           <?php
	    $args = array(
	'numberposts' => 1,
	'post_type' => 'inner-banner',
	'meta_key' => 'post',
	'meta_value' => $p_id,
        
);
$the_query = get_posts( $args );foreach($the_query as $qq){
?>
<img src="<?php  echo get_field( "image", $qq->ID );?>" /><?php }?>
		    <h1><?php the_title();?></h1>
	    </div>
		<div class="breadcrumb-container">
			<div class="container">
			   <div class="breadcrumb">
                          <span class="seperator"></span> <?php if(function_exists('bcn_display'))
                                {
                                 bcn_display();
                                 }?>
		    </div>
			</div>
			
		</div>
	    <div class="container">
		    <div class="inner-container contact-page">
			    <div class="row">
			    	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="contact-form new-form" id="contact-form">
								<h4>Contact Form</h4>
								<p> <?php echo get_field('contact_form_content');?></p>
								 <?php echo do_shortcode('[contact-form-7 id="464" title="Contact Us"]');?>
							</div>
				    </div>
				    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 new-details">
				    <div class="img-wrapper">
                        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" class="img-responsive">
				    </div>
					    <div class="contact-detail">
						   <?php							
                          if ( have_posts() ) :
                                 while ( have_posts() ) : the_post();?>
				    
                                        <p><?php the_content();?></p>  
				<?php  endwhile;
			 endif;
			   ?>
	    		
						  
						    <div class="contact-social-links">
							    <a href="<?php echo get_field('facebook',141);?>" target="_blank" class="facebook"></a>
							    <a href="<?php echo get_field('twitter',141);?>"  target="_blank" class="twitter" target="_blank"></a>
							    <a href="<?php echo get_field('linkedin',141);?>"  target="_blank" class="linkedin" target="_blank"></a>
							    <a href="<?php echo get_field('google_plus',141);?>"  target="_blank" class="gplus" target="_blank"></a>
                                                           <?php $mapusa = get_field('usa_map_id'); ?>
                                                
							 <?php  $usa_lat = $mapusa['lat']; ?>
	         					 <?php  $usa_long = $mapusa['lng']; ?>
						    </div>
						    
					    </div>
				    </div>
			    </div>
			    
			    <div class="map-tab">
				    

					<!-- Tab panes -->
					<div class="tab-content">
					  <div class="tab-pane" id="india">
						  <span class="top"></span>
						  <span class="right"></span>
						  <span class="bottom"></span>
						  <span class="left"></span>
                                                   <?php $map = get_field('map_id_india', get_the_ID());?>
						  <div class="map-canvas" id="map-india"></div>
					  </div>
					  <div class="tab-pane active" id="usa">
						  <span class="top"></span>
						  <span class="right"></span>
						  <span class="bottom"></span>
						  <span class="left"></span>
                                                    <?php $mapusa = get_field('usa_map_id', get_the_ID()); ?>	
						  <div class="map-canvas" id="map-usa"></div>
					  </div>
					  <div class="tab-pane" id="europe">
						  <span class="top"></span>
						  <span class="right"></span>
						  <span class="bottom"></span>
						  <span class="left"></span>
                                                   <?php  $mapeurope = get_field('map_id_europe'); ?>	 
						  <div class="map-canvas" id="map-europe"></div>
					  </div>
					</div>
				    <ul class="nav nav-tabs nav-justified" role="tablist">
					  <li><a href="#india" role="tab" data-toggle="tab">India<span></span></a></li>
					  <li class="active"><a href="#usa" role="tab" data-toggle="tab">usa<span></span></a></li>
					  <li><a href="#europe" role="tab" data-toggle="tab">europe<span></span></a></li>
					</ul>
			    </div>
			    <div class="address-wrapper">
				    <div class="row">
					    <div class="col-lg-3 col-md-4 col-sm-4 colxs-12 address-block">
						  <?php echo get_field('address_field_india'); ?>
					    </div>
					    <div class="col-lg-3 col-md-4 col-sm-4 colxs-12 address-block">
						   <?php echo get_field('address_field_usa');?>
					    </div>
					    <div class="col-lg-3 col-md-4 col-sm-4 colxs-12 address-block">
						   <?php echo get_field('address_field_euorpe');?>
					    </div>
				    </div>
			    </div>
			     
			    
		    </div>
	    </div>
    </section>

    <span class="strip"></span>
<?php get_footer();?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
		var map1;
	    var map2;
	    var map3;
		var iconBase = '<?php echo get_template_directory_uri();?>/img/';
		function initialize() {
			var styles = [
			  {
			    stylers: [
				 { hue: "#fff" },
				 { saturation: -100 },
				 { lightness: 30 },
				
			    ]
			  }
			];

			
			
		  var mapOptions1 = {
			zoom: 12,
			center: new google.maps.LatLng(<?php echo $map['lat']; ?>, <?php echo $map['lng']; ?>)
		  };
		  
		  var mapOptions2 = {
			zoom: 12,
			center: new google.maps.LatLng(<?php echo $mapusa['lat']; ?>, <?php echo $mapusa['lng']; ?>)
		  };
			var mapOptions3 = {
			zoom: 12,
			center: new google.maps.LatLng(<?php echo $mapeurope['lat']; ?>, <?php echo $mapeurope['lng']; ?>)
		  };
		
		  map1 = new google.maps.Map(document.getElementById('map-india'),
			  mapOptions1);
			  
			 map2 = new google.maps.Map(document.getElementById('map-usa'),
			  mapOptions2);
			
			 map3 = new google.maps.Map(document.getElementById('map-europe'),
			  mapOptions3);
			
			  var india =new google.maps.LatLng(<?php echo $map['lat']; ?>, <?php echo $map['lng']; ?>);
			  var usa =new google.maps.LatLng(<?php echo $mapusa['lat']; ?>, <?php echo $mapusa['lng']; ?>);
			  var europe =new google.maps.LatLng(<?php echo $mapeurope['lat']; ?>, <?php echo $mapeurope['lng']; ?>);
		  
			  var marker1 = new google.maps.Marker({
				  position: india,
				  map: map1,
				  title: '<?php echo $map['address'];?>',
				  icon: iconBase + 'img-map-marker.png'

				});
			var marker2 = new google.maps.Marker({
				  position: usa,
				  map: map2,
				  title: '<?php echo $mapusa['address'];?>',
				  icon: iconBase + 'img-map-marker.png'

				});
			var marker3 = new google.maps.Marker({
				  position: europe,
				  map: map3,
				  title: '<?php echo $mapeurope['address'];?>',
				  icon: iconBase + 'img-map-marker.png'

				});
			map1.setOptions({styles: styles});
			map2.setOptions({styles: styles});
			map3.setOptions({styles: styles});
		}
		
		google.maps.event.addDomListener(window, 'load', initialize);
	    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
			initialize();
		});
	    
		
	</script>
