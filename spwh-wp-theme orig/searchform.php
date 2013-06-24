<div id='search-box'>
	<form method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" id="search-text" name="s" placeholder="<?php esc_attr_e( 'Search' ); ?>" />
		<button type="submit" name="submit" id="search-btn"><span><?php esc_attr_e( 'Search' ); ?></span></button>
  </form>
</div>