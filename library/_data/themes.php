<?php
/**
 * Theme information.
 *
 * @package ptd.
 */

/**
 * romero
 * carmack
 * Opti
 * label
 * monet
 */

// Purchase from FastSpring.
define( 'THEME_PURCHASE', '<button class="button greedy purchase-theme" type="button" data-fsc-action="Add,Checkout" data-fsc-item-path-value="%s">Purchase %s</button>' );

// Download from wordpress.org.
define( 'THEME_DOWNLOAD', '<a class="button greedy" href="https://wordpress.org/themes/%s/">Download %s</a>' );


/**
 * A list of all of our themes.
 *
 * @return array A list of all the available themes
 */
function get_raw_theme_data() {

	return array(

		'carmack' => array(
			'name' => 'Carmack',
			'description' => 'Carmack is a magazine theme, suitable for Video Games, Movies, Music and other visual magazine sites. Carmack supports featured content and post formats to allow you to create the perfect website.',
			'short_description' => 'A modern, minimal, magazine theme.',
			'price-wpcom' => 79,
			'price-wporg' => 99,
			'url-wpcom' => 'carmack',
			'image' => 'carmack.png',
			'tags' => array( 'magazine', 'new', 'video-game', 'motor-sports', 'accessible', 'e-commerce' ),
			'supports' => array( 'site-logo', 'infinite-scroll', 'social-menu', 'portfolio', 'post-formats', 'raddcontrol', 'woo-commerce' ),
			'color' => '#FFEE00',
			'title' => 'Carmack - WordPress Video Gaming Theme',
			'meta_description' => 'Get this magazine WordPress gaming theme to show off your visual content. It\'s packed with customizable features!',
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
			'tags' => array( 'magazine', 'blog', 'travel', 'journal' ),
			'supports' => array( 'featured-content', 'featured-image', 'infinite-scroll', 'theme-club', 'raddcontrol' ),
			'color' => '#1e2123',
			'title' => 'Traveler - WordPress Travel Theme',
			'meta_description' => 'Traveler is a classic WordPress travel theme perfect for travel bloggers, with large photos and dramatic colors.',
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
			'tags' => array( 'magazine', 'hot', 'newspaper' ),
			'supports' => array( 'site-logo', 'featured-image', 'infinite-scroll', 'social-menu', 'testimonials', 'theme-club', 'raddcontrol' ),
			'color' => '#1b557a',
			'title' => 'Broadsheet - WordPress Newspaper Theme',
			'meta_description' => 'Get this classical WordPress Newspaper Theme that\'s perfect for creating interesting, immersive sites.',
		),

		'label' => array(
			'name' => 'Label',
			'description' => 'Label is a stylish WordPress theme for fashion, lifestyle and art bloggers. Put your content at the forefront of your blog with bold imagery and beautiful typography: this is the fashion WordPress theme you’ve been waiting for.',
			'short_description' => 'Create a stunning fashion blog which stands out from the crowd.',
			'price-wpcom' => 79,
			'price-wporg' => 99,
			'url-wpcom' => 'label',
			'image' => 'label.png',
			'tags' => array( 'magazine', 'photography', 'new', 'fashion', 'accessible', 'e-commerce' ),
			'supports' => array( 'site-logo', 'infinite-scroll', 'social-menu', 'portfolio', 'post-formats', 'raddcontrol', 'woo-commerce' ),
			'color' => '#626e7a',
			'title' => 'Label - Fashion Blog WordPress Theme',
			'meta_description' => 'Get this stunning fashion blog WordPress theme to stand out from the crowd. Easy setup and responsive design included.',
		),

		'chronicle' => array(
			'name' => 'Chronicle',
			'description' => 'Chronicle is a powerful, flexible magazine WordPress theme with huge customization potential. Three widget areas, featured posts and a huge homepage slider are make this the magazine WordPress theme you’ve been waiting for.',
			'short_description' => 'A flexible and customizable magazine WordPress theme.',
			'price-wpcom' => 79,
			'price-wporg' => 129,
			'parent-theme' => 'broadsheet',
			'url-wpcom' => 'chronicle',
			'url-cm' => '113017-Chronicle-Magazine-Theme',
			'image' => 'chronicle.png',
			'tags' => array( 'magazine', 'blog', 'hot', 'newspaper' ),
			'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'testimonials', 'theme-club', 'raddcontrol' ),
			'color' => '#C0392B',
			'title' => 'Chronicle - WordPress Magazine Theme',
			'meta_description' => 'Get this hugely customizable WordPress magazine theme. Make it your own with powerful, flexible design and attention to detail.',
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
			'tags' => array( 'portfolio', 'hot', 'business', 'e-commerce' ),
			'supports' => array( 'site-logo', 'infinite-scroll', 'social-menu', 'testimonials', 'portfolio', 'raddcontrol', 'woo-commerce' ),
			'color' => '#e09485',
			'title' => 'Exhibit -  WordPress Portfolio Theme',
			'meta_description' => 'Get this minimal WordPress portfolio theme perfect for businesses. Show off your work with great responsive design.',
		),

		'passenger' => array(
			'name' => 'Passenger',
			'description' => 'Passenger is a theme designed for travel journals, and scrapbooking sites. With its unique post formats and clean typography, Passenger is great for telling stories.',
			'short_description' => 'A travel journal and scrapbooking theme.',
			'price-wpcom' => 79,
			'price-wporg' => 99,
			'url-wpcom' => 'passenger',
			'image' => 'passenger.png',
			'tags' => array( 'blog', 'travel', 'journal', 'scrapbook', 'accessible', 'e-commerce' ),
			'supports' => array( 'site-logo', 'infinite-scroll', 'social-menu', 'portfolio', 'post-formats', 'testimonials', 'woo-commerce' ),
			'color' => '#444444',
			'title' => 'Passenger - WordPress Travel Theme',
			'meta_description' => 'Get this WordPress travel theme designed for journals and scrapbooks! Tell your story with unique post formats and typography.',
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
			'tags' => array( 'portfolio', 'photography', 'business', 'e-commerce' ),
			'supports' => array( 'portfolio', 'site-logo', 'infinite-scroll', 'social-menu', 'testimonials', 'theme-club', 'raddcontrol', 'woo-commerce' ),
			'color' => '#2ECC71',
			'title' => 'Puzzle - WordPress Photography Theme',
			'meta_description' => 'Get this stunning WordPress Photography Theme that\'s great for photographers and artists. Show the world your stories!',
		),

		'monet' => array(
			'name' => 'Monet',
			'description' => 'Monet is an elegant, delicate and responsive WordPress theme for your portfolio or blog. Suited to photographers, designers, bloggers and other creatives, the crisp typography ensures your site’s design will ooze quality.',
			'short_description' => 'Create an elegant, responsive visual or written portfolio.',
			'price-wpcom' => 79,
			'price-wporg' => 99,
			'url-wpcom' => 'monet',
			'url-cm' => '312560-Monet-WordPress-Portfolio-Theme',
			'image' => 'monet.png',
			'tags' => array( 'portfolio', 'photography', 'business' ),
			'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'portfolio', 'theme-club' ),
			'color' => '#6f7f9f',
			'title' => 'Monet - WordPress Portfolio Theme',
			'meta_description' => 'Showcase your work with this elegant, responsive WordPress portfolio theme perfect for photographers and designers.',
		),

		'romero' => array(
			'name' => 'Romero',
			'description' => 'Let your content do the talking with this powerful theme suited to visual niches including video game sites, motoring magazines and other topics with vibrant imagery.',
			'short_description' => 'Create a bold magazine for image-heavy niches.',
			'price-wpcom' => 79,
			'price-wporg' => 99,
			'url-wpcom' => 'romero',
			'url-cm' => '312559-Romero-WordPress-Video-Game-Theme',
			'image' => 'romero.png',
			'tags' => array( 'blog', 'magazine', 'hot', 'video-game', 'e-commerce' ),
			'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'custom-colours-fonts', 'raddcontrol', 'woo-commerce' ),
			'color' => '#4A90E2',
			'title' => 'Romero - WordPress Gaming Theme',
			'meta_description' => 'Show off your content with this powerful magazine WordPress Gaming Theme. You\'ll love its bold design and powerful layout!',
		),

		'opti' => array(
			'name' => 'Opti',
			'description' => 'This magazine and newspaper-style theme is stunningly easy to use and customize – and is perfect for news and magazine websites with a lot of content to show off.',
			'short_description' => 'A magazine WordPress theme for content-rich websites.',
			'price-wpcom' => 79,
			'price-wporg' => 79,
			'url-wpcom' => 'opti',
			'url-cm' => '9918-Opti-Responsive-WordPress-Theme',
			'image' => 'opti.png',
			'tags' => array( 'magazine' ),
			'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'theme-club', 'raddcontrol' ),
			'color' => '#293033',
			'title' => 'Opti - WordPress Newspaper Theme',
			'meta_description' => 'Get this easy-to-use WordPress newspaper theme perfect for news and magazine websites with a lot of content to show off.',
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
			'title' => 'Mimbo Pro - WordPress Magazine Theme',
			'meta_description' => 'Get this WordPress Magazine Theme that\'s perfect for displaying your content in a structured way that looks awesome!',
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
			'tags' => array( 'photography', 'business' ),
			'supports' => array( 'site-logo', 'featured-content', 'featured-image', 'infinite-scroll', 'social-menu', 'testimonials', 'theme-club' ),
			'color' => '#C0392B',
			'title' => 'Lens - WordPress Photography Theme',
			'meta_description' => 'Show off your work with this modern WordPress photography theme that\'s great for photographers, bloggers, and scrapbookers.',
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
			'title' => 'Mirror - WordPress Blog Theme',
			'meta_description' => 'Get this modern WordPress Blog theme to make your content shine. Includes responsive design and clear typography.',
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
			'title' => 'Beacon - WordPress Social Network Theme',
			'meta_description' => 'Get this perfect WordPress social network theme to show off viral content with integrated social feeds and sharing.',
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
			'title' => 'Bromley - WordPress Community Theme',
			'meta_description' => 'Get this minimal WordPress community theme for beautifully simple local community websites and fan magazines.',
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
			'title' => 'Kent - Simple WordPress Theme',
			'meta_description' => 'Get this responive, simple WordPress theme for clean, content-focused blogging.',
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
			'title' => 'Bexley - WordPress Photography Theme',
			'meta_description' => 'Get this WordPress Photography Theme for photographers and artists - showcase your work with clean, responsive design.',
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
			'tags' => array( 'blog', 'tumblog' ),
			'supports' => array( 'infinite-scroll', 'post-formats', 'raddcontrol' ),
			'color' => '#e9e6e0',
			'title' => 'Isca - WordPress Tumblog Theme',
			'meta_description' => 'Get this elegant tumblogging theme. Ideally suited for blogs, and diaries.',
		),

	);

}


