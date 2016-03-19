<?php
/**
*Single Job
*/
get_header();?>
<!-- Inner head-->

<section class="inner-page">
	<div class="head-banner advisory-board">
		<?php $pagea = get_post(484);$p_id = get_the_ID();?>
		<?php
			$args = array(
			'numberposts' => 1,
			'post_type' => 'inner-banner',
			'meta_key' => 'post',
			'meta_value' => $p_id,
		
		);
		$the_query = get_posts( $args );foreach($the_query as $qq){
		?>
		<img src="<?php  echo get_field( "image", $qq->ID );?>" />
		<?php }?>
	<h1><?php echo $pagea->post_title; ?> </span></h1>
	<p> <?php echo $pagea->post_content;?></p>
</div>

<div class="full-stripe green">
	<div class="container">
		<h2 class="single_job_tittle"><?php the_title();?></h2>
		
	</div>
</div>
<div class="full-stripe blue">
	<div class="container">
		<div class="single-job-detail"><i class="location" ></i><h5>Location:<?php echo get_field('location');?></h5></div>
		<div class="single-job-detail"><i class="experience" ></i><h5>Experience:<?php echo get_field('experience');?></h5></div>
		<div class="single-job-detail"><i class="vacancy" ></i><h5>Vacancy:<?php echo get_field('count');?></h5></div>
	</div>
</div>

<div class="container">
	<div class="inner-container video-area">
		<?php if (have_posts()) :
			while (have_posts()) :
			the_post();
		?>
		<div class="splitted-container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="general-container j-d-full">
						<div class="row">
							<div class="col-md-6 col-xs-12">
								
								<div class="job-details-full">
									<p><?php echo get_field('qualification');?></p>
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="job-details-full">
									<?php if(get_the_content()!=""){ the_content();}?>
								</div>
								<div class="job-details-full">
									<?php  echo get_field('responsibilities');?>
								</div>
							</div>
						</div>
						
					</div>
					
					
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="height: 1040px;">
					<?php get_sidebar('job'); ?>
					
				</div>
				<?php endwhile;?>
			<?php endif;?>	   </div>
		</div>
	</div>
</div>
</section>

<!-- <section class="footer-strip">
</section>-->
<span class="strip"></span>
<?php
get_footer(); ?>