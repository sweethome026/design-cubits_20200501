<form action="<?php echo home_url('/'); ?>" class="search-box" role="search" method="get" id="searchform">
	<input type="text" class="search-box__text" name="s" id="s" value="<?php the_search_query(); ?>">
	<input type="hidden" value="post" name="post_type" id="post_type">
	<button type="submit" class="search-box__submit" id="search-box__submit">
		<i class="fas fa-search"></i>
	</button>
</form>