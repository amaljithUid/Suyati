<?php
/*********************************************************
				Content section for microsite
					created:SuyatiAJL
*********************************************************/
?>


<div class="container">
	
	<div id="microsite-url-sections" class="col-md-9 col-xs-12 microsite-url-sections col-md-push-3">

		<div class="microsite-url-container">
			<h2 class="pagetitle">Domains</h2>
			<?php $arg = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'domain');
			$domain = get_posts( $arg );
			/*print "<pre>";
			print_r($domain);
			print "</pre>";*/?>
			<div class="twelve columns filter-wrapper">
				<ul class="nav-bar-filter" id="nav-bar-filter">
			<ul>
				<?php 
				foreach($domain as $key => $domains) { 
				  $post_name = $domains->post_name;
				  $post_title = $domains->post_title;
                  $site_url = get_site_url();
                  $microsite_url_full = $site_url.'/domain/'.$post_name;
                ?>

				  <li data-id="<?php echo $post_name;?>" class="type-links type-links<?php echo $key.' '.$post_name;?>"><a href="<?php echo $microsite_url_full;?>"><?php echo $post_title;?></a></li>
        		<?php }?>

			</ul>
			<ul id="more-nav">
			        <li><b><a href="#">More &gt;</a></b>

			            <ul class="subfilter"></ul>
			        </li>
			    </ul>

			</div>

		</div>
		<?php foreach($domain as $key1 => $domainsall) {
            $post_name1 = $domainsall->post_name;
			$post_title1 = $domainsall->post_title;
		?>
		<div id="<?php echo $post_name1;?>" class="microsite-content-section cms-row cms-row-<?php echo $key1.' '.$post_name1;?>">
			<div class="cms-wrapper">

			<div class="cms-wrapper-title"><h1><?php echo $post_title1;?></h1></div>
			<div class="cms-wrapper-content text-wrapper"><p><?php echo get_field( "block_1_content", $domainsall->ID);?></p></div>
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
