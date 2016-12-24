<?php
	include( '_partials/head.php' );
?>
	<body class="page-themes">

<?php
	include( '_partials/header.php' );

	site_page_nav();
?>

		<div class="block-wrapper wrapper">
<?php
	$template = site_view_path( '_partials/theme-small.php' );

	foreach ( $themes as $theme ) {

		include( $template );

	}
?>
		</div>

<?php
	if ( 'wordpress.com' != $tag && ! DISABLE_THEME_CLUB ) {
		site_include_view( '_partials/theme-club.php' );
	}

	include( '_partials/footer.php' );
