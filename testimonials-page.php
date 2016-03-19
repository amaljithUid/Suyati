<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:Testimonials
*/?>
<?php get_header();?>
	  <!-- Inner head-->
    <section class="inner-page">
	    <div class="head-banner advisory-board product-page">
		   <?php
									
		  if ( have_posts() ) :
			   while ( have_posts() ) : the_post();?>
				   <!--  Your loop code-->
				      <h1><?php the_title();?></h1>
				    <?php the_content();?>
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
		    <div class="inner-container">
			   <div class="testimonial-page">
				   <div class="row">
					   <?php
						       $args = array('posts_per_page'   => -1,'orderby'=>'menu_order','order'=>'ASC', 'post_type'=>'whattheysay');
						       $whatthestory = array();
                                                       $whatthey = get_posts( $args );
						       $count = 0;
						       foreach($whatthey as $whattheys):
						       $count++;
                                                       array_push($whatthestory,$whattheys);
                                                       endforeach;
                                                      
						       ?>
                                                       <?php $count_whatthestory = count($whatthestory);?>
                                           <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                 <?php  
										 $cnt = 0;
										 $whatthey_right = array();
										 $whatthey_left = array();
										 //echo "<pre>";print_r($storys_array[$year]);echo "</pre>";
										 foreach($whatthestory as $whatthestory){
											 $cnt++;
											 if($cnt%2 == 1){
											  array_push($whatthey_right,$whatthestory);
											 }
											 else{
											   array_push($whatthey_left,$whatthestory);
											 }
										 }
										 
										 ?>
						  	<div class="half-part left">
                                                           
                                                              <?php foreach($whatthey_right as $story):?>
                                                              <?php $countstory=count($whatthey_right);?>
                                                              <?php //for($color=1;$color<=$countstory;$color++):?>
                                                              <?php $color++;?>
                                                                <?php  if($color%3 == 1){ $get_colors = "red";}
									elseif($color%3 == 2){ $get_colors = "blue";}
									else{ $get_colors = "green";}?>
							   <div class="testimonial-block left <?php echo $get_colors;?>">
									<div class="row">
										<div class="col-xs-10">
											<div class="testimnoail-avtar">
												<img src="<?php echo get_field( "image", $story->ID );?>" class="img-circle img-responsive">
											</div>
											<div class="clearfix"></div>
											<h2><?php echo get_field( "image_name", $story->ID );?></h2>
											<span class="designation"><?php echo get_field("publish_company",$story->ID);?></span>
											<p><?php echo $story->post_content;?> </p>
										</div>
										<div class="col-xs-2">
											<div class="line">
												<span class="bullet"></span>
											</div>
										</div>
									</div>
							   </div>
                                                           <?php //endfor;?>
                                                          <?php endforeach;?>
							</div>
                                                   
					   </div>
					    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                       
						    <div class="half-part right">
								<div class="gap-maker">
								</div>
                                                                 <?php foreach($whatthey_left as $storys):?>
                                                                   <?php $countstory=count($whatthey_left);?>
                                                                   <?php $colortest++;?>
                                                                <?php  if($colortest%3 == 1){ $get_colors = "green";}
									elseif($colortest%3 == 2){ $get_colors = "red";}
									else{ $get_colors = "blue";}?>
								<div class="testimonial-block <?php echo $get_colors;?>">
									<div class="row">
										<div class="col-xs-2">
											<div class="line">
												<span class="bullet"></span>
											</div>
										</div>
										<div class="col-xs-10">
											<div class="testimnoail-avtar">
												<img src="<?php echo get_field( "image", $storys->ID );?>" class="img-circle img-responsive">
											</div>
											<div class="clearfix"></div>
											<h2><?php echo get_field( "image_name", $storys->ID );?></h2>
											<span class="designation"><?php echo get_field("publish_company",$storys->ID);?></span>
											<p><?php echo $storys->post_content;?></p>
										</div>

									</div>
							   </div>
                                                                <?php endforeach;?>
							    
                                                            
                                                            
                                                            
                                                            
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