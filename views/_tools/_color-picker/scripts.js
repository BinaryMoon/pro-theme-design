/* globals Raphael, document, jQuery */

(function( $ ) {

    $( document ).ready( function() {

        var colorwheel = Raphael.colorwheel( $( '.colorwheel' ), 300, 180 ).color( '#268ebe' );

        colorwheel.onchange( function( color ) {

            $( 'input.color' ).val( color.hex );
            $( '.color-container' ).css( 'background', color.hex );

        } );

        $( 'input.color' ).on( 'keyup', function() {

            //colorwheel.public_set_color( $( 'input.color' ).val() );

        } );

    } );

} )( jQuery );
