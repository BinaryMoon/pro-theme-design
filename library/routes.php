<?php
/**
 * Site routes.
 *
 * @package ptd
 */

/**
 * Homepage
 */
Flight::route( '/', function() {

	site_title( 'Pro Theme Design – Professional Quality Premium WordPress' );
	site_description( 'Join thousands of customers who have trusted Pro Theme Design to deliver the highest quality premium WordPress themes, since 2007.' );

	$all_themes = get_theme_data();

	$themes = array_slice( $all_themes, 0, 4 );

	Flight::render(
		'home.php',
		array(
			'themes' => $themes,
			'themes_count' => count( $all_themes ),
			'themes_intro' => array(
				[
					'url' => path( 'theme/label/' ),
					'image' => 'label.png',
					'name' => 'Label',
				],
				[
					'url' => path( 'theme/carmack/' ),
					'image' => 'carmack.png',
					'name' => 'Carmack',
				],
				[
					'url' => path( 'theme/exhibit/' ),
					'image' => 'exhibit.png',
					'name' => 'Exhibit',
				],
				[
					'url' => path( 'theme/romero/' ),
					'image' => 'romero.png',
					'name' => 'Romero',
				],
				[
					'url' => path( 'theme/puzzle/' ),
					'image' => 'puzzle.png',
					'name' => 'Puzzle',
				],
				[
					'url' => path( 'theme/chronicle/' ),
					'image' => 'chronicle.png',
					'name' => 'Chronicle',
				],
				[
					'url' => path( 'theme/monet/' ),
					'image' => 'monet.png',
					'name' => 'Monet',
				],
			),
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
		$tool_data = tool_get( $tool );

		if ( $tool_data ) {

			site_title( $tool_data['name'] . ' - Pro Theme Design' );
			site_description( $tool_data['description'] );

			site_breadcrumb_add( $tool_data['name'], 'tools/' . $tool . '/' );

			$layout = '_' . $tool . '/index.php';

			if ( isset( $tool_data['view'] ) ) {
				$view = $tool_data['view'];
			}

			if ( $tool_data['og-image'] ) {
				site_meta_image( $tool_data['og-image'] );
			}
		}

		// Is it a tool group?
		if ( empty( $tool_data ) ) {

			$tool_data = tool_group( $tool );
			if ( $tool_data ) {

				site_breadcrumb_add( $tool_data['title'], 'tools/' . $tool . '/' );

			}
		}

		// No data.
		if ( empty( $tool_data ) ) {

			Flight::notFound();

		}
	} // End if().

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
 * Theme
 */
Flight::route( '/theme/(@theme)/', function( $theme = '' ) {

	$theme_data = array();
	$themes = array();

	if ( ! empty( $theme ) && $theme_data = themes_get( $theme ) ) {

		$themes = get_theme_data();

		// Set default page title for each theme.
		site_title( $theme_data['name'] . ' WordPress Theme' );

		// Set a custom title if available.
		if ( ! empty( $theme_data['title'] ) ) {
			site_title( $theme_data['title'] );
		}

		// Set a theme description.
		site_description( $theme_data['short_description'] );

		if ( ! empty( $theme_data['meta_description' ] ) ) {
			site_description( $theme_data['meta_description'] );
		}

	} else {

		Flight::notFound();

	}

	//site_popover( true );

	site_meta( 'twitter:card', 'product' );
	site_meta( 'og:type', 'product' );

	site_meta_image( 'https://prothemedesign.com' . image_path( 'theme-devices/' . $theme_data['image'] ), true );

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

	$themes_title = 'Professional';

	if ( $tag !== 'wordpress.org' ) {

		$themes_title = get_theme_tag_name( $tag );

	}

	site_title( 'Best ' . $themes_title . ' WordPress Themes ' . date( 'Y' ) );

	site_description( 'Choose one of the best ' . ucwords( $tag ) . ' WordPress themes of ' . date( 'Y' ) . ' and make your site stand out from the crowd. Easy setup, responsive design included as standard.' );

	site_page_nav_add( 'All', 'themes/' );

	// If not one of the hardcoded tags then list the tag.
	if ( ! in_array( $tag, array( 'magazine', 'portfolio', 'photography', 'blog', 'free', 'wordpress.org' ), true ) ) {
		site_page_nav_add( $themes_title, 'themes/' . $tag . '/' );
	}

	site_page_nav_add( 'Magazine', 'themes/magazine/' );
	site_page_nav_add( 'Portfolio', 'themes/portfolio/' );
	site_page_nav_add( 'Photography', 'themes/photography/' );
	site_page_nav_add( 'Blog', 'themes/blog/' );
	site_page_nav_add( 'Free', 'themes/free/' );

	// Get theme tag info.
	$theme_tag_data = get_theme_tag_data( $tag );
	$theme_tag_description = '';

	if ( $theme_tag_data ) {

		site_meta_image( $theme_tag_data['og-image'] );
		$theme_tag_description = $theme_tag_data['description'];

	}

	Flight::render(
		'themes.php',
		array(
			'themes' => $themes,
			'themes_title' => $themes_title,
			'theme_tags' => get_theme_tags(),
			'theme_tag_description' => $theme_tag_description,
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
 * Articles Archive
 */
Flight::route( '/articles/(@page_number)/', function( $page_number = 0 ) {

	site_title( 'Articles' );

	site_meta_image( 'articles.jpg' );

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

		site_meta_image( $article['og-image'] );

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

	// Set a default og meta image.
	// Will be overwritten if there's available image for documentation page.
	site_meta_image( 'docs.jpg' );

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

			if ( ! empty( documentation_page_property( $page, 'og-image' ) ) ) {
				site_meta_image( documentation_page_property( $page, 'og-image' ) );
			}

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
