<?php
	$h = 'p';
	if ( page_is_home() ) {
		$h = 'h1';
	}
?>

		<header class="masthead" id="masthead" role="banner">

			<div class="wrapper">

				<<?php echo $h; ?> class="site-title">
					<a href="<?php echo path(); ?>">
						<?php include( 'img/logos/logo.svg' ); ?>
						<span class="screen-reader-text"><?php site_header_title(); ?></span>
					</a>
				</<?php echo $h; ?>>

				<!-- <p class="animated fadeInUp site-description"><?php site_description(); ?></p> -->

				<?php site_include_view( '_partials/nav.php' ); ?>

			</div>

		</header>
