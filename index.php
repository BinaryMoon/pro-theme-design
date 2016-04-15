<?php

/**
 * TODO
 *
 * consider moving theme buy now popup to bottom of page
 * new logo
 * favicon.ico
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
 *
 * SITE ARTICLES
 *
 * creating a child theme
 * simple customisations that can drastically change how a theme looks
 * adding plugins - including so clients can’t change them
 * customising site and admin branding
 * uploading a new logo
 * analytics
 * simple css for XXX
 * creating a style guide & brand guidelines
 * The importance of brand guidelines when building a site for a client
 * setting up a newsletter
 * git and svn for implementors
 * charging clients
 * value based pricing
 * additional ways to increase your income
 * backing up a WordPress website
 * adding dynamic forms to a WordPress site
 * things to look for in a WordPress themes for WordPress implementors
 * setting user roles for client websites
 * buying web products for clients
 * adding additional value so you can increase your fees
 * standardising your process to increase efficiency
 * the X types of WordPress user
 * what is a wordpress implementors
 * should I host a clients website?
 * Should you use wordpress.com or wordpress.org?
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
define( 'DECACHE_CSS', '56' );
define( 'DECACHE_JS', '19' );
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
