<?php
/*
Author:Webcastle
Theme Name:Suyati
Template Name:About Advantage Kochi
*/
get_header();
?>
  <!-- Inner head-->
  
   <section class="inner-page">
	    <div class="head-banner advisory-board">
                     <?php   if ( have_posts() ) :
                                 while ( have_posts() ) : the_post();$p_id = get_the_ID();?>
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
                                <h1><?php the_title();?></span></h1>
                        <?php   endwhile;
                                     else :
					 echo wpautop( 'Sorry, no posts were found' );
			endif;
                        ?>
	    		
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
		    <div class="inner-container">
			   
			    <div class="splitted-container">
				    <div class="row">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							
							<div class="advantage-tab">
								<div class="row">
									<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 content-div">
										<div class="tab-content active animated fadeInUp" id="red">
											<div class="content-wrapper">
												<h1><?php echo get_field('about_title',get_the_ID());?></h1>
												<p><?php echo get_field('about_content',get_the_ID());?></p>
											</div>
										</div>
										<div class="tab-content animated fadeInUp" id="green">
											<div class="content-wrapper">
												<h1><?php echo get_field('connectivity_title',get_the_ID());?></h1>
												<p><?php echo get_field('connectivity_content',get_the_ID());?></p>
											</div>
										</div>
										<div class="tab-content animated fadeInUp" id="blue">
											<div class="content-wrapper">
												<h1><?php echo get_field('human_resource_title',get_the_ID());?></h1>
												<p><?php echo get_field('human_resource_content',get_the_ID());?></p>
											</div>
										</div>
										<div class="tab-content animated fadeInUp" id="red-repeat">
											<div class="content-wrapper">
												<h1><?php echo get_field('cost_advantage_title',get_the_ID());?></h1>
												<p><?php echo get_field('cost_advantage_content',get_the_ID());?></p>
											</div>
										</div>
									</div>
									<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 nav-div">
										<ul class="tab-link">
											<li id="active"><a  class="red"><span class="arrow"></span><?php echo get_field('about_title',get_the_ID());?></a></li>
											<li><a class="green"><span class="arrow"></span><?php echo get_field('connectivity_title',get_the_ID());?></a></li>
											<li><a  class="blue"><span class="arrow"></span><?php echo get_field('human_resource_title',get_the_ID());?></a></li>
											<li><a class="red-repeat"><span class="arrow"></span><?php echo get_field('cost_advantage_title',get_the_ID());?></a></li>
										</ul>
									</div>
								</div>
							</div>
					    </div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="sidebar">
								<?php dynamic_sidebar('about-sidebar'); ?> 
							</div>
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
    </section>
   <span class="strip"></span>

<?php get_footer();?>