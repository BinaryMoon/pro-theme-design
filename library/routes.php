<?php

/**
 * Homepage
 */
Flight::route( '/', function() {

    site_description( 'Designing <strong>Professional WordPress Themes</strong> since 2007.' );
    site_title( 'Pro Theme Design - Professional WordPress Themes' );

    Flight::render(
        'home.php'
    );

} );


/**
 * Tools Pages
 */
Flight::route( '/tools/(@tool)/', function( $tool = '' ) {

    $view = 'tools.php';
    $layout = 'index.php';
    $tool_data = array();

    site_title( 'Pro Theme Design Handy Tools' );
    site_description( 'Handy Tools to <strong>Make a Web Designers Job Easier</strong>.' );
    site_breadcrumb_add( 'Tools', 'tools/' );


    if ( ! empty( $tool ) ) {
        if ( $tool_data = tool_get( $tool ) ) {

            site_title( $tool_data['name'] . ' - Pro Theme Design' );
            site_description( $tool_data['description'] );

            site_breadcrumb_add( $tool_data['name'], 'tools/' . $tool . '/' );

            $layout = '_' . $tool . '/index.php';

            if ( isset( $tool_data['view'] ) ) {
                $view = $tool_data['view'];
            }

            if ( ! empty( $tool_data['script'] ) ) {
                site_script( $tool_data['script'] );
            }

        } else {

            Flight::notFound();

        }
    }

    Flight::render(
        $view,
        array(
            'tool' => $tool_data,
            'layout' => $layout,
        )
    );

} );


/**
 * Theme Club
 */
Flight::route( '/theme-club/', function() {

    // this number isn't strictly accurate - but it's pretty close
    $customers = date( 'U' ) / 12345;
    $customers = number_format( $customers );

    site_title( 'WordPress Themes Club' );
    site_description( 'Join over <strong>' . $customers . '</strong> happy themers.' );

    Flight::render(
        'theme-club.php'
    );

} );


/**
 * Theme
 */
Flight::route( '/theme/(@theme)/', function( $theme = '' ) {

    $theme_data = array();
    $themes = array();

    if ( ! empty( $theme ) && $theme_data = themes_get( $theme ) ) {

        $themes = get_theme_data();
        site_title( $theme_data[ 'name' ] . ' WordPress Theme' );

    } else {

        Flight::notFound();

    }

    Flight::render(
        'theme.php',
        array(
            'theme' => $theme_data,
            'theme_name' => $theme,
            'themes' => $themes,
        )
    );

} );


/**
 * Theme Showcase
 */
Flight::route( '/theme-showcase/(@tag)/', function( $tag = '' ) {

    $title = 'WordPress Themes Showcase';
    $websites = array();

    if ( website_tag_exists( $tag ) ) {

        $websites = website_get_by_tag( $tag );

        if ( ! empty( $tag ) ) {
            $title = sprintf( '%s Themes: WordPress Themes Showcase', ucwords( $tag ) );
        }

    } else {

        Flight::notFound();

    }

    site_title( $title );
    site_description( 'A selection of the <strong>thousands of awesome sites</strong> our customers have built!' );

    Flight::render(
        'showcase.php',
        array(
            'websites' => $websites,
            'tag' => $tag
        )
    );

} );


/**
 * Terms and Conditions
 */
Flight::route( '/policies/', function() {

    site_title( 'Terms and Conditions' );

    Flight::render(
        'terms-and-conditions.php'
    );

} );


/**
 * WordPress Plugins
 */
Flight::route( '/wordpress-plugins/', function() {

    site_title( 'Recommended WordPress Plugins' );
    site_description( 'Plugins for creating the perfect WordPress site.' );

    Flight::render(
        'plugins.php'
    );

} );


/**
 * Sitemap
 */
Flight::route( '/sitemap/', function() {

    site_title( 'Sitemap' );
    site_description( 'Find your way around.' );

    Flight::render(
        'sitemap.php'
    );

} );


