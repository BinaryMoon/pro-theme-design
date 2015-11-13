/* globals $, Cookies */

;(function(){

    // reusable functions

    var show_theme_purchase = function() {

        show_overlay();
        $( '.theme-modal' ).addClass( 'display' );

    };

    var show_newsletter = function() {

        if ( ! $( 'body' ).hasClass( 'overlay-display' ) ) {

            Cookies.set( 'ptd-newsletter', 1, { expires: 365 } );
            show_overlay();
            $( '.newsletter-modal' ).addClass( 'display' );

        }

    };

    var hide_modal = function() {

        $( '.modal-wrapper' ).removeClass( 'display' );
        hide_overlay();

    };

    var hide_menu = function() {

        $( 'body' ).removeClass( 'menu-display' );
        hide_overlay();

    };

    var show_overlay = function() {

        $( 'body' ).addClass( 'overlay-display' );

    };

    var hide_overlay = function() {

        $( 'body' ).removeClass( 'overlay-display' );

    };

    var update_visit_count = function() {

        var visits = visit_count();
        visits ++;
        Cookies.set( 'ptd-visits', visits, { expires: 21 } );

    };

    var visit_count = function() {

        return Cookies.get( 'ptd-visits' ) || 0;

    };

    var newsletter_count = function(){

        return Cookies.get( 'ptd-newsletter' ) || 0;

    };


    // generic modal close

    $( '.overlay-close' ).on( 'click', function( e ) {

        e.preventDefault();
        hide_modal();

    } );


    // newsletter popup

    if ( visit_count() >= 3 && newsletter_count() < 1 ) {

        setTimeout( show_newsletter, 10000 );

    }

    update_visit_count();


    // showcase selected navigation

    var tag = $( '.page-theme-showcase' );

    if ( tag.length ) {

        $( '.page-menu a.tag-' + tag.data( 'tag' ) ).addClass( 'selected' );

    }


    // get theme

    $( 'a.get-theme' ).on( 'click', function( e ) {

        e.preventDefault();
        show_theme_purchase();

    } );


    // menu

    $( '.menu-toggle' ).on( 'click', function( e ) {

        e.preventDefault();

        if ( $( 'body' ).hasClass( 'overlay-display' ) ) {

            hide_menu();

        } else {

            show_overlay();
            $( 'body' ).addClass( 'menu-display' );

        }

    } );

    $( '.menu-close' ).on( 'click', function( e ) {

        e.preventDefault();

        hide_overlay();
        $( 'body' ).removeClass( 'menu-display' );

    } );


    // styleguide

    $( '.pattern' ).each( function() {

        var $link = $( this ).find( 'a.toggle' );
        var $source = $( this ).find( '.source' );
        var $display = $( this ).find( '.display' );

        $link.on( 'click', function( e ) {

            e.preventDefault();

            $( '.source, .display' ).not( $source ).not( $display ).removeClass( 'hidden' );

            $source.toggleClass( 'hidden' );
            $display.toggleClass( 'hidden' );

        } );

    } );

    // theme and website preview

    $( '.preview-size a' ).on( 'click', function( e ) {

        e.preventDefault();

        $( '.preview-size a' ).removeClass( 'selected' );
        $( this ).addClass( 'selected' );

        var new_size = $( this ).data( 'size' );
        $( '.iframe-wrapper iframe' ).css( 'max-width', new_size );

    });


    // contact form

    $( '.contact-other' ).on( 'click', function( e ) {

        e.preventDefault();
        prepare_form( '.form-contact-other' );

    } );

    $( '.contact-technical' ).on( 'click', function( e ) {

        e.preventDefault();
        prepare_form( '.form-contact-technical' );

    } );

    // prepare contact form

    function prepare_form( selector ) {

        $( selector ).addClass( 'display' ).attr( 'action', '//formspree.io/' + 'support' + '@' + 'prothemedesign' + '.' + 'com' );
        $( '.contact-selection' ).addClass( 'hidden' );

    }

    //setTimeout( show_newsletter, 2000 );

    return;

    $( '._modal' ).on( 'click', function( e ) {

        e.preventDefault();
        e.stopPropagation();

    } );


    $( '_overlay' ).on( 'click', function( e ) {

        e.preventDefault();
        e.stopPropagation();

        hide_modal();
        hide_menu();

    } );


})();
