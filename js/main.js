/* globals $, Cookies, window, setTimeout, fbq */

;(function() {

	// Reusable functions

	/**
	 * JS mobile detection
	 * Is this a touch enabled device or not?
	 *
	 * @return boolean
	 */
	var is_touch_device = function() {

		return ( ( 'ontouchstart' in window ) || ( navigator.MaxTouchPoints > 0 ) || ( navigator.msMaxTouchPoints > 0 ) );

	};

	var show_theme_purchase = function() {

		show_overlay();
		$( '.theme-modal' ).addClass( 'display' );

	};

	var show_search = function() {

		show_overlay();
		$( '.search-modal' ).addClass( 'display' );
		setTimeout( function() {
			$( '.searchform .text' ).focus();
		}, 50);

	};

	var show_newsletter = function() {

		// There's an overlay visible so let's leave
		if ( $( 'body' ).hasClass( 'overlay-display' ) ) {
			return;
		}

		Cookies.set( 'ptd-newsletter', 1, { expires: 365 } );
		show_overlay();
		$( '.newsletter-modal' ).addClass( 'display' );

	};

	var show_recommendation = function() {

		// There's an overlay visible so let's leave
		if ( $( 'body' ).hasClass( 'overlay-display' ) ) {
			return;
		}

		// Quit if not a theme page.
		if ( ! $( 'body' ).hasClass( 'page-theme' ) && ! $( 'body' ).hasClass( 'page-themes' ) ) {
			return;
		}

		Cookies.set( 'ptd-recommendation', 1, { expires: 365 } );
		show_overlay();
		$( '.recommendation-modal' ).addClass( 'display' );

	};

	var toggle_nav = function() {

		$( '.main-menu' ).toggleClass( 'display' );

	};

	var hide_modal = function() {

		$( '.modal-wrapper' ).removeClass( 'display' );
		$( '.popover' ).removeClass( 'display' );
		hide_overlay();

	};

	var hide_menu = function() {

		$( 'body' ).removeClass( 'menu-display search-display' );
		hide_overlay();

	};

	var show_overlay = function() {

		hide_modal();
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

	var update_theme_count = function() {

		// Quit if not a theme page. Checks theme page, and theme archives.
		if ( ! $( 'body' ).hasClass( 'page-theme' ) && ! $( 'body' ).hasClass( 'page-themes' ) ) {
			return;
		}

		var visits = theme_count();
		visits ++;
		Cookies.set( 'ptd-themes', visits, { expires: 21 } );

	};

	var theme_count = function() {

		return Cookies.get( 'ptd-themes' ) || 0;

	};

	var newsletter_count = function() {

		return Cookies.get( 'ptd-newsletter' ) || 0;

	};

	var recommendation_count = function() {

		return Cookies.get( 'ptd-recommendation' ) || 0;

	};

	var show_popover = function() {

		$( '.popover' ).addClass( 'display' );

	};


	// prepare contact forms

	$( 'form.formspree' ).each(
		function() {

			$( this ).attr( 'action', '//formspree.io/' + 'support' + '@' + 'prothemedesign' + '.' + 'com' );

		}
	);

	var prepare_form = function( selector ) {

		$( selector ).addClass( 'display' );
		$( '.contact-selection' ).addClass( 'hidden' );

	};


	// generic modal close

	$( '.close-button' ).on(
		'click',
		function( e ) {

			e.preventDefault();
			hide_modal();

		}
	);


	// track events

	$( '.event' ).on(
		'click',
		function() {

			// check if facebook is active and if not leave
			if ( typeof( fbq ) === 'undefined' ) {
				return;
			}

			// get the event name
			var name = $( this ).data( 'event' );

			// do the tracking
			if ( name ) {
				// facebook pixel
				fbq( 'track', name );
			}

		}
	);

	// pop up theme recommendations

	if ( theme_count() >= 2 && recommendation_count() < 1 ) {

		setTimeout( show_recommendation, 10000 );

	}

	// newsletter popup

	if ( visit_count() >= 3 && newsletter_count() < 1 ) {

		setTimeout( show_newsletter, 10000 );

	}

	// update page counts (which are actually page views)

	update_visit_count();
	update_theme_count();

	// feedback popover

	if ( visit_count() >= 2 ) {

		setTimeout( show_popover, 40000 );

	}


	// get theme

	$( 'a.get-theme' ).on(
		'click',
		function( e ) {

			e.preventDefault();
			show_theme_purchase();

		}
	);


	// menu

	$( '.search-toggle' ).on(
		'click',
		function( e ) {

			e.preventDefault();
			show_search();

		}
	);

	$( '.drawer-close' ).on(
		'click',
		function( e ) {

			e.preventDefault();

			hide_menu();

		}
	);


	// styleguide

	$( '.pattern' ).each(
		function() {

			var $link = $( this ).find( 'a.toggle' );
			var $source = $( this ).find( '.source' );
			var $display = $( this ).find( '.display' );

			$link.on(
				'click',
				function( e ) {

					e.preventDefault();

					$( '.source, .display' ).not( $source ).not( $display ).removeClass( 'hidden' );

					$source.toggleClass( 'hidden' );
					$display.toggleClass( 'hidden' );

				}
			);

		}
	);


	// theme and website preview

	$( '.preview-size a' ).on(
		'click',
		function( e ) {

			e.preventDefault();

			$( '.preview-size a' ).removeClass( 'selected' );
			$( this ).addClass( 'selected' );

			var new_size = $( this ).data( 'size' );
			$( '.iframe-wrapper iframe' ).css( 'max-width', new_size );

		}
	);


	// contact forms

	$( '.contact-other' ).on(
		'click',
		function( e ) {

			e.preventDefault();
			prepare_form( '.form-contact-other' );

		}
	);

	$( '.contact-technical' ).on(
		'click',
		function( e ) {

			e.preventDefault();
			prepare_form( '.form-contact-technical' );

		}
	);


	// smooth scroll

	var scroll_to_hash = function( e, duration ) {

		var $target = $( e.hash );

		if ( $target.length ) {
			var targetOffset = $target.offset().top - parseInt( $( 'html' ).css( 'margin-top' ) );
			$( 'html,body' ).animate( { scrollTop: targetOffset }, duration );
		}

		return false;

	};

	$( '.scroll-to' ).on(
		'click',
		function( e ) {

			e.preventDefault();

			return scroll_to_hash( this, 750 );

		}
	);


	// uncomment to test the newsletter code
	//setTimeout( show_newsletter, 2000 );

	$( '.main-menu button' ).on(
		'click',
		function ( e ) {

			e.preventDefault();

			toggle_nav();

		}
	);


	// radio buttons

	$( '.radio-group input' ).on(
		'change',
		function() {

			var $this = $( this );
			var $parent = $this.parent( 'label' );
			var $wrapper = $parent.parent( '.radio-group' );

			// remove checked class
			$wrapper.find( '.checked' ).removeClass( 'checked' );
			$parent.addClass( 'checked' );

		}
	);


	// wrap select boxes so they can be styled nicely

	$( 'select' ).each(
		function() {

			var $this = $( this );
			var size = $this.data( 'size' );
			var css_class = 'form-select';

			if ( size ) {
				css_class = css_class + ' ' + size + '-text';
			}

			$this.wrap( '<div class="' + css_class + '"></div>' );

		}
	);

	$( 'html' ).addClass( is_touch_device() ? 'device-touch' : 'device-click' );

	return;



	// add this back when you work out a more flexible solution

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

/**
 * Change the store price to remove the .00 from the end of prices.
 */
function fs_store_markup() {

	var price = $( '.price-table .price' ).html();

	if ( price ) {

		price = price.replace( '.00', '' );
		$( '.price-table .price' ).html( price );

	}

}


/**
 * Fastspring popup closed callback
 *
 * @param  object success Payment object.
 */
function fs_popup_closed( success ) {

	if ( null != success ) {
		// An order has happened! :)
		fbq( 'track', 'purchase_complete' );
	}

}
