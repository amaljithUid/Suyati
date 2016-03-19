 <?php
/*
footer for suyati theme
*/
?>
<?php dynamic_sidebar('footer'); ?> 
   <footer>
	    <div class="container">
		    <div class="visible-xs footer-block">
			    <div class="row">
					<div class="col-xs-6">
						<a href="<?php echo get_permalink(641);?>" class="heading">Technology</a>
						<a href="<?php echo get_permalink(403);?>" class="heading">Services</a>
						<a href="<?php echo get_page_link(627);?>" class="heading">Products</a>
						<a href="<?php echo get_category_link(14);?>" class="heading">blog</a>
					</div>
					<div class="col-xs-6">
						
						<a href="<?php echo get_page_link(459);?>" class="heading">Contact Us</a>
						<a href="<?php echo get_page_link(1039);?>" class="heading">Domain</a>
						<a href="<?php echo get_permalink(434);?>" class="heading">Talent</a>
						<a href="<?php echo get_permalink(29);?>" class="heading">About Us</a>
					</div>	
				</div>
				<div class="quick-link">
					<span class="ico-big mail"></span>
					 <?php echo get_field('email_id',141);?>
				</div>
			    <div class="quick-link">
					<span class="ico-big call"></span>
				 <?php echo get_field('phone_number',141);?>

				</div>
		    </div>
		    
			<div class="row hidden-xs">
				<div class="col-lg-6 col-md-6 col-sm-6 colxs-12">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
							<div class="footer-block">
								<a href="<?php echo get_permalink(641);?>" class="heading">Technology</a>
								<ul class="footer-links hidden-xs">
									<li><a href="<?php echo get_permalink(499);?>">Microsoft</a></li>
									<li><a href="<?php echo get_permalink(23);?>">FOSS</a></li>
									<li><a href="<?php echo get_permalink(24);?>">Cloud</a></li>
									<li><a href="<?php echo get_permalink(25);?>">Big Data</a></li>
									<li><a href="<?php echo get_permalink(26);?>">Mobile</a></li>
								</ul>
							</div>
							
							<div class="footer-block">
								<a href="<?php echo get_permalink(695);?>" class="heading">Resources</a>
								<ul class="footer-links hidden-xs">
									<li><a href="<?php echo get_permalink(701);?>" class="">Whitepapers</a></li>
									<li><a href="<?php echo get_permalink(836);?>" class="">Casestudies</a></li>
									<li> <a href="http://demo.suyati.com/webinars/" class="">Webinar</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
							<div class="footer-block">
								<a href="<?php echo get_permalink(403);?>" class="heading">Services</a>
								<ul class="footer-links hidden-xs">
									<li><a href="<?php echo get_permalink(493);?>">CMS</a></li>
									<li><a href="<?php echo get_permalink(494);?>">CRM</a></li>
									<li><a href="<?php echo get_permalink(498);?>">Ecommerce</a></li>
									<li><a href="<?php echo get_permalink(505);?>">Design</a></li>
									<li><a href="<?php echo get_permalink(928);?>">QA</a></li>
								</ul>
							</div>
							<div class="footer-block">
								<a href="<?php echo get_page_link(627);?>" class="heading">Products</a>
								<a href="<?php echo get_category_link(14); ?> " class="heading">blog</a>
								<a href="<?php echo get_page_link(459);?>" class="heading">Contact Us</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
							<div class="footer-block">
								<a href="<?php echo get_page_link(1039);?>" class="heading">Domain</a>
								<ul class="footer-links hidden-xs">
									<li><a href="<?php echo get_permalink(1119);?>">Publishing</a></li>
									<li><a href="<?php echo get_permalink(1124);?>">Digital Marketing</a></li>
									<li><a href="<?php echo get_permalink(16543);?>">Retail</a></li>
									<li><a href="<?php echo get_permalink(1126);?>">Healthcare</a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 colxs-12">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
							<div class="footer-block">
								<a href="<?php echo get_permalink(434);?>" class="heading">Talent</a>
								<ul class="footer-links hidden-xs">
									<li><a href="<?php echo get_permalink(1044);?>">Life at Suyati</a></li>
									<li> <a href="<?php echo get_permalink(858);?>"> Team Suyati Speaks</a></li>
									<li> <a href="<?php echo get_permalink(484);?>"> Job Openings</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
							<div class="footer-block">
								<a href="<?php echo get_permalink(29);?>" class="heading">About Us</a>
								<ul class="footer-links hidden-xs">
								        <li> <a href="<?php echo get_permalink(204);?>"> Our Vision &amp; Mission</a></li>
									<li> <a href="<?php echo get_permalink(73);?>"> Advisory Board</a></li>
									<li> <a href="<?php echo get_permalink(38);?>"> Management Team</a></li>
									<li> <a href="<?php echo get_permalink(1152);?>"> Engage</a></li>
									<li> <a href="<?php echo get_permalink(112);?>"> Process Methodology</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
							<div class="footer-block">
								<ul class="footer-links hidden-xs">
									<li> <a href="<?php echo get_permalink(180);?>"> Infrastructure</a></li>
									<li> <a href="<?php echo get_permalink(118);?>"> Advantage Kochi</a></li>
									<li> <a href="<?php echo get_permalink(1197);?>"> Partners</a></li>
									<li><a href="<?php echo get_permalink(177);?>">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="quick-link">
								  <a href="mailto:<?php echo get_field('email_id',141);?>">
								<span class="ico-big mail"></span>
								 <?php echo get_field('email_id',141);?></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-6">
							<div class="quick-link">
								<span class="ico-big call"></span>
								<?php echo get_field('phone_number',141);?>
							</div>
						</div>
					</div>
				</div>
			</div>
	    </div>
    </footer>
    <section class="copyright">
	    <div class="container">
		    <p class="pull-left">Privacy policy | &copy; <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Suyati Technologies</a> <?php echo date("Y");?>. All rights reserved.</p>
		    <div class="social-links">
		    		    <a href="<?php echo get_field('facebook',141);?>" target="_blank" class="facebook"></a>
                   <a href="<?php echo get_field('twitter',141);?>" target="_blank" class="twitter"></a>
                   <a href="<?php echo get_field('linkedin',141);?>" target="_blank" class="linkedin"></a>
				   <a href="<?php echo get_field('google_plus',141);?>" target="_blank" class="gplus"></a>
		    </div>
		    <span class="clearfix"></span> 
	    </div>
    </section>
   
    <!-- Carousel
    ================================================== -->
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
  
      <script>
function title_validate(){
       var flag=0;
       var strText = $(".search-box").val();
       if (strText!="")
       {
       var strArr = new Array();
       strArr = strText.split("");
       if(strArr[0]==" ") // this is the the key part. you can do whatever you want here!
       {
       flag=1;
       }
       }
       if($(".search-box").val()==""|| flag == 1  )
       {     
		    alert("Should not be blank or contain blank space at the Begining!");
		    return false;
       }
       
}
function title_validatem(){
       var flag=0;
       var strText = $(".search-box-sm").val();
       if (strText!="")
       {
       var strArr = new Array();
       strArr = strText.split("");
       if(strArr[0]==" ") // this is the the key part. you can do whatever you want here!
       {
       flag=1;
       }
       }
       if($(".search-box-sm").val()==""|| flag == 1  )
       {     
		    alert("Should not be blank or contain blank space at the Begining!");
		    return false;
       }
       
}
    </script>

<?php wp_footer();?>
  </body>
</html>
