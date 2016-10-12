/* global jQuery, console, setTimeout, clearTimeout */

/**
 * Load next iframe in the background and then display the new iframe once loaded
 * set the timeout once the page is loaded, so we don't count the loading time for the timeout
 * add different device previews
 * a method for closing the preview
 * a method for pausing the timer
 * display the url as a link that opens in a new window/ tab
 */
;(function( $ ) {

    "use strict";

    // List of available websites to display in sequence.
    var frames = null;

    // The current website.
    var current_frame = 0;

    var timeout = null;

    var duration = 4000;


    /**
     * Set iframe properties
     */
    var iframe_loaded = function() {

        var $this = $( this );

        // remove all iframes that aren't the current one.
        $( '#iframe-wrapper iframe' ).not( $this ).remove();

        // Set a timeout to start loading the next iframe.
        timeout = setTimeout( next_frame, duration );

    };


    /**
     * Select the website to display and update the iframe url.
     *
     * @param {number} id The frame number to select.
     */
    var set_frame = function( id ) {

        if ( id ) {

            current_frame = id;

        }

        if ( frames[ current_frame ] ) {

            var url = get_frame_path();

            // Make sure a url is set
            if ( '' === url ) {

                next_frame();
                return;

            }

            preload_iframe( url );

        }

    };


    /**
     *
     * @returns {[[Type]]} [[Description]]
     */
    var get_frame_path = function() {

        var url = frames[ current_frame ];
        url = url.trim();
        url = sanitize_url( url );

        return url;

    };


    /**
     * Display the next website in the sequence.
     */
    var next_frame = function() {

        current_frame ++;

        if ( current_frame >= frames.length ) {

            current_frame = 0;

        }

        set_frame();

    };


    /**
     * Display the website in the test iframe.
     *
     * @param {string} url The new url for the website iframe.
     */
    var preload_iframe = function( url ) {

        console.log( url );

        var $iframe = $(
            '<iframe>',
            {
                'src': url,
                'frameborder': 0
            }
        );

        $iframe.on( 'load', iframe_loaded );

        $iframe.prependTo( '#iframe-wrapper' );

    };


    /**
     * Sanitize a url to ensure it doesn't contain anything bad.
     *
     * @param   {string} url Website url to sanitize.
     * @returns {string} The cleaned url.
     */
    var sanitize_url = function( url ) {

        return url;

    };


    /**
     * Get the list of websites that should be displayed.
     */
    var get_frame_list = function() {

        frames = $( '#website-list' ).text().split( "\n" );

        console.log( frames );

    };


    /**
     * Action for the 'Test' button.
     */
    $( '#website-test' ).on(
        'click',
        function( e ) {

            e.preventDefault();

            $( '#website-tester' ).show();
            $( 'body' ).css( 'overflow', 'hidden' );

            get_frame_list();
            set_frame();

        }
    );

    $( '.button-close' ).on(
        'click',
        function( e ) {

            e.preventDefault();

            clearTimeout( timeout );

            $( '#website-tester' ).hide();
            $( 'body' ).css( 'overflow', 'auto' );

        }
    );

})( jQuery );
