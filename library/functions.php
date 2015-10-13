<?php


/**
 * Return the css path for the specified file
 */
function css_path( $path = '' ) {

    return path( 'styles/' . $path . '?d=' . DECACHE_CSS );

}


/**
 * Return the image path for the specified file
 */
function image_path( $path = '' ) {

    return path( 'img/' . $path );

}


/**
 * Return the javascript path for the specified file
 */
function js_path( $path = '' ) {

    return path( 'js/' . $path . '?d=' . DECACHE_JS );

}


/**
 * A reusable helper that generates the path with the correct parent location
 */
function path( $path = '' ) {

    return get_base() . '/' . $path;

}


/**
 * Get the base directory for the site
 * by default the Flight request object returns a / for site root and no / for directories - so this keeps things consistent
 */
function get_base() {

    $request = Flight::request();
    return rtrim( $request->base, '/' );

}


/**
 * Generate a twitter share link
 */
function twitter_share_link( $message = '' ) {

    $args = array(
        'text' => urlencode( $message ),
        'url' => '',
        'related' => 'prothemedesign',
    );

    $link = 'http://twitter.com/intent/tweet?';

    foreach( $args as $k => $v ) {
        $link .= '&amp;' . $k . '=' . $v;
    }

    echo $link;

}


/**
 * Return the screenshot url for a website
 */
function site_screenshot( $url ) {

    return 'https://s0.wordpress.com/mshots/v1/' . urlencode( $url ) . '?w=400&h=300';

}


/**
 * Include a view
 */
function site_include_view( $path ) {

    $path = site_view_path( $path );

    include( $path );

}


/**
 * Get a path relative to the view directory
 */
function site_view_path( $path ) {

    return Flight::get( 'flight.views.path' ) . $path;

}
