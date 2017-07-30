<?php
/**
 * Some extra extensions for parsedown so that I an do custom things.
 *
 * @package ptd
 */

class ParsedownPTD extends ParsedownExtra
{

	function __construct() {

		// New inline elements.
		$this->InlineTypes['{'][]= 'LocalSVG';

		$this->inlineMarkerList .= '{';

	}

	// Add inline SVG.
	protected function inlineLocalSVG( $excerpt ) {

		if ( preg_match( '/^{svg:(.*?)}/', $excerpt['text'], $matches ) ) {

			// Get svg properties.
			// [0] = svg name.
			// [1] = svg size.
			$properties = explode( ',', $matches[1] );

			// If size is set then pass that, else just grab the default.
			if ( isset( $properties[1] ) ) {
				$markup = get_svg( $properties[0], $properties[1] );
			} else {
				$markup = get_svg( $properties[0] );
			}

			return array(
				'extent' => strlen( $matches[0] ),
				'markup' => $markup,
			);

		}

	}


	/**
	 * Custom Link modifications.
	 *
	 * @param  [type] $excerpt [description]
	 * @return [type]          [description]
	 */
	protected function inlineLink( $excerpt ) {

		$link = parent::inlineLink( $excerpt );

		// If the link is null then return to sender.
		if ( ! $link ) {
			return $link;
		}

		// Add scroll to links that point to the same page.
		if ( '#' === $link['element']['attributes']['href'][0] ) {
			$link['element']['attributes']['class'] = 'scroll-to';
		}

		// Replace MANAGE_WP with url.
		$link['element']['attributes']['href'] = str_replace( 'MANAGE_WP', MANAGE_WP, $link['element']['attributes']['href'] );

		// Replace JETPACK with url.
		$link['element']['attributes']['href'] = str_replace( 'JETPACK', JETPACK, $link['element']['attributes']['href'] );

		// Replace WORDPRESS_COM with url.
		$link['element']['attributes']['href'] = str_replace( 'WORDPRESS_COM', WORDPRESS_COM, $link['element']['attributes']['href'] );

		// Replace path: with relative path value.
		if ( 'path:' === substr( $link['element']['attributes']['href'], 0, 5 ) ) {
			$link['element']['attributes']['href'] = path( substr( $link['element']['attributes']['href'], 5 ) );
		}

		return $link;

	}


	/**
	 * Custom image links
	 *
	 * @param  [type] $excerpt [description]
	 * @return [type]          [description]
	 */
	protected function inlineImage( $excerpt ) {

		$image = parent::inlineImage( $excerpt );

		// If there's no image then return to sender.
		if ( ! $image ) {
			return $image;
		}

		// Replace path: with relative path value.
		if ( 'devices:' === substr( $image['element']['attributes']['src'], 0, 8 ) ) {
			$image['element']['attributes']['src'] = image_path( 'theme-devices/' . substr( $image['element']['attributes']['src'], 8 ) );
		}

		// Replace path: with relative path value.
		if ( 'article-image:' === substr( $image['element']['attributes']['src'], 0, 14 ) ) {
			$image['element']['attributes']['src'] = image_path( 'articles/' . substr( $image['element']['attributes']['src'], 14 ) );
		}

		// echo '<pre>';
		// var_dump( $image );
		// echo '</pre>';

		return $image;

	}

}
