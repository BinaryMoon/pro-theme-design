<?php

/**
 * Set or display the site description
 */
function site_description( $new_description = '', $strip_tags = false ) {

    if ( ! empty( $new_description ) ) {
        Flight::set( 'site.description', $new_description );
    } else {
        if ( $strip_tags ) {
            echo strip_tags( Flight::get( 'site.description' ) );
        } else {
            echo Flight::get( 'site.description' );
        }
    }

}


/**
 * Set or display the site title
 *
 * @param string $new_title If set changes the title, if empty site title is output
 */
function site_title( $new_title = '' ) {

    if ( ! empty( $new_title ) ) {
        Flight::set( 'site.title', $new_title );
    } else {
        echo Flight::get( 'site.title' );
    }

}


/**
 * Add some Breadcrumbs
 *
 * @param string $name What to show on the breadcrumb link
 * @param string $url  Url of the breadcrumb
 */
function site_breadcrumb_add( $name, $url ) {

    $crumbs = Flight::get( 'site.breadcrumbs' );

    $crumbs[] = array(
        'name' => $name,
        'url' => path( $url ),
    );

    Flight::set( 'site.breadcrumbs', $crumbs );

}


/**
 *
 */
function site_breadcrumbs() {

    $crumbs = Flight::get( 'site.breadcrumbs' );

    if ( count( $crumbs ) <= 1 ) {
        return;
    }
?>
    <nav class="breadcrumbs">
<?php
    foreach ( $crumbs as $crumb ) {
?>
        <a href="<?php echo $crumb['url']; ?>"><?php echo $crumb['name']; ?></a>
<?php
    }
?>
    </nav>
<?php

}


// Set Defaults

site_description( 'Partnering with <a href="http://theme.wordpress.com/themes/by/pro-theme-design/" target="_blank">WordPress.com</a> to build themes for thousands of creative bloggers.' );

site_title( 'Pro Theme Design - WordPress Themes and Plugins' );
