<?php
/**
 * Theme tag data and related functions.
 *
 * @package ptd
 */

/**
 * Return tag data for theme types.
 *
 * @return array
 */
function get_theme_tags_data() {

	$tags = array(

		'accessible' => array(
			'type' => 'feature',
			'description' => 'Web accessibility means making websites as easy to use as possible for people with disabilities. These are our most accessible WordPress themes and have been independently reviewed by a web accessibility expert to ensure they meet the highest standards.',
			'og-image' => 'people.jpg',
		),
		'blog' => array(
			'description' => 'At its core, WordPress is a blogging platform, and these blog WordPress themes will give you the perfect place to find a voice online. All these blog WordPress themes are responsive, easy to use and easy to customize.',
			'og-image' => 'blog.jpg',
		),
		'business' => array(
			'description' => 'Get a professional look for your business’ online presence with one of these business WordPress themes. As a small business ourselves, we understand what business websites need and have created a library of WordPress themes that are responsive, easy to use and easy to customize. Choose one of these business WordPress themes for your website and you’ll have a website which can impress customers, get more leads and bring in more sales.',
			'og-image' => 'business.jpg',
		),
		'fashion' => array(
			'description' => 'Make your fashion or lifestyle site stand out from the crowd with one of our fashion WordPress themes. Pair your great content with one of our stunning designs and you’ll have a recipe for success.',
			'og-image' => 'fashion.jpg',
		),
		'free' => array(
			'type' => 'feature',
			'description' => '',
			'og-image' => 'free.jpg',
		),
		'journal' => array(
			'description' => 'Share your thoughts, travels and ideas with these journal WordPress themes. The journal style brings a scrapbook style into the digital age. All journal WordPress themes are easy to use and easy to setup: just add your content.',
			'og-image' => 'journal.jpg',
		),
		'magazine' => array(
			'description' => 'WordPress magazine themes are perfect for websites with lots of content to show off. All these magazine themes are packed with features, easy-to-use and easy-to-customize, so just choose the look which best suits your site.',
			'og-image' => 'magazine.jpg',
		),
		'motor-sports' => array(
			'description' => 'Start your engines! These motorsports WordPress themes are magazine-style layouts perfectly suited to motorsport websites. The heavy emphasis on imagery lets you entice your readers and bold color schemes help your brand shine through.',
			'og-image' => 'motor.jpg',
		),
		'newspaper' => array(
			'description' => 'You heard it here first! Get the perfect look for your online newspaper with one of these newspaper WordPress themes. Show off a huge amount of content from a variety of sources whilst maintaining a superb user experience. Impress your readers and pick up one of our newspaper WordPress themes today.',
			'og-image' => 'newspaper.jpg',
		),
		'photography' => array(
			'description' => 'Show off your photos with one of these incredible photography WordPress themes. Your photography goes front-and-centre in these themes; visitors will love how the theme gets out the way to put the focus on your work. All these photography WordPress themes are fully responsive, easy-to-use and easy-to-setup.',
			'og-image' => 'photography.jpg',
		),
		'portfolio' => array(
			'description' => 'Show off your work one of our beautiful portfolio WordPress themes. Prospective clients will love how our themes put a focus on your work and let them get the information they need quickly. Our themes are fully responsive, easy-to-use and easy-to-setup, so you’ll love them too.',
			'og-image' => 'portfolio.jpg',
		),
		'travel' => array(
			'description' => 'Share your adventures with one of our travel WordPress themes. Whether you’re sharing thoughts and photos from a single trip or travelling long term, your readers will love how easy to use and navigate theses travel WordPress themes are.',
			'og-image' => 'travel.jpg',
		),
		'tumblog' => array(
			'description' => 'Share text, images, video – and more – with a flexible tumblog WordPress theme (“tumblog” is where Tumblr gets its name from). These themes respond to the type of content they’re displaying, so share whatever you want and it’ll look 🔥🔥🔥',
			'og-image' => 'cowork.jpg',
		),
		'video-game' => array(
			'description' => 'We love video games, and these video game WordPress themes come packed with features perfect for video game sites, whether they’re reviews, news or fan focussed. The big, bold imagery makes for a beautiful magazine-style layout which puts the focus on the games. Your readers will love how easy to use and navigate these video game WordPress themes are, and you’ll love how intuitive and straightforward the themes are to set up.',
			'og-image' => 'video-game.jpg',
		),

	);

	$processed_tags = array();

	foreach( $tags as $slug => $tag ) {

		if ( empty( $tag['type'] ) ) {
			$tag['type'] = 'theme';
		}

		$processed_tags[ $slug ] = $tag;

	}

	return $processed_tags;

}


/**
 * Get the data for the specified tag, or return null.
 *
 * @param  string $tag Tag to search for.
 * @return array | null
 */
function get_theme_tag_data( $tag ) {

	$tags = get_theme_tags_data();

	if ( isset( $tags[ $tag ] ) ) {
		return $tags[ $tag ];
	}

	return null;

}
