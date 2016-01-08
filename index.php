<?php

/**
 * TODO
 *
 * add navigation menu to the footer to make things like tools more obvious
 * consider moving theme buy now popup to bottom of page
 * new logo
 * favicon.ico
 * social sharing images (metadata)
 * make the drawer close when the overlay is clicked
 * set up redirects
    - /themes/nominate-for-wordpress/ - 114
    - /themes/elemental/ - 57
    - /themes/accumulo/ - 23
    - /themes/thelocal/ - 23
    - how-to/recommended-plugins/schedule-content-with-automatic-post-scheduler/
 */

/**
 * DOCUMENTATION IMPROVEMENTS
 *
 * info about backups
 * info about seo
 * plugin installation
 * info about custom widgets for mimbo pro
 * documentation about customizer
 * info about customizer settings as needed
 * screenshots for features
 * screenshots showing front page setup
 * web hosting with aff links?
 * post formats
 * custom login design
 * seo (and recommend a plugin or two)
 * separate pages listing wordpress.org and wordpress.com themes
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
define( 'DECACHE_CSS', '41' );
define( 'DECACHE_JS', '14' );
define( 'ENV', $environment );
define( 'GOOGLE_CSE', '010164663960188762731:aajo_mt5e2a' );

define( 'DISABLE_GUMROAD', false );


// include needed stuff
include_once( 'flight/Flight.php' );
include_once( 'library/routes.php' );
include_once( 'library/data.php' );
include_once( 'library/functions.php' );
include_once( 'library/template.php' );


// ensure the production site is running on https and using a canonical domain name (no www)
if ( 'prod' === $environment ) {

    $url = $_SERVER[ 'HTTP_X_FORWARDED_PROTO' ] . '://' . $_SERVER[HTTP_HOST] . $_SERVER[REQUEST_URI];
    $target_url = 'https://' . str_replace( 'www.', '', $_SERVER[HTTP_HOST] ) . $_SERVER[REQUEST_URI];

    if ( $target_url !== $url ) {
        Flight::redirect( $target_url, 301 );
    }

}


// take flight
Flight::start();
