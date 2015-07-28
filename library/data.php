<?php

/**
 * A list of all of our themes
 */
function get_theme_data() {

    $themes = array(

        'puzzle' => array(
            'name' => 'Puzzle',
            'description' => 'A visually oriented theme, great for photographers and artists who want to tell stories using their images.',
            'price-wpcom' => 79,
            'price-cm' => 99,
            'url-wpcom' => 'puzzle',
            'url-cm' => '108641-Puzzle-Responsive-WordPress-Theme',
            'image' => 'puzzle.png',
        ),

        'romero' => array(
            'name' => 'Romero',
            'description' => 'A visually oriented theme, great for photographers and artists who want to tell stories using their images.',
            'price-wpcom' => 99,
            'price-cm' => 119,
            'url-wpcom' => 'romero',
            'url-cm' => '312559-Romero-WordPress-Video-Game-Theme',
            'image' => 'romero.png',
        ),

        'monet' => array(
            'name' => 'Monet',
            'description' => 'A visually oriented theme, great for photographers and artists who want to tell stories using their images.',
            'price-wpcom' => 79,
            'price-cm' => 99,
            'url-wpcom' => 'monet',
            'url-cm' => '312560-Monet-WordPress-Portfolio-Theme',
            'image' => 'monet.png',
        ),

        'chronicle' => array(
            'name' => 'Chronicle',
            'description' => 'A newspaper theme with 3 optional widget areas, featured posts and a huge homepage slider there are lots of options for creating interesting, immersive websites.',
            'price-wpcom' => 79,
            'price-cm' => 129,
            'url-wpcom' => 'chronicle',
            'url-cm' => '113017-Chronicle-Magazine-Theme',
            'image' => 'chronicle.png',
        ),

        'opti' => array(
            'name' => 'Opti',
            'description' => 'A clean blog theme with magazine elements. Custom category blurbs, great typography and a fully editable color scheme.',
            'price-wpcom' => 79,
            'price-cm' => 99,
            'url-wpcom' => 'opti',
            'url-cm' => '9918-Opti-Responsive-WordPress-Theme',
            'image' => 'opti.png',
        ),

        'mirror' => array(
            'name' => 'Mirror',
            'description' => 'A perfect theme for viral content: trending topics, featured thumbnails, and photos and excerpts arranged by category or popularity.',
            'price-wpcom' => 79,
            'price-cm' => 99,
            'url-wpcom' => 'mirror',
            'url-cm' => '220297-Mirror-WordPress-Photography-Theme',
            'image' => 'mirror.png',
        ),

        'beacon' => array(
            'name' => 'Beacon',
            'description' => 'A perfect theme for viral content: trending topics, featured thumbnails, and photos and excerpts arranged by category or popularity.',
            'price-wpcom' => 79,
            'price-cm' => '',
            'url-wpcom' => 'beacon',
            'url-cm' => '',
            'image' => 'beacon.png',
        ),

        'traveler' => array(
            'name' => 'Traveler',
            'description' => 'Perfect for bloggers who want to document their travels with large photos, dramatic colors and Pinterest-style layouts.',
            'price-wpcom' => 79,
            'price-cm' => 99,
            'url-wpcom' => 'traveler',
            'url-cm' => '150534-Traveler-Visual-WordPress-Theme',
            'image' => 'traveler.png',
        ),

        'lens' => array(
            'name' => 'Lens',
            'description' => 'A photo-oriented theme, great for people who like to tell stories with pictures, equally suitable for bloggers, scrapbookers, and writers.',
            'price-wpcom' => 79,
            'price-cm' => 99,
            'url-wpcom' => 'lens',
            'url-cm' => '108642-Lens-Responsive-Photography-Theme',
            'image' => 'lens.png',
        ),

        'broadsheet' => array(
            'name' => 'Broadsheet',
            'description' => 'A newspaper theme with 3 optional widget areas, featured posts and a huge homepage slider there are lots of options for creating interesting, immersive websites.',
            'price-wpcom' => 79,
            'price-cm' => 99,
            'url-wpcom' => 'broadsheet',
            'url-cm' => '108643-Broadsheet-Newspaper-Theme',
            'image' => 'broadsheet.png',
        ),

        'mimbopro' => array(
            'name' => 'Mimbo Pro',
            'description' => 'A magazine theme that takes your content and formats it in a structured way grouped by category.',
            'price-wpcom' => 59,
            'price-cm' => 79,
            'url-wpcom' => 'mimbopro',
            'url-cm' => '111465-Mimbo-Pro-WordPress-Theme',
            'image' => 'mimbopro.png',
        ),

        'bromley' => array(
            'name' => 'Bromley',
            'description' => 'The best elements of blogging themes manipulated into something beautifully simple. Ideal for local community, fan magazines, and talking about updates in your industry.',
            'price-wpcom' => 79,
            'price-cm' => '',
            'url-wpcom' => 'bromley',
            'url-cm' => '',
            'image' => 'bromley.png',
        ),

        'vision' => array(
            'name' => 'Vision',
            'description' => 'A theme designed for artists, photographers and other people with a love of strong visuals, with a dark background to make your content pop.',
            'price-wpcom' => 79,
            'price-cm' => '',
            'url-wpcom' => 'vision',
            'url-cm' => '',
            'image' => 'vision.png',
        ),

        'kent' => array(
            'name' => 'Kent',
            'description' => 'A responsive theme designed for writers who want to write. Stripped back to the minimum — it’s designed to work well on all internet-enabled devices.',
            'price-wpcom' => 79,
            'price-cm' => '',
            'url-wpcom' => 'kent',
            'url-cm' => '',
            'image' => 'kent.png',
        ),

        'bexley' => array(
            'name' => 'Bexley',
            'description' => 'The perfect combination of imagery and text, giving photographers and artists a space to user as their online portfolio or gallery.',
            'price-wpcom' => 69,
            'price-cm' => '',
            'url-wpcom' => 'bexley',
            'url-cm' => '',
            'image' => 'bexley.png',
        ),

        'isca' => array(
            'name' => 'Isca',
            'description' => 'A tumblelog theme for WordPress, designed for people who create a variety of types of content like quotes, images, text and video.',
            'price-wpcom' => 59,
            'price-cm' => '',
            'url-wpcom' => 'isca',
            'url-cm' => '',
            'image' => 'isca.png',
        ),

    );

    $processed = array();

    foreach( $themes as $key => $theme ) {
        $url_org = 'https://creativemarket.com/BinaryMoon/' . $theme['url-cm'] . '?u=BinaryMoon';
        $theme[ 'url-wporg' ] = $url_org;
        $processed[ $key ] = $theme;
    }

    return $processed;

}


