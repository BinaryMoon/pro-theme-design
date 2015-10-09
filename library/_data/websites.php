<?php


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
        'barry-corner' => array(
            'url' => 'http://barrycomersblog.com/',
            'name' => 'Barry Corner',
            'theme' => 'monet',
            'tags' => array( 'monet', 'featured' ),
            'image' => 'barrycorner',
        ),
        'vuurig' => array(
            'url' => 'http://sonjavanvuure.com/',
            'name' => 'Vuurig',
            'theme' => 'monet',
            'tags' => array( 'monet' ),
            'image' => 'vuurig',
        ),
        'legos-and-friends' => array(
            'url' => 'http://legosandfriends.com/',
            'name' => 'Legos and Friends',
            'theme' => 'romero',
            'tags' => array( 'romero' ),
        ),
        'nice-n-naughty' => array(
            'url' => 'http://nicennaughtyboutique.com/',
            'name' => 'Nice N Naughty',
            'theme' => 'puzzle',
            'image' => 'nicennaughty',
            'tags' => array( 'puzzle', 'featured' ),
        ),
        'clear-sight' => array(
            'url' => 'http://bjdeming.com/',
            'name' => 'Clear Sight',
            'image' => 'bjdeming',
            'theme' => 'opti',
            'tags' => array( 'opti' ),
        ),
        'press-the-button' => array(
            'url' => 'http://pressthepsbutton.com/',
            'name' => 'Press the Button',
            'theme' => 'chronicle',
            'tags' => array( 'chronicle' ),
        ),
        'black-sunday-magazine' => array(
            'url' => 'http://blacksundaymagazine.net/',
            'name' => 'Black Sunday Magazine',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet' ),
        ),
        'hanley-strength' => array(
            'url' => 'https://hanleystrength.wordpress.com/',
            'name' => 'Hanley Strength',
            'theme' => 'romero',
            'tags' => array( 'romero', 'featured' ),
        ),
        'should-i-go-see-it' => array(
            'url' => 'http://shouldigoseeit.com/',
            'name' => 'Should I Go See It',
            'image' => 'shouldigoseeit',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        'noise-nation' => array(
            'url' => 'https://noisenation.wordpress.com/',
            'name' => 'Noise Nation',
            'image' => 'noisenation',
            'theme' => 'opti',
            'tags' => array( 'opti' ),
        ),
        'the-fourth-crown' => array(
            'url' => 'http://thefourthcrown.com/',
            'name' => 'The Fourth Crown',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet', 'featured' ),
        ),
        'torrent-this' => array(
            'url' => 'http://torrentthis.tv/',
            'name' => 'Torrent This',
            'theme' => 'romero',
            'tags' => array( 'romero', 'featured' ),
        ),
        'the-version' => array(
            'url' => 'http://theversion.co.uk/',
            'name' => 'The Version',
            'image' => 'theversion',
            'theme' => 'romero',
            'tags' => array( 'romero' ),
        ),
        'geeks-down-under' => array(
            'url' => 'http://geeksdownunder.com.au/',
            'name' => 'Geeks Down Under',
            'theme' => 'romero',
            'tags' => array( 'romero' ),
        ),
        'javier-mardueno' => array(
            'url' => 'http://javiermarduenoblog.com/',
            'name' => 'Javier Mardueno',
            'image' => 'javiermardueno',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle', 'featured' ),
        ),
        'decograffik' => array(
            'url' => 'http://decograffik.com/',
            'name' => 'Decograffik',
            'image' => 'decograffik',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        'matthew-aaron-goodman' => array(
            'url' => 'http://matthewaarongoodman.com/',
            'name' => 'Matthew Aaron Goodman',
            'image' => 'matthewaarongoodman',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        'cynthia-lait' => array(
            'url' => 'http://cynthialait.com/',
            'name' => 'Cynthia Lait',
            'image' => 'cynthialait',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        'maroc-in-style' => array(
            'url' => 'http://marocinstyle.com/',
            'name' => 'Maroc in Style',
            'image' => 'maroc',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        'flossy-photography' => array(
            'url' => 'https://flossyphotography.wordpress.com/',
            'name' => 'Flossy Photography',
            'image' => 'flossy',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        'leah-pellegrini' => array(
            'url' => 'http://leahpellegrini.com/',
            'name' => 'Leah Pellegrini',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        'cokoroaji' => array(
            'url' => 'http://cokoroaji.com/',
            'name' => 'Cokoroaji',
            'image' => 'cokoroaji',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        'cincindos' => array(
            'url' => 'http://cincindos.com/',
            'name' => 'Cincindos',
            'image' => 'cincindos',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        'sperka' => array(
            'url' => 'http://sperka.info/',
            'name' => 'Sperka',
            'image' => 'sperka',
            'theme' => 'puzzle',
            'tags' => array( 'puzzle' ),
        ),
        'vocalise' => array(
            'url' => 'https://ballaratvocalise.wordpress.com/',
            'name' => 'Vocalise',
            'theme' => 'opti',
            'tags' => array( 'opti' ),
        ),
        'circle-of-confusion' => array(
            'url' => 'https://matthewduclos.wordpress.com/',
            'name' => 'Circle of Confusion',
            'image' => 'circleofconfusion',
            'theme' => 'opti',
            'tags' => array( 'opti' ),
        ),
        'bella-caledonia' => array(
            'url' => 'https://bellacaledonia.wordpress.com/',
            'name' => 'Bella Caledonia',
            'image' => 'bellacaledonia',
            'theme' => 'opti',
            'tags' => array( 'opti', 'featured' ),
        ),
        'national-rail-enquiries' => array(
            'url' => 'http://blog.nationalrail.co.uk/',
            'name' => 'National Rail Enquiries',
            'theme' => 'chronicle',
            'tags' => array( 'chronicle', 'featured' ),
        ),
        'berkeley-life-centre' => array(
            'url' => 'http://berkeleylifecentre.org/',
            'name' => 'Berkeley Life Centre',
            'theme' => 'chronicle',
            'tags' => array( 'chronicle', 'featured' ),
        ),
        'comic-community' => array(
            'url' => 'https://ccommunity.wordpress.com/',
            'name' => 'Comic Community',
            'theme' => 'chronicle',
            'tags' => array( 'chronicle' ),
        ),
        'fedali-photography' => array(
            'url' => 'http://fedalijournal.com/',
            'name' => 'Fedali Photography',
            'image' => 'fedalijournal',
            'theme' => 'chronicle',
            'tags' => array( 'chronicle' ),
        ),
        'schofield-trading' => array(
            'url' => 'http://schofieldtrading.com/',
            'name' => 'Schofield Trading',
            'image' => 'schofieldtrading',
            'theme' => 'chronicle',
            'tags' => array( 'chronicle' ),
        ),
        'cardinal-courier' => array(
            'url' => 'https://cardinalcourieronline.wordpress.com/',
            'name' => 'Cardinal Courier',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet' ),
        ),
        'orange-county-tribune' => array(
            'url' => 'http://orangecountytribune.com/',
            'name' => 'Orange County Tribune',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet' ),
        ),
        'the-sentinel' => array(
            'url' => 'https://shssentinel.wordpress.com/',
            'name' => 'The Sentinel',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet' ),
        ),
        'gentlemans-portion' => array(
            'url' => 'http://gentlemansportion.com/',
            'name' => 'Gentlemans Portion',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet' ),
        ),
        'solar-spindle' => array(
            'url' => 'http://solarspindle.com/',
            'name' => 'Solar Spindle',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet' ),
        ),
        'probe-inernational' => array(
            'url' => 'http://journal.probeinternational.org/',
            'name' => 'Probe International',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet' ),
        ),
        'the-banner' => array(
            'url' => 'http://thebannercsi.com/',
            'name' => 'The Banner',
            'theme' => 'broadsheet',
            'tags' => array( 'broadsheet' ),
        ),
        'leonardo-zhangelini' => array(
            'url' => 'http://zanghelini.com.br/',
            'name' => 'Leonardo Zhangelini',
            'theme' => 'monet',
            'tags' => array( 'monet' ),
            'image' => 'leonardozhangelini',
        ),
        'bailey-english-studio' => array(
            'url' => 'http://baileyenglishstudio.com/',
            'name' => 'Bailey English Studio',
            'theme' => 'monet',
            'tags' => array( 'monet' ),
            'image' => 'baileyenglishstudio',
        ),
        'red-electric' => array(
            'url' => 'http://redeclectic.com.au/',
            'name' => 'Red Electric',
            'theme' => 'monet',
            'tags' => array( 'monet' ),
            'image' => 'redelectric',
        ),


    );


    $processed = array();

    foreach ( $websites as $key => $site ) {

        // preview url
        $site[ 'url-preview' ] = path( 'showcase-preview/' . $key . '/' );

        // preview url
        $site[ 'url-showcase' ] = path( 'theme-showcase/' . $site['theme'] . '/#' . $key );

        // setup site screenshots
        if ( ! empty( $site[ 'image' ] ) ) {
            $site[ 'image_url' ] = image_path( 'showcase/' . $site[ 'image' ] . '.jpg' );
        } else {
            $site[ 'image_url' ] = 'https://s0.wordpress.com/mshots/v1/' . urlencode( $site['url'] ) . '?w=400&h=300';
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


function website_get( $site ) {

    $websites = get_website_data();

    if ( isset( $websites[ $site ] ) ) {
        return $websites[ $site ];
    }

    return false;

}


function website_exists( $site ) {

    $websites = get_website_data();

    if ( isset( $websites[ $site ] ) ) {
        return true;
    }

    return false;

}
