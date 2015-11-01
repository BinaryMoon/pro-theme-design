<?php

/**
 * Get, and store for the session, location data for the current visitor
 *
 * @return object IP location data.
 */
function sd_location_data() {

    $key = 'sd.location';
    $data = Flight::get( $key );

    if ( empty( $data ) ) {

        $path = 'https://freegeoip.net/json/';
        $data = file_get_contents( $path );
        Flight::set( $key, $data );

    }

    return json_decode( $data );

}


/**
 * Get the location info for the current visitor
 *
 * @return string Country code, and country name.
 */
function sd_get_location() {

    $data = sd_location_data();
    return $data->city . ', ' . $data->country_name . ', ' . $data->country_code;

}


/**
 * Get the ip address of the current visitor
 *
 * @return string IP Address
 */
function sd_get_ip_address() {

    $data = sd_location_data();
    return $data->ip;

}


function sd_get_browser() {

    $browser = new Browser();
    return $browser->getBrowser() . ' ' . $browser->getVersion();

}


function sd_get_browser_icon() {

    $icons = array(
        'Opera' => 'opera',
        'Opera Mini' => 'opera',
        'Internet Explorer' => 'internet-explorer',
        'Pocket Internet Explorer' => 'internet-explorer',
        'Firefox' => 'firefox',
        'Safari' => 'safari',
        'iPhone' => 'mobile',
        'iPod' => 'mobile',
        'iPad' => 'tablet',
        'Chrome' => 'chrome',
        'Android' => 'android',
    );

    $browser = new Browser();
    $browser_name = $browser->getBrowser();
    $icon = 'home';

    if ( isset( $icons[ $browser_name ] ) ) {
        $icon = $icons[ $browser_name ];
    }

    return $icon;

}


function sd_get_platform() {

    $browser = new Browser();
    return $browser->getPlatform();

}
