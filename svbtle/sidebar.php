	<ul id="linkbar" class="clearfix">
		<?php 
			if ( is_active_sidebar( 'sidebar' ) ) {
				dynamic_sidebar( 'sidebar' );
			} else {
				wp_nav_menu();
			};
		?>
	</ul>
