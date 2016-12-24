<?php

	$path = trim( Flight::request()->url, '/' );
	$path_parts = explode( '/', $path );
	$section = $path_parts[0];

?>
<nav class="main-menu">

	<button><?php draw_svg( 'menu-bars', 'small' ); ?> Menu</button>

	<ul>
		<li>
			<a href="#search" class="search-toggle social">
				<?php draw_svg( 'app-search', 'small' ); ?>
				<span class="screen-reader-text">Search Pro Theme Design</span>
			</a>
		</li>

		<li class="<?php echo nav_class( 'themes', $section ); ?>">
			<a href="<?php echo path( 'themes/' ); ?>">Themes</a>
		</li>

		<li class="<?php echo nav_class( 'wordpress-plugins', $section ); ?>" >
			<a href="<?php echo path( 'wordpress-plugins/' ); ?>">Plugins</a>
		</li>

		<li class="<?php echo nav_class( 'articles', $section ); ?>">
			<a href="<?php echo path( 'articles/' ); ?>">How To</a>
		</li>

		<li class="<?php echo nav_class( 'tools', $section ); ?>">
			<a href="<?php echo path( 'tools/' ); ?>">Tools</a>
		</li>

		<li class="<?php echo nav_class( 'documentation', $section ); ?>">
			<a href="<?php echo path( 'documentation/' ); ?>">Support</a>
		</li>

		<li>
			<a class="twitter social" href="https://www.twitter.com/prothemedesign">
				<?php draw_svg( 'logo-social-twitter', 'small' ); ?>
				<span class="screen-reader-text">Follow us on Twitter</span>
			</a>

			<a class="facebook social" href="https://www.facebook.com/prothemedesign">
				<?php draw_svg( 'logo-social-facebook', 'small' ); ?>
				<span class="screen-reader-text">Follow us on Facebook</span>
			</a>

			<a class="google-plus social" href="https://plus.google.com/105866087879211758281">
				<?php draw_svg( 'logo-social-google-plus', 'small' ); ?>
				<span class="screen-reader-text">Follow us on Google Plus</span>
			</a>
		</li>
	</ul>

</nav>
