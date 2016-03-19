<?php
/**
 *Single Job
 */
get_header();?>
<div class="inner-head">
		<div class="container">
			<h1><?php echo the_title();?></h1>
		</div>
	</div>
	<div class="breadcrumb">
		<div class="container">
                        <?php if(function_exists('bcn_display')){bcn_display();}?><span class="clear"></span>
		</div>
	</div>
        <section class="ac practice dcmr">
		<div class="container">
                <?php if (have_posts()) :
                   while (have_posts()) :
                      the_post();
                      the_content();
                   endwhile;
                endif;
                ?>
                </div>
        </section>
<?php
get_footer(); ?>