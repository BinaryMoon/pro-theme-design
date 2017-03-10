<?php

/**
 * Vision
 * http://culturadeco.com/
 * http://sanalsaray.net/
 * https://ajspages.wordpress.com/
 * http://blog.creditsavvy.com.au/
 * http://lliayu.com/
 * http://ilonarubesova.cz/
 *
 * Lens
 * https://vaultsoftheorder.wordpress.com/
 * https://helensjournal.wordpress.com/
 * http://blog.midwestlifeshots.com/
 * http://thewordwalk.com/
 * http://deneoto.com/
 * https://foodlancer.wordpress.com/
 * http://sterlingimageworks.com/
 * http://goodnessmefood.com/
 * http://hoperoad.co.za/
 * https://renatoartes.wordpress.com/
 *
 *
 * Exhibit
 * https://paproductdesign.wordpress.com/
 * http://lovelymixture.com/
 * http://inspiringcompletewellbeing.com/
 *
 *
 * Carmack
 * https://blackandbloom.org/
 * https://mycrazygreenlife.com/
 * https://nookandkranny.com/
 * https://blog.appswithoutcode.com/
 * https://warnindustries.wordpress.com/
 * https://readthenorth.wordpress.com/
 *
 */



/**
 * list of websites to display on the showcase
 */
