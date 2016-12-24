<?php

	$themes = get_theme_data();
	$theme_list = array();

	foreach ( $themes as $key => $theme ) {

		$theme_list[] = '<a href="#theme-' . $key . '" class="scroll-to">' . $theme['name'] . '</a>';

	}

?>
<div class="wrapper text">

	<h1>Theme Changelogs</h1>

	<p class="intro">
		We update our themes regularly. This can be for small changes and tweaks, bug fixes, and big new features. Because of this we <a href="<?php echo path( '/tools/build/' ); ?>">'build' our themes</a> regularly. Below is the complete changelogs for all of our themes.
	</p>

	<p>
		Pick a theme: <?php echo implode( ', ', $theme_list ); ?>.
	</p>

<?php
	foreach ( $themes as $key => $theme ) {
?>
		<h2 id="theme-<?php echo $key; ?>"><a href="<?php echo $theme['url-details']; ?>"><?php echo $theme['name']; ?></a></h2>
		<?php include( $theme['path-changelog'] ); ?>
		<p><small><a href="#masthead" class="scroll-to scroll-to-top">Top</a></small></p>
<?php
	}
?>

</div>
