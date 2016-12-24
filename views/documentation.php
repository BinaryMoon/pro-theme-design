<?php
/**
 * Display product documentation.
 *
 * @package ptd
 */

	include( '_partials/head.php' );
?>
	<body class="page-support">

<?php
	include( '_partials/header.php' );
?>

		<div class="wrapper text">
<?php
	site_breadcrumbs();

	if ( ! empty( $layout ) ) {

	    include( $layout );

	}

?>
		</div>

<?php
	include( '_partials/footer.php' );
