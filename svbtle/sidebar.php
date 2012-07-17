<?php
	if ( is_active_sidebar( 'sidebar' ) ) {
		dynamic_sidebar( 'sidebar' );
	} else {
		wp_nav_menu();
	};

/*
	<li class="link website">
		<a href="http://dominiqueleca.com">
	        <span class="link_logo"><span class="link_logo_inside">X</span></span>
	        dominiqueleca.com
	      </a>
	    </li>
	    <li class="link twitter">
	      <a href="http://twitter.com/domleca">
	        <span class="link_logo"><span class="link_logo_inside">X</span></span>
	        @domleca
	      </a>
	    </li>
	    <li class="link feed">
	      <a href="http://domleca.com/feed">
	        <span class="link_logo"><span class="link_logo_inside">X</span></span>
	        rss feed
	      </a>
	    </li>
*/
	?>