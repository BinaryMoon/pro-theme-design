<?php

	$themes = get_theme_data();

	include( '_partials/head.php' );
?>

	<body class="page-theme-showcase">

<?php
	include( '_partials/header.php' );

	site_page_nav();

	$theme_data = themes_get( $tag );

	if ( $theme_data ) {
?>

		<div class="wrapper showcase-description">
			<h1><?php echo $theme_data[ 'name' ]; ?> WordPress Template</h1>
			<p class="intro"><?php echo $theme_data[ 'description' ]; ?></p>
			<p><a href="<?php echo $theme_data[ 'url' ]; ?>" class="button positive">More info</i></a></p>
		</div>

<?php
	} else {
?>

		<div class="wrapper showcase-description">
			<h1>WordPress Theme Showcase</h1>
		</div>

<?php
	}
?>
		<div class="wrapper block-wrapper">
<?php
	$count = 0;

	foreach( $websites as $key => $site ) {

		$count ++;
?>
			<div class="block showcase-website theme-<?php echo $site['theme']; ?>">
				<a href="<?php echo $site[ 'url-preview' ]; ?>" class="image" target="<?php echo $site[ 'showcase-target' ]; ?>">
					<img src="<?php echo $site[ 'image-url' ]; ?>" width="400" height="300" alt="<?php echo $site['name']; ?> Screenshot" />
				</a>
				<div class="meta">
					<h3><?php echo $site['name']; ?></h3>
					<a href="<?php echo path( 'theme/' . $site['theme'] . '/' ); ?>" class="theme"><?php echo ucwords( $site['theme'] ); ?></a>
				</div>
			</div>
<?php
	}
?>
		</div>

<?php
	include( '_partials/footer.php' );
