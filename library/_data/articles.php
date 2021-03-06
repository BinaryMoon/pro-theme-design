<?php

/**
 *
 */
function get_article_data() {

	$articles = array(

		'make-money-with-wordpress' => array(
			'name' => 'Make Money With WordPress',
			'date' => '21st March 2019',
			'prefix' => '0001',
			'description' => 'A variety of suggestions on how to earn money from your favorite open source software.',
			'icon' => 'commerce-cash',
			'og-image' => 'money.jpg',
		),

		'be-a-wordpress-implementer' => array(
			'name' => 'Become a WordPress Implementer',
			'date' => '5th February 2016',
			'prefix' => '0002',
			'description' => 'The differences between WordPress Implementors and WordPress Developers.',
			'icon' => 'app-wrench',
			'og-image' => 'craft.jpg',
		),

		'earn-more-as-a-wordpress-freelancer' => array(
			'name' => 'Earn more as a WordPress Freelancer',
			'date' => '24th March 2016',
			'prefix' => '0003',
			'description' => 'Increase your income whilst keeping your clients happy.',
			'icon' => 'smiley-smile',
			'og-image' => 'cowork.jpg',
		),

		'make-beautiful-cohesive-wordpress-designs' => array(
			'name' => 'Make Beautiful WordPress Designs',
			'date' => '4th November 2020',
			'prefix' => '0005',
			'description' => 'Tips and Tricks to improve how you design WordPress things.',
			'icon' => 'app-paintbrush',
			'og-image' => 'hello-beautiful.jpg',
		),

		'start-video-game-blog' => array(
			'name' => 'Start a Video Game Blog',
			'date' => '9th June 2017',
			'prefix' => '0010',
			'description' => 'A comprehensive tutorial for starting a video gaming blog.',
			'icon' => 'app-scroll',
			'og-image' => 'gaming.jpg',
		),

		'make-wordpress-multilingual' => array(
			'name' => 'Use a WordPress Multi Language Plugin',
			'date' => '23rd December 2018',
			'prefix' => '0011',
			'description' => 'Use the WeGlot plugin to easily translate your WordPress Themes.',
			'icon' => 'app-listen',
			'og-image' => 'gaming.jpg',
		),

	);

	if ( 'dev' == ENV ) {

		$draft_articles = array(

		'develop-with-wordpress' => array(
			'name' => 'Improve Your WordPress Development',
			'date' => '26th February 2016',
			'prefix' => '0004',
			'description' => 'Tips and Tricks to improve how you build things with WordPress.',
			'icon' => 'computer-laptop',
		),

		'well-being-for-web-developers' => array(
			'name' => 'Stay healthy as a WordPress Developer',
			'date' => '26th February 2016',
			'prefix' => '0006',
			'description' => 'Tips and Tricks to improve how you build things with WordPress.',
			'icon' => 'shape-heart',
		),

		'choose-a-target-audience' => array(
			'name' => 'Choose a Target Audience',
			'date' => '26th February 2016',
			'prefix' => '0008',
			'description' => 'Tips and Tricks to improve how you build things with WordPress.',
			'icon' => 'app-user',
		),

		);

		$articles = array_merge( $articles, $draft_articles );

	}


	// process them
	$processed = array();

	foreach( $articles as $key => $article ) {

		$article[ 'url' ] = path( 'how-to/' . $key . '/' );
		$article[ 'path' ] = $article[ 'prefix' ] . '-' . $key;

		if ( empty( $article['icon'] ) ) {
			$article['icon'] = 'file-text-o';
			$article['icon'] = '';
		}

		$processed[ $key ] = $article;

	}

	return $processed;

}


/**
 * Create an unordered list showing the available docs
 */
function article_list( $limit = 5, $page = 0 ) {

	$docs = get_article_data();

	// reduce list to just list of content from specified page
	$docs = array_slice( $docs, ( $page * $limit ), $limit );

	if ( $doc_list ) {
		echo '<ul>';
		foreach( $doc_list as $d ) {
?>
	<li><a href="<?php echo $d[ 'url' ]; ?>"><?php echo $d[ 'name' ]; ?></a></li>
<?php
		}
		echo '</ul>';

	}

}


/**
 * Check to see if the specified page exists
 */
function article_get( $page ) {

	$docs = get_article_data();

	if ( isset( $docs[ $page ] ) ) {
		return $docs[ $page ];
	}

	return false;

}


/**
 * get the name of the specified page
 */
function article_page_name( $page ) {

	$docs = get_article_data();

	if ( ! empty( $docs[ $page ] ) ) {
		return $docs[ $page ][ 'name' ];
	}

	return '';

}


/**
 * Create a list of articles for the sitemap.
 */
function articles_sitemap() {

	$articles = get_article_data();

	foreach ( $articles as $article ) {
?>
	<li><a href="<?php echo $article[ 'url' ]; ?>"><?php echo $article['name']; ?></a></li>
<?php
	}

}


/**
 * Display an article using markdown.
 * Uses the parsedown processor.
 *
 * @see http://parsedown.org/
 * @param  [type] $article [description]
 * @return [type]          [description]
 */
function article_display( $article ) {

	include_once( 'library/parsedown.php' );
	include_once( 'library/parsedownExtra.php' );
	include_once( 'library/parsedownPTD.php' );

	$Parsedown = new ParsedownPTD();

	$article_contents = file_get_contents( 'views/_articles/' . $article . '.md' );

	echo $Parsedown->text( $article_contents );

}
