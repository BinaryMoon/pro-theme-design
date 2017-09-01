/* globals document, jQuery */

(function( $ ) {

	"use strict";

	$( document ).ready( function() {

		$( 'form input, form select' ).on(
			'input change',
			function( e ) {

				e.stopPropagation();
				e.preventDefault();

				calculate();

			}
		);

	} );

	// calculate the quote
	function calculate() {

		// the amount you should quote
		var quote = '';

		// the base price for the job
		var quote_addendum = '';

		// contingency money in case of problems
		var contingency = 1.5;

		var currency = $( '#currency' ).val();
		var rate = getFloat( '#rate', 10 );
		var duration = getFloat( '#duration', 1 );
		var expenses = getFloat( '#expenses', 0 );
		var client = getFloat( 'input[type=radio][name=client]:checked', 0.6 );
		var interest = getFloat( 'input[type=radio][name=interest]:checked', 0.6 );

		// how much effort is the project for you to work on. How much does it benefit you?
		// the higher the value, the more effort the project will be so the more you should earn from it
		var effort = 1 + client + interest;

		// Change currency symbol.
		$( 'label .symbol' ).html( currency );

		// base rate
		quote_addendum = ( rate * duration * contingency ) + expenses;
		// round value.
		quote_addendum = Math.ceil( quote_addendum );

		// total quote
		quote = quote_addendum * effort;
		// round value to nearest hundred
		quote = Math.ceil( quote / 100 ) * 100;
		quote = quote.toLocaleString();

		// assign the values
		$( 'p.quote span' ).html( currency + quote );
		$( 'p.quote-addendum span' ).html( currency + quote_addendum );

	}

	/**
	 * Get a float value from an element, with a default value in case it's removed.
	 */
	function getFloat( element, default_value ) {

		var number = parseFloat( $( element ).val() );

		if ( isNaN( number ) ) {
			number = default_value;
		}

		$( element ).val( number );

		return number;

	}

	calculate();

} )( jQuery );
