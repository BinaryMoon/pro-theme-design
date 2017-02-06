<?php

/**
 * Homepage
 */
Flight::route( '/', function() {

	site_title( 'Pro Theme Design - Professional WordPress Themes' );
	site_description( 'Join over <strong>' . paid_customers() . '</strong> happy WordPress themers.' );

	$themes = array_slice( get_theme_data(), 0, 4 );

	Flight::render(
		'home.php',
		array(
			'themes' => $themes,
		)
	);

} );


/**
 * Tools Pages
 */
Flight::route( '/tools/(@tool)/', function( $tool = '' ) {

	$view = 'tools.php';
	$layout = 'index.php';
	$tool_data = tool_group( 'tool' );

	site_title( 'Pro Theme Design Handy Tools' );
	site_description( 'Handy Tools to <strong>Make a Web Designers Job Easier</strong>.' );
	site_breadcrumb_add( 'Tools', 'tools/' );

	site_page_nav_add( 'Tools', 'tools/' );
	site_page_nav_add( 'Resources', 'tools/resources/' );
	site_page_nav_add( 'Internal', 'tools/internal/' );

	if ( ! empty( $tool ) ) {

		// Is it a tool?
		if ( $tool_data = tool_get( $tool ) ) {

			site_title( $tool_data['name'] . ' - Pro Theme Design' );
			site_description( $tool_data['description'] );

			site_breadcrumb_add( $tool_data['name'], 'tools/' . $tool . '/' );

			$layout = '_' . $tool . '/index.php';

			if ( isset( $tool_data['view'] ) ) {
				$view = $tool_data['view'];
			}
		}

		// Is it a tool group?
		if ( empty( $tool_data ) && $tool_data = tool_group( $tool ) ) {

			site_breadcrumb_add( $tool_data['title'], 'tools/' . $tool . '/' );

		}

		// No data.
		if ( empty( $tool_data ) ) {

			Flight::notFound();

		}
	}

	Flight::render(
		$view,
		array(
			'tool' => $tool_data,
			'layout' => $layout,
			'slug' => $tool,
		)
	);

} );


/**
 * Theme Club
 */
if ( ! DISABLE_THEME_CLUB ) {

	Flight::route( '/theme-club/', function() {

		site_title( 'WordPress Themes Club' );
		site_description( 'Join over <strong>' . paid_customers() . '</strong> happy WordPress themers.' );

		site_enable_purchase();

		Flight::render(
			'theme-club.php'
		);

	} );

}


/**
 * Theme
 */
Flight::route( '/theme/(@theme)/', function( $theme = '' ) {

	$theme_data = array();
	$themes = array();

	if ( ! empty( $theme ) && $theme_data = themes_get( $theme ) ) {

		$themes = get_theme_data();
		site_title( $theme_data['name'] . ' WordPress Theme' );
		site_description( $theme_data['short_description'] );

	} else {

		Flight::notFound();

	}

	//site_popover( true );

	site_meta( 'twitter:card', 'product' );
	site_meta( 'og:type', 'product' );

	site_meta_image( image_path( 'theme-devices/' . $theme_data['image'] ) );

	if ( ! empty( $theme_data['url-wporg'] ) ) {
		site_meta( 'og:price:amount', str_replace( '$', '', $theme_data['price-wporg'] ) );
		site_meta( 'og:price:currency', 'USD' );
		site_meta( 'twitter:data1', $theme_data['price-wporg'] );
		site_meta( 'twitter:label1', 'Price' );
	}

	site_enable_purchase();

	Flight::render(
		'theme.php',
		array(
			'theme' => $theme_data,
			'theme_name' => $theme,
			'themes' => $themes,
		)
	);

} );


/**
 * Theme
 */
Flight::route( '/theme-question/(@theme)/', function( $theme = '' ) {

	$theme_data = array();

	if ( ! empty( $theme ) && $theme_data = themes_get( $theme ) ) {

		site_title( 'Question about' . $theme_data['name'] . ' WordPress Theme' );
		site_description( $theme_data['short_description'] );

	} else {

		Flight::notFound();

	}

	site_meta_image( image_path( 'theme-devices/' . $theme_data['image'] ) );

	Flight::render(
		'pre-sales.php',
		array(
			'theme_name' => $theme_data['name'],
			'theme_slug' => $theme,
		)
	);

} );


