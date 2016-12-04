	<form method="get" id="searchform" class="navbar-form pull-left navbar-search" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
			<div class='form-group'>
				<input type="search" class="form-control navbar-search-form'" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="search-mobile" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'boiler' ); ?>" />
			</div>
	</form>