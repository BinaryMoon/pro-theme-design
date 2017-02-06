<?php
/**
 * Display a theme for sale.
 *
 * @package ptd
 */

	include( '_partials/head.php' );
?>
	<style>
		.theme-header {
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

							<?php site_include_view( '_partials/theme-purchase-buttons.php', array( 'theme' => $theme ) ); ?>

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
		<div class="wrapper block-wrapper compact">

			<header class="block-header">
				<h2>
					<?php echo $theme['name']; ?> Features
					<a href="<?php echo $theme['url-documentation']; ?>" class="small">View the Docs for a complete list</a>
				</h2>
			</header>
<?php

	foreach ( $theme['supports'] as $supports ) {

		$feature = documentation_get( $supports );

		if ( $feature && isset( $feature['icon'] ) ) {
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

<?php
	if ( $theme['is-free'] ) {

	} else {
?>
		<div class="pricing wrapper block-wrapper">

			<header class="block-header">
				<h2>
					Get <?php echo $theme_name; ?>
					<span class="small">Build a Professional Website Today!</span>
				</h2>
			</header>

			<div class="block screenshot">
				<img src="<?php echo image_path( 'theme-monitor/' . $theme['image'] ); ?>" alt="<?php echo $theme['name']; ?> Screenshot" />
			</div>

			<div class="block price-table">

				<div class="product">

					<ul>
						<li>Lifetime theme usage</li>
						<li>Unlimited sites</li>
						<li>1 click admin updates</li>
						<li>1 year of support</li>
					</ul>

<?php
	if ( ! empty( $theme['price-wporg'] ) ) {
?>
					<span class="price"><?php echo $theme['price-wporg']; ?></span>
<?php
	}
?>

					<?php site_include_view( '_partials/theme-purchase-buttons.php', array( 'theme' => $theme ) ); ?>

				</div>

				<p class="secure">
					<?php draw_svg( 'app-lock' ); ?> Secure payments by Fastspring
				</p>

				<div class="payment-methods">
					<img src="<?php echo image_path( 'credit-cards/light-visa.png' ); ?>" title="Visa" />
					<img src="<?php echo image_path( 'credit-cards/light-mastercard.png' ); ?>" title="Mastercard" />
					<img src="<?php echo image_path( 'credit-cards/light-paypal.png' ); ?>" title="Paypal" />
				</div>


				<small class="terms"><a href="<?php echo path( 'policies/' ); ?>" class="terms">Terms</a></small>
			</div>

			<div class="block faq">

				<h3>30 day Guarantee</h3>
				<p>If you have a problem with a purchase from us then let us know and we will <a href="<?php echo path('refund/' ); ?>">give you a refund</a>.</p>

				<h3>Questions?</h3>
				<p>Want to know more about the theme? Just let us know and we'll do our best to help. <a href="<?php echo path( 'theme-question/' . $theme_name . '/' ); ?>">Ask a question</a>.</p>

			</div>
		</div>
<?php
	}

	if ( themes_supports( $theme, 'theme-club' ) && ! DISABLE_THEME_CLUB ) {

		site_include_view( '_partials/theme-club.php' );

	}

	//site_include_view( '_partials/theme-recommended-plugins.php' );

	site_include_view( '_partials/buy-now.php', array( 'theme' => $theme ) );

	include( '_partials/footer.php' );
