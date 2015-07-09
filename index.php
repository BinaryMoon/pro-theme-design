<?php

/**
 * TODO
 *
 * Swap css over to less
 * Add the option for free themes on wordpress.org
 * Add plugins page
 * Add Documentation
 */

include_once( 'library/data.php' );

require 'flight/Flight.php';

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

Flight::route( '/theme-showcase/', function() {
    Flight::render(
        'showcase.php',
        array(
            'title' => 'WordPress Themes Showcase',
            'request' => Flight::request(),
            'base_url' => get_base(),
        )
    );
} );

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


/**
 * Get the base directory for the site
 * by default the Flight request object returns a / for site root and no / for directories - so this keeps things consistent
 */
function get_base() {
    $request = Flight::request();
    return rtrim( $request->base, '/' );
}

Flight::start();
