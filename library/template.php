<?php

/**
 * Set or display the site description
 *
 * @param string  [$new_description       = ''] If set changes the site description, if empty outputs it
 * @param boolean [$strip_tags            = false] True strips html tags on output, false leaves them intact
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
 * Add a script to the sites footer
 * If no script set then display the scripts instead
 *
 * @param string  [$path  = '']    Path to the javascript file to load
 * @param boolean [$async = false] Whether or not to set the script to load asynchronously
 */
function site_script( $path = '', $async = false ) {

    $scripts = Flight::get( 'site.scripts' );

    if ( ! empty( $path ) ) {

        $scripts[] = array(
            'path' => $path,
            'async' => $async,
        );

        Flight::set( 'site.scripts', $scripts );

    } else {

        if ( $scripts ) {
            foreach( $scripts as $script ) {
                $async = '';
                if ( $script['async'] ) {
                    $async = ' async';
                }
?>
        <script src="<?php echo $script['path']; ?>"<?php echo $async; ?>></script>
<?php
            }
        }
    }

}


/**
 * Set or display the site title
 *
 * @param string [$new_title       = ''] If set changes the title, if empty the site title is output
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
 * Display site breadcrumbs
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


// Set Defaults for description and title

// default site description
site_description( 'Partnering with <a href="http://theme.wordpress.com/themes/by/pro-theme-design/" target="_blank">WordPress.com</a> to build themes for thousands of creative bloggers.' );

// default site title
site_title( 'Pro Theme Design - WordPress Themes and Plugins' );

// default site scripts
if ( ! DISABLE_THEME_CLUB ) {
    site_script( 'https://gumroad.com/js/gumroad.js', true );
}
site_script( js_path( 'main.min.js' ) );
