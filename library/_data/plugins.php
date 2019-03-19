<?php
/**
 * Information about the plugins supported by Pro Theme Design
 *
 * @package ptd
 */

/**
 * List of all the plugins we have built/ support
 */
function get_plugin_data() {

	$plugins = array(
		'tada' => array(
			'name' => 'Tada',
			'description' => 'Make your website feel faster, without doing anything. Like Magic!',
			'image' => 'https://ps.w.org/tada/assets/banner-772x250.png?rev=2052207',
			'og-image' => 'og-tada.png',
			'tags' => array( 'ours' ),
		),
		'bm-custom-login' => array(
			'name' => 'Custom Login',
			'description' => 'Customise the WordPress login box quickly and easily.',
			'image' => 'https://ps.w.org/bm-custom-login/assets/banner-772x250.png?rev=2052202',
			'og-image' => 'og-custom-login.png',
			'tags' => array( 'ours' ),
		),
		'front-page-category' => array(
			'name' => 'Front Page Category',
			'description' => 'Select the categories that display on the front page of your website.',
			'image' => 'https://ps.w.org/front-page-category/assets/banner-772x250.png?rev=2052203',
			'og-image' => 'og-front-page-category.png',
			'tags' => array( 'ours' ),
		),
		'styleguide' => array(
			'name' => 'Styleguide',
			'description' => 'Customize fonts and colours in WordPress themes without touching any code.',
			'image' => 'https://ps.w.org/styleguide/assets/banner-772x250.png?rev=2052206',
			'og-image' => 'og-styleguide.png',
			'tags' => array( 'ours' ),
		),
		'browser-shots' => array(
			'name' => 'Browser Shots',
			'description' => 'Automate the process of taking website screenshots.',
			'image' => 'https://ps.w.org/browser-shots/assets/banner-772x250.png?rev=2052204',
			'og-image' => 'og-browser-shots.png',
			'tags' => array( 'ours' ),
		),
		'jetpack' => array(
			'name' => 'Jetpack',
			'description' => 'Fully supported by our themes, adds loads of extra functionality.',
			'image' => 'https://ps.w.org/jetpack/assets/banner-772x250.png?rev=1173629',
			'og-image' => 'jetpack.png',
			'tags' => array( 'supported' ),
			'url' => JETPACK,
		),
		'woocommerce' => array(
			'name' => 'WooCommerce',
			'description' => 'Bring <a href="' . path( 'themes/e-commerce/' ) . '">e-commerce</a> to your site quickly and easily.',
			'image' => 'https://ps.w.org/woocommerce/assets/banner-1544x500.png?rev=1629184',
			'og-image' => 'money.png',
			'tags' => array( 'supported' ),
		),
		// 'tailor' => array(
		// 	'name' => 'Tailor',
		// 	'description' => 'Create complex page layouts with ease.',
		// 	'image' => 'https://ps.w.org/tailor/assets/banner-772x250.png?rev=1449152',
		// 	'og-image' => 'tailor.png',
		// 	'tags' => array( 'supported' ),
		// ),
		// 'radcontrol' => array(
		// 	'name' => 'Word Ads',
		// 	'description' => 'Harness WordPress.com\'s advertising partners for your own website.',
		// 	'image' => 'https://ps.w.org/radcontrol/assets/banner-772x250.jpg?rev=1312024',
		// 	'tags' => array( 'supported' ),
		// ),
	);

	$processed = array();

	foreach ( $plugins as $key => $plugin ) {

		if ( ! isset( $plugin['url'] ) ) {
			$plugin['url'] = 'https://wordpress.org/plugins/' . $key . '/';
		}
		$plugin['plugin-url'] = $plugin['url'];

		$processed[ $key ] = $plugin;

	}

	return $processed;

}


/**
 * Filter websites to the selected tab
 *
 * @param  string  [$tag         = ''] Key for requested website
 * @param  integer [$limit       = -1] Number of websites to retrieve. -1 for all sites
 * @return array   List of websites limited by $limit
 */
function plugins_get_by_tag( $tag = '' ) {

	$tag_plugins = array();
	$plugins = get_plugin_data();

	if ( $tag ) {

		foreach ( $plugins as $key => $plugin ) {
			if ( in_array( $tag, $plugin['tags'], true ) ) {
				$tag_plugins[ $key ] = $plugin;
			}
		}
	}

	return $tag_plugins;

}
