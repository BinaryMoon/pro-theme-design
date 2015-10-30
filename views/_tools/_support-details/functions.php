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
 * Get the city name for the current visitor
 *
 * @return string City name.
 */
function sd_get_city() {

    $data = sd_location_data();
    return $data->city;

}

/**
 * Get the country info for the current visitor
 *
 * @return string Country code, and country name.
 */
function sd_get_country() {

    $data = sd_location_data();
    return $data->country_code . ' : ' . $data->country_name;

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
    return $browser->getBrowser();

}

function sd_get_browser_version() {

    $browser = new Browser();
    return $browser->getVersion();

}

function sd_get_platform() {

    $browser = new Browser();
    return $browser->getPlatform();

}
