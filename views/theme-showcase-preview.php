<?php
	include( '_partials/head.php' );

	$theme_data = themes_get( $site_data['theme'] );
?>
	<body class="page-preview">

		<div class="iframe-preview">

			<header>

				<h1><?php echo $site_data['name']; ?></h1>

				<a href="<?php echo $site_data['url-showcase']; ?>" class="button small"><i class="fa fa-arrow-left" aria-hidden="true"></i><?php echo $theme_data['name']; ?> Site Showcase</a>

				<a href="<?php echo $theme_data['url']; ?>" class="button small"><?php echo $theme_data['name']; ?> Info</a>

				<a href="<?php echo $site_data['url-iframe']; ?>" class="close-frame"><?php draw_svg( 'app-close-alt' ); ?></a>

				<div class="preview-size">
					<a href="/" class="selected" data-size="100%"><?php draw_svg( 'computer-desktop' ); ?></a>
					<a href="/" data-size="768"><?php draw_svg( 'computer-tablet' ); ?></a>
					<a href="/" data-size="375"><?php draw_svg( 'computer-phone' ); ?></i></a>
				</div>

			</header>

			<div class="iframe-wrapper">
				<iframe src="<?php echo $site_data['url-iframe']; ?>"></iframe>
			</div>

		</div>

		<?php site_script(); ?>

	</body>

</html>