/**
 * Themes
 */
Flight::route( '/themes/(@tag)/', function( $tag = '' ) {

	if ( empty( $tag ) ) {
		$tag = 'wordpress.org';
	}

	$themes = themes_by_tag( $tag );

	if ( ! $themes ) {

		Flight::notFound();

	}

	site_title( ucwords( $tag ) . ' Themes' );
	site_description( 'Awesome ' . ucwords( $tag ) . ' WordPress themes for <strong>self hosted sites</strong>!' );

	site_page_nav_add( 'All', 'themes/' );
	site_page_nav_add( 'Magazine', 'themes/magazine/' );
	site_page_nav_add( 'Portfolio', 'themes/portfolio/' );
	site_page_nav_add( 'Photography', 'themes/photography/' );
	site_page_nav_add( 'Blog', 'themes/blog/' );
	site_page_nav_add( 'Free', 'themes/free/' );

	site_enable_purchase();

	Flight::render(
		'themes.php',
		array(
			'themes' => $themes,
			'tag' => $tag,
		)
	);

} );


/**
 * Theme Showcase
 */
Flight::route( '/theme-showcase/(@tag)/', function( $tag = '' ) {

	$title = 'WordPress Themes Showcase';
	$websites = array();

	site_page_nav_add( 'Recent', 'theme-showcase/' );
	site_page_nav_add( 'Featured', 'theme-showcase/featured/' );
	site_page_nav_add( 'Puzzle', 'theme-showcase/puzzle/' );
	site_page_nav_add( 'Monet', 'theme-showcase/monet/' );
	site_page_nav_add( 'Romero', 'theme-showcase/romero/' );
	site_page_nav_add( 'Chronicle', 'theme-showcase/chronicle/' );
	site_page_nav_add( 'Broadsheet', 'theme-showcase/broadsheet/' );
	site_page_nav_add( 'Opti', 'theme-showcase/opti/' );

	if ( website_tag_exists( $tag ) ) {

		$websites = website_get_by_tag( $tag );

		if ( ! empty( $tag ) ) {
			$title = sprintf( '%s Themes: WordPress Themes Showcase', ucwords( $tag ) );
		}
	} else {

		Flight::notFound();

	}

	site_title( $title );
	site_description( 'A selection of the <strong>thousands of awesome sites</strong> our customers have built!' );

	site_enable_purchase();

	Flight::render(
		'showcase.php',
		array(
			'websites' => $websites,
			'tag' => $tag,
		)
	);

} );


/**
 * Feedback
 */
Flight::route( '/feedback/(@type)/', function( $type = '' ) {

	site_title( 'Feedback' );

	if ( empty( $type ) ) {
		$type = 'default';
	}

	$file = site_view_path( '_feedback/' . $type . '.html' );

	if ( ! file_exists( $file ) ) {
		Flight::notFound();
	}

	Flight::render(
		'feedback.php',
		array(
			'questions' => $file,
		)
	);

} );


/**
 * Search
 */
Flight::route( '/search/', function() {

	site_title( 'Search' );

	Flight::render(
		'search.php'
	);

} );

/**
 * Articles Archive
 */
Flight::route( '/articles/(@page_number)/', function( $page_number = 0 ) {

	site_title( 'Articles' );

	Flight::render(
		'articles.php',
		array(
			'articles' => get_article_data(),
		)
	);

} );


/**
 * Single Article Page
 */
Flight::route( '/how-to/(@page)/', function( $page = '' ) {

	$article = array();

	site_breadcrumb_add( 'Articles', 'articles/' );

	if ( $article = article_get( $page ) ) {

		site_breadcrumb_add( $article['name'], 'how-to/' . $page . '/' );

		site_title( $article['name'] );

		if ( ! empty( $article['description'] ) ) {

			site_description( $article['description'] );

		}
	} else {

		Flight::notFound();

	}

	Flight::render(
		'article.php',
		array(
			'article' => $article,
			'articles' => get_article_data(),
		)
	);

} );


/**
 * Support
 */
