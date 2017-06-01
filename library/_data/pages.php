<?php

/**
 *
 */
function get_pages() {

	// see if there's a valid static page to display
	$pages = array(
		'theme-customization' => array(
			'title' => 'WordPress Theme Customization',
			'description' => 'Customize your theme with <strong>Codeable.io</strong>.',
			'view' => 'theme-customizer.php',
		),
		'contact/thanks' => array(
			'title' => 'Thank You',
			'description' => 'Thanks for the message!',
			'view' => 'contact-thanks.php',
		),
		'recommend-a-theme' => array(
			'title' => 'Recommend a WordPress Theme',
			'description' => 'Get a free, personalised, no oligation theme recommendation based upon your requirements.',
			'view' => 'recommend-a-theme.php',
		),
		'newsletter' => array(
			'title' => 'Newsletter',
			'description' => '<strong>Join the Newsletter.</strong> Keep up to date.',
			'view' => 'newsletter.php',
		),
		'search' => array(
			'title' => 'Search Pro Theme Design',
			'description' => 'Search the Pro Theme Design website.',
			'view' => 'search.php',
		),
		'contact' => array(
			'title' => 'Contact Us',
			'description' => 'Keep in touch.',
			'view' => 'contact.php',
		),
		'sitemap' => array(
			'title' => 'Sitemap',
			'description' => 'Find your way around.',
			'view' => 'sitemap.php',
		),
		'policies' => array(
			'title' => 'Terms and Conditions',
			'description' => null,
			'view' => 'terms-and-conditions.php',
		),
		'refund' => array(
			'title' => 'Refund Request',
			'description' => null,
			'view' => 'refund.php',
		),
		'why-us' => array(
			'title' => 'Why Us',
			'description' => 'Why buy a WordPress theme from Pro Theme Design?',
			'view' => 'landing-why-us.php',
		),
	);

	return $pages;

}


/**
 * Does the specified url exist as a page
 *
 * @param  string        $slug Page url slug to check for.
 * @return boolean|array Page info if the page exists
 */
function page_exists( $slug ) {

	$pages = get_pages();

	// allow the redirects to work with or without slashes
	$slug = ltrim( $slug, '/' );
	$slug = rtrim( $slug, '/' );

	if ( ! empty( $pages[ $slug ] ) ) {
		return $pages[ $slug ];
	}

	return false;

}
