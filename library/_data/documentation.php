<?php

/**
 *
 */
function get_documentation_data() {

    $docs = array(

        // general docs

        'transfer-from-wordpress-com' => array(
            'name' => 'WordPress.com theme Transfer',
            'type' => 'general',
        ),
        'theme-installation' => array(
            'name' => 'Theme Installation',
            'type' => 'general',
        ),
        'theme-customization' => array(
            'name' => 'Theme Customization',
            'type' => 'general',
        ),
        'localization' => array(
            'name' => 'Localization',
            'type' => 'general',
        ),
        'wordpress-com-vs-wordpress-org' => array(
            'name' => 'The difference between WordPress.com and WordPress.org',
            'type' => 'general',
        ),
        'affiliates' => array(
            'name' => 'Affiliates',
            'type' => 'general',
        ),


        // features

        'custom-colours-fonts' => array(
            'name' => 'Custom Colours and Fonts',
            'type' => 'feature',
            'requires' => 'styleguide',
        ),
        'custom-css' => array(
            'name' => 'Custom CSS',
            'type' => 'feature',
            'requires' => 'jetpack',
        ),
        'custom-page-templates' => array(
            'name' => 'Custom Page Templates',
            'type' => 'feature',
        ),
        'custom-front-page' => array(
            'name' => 'Custom Front Page',
            'type' => 'feature',
        ),
        'featured-content' => array(
            'name' => 'Featured Content',
            'type' => 'feature',
            'requires' => 'jetpack',
        ),
        'site-logo' => array(
            'name' => 'Site Logo',
            'type' => 'feature',
            'requires' => 'jetpack',
        ),
        'featured-image' => array(
            'name' => 'Featured Images',
            'type' => 'feature',
        ),
        'infinite-scroll' => array(
            'name' => 'Infinite Scroll',
            'type' => 'feature',
            'requires' => 'jetpack',
        ),
        'portfolio' => array(
            'name' => 'Portfolio and Projects',
            'type' => 'feature',
            'requires' => 'jetpack',
        ),
        'social-menu' => array(
            'name' => 'Social Menu',
            'type' => 'feature',
        ),
        'sticky-post' => array(
            'name' => 'Sticky Posts',
            'type' => 'feature',
        ),
        'testimonials' => array(
            'name' => 'Testimonials',
            'type' => 'feature',
            'requires' => 'jetpack',
        ),

    );

    // merge in the themes
    $themes = get_theme_data();

    foreach( $themes as $key => $theme ) {

        $theme[ 'type' ] = 'theme';

        $docs[ $key ] = $theme;

    }

    // merge in plugins
    $plugins = get_plugin_data();

    foreach( $plugins as $key => $plugin ) {

        $plugin[ 'type' ] = 'plugin';

        $docs[ $key ] = $plugin;

    }

    // process theme
    $processed = array();

    foreach( $docs as $key => $doc ) {
        $doc[ 'path' ] = path( 'documentation/' . $doc[ 'type' ] . '/' . $key . '/' );
        $processed[ $key ] = $doc;
    }

    return $processed;

}


/**
 * Create an unordered list showing the available docs
 */
function documentation_list( $type = '', $limit = 5 ) {

    $docs = get_documentation_data();

    $doc_list = array();

    foreach( $docs as $d ) {
        if ( $type == $d[ 'type' ] ) {
            $doc_list[] = $d;
        }
    }

    // reduce list to first '$limit' items
    $doc_list = array_slice( $doc_list, 0, $limit );

    foreach( $doc_list as $d ) {
?>
    <li><a href="<?php echo $d[ 'path' ]; ?>"><?php echo $d[ 'name' ]; ?></a></li>
<?php
    }

}


/**
 * does the current documentation type exist?
 */
function documentation_type_exists( $type ) {

    return in_array(
        $type,
        array( 'theme', 'general', 'plugin', 'feature' )
    );

}


/**
 *
 */
function documentation_page_exists( $page ) {

    $docs = get_documentation_data();

    foreach( $docs as $key => $value ) {
        if ( $page == $key ) {
            return true;
            break;
        }
    }

    return false;

}


/**
 *
 */
function documentation_get( $page ) {

    $docs = get_documentation_data();

    foreach( $docs as $key => $value ) {
        if ( $page == $key ) {
            return $value;
            break;
        }
    }

    return false;

}


/**
 * get the name of the specified page
 */
function documentation_page_name( $page ) {

    $docs = get_documentation_data();

    if ( ! empty( $docs[ $page ] ) ) {
        return $docs[ $page ][ 'name' ];
    }

    return '';

}


/**
 * get the name of the specified doc type
 */
function documentation_type_name( $type ) {

    $types = array(
        'general' => 'General',
        'theme' => 'Themes',
        'feature' => 'Features',
        'plugin' => 'Plugins',
    );

    if ( ! empty( $types[ $type ] ) ) {
        return $types[ $type ];
    }

    return '';

}


/**
 *
 */
function documentation_required_plugin( $page ) {

    $docs = get_documentation_data();

    if ( ! empty( $docs[ $page ][ 'requires' ] ) && ! empty( $docs[ $docs[ $page ][ 'requires' ] ] ) ) {
        $plugin_url = $docs[ $docs[ $page ][ 'requires' ] ][ 'path' ];
        $plugin_name = $docs[ $docs[ $page ][ 'requires' ] ][ 'name' ];
?>
    <p class="notice"><?php printf( '<strong>%s</strong> require the <a href="%s">%s plugin</a>.', $docs[ $page ][ 'name' ], $plugin_url, $plugin_name ); ?></p>
<?php
    }

    return '';

}


function documentation_supported_themes( $page ) {

    $docs = get_documentation_data();

    foreach( $docs as $doc ) {
        if ( ! empty( $doc[ 'supports' ] ) ) {
            if ( in_array( $page, $doc[ 'supports' ] ) ) {
?>
    <a href="<?php echo $doc[ 'path' ]; ?>"><?php echo $doc[ 'name' ]; ?></a>
<?php
            }
        }
    }

}
