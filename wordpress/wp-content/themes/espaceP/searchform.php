<form class="header__search" id="searchform" method="get" action="<?php bloginfo('url'); ?>/">
	<label class="hidden" for="search"><?php _e('Search:'); ?></label>
	<input class="search__box" type="search" placeholder="Recherche" value="<?php the_search_query(); ?>" name="search" id="search">
	<input class="search__submit" id="searchsubmit" type="submit" value="">
</form>
