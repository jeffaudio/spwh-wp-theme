<form class="search row collapse" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="small-10 columns">
		<input type="text" class="search-text" name="s" placeholder="<?php esc_attr_e( 'Search...' ); ?>" />
	</div>
	<div class="small-2 columns">
		<button type="submit" name="submit" class="button postfix"><?php esc_attr_e( 'Go' ); ?></button>
	</div>
</form>