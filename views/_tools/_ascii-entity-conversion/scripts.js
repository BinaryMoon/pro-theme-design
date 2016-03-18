/* globals document, jQuery, console */

(function( $ ) {

    $( document ).ready( function() {

        $( 'p.entities a' ).on( 'click', function( e ) {

            e.preventDefault();

            var entity = $( this ).data( 'entity' );
            $( '#reverse' ).val( entity );
            process_character();

        } );

        $( '#convert' ).on( 'click', function( e ) {

            e.preventDefault();

            process_character();

            return false;

        } ).click();

    } );

    // convert the character to the relevant entity codes
    function process_character() {

        var letter = $( '#reverse' ).val();
        // calculate character code
        letter = letter.charCodeAt();

        // decimal value
        var hexValue = letter.toString( 16 );
        while( hexValue.length < 4 ){
            hexValue = "0" + hexValue;
        }

        console.log( letter );

        var result_numeric = '&amp;#' + letter.toString();
        var result_css = '\\'  + hexValue.toUpperCase();
        var result_js = '\\u' + hexValue.toUpperCase();

        $( '#numeric .value' ).html( result_numeric );
        $( '#css-value .value' ).html( result_css );
        $( '#js-value .value' ).html( result_js );

        $( '#numeric .demo code' ).html( 'In HTML ' + result_numeric + ' = &#' + letter.toString() + ';' );
        $( '#css-value .demo code' ).html( 'li:before {content:"' + result_css + '";}' );
        $( '#js-value .demo code' ).html( 'alert("The code ' + result_js + ' renders as HTML entity \u0026#' + letter + ';");' );

    }



} )( jQuery );
