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
        'child-theme-installation' => array(
            'name' => 'Child Theme Installation',
            'type' => 'general',
        ),
        'refunds' => array(
            'name' => 'Refunds',
            'type' => 'general',
        ),
        'theme-customization' => array(
            'name' => 'Theme Customization',
            'type' => 'general',
            'description' => 'Some basic information on how to customize your theme purchase',
        ),
        'localization' => array(
            'name' => 'Localization',
            'type' => 'general',
            'description' => 'All about theme translations.',
        ),
        'wordpress-com-vs-wordpress-org' => array(
            'name' => 'The difference between WordPress.com and WordPress.org',
            'type' => 'general',
        ),
        'affiliates' => array(
            'name' => 'Affiliates',
            'type' => 'general',
        ),
        'theme-updates' => array(
            'name' => 'Theme Updates',
            'type' => 'general',
        ),


        // features

        'featured-content' => array(
            'name' => 'Featured Content',
            'type' => 'feature',
            'requires' => 'jetpack',
            'description' => 'Select your best content to appear in a Slider or other special area on the homepage.',
            'related' => array( 'customizer' ),
            'icon' => 'thumb-tack',
        ),
        'custom-page-templates' => array(
            'name' => 'Custom Page Templates',
            'type' => 'feature',
            'description' => 'Different page layouts for static WordPress pages.',
            'related' => array( 'custom-front-page' ),
        ),
        'site-logo' => array(
            'name' => 'Site Logo',
            'type' => 'feature',
            'requires' => 'jetpack',
            'description' => 'Add a logo to make your site your own.',
            'related' => array( 'customizer' ),
        ),
        'custom-colours-fonts' => array(
            'name' => 'Custom Colours and Fonts',
            'type' => 'feature',
            'requires' => 'styleguide',
            'description' => 'Tweak the fonts and colours on your site without touching any code.',
            'related' => array( 'custom-css', 'customizer', ),
            'icon' => 'paint-brush',
        ),
        'featured-image' => array(
            'name' => 'Featured Images',
            'type' => 'feature',
            'description' => 'Image thumbnails for your blog posts and pages.',
            'related' => array( 'image-resizing' ),
            'icon' => 'camera',
        ),
        'custom-css' => array(
            'name' => 'Custom CSS',
            'type' => 'feature',
            'requires' => 'jetpack',
            'description' => 'Edit the CSS on your website.',
            'related' => array( 'custom-colours-fonts', 'customizer', ),
            'icon' => 'css3',
        ),
        'custom-front-page' => array(
            'name' => 'Custom Front Page',
            'type' => 'feature',
            'description' => 'Change the design of your front page to make it exactly as you want.',
            'related' => array( 'custom-page-templates', 'customizer' ),
            'icon' => 'home',
        ),
        'image-resizing' => array(
            'name' => 'Image Resizing (Photon)',
            'type' => 'feature',
            'requires' => 'jetpack',
            'description' => 'Resizes all of your images to fit the thumbnails used.',
            'related' => array( 'featured-image' ),
            'icon' => 'picture-o',
        ),
        'contact-form' => array(
            'name' => 'Contact Form',
            'type' => 'feature',
            'requires' => 'jetpack',
            'description' => 'Add a simple contact form to your website or blog.',
            'icon' => 'envelope-o',
        ),
        'infinite-scroll' => array(
            'name' => 'Infinite Scroll',
            'type' => 'feature',
            'requires' => 'jetpack',
            'description' => 'Continuosly loading content to encourage your readers to stick around.',
            'icon' => 'arrow-down',
        ),
        'portfolio' => array(
            'name' => 'Portfolio and Projects',
            'type' => 'feature',
            'requires' => 'jetpack',
            'description' => 'Show off your Portfolio of work.',
            'related' => array( 'testimonials' ),
            'icon' => 'folder-open',
        ),
        'social-menu' => array(
            'name' => 'Social Menu',
            'type' => 'feature',
            'description' => 'Display links to your social media channels.',
            'icon' => 'share-alt',
        ),
        'sticky-post' => array(
            'name' => 'Sticky Posts',
            'type' => 'feature',
            'description' => 'Stick posts to the top of your blog.',
            'icon' => 'sticky-note',
        ),
        'testimonials' => array(
            'name' => 'Testimonials',
            'type' => 'feature',
            'requires' => 'jetpack',
            'description' => 'Display comments from your users/ customers showing how much your product/ service benefits them.',
            'related' => array( 'portfolio', 'customizer' ),
            'icon' => 'comment',
        ),
        'social-sharing' => array(
            'name' => 'Social Sharing Buttons',
            'type' => 'feature',
            'requires' => 'jetpack',
            'description' => 'Display social buttons that encourage readers to share your content.',
            'icon' => 'share-alt',
        ),
        'related-content' => array(
            'name' => 'Related Content',
            'type' => 'feature',
            'requires' => 'jetpack',
            'description' => 'Display content, related to the current blog post, to give your readers something to look at next.',
            'icon' => 'arrows-h',
        ),
        'customizer' => array(
            'name' => 'Customizer',
            'type' => 'feature',
            'related' => array( 'site-logo', 'testimonials', 'custom-front-page', 'custom-css', 'custom-colours-fonts', ),
            'description' => 'Edit site settings and get a live preview of the changes.',
            'icon' => 'cogs',
        ),
        'widget-visibility' => array(
            'name' => 'Widget Visibility',
            'type' => 'feature',
            'related' => array( 'customizer' ),
            'description' => 'Show and hide widgets on different pages according to rules you set',
            'requires' => 'jetpack',
            'icon' => 'eye-slash',
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

    // process them
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

    if ( $doc_list ) {
        echo '<ul>';
        foreach( $doc_list as $d ) {
?>
    <li><a href="<?php echo $d[ 'path' ]; ?>"><?php echo $d[ 'name' ]; ?></a></li>
<?php
        }
        echo '</ul>';

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
 * Check to see if the specified page exists
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
 * Get the data for the specified page
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
 * Display a message stating what (if any) plugin is required for the current feature to work
 */
function documentation_required_plugin( $page ) {

    $docs = get_documentation_data();

    if ( ! empty( $docs[ $page ][ 'requires' ] ) && ! empty( $docs[ $docs[ $page ][ 'requires' ] ] ) ) {
        $plugin_url = $docs[ $docs[ $page ][ 'requires' ] ][ 'path' ];
        $plugin_name = $docs[ $docs[ $page ][ 'requires' ] ][ 'name' ];
?>
    <p class="notice"><?php printf( '<strong>%s</strong> requires the <a href="%s">%s plugin</a>.', $docs[ $page ][ 'name' ], $plugin_url, $plugin_name ); ?></p>
<?php
    }

    return '';

}


/**
 * Display the list of themes that support the current feature
 */
function documentation_supported_themes( $page ) {

    $docs = get_documentation_data();

    $supported = array();

    foreach( $docs as $doc ) {
        if ( ! empty( $doc[ 'supports' ] ) ) {
            if ( in_array( $page, $doc[ 'supports' ] ) ) {
                $supported[] = sprintf( '<a href="%s">%s</a>', $doc[ 'path' ], $doc[ 'name' ] );
            }
        }
    }

    if ( ! empty( $supported ) ) {
?>
    <p><strong>Supported Themes: <?php echo implode( ', ', $supported ); ?></strong></p>
<?php
    }

}


/**
 * Display the list of features as supported by the current theme
 */
function documentation_theme_features( $theme ) {

    $docs = get_documentation_data();

    if ( ! empty( $theme[ 'supports' ] ) ) {
?>
    <h2>Standard Features</h2>
<?php
        foreach( $theme[ 'supports' ] as $feature ) {
            if ( isset( $docs[ $feature ] ) ) {
                $f = $docs[ $feature ];
?>
    <p><strong><a href="<?php echo $f[ 'path' ]; ?>"><?php echo $f[ 'name' ]; ?></a></strong> - <?php echo $f[ 'description' ]; ?></p>
<?php
            }
        }
    }

}


/**
 * Display the list of features as supported by the current plugin
 */
function documentation_plugin_features( $theme ) {

    $docs = get_documentation_data();

?>
    <h2>Supported Features</h2>
<?php
    foreach( $docs as $doc ) {
        if ( ! empty( $doc[ 'requires' ] ) && $theme == $doc[ 'requires' ] ) {
?>
    <p><strong><a href="<?php echo $doc[ 'path' ]; ?>"><?php echo $doc[ 'name' ]; ?></a></strong> - <?php echo $doc[ 'description' ]; ?></p>
<?php
        }
    }

}


/**
 * link to customization information page
 */
function documentation_customization() {
?>
    <p class="note"><strong>Please note</strong>: Unfortunately we are unable to offer support or help with theme customizations. For more info on Customization services please go to our <a href="<?php echo path( 'theme-customization/' ); ?>">Theme Customization</a> page.</p>
<?php
}


/**
 * Display related content
 */
function documentation_related( $feature ) {

    $docs = get_documentation_data();

    if ( ! empty( $docs[ $feature ][ 'related' ] ) ) {
        $related_docs = $docs[ $feature ][ 'related' ];
?>
        <h3>Related Features</h3>
        <ul>
<?php
        foreach( $related_docs as $related_feature ) {
            if ( isset( $docs[ $related_feature ] ) ) {
?>
            <li>
                <a href="<?php echo $docs[ $related_feature ][ 'path' ]; ?>"><?php echo $docs[ $related_feature ][ 'name' ]; ?></a>
            </li>
<?php
            }
        }
?>
        </ul>
<?php
    }
}
