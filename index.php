<?php

/**
 * TODO
 *
 * Swap css over to less
 * Add the option for free themes on wordpress.org
 * Add theme Documentation
 * Add tag descriptions on showcase page
 * Add method for users to submit showcase sites
 * Add support contact form (as part of theme docs)
 */

/**
 * FlightPHP - http://flightphp.com/
 * FlightPHP on Github - https://github.com/mikecao/flight
 */

$environment = 'prod';

// enable debug on localhost
if ( 'localhost' == $_SERVER[ 'HTTP_HOST' ] ) {
    error_reporting( -1 );
    ini_set( 'display_errors', 'On' );
    $environment = 'dev';
}

// constants
define( 'DECACHE_CSS', '3' );
define( 'DECACHE_JS', '4' );
define( 'ENV', $environment );


// include needed stuff
include_once( 'library/data.php' );
include_once( 'library/functions.php' );
include_once( 'library/template.php' );
include_once( 'flight/Flight.php' );


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
Flight::route( '/theme-showcase/(@tag)', function( $tag = '' ) {

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
 * 404
 */
Flight::map( 'notFound', function() {

    SiteTemplate::title( '404 - not found :(' );

    Flight::render(
        '404.php',
        array(
            'request' => Flight::request(),
            'base_url' => get_base(),
        )
    );

} );


Flight::start();
