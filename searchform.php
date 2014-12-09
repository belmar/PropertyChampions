<div class="sidebar-search-form color-2 clearfix">
	<form method="get" action="<?php echo home_url(); ?>" accept-charset="utf-8">
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="sidebar-search-field pull-left">
		<button type="submit" value="<?php echo theme_locals("search") ?>" id="search-submit" class="sidebar-search-btn pull-left color-1">			<span class = "icon-search"></span>		</button>
	</form>
</div>