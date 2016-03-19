
<form role="search" method="get" id="searchform" onSubmit="return title_validate()" name="f1" class="search hidden-sm hidden-xs" action="<?php echo esc_url( home_url( '' ) ); ?>/">
		<input type="text" value="<?php echo get_search_query(); ?>" role="search"  name="s" id="s" class="search-box" placeholder="Search" />
		<input type="hidden" name="search" value="s" />
		<button type="submit"><i class="fa fa-search"></i></button>
</form>