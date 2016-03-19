<?php
/*********************************************************
				Content section for microsite
					created:SuyatiAJL
*********************************************************/
?>


<div class="container">
	<div class="col-md-3 microsite-testimonial">
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
	<div id="microsite-url-sections" class="col-md-9 microsite-url-sections ms-single-post">
		<div class="microsite-content-section">
			<div class="cms-row cms-wrapper">
		        <?php global $post;?>
		        <div class="cms-wrapper-title"><h2>
		        <?php echo $post->post_title; ?>
		        </h2></div>
		        <div class="cms-wrapper-content text-wrapper">
		        <?php echo get_field('block_1_content',$post->ID);?>
		        </div> 
	        </div>
		</div>


	</div>
</div>
