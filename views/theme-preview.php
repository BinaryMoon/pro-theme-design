<?php
	include( '_partials/head.php' );

	$iframe_url = 'https://demo.prothemedesign.com/wordpress/' . strtolower( $theme_slug ) . '/';

	if ( ! empty( $theme['download-button'] ) ) {

		$theme['download-button'] = str_replace( 'button greedy', 'button small', $theme['download-button'] );

	}
?>
	<body class="page-preview">

		<div class="iframe-preview">

			<header>

				<h1><a href="<?php echo $theme[ 'url' ]; ?>"><?php echo $theme[ 'name' ]; ?></a> Demo</h1>

				<?php echo $theme['download-button']; ?>

				<a href="<?php echo $theme[ 'url' ]; ?>" class="button small ghost">Theme Details</a>

				<a href="<?php echo $iframe_url; ?>" class="close-frame"><?php draw_svg( 'app-close-alt' ); ?></a>

				<div class="preview-size">
					<a href="/" class="selected" data-size="100%"><?php draw_svg( 'computer-desktop' ); ?></a>
					<a href="/" data-size="768"><?php draw_svg( 'computer-tablet' ); ?></a>
					<a href="/" data-size="375"><?php draw_svg( 'computer-phone' ); ?></i></a>
				</div>

			</header>

			<div class="iframe-wrapper">
				<iframe src="<?php echo $iframe_url; ?>"></iframe>
			</div>

<?php
	include( '_partials/buy-now.php' );
?>

			<div class="overlay"></div>

		</div>

		<?php site_script(); ?>

	</body>

</html>
