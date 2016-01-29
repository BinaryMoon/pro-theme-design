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

        } else {

            Flight::notFound();

        }

    }

    Flight::render(
        $view,
        array(
            'tool' => $tool_data,
            'layout' => $layout,
            'slug' => $tool,
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

    site_enable_gumroad();

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
        site_description( $theme_data[ 'short_description' ] );

    } else {

        Flight::notFound();

    }

    site_popover( true );

    site_meta( 'twitter:card', 'product' );
    site_meta( 'og:type', 'product' );

    site_meta_image( image_path( 'devices/' . $theme_data['image'] ) );

    if ( ! empty( $theme_data[ 'url-wporg' ] ) ) {
        site_meta( 'og:price:amount', str_replace( '$', '', $theme_data[ 'price-wporg' ] ) );
        site_meta( 'og:price:currency', 'USD' );
        site_meta( 'twitter:data1', $theme_data[ 'price-wporg' ] );
        site_meta( 'twitter:label1', 'Price' );
    }

    site_enable_gumroad();

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
 * Themes
 */
Flight::route( '/themes/(@location)/', function( $host = '' ) {

    $themes = themes_by_host( $host );

    if ( ! $themes ) {

        Flight::notFound();

    }

    site_title( 'WordPress Themes for ' . $host );
    site_description( 'Awesome WordPress themes for <strong>self hosted sites</strong>!' );

    if ( 'wordpress.com' === $host ) {
        site_description( 'Quality WordPress themes for <strong>WordPress in the cloud</strong>!' );
    }

    site_enable_gumroad();

    Flight::render(
        'themes.php',
        array(
            'themes' => $themes,
            'host' => $host,
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

    site_enable_gumroad();

    Flight::render(
        'showcase.php',
        array(
            'websites' => $websites,
            'tag' => $tag
        )
    );

} );


/**
 * Feedback
 */
Flight::route( '/feedback/(@type)/', function( $type = '' ) {

    site_title( 'Feedback' );

    if ( empty( $type ) ) {
        $type = 'default';
    }

    $file = site_view_path( '_feedback/' . $type . '.html' );

    if ( ! file_exists( $file ) ) {
        Flight::notFound();
    }

    Flight::render(
        'feedback.php',
        array(
            'questions' => $file,
        )
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
 * Articles Archive
 */
Flight::route( '/articles/(@page_number)/', function( $page_number = 0 ) {

    site_title( 'Articles' );

    Flight::render(
        'articles.php',
        array(
            'articles' => get_article_data()
        )
    );

} );


/**
 * Single Article Page
 */
Flight::route( '/article/(@page)/', function( $page = '' ) {

    $article = array();

    site_breadcrumb_add( 'Articles', 'articles/' );

    if ( $article = article_get( $page ) ) {

        site_breadcrumb_add( $article[ 'name' ], 'article/' . $page . '/' );

        site_title( $article[ 'name' ] );

        if ( ! empty( $article[ 'description' ] ) ) {

            site_description( $article['description'] );

        }

    } else {

        Flight::notFound();

    }

    Flight::render(
        'article.php',
        array(
            'article' => $article,
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

    site_popover( true );

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

    site_enable_gumroad();

    Flight::render(
        $template,
        array(
            'theme_slug' => $theme_slug,
            'theme' => $theme,
        )
    );

} );


/**
 * website demos
 */
Flight::route( '/showcase-preview/(@site)/', function( $site = '' ) {

    site_title( 'WordPress Theme Preview' );
    $template = 'showcase-preview.php';

    if ( ! website_exists( $site ) ) {

        Flight::notFound();

    }

    site_enable_gumroad();

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

    // see if a page exists
    if ( $page_info = page_exists( $request->url ) ) {

        site_title( $page_info[ 'title' ] );
        if ( null !== $page_info[ 'description' ] ) {
            site_description( $page_info[ 'description' ] );
        }

        Flight::render(
            $page_info[ 'view' ]
        );

        die();

    }

    // see if there's a valid permanent redirect, and if there is send the user to the new location
    if ( $redirect_url = redirect_destination( $request->url ) ) {

        Flight::redirect( $redirect_url, 301 );
        die();

    }

    header( 'HTTP/1.0 404 Not Found' );

    site_header_title( '404 :(' );
    site_description( '<a href="' . path() . '">Visit the homepage <i class="fa fa-arrow-right"></i></a>' );

    Flight::render(
        '404.php'
    );

    die();

} );
