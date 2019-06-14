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

		if ( isset( $_SERVER['HTTP_CF_CONNECTING_IP'] ) ) {
			$_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP'];
		}

		if ( 'dev' == ENV ) {
			$_SERVER['REMOTE_ADDR'] = '';
		}

		$path = 'https://reallyfreegeoip.org/json/' . $_SERVER['REMOTE_ADDR'];

		$data = url_get_contents( $path );
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


/**
 * Get the browser value.
 *
 * @return [type] [description]
 */
function sd_get_browser() {

	$browser = new Browser();
	return $browser->getBrowser() . ' ' . $browser->getVersion();

}


/**
 * Get the icon for the current browser.
 *
 * @return [type] [description]
 */
function sd_get_browser_icon() {

	$icons = array(
		'Opera' => 'logo-browser-opera',
		'Opera Mini' => 'logo-browser-opera',
		'Internet Explorer' => 'logo-browser-internet-explorer',
		'Pocket Internet Explorer' => 'logo-browser-internet-explorer',
		'Firefox' => 'logo-browser-firefox',
		'Safari' => 'logo-browser-safari',
		'iPhone' => 'computer-phone',
		'iPod' => 'computer-phone',
		'iPad' => 'computer-tablet',
		'Chrome' => 'logo-browser-chrome',
		'Android' => 'computer-phone',
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