/**
 * Contact
 */
Flight::route( '/contact/', function() {

    site_title( 'Contact Us' );
    site_description( 'Get in touch.' );

    Flight::render(
        'contact.php'
    );

} );


/**
 * Newsletter
 */
Flight::route( '/newsletter/', function() {

    site_title( 'Newsletter' );
    site_description( '<strong>Join the Newsletter.</strong> Keep up to date.' );

    Flight::render(
        'newsletter.php'
    );

} );


/**
 * Search
 */
Flight::route( '/search/', function() {

    site_title( 'Search' );

    Flight::render(
        'search.php'
    );

} );


/**
 * Theme Customization
 */
Flight::route( '/theme-customization/', function() {

    site_title( 'WordPress Theme Customization' );
    site_description( 'Customize your theme with <strong>Codeable.io</strong>.' );

    Flight::render(
        'theme-customizer.php'
    );

} );


/**
 * Contact Thanks
 */
Flight::route( '/contact/thanks/', function() {

    site_title( 'Thank You' );
    site_description( 'Thanks for the message!' );

    Flight::render(
        'contact-thanks.php',
        array(
            'title' => 'Contact Us',
        )
    );

} );


/**
 * Support
 */
Flight::route( '/documentation/(@type)(/@page)/', function( $type = '', $page = '' ) {

    $layout = '';

    site_breadcrumb_add( 'Support', 'documentation/' );

    if ( $type == '' && $page == '' ) {
        $layout = '_support/index.php';
    }

    if ( documentation_type_exists( $type ) ) {

        $layout = '_support/archive.php';

        site_breadcrumb_add( documentation_type_name( $type ), 'documentation/' . $type . '/' );
        site_title( sprintf( '%s Help - Pro Theme Design', documentation_type_name( $type ) ) );

        if ( documentation_page_exists( $page ) ) {

            $layout = '_support/type-' . $type . '.php';

            site_breadcrumb_add( documentation_page_name( $page ), 'documentation/' . $type . '/' . $page . '/' );
            site_title( sprintf( '%s Help', documentation_page_name( $page ) ) );

        } else {

            if ( ! empty( $page ) ) {
                $page = '';
                $layout = '';
            }

        }

    } else {

        // reset just in case
        $type = '';
        $page = '';

    }

    if ( empty( $layout ) ) {

        Flight::notFound();

    }

    Flight::render(
        'documentation.php',
        array(
            'title' => 'Theme Documentation',
            'layout' => $layout,
            'type' => $type,
            'page' => $page,
        )
    );

} );


/**
 * theme preview
 */
Flight::route( '/theme-preview/(@theme)/', function( $theme_slug = '' ) {

    $template = 'theme-preview.php';
    $theme = array();

    if ( ! $theme = themes_get( $theme_slug ) ) {

        Flight::notFound();

    }

    site_title( $theme[ 'name' ] . ' Theme Preview' );

    Flight::render(
        $template,
        array(
            'theme_slug' => $theme_slug,
            'theme' => $theme,
        )
    );

} );


/**
 * theme preview
 */
Flight::route( '/showcase-preview/(@site)/', function( $site = '' ) {

    site_title( 'WordPress Theme Preview' );
    $template = 'showcase-preview.php';

    if ( ! website_exists( $site ) ) {

        Flight::notFound();

    }

    Flight::render(
        $template,
        array(
            'site' => $site,
        )
    );

} );


/**
 * 404
 */
Flight::map( 'notFound', function() {

    site_title( '404 - not found :(' );

    $request = Flight::request();

    // see if there's a valid permanent redirect, and if there is send the user to the new location
    if ( $redirect_url = redirect_destination( $request->url ) ) {

        Flight::redirect( $redirect_url, 301 );
        die();

    }

    header( 'HTTP/1.0 404 Not Found' );

    Flight::render(
        '404.php'
    );

    die();

} );
