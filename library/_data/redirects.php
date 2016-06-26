<?php

/**
 * List of redirects in old url -> new url pairs
 * @return array A list of all redirects in old url, new url pairs
 */
function get_redirects() {

    /**
    - /themes/nominate-for-wordpress/ - 114
    - /themes/elemental/ - 57
    - /themes/accumulo/ - 23
    - /themes/thelocal/ - 23
    */

    $redirects = array(
        'themes/mimbo' => '/theme/mimbopro/',
        'themes/mimbo-pro' => '/theme/mimbopro/',
        'themes/opti-wordpress-theme' => '/theme/opti/',
        'support/' => '/documentation/',
        'circular-icons' => '/tools/circular-icons/',
        'free-webdesign-tools/circular-icons' => '/tools/circular-icons/',
        'theme' => '/',
        'how-to' => '/articles/',
        'products' => '/',
        'how-to/free-stock-photos-images' => '/tools/free-stock-photos/',
        'plugins' => '/wordpress-plugins/',
        'how-to/why-you-should-keep-wordpress-and-your-plugins-up-to-date' => '/documentation/general/keeping-website-up-to-date/',
        'tools/circular-icons-pro' => '/tools/circular-icons/',
        'how-to/5-ways-wordpress-can-make-you-rich' => '/how-to/make-money-with-wordpress/',
        'support/opti-help' => '/documentation/theme/opti/',
        'how-to/why-you-should-keep-wordpress-and-your-plugins-up-to-date' => '/documentation/general/keeping-website-up-to-date/',
        //'how-to/mastering-the-psychology-of-colour-theory-in-web-design' => 'beautiful-wordpress-designs',
        //'' => '',
    );

    return $redirects;

}


/**
 * Get the destination for a redirect slug
 * @param  string         [$slug       = ''] Redirect url slug to look for
 * @return boolean|string Redirect url or false if no redirect available
 */
function redirect_destination( $slug = '' ) {

    $redirects = get_redirects();

    // allow the redirects to work with or without slashes
    $slug = ltrim( $slug, '/' );
    $slug = rtrim( $slug, '/' );

    if ( ! empty( $redirects[ $slug ] ) ) {
        return $redirects[ $slug ];
    }

    return false;

}
