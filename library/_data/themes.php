<?php
/**
 * Theme information.
 *
 * @package ptd.
 */

// Purchase from FastSpring.
define( 'THEME_PURCHASE', '<button class="button greedy" type="button" data-fsc-action="Add,Checkout" data-fsc-item-path-value="%s">Purchase %s</button>' );

// Download from wordpress.org.
define( 'THEME_DOWNLOAD', '<a class="button greedy" href="https://wordpress.org/themes/%s/">Download %s</a>' );


/**
 * A list of all of our themes
 *
 * @return array A list of all the available themes
 */
function get_theme_data() {

	$themes = array(

		'label' => array(
			'name' => 'Label',
			'description' => 'Label is a stylistic theme created specially for art and fashion bloggers. With a distinctive masonry powered layout, a full screen post slider, and a classy vertical header - it\'s sure to make your website stand out.',
			'short_description' => 'A classic blogging theme, with full screen slider.',
			'price-wpcom' => 79,
			'price-wporg' => 99,
			'url-wpcom' => 'label',
			'image' => 'label.png',
			'tags' => array( 'magazine', 'photography', 'new' ),
			'supports' => array( 'site-logo', 'infinite-scroll', 'social-menu', 'portfolio', 'post-formats', 'raddcontrol' ),
			'color' => '#626e7a',
		),

		'carmack' => array(
			'name' => 'Carmack',
			'description' => 'Carmack is a magazine theme, suitable for Video Games, Movies, Music and other visual magazine sites. Carmack supports featured content and post formats to allow you to create the perfect website.',
			'short_description' => 'A modern, minimal, magazine theme.',
			'price-wpcom' => 79,
			'price-wporg' => 99,
			'url-wpcom' => 'carmack',
			'image' => 'carmack.png',
			'tags' => array( 'magazine', 'new' ),
			'supports' => array( 'site-logo', 'infinite-scroll', 'social-menu', 'portfolio', 'post-formats', 'raddcontrol' ),
			'color' => '#FFEE00',
		),

		'exhibit' => array(
			'name' => 'Exhibit',
			'description' => 'Exhibit is the perfect theme for businesses, big and small, to exhibit their work. Acting as both a portfolio and a blog Exhibit allows you to easily show off your projects.',
			'short_description' => 'A minimal WordPress portfolio theme.',
			'price-wpcom' => 79,
			'price-wporg' => 99,
			'url-wpcom' => 'exhibit',
			'url-cm' => '348846-Exhibit-WordPress-Portfolio-Theme',
			'image' => 'exhibit.png',
			'tags' => array( 'portfolio', 'hot' ),
			'supports' => array( 'site-logo', 'infinite-scroll', 'social-menu', 'testimonials', 'portfolio', 'raddcontrol' ),
			'color' => '#e09485',
		),

		'passenger' => array(
			'name' => 'Passenger',
			'description' => 'Passenger is a theme designed for travel journals, and scrapbooking sites. With its unique post formats and clean typography, Passenger is great for telling stories.',
			'short_description' => 'A travel journal and scrapbooking theme.',
			'price-wpcom' => 79,
			'price-wporg' => 99,
			'url-wpcom' => 'passenger',
			// 'url-cm' => '312560-Monet-WordPress-Portfolio-Theme',
			'image' => 'passenger.png',
			'tags' => array( 'blog' ),
			'supports' => array( 'site-logo', 'infinite-scroll', 'social-menu', 'portfolio', 'post-formats', 'testimonials' ),
			'color' => '#444444',
		),

		'puzzle' => array(
			'name' => 'Puzzle',
			'description' => 'Puzzle is a visually oriented theme, great for photographers and artists who want to tell stories using their images.',
			'short_description' => 'A responsive WordPress portfolio theme.',
			'price-wpcom' => 79,
			'price-wporg' => 99,
			'url-wpcom' => 'puzzle',
			'url-cm' => '108641-Puzzle-Responsive-WordPress-Theme',
			'image' => 'puzzle.png',
			'tags' => array( 'portfolio', 'photography' ),
			'supports' => array( 'portfolio', 'site-logo', 'infinite-scroll', 'social-menu', 'testimonials', 'theme-club', 'raddcontrol' ),
			'color' => '#2ECC71',
		),

		'chronicle' => array(
			'name' => 'Chronicle',
			'description' => 'A magazine theme. With 3 optional widget areas, featured posts, and a huge homepage slider, there are lots of options for creating interesting, immersive websites.',
			'short_description' => 'A modern WordPress magazine theme.',
			'price-wpcom' => 79,
			'price-wporg' => 129,
			'parent-theme' => 'broadsheet',
			'url-wpcom' => 'chronicle',
			'url-cm' => '113017-Chronicle-Magazine-Theme',
			'image' => 'chronicle.png',
			'tags' => array( 'magazine', 'blog', 'hot' ),
			'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'testimonials', 'theme-club', 'raddcontrol' ),
			'color' => '#C0392B',
		),

		'monet' => array(
			'name' => 'Monet',
			'description' => 'Monet is a delicate responsive portfolio theme for photographers and other creatives. With crisp typography Monet is easy on the eye.',
			'short_description' => 'A delicate WordPress portfolio theme.',
			'price-wpcom' => 79,
			'price-wporg' => 99,
			'url-wpcom' => 'monet',
			'url-cm' => '312560-Monet-WordPress-Portfolio-Theme',
			'image' => 'monet.png',
			'tags' => array( 'portfolio', 'photography' ),
			'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'portfolio', 'theme-club' ),
			'color' => '#6f7f9f',
		),

		'romero' => array(
			'name' => 'Romero',
			'description' => 'A WordPress theme designed for visual magazine sites. Ideal for video game sites, motoring magazines, and other topics that have large vibrant imagery.',
			'short_description' => 'A modern WordPress video game magazine theme.',
			'price-wpcom' => 79,
			'price-wporg' => 99,
			'url-wpcom' => 'romero',
			'url-cm' => '312559-Romero-WordPress-Video-Game-Theme',
			'image' => 'romero.png',
			'tags' => array( 'blog', 'magazine', 'hot' ),
			'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'custom-colours-fonts', 'raddcontrol' ),
			'color' => '#4A90E2',
		),

		'opti' => array(
			'name' => 'Opti',
			'description' => 'A clean blog theme with magazine elements. Custom category blurbs, great typography and a fully editable color scheme.',
			'short_description' => 'A classical WordPress magazine theme.',
			'price-wpcom' => 79,
			'price-wporg' => 79,
			'url-wpcom' => 'opti',
			'url-cm' => '9918-Opti-Responsive-WordPress-Theme',
			'image' => 'opti.png',
			'tags' => array( 'magazine' ),
			'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'theme-club', 'raddcontrol' ),
			'color' => '#293033',
		),

		'mimbopro' => array(
			'name' => 'Mimbo Pro',
			'description' => 'Mimbo Pro is the original magazine theme, created in 2007 and updated for a modern internet. It takes your content and formats it in a structured way grouped by category.',
			'short_description' => 'The original premium WordPress magazine theme.',
			'price-wpcom' => 59,
			'price-wporg' => 79,
			'url-wpcom' => 'mimbopro',
			'url-cm' => '111465-Mimbo-Pro-WordPress-Theme',
			'image' => 'mimbopro.png',
			'tags' => array( 'magazine' ),
			'supports' => array( 'featured-image', 'theme-club' ),
			'color' => '#3399cc',
		),

		'lens' => array(
			'name' => 'Lens',
			'description' => 'A photo-oriented theme, great for people who like to tell stories with pictures, equally suitable for bloggers, scrapbookers, and writers.',
			'short_description' => 'A modern WordPress photography theme.',
			'price-wpcom' => 79,
			'price-wporg' => 79,
			'url-wpcom' => 'lens',
			'url-cm' => '108642-Lens-Responsive-Photography-Theme',
			'image' => 'lens.png',
			'tags' => array( 'photography' ),
			'supports' => array( 'site-logo', 'featured-content', 'featured-image', 'infinite-scroll', 'social-menu', 'testimonials', 'theme-club' ),
			'color' => '#C0392B',
		),

		'mirror' => array(
			'name' => 'Mirror',
			'description' => 'A blog focused theme showcasing large featured images and clear typography. A large featured content slider in the header helps your top content to shine.',
			'short_description' => 'A modern WordPress blogging theme.',
			'price-wpcom' => 79,
			'price-wporg' => 79,
			'url-wpcom' => 'mirror',
			'url-cm' => '220297-Mirror-WordPress-Photography-Theme',
			'image' => 'mirror.png',
			'tags' => array( 'blog' ),
			'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'custom-colours-fonts', 'theme-club', 'raddcontrol' ),
			'color' => '#548334',
		),

		'beacon' => array(
			'name' => 'Beacon',
			'description' => 'A perfect theme for viral content: trending topics, featured thumbnails, and photos and excerpts arranged by category or popularity.',
			'short_description' => 'A Social WordPress Magazine Theme.',
			'price-wpcom' => 79,
			'price-wporg' => 99,
			'url-wpcom' => 'beacon',
			'url-cm' => '',
			'image' => 'beacon.png',
			'tags' => array( 'magazine' ),
			'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'raddcontrol', 'theme-club' ),
			'color' => '#44555e',
		),

		'traveler' => array(
			'name' => 'Traveler',
			'description' => 'Perfect for bloggers who want to document their travels with large photos, dramatic colors and Pinterest-style layouts.',
			'short_description' => 'A classic WordPress magazine theme.',
			'price-wpcom' => 79,
			'price-wporg' => 99,
			'url-wpcom' => 'traveler',
			'url-cm' => '150534-Traveler-Visual-WordPress-Theme',
			'image' => 'traveler.png',
			'tags' => array( 'magazine', 'blog' ),
			'supports' => array( 'featured-content', 'featured-image', 'infinite-scroll', 'theme-club', 'raddcontrol' ),
			'color' => '#1e2123',
		),

		'broadsheet' => array(
			'name' => 'Broadsheet',
			'description' => 'A newspaper theme with 3 optional widget areas, featured posts and a huge homepage slider there are lots of options for creating interesting, immersive websites.',
			'short_description' => 'A classical WordPress newspaper theme.',
			'price-wpcom' => 79,
			'price-wporg' => 99,
			'url-wpcom' => 'broadsheet',
			'url-cm' => '108643-Broadsheet-Newspaper-Theme',
			'image' => 'broadsheet.png',
			'tags' => array( 'magazine', 'hot' ),
			'supports' => array( 'site-logo', 'featured-image', 'infinite-scroll', 'social-menu', 'testimonials', 'theme-club', 'raddcontrol' ),
			'color' => '#1b557a',
		),

		'bromley' => array(
			'name' => 'Bromley',
			'description' => 'The best elements of blogging themes manipulated into something beautifully simple. Ideal for local community, fan magazines, and talking about updates in your industry.',
			'short_description' => 'A minimal WordPress magazine theme.',
			'price-wpcom' => 79,
			'price-wporg' => 79,
			'url-wpcom' => 'bromley',
			'url-cm' => '113531-Bromley-Responsive-WordPress-Theme',
			'image' => 'bromley.png',
			'tags' => array( 'blog' ),
			'supports' => array( 'featured-content', 'featured-image', 'infinite-scroll', 'theme-club', 'raddcontrol' ),
			'color' => '#f86e5e',
		),

		/*
		'vision' => array(
			'name' => 'Vision',
			'description' => 'A theme designed for artists, photographers and other people with a love of strong visuals, with a dark background to make your content pop.',
			'short_description' => 'A simple WordPress blogging theme.',
			'price-wpcom' => 79,
			'price-wporg' => '',
			'url-wpcom' => 'vision',
			'image' => 'vision.png',
			'tags' => array( 'blog', 'photography', 'portfolio' ),
			'supports' => array( 'featured-content', 'featured-image', 'infinite-scroll', 'testimonials', 'raddcontrol' ),
			'color' => '#E67E22',
		),
		*/

		'kent' => array(
			'name' => 'Kent',
			'description' => 'A responsive theme designed for writers who want to write. Stripped back to the minimum — it’s designed to work well on all internet-enabled devices.',
			'short_description' => 'A content focused WordPress blogging theme.',
			'price-wpcom' => 79,
			'price-wporg' => '',
			'url-wpcom' => 'kent',
			'url-wporg' => 'kent',
			'image' => 'kent.png',
			'tags' => array( 'blog' ),
			'supports' => array( 'featured-image', 'infinite-scroll', 'sticky-post', 'theme-club' ),
			'color' => '#317eb1',
		),

		'bexley' => array(
			'name' => 'Bexley',
			'description' => 'The perfect combination of imagery and text, giving photographers and artists a space to user as their online portfolio or gallery.',
			'short_description' => 'A photography based WordPress blogging theme.',
			'price-wpcom' => 69,
			'price-wporg' => '',
			'url-wpcom' => 'bexley',
			'url-wporg' => 'bexley',
			'image' => 'bexley.png',
			'tags' => array( 'blog', 'photography' ),
			'supports' => array( 'featured-image', 'infinite-scroll', 'sticky-post', 'raddcontrol' ),
			'color' => '#29b765',
		),

		'isca' => array(
			'name' => 'Isca',
			'description' => 'A tumblog theme for WordPress, designed for people who create a variety of types of content like quotes, images, text and video.',
			'short_description' => 'A classic WordPress tumblog theme.',
			'price-wpcom' => 59,
			'price-wporg' => '',
			'url-wpcom' => 'isca',
			'url-wporg' => 'isca',
			'image' => 'isca.png',
			'tags' => array( 'blog' ),
			'supports' => array( 'infinite-scroll', 'post-formats', 'raddcontrol' ),
			'color' => '#e9e6e0',
		),

	);

	$processed = array();

	foreach ( $themes as $key => $theme ) {

		if ( ! empty( $theme['price-wporg'] ) ) {

			// Purchase the theme.
			$theme['download-button'] = sprintf(
				THEME_PURCHASE,
				$key,
				$theme['name']
			);

		} elseif ( ! empty( $theme['url-wporg'] ) ) {

			// Download the theme.
			$theme['download-button'] = sprintf(
				THEME_DOWNLOAD,
				$key,
				$theme['name']
			);

		}

		// Creative Market url for affiliate page.
		if ( ! empty( $theme['url-cm'] ) ) {
			$theme['url-cm'] = 'https://creativemarket.com/BinaryMoon/' . $theme['url-cm'] . '?u=BinaryMoon';
		}

		// All themes are on wordpress.com so fill out the rest of the url.
		$theme['url-wpcom'] = 'https://wordpress.com/theme/' . $theme['url-wpcom'] . '/';

		// Theme info link.
		$theme['url'] = path( 'theme/' . $key . '/' );
		$theme['url-details'] = path( 'theme/' . $key . '/' );
		$theme['url-demo-content'] = path( 'assets/demo-xml/' . $key . '.wordpress.xml' );
		$theme['url-demo-widgets'] = path( 'assets/demo-widgets/' . $key . '.json' );

		$theme['path-changelog'] = $_SERVER['DOCUMENT_ROOT'] . urldecode( Flight::request()->base ) . '/assets/changelogs/' . $key . '.txt';
		$theme['path-languages'] = $_SERVER['DOCUMENT_ROOT'] . urldecode( Flight::request()->base ) . '/assets/translations/' . $key . '.txt';

		if ( ! file_exists( $theme['path-languages'] ) ) {
			$theme['path-languages'] = '';
		}

		// Theme colour.
		if ( empty( $theme['color'] ) ) {
			$theme['color'] = '#ffffff';
		}
		$theme['color-scheme'] = readable_colour( $theme['color'] );
		$theme['color-contast'] = 'theme-dark' === $theme['color-scheme'] ? '#ffffff' : '#000000';

		// Theme preview link.
		$theme['url-preview'] = '';
		if ( ! empty( $theme['download-button'] ) ) {
			$theme['url-preview'] = path( 'theme-preview/' . $key . '/' );
		}

		// Theme showcase link.
		$theme['url-showcase'] = path( 'theme-showcase/' . $key . '/' );

		// Host tags.
		$theme['tags'][] = 'wordpress.com';

		if ( ! empty( $theme['download-button'] ) ) {
			$theme['tags'][] = 'wordpress.org';
		}

		// Theme documentation link.
		$theme['url-documentation'] = path( 'documentation/theme/' . $key . '/' );

		// Set price.
		$theme['is-free'] = false;
		if ( empty( $theme['price-wporg'] ) ) {
			$theme['price-wporg'] = 'free!';
			$theme['tags'][] = 'free';
			$theme['is-free'] = true;
		} else {
			$theme['price-wporg'] = '<small>$</small>' . $theme['price-wporg'];
		}

		$theme['price-wpcom'] = '<small>$</small>' . $theme['price-wpcom'];

		// Set the display price.
		$theme['price'] = $theme['price-wpcom'];
		if ( ! empty( $theme['url-wporg'] ) ) {
			$theme['price'] = $theme['price-wporg'];
		}

		// Text for button that gets the theme details.
		$theme['text-details'] = 'Details';
		if ( ! empty( $theme['url-preview'] ) ) {
			$theme['text-details'] = 'Demo &amp; Details';
		}

		// Link target.
		$theme['link-target'] = '';

		// Set default theme features that all themes support.
		$theme['supports'] = array_merge(
			$theme['supports'],
			array(
				'search-engine-optimization',
				'custom-front-page',
				'custom-colours-fonts',
				'image-resizing',
				'custom-css',
				'contact-form',
				'featured-image',
				'localization',
				'related-content',
				'social-sharing',
				'custom-page-templates',
				'customizer',
				'widget-visibility',
				'demo-content',
			)
		);

		$processed[ $key ] = $theme;

	} // End foreach().

	return $processed;

}


