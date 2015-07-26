<?php


function css_path( $path = '' ) {

    return path( 'css/' . $path . '?d=' . DECACHE_CSS );

}


function image_path( $path = '' ) {

    return path( 'img/' . $path );

}


function js_path( $path = '' ) {

    return path( 'js/' . $path . '?d=' . DECACHE_JS );

}


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
