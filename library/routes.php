<?php

/**
 * Homepage
 */
Flight::route( '/', function() {

	SiteTemplate::description( 'Awesome <strong>WordPress Themes</strong> for Professional Websites.' );

	Flight::render(
		'home.php',
		array(
			'request' => Flight::request(),
		)
	);

} );


/**
 * Theme Club
 */
Flight::route( '/theme-club/', function() {

	// this number isn't strictly accurate - but it's pretty close
	$customers = date( 'U' ) / 12345;
	$customers = number_format( $customers );

	SiteTemplate::title( 'WordPress Themes Club' );
	SiteTemplate::description( 'Join over <strong>' . $customers . '</strong> happy themers.' );

	Flight::render(
		'theme-club.php',
		array(
			'request' => Flight::request(),
		)
	);

} );


/**
 * Theme Showcase
 */
Flight::route( '/theme-showcase/(@tag)/', function( $tag = '' ) {

	$view = 'showcase.php';
	$title = 'WordPress Themes Showcase';
	$websites = array();

	if ( website_tag_exists( $tag ) ) {

		$websites = website_get_by_tag( $tag );

		if ( ! empty( $tag ) ) {
			$title = sprintf( '%s Themes: WordPress Themes Showcase', ucwords( $tag ) );
		}

	} else {

		$view = '404.php';

	}

	SiteTemplate::title( $title );
	SiteTemplate::description( 'A selection of the <strong>thousands of awesome sites</strong> our customers have built!' );

	Flight::render(
		$view,
		array(
			'request' => Flight::request(),
			'websites' => $websites,
			'tag' => $tag
		)
	);

} );


/**
 * Terms and Conditions
 */
Flight::route( '/policies/', function() {

	SiteTemplate::title( 'Terms and Conditions' );

	Flight::render(
		'terms-and-conditions.php',
		array(
			'request' => Flight::request(),
		)
	);

} );


/**
 * WordPress Plugins
 */
Flight::route( '/wordpress-plugins/', function() {

	SiteTemplate::title( 'Recommended WordPress Plugins' );
	SiteTemplate::description( 'Plugins for creating the perfect WordPress site.' );

	Flight::render(
		'plugins.php',
		array(
			'request' => Flight::request(),
		)
	);

} );


/**
 * Contact
 */
Flight::route( '/contact/', function() {

	SiteTemplate::title( 'Contact Us' );
	SiteTemplate::description( 'Get in touch.' );

	Flight::render(
		'contact.php',
		array(
			'request' => Flight::request(),
		)
	);

} );


/**
 * Theme Customization
 */
Flight::route( '/theme-customization/', function() {

	SiteTemplate::title( 'WordPress Theme Customization' );
	SiteTemplate::description( 'Customize your theme with <strong>Codeable.io</strong>.' );

	Flight::render(
		'theme-customizer.php',
		array(
			'request' => Flight::request(),
		)
	);

} );


/**
 * Contact Thanks
 */
Flight::route( '/contact/thanks/', function() {

	SiteTemplate::description( 'Thanks for the message!' );

	Flight::render(
		'contact-thanks.php',
		array(
			'title' => 'Contact Us',
			'request' => Flight::request(),
		)
	);

} );


/**
 * Support
 */
Flight::route( '/documentation/(@type)(/@page)/', function( $type = '', $page = '' ) {

	$view = 'documentation.php';
	$layout = '';

	SiteTemplate::add_breadcrumb( 'Support', 'documentation/' );

	if ( $type == '' && $page == '' ) {
		$layout = '_support/index.php';
	}

	if ( documentation_type_exists( $type ) ) {

		$layout = '_support/archive.php';

		SiteTemplate::add_breadcrumb( documentation_type_name( $type ), 'documentation/' . $type . '/' );
		SiteTemplate::title( sprintf( '%s Help - Pro Theme Design', documentation_type_name( $type ) ) );

		if ( documentation_page_exists( $page ) ) {

			$layout = '_support/type-' . $type . '.php';

			SiteTemplate::add_breadcrumb( documentation_page_name( $page ), 'documentation/' . $type . '/' . $page . '/' );
			SiteTemplate::title( sprintf( '%s Help - Pro Theme Design', documentation_page_name( $page ) ) );

		} else {

			if ( ! empty( $page ) ) {
				$page = '';
				$layout = '';
			}

		}

	} else {

		// reset just in case
		$type = '';
		$page = '';

	}

	if ( empty( $layout ) ) {
		$view = '404.php';
	}

	Flight::render(
		$view,
		array(
			'title' => 'Theme Documentation',
			'request' => Flight::request(),
			'layout' => $layout,
			'type' => $type,
			'page' => $page,
		)
	);

} );


/**
 * theme preview
 */
Flight::route( '/theme-preview/(@theme)/', function( $theme = '' ) {

	SiteTemplate::title( 'Theme Preview' );
	$template = 'theme-preview.php';

	if ( ! themes_exist( $theme ) ) {
		$template = '404.php';
	}

	Flight::render(
		$template,
		array(
			'request' => Flight::request(),
			'theme' => $theme,
		)
	);

} );


/**
 * 404
 */
Flight::map( 'notFound', function() {

	SiteTemplate::title( '404 - not found :(' );

	Flight::render(
		'404.php',
		array(
			'request' => Flight::request(),
		)
	);

} );
