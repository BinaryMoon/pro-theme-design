<?php

/**
 * List of redirects in old url -> new url pairs
 */
function get_redirects() {

    /**
    - /circular-icons/ - 170
    - /free-webdesign-tools/circular-icons/ - 146
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
