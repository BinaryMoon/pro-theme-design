/* globals $, Cookies, window, setTimeout */

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

        $( 'body' ).removeClass( 'menu-display search-display' );
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

    // prepare contact form

    var prepare_form = function( selector ) {

        $( selector ).addClass( 'display' ).attr( 'action', '//formspree.io/' + 'support' + '@' + 'prothemedesign' + '.' + 'com' );
        $( '.contact-selection' ).addClass( 'hidden' );

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

    $( '.search-toggle' ).on( 'click', function( e ) {

        e.preventDefault();

        if ( $( 'body' ).hasClass( 'overlay-display' ) ) {

            hide_menu();

        } else {

            show_overlay();
            $( 'body' ).addClass( 'search-display' );
            $( '.drawer-search' ).find( 'form input.text' ).focus();

        }

    } );

    $( '.drawer-close' ).on( 'click', function( e ) {

        e.preventDefault();

        hide_menu();

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


    var smoothScroll = function( element, to, duration ) {

        if ( duration < 0 ) {
            return;
        }

        var difference = to - $( window ).scrollTop();
        var perTick = difference / duration * 10;

        // stop if we're close enough
        if ( Math.abs( difference ) < 1 ) {
            return;
        }

        this.scrollToTimerCache = setTimeout( function() {
            if ( ! isNaN( parseInt( perTick, 10 ) ) ) {
                window.scrollTo( 0, $( window ).scrollTop() + perTick );
                smoothScroll( element, to, duration );
            }
        }.bind( this ), 10 );

    };

    $( '.scroll-to' ).on( 'click', function( e ) {

        e.preventDefault();
        smoothScroll( $( window ), $( $( e.currentTarget ).attr( 'href' ) ).offset().top, 150 );

    } );

    // uncomment to test the newsletter code
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