/**
 * List of all the plugins we have built/ support
 */
function get_plugin_data() {

    $plugins = array(
        'styleguide' => array(
            'name' => 'Styleguide',
            'description' => 'Customize fonts and colours in WordPress themes without touching any code.',
            'image' => 'https://ps.w.org/styleguide/assets/banner-772x250.jpg?rev=1065164',
        ),
        'bm-custom-login' => array(
            'name' => 'Custom Login',
            'description' => 'Customise the WordPress login box quickly and easily.',
            'image' => 'https://ps.w.org/bm-custom-login/assets/banner-772x250.png?rev=1135328',
        ),
        'browser-shots' => array(
            'name' => 'Browser Shots',
            'description' => 'Automate the process of taking website screenshots.',
            'image' => 'https://ps.w.org/browser-shots/assets/banner-772x250.png?rev=1067050',
        ),
        'jetpack' => array(
            'name' => 'Jetpack',
            'description' => 'Fully supported by our themes, adds loads of extra functionality.',
            'image' => 'https://ps.w.org/jetpack/assets/banner-772x250.png?rev=1173629',
        ),
    );

    $processed = array();

    foreach( $plugins as $key => $plugin ) {
        $url = 'https://wordpress.org/plugins/' . $key . '/';
        $plugin[ 'url' ] = $url;
        $processed[ $key ] = $plugin;
    }

    return $processed;

}


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
    $websites = array(
        array(
            'url' => 'http://legosandfriends.com/',
            'name' => 'Legos and Friends',
            'theme' => 'romero',
            'tags' => array( 'romero' ),
        ),
        array(
            'url' => 'http://nicennaughtyboutique.com/',
            'name' => 'Nice N Naughty',
            'theme' => 'puzzle',
            'image' => 'nicennaughty',
            'tags' => array( 'puzzle', 'featured' ),
        ),
        array(
            'url' => 'http://bjdeming.com/',
            'name' => 'Clear Sight',
            'image' => 'bjdeming',
            'theme' => 'opti',
            'tags' => array( 'opti' ),
        ),
        array(
            'url' => 'http://pressthepsbutton.com/',
            'name' => 'Press the Button',
            'theme' => 'chronicle',
            'tags' => array( 'chronicle' ),
        ),
        array(
            'url' => 'http://blacksundaymagazine.net/',
            'name' => 'Black Sunday Magazine',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet' ),
        ),
        array(
            'url' => 'https://hanleystrength.wordpress.com/',
            'name' => 'Hanley Strength',
            'theme' => 'romero',
            'tags' => array( 'romero', 'featured' ),
        ),
        array(
            'url' => 'http://shouldigoseeit.com/',
            'name' => 'Should I Go See It',
            'image' => 'shouldigoseeit',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        array(
            'url' => 'https://noisenation.wordpress.com/',
            'name' => 'Noise Nation',
            'image' => 'noisenation',
            'theme' => 'opti',
            'tags' => array( 'opti' ),
        ),
        array(
            'url' => 'http://pressthepsbutton.com/',
            'name' => 'Press the Button',
            'theme' => 'chronicle',
            'tags' => array( 'chronicle' ),
        ),
        array(
            'url' => 'http://thefourthcrown.com/',
            'name' => 'The Fourth Crown',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet', 'featured' ),
        ),
        array(
            'url' => 'http://torrentthis.tv/',
            'name' => 'Torrent This',
            'theme' => 'romero',
            'tags' => array( 'romero', 'featured' ),
        ),




        array(
            'url' => 'http://theversion.co.uk/',
            'name' => 'The Version',
            'image' => 'theversion',
            'theme' => 'romero',
            'tags' => array( 'romero' ),
        ),
        array(
            'url' => 'http://firstbloodgames.com/',
            'name' => 'First Blood Games',
            'theme' => 'romero',
            'tags' => array( 'romero' ),
        ),
        array(
            'url' => 'http://geeksdownunder.com.au/',
            'name' => 'Geeks Down Under',
            'theme' => 'romero',
            'tags' => array( 'romero' ),
        ),
        array(
            'url' => 'http://javiermarduenoblog.com/',
            'name' => 'Javier Mardueno',
            'image' => 'javiermardueno',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle', 'featured' ),
        ),
        array(
            'url' => 'http://decograffik.com/',
            'name' => 'Decograffik',
            'image' => 'decograffik',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        array(
            'url' => 'http://matthewaarongoodman.com/',
            'name' => 'Matthew Aaron Goodman',
            'image' => 'matthewaarongoodman',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        array(
            'url' => 'http://cynthialait.com/',
            'name' => 'Cynthia Lait',
            'image' => 'cynthialait',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        array(
            'url' => 'http://marocinstyle.com/',
            'name' => 'Maroc in Style',
            'image' => 'maroc',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        array(
            'url' => 'https://flossyphotography.wordpress.com/',
            'name' => 'Flossy Photography',
            'image' => 'flossy',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        array(
            'url' => 'http://leahpellegrini.com/',
            'name' => 'Leah Pellegrini',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        array(
            'url' => 'http://cokoroaji.com/',
            'name' => 'Cokoroaji',
            'image' => 'cokoroaji',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        array(
            'url' => 'http://cincindos.com/',
            'name' => 'Cincindos',
            'image' => 'cincindos',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        array(
            'url' => 'http://sperka.info/',
            'name' => 'Sperka',
            'image' => 'sperka',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        array(
            'url' => 'https://ballaratvocalise.wordpress.com/',
            'name' => 'Vocalise',
            'theme' => 'opti',
            'tags' => array( 'opti' ),
        ),
        array(
            'url' => 'https://matthewduclos.wordpress.com/',
            'name' => 'Circle of Confusion',
            'image' => 'circleofconfusion',
            'theme' => 'opti',
            'tags' => array( 'opti' ),
        ),
        array(
            'url' => 'https://bellacaledonia.wordpress.com/',
            'name' => 'Bella Caledonia',
            'image' => 'bellacaledonia',
            'theme' => 'opti',
            'tags' => array( 'opti', 'featured' ),
        ),
        array(
            'url' => 'http://blog.nationalrail.co.uk/',
            'name' => 'National Rail Enquiries',
            'theme' => 'chronicle',
            'tags' => array( 'chronicle', 'featured' ),
        ),
        array(
            'url' => 'http://berkeleylifecentre.org/',
            'name' => 'Berkeley Life Centre',
            'name' => 'Berkeley Life Centre',
            'theme' => 'chronicle',
            'tags' => array( 'chronicle', 'featured' ),
        ),
        array(
            'url' => 'https://ccommunity.wordpress.com/',
            'name' => 'Comic Community',
            'theme' => 'chronicle',
            'tags' => array( 'chronicle' ),
        ),
        array(
            'url' => 'http://fedalijournal.com/',
            'name' => 'Fedali Photography',
            'image' => 'fedalijournal',
            'theme' => 'chronicle',
            'tags' => array( 'chronicle' ),
        ),
        array(
            'url' => 'http://schofieldtrading.com/',
            'name' => 'Schofield Trading',
            'image' => 'schofieldtrading',
            'theme' => 'chronicle',
            'tags' => array( 'chronicle' ),
        ),
        array(
            'url' => 'https://cardinalcourieronline.wordpress.com/',
            'name' => 'Cardinal Courier',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet' ),
        ),
        array(
            'url' => 'http://orangecountytribune.com/',
            'name' => 'Orange County Tribune',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet' ),
        ),
        array(
            'url' => 'https://shssentinel.wordpress.com/',
            'name' => 'The Sentinel',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet' ),
        ),
        array(
            'url' => 'http://gentlemansportion.com/',
            'name' => 'Gentlemans Portion',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet' ),
        ),
        array(
            'url' => 'http://solarspindle.com/',
            'name' => 'Solar Spindle',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet' ),
        ),
        array(
            'url' => 'http://journal.probeinternational.org/',
            'name' => 'Probe International',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet' ),
        ),
        array(
            'url' => 'http://thebannercsi.com/',
            'name' => 'The Banner',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet' ),
        ),

    );

    return $websites;

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
 */
function website_get_by_tag( $tag = '' ) {

    $tag_websites = array();
    $websites = get_website_data();

    if ( $tag ) {

        foreach ( $websites as $w ) {
            if ( in_array( $tag, $w[ 'tags' ] ) ) {
                $tag_websites[] = $w;
            }
        }

    } else {

        $count = 0;
        foreach ( $websites as $w ) {
            if ( $count < 15 ) {
                $tag_websites[] = $w;
            }
            $count ++;
        }

    }

    shuffle( $tag_websites );

    return $tag_websites;

}
