    <?php
    /*
    Author:Webcastle
    Theme Name:Suyati
    Template Name:Talent Job apply
    */
    get_header();
    ?>
      <!-- Inner head-->
       
        <section class="inner-page">
                <div class="head-banner advisory-board">
               <?php $pagea = get_post(484);$p_id = get_the_ID();?>        
                 <?php
	      $args = array(
	'numberposts' => 1,
	'post_type' => 'inner-banner',
	'meta_key' => 'post',
	'meta_value' => $p_id,
        
);
$the_query = get_posts( $args );foreach($the_query as $qq){
?>
<style>
	div.wpcf7-mail-sent-ok {
		border: 2px solid #00b858;
		position: absolute;
		margin: 0;
		bottom: 10px;
		left: 33px;
		color: #fff;
		font-size: 15px;
		background: #00b858;
	}
	/*span.wpcf7-not-valid-tip {*/
	/*	border: red 1px solid;*/
	/*	font-size: 1em;*/
	/*	display: block;*/
	/*	right: 0;*/
	/*	color: white;*/
	/*	background: red;*/
	/*	padding-left: 5px;*/
	/*}*/
	span.wpcf7-not-valid-tip{
		top: 0 !important;
		color: red;
		border: 0;
		background: inherit;
		font-size: 17px;
	      }
	.wpcf7-response-output.wpcf7-display-none.wpcf7-validation-errors {
		margin: 0;
		margin-top: 6px;
		background: red;
		border: red;
		color: #fff;
		margin-left: 30px;
	}
	@media (max-width:767px){
	      span.wpcf7-not-valid-tip{
		top: 0 !important;
		color: red;
		border: 0;
		background: inherit;
		font-size: 17px;
	      }
	}
	.file-763 span.wpcf7-not-valid-tip{
		margin-top: -34px;
		margin-bottom: 5px;
	}
	.checkbox-58 span.wpcf7-not-valid-tip{
		margin-top: -28px;
		margin-bottom: 20px;

	}
</style>
<img src="<?php  echo get_field( "image", $qq->ID );?>" />
<?php }?>
                                                 <h1><?php echo $pagea->post_title; ?> </span></h1>
                                                 <p> <?php echo $pagea->post_content;?></p>
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
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                            <div class="general-container">
                                                                  
                                                                    <div class="apply-job-intro">
                                                                             <?php echo get_field('title');?>
                                                                            <?php if (have_posts()) :
                                                                             while (have_posts()) : the_post();
                                                                            ?>
                                                                            <?php the_content();?>
                                                                             <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() );?>" class="img-responsive">
                                                                              <?php endwhile;?>
                                                                              <?php endif;?>
                                                                    </div>
                                                                   
                                                            </div>
                                                            
                                                            
                                                            
                                                </div>
                                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                            <div class="big-form-wrapper">
                                                                    <div class="hidden" id="position-div"><?php echo $_GET['position'];?></div>
                                                                    <?php echo do_shortcode('[contact-form-7 id="571" title="Talent Job apply"]');?>
                                                                  
                                                                    <span class="bigform-edge"></span>
                                                                    <div class="side-enelarger"></div>
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
      
    
    
      <script>
                    $(document).ready(function(){
                         $("input[type='radio']").prettyCheckable({customClass:'pull-left'});
                         $("input[type='checkbox']").prettyCheckable({label:"I have read and understood the privacy policy."});
                           
                    });
                
            </script>
      <?php get_footer();?>