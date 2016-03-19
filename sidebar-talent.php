<div class="sidebar">
								<div class="color-ribbon">
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
                                            <a href=" <?php the_field('facebook', 141); ?>" target="_blank" class="facebook"></a>
											<a href="<?php echo get_field('linkedin',141);?>" target="_blank" class="linkedin"></a>
											<a href="<?php echo get_field('twitter',141);?>" target="_blank" class="twitter"></a>
											<a href="<?php echo get_field('google_plus',141);?>" target="_blank" class="gplus"></a>
										</div>
									</div>
									<img src="<?php echo get_field('profile_picture');?>" >
								</div>
								
								
								<div class="sidebar-block big-link upper job">
								<a href="<?php echo get_permalink(484);?>"><?php echo get_field('see_job');?></a>
								</div>
								<div class="sidebar-block big-link upper life">
							    	<a href="<?php echo get_category_link(309);?>" class="nobg"><?php echo get_field('life_suyati');?></a>
								</div>
								<div class="sidebar-block big-link upper speaks">
						    	      <a href="<?php echo get_permalink(858);?>" class="nobg"><?php echo get_field('team_suyati');?></a>
								</div>
								
								
							</div>