/**
 * Get processed theme data.
 *
 * @return array
 */
function get_theme_data() {

	$themes = get_raw_theme_data();

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

		$theme['key'] = $key;

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

		sort( $theme['tags'] );

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
				'gdpr-privacy',
			)
		);

		$processed[ $key ] = $theme;

	} // End foreach().

	return $processed;

}


/**
 * Get the number of available themes.
 *
 * @return void
 */
function themes_count() {

	return count( get_raw_theme_data() );

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
 * Display a list of tags.
 *
 * @param  array $list A list of tags to display.
 */
function themes_tag_list( $list ) {

	if ( empty( $list ) ) {
		return;
	}

?>
	<p class="intro tag-list">
<?php
	foreach ( $list as $tag ) {
		$name = get_theme_tag_name( $tag );
?>
		<a href="<?php echo path( '/themes/' . $tag . '/' ); ?>" alt="More <?php echo $name; ?> WordPress Themes"><?php echo $name; ?></a>
<?php
}
?>
	</p>
<?php
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


/**
 * Get an array of all of the available theme tags, sorted by name.
 *
 * @return array
 */
function get_theme_tags() {

	$themes = get_theme_data();

	$theme_tags = array();

	foreach ( $themes as $theme ) {

		$theme_tags = array_merge( $theme_tags, $theme['tags'] );

	}

	$theme_tags = array_unique( $theme_tags );
	sort( $theme_tags );

	return $theme_tags;

}


/**
 * Convert a url slug into a human readable name.
 *
 * @param  string $tag The tag to convert into a name.
 * @return string
 */
function get_theme_tag_name( $tag ) {

	$tag_name = $tag;
	$tag_name = str_replace( '-', ' ', $tag_name );
	$tag_name = str_replace( 'wordpress', 'WordPress', $tag_name );
	$tag_name = ucwords( $tag_name );

	return $tag_name;

}
