<?php

/**
 * List of redirects in old url -> new url pairs
 */
function get_redirects() {

    /**
    - /themes/nominate-for-wordpress/ - 114
    - /themes/elemental/ - 57
    - /themes/accumulo/ - 23
    - /themes/thelocal/ - 23
    */

    $redirects = array(
        '/themes/mimbo/' => '/theme/mimbopro/',
        '/themes/mimbo-pro/' => '/theme/mimbopro/',
        '/themes/opti-wordpress-theme/' => '/theme/opti/',
        '/support/' => '/documentation/',
        '/circular-icons/' => '/tools/circular-icons/',
        '/free-webdesign-tools/circular-icons/' => '/tools/circular-icons/',
        '/free-webdesign-tools/circular-icons' => '/tools/circular-icons/',
        '/themes/' => '/',
        '/products/' => '/',
        '/how-to/free-stock-photos-images/' => '/tools/free-stock-photos/',
    );

    return $redirects;

}


/**
 * Get the destination for a redirect slug
 */
function redirect_destination( $slug = '' ) {

    $redirects = get_redirects();

    if ( ! empty( $redirects[ $slug ] ) ) {
        return $redirects[ $slug ];
    }

    return false;

}
