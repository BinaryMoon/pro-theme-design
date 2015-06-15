<?php

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
            'title' => 'Pro Theme Design WordPress Themes Club',
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

function get_base() {
    $request = Flight::request();
    return rtrim( $request->base, '/' );
}

Flight::start();