Flight::route( '/documentation/(@type)(/@page)/', function( $type = '', $page = '' ) {

	$layout = '';

	site_breadcrumb_add( 'Support', 'documentation/' );

	if ( empty( $type )  && empty( $page ) ) {
		$layout = '_support/index.php';
	}

	if ( documentation_type_exists( $type ) ) {

		$layout = '_support/archive.php';

		site_breadcrumb_add( documentation_type_name( $type ), 'documentation/' . $type . '/' );
		site_title( sprintf( '%s Help - Pro Theme Design', documentation_type_name( $type ) ) );

		if ( documentation_page_exists( $page, $type ) ) {

			$layout = '_support/type-' . $type . '.php';
			$page_name = documentation_page_property( $page, 'name' );
			$page_description = documentation_page_property( $page, 'description' );

			site_breadcrumb_add( $page_name, 'documentation/' . $type . '/' . $page . '/' );
			site_title( sprintf( '%s Help', $page_name ) );

			if ( ! empty( $page_description ) ) {
				site_description( 'Documentation: ' . $page_description );
			}
		} else {

			if ( ! empty( $page ) ) {
				$page = '';
				$layout = '';
			}
		}

	} else {

		// Reset just in case.
		$type = '';
		$page = '';

	}

	if ( empty( $layout ) ) {

		Flight::notFound();

	}

	site_popover( true );

	Flight::render(
		'documentation.php',
		array(
			'title' => 'Theme Documentation',
			'layout' => $layout,
			'type' => $type,
			'page' => $page,
		)
	);

} );


/**
 * Theme preview
 */
Flight::route( '/theme-preview/(@theme)/', function( $theme_slug = '' ) {

	$template = 'theme-preview.php';
	$theme = array();

	if ( ! $theme = themes_get( $theme_slug ) ) {

		Flight::notFound();

	}

	site_title( $theme['name'] . ' Theme Preview' );

	site_enable_purchase();

	Flight::render(
		$template,
		array(
			'theme_slug' => $theme_slug,
			'theme' => $theme,
		)
	);

} );


/**
 * website demos
 */
Flight::route( '/showcase-preview/(@site)/', function( $site = '' ) {

	$template = 'showcase-preview.php';

	if ( ! website_exists( $site ) ) {

		Flight::notFound();

	}

	$site_data = website_get( $site );
	site_title( 'WordPress Theme Preview - ' . $site_data['name'] );
	site_description( 'Preview the WordPress Theme on ' . $site_data['name'] );

	site_enable_purchase();

	Flight::render(
		$template,
		array(
			'site' => $site,
			'site_data' => $site_data,
		)
	);

} );


/**
 * Plugin Pages
 */
Flight::route( '/wordpress-plugins/(@tag)/', function( $tag = '' ) {

	$view = 'plugins.php';

	site_title( 'Recommended WordPress Plugins' );
	site_description( 'Plugins for creating the perfect WordPress site.' );

	site_page_nav_add( 'Our Plugins', 'wordpress-plugins/' );
	site_page_nav_add( 'Supported Plugins', 'wordpress-plugins/supported/' );

	if ( empty( $tag ) ) {

		$tag = 'ours';

	}

	if ( ! $plugins = plugins_get_by_tag( $tag ) ) {

		Flight::notFound();

	}

	Flight::render(
		$view,
		array(
			'tag' => $tag,
			'plugins' => $plugins,
		)
	);

} );


/**
 * 404
 */
Flight::map( 'notFound', function() {

	site_title( '404 - not found :(' );

	$request = Flight::request();

	// See if a page exists.
	if ( $page_info = page_exists( $request->url ) ) {

		site_title( $page_info['title'] );
		if ( null !== $page_info['description'] ) {
			site_description( $page_info['description'] );
		}

		Flight::render(
			$page_info['view']
		);

		die();

	}

	// See if there's a valid permanent redirect, and if there is send the user to the new location.
	if ( $redirect_url = redirect_destination( $request->url ) ) {

		Flight::redirect( $redirect_url, 301 );
		die();

	}

	header( 'HTTP/1.0 404 Not Found' );

	// Site_header_title( '404 :(' );.
	site_description( '<a href="' . path() . '">Visit the homepage <i class="fa fa-arrow-right"></i></a>' );

	Flight::render(
		'404.php'
	);

	die();

} );
