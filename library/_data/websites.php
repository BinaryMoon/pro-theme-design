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
        array(
            'url' => 'http://barrycomersblog.com/',
            'name' => 'Barry Corner',
            'theme' => 'monet',
            'tags' => array( 'monet', 'featured' ),
            'image' => 'barrycorner',
        ),
        array(
            'url' => 'http://sonjavanvuure.com/',
            'name' => 'Vuurig',
            'theme' => 'monet',
            'tags' => array( 'monet' ),
            'image' => 'vuurig',
        ),
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



        array(
            'url' => 'http://zanghelini.com.br/',
            'name' => 'Leonardo Zhangelini',
            'theme' => 'monet',
            'tags' => array( 'monet' ),
            'image' => 'leonardozhangelini',
        ),
        array(
            'url' => 'http://baileyenglishstudio.com/',
            'name' => 'Bailey English Studio',
            'theme' => 'monet',
            'tags' => array( 'monet' ),
            'image' => 'baileyenglishstudio',
        ),
        array(
            'url' => 'http://redeclectic.com.au/',
            'name' => 'Red Electric',
            'theme' => 'monet',
            'tags' => array( 'monet' ),
            'image' => 'redelectric',
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
