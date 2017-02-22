<?php
/**
 * Template for theme documentation.
 *
 * @package ptd
 */

	$doc = documentation_get( $page );

	$install_url = path( 'documentation/general/theme-installation/' );

	if ( ! empty( $doc[ 'parent-theme' ] ) ) {
		$install_url = path( 'documentation/general/child-theme-installation/' );
	}
?>

	<h1><?php echo $doc[ 'name' ]; ?> Documentation</h1>

	<p class="intro"><?php echo $doc[ 'description' ]; ?></p>
	<p><a href="<?php echo $doc[ 'url-details' ]; ?>" class="button">More Info</a></p>

<?php
	if ( ! site_include_exists( '_support/_theme/' . $page . '.php' ) ) {
?>
	<img src="<?php echo image_path( 'theme-devices/' . $doc['image'] ); ?>" alt="<?php echo $doc['name']; ?> Screenshot" class="full-width" />
<?php
	}
?>
	<h2>Getting Started</h2>

	<ul>
		<li><a href="https://codex.wordpress.org/Installing_WordPress" target="_blank">Getting Started with WordPress</a></li>
		<li><a href="https://codex.wordpress.org/First_Steps_With_WordPress" target="_blank">First Steps with WordPress</a></li>
		<li><a href="<?php echo $install_url; ?>">Installing <?php echo $doc[ 'name' ]; ?></a></li>
		<li><a href="<?php echo $doc[ 'url-demo-content' ]; ?>"><?php echo $doc['name']; ?> Demo Content</a> - <a href="<?php echo path( 'documentation/general/demo-content/' ); ?>">More about demo content</a></li>
	</ul>

<?php
	if ( ! empty( $doc[ 'price-wpcom' ]) ) {
?>

	<p class="note icon"><?php draw_svg( 'alert-info', 'large' ); ?><a href="https://wordpress.com/theme/<?php echo $page; ?>/setup/">Documentation for WordPress.com is available here.</a></p>

<?php
	}

	site_include_view( '_support/_theme/' . $page . '.php' );

	documentation_theme_features( $doc );
?>

	<!-- Theme Languages -->
<?php
	if ( ! empty( $doc[ 'path-languages'] ) ) {
?>
	<h2><?php echo $doc[ 'name' ]; ?> has the following translations included:</h2>
	<p class="intro"><?php include( $doc[ 'path-languages' ] ); ?></p>
<?php
	}
?>

	<h2>Changelog</h2>

	<pre class="compress">
		<?php include( $doc[ 'path-changelog'] ); ?>
	</pre>
<?php

	documentation_customization();
