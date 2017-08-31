/* globals document, jQuery */

(function( $ ) {

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

		// how much effort is the project for you to work on. How much does it benefit you?
		// the higher the value, the more effort the project will be so the more you should earn from it
		var effort = 1;

		var currency = $( '#currency' ).val();
		var rate = parseFloat( $( '#rate' ).val() );
		var duration = parseFloat( $( '#duration' ).val() );
		var expenses = parseFloat( $( '#expenses' ).val() );
		var client = parseFloat( $( 'input[type=radio][name=client]:checked' ).val() );
		var interest = parseFloat( $( 'input[type=radio][name=interest]:checked' ).val() );

		// Change currency symbol.
		$( 'label .symbol' ).html( currency );

		effort = effort + client + interest;

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

	calculate();

} )( jQuery );
