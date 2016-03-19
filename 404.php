<?php
/**
 * The 404 template file
 *

 */
get_header(); ?>

<!-- Inner head-->
    <section class="inner-page">
                <div class="inner-container">
                    <div class="splitted-container">
				    <div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="partners-tab-wrapper">
                                                             <div class="notfound">						                                                                      
								  <div class="tab-pane animated fadeInUp ">
									  <div class="tab-text-wrapper">
										  <h2>Oops! something has went terribly wrong.</h2>
                                                                                 <p>Please check the URL for proper spelling and capitalization. If you're having trouble locating a page on Suyati!, <br>try visiting Suyati <a class="dots" href="<?php echo home_url(); ?> ">homepage</a> 
                                                                                    Please try <a href="<?php echo get_permalink( 459 ); ?>">Contact Us</a> if you need more assistance. </p>
                                                        
									  </div>
								 </div>
                                                               
								</div>
							</div>
					    </div>
						
                                                
				    </div>
			    </div>
		    </div>
                </div>
	    </div>
    </section>

<?php get_footer();?>