function get_website_data() {

	/**
	 * properties:
	 * url = url for website to showcase
	 * name = website name
	 * theme = name of theme being used on that site
	 * featured = if the site will display on the featured toggle. Remove property if not true
	 * image = fallback image in case auto screenshot doesn't work for whatever reason. Image should be 400 x 300
	 */

	/**
		'' => array(
			'url' => '',
			'name' => '',
			'theme' => 'themeslug',
			'tags' => array( 'themeslug', 'featured' ),
			'image' => '',
		),
	 */



	$websites = array(
		'absurdisan' => array(
			'url' => 'http://absurdisan.com/',
			'name' => 'Absudisan',
			'theme' => 'romero',
			'tags' => array( 'featured' ),
		),


		'tanboy' => array(
			'url' => 'https://prialterno.wordpress.com/',
			'name' => 'Tan Boy',
			'theme' => 'broadsheet',
			'tags' => array( 'featured' ),
		),

		'aosugo' => array(
			'url' => 'http://aosugo.com/',
			'name' => 'Ausogo',
			'theme' => 'romero',
		),
		'mostvaluablepodcasts' => array(
			'url' => 'http://mostvaluablepodcasts.com/',
			'name' => 'Most Valuable Podcasts',
			'theme' => 'romero',
		),
		'shortblacktechie' => array(
			'url' => 'http://shortblacktechie.com/',
			'name' => 'Short Black Techie',
			'theme' => 'romero',
			'tags' => array( 'featured' ),
		),
		'drummajorsociety' => array(
			'url' => 'http://drummajorsociety.org/',
			'name' => 'Drum Major Society',
			'theme' => 'romero',
		),
		'wethemeeple' => array(
			'url' => 'http://blog.wethemeeple.co/',
			'name' => 'We The Meeple',
			'theme' => 'romero',
		),
		'theneocom' => array(
			'url' => 'http://theneocom.com/',
			'name' => 'The Neocom',
			'theme' => 'romero',
		),
		'psvitaaddict' => array(
			'url' => 'http://psvitaaddict.com/',
			'name' => 'PS Vita Addict',
			'theme' => 'romero',
		),
		'filmexposure' => array(
			'url' => 'http://filmexposure.ch/',
			'name' => 'Film Exposure',
			'theme' => 'romero',
		),
		'bestgameever' => array(
			'url' => 'http://bestgameever.co.uk/',
			'name' => 'Best Game Ever',
			'theme' => 'romero',
		),
		'ninauthority' => array(
			'url' => 'http://ninauthority.com/',
			'name' => 'Nintendo Authority',
			'theme' => 'romero',
		),

		'barry-corner' => array(
			'url' => 'http://barrycomersblog.com',
			'name' => 'Barry Corner',
			'theme' => 'monet',
			'tags' => array( 'featured' ),
			'image' => 'barrycorner',
		),
		'vuurig' => array(
			'url' => 'http://sonjavanvuure.com',
			'name' => 'Vuurig',
			'theme' => 'monet',
			'image' => 'vuurig',
		),
		'legos-and-friends' => array(
			'url' => 'http://legosandfriends.com',
			'name' => 'Legos and Friends',
			'theme' => 'romero',
		),
		'mgarciadigital' => array(
			'url' => 'https://mgarciadigital.wordpress.com/',
			'name' => 'Marco Garcia',
			'theme' => 'puzzle',
			'image' => 'mgarciadigital',
			'tags' => array( 'puzzle', 'featured' ),
		),
		'should-i-go-see-it' => array(
			'url' => 'http://shouldigoseeit.com',
			'name' => 'Should I Go See It',
			'image' => 'shouldigoseeit',
			'theme' => 'puzzle',
		),
		'noise-nation' => array(
			'url' => 'https://noisenation.wordpress.com',
			'name' => 'Noise Nation',
			'image' => 'noisenation',
			'theme' => 'opti',
		),
		'the-fourth-crown' => array(
			'url' => 'http://thefourthcrown.com',
			'name' => 'The Fourth Crown',
			'theme' => 'broadsheet',
			'tags' => array( 'featured' ),
		),
		'geeks-down-under' => array(
			'url' => 'http://geeksdownunder.com.au',
			'name' => 'Geeks Down Under',
			'theme' => 'romero',
		),
		'decograffik' => array(
			'url' => 'http://decograffik.com',
			'name' => 'Decograffik',
			'image' => 'decograffik',
			'theme' => 'puzzle',
		),
		'cynthia-lait' => array(
			'url' => 'http://cynthialait.com',
			'name' => 'Cynthia Lait',
			'image' => 'cynthialait',
			'theme' => 'puzzle',
		),
		'maroc-in-style' => array(
			'url' => 'http://marocinstyle.com',
			'name' => 'Maroc in Style',
			'image' => 'maroc',
			'theme' => 'puzzle',
		),
		'flossy-photography' => array(
			'url' => 'https://flossyphotography.wordpress.com',
			'name' => 'Flossy Photography',
			'image' => 'flossy',
			'theme' => 'puzzle',
		),
		'leah-pellegrini' => array(
			'url' => 'http://leahpellegrini.com',
			'name' => 'Leah Pellegrini',
			'theme' => 'puzzle',
		),
		'cincindos' => array(
			'url' => 'http://cincindos.com',
			'name' => 'Cincindos',
			'image' => 'cincindos',
			'theme' => 'puzzle',
		),
		'vocalise' => array(
			'url' => 'https://ballaratvocalise.wordpress.com',
			'name' => 'Vocalise',
			'theme' => 'opti',
		),
		'bella-caledonia' => array(
			'url' => 'https://bellacaledonia.wordpress.com',
			'name' => 'Bella Caledonia',
			'image' => 'bellacaledonia',
			'theme' => 'opti',
			'tags' => array( 'featured' ),
		),
		'national-rail-enquiries' => array(
			'url' => 'http://blog.nationalrail.co.uk',
			'name' => 'National Rail Enquiries',
			'theme' => 'chronicle',
			'tags' => array( 'featured' ),
		),
		'berkeley-life-centre' => array(
			'url' => 'http://berkeleylifecentre.org',
			'name' => 'Berkeley Life Centre',
			'theme' => 'chronicle',
			'tags' => array( 'featured' ),
		),
		'comic-community' => array(
			'url' => 'https://ccommunity.wordpress.com',
			'name' => 'Comic Community',
			'theme' => 'chronicle',
		),
		'cardinal-courier' => array(
			'url' => 'https://cardinalcourieronline.wordpress.com',
			'name' => 'Cardinal Courier',
			'theme' => 'broadsheet',
		),
		'orange-county-tribune' => array(
			'url' => 'http://orangecountytribune.com',
			'name' => 'Orange County Tribune',
			'theme' => 'broadsheet',
		),
		'the-sentinel' => array(
			'url' => 'https://shssentinel.wordpress.com',
			'name' => 'The Sentinel',
			'theme' => 'broadsheet',
		),
		'gentlemans-portion' => array(
			'url' => 'http://gentlemansportion.com',
			'name' => 'Gentlemans Portion',
			'theme' => 'broadsheet',
		),
		'probe-inernational' => array(
			'url' => 'http://journal.probeinternational.org',
			'name' => 'Probe International',
			'theme' => 'broadsheet',
		),
		'the-banner' => array(
			'url' => 'http://thebannercsi.com',
			'name' => 'The Banner',
			'theme' => 'broadsheet',
		),
		'bailey-english-studio' => array(
			'url' => 'http://baileyenglishstudio.com',
			'name' => 'Bailey English Studio',
			'theme' => 'monet',
			'image' => 'baileyenglishstudio',
		),

	);


	$processed = array();

	foreach ( $websites as $key => $site ) {

		// preview url
		$site[ 'url-preview' ] = path( 'showcase-preview/' . $key . '/' );
		$site[ 'showcase-target' ] = '';

		//var_dump( $site[ 'url' ] );
		//var_dump( strpos( $site[ 'url' ], 'https://' ) );

		if ( strpos( $site[ 'url' ], 'http://' ) !== false ) {

			$site[ 'url-preview' ] = $site[ 'url' ];
			$site[ 'showcase-target' ] = '_blank';

		}

		// preview url
		$site[ 'url-showcase' ] = path( 'theme-showcase/' . $site['theme'] . '/#' . $key );

		// iframe url
		$site[ 'url-iframe' ] = $site[ 'url' ];

		// add theme slug to tags
		$site[ 'tags' ][] = $site[ 'theme' ];

		// setup site screenshots
		$site[ 'image-preview' ] = site_screenshot( $site['url'] );
		$site[ 'image-url' ] = $site[ 'image-preview' ];

		// change dynamic url for static image if it exists. Static image is needed for themes that use js for positioning (masonry) since the dynamic screenshot system does not support js.
		if ( ! empty( $site[ 'image' ] ) ) {

			$site[ 'image-url' ] = image_path( 'showcase/' . $site[ 'image' ] . '.jpg' );

		}

		$processed[ $key ] = $site;

	}

	return $processed;

}


