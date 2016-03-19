<?php
/*********************************************************
          Header for microsite for device
          created:SuyatiAJL
*********************************************************/
?>



    <header class="navbar-wrapper hidden visible-xs">

      <div class="container">

        <div class="navbar navbar-static-top" role="navigation">

          <div class="container">

            <div class="navbar-header">

              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                <span class="sr-only">Toggle navigation</span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

                <span class="icon-bar"></span>

              </button>

              <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri();?>/img/img-logo-head.png"></a>

            </div>

            <div class="navbar-collapse collapse">

	      <ul id="search-form-ul" class="nav navbar-nav navbar-right">

	      <li class="hidden-xs hidden-sm">

		 <?php get_search_form(); ?>

	      </li>

              </ul>

	      

	      <?php

	      wp_nav_menu( array( 'theme_location' => 'header', 'walker' => new themeslug_walker_nav_menu,'menu' => 'header', 'menu_class' => ' nav navbar-nav navbar-right',  'container' => false,) );

	      ?>

            </div>

         <form role="search" onSubmit="return title_validatem()" name="f1" method="get" id="searchform" class="seach-sm-device visible-xs visible-sm" action="<?php echo esc_url( home_url( '' ) ); ?>/">

			 <input type="text" value="<?php echo get_search_query(); ?>" role="search"  name="s" id="s" class="search-box search-box-sm" />

             <input type="hidden" name="search" value="s" />

			  <button type="submit"></button>

		  </form>

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