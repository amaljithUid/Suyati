<?php
/*********************************************************
				Content section for microsite
					created:SuyatiAJL
*********************************************************/
?>


<div class="container">
	
	<div id="microsite-url-sections" class="col-md-9 col-xs-12 microsite-url-sections col-md-push-3">

		<div class="microsite-url-container">
			<h2 class="pagetitle">Services</h2>
			<?php $categories = get_terms( 'service-type' );
			/*print "<pre>";
			print_r($categories);
			print "</pre>";*/?>


			<div class="twelve columns filter-wrapper">
				<ul class="nav-bar-filter" id="nav-bar-filter">
				<?php foreach($categories as $key => $data) { 
			      global $post;
                  $post_name = $post->post_name;
                  if($data->slug == 'cms') {
                  	$microsite_url = 'service';
                  }
                  elseif($data->slug == 'crm') {
                  	$microsite_url = 'services-crm';	
                  }
                  elseif($data->slug == 'design') {
                  	$microsite_url = 'services-design';	
                  }
                  elseif($data->slug == 'ecommerce') {
                  	$microsite_url = 'services-ecommerce';	
                  }
                  elseif($data->slug == 'erp') {
                  	$microsite_url = 'services-erp';	
                  }
                  elseif($data->slug == 'qa') {
                  	$microsite_url = 'services-qa';	
                  }

                  $site_url = get_site_url();
                  $microsite_url_full = $site_url.'/'.$microsite_url;
                ?>

				  <li data-id="<?php echo $data->slug;?>" class="type-links type-links<?php echo $key.' '.$data->slug;?>"><a href="<?php echo $microsite_url_full;?>"><?php echo $data->name;?></a></li>
        		<?php }?>

			</ul>
			<ul id="more-nav" class="hidden-lg">
			        <li>
				        <a href="#" class="more-btn-page"><i class="fa fa-ellipsis-v"></i></a>
			            <ul class="subfilter"></ul>
			        </li>
			    </ul>

			</div>

		</div>
		<?php foreach($categories as $key1 => $data) { ?>
		<div id="<?php echo $data->slug;?>" class="microsite-content-section cms-row cms-row-<?php echo $key1.' '.$data->slug;?>">
	

			<h1><?php echo $data->name;?></h1>
			<?php if($data->slug != 'qa') { ?> 
			<p><?php echo $data->description;?></p>
 			<?php } ?>
			<div class="cms-wrapper">
	        <?php $args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'service', 'service-type' => $data->slug);
            $tech = get_posts( $args );
			foreach($tech as $tech_data) { 
				if($tech_data->post_name != 'qa') { ?>
			    <div class="cms-row red mleft">
			        <div class="row">
			            <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
			                <div class="text-wrapper" style="height: auto;">
			                    <h2><?php echo $tech_data->post_title;?></h2>
			                    <p><?php echo $tech_data->post_content;?></p>
			                    <a href="<?php echo $tech_data->post_name;?>" class="cms-link red">View More</a>
			                </div>
			            </div>
			        </div>
			    </div>
			    <?php } 
			    else { ?>
			    <div class="cms-wrapper">
		            <?php?>
		            <div class="cms-wrapper-content text-wrapper">
		            <?php echo get_field('block_1_content',$tech_data->ID);?>
		            </div> 
	            </div>

			    <?php }?>	
            <?php } ?>	    

			</div>

		</div>
		<?php } ?>

	</div>

	<div class="col-md-3 col-xs-12 microsite-testimonial col-md-pull-9">
		<div class="section-testimonial">
			<h2>Our Work Their Voice</h2>
			<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="7000">
					  <!-- Carousel indicators -->
	                  <ol class="carousel-indicators">
					    <li data-target="#fade-quote-carousel" data-slide-to="0" ></li>
					    <li data-target="#fade-quote-carousel" data-slide-to="1" class="active"></li>
					    <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
					  </ol>
					  <!-- Carousel items -->
					  <div class="carousel-inner">
					    <div class="item">
	                        <div class="profile-circle" style="background-color: rgba(0,0,0,.2);">
	                        	<img src="<?php bloginfo('template_directory'); ?>/microsite_assests/images/testimonial-prof-image/gian-kolbjornsen.jpg" alt="" />
	                        </div>
					    	<blockquote>
					    		<h5>Gian Kolbjornsen</h5>
			<h6>Chief Innovation Officer at Xait</h6>
			<p> At Suyati, I've witnessed true entrepreneurial spirit, practised in word and deed, team work executed with elan, and a work culture that breeds innovation and the willingness to go the extra mile in the search for excellence.</p> 
					    	</blockquote>	
					    </div>
					    
					    <div class="active item">
	                        <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
					    	<blockquote>
					    		<h5>Gian Kolbjornsen</h5>
			<h6>Chief Innovation Officer at Xait</h6>
			<p> At Suyati, I've witnessed true entrepreneurial spirit, practised in word and deed, team work executed with elan, and a work culture that breeds innovation and the willingness to go the extra mile in the search for excellence.</p> 
					    	</blockquote>
					    </div>
	                    <div class="item">
	                        <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
	    			    	<blockquote>
					    		<h5>Gian Kolbjornsen</h5>
			<h6>Chief Innovation Officer at Xait</h6>
			<p> At Suyati, I've witnessed true entrepreneurial spirit, practised in word and deed, team work executed with elan, and a work culture that breeds innovation and the willingness to go the extra mile in the search for excellence.</p> 
					    	</blockquote>
					    </div>
					  </div>
					</div>

			</div>
			<div class="microsite-partners">
				<h2>Big Data Partners</h2>
				<div class="carousel slide" id="fade-partner-carousel" data-ride="carousel" data-interval="3000">
					  <!-- Carousel indicators -->
	                  <ol class="carousel-indicators">
					    <li data-target="#fade-partner-carousel" data-slide-to="0"></li>
					    <li data-target="#fade-partner-carousel" data-slide-to="1"></li>
					    <li data-target="#fade-partner-carousel" data-slide-to="2" class="active"></li>
					  </ol>
					  <!-- Carousel items -->
					  <div class="carousel-inner">
					    <div class="item">
						  <img src="<?php bloginfo ('url'); ?>/wp-content/uploads/2015/01/MongoDB_logo.png" alt="" />
					    </div>
					    
					    <div class="active item">
	                        <img src="<?php bloginfo ('url'); ?>/wp-content/uploads/2015/01/MongoDB_logo.png" alt="" />
					    </div>
	                    <div class="item">
	                        <img src="<?php bloginfo ('url'); ?>/wp-content/uploads/2015/01/MongoDB_logo.png" alt="" />
					    </div>
					  </div>
					</div>
			</div>
	</div>

</div>
