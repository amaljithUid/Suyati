<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:About Video Page
*/?>
<?php get_header();?>
  	  <!-- Inner head--> 
    <section class="inner-page">
	    <div class="head-banner advisory-board">
		    <?php if ( have_posts() ) :
			   while ( have_posts() ) : the_post();?>
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
				      <h1><?php the_title();?></span></h1>
				   <p> <?php the_content();?></p>
				<?php  endwhile;
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
		    <div class="inner-container video-area">
			   
			    <div class="splitted-container">
				    <div class="row">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							
							<div class="v-m-wrapper">
								<div class="v-m-nav-wrapper">
									<ul class="v-m-nav">
										<li class="active"><a href="#vision">Corporate Videos<span></span></a></li>
										<li><a href="#mission">Webinars<span></span></a></li>
										<li>
										<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">

                                                                                    <input type="text" role="search" value="<?php echo get_search_query(); ?>" name="s" id="s" class="video-search"></li>
										    <input type="hidden" name="search" value="video" />
										 </form>
										<span class="clearfix"></span>
										
									</ul>
								</div>
							</div>
							<div class="video-wrapper" id="vision">
                                                              <?php 
                                                                     $the_query = new WP_Query( 'page_id=218' );
                                                                     while ( $the_query->have_posts() ) :
                                                                     $the_query->the_post();?>                                           
                                                                    <h4><?php echo get_field('corporate_title');?></h4>
                                                                    <p><?php echo get_field('corporate_content');?></p>
                                                                <?php  endwhile;
                                                                  wp_reset_postdata();
                                                                 ?>

								<div class="video-gallery">
                                                                    
									<div class="row">
                                                                            <?php
                                                                      $args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'corporatevideo');
                                                                      $corporatevideo = get_posts( $args );
                                                                      foreach($corporatevideo as $corporate):
								      $corporate_or_webinar= get_field('corporate_or_webinar',$corporate->ID);
                                                                     ?>
								        <?php 
									if($corporate_or_webinar[0]=='corporate') {?>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="v-gallery-block">
												<a class="video"  href="http://www.youtube.com/v/<?php echo get_field('youtubueid',$corporate->ID);?>?fs=1&amp;autoplay=1"><img src="http://img.youtube.com/vi/<?php echo get_field('youtubueid',$corporate->ID);?>/0.jpg" class="img-responsive" />
													<div class="overlay"></div></a>
												<div class="tag-area">
													<p><?php 
			    $after= '...';
			    $title=get_the_title($corporate->ID);
			    if ( strlen($title) > 20) {
			       $title = substr($title,0,20);
			      ?><?php echo  $title . $after;?><?php
			       } else {
			      ?><?php echo  $title;?><?php
				   }
			    ?> </p>
												 </div>
											</div>
										</div>
										<?php }?>
									  <?php endforeach;?>	
									</div>
									<div class="link-more-video-wrapper">
										<a href="<?php echo get_page_link(218); ?>">View more videos <span></span></a>
									</div>
								</div>
							</div>
							<div class="video-wrapper" id="mission">
                                                             <?php 
                                                                  $the_query = new WP_Query( 'page_id=572' );
                                                                  while ( $the_query->have_posts() ) :
                                                                        $the_query->the_post();?>
                                                                          <h4><?php the_title();?></h4><?php the_content();?>
                                                                 <?php  endwhile;
                                                                  wp_reset_postdata();?>
								<div class="video-gallery">
									<div class="row">
										    <?php
                                                                      $args = array('posts_per_page'   => 9,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'webinar');
                                                                      $archivewebinar = get_posts( $args );
                                                                      foreach($archivewebinar as $archivewebinars):
                                                                      $archive= get_field('webinar_type',$archivewebinars->ID);
                                                                      $archives=$archive[0];
                                                                      if($archive[0]=='archives'){
								      ?>
										<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
											<div class="v-gallery-block">
												   <a class="video"  href="http://www.youtube.com/v/<?php echo get_field('youtube',$archivewebinars->ID);?>?fs=1&amp;autoplay=1"><img src="http://img.youtube.com/vi/<?php echo get_field('youtube',$archivewebinars->ID);?>/0.jpg" class="img-responsive" />
													<div class="overlay"></div></a>
												<div class="tag-area">
														<p><?php 
			    $after= '...';
			    $title=get_the_title($archivewebinars->ID);
			    if ( strlen($title) > 20) {
			       $title = substr($title,0,20);
			      ?><?php echo  $title . $after;?><?php
			       } else {
			      ?><?php echo  $title;?><?php
				   }
			    ?> </p>
												 </div>
											</div>
										</div>
								        <?php }?>
								        <?php endforeach;?>	
										
									</div>
									
									<div class="link-more-video-wrapper">
										<a href="<?php echo get_page_link(572);?>">View more videos <span></span></a>
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
	  
   <!-- <section class="footer-strip">
    </section>-->
    <span class="strip"></span>
<?php get_footer();?>
<script>
//youtube script
var tag = document.createElement('script');
tag.src = "//www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var overlay;

onYouTubeIframeAPIReady = function () {
    overlay = new YT.Player('overlay', {
        height: '244',
        width: '434',
        videoId: '<?php echo $youtubeid;?>',  // youtube video id
        playerVars: {
            'autoplay': 0,
            'rel': 0,
            'showinfo': 0
        },
        events: {
            'onStateChange': onPlayerStateChange
        }
    });
}

onPlayerStateChange = function (event) {
    if (event.data == YT.PlayerState.ENDED) {
        $('.start-video').fadeIn('normal');
    }
}

$(document).on('click', '.start-video', function () {
    $(this).fadeOut('normal');
    player.playVideo();
});
</script>
