<?php
/**
 * Pro Theme Design site head.
 *
 * @package ptd
 */

?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<link rel="dns-prefetch" href="https://fonts.googleapis.com" />
		<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com" />

		<title><?php site_title(); ?></title>

		<link rel="stylesheet" href="<?php echo css_path( 'css/styles.css' ); ?>" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" />

		<link type="text/plain" rel="author" href="<?php echo path( 'humans.txt' ); ?>" />

		<meta name="google-site-verification" content="VDLz-TZD53CTCmTol81Cd1UoOyz5RuAjdyjiP4irmsk" />
		<meta name="description" content="<?php site_description( '', true ); ?>">

		<!-- Favicons -->
		<link rel="icon" href="<?php echo image_path( 'logos/logo-32.png' ); ?>" sizes="32x32" />
		<link rel="icon" href="<?php echo image_path( 'logos/logo-192.png' ); ?>" sizes="192x192" />
		<link rel="apple-touch-icon-precomposed" href="<?php echo image_path( 'logos/logo-180.png' ); ?>" />

<?php
	if ( page_is_themes() ) {
?>
		<script
			id="fsc-api"
			src="<?php echo FASTSPRING_JS; ?>"
			type="text/javascript"
			data-storefront="<?php echo STORE_URL; ?>"
			data-after-markup-callback="fs_store_markup"
			data-popup-closed="fs_popup_closed"
		>
		</script>
<?php
	}

	include( 'head-open-graph.php' );
?>

	</head>
