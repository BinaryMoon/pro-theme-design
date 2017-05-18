<?php
/**
 * Homepage Template
 *
 * @package ptd
 */

	include( '_partials/head.php' );

?>

	<body class="page-home">

		<section class="home-header">

			<header class="masthead" id="masthead" role="banner">

				<div class="wrap">

					<h1 class="site-title">
						<?php include( 'img/logos/logo.svg' ); ?>
						<span><?php site_header_title(); ?></span>
					</h1>

					<p class="site-description">
						<span>Professionally built,</span>
						<span>WordPress themes,</span>
						<span>for small businesses.</span>
					</p>

					<p class="actions">
						<a href="<?php echo path( '/themes/' ); ?>" class="button">Browse All <?php echo $themes_count; ?> Themes</a>
						<!-- <a href="<?php echo path( '/why-us/' ); ?>" class="button minor">Why Us?</a> -->
					</p>

				</div>

			</header>

			<div class="tiles">
<?php
	// Include small theme images.
	foreach ( $themes_intro as $theme ) {
?>
	<a href="<?php echo $theme['url']; ?>">
		<img src="<?php echo image_path( 'theme-thumbnails/' . $theme['image'] ); ?>" />
		<span><?php echo $theme['name']; ?></span>
	</a>
<?php
	}
?>
			</div>

		</section>

		<hr />

		<!-- Site Intro -->
		<section class="wrapper text site-intro">

			<h2>We create <strong>WordPress themes that just work</strong>.</h2>

			<div class="site-intro-description">

				<p>Since 2007 we’ve made over <strong><?php echo paid_customers(); ?></strong> customers happy with our professionally built, meticulously designed and expertly coded WordPress themes.</p>

				<p>We keep our themes <strong>fast, secure and bloat-free</strong> by making use of WordPress’ best practises and coding standards, always using built-in functionality where possible. This makes our themes very easy for you to use and customize.</p>

				<p>Each of our themes is designed for one purpose, and aims to be best-in-class for that purpose. Specialization – rather than a single bloated theme which “does everything” – lets us focus on the features and additions which make our themes the best you’ll find.</p>

				<p>Our WordPress themes come with <a href="<?php echo path( '/documentation/theme/' ); ?>">extensive documentation</a> and if you need any help you have direct access to expert support from our Lead Developer.</p>

			</div>

			<p><a href="<?php echo path( '/themes/' ); ?>" class="button greedy">Find the WordPress Theme for you</a></p>

			<p>Or choose from: <a href="<?php echo path( '/themes/magazine/' ); ?>">Magazine</a>, <a href="<?php echo path( '/themes/portfolio/' ); ?>">Portfolio</a>, <a href="<?php echo path( '/themes/photography/' ); ?>">Photography</a>, <a href="<?php echo path( '/themes/blog/' ); ?>">Blogs</a> and <a href="<?php echo path( '/themes/' ); ?>">more</a>.</p>

		</section>

		<hr />

		<!-- RECENT THEMES -->
		<section class="themes">

			<h2>Recent <a href="<?php echo path( '/themes/' ); ?>">WordPress Themes</a></h2>

<?php
	// Include large theme image.
	$theme = array_shift( $themes );
	include( site_view_path( '_partials/theme-big.php' ) );
?>

			<div class="block-wrapper wrapper">

<?php
	// Include small theme images.
	$template = site_view_path( '_partials/theme-small.php' );
	foreach ( $themes as $theme ) {
		include( $template );
	}
?>

			</div>

			<hr />

		</section>

		<section class="why-us wrapper block-wrapper compact">

				<header class="block-header">
					<h2>
						Why choose Pro Theme Design?
					</h2>
					<p class="intro">You’ll love the features which make us stand out from the crowd.</p>
				</header>

				<div class="block">
					<div class="content">
						<h3>Expert support from our Lead Developer.</h3>
						<p>We’re here to help you with fast and efficient email support directly from our Lead Developer – who knows the themes inside out.</p>
					</div>
				</div>

				<div class="block">
					<div class="content">
						<h3>Beautiful designs to make your site stand out.</h3>
						<p>Your visitors, colleagues and clients will appreciate just how good your site looks. All our themes are professionally designed with a high attention to the details that make your site pop.</p>
					</div>
				</div>

				<div class="block">
					<div class="content">
						<h3>Specialized themes that do one job really really well.</h3>
						<p>You’ll get a theme designed for one niche – that does the job really really well. This specialization allows for more attention to detail than is possible in generalist “all in one” themes.</p>
					</div>
				</div>

				<div class="block">
					<div class="content">
						<h3>Themes that work with WordPress.</h3>
						<p>All our themes are compatible with the latest version of WordPress and work with WordPress, utilizing built-in features – rather than bolting features unnecessarily. This makes for a much better user experience for you.</p>
					</div>
				</div>

				<div class="block">
					<div class="content">
						<h3>Support for your favorite plugins.</h3>
						<p>We develop our themes to work and integrate seamlessly with the best WordPress plugins.</p>
					</div>
				</div>

				<div class="block">
					<div class="content">
						<h3>Ten years of experience, updates and happy customers.</h3>
						<p>Pro Theme Design is one of the oldest and most experienced WordPress theme shops. You can trust us to deliver for your website.</p>
					</div>
				</div>

				<div class="block">
					<div class="content">
						<h3>Really easy to use themes.</h3>
						<p>We think a lot about user experience, and make sure all our themes are easy for you to use. This makes the initial theme setup intuitive and straightforward.</p>
					</div>
				</div>

				<div class="block">
					<div class="content">
						<h3>SEO friendly themes search engines love.</h3>
						<p>Your site will benefit from our themes following SEO best practises.</p>
					</div>
				</div>

				<div class="block">
					<div class="content">
						<h3>Thorough documentation available.</h3>
						<p>Need to check how something works? We have thorough documentation for all of our themes.</p>
					</div>
				</div>

				<div class="block">
					<div class="content">
						<h3>Coded to the highest standards. </h3>
						<p>Our team are design and development experts, with a wealth of WordPress experience. Our Lead Developer previously served as Director of Web Development for one of the largest websites in the world.</p>
					</div>
				</div>

			</div>

		</section>

<?php
	include( '_partials/footer.php' );
