<?php
/*********************************************************
					Header for microsite
					created:SuyatiAJL
*********************************************************/
?>
<header class="navbar-wrapper ">
	<div class="container">
		<div class="row">
			<div class="top-sub-header top-menu">
				<div class="top-menu-row">
					<div class="col-lg-4 col-md-5 col-sm-6 col-xs-6">
						<span class="call-us">
							<span class="ico call"></span>
							<?php echo get_field('phone_number',141);?>
						</span>
						<a href="mailto:<?php echo get_field('email_id',141);?>" class="mail-us">
							<span class="ico mail"></span>
							<?php echo get_field('email_id',141);?>
						</a>
					</div>
					<div class="col-lg-2 col-md-2 hidden-md hidden-sm hidden-xs">
						
					</div>
					<div class="col-lg-6 col-md-7 col-sm-6 col-xs-6">
						<?php get_search_form(); ?>
						<div class="social-links">
							<p> Like your way to our page</p>
							<a href="<?php echo get_field('facebook',141);?>" target="_blank" class="facebook"></a>
							<a href="<?php echo get_field('twitter',141);?>" target="_blank" class="twitter"></a>
							<a href="<?php echo get_field('linkedin',141);?>" target="_blank" class="linkedin"></a>
							<a href="<?php echo get_field('google_plus',141);?>" target="_blank" class="googleplus"></a>
							<span class="clearfix"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar navbar-static-top" role="navigation">
			<div class="row">
			<div class="col-md-12 col-sm-12 hidden-lg">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle handberg-icon" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<a class="hambergmenu"><span></span></a>
					</button>
					<a class="navbar-brand hidden-lg hidden-md"  href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri();?>/img/img-logo-head.png"></a>
				</div>
				<form role="search" onSubmit="return title_validatem()" name="f1" method="get" id="searchform" class="seach-sm-device visible-sm hidden-xs" action="<?php echo esc_url( home_url( '' ) ); ?>/">
					<input type="text" value="<?php echo get_search_query(); ?>" role="search"  name="s" id="s" class="search-box search-box-sm" />
					<input type="hidden" name="search" value="s" />
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
			<div class="col-md-12 col-sm-12">
					<a href="#menu" class="hambergmenu hidden-xs"><span></span></a>
					<div id="menu">
						<?php wp_nav_menu(array('theme_location' => 'top','menu' => 'top','menu_class' => 'hambergmenu_droplist','container' => false ) ); ?>
					</div>
				<div class="navbar-collapse collapse">
					<a class="navbar-brand hidden-xs hidden-sm" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri();?>/img/img-logo-head.png"></a>
					<?php wp_nav_menu( array( 'theme_location' => 'header', 'walker' => new themeslug_walker_nav_menu,'menu' => 'header', 'menu_class' => ' nav navbar-nav navbar-right',  'container' => false,) );?>
					
					<form role="search" onSubmit="return title_validatem()" name="f1" method="get" id="searchform" class="seach-sm-device hidden-sm visible-xs" action="<?php echo esc_url( home_url( '' ) ); ?>/">
					<input type="text" value="<?php echo get_search_query(); ?>" role="search"  name="s" id="s" class="search-box search-box-sm" />
					<input type="hidden" name="search" value="s" />
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
				</div>
			</div>
			</div>
		</div>
		
		<script type="text/javascript">
		
			$(document).ready(function(){
				$("#toggle-ascend").click(function(){
					$(".ascend").hide();
				});
		});
		</script>
	</header>