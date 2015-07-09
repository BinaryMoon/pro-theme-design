<?php

/**
 *
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
 *
 */
function get_website_data() {

    /**
     * list of websites to display on the showcase
     *
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
        ),
        array(
            'url' => 'https://hanleystrength.wordpress.com/',
            'name' => 'Hanley Strength',
            'featured' => true,
            'theme' => 'romero',
        ),
        array(
            'url' => 'http://torrentthis.tv/',
            'name' => 'Torrent This',
            'featured' => true,
            'theme' => 'romero',
        ),
        array(
            'url' => 'http://theversion.co.uk/',
            'name' => 'The Version',
            'size' => 1,
            'image' => 'theversion',
            'theme' => 'romero',
        ),
        array(
            'url' => 'http://firstbloodgames.com/',
            'name' => 'First Blood Games',
            'theme' => 'romero',
        ),
        array(
            'url' => 'http://geeksdownunder.com.au/',
            'name' => 'Geeks Down Under',
            'theme' => 'romero',
        ),
        array(
            'url' => 'http://javiermarduenoblog.com/',
            'name' => 'Javier Mardueno',
            'featured' => true,
            'image' => 'javiermardueno',
            'theme' => 'puzzle',
        ),
        array(
            'url' => 'http://decograffik.com/',
            'name' => 'Decograffik',
            'image' => 'decograffik',
            'theme' => 'puzzle',
        ),
        array(
            'url' => 'http://nicennaughtyboutique.com/',
            'name' => 'Nice N Naughty',
            'theme' => 'puzzle',
            'image' => 'nicennaughty',
            'featured' => true,
        ),
        array(
            'url' => 'http://shouldigoseeit.com/',
            'name' => 'Should I Go See It',
            'image' => 'shouldigoseeit',
            'theme' => 'puzzle',
        ),
        array(
            'url' => 'http://matthewaarongoodman.com/',
            'name' => 'Matthew Aaron Goodman',
            'image' => 'matthewaarongoodman',
            'theme' => 'puzzle',
        ),
        array(
            'url' => 'http://cynthialait.com/',
            'name' => 'Cynthia Lait',
            'image' => 'cynthialait',
            'theme' => 'puzzle',
        ),
        array(
            'url' => 'http://marocinstyle.com/',
            'name' => 'Maroc in Style',
            'image' => 'maroc',
            'theme' => 'puzzle',
        ),
        array(
            'url' => 'https://flossyphotography.wordpress.com/',
            'name' => 'Flossy Photography',
            'image' => 'flossy',
            'theme' => 'puzzle',
        ),
        array(
            'url' => 'http://leahpellegrini.com/',
            'name' => 'Leah Pellegrini',
            'theme' => 'puzzle',
        ),
        array(
            'url' => 'http://cokoroaji.com/',
            'name' => 'Cokoroaji',
            'image' => 'cokoroaji',
            'theme' => 'puzzle',
        ),
        array(
            'url' => 'http://cincindos.com/',
            'name' => 'Cincindos',
            'image' => 'cincindos',
            'theme' => 'puzzle',
        ),
        array(
            'url' => 'http://sperka.info/',
            'name' => 'Sperka',
            'image' => 'sperka',
            'theme' => 'puzzle',
        ),

        array(
            'url' => 'http://bjdeming.com/',
            'name' => 'Clear Sight',
            'image' => 'bjdeming',
            'theme' => 'opti',
        ),
        array(
            'url' => 'https://noisenation.wordpress.com/',
            'name' => 'Noise Nation',
            'image' => 'noisenation',
            'theme' => 'opti',
        ),
        array(
            'url' => 'https://ballaratvocalise.wordpress.com/',
            'name' => 'Vocalise',
            'theme' => 'opti',
        ),
        array(
            'url' => 'https://matthewduclos.wordpress.com/',
            'name' => 'Circle of Confusion',
            'image' => 'circleofconfusion',
            'theme' => 'opti',
        ),
        array(
            'url' => 'https://bellacaledonia.wordpress.com/',
            'name' => 'Bella Caledonia',
            'image' => 'bellacaledonia',
            'featured' => true,
            'theme' => 'opti',
        ),
        array(
            'url' => 'http://pressthepsbutton.com/',
            'name' => 'Press the Button',
            'theme' => 'chronicle',
        ),
        array(
            'url' => 'http://blog.nationalrail.co.uk/',
            'name' => 'National Rail Enquiries',
            'featured' => true,
            'theme' => 'chronicle',
        ),
        array(
            'url' => 'http://berkeleylifecentre.org/',
            'name' => 'Berkeley Life Centre',
            'name' => 'Berkeley Life Centre',
            'featured' => true,
            'theme' => 'chronicle',
        ),
        array(
            'url' => 'https://ccommunity.wordpress.com/',
            'name' => 'Comic Community',
            'theme' => 'chronicle',
        ),
        array(
            'url' => 'http://fedalijournal.com/',
            'name' => 'Fedali Photography',
            'image' => 'fedalijournal',
            'theme' => 'chronicle',
        ),
        array(
            'url' => 'http://schofieldtrading.com/',
            'name' => 'Schofield Trading',
            'image' => 'schofieldtrading',
            'theme' => 'chronicle',
        ),

        array(
            'url' => 'http://blacksundaymagazine.net/',
            'name' => 'Black Sunday Magazine',
            'theme' => 'broadsheet',
        ),
        array(
            'url' => 'http://thefourthcrown.com/',
            'name' => 'The Fourth Crown',
            'featured' => true,
            'theme' => 'broadsheet',
        ),
        array(
            'url' => 'https://cardinalcourieronline.wordpress.com/',
            'name' => 'Cardinal Courier',
            'theme' => 'broadsheet',
        ),
        array(
            'url' => 'http://orangecountytribune.com/',
            'name' => 'Orange County Tribune',
            'theme' => 'broadsheet',
        ),
        array(
            'url' => 'https://shssentinel.wordpress.com/',
            'name' => 'The Sentinel',
            'theme' => 'broadsheet',
        ),
        array(
            'url' => 'http://gentlemansportion.com/',
            'name' => 'Gentlemans Portion',
            'theme' => 'broadsheet',
        ),
        array(
            'url' => 'http://solarspindle.com/',
            'name' => 'Solar Spindle',
            'theme' => 'broadsheet',
        ),
        array(
            'url' => 'http://journal.probeinternational.org/',
            'name' => 'Probe International',
            'theme' => 'broadsheet',
        ),
        array(
            'url' => 'http://thebannercsi.com/',
            'name' => 'The Banner',
            'theme' => 'broadsheet',
        ),

    );

    shuffle( $websites );

    return $websites;

}
