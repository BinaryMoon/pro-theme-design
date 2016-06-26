<?php

/**
 * A list of all of our themes
 * @return array A list of all the available themes
 */
function get_theme_data() {

    $themes = array(

        'passenger' => array(
            'name' => 'Passenger',
            'description' => 'Passenger is a theme designed for travel journals, and scrapbooking sites. With its unique post formats and clean typography, Passenger is great for telling stories.',
            'short_description' => 'A travel journal and scrapbooking theme.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'passenger',
            //'url-cm' => '312560-Monet-WordPress-Portfolio-Theme',
            'url-gr' => 'noCNI',
            'image' => 'passenger.png',
            'tags' => array( 'blog' ),
            'supports' => array( 'site-logo', 'infinite-scroll', 'social-menu', 'portfolio', 'post-formats', 'testimonials', 'portfolio' ),
        ),

        'monet' => array(
            'name' => 'Monet',
            'description' => 'A delicate responsive portfolio theme targeted at photographers and other creatives. With crisp typography Monet is easy on the eye.',
            'short_description' => 'A delicate WordPress portfolio theme.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'monet',
            'url-cm' => '312560-Monet-WordPress-Portfolio-Theme',
            'url-gr' => 'RWkNX',
            'image' => 'monet.png',
            'tags' => array( 'portfolio', 'photography' ),
            'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'portfolio', ),
        ),

        'puzzle' => array(
            'name' => 'Puzzle',
            'description' => 'A visually oriented theme, great for photographers and artists who want to tell stories using their images.',
            'short_description' => 'A responsive WordPress portfolio theme.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'puzzle',
            'url-gr' => 'xdaw',
            'url-cm' => '108641-Puzzle-Responsive-WordPress-Theme',
            'image' => 'puzzle.png',
            'tags' => array( 'portfolio', 'photography' ),
            'supports' => array( 'portfolio', 'site-logo', 'infinite-scroll', 'social-menu', 'testimonials', 'theme-club', 'raddcontrol' ),
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
            'url-gr' => 'zuqU',
            'image' => 'chronicle.png',
            'tags' => array( 'magazine', 'blog' ),
            'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'testimonials', 'theme-club', 'raddcontrol' ),
        ),

        'exhibit' => array(
            'name' => 'Exhibit',
            'description' => 'Exhibit is the perfect theme for businesses, big and small, to exhibit their work. Acting as both a portfolio and a blog Exhibit allows you to easily show off your projects.',
            'short_description' => 'A minimal WordPress portfolio theme.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'exhibit',
            'url-gr' => 'dWZHu',
            'url-cm' => '348846-Exhibit-WordPress-Portfolio-Theme',
            'image' => 'exhibit.png',
            'tags' => array( 'portfolio' ),
            'supports' => array( 'site-logo', 'infinite-scroll', 'social-menu', 'testimonials', 'portfolio', 'raddcontrol' ),
        ),

        'romero' => array(
            'name' => 'Romero',
            'description' => 'A WordPress theme designed for visual magazine sites. Ideal for video game sites, motoring magazines, and other topics that have large vibrant imagery.',
            'short_description' => 'A modern WordPress video game magazine theme.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'romero',
            'url-cm' => '312559-Romero-WordPress-Video-Game-Theme',
            'url-gr' => 'dbtvh',
            'image' => 'romero.png',
            'tags' => array( 'blog', 'magazine' ),
            'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'custom-colours-fonts', 'raddcontrol' ),
        ),

        'opti' => array(
            'name' => 'Opti',
            'description' => 'A clean blog theme with magazine elements. Custom category blurbs, great typography and a fully editable color scheme.',
            'short_description' => 'A classical WordPress magazine theme.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'opti',
            'url-cm' => '9918-Opti-Responsive-WordPress-Theme',
            'image' => 'opti.png',
            'tags' => array( 'magazine' ),
            'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'theme-club', 'raddcontrol' ),
        ),

        'mimbopro' => array(
            'name' => 'Mimbo Pro',
            'description' => 'A magazine theme that takes your content and formats it in a structured way grouped by category.',
            'short_description' => 'The original premium WordPress magazine theme.',
            'price-wpcom' => 59,
            'price-wporg' => 79,
            'url-wpcom' => 'mimbopro',
            'url-cm' => '111465-Mimbo-Pro-WordPress-Theme',
            'url-gr' => 'WDLD',
            'image' => 'mimbopro.png',
            'tags' => array( 'magazine' ),
            'supports' => array( 'featured-image', 'theme-club', ),
        ),

        'lens' => array(
            'name' => 'Lens',
            'description' => 'A photo-oriented theme, great for people who like to tell stories with pictures, equally suitable for bloggers, scrapbookers, and writers.',
            'short_description' => 'A modern WordPress photography theme.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'lens',
            'url-cm' => '108642-Lens-Responsive-Photography-Theme',
            'url-gr' => 'HwIP',
            'image' => 'lens.png',
            'tags' => array( 'photography' ),
            'supports' => array( 'site-logo', 'featured-content', 'featured-image', 'infinite-scroll', 'social-menu', 'testimonials', 'theme-club', ),
        ),

        'mirror' => array(
            'name' => 'Mirror',
            'description' => 'A blog focused theme showcasing large featured images and clear typography. A large featured content slider in the header helps your top content to shine.',
            'short_description' => 'A modern WordPress blogging theme.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'mirror',
            'url-cm' => '220297-Mirror-WordPress-Photography-Theme',
            'image' => 'mirror.png',
            'tags' => array( 'blog' ),
            'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'custom-colours-fonts', 'theme-club', 'raddcontrol' ),
        ),

        'beacon' => array(
            'name' => 'Beacon',
            'description' => 'A perfect theme for viral content: trending topics, featured thumbnails, and photos and excerpts arranged by category or popularity.',
            'short_description' => 'A modern WordPress magazine theme.',
            'price-wpcom' => 79,
            'price-wporg' => '',
            'url-wpcom' => 'beacon',
            'url-cm' => '',
            'url-gr' => 'wRdqt',
            'image' => 'beacon.png',
            'tags' => array( 'magazine' ),
            'supports' => array( 'site-logo', 'featured-content', 'infinite-scroll', 'social-menu', 'raddcontrol', 'theme-club' ),
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
        ),

        'broadsheet' => array(
            'name' => 'Broadsheet',
            'description' => 'A newspaper theme with 3 optional widget areas, featured posts and a huge homepage slider there are lots of options for creating interesting, immersive websites.',
            'short_description' => 'A classical WordPress magazine theme.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'broadsheet',
            'url-cm' => '108643-Broadsheet-Newspaper-Theme',
            'image' => 'broadsheet.png',
            'tags' => array( 'magazine' ),
            'supports' => array( 'site-logo', 'featured-image', 'infinite-scroll', 'social-menu', 'testimonials', 'theme-club', 'raddcontrol' ),
        ),

        'bromley' => array(
            'name' => 'Bromley',
            'description' => 'The best elements of blogging themes manipulated into something beautifully simple. Ideal for local community, fan magazines, and talking about updates in your industry.',
            'short_description' => 'A minimal WordPress magazine theme.',
            'price-wpcom' => 79,
            'price-wporg' => 99,
            'url-wpcom' => 'bromley',
            'url-cm' => '113531-Bromley-Responsive-WordPress-Theme',
            'image' => 'bromley.png',
            'tags' => array( 'blog' ),
            'supports' => array( 'featured-content', 'featured-image', 'infinite-scroll', 'theme-club', 'raddcontrol' ),
        ),

        'vision' => array(
            'name' => 'Vision',
            'description' => 'A theme designed for artists, photographers and other people with a love of strong visuals, with a dark background to make your content pop.',
            'short_description' => 'A simple WordPress blogging theme.',
            'price-wpcom' => 79,
            'price-wporg' => '',
            'url-wpcom' => 'vision',
            'image' => 'vision.png',
            'tags' => array( 'blog' ),
            'supports' => array( 'featured-content', 'featured-image', 'infinite-scroll', 'testimonials', 'raddcontrol' ),
        ),

        'kent' => array(
            'name' => 'Kent',
            'description' => 'A responsive theme designed for writers who want to write. Stripped back to the minimum — it’s designed to work well on all internet-enabled devices.',
            'short_description' => 'A content focuses WordPress blogging theme.',
            'price-wpcom' => 79,
            'price-wporg' => '',
            'url-wpcom' => 'kent',
            'url-gr' => 'kpFRg',
            'url-wporg' => 'kent',
            'image' => 'kent.png',
            'tags' => array( 'blog', 'free' ),
            'supports' => array( 'featured-image', 'infinite-scroll', 'sticky-post', 'theme-club' ),
        ),

        'bexley' => array(
            'name' => 'Bexley',
            'description' => 'The perfect combination of imagery and text, giving photographers and artists a space to user as their online portfolio or gallery.',
            'short_description' => 'A photography based WordPress blogging theme.',
            'price-wpcom' => 69,
            'price-wporg' => '',
            'url-wpcom' => 'bexley',
            'image' => 'bexley.png',
            'tags' => array( 'blog', 'photography' ),
            'supports' => array( 'featured-image', 'infinite-scroll', 'sticky-post', 'raddcontrol' ),
        ),

        'isca' => array(
            'name' => 'Isca',
            'description' => 'A tumblog theme for WordPress, designed for people who create a variety of types of content like quotes, images, text and video.',
            'short_description' => 'A classic WordPress tumblog theme.',
            'price-wpcom' => 59,
            'price-wporg' => '',
            'url-wpcom' => 'isca',
            'image' => 'isca.png',
            'tags' => array( 'blog' ),
            'supports' => array( 'infinite-scroll', 'post-formats', 'raddcontrol' ),
        ),

    );

    $processed = array();

    foreach ( $themes as $key => $theme ) {

        // set wordpress.org url if applicable
        if ( ! DISABLE_GUMROAD && ! empty( $theme[ 'url-gr' ] ) ) {
            $theme[ 'url-wporg' ] = 'https://gumroad.com/l/' . $theme['url-gr'] . '/';
        } else if ( ! empty( $theme[ 'url-wporg' ] ) ) {
            $theme[ 'url-wporg' ] = 'https://wordpress.org/themes/' . $theme['url-wporg'] . '/';
        } else if ( ! empty( $theme[ 'price-wporg' ] ) ) {
            $theme[ 'url-wporg' ] = 'https://creativemarket.com/BinaryMoon/' . $theme['url-cm'] . '?u=BinaryMoon';
        } else {
            $theme[ 'url-wporg' ] = '';
        }

        // all themes are on wordpress.com so fill out the rest of the url
        $theme[ 'url-wpcom' ] = 'https://wordpress.com/theme/' . $theme[ 'url-wpcom' ] . '/';

        // theme info link
        $theme[ 'url' ] = path( 'theme/' . $key . '/' );
        $theme[ 'url-details' ] = path( 'theme/' . $key . '/' );
        $theme[ 'url-demo-content' ] = path( 'assets/demo-xml/' . $key . '.wordpress.xml' );
        $theme[ 'url-demo-widgets' ] = path( 'assets/demo-widgets/' . $key . '.json' );

        // theme preview link
        if ( ! empty( $theme[ 'url-gr' ] ) || ! empty( $theme[ 'url-cm' ] ) ) {
            $theme[ 'url-preview' ] = path( 'theme-preview/' . $key . '/' );
        } else {
            $theme[ 'url-preview' ] = '';
        }

        // theme showcase link
        $theme[ 'url-showcase' ] = path( 'theme-showcase/' . $key . '/' );

        // Host tags
        $theme[ 'tags' ][] = 'wordpress.com';

        if ( ! empty( $theme[ 'url-wporg' ] ) ) {
            $theme[ 'tags' ][] = 'wordpress.org';
        }

        // theme documentation link
        $theme[ 'url-documentation' ] = path( 'documentation/theme/' . $key . '/' );

        // set price
        if ( empty( $theme[ 'price-wporg' ] ) ) {
            $theme[ 'price-wporg' ] = 'free!';
        } else {
            $theme[ 'price-wporg' ] = '$' . $theme[ 'price-wporg' ];
        }

        $theme[ 'price-wpcom' ] = '$' . $theme[ 'price-wpcom' ];

        // set the display price
        $theme[ 'price' ] = $theme[ 'price-wpcom' ];
        if ( ! empty( $theme[ 'url-wporg' ] ) ) {
            $theme[ 'price' ] = $theme[ 'price-wporg' ];
        }

        // text for button that gets the theme details
        $theme[ 'text-details' ] = 'Details';
        if ( ! empty( $theme[ 'url-preview' ] ) ) {
            $theme[ 'text-details' ] = 'Demo &amp; Details';
        }

        // link target
        $theme[ 'link-target' ] = '';

        // set default theme features that all themes support
        $theme[ 'supports' ] = array_merge(
            $theme[ 'supports' ],
            array(
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
    }

    return $processed;

}


/**
 * List option elements for a select box
 */
function themes_select_box() {

    $themes = get_theme_data();

    foreach( $themes as $theme ) {
?>
    <option value="<?php echo $theme[ 'name' ]; ?>"><?php echo $theme[ 'name' ]; ?></option>
<?php
    }

}


/**
 * Does the specified theme exist?
 * @param  string  $theme_slug The theme key to check
 * @return boolean If the theme exists
 */
function themes_exist( $theme_slug ) {

    $themes = get_theme_data();

    return isset( $themes[ $theme_slug ] );

}


/**
 * Get the data for the specified theme
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
 * get X random themes from the list
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
 * @return integer Dollar value for the combined price
 */
function themes_all_themes_price() {

    $themes = get_theme_data();
    $price = 0;

    foreach ( $themes as $theme ) {
        if ( ! empty( $theme[ 'price-wporg'] ) ) {
            $price += $theme[ 'price-wporg' ];
        }
    }

    return $price;

}


/**
 * Get a list of themes suitable for the specified host
 *
 * @param  string  [$host       = ''] The website host to return themes for.
 * @return boolean an array of theme info.
 */
function themes_by_tag( $tag = '' ) {

    $themes = get_theme_data();
    $processed_themes = array();

    foreach ( $themes as $theme ) {

        if ( in_array( $tag, $theme['tags'] ) || '' === $tag ) {

            $theme[ 'link-target' ] = '_blank';
            //$theme[ 'text-details' ] = 'Get for ' . $host;
            $theme[ 'url' ] = $theme[ 'url-wporg' ];

            if ( 'wordpress.com' === $tag ) {
                $theme[ 'url' ] = $theme[ 'url-wpcom' ];
            }

            $processed_themes[] = $theme;

        }

    }

    return $processed_themes;

}


/**
 * Work out if the specified theme supports the specified feature.
 * @param array  $theme   Theme Data.
 * @param string $feature Feature tag.
 */
function themes_supports( $theme, $feature ) {

    if ( in_array( $feature, $theme[ 'supports' ] ) ) {
        return true;
    }

    return false;

}
