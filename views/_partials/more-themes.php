<?php
	$themes = themes_get_random();
?>
		<div class="block-wrapper wrapper">

			<header class="block-header">

				<h2>Professional WordPress Themes <a class="small" href="<?php echo path( '/themes/' ); ?>">View All WordPress Themes</a></h2>

			</header>

<?php
	$template = site_view_path( '_partials/theme-small.php' );

	foreach ( $themes as $theme ) {
		include( $template );
	}
?>
		</div>
