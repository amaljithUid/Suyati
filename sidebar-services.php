<div class="sidebar">
								<h5>Our Partners</h5>
								<div class="sidebar-block">
									
									<div class="our-partner-slider">
																<?php
							    $args = array('posts_per_page'  =>5, 'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'partner');
							    query_posts($args); 
							     $partners = get_posts( $args );
							      foreach($partners as $partner):?>										
										<div>
											<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($partner->ID) ); ?>" class="img-responsive">
										</div>
										<?php endforeach;?>
									</div>
									
								</div>
								<div class="sidebar-block big-link one">
									<h3>Whitepapers</h3>
                                    <a href="<?php echo get_permalink(701);?>">View All</a>	
								</div>
								<div class="sidebar-block big-link two">
									<h3>Casestudies</h3>
									 <a href="<?php echo get_permalink(836);?>">View All</a>
								</div>
								<div class="sidebar-block big-link three">
                                    
									  <a href="<?php echo get_permalink(572);?>" class="nobg"><h3>Latest<br>Webinar</h3></a>
									
								</div>
							</div>
