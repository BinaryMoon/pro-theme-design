<?php
/**
 * Display a theme for sale.
 *
 * @package ptd
 */

	include( '_partials/head.php' );
?>
	<style>
		.page-theme .theme-header {
			background-color: <?php echo $theme['color']; ?>;
		}
		.features .feature .number:before {
			background-color: <?php echo $theme['color']; ?>;
			color: <?php echo $theme['color-contast']; ?>;
		}
	</style>

	<body class="page-theme">

		<section class="theme-header <?php echo $theme['color-scheme']; ?>">

			<?php include( '_partials/header.php' ); ?>

			<div class="theme-title">
				<h1><?php echo $theme['name']; ?></h1>
				<p><?php echo $theme['short_description']; ?></p>
			</div>

			<div class="wrapper block big">

				<header>
					<a href="<?php echo $theme['url']; ?>">
						<img src="<?php echo image_path( 'theme-devices/' . $theme['image'] ); ?>" alt="<?php echo $theme['name']; ?> Screenshot">
					</a>
				</header>

				<section>

					<div class="content">

						<p><?php echo $theme['description']; ?></p>

						<footer>
<?php
	if ( $theme['is-free'] ) {

		echo $theme['download-button'];

	} else {

?>
							<a href="#theme-pricing" class="button greedy scroll-to">Get <?php echo $theme['name']; ?></a>
<?php

		// Preview.
		if ( ! empty( $theme['url-preview'] ) ) {

?>
							<a href="<?php echo $theme['url-preview']; ?>" class="button ghost greedy">Theme Demo</a>
<?php

		}

	}

?>

						</footer>

					</div>

				</section>

			</div>

		</section>

<?php
	if ( site_include_exists( '_themes/_details/' . $theme_name . '.php' ) ) {

		site_include_view( '_themes/_details/' . $theme_name . '.php', array( 'theme' => $theme ) );

	} else {

		site_include_view( '_themes/_details/default.php', array( 'theme' => $theme ) );

	}
?>

	<!-- Showcase Websites -->
<?php
	$websites = website_get_by_tag( $theme_name, 3 );

	if ( $websites ) {
?>
		<div class="wrapper block-wrapper showcase-wrapper">

			<header class="block-header">
				<h2>
					Stunning Examples of <?php echo $theme['name']; ?> in use
					<a href="<?php echo $theme['url-showcase']; ?>" class="small">See more example sites</a>
				</h2>
			</header>

<?php
		foreach ( $websites as $site ) {
?>
			<div class="block showcase-website theme-<?php echo $site['theme']; ?>">
				<a href="<?php echo $site['url-preview']; ?>" class="image">
					<img src="<?php echo $site['image-url']; ?>" width="400" height="300" alt="<?php echo $site['name']; ?> Screenshot">
				</a>
				<div class="meta">
					<h3><?php echo $site['name']; ?></h3>
				</div>
			</div>
<?php
		}
?>
		</div>
<?php
}
?>

		<!-- Theme Features -->
		<div class="wrapper block-wrapper compact features-list">

			<header class="block-header">
				<h2>
					<?php echo $theme['name']; ?> Features
					<a href="<?php echo $theme['url-documentation']; ?>" class="small">View the Docs for a complete list</a>
				</h2>
			</header>
<?php

	foreach ( $theme['supports'] as $supports ) {

		$feature = documentation_get( $supports );

		if ( $feature ) {
?>
			<div class="block">
				<div class="content">
					<h3><a href="<?php echo $feature['url']; ?>"><?php echo $feature['name']; ?></a></h3>
					<p><?php echo $feature['description']; ?></p>
				</div>
			</div>
<?php
		}
	}

	// Theme Languages.
	if ( ! empty( $theme['path-languages'] ) ) {
?>
			<div class="block">
				<div class="content">
					<h3>Translations</h3>
					<p><?php echo $theme['name']; ?> includes support for: <?php include( $theme['path-languages'] ); ?></p>
				</div>
			</div>
<?php
	}
?>
		</div>

		<?php // site_include_view( '_partials/theme-sales.php', array( 'theme' => $theme ) ); ?>
		<?php site_include_view( '_partials/theme-subscription.php', array( 'theme' => $theme ) ); ?>


	<!-- <hr  />

	<div class="wrapper">

		<h2><?php echo $theme['name']; ?> Categories</h2>
		<?php // themes_tag_list( $theme['tags'] ); ?>

	</div> -->


<?php

	//site_include_view( '_partials/theme-recommended-plugins.php' );

	site_include_view( '_partials/buy-now.php', array( 'theme' => $theme ) );

	include( '_partials/footer.php' );
