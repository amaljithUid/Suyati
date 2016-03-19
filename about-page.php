<?php  /*
Author:Webcastle
Theme Name:Suyati
Template Name:About Page
*/
get_header();
?>							
    <!-- Inner head--> 
    <section class="inner-page">
	     <div class="head-banner">
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
		    <h1><?php the_title();?></h1>
	    </div>
		<div class="breadcrumb-container">
			<div class="container">
			    <div class="breadcrumb">
                          <span class="seperator"></span> <?php if(function_exists('bcn_display')) {bcn_display(); }?>
		    </div>
			</div>
			
		</div>
	    <div class="container">
		   <div class="inner-container">
			   
			    <div class="splitted-container">
				    <div class="row">
						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
							<div class="content-wrapper suyati-story">
								<?php
									if ( have_posts() ) :
										while ( have_posts() ) : the_post();
											// Your loop code
											the_content();
										endwhile;
									endif;
								?>
							</div>
							<div class="time-line">
								<h2> <?php  //See The Proceess Title
							    echo get_field( "see_process", get_the_ID() );
						      ?></h2>
								<p><?php  //See The Proceess Content
							    echo get_field( "see_content", get_the_ID() );
						      ?></p>
                                                              
								<div class="year-scroller">
									<div class="wrapper">
										<ul class="year-list">
											<?php    //For Get  Years From Current Year -Start Year
											$yearstartsfrom= get_field( "year", get_the_ID() );
											 $current_year= date("Y");
											for($year=$current_year;$year>=$yearstartsfrom;$year--){ ?>
                                                                                         <li>
												<span class="year-name" id="year-<?php echo $year;?>"><?php echo $year?></span>
                                                                                         </li>
                                                                                        <?php } ?>
										</ul>
									</div>
								</div>
								<div class="time-line-wrapper">
									<div class="year-badge large">
												<span class=""></span>
									</div>
									<?php
										 $args = array('posts_per_page'   => -1,'post_type'=>'suyatistory');
										 $storys = get_posts( $args );
										 
									$storys_array = array();
									foreach($storys as $story):
										 $date_story =  get_field('common_yearmonth',$story->ID);
                                                                                 $date_array = explode("/",$date_story);
										 $year_story = $date_array[0];
                                                                                 $year_month = $date_array[1];
										 if(!$storys_array[$year_story]){$storys_array[$year_story] = array();}
										 array_push($storys_array[$year_story],$story);
									endforeach;
									
									    //echo "<pre>";print_r($storys_array);echo "</pre>";
									$colorval = 0;
									for($year=$current_year;$year>=$yearstartsfrom;$year--):
									$colorval++;
									if($colorval%3 == 1){ $block_color = "red";}
									elseif($colorval%3 == 2){ $block_color = "green";}
									else{ $block_color = "blue";}
									
									
									
									?>
									<div class="year-block <?php echo $block_color;?>"  id="year-<?php echo $year;?>" >
										<div class="row">
										 <?php $count_year_story = count($storys_array[$year]);
										 $cnt = 0;
										 $right_stories = array();
										 $left_stories = array();
										 //echo "<pre>";print_r($storys_array[$year]);echo "</pre>";
										 foreach($storys_array[$year] as $cur_story){
											 $cnt++;
											 if($cnt%2 == 1){
											  array_push($right_stories,$cur_story);
											 }
											 else{
											   array_push($left_stories,$cur_story);
											 }
										 }
										 
										 ?>
										 <?php if(!empty($right_stories)){?>
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 left">
											  <?php foreach($right_stories as $suyati):?>
												<div class="time-line-block <?php echo $block_color;?>">
													<div class="row">
														<div class="col-lg-9 col-md-9 col-sm-9 col-xs-7">
															<div class="timeline-block">
																<div class="row">
																	<div class="col-xs-12 col-lg-4 col-md-4 col-sm-4">
																		<div class="img-wrapper">
																			<img src="<?php echo get_field('image',$suyati->ID);?>">
																		</div>
																	</div>
																	<div class="col-xs-12 col-lg-8 col-md-8 col-sm-8">
																		<div class="text-wrapper">
																			<p><?php echo $suyati->post_title;?> </p>
																		</div>
																	</div>
																</div>
																<span class="side-edge"></span>
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
															 <?php $s =  get_field('common_yearmonth',$suyati->ID);
                                                                                                                         $date = strtotime($s);
                                                                                               
                                                                                                                      ?>
															<span class="month"><?php echo date('M', $date);?></span>
														</div>
														<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
															<div class="bullet">
															</div>
														</div>
													</div>
												</div>
											<?php endforeach;?>
											</div>
											<?php }
											if(!empty($left_stories)){ ?>
											<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 right">
											  <?php foreach($left_stories as $suyatiblue):?>
												<div class="time-line-block <?php echo $block_color;?>">
													<div class="row">
														<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
															<div class="bullet">
															</div>
														</div>
														<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                                                                                                                    <?php $s =  get_field('common_yearmonth',$suyatiblue->ID);
                                                                                                                         $date = strtotime($s);
                                                                                               
                                                                                                                      ?>
															<span class="month"><?php echo date('M', $date);?></span>
														</div>
														<div class="col-lg-9 col-md-9 col-sm-9 col-xs-7">
															<div class="timeline-block">
																<div class="row">
																	<div class="col-xs-4">
																		<div class="img-wrapper">
																			<img src="<?php echo get_field('image',$suyatiblue->ID);?>">
																		</div>
																	</div>
																	<div class="col-xs-12 col-lg-8 col-md-8 col-sm-8">
																		<div class="text-wrapper">
																			<p><?php echo $suyatiblue->post_title;?> </p>
																		</div>
																	</div>
																</div>
																<span class="side-edge"></span>
															</div>
														</div>


													</div>
											        </div>
										          <?php endforeach;?>
											</div>
											<?php }?>
										</div>
										<?php if(!empty($left_stories) || !empty($right_stories)){ ?>
										<div class="year-badge <?php echo $block_color;?>">
													<span class=""><?php echo $year;?></span>
										</div>
						<?php }?>
									</div>
									<?php endfor;?>
									
								</div>
							</div>
					    </div>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="sidebar">
								<?php   //About us dynamic sidebar
                                                                dynamic_sidebar( 'about-sidebar' ); ?>
							</div>
					    </div>
				    </div>
			    </div>
		    </div>
	    </div>
    </section>
    <span class="strip"></span>
   <?php get_footer();?>