/**
 * List option elements for a select box
 */
function themes_select_box() {

	$themes = get_theme_data();

	foreach ( $themes as $theme ) {
?>
	<option value="<?php echo $theme['name']; ?>"><?php echo $theme['name']; ?></option>
<?php
	}

}


/**
 * Does the specified theme exist?
 *
 * @param  string  $theme_slug The theme key to check
 * @return boolean If the theme exists
 */
function themes_exist( $theme_slug ) {

	$themes = get_theme_data();

	return isset( $themes[ $theme_slug ] );

}


/**
 * Get the data for the specified theme.
 *
 * @param  string        $theme_slug The theme key to retrieve
 * @return boolean|array Either the requested theme information, or false if theme not found
 */
function themes_get( $theme_slug ) {

	$themes = get_theme_data();

	if ( isset( $themes[ $theme_slug ] ) ) {
		return $themes[ $theme_slug ];
	}

	return false;

}


/**
 * Get X random themes from the list
 *
 * @param  integer [$count      = 3] the number of themes to get
 * @return array   An array of themes, limited by the length specified in count
 */
function themes_get_random( $count = 3 ) {

	$themes = get_theme_data();

	$count = (int) $count;

	if ( $count < 3 ) {
		$count = 3;
	}

	shuffle( $themes );

	return array_slice( $themes, 0, $count );

}


