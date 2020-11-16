<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" />
	<div class="wrap-search-btn" uk-search-icon>
		<input type="submit" id="searchsubmit" value=""/>
	</div>
</form>