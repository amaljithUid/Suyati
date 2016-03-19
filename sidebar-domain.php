<h5>Our Partner</h5>
<div class="sidebar-block">
									<div class="our-partner-slider">

										 <?php
											$args = array('posts_per_page'   => -1,'post_type'=>'partner','orderby'=>'menu_order','order'=>'ASC', );
											$customers = get_posts( $args );
											$count = 0;
											foreach($customers as $customer):
											?>
  <div> <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($customer->ID) ); ?>" class="img-responsive"></div>
											<?php endforeach;?>
									</div>
								</div>
								<div class="img-wrapper">
									<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/img-iso-certification.png">
								</div>
								