/**
 * List all themes for use on sitemap
 */
function themes_sitemap() {

	$themes = get_theme_data();

	foreach ( $themes as $theme ) {
?>
	<li><a href="<?php echo $theme['url']; ?>"><?php echo $theme['name']; ?></a></li>
<?php
	}

}


/**
 * Get the price of all themes combined
 *
 * @return integer Dollar value for the combined price
 */
function themes_all_themes_price() {

	$themes = get_theme_data();
	$price = 0;

	foreach ( $themes as $theme ) {
		if ( ! empty( $theme['price-wporg'] ) ) {
			$price += $theme['price-wporg'];
		}
	}

	return $price;

}


/**
 * Get a list of themes suitable for the specified host
 *
 * @param  string $tag Tag to look for.
 * @return array       An array of theme info.
 */
function themes_by_tag( $tag = '' ) {

	$themes = get_theme_data();
	$processed_themes = array();

	foreach ( $themes as $theme ) {

		if ( in_array( $tag, $theme['tags'], true ) || '' === $tag ) {

			if ( 'wordpress.com' === $tag ) {
				$theme['url-details'] = $theme['url-wpcom'];
				$theme['link-target'] = '_blank';
			}

			$processed_themes[] = $theme;

		}
	}

	return $processed_themes;

}


/**
 * Work out if the specified theme supports the specified feature.
 *
 * @param array  $theme   Theme Data.
 * @param string $feature Feature tag.
 */
function themes_supports( $theme, $feature ) {

	if ( in_array( $feature, $theme['supports'], true ) ) {
		return true;
	}

	return false;

}
