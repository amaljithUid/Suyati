<div class="sidebar">
		<div class="single-job-slider">
			<?php
				$images = get_field('gallery');
			if( $images ): ?>
			<ul class="bxslider">
				<?php foreach( $images as $image ): ?>
				<li>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				</li>
				<?php endforeach; ?>
			</ul>
			<div class="outside">
				<p><span id="slider-prev"></span> | <span id="slider-next"></span></p>
			</div>
			<?php endif; ?>
			
		</div>

	<!-- <div class="color-ribbon">
			<span class="red"></span>
			<span class="green"></span>
			<span class="blue"></span>
			<span class="clearfix"></span>
	</div>
	<div class="follow-us-block">
			<div class="cover-photo">
			</div>
			<div class="follow-strip">
					<div class="follow-link-wrapper">
				<a href=" <//?php the_field('facebook', 141); ?>" target="_blank" class="facebook"></a>
				<a href="<//?php echo get_field('linkedin',141);?>" target="_blank" class="linkedin"></a>
				<a href="<//?php echo get_field('twitter',141);?>" target="_blank" class="twitter"></a>
				<a href="<//?php echo get_field('google_plus',141);?>" target="_blank" class="gplus"></a>
			</div>
		</div>
		<img src="<?php echo get_field('profile_picture',434);?>" >
	</div> -->
	<div class="job-detail-bottom">
		<?php $app = add_query_arg( 'position', get_the_title(), get_permalink(568) );?>
		<a href="<?php echo $app; ?>" class="quick-enquiry-button">Apply Now<span class="element-animation"></span></a>
		<?php 
		global $post;
		$pagename = $post->post_name;
		$country = get_field('country');
		// print_r($country);
		if($pagename != "openings"){ 
		?>
		<p>Send your profile to
		<?php
			foreach ($country as $singlecountry) {
				if($singlecountry == "india"){
				?>
				<a href="mailto:careers@suyati.com"><br />careers@suyati.com</a> <br />
				<?php }else{ ?>
				<a href="mailto:uscareers@suyati.com">uscareers@suyati.com</a>
				<?php }
			}
		?>
		</p>
		<?php
			
		}

		else
		{
		?>
		<p>Send your profile to <br /><a href="mailto:careers@suyati.com">careers@suyati.com</a><br /><a href="mailto:uscareers@suyati.com">uscareers@suyati.com</a></p>
		<?php }
		?>


	</div>
	
	<div class="sidebar-block big-link upper life">
		<a href="<?php echo get_category_link(309);?>" class="nobg"><?php echo get_field('life_suyati',434);?></a>
	</div>
	<div class="sidebar-block big-link upper speaks">
		<a href="<?php echo get_permalink(858);?>" class="nobg"><?php echo get_field('team_suyati',434);?></a>
	</div>
	<div class="sidebar-block big-link upper job">
		<a href="<?php echo get_permalink(484);?>"><?php echo get_field('see_job',434);?></a>
	</div>
	
	
	
</div>