/**
 * Check to see if specified website tag exists
 */
function website_tag_exists( $tag = '' ) {

	if ( $tag ) {
		$websites = get_website_data();

		foreach ( $websites as $w ) {
			if ( in_array( $tag, $w[ 'tags' ] ) ) {
				return true;
			}
		}

		return false;
	}

	return true;
}


/**
 * Filter websites to the selected tab
 * @param  string  [$tag         = ''] Key for requested website
 * @param  integer [$limit       = -1] Number of websites to retrieve. -1 for all sites
 * @return array   List of websites limited by $limit
 */
function website_get_by_tag( $tag = '', $limit = -1 ) {

	$tag_websites = array();
	$websites = get_website_data();

	if ( $tag ) {

		foreach ( $websites as $key => $website ) {
			if ( in_array( $tag, $website[ 'tags' ] ) ) {
				$tag_websites[ $key ] = $website;
			}
		}

	} else {

		// no tag so change limit to 15
		if ( $limit < 0 ) {
			$limit = 15;
		}

		foreach ( $websites as $key => $website ) {
			$tag_websites[ $key ] = $website;
		}

	}

	if ( $limit > 0 ) {
		$tag_websites = array_slice( $tag_websites, 0, $limit );
	}

	// shuffle homepage only
	if ( ! $tag ) {
		shuffle( $tag_websites );
	}

	return $tag_websites;

}


/**
 * Get the data for a specific website slug
 * @param  str           $site key for website to retrieve
 * @return boolean|array Website information or false if website does not exist
 */
function website_get( $site ) {

	$websites = get_website_data();

	if ( isset( $websites[ $site ] ) ) {
		return $websites[ $site ];
	}

	return false;

}


/**
 * Check to see if a website slug exist
 * @param  string  $site Key for website to retrieve
 * @return boolean true if website exists, false otherwise
 */
function website_exists( $site ) {

	$websites = get_website_data();

	if ( isset( $websites[ $site ] ) ) {
		return true;
	}

	return false;

}


/**
 * Display the sitemap for the website data
 */
function website_sitemap() {

	$websites = website_themes();

	foreach ( $websites as $site ) {
?>
	<li><a href="<?php echo path( 'theme-showcase/' . $site . '/' ); ?>"><?php echo ucwords( $site ); ?></a></li>
<?php
	}

}


/**
 * Get a list of all the website themes
 * @return array List of themes that have showcase websites assigned to them
 */
function website_themes() {

	$websites = get_website_data();

	$themes = array();

	foreach ( $websites as $site ) {
		$themes[] = $site[ 'theme' ];
	}

	return array_unique( $themes );

}
