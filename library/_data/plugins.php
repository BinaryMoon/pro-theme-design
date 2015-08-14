<?php

/**
 * List of all the plugins we have built/ support
 */
function get_plugin_data() {

    $plugins = array(
        'styleguide' => array(
            'name' => 'Styleguide',
            'description' => 'Customize fonts and colours in WordPress themes without touching any code.',
            'image' => 'https://ps.w.org/styleguide/assets/banner-772x250.jpg?rev=1065164',
        ),
        'bm-custom-login' => array(
            'name' => 'Custom Login',
            'description' => 'Customise the WordPress login box quickly and easily.',
            'image' => 'https://ps.w.org/bm-custom-login/assets/banner-772x250.png?rev=1135328',
        ),
        'browser-shots' => array(
            'name' => 'Browser Shots',
            'description' => 'Automate the process of taking website screenshots.',
            'image' => 'https://ps.w.org/browser-shots/assets/banner-772x250.png?rev=1067050',
        ),
        'jetpack' => array(
            'name' => 'Jetpack',
            'description' => 'Fully supported by our themes, adds loads of extra functionality.',
            'image' => 'https://ps.w.org/jetpack/assets/banner-772x250.png?rev=1173629',
        ),
    );

    $processed = array();

    foreach( $plugins as $key => $plugin ) {
        $url = 'https://wordpress.org/plugins/' . $key . '/';
        $plugin[ 'url' ] = $url;
        $processed[ $key ] = $plugin;
    }

    return $processed;

}
