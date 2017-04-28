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
			'description' => 'We make all of our themes as useable as possible, however these themes in particular have been independently accessibility reviewed.',
			'og-image' => 'people.jpg',
		),
		'video-game' => array(
			'description' => 'Video games are awesome, these themes were designed specifically for video game magazines. I even named them after famous game developers.',
			'og-image' => 'video-game.jpg',
		),

	);

	return $tags;

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
