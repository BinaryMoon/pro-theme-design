<?php

/**
 * TODO
 *
 * Swap css over to less
 * Add the option for free themes on wordpress.org
 * Add support contact form (as part of theme docs)
 * make 'buy now' text consistent
 */


/**
 * DOCUMENTATION IMPROVEMENTS
 *
 * installing child themes
 * add installation procedure to theme docs
 * plugin installation
 * theme updates
 * info about custom widgets for mimbo pro
 * link to tutorials on general wordpress usage
 * documentation about customizer
 * info about customizer settings as needed
 * screenshots for features
 * screenshots showing front page setup
 * web hosting with aff links?
 * add browser and server requirements doc
 *
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
define( 'DECACHE_CSS', '9' );
define( 'DECACHE_JS', '5' );
define( 'ENV', $environment );


// include needed stuff
include_once( 'library/data.php' );
include_once( 'library/functions.php' );
include_once( 'library/template.php' );
include_once( 'flight/Flight.php' );
include_once( 'library/routes.php' );

Flight::start();
