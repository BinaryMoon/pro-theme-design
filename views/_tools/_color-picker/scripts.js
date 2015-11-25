/* globals Raphael, document, jQuery */

(function( $ ) {

    $( document ).ready( function() {
        var colorwheel = Raphael.colorwheel( $( '.colorwheel' ), 300, 180 ).color( '#268ebe' );

        colorwheel.onchange( function( color ) {

            var colors = [ parseInt( color.r ), parseInt( color.g ), parseInt( color.b ) ];
            $( 'input.color' ).val( color.hex );
            $( '.color-container' ).css( 'background', color.hex);

        } );

    } );

} )( jQuery );
