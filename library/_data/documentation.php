<?php

/**
 *
 */
function get_documentation_data() {

    $docs = array(

        // general docs

        'localization' => array(
            'name' => 'Localization',
            'type' => 'general',
        ),
        'transfer-from-wordpress-com' => array(
            'name' => 'WordPress.com theme Transfer',
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
        ),

        // plugins
        // can this be merged from the plugins data list?

    );

    // merge in the themes
    $themes = get_theme_data();

    foreach( $themes as $key => $theme ) {

        $theme[ 'related' ] = array(
            'themes' => array(),
            'plugins' => array(),
            'general' => array(),
            'features' => array(),
        );

        $theme[ 'type' ] = 'theme';

        $docs[ $key ] = $theme;

        //var_dump( $docs );

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
