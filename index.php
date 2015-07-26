<?php

/**
 * TODO
 *
 * Swap css over to less
 * Add the option for free themes on wordpress.org
 * Add plugins page
 * Add theme Documentation
 * Add tag descriptions on showcase page
 */

/**
 * FlightPHP - http://flightphp.com/
 * FlightPHP on Github - https://github.com/mikecao/flight
 */

// enable debug on localhost
if ( 'localhost' == $_SERVER[ 'HTTP_HOST' ] ) {
    error_reporting( -1 );
    ini_set( 'display_errors', 'On' );
}

// constants
define( 'DECACHE_CSS', '1' );
define( 'DECACHE_JS', '2' );


// include needed stuff
include_once( 'library/data.php' );
include_once( 'library/functions.php' );
include_once( 'flight/Flight.php' );


/**
 * Homepage
 */
Flight::route( '/', function() {

    Flight::render(
        'home.php',
        array(
            'title' => 'Pro Theme Design - WordPress Themes',
            'relative_path' => '',
            'request' => Flight::request(),
            'base_url' => get_base(),
        )
    );

} );


/**
 * Theme Club
 */
Flight::route( '/theme-club/', function() {

    Flight::render(
        'theme-club.php',
        array(
            'title' => 'WordPress Themes Club',
            'request' => Flight::request(),
            'base_url' => get_base(),
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

    } else {

        $view = '404.php';

    }

    Flight::render(
        $view,
        array(
            'title' => $title,
            'request' => Flight::request(),
            'base_url' => get_base(),
            'websites' => $websites,
            'tag' => $tag
        )
    );

} );


/**
 * Terms and Conditions
 */
Flight::route( '/policies/', function() {

    Flight::render(
        'terms-and-conditions.php',
        array(
            'title' => 'Terms and Conditions',
            'request' => Flight::request(),
            'base_url' => get_base(),
        )
    );

} );


/**
 * WordPress Plugins
 */
Flight::route( '/wordpress-plugins/', function() {

    Flight::render(
        'plugins.php',
        array(
            'title' => 'WordPress Plugins',
            'request' => Flight::request(),
            'base_url' => get_base(),
        )
    );

} );


/**
 * 404
 */
Flight::map( 'notFound', function() {

    Flight::render(
        '404.php',
        array(
            'title' => '404 Not Found',
            'request' => Flight::request(),
            'base_url' => get_base(),
        )
    );

} );


Flight::start();
