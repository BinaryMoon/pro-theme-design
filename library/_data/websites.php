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
		array(
			'url' => '',
			'name' => '',
			'theme' => 'themeslug',
			'tags' => array( 'themeslug', 'featured' ),
		),
	 */



	$websites = array(

		// Carmack.
		array(
			'url' => 'https://nbyt.org/',
			'name' => 'NBYT',
			'theme' => 'carmack',
		),
		array(
			'url' => 'https://journeysinclassicfilm.com/',
			'name' => 'Journeys in Classic Film',
			'theme' => 'carmack',
		),
		array(
			'url' => 'https://energyathaas.wordpress.com/',
			'name' => 'Energy Institute at Haas',
			'theme' => 'carmack',
		),
		array(
			'url' => 'https://vitacalciobollicine.com/',
			'name' => 'Vita Calcio e Bollicine',
			'theme' => 'carmack',
		),
		array(
			'url' => 'https://rtalsoriangames.com/',
			'name' => 'R Talsorian Games',
			'theme' => 'carmack',
		),
		array(
			'url' => 'https://melinanime.land/',
			'name' => 'Mel in Anime Land',
			'theme' => 'carmack',
		),
		array(
			'url' => 'https://topgear.ie/',
			'name' => 'TopGear.IE',
			'theme' => 'carmack',
		),
		array(
			'url' => 'https://yourspacewestsussex.me/',
			'name' => 'Your Space West Sussex',
			'theme' => 'carmack',
		),
		array(
			'url' => 'https://journalistwithoutabeat.com/',
			'name' => 'Journalist Without a Beat',
			'theme' => 'carmack',
		),


		// Romero.
		array(
			'url' => 'https://jesuisungameur.com/',
			'name' => 'Je Suis Un Gameur',
			'theme' => 'romero',
		),
		array(
			'url' => 'https://fremdtunes.com/',
			'name' => 'Fremdtunes',
			'theme' => 'romero',
		),
		array(
			'url' => 'http://absurdisan.com/',
			'name' => 'Absudisan',
			'theme' => 'romero',
		),
		array(
			'url' => 'http://theneocom.com/',
			'name' => 'The Neocom',
			'theme' => 'romero',
		),
		array(
			'url' => 'http://psvitaaddict.com/',
			'name' => 'PS Vita Addict',
			'theme' => 'romero',
		),
		array(
			'url' => 'http://filmexposure.ch/',
			'name' => 'Film Exposure',
			'theme' => 'romero',
		),
		array(
			'url' => 'http://bestgameever.co.uk/',
			'name' => 'Best Game Ever',
			'theme' => 'romero',
		),
		array(
			'url' => 'http://ninauthority.com/',
			'name' => 'Nintendo Authority',
			'theme' => 'romero',
		),
		array(
			'url' => 'http://geeksdownunder.com.au',
			'name' => 'Geeks Down Under',
			'theme' => 'romero',
		),
		array(
			'url' => 'https://cozmicventures.com/',
			'name' => 'Cozmic Ventures',
			'theme' => 'romero',
		),
		array(
			'url' => 'https://letsplaymars.wordpress.com/',
			'name' => 'MarsLetsPlay',
			'theme' => 'romero',
		),
		array(
			'url' => 'https://debbailey.co/',
			'name' => 'Deb Bailey',
			'theme' => 'romero',
		),
		array(
			'url' => 'https://robodudereview.wordpress.com/',
			'name' => 'Robodude Review',
			'theme' => 'romero',
		),


		// Monet.
		array(
			'url' => 'http://sonjavanvuure.com',
			'name' => 'Vuurig',
			'theme' => 'monet',
		),
		array(
			'url' => 'http://www.magicon.de/',
			'name' => 'Magicon',
			'theme' => 'monet',
		),
		array(
			'url' => 'https://prospectthepantry.com/',
			'name' => 'Prospect The Pantry',
			'theme' => 'monet',
		),
		array(
			'url' => 'https://kelleyeling.com/',
			'name' => 'Kelley Eling, Realtor',
			'theme' => 'monet',
		),
		array(
			'url' => 'https://cristinatorrecillacentroestetico.com/',
			'name' => 'Cristina Torrecilla Esthetic Center',
			'theme' => 'monet',
		),
		array(
			'url' => 'https://adicrafts.com/',
			'name' => 'Adicrafts',
			'theme' => 'monet',
		),
		array(
			'url' => 'https://nikkikphoto.com/',
			'name' => 'Nikki K Photo',
			'theme' => 'monet',
		),
		array(
			'url' => 'https://balbinarallyteam.com/',
			'name' => 'Rally Team Balbinette',
			'theme' => 'monet',
		),
		array(
			'url' => 'https://brookesemke.com/',
			'name' => 'Brooke Semke',
			'theme' => 'monet',
		),
		array(
			'url' => 'https://capturedbyvera.nl/',
			'name' => 'Captured By Vera',
			'theme' => 'monet',
		),
		array(
			'url' => 'https://olabonati.wordpress.com/',
			'name' => 'Ola Bonati',
			'theme' => 'monet',
		),
		array(
			'url' => 'http://baileyenglishstudio.com',
			'name' => 'Bailey English Studio',
			'theme' => 'monet',
		),


		// Exhibit.
		array(
			'url' => 'https://theroyalglasgowinstituteofthefinearts.co.uk/',
			'name' => 'The RGI',
			'theme' => 'exhibit',
		),
		array(
			'url' => 'https://frazershaw.wordpress.com/',
			'name' => 'Frazer Shaw',
			'theme' => 'exhibit',
		),
		array(
			'url' => 'https://drdianesanford.com/',
			'name' => 'Dr Diane Sanford',
			'theme' => 'exhibit',
		),
		array(
			'url' => 'https://benjaminjudge.com/',
			'name' => 'Benjamin Judge',
			'theme' => 'exhibit',
		),
		array(
			'url' => 'https://tanyacollins.club/',
			'name' => 'Tanya Collins',
			'theme' => 'exhibit',
		),
		array(
			'url' => 'https://amandaroseadams.com/',
			'name' => 'Amanda Rose Adams',
			'theme' => 'exhibit',
		),
		array(
			'url' => 'https://meganleung.com/',
			'name' => 'Megan Leung',
			'theme' => 'exhibit',
		),
		array(
			'url' => 'https://szsdesignandcrafts.com/',
			'name' => 'SZS Design and Crafts',
			'theme' => 'exhibit',
		),
		array(
			'url' => 'https://nutmegandwhimsy.com/',
			'name' => 'Nutmeg and Whimsy',
			'theme' => 'exhibit',
		),
		array(
			'url' => 'https://paproductdesign.wordpress.com/',
			'name' => 'Paul Annett',
			'theme' => 'exhibit',
		),
		array(
			'url' => 'https://fprecipe.com/',
			'name' => 'Food Porn Recipes',
			'theme' => 'exhibit',
		),


		// Puzzle.
		array(
			'url' => 'http://shouldigoseeit.com',
			'name' => 'Should I Go See It',
			'theme' => 'puzzle',
		),
		array(
			'url' => 'http://marocinstyle.com',
			'name' => 'Maroc in Style',
			'theme' => 'puzzle',
		),
		array(
			'url' => 'https://flossyphotography.wordpress.com',
			'name' => 'Flossy Photography',
			'theme' => 'puzzle',
		),
		array(
			'url' => 'http://leahpellegrini.com',
			'name' => 'Leah Pellegrini',
			'theme' => 'puzzle',
		),
		array(
			'url' => 'http://cincindos.com',
			'name' => 'Cincindos',
			'theme' => 'puzzle',
		),
		array(
			'url' => 'https://robinamer.com/',
			'name' => 'Robin Amer',
			'theme' => 'puzzle',
		),
		array(
			'url' => 'https://keepingsmall.wordpress.com/',
			'name' => 'Fewer, Better Things...',
			'theme' => 'puzzle',
		),
		array(
			'url' => 'https://worksdifferent.com/',
			'name' => 'Works Different',
			'theme' => 'puzzle',
		),
		array(
			'url' => 'https://nicennaughtyboutique.com/',
			'name' => 'Nine N Naughty',
			'theme' => 'puzzle',
		),
		array(
			'url' => 'https://dovediscoveries.wordpress.com/',
			'name' => 'Dove Discoveries',
			'theme' => 'puzzle',
		),
		array(
			'url' => 'https://henrystrong.net/',
			'name' => 'Henry Strong',
			'theme' => 'puzzle',
		),
		array(
			'url' => 'https://flossyphotography.wordpress.com/',
			'name' => 'Flossy Photography',
			'theme' => 'puzzle',
		),
		array(
			'url' => 'https://stephaniemcfarland.com/',
			'name' => 'Stephanie McFarland Photography',
			'theme' => 'puzzle',
		),
		array(
			'url' => 'https://hellosoulblog.wordpress.com/',
			'name' => 'Hello Soul',
			'theme' => 'puzzle',
		),


		// Opti.
		array(
			'url' => 'https://noisenation.wordpress.com',
			'name' => 'Noise Nation',
			'theme' => 'opti',
		),
		array(
			'url' => 'https://ballaratvocalise.wordpress.com',
			'name' => 'Vocalise',
			'theme' => 'opti',
		),
		array(
			'url' => 'https://bellacaledonia.wordpress.com',
			'name' => 'Bella Caledonia',
			'theme' => 'opti',
		),
		array(
			'url' => 'https://piedtype.com/',
			'name' => 'Pied Type',
			'theme' => 'opti',
		),
		array(
			'url' => 'http://theredphoenixapl.org/',
			'name' => 'The Red Phoenix',
			'theme' => 'opti',
		),
		array(
			'url' => 'https://postpioneer.wordpress.com/',
			'name' => 'The Pioneer',
			'theme' => 'opti',
		),
		array(
			'url' => 'https://newvinegrowing.wordpress.com/',
			'name' => 'Newvine Growing',
			'theme' => 'opti',
		),
		array(
			'url' => 'https://rozegolf.net/',
			'name' => 'Roze Golf',
			'theme' => 'opti',
		),
		array(
			'url' => 'https://minutohm.com/',
			'name' => 'Minuto HM',
			'theme' => 'opti',
		),
		array(
			'url' => 'https://childrensembassy.wordpress.com/',
			'name' => 'Childrens Embassy',
			'theme' => 'opti',
		),
		array(
			'url' => 'https://adivasihunkar.com/',
			'name' => 'Adivasi Hunkar',
			'theme' => 'opti',
		),
		array(
			'url' => 'https://highschooldebate.org/',
			'name' => 'Public Debate Program',
			'theme' => 'opti',
		),


		// Chronicle.
		array(
			'url' => 'https://ccommunity.wordpress.com',
			'name' => 'Comic Community',
			'theme' => 'chronicle',
		),
		array(
			'url' => 'https://culturaacasa.wordpress.com/',
			'name' => 'Cultura Acasa',
			'theme' => 'chronicle',
		),
		array(
			'url' => 'https://theabudhabipta.com/',
			'name' => 'The Abu Dhabi PTA',
			'theme' => 'chronicle',
		),
		array(
			'url' => 'https://transitmag.no/',
			'name' => 'Transit magasin',
			'theme' => 'chronicle',
		),
		array(
			'url' => 'https://railturkey.org/',
			'name' => 'Rail Turkey',
			'theme' => 'chronicle',
		),
		array(
			'url' => 'https://pinoyontheroad.com/',
			'name' => 'Pinoy on the Road',
			'theme' => 'chronicle',
		),
		array(
			'url' => 'https://eurovisionireland.net/',
			'name' => 'Eurovison Ireland',
			'theme' => 'chronicle',
		),
		array(
			'url' => 'https://isastudentblog.wordpress.com/',
			'name' => 'ISA Student Blog',
			'theme' => 'chronicle',
		),
		array(
			'url' => 'https://laughoutlondoncomedyclub.co.uk/',
			'name' => 'Laugh Out London',
			'theme' => 'chronicle',
		),
		array(
			'url' => 'https://casacurutchet.net/',
			'name' => 'Casa Curutchet',
			'theme' => 'chronicle',
		),
		array(
			'url' => 'https://keithonfood.com/',
			'name' => 'Keith on Food',
			'theme' => 'chronicle',
		),
		array(
			'url' => 'https://chasingpisces.com/',
			'name' => 'Chasing Pisces',
			'theme' => 'chronicle',
		),
		array(
			'url' => 'https://keithonfood.com/',
			'name' => 'Keith on Food',
			'theme' => 'chronicle',
		),


		// Broadsheet.
		array(
			'url' => 'https://jmmswordandshield.com/',
			'name' => 'JMM Sword and Shield',
			'theme' => 'broadsheet',
		),
		array(
			'url' => 'https://diningdevon.com/',
			'name' => 'Dining Devon',
			'theme' => 'broadsheet',
		),
		array(
			'url' => 'https://prialterno.wordpress.com/',
			'name' => 'Tan Boy',
			'theme' => 'broadsheet',
		),
		array(
			'url' => 'https://worldofentertainment.info/',
			'name' => 'World of Entertainment',
			'theme' => 'broadsheet',
		),
		array(
			'url' => 'https://interpretechinois.net/',
			'name' => 'Chinese Interpreter',
			'theme' => 'broadsheet',
		),
		array(
			'url' => 'https://miniarmour.net/',
			'name' => 'Mini Armour',
			'theme' => 'broadsheet',
		),
		array(
			'url' => 'https://journalcinephilelyon.com/',
			'name' => 'Journal Cinephile Lyonnais',
			'theme' => 'broadsheet',
		),
		array(
			'url' => 'http://orangecountytribune.com',
			'name' => 'Orange County Tribune',
			'theme' => 'broadsheet',
		),
		array(
			'url' => 'https://shssentinel.wordpress.com',
			'name' => 'The Sentinel',
			'theme' => 'broadsheet',
		),
		array(
			'url' => 'http://gentlemansportion.com',
			'name' => 'Gentlemans Portion',
			'theme' => 'broadsheet',
		),
		array(
			'url' => 'http://journal.probeinternational.org',
			'name' => 'Probe International',
			'theme' => 'broadsheet',
		),
		array(
			'url' => 'http://thebannercsi.com',
			'name' => 'The Banner',
			'theme' => 'broadsheet',
		),


		// Traveler.
		array(
			'url' => 'https://michelbrard.wordpress.com/',
			'name' => 'Michael Brard',
			'theme' => 'traveler',
		),
		array(
			'url' => 'https://clynam.wordpress.com/',
			'name' => 'Africa Unplugged',
			'theme' => 'traveler',
		),
		array(
			'url' => 'https://chanaplum.com/',
			'name' => 'Chanaplum',
			'theme' => 'traveler',
		),
		array(
			'url' => 'https://suzieross.wordpress.com/',
			'name' => 'Paper and Pictures',
			'theme' => 'traveler',
		),
		array(
			'url' => 'https://lescapricieuses.wordpress.com/',
			'name' => 'The Capricious',
			'theme' => 'traveler',
		),
		array(
			'url' => 'https://reshapingreality.org/',
			'name' => 'Reshaping Reality',
			'theme' => 'traveler',
		),
		array(
			'url' => 'https://abayaaddict.wordpress.com/',
			'name' => 'Abaya Addict',
			'theme' => 'traveler',
		),
		array(
			'url' => 'https://maky.com/',
			'name' => 'Maky',
			'theme' => 'traveler',
		),


		// Label.
		array(
			'url' => 'https://littlesequoia.blog/',
			'name' => 'Little Sequoia',
			'theme' => 'label',
		),
		array(
			'url' => 'https://outrasluzes.blog/',
			'name' => 'Outras Luzes',
			'theme' => 'label',
		),
		array(
			'url' => 'https://jennastewart.ca/',
			'name' => 'Jenna Stewart',
			'theme' => 'label',
		),
		array(
			'url' => 'https://connectedcorners.com/',
			'name' => 'Connected Corners',
			'theme' => 'label',
		),
		array(
			'url' => 'https://erlendropstad.no/',
			'name' => 'Erland Ropstad',
			'theme' => 'label',
		),
		array(
			'url' => 'https://terracottadigital.com/',
			'name' => 'Terracotta Digital',
			'theme' => 'label',
		),
		array(
			'url' => 'https://msloud.net/',
			'name' => 'Ms Loud',
			'theme' => 'label',
		),
		array(
			'url' => 'https://sarahscookery.com/',
			'name' => 'Sarahs Cookery',
			'theme' => 'label',
		),
		array(
			'url' => 'https://livingthekingdom.org/',
			'name' => 'Living the Kingdom',
			'theme' => 'label',
		),
		array(
			'url' => 'https://palmasonblog.wordpress.com/',
			'name' => 'Ibyrgid',
			'theme' => 'label',
		),
		array(
			'url' => 'https://mistandether.wordpress.com/',
			'name' => 'Mist and Ether',
			'theme' => 'label',
		),
		array(
			'url' => 'https://guriharam.no/',
			'name' => 'Guri Haram',
			'theme' => 'label',
		),


	);

	$processed = array();

	foreach ( $websites as $site ) {

		$key = slugify( $site['name'] );

		// preview url
		$site[ 'url-preview' ] = path( 'showcase-preview/' . $key . '/' );
		$site[ 'showcase-target' ] = '';

		if ( strpos( $site[ 'url' ], 'http://' ) !== false ) {

			$site[ 'url-preview' ] = $site[ 'url' ];
			$site[ 'showcase-target' ] = '_blank';

		}

		// Preview url.
		$site[ 'url-showcase' ] = path( 'theme-showcase/' . $site['theme'] . '/#' . $key );

		// iframe url.
		$site[ 'url-iframe' ] = $site[ 'url' ];

		// Add theme slug to tags.
		$site[ 'tags' ][] = $site[ 'theme' ];

		// Setup site screenshots.
		$site[ 'image-url' ] = site_screenshot( $site['url'] );

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

		shuffle( $websites );
		$tag_websites = array_slice( $websites, 0, $limit );

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
