<form class="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="search-text" name="s" placeholder="<?php esc_attr_e( 'Search...' ); ?>" />
	<button type="submit" name="submit" class="search-button"><?php esc_attr_e( 'Go' ); ?></button>
</form>