<div class="sidebar">
	<h5>Our Partners</h5>
	<div class="sidebar-block">
		<div class="our-partner-slider">
			<?php
			$args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'partner');
			$customers = get_posts( $args );
			$count = 0;
			foreach($customers as $customer):?>
				<div>
					<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($customer->ID) ); ?>" class="img-responsive">
				</div>
			<?php endforeach;?>
		</div>
	</div>
	<div class="sidebar-block">
			<a href="<?php echo get_permalink(701); ?>"><h6>White Paper</h6></a>
			<?php
			if(is_tax('service-type')){
				while(have_posts()):the_post(); 
				$post_object = get_field('whitepaper_selection', get_the_ID());
				endwhile;
				}else{
			
			$post_object = get_field('whitepaper_selection');
			}
			if( $post_object ): 
			// override $post
			$post = $post_object;
			setup_postdata( $post ); 
			?>
			<a href="<?php echo get_permalink($post->ID); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID),array(230,230) );?>" class="img-responsive">
			<p><?php echo get_the_title($post->ID);?></p></a>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
	</div>
	<div class="sidebar-block">
			<a href="<?php echo get_permalink(836);?>"><h6>Case Studies</h6></a><?php
			if(is_tax('service-type')){
				while(have_posts()):the_post(); 
				$post_object = get_field('casestudy_selection', get_the_ID());
				endwhile;
				}else{
			
			$post_object = get_field('casestudy_selection');
			}
			if( $post_object ): 
				// override $post
				$post = $post_object;
				setup_postdata( $post ); 
				?>
			<a href="<?php echo get_permalink($post->ID);?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID),array(230,230) );?>" class="img-responsive">
			<p><?php echo get_the_title($post->ID);?></p></a>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
	
	</div>
						
								
							<?php
							if(is_tax('service-type')){
				while(have_posts()):the_post(); 
				$post_object = get_field('webinar_selection', get_the_ID());
				endwhile;
				}else{
			
			$post_object = get_field('webinar_selection');
			}
							//$post_object = get_field('webinar_selection');

							if( $post_object ): 

								// override $post
								$post = $post_object;
								setup_postdata( $post );
								if(get_field('youtube',$post->ID)!=""){
								?><div class="sidebar-block"><h6>Webinars</h6>
                                   <div class="v-gallery-block">
												<a class="video"  href="http://www.youtube.com/v/<?php echo get_field('youtube',$post->ID,array(254,188));?>?fs=1&amp;autoplay=1"><img src="http://img.youtube.com/vi/<?php echo get_field('youtube',$post->ID);?>/0.jpg" class="img-responsive" />
												<div class="overlay"></div></a>
												<div class="tag-area">
												<p><?php 
												$after= ' ...';
												$title=get_the_title($post->ID);
												if ( strlen($title) > 40) {
												   $title = substr($title,0,40);
												  ?><?php echo  $title . $after;?><?php
												   } else {
												  ?><?php echo  $title;?><?php
												   }
												?> </p>
												 </div>
											</div></div>
											<?php }wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
											 <?php endif; ?>
								

						</div>

