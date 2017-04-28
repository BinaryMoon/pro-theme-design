<?php
	include( '_partials/head.php' );
?>
	<body class="page-themes">

<?php
	include( '_partials/header.php' );
?>

<div class="wrapper themes-title">

	<h1><?php echo $themes_title; ?> WordPress&nbsp;Themes</h1>

<?php
	if ( ! empty( $theme_tag_description ) ) {

		echo '<p class="intro">' . $theme_tag_description . '</p>';

	}
?>

</div>

<?php

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

		<hr />

		<div class="wrapper">

			<h2>All WordPress Theme Categories</h2>
<?php
	themes_tag_list( $theme_tags );
?>

		</div>

<?php

	include( '_partials/footer.php' );
