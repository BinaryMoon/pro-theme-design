;(function($){

    // homepage tabs

    $(document).ready(function(){

        $( 'nav.tabs a' ).on( 'click', function(e) {
            e.preventDefault();

            var $this = $(this);
            var target = $this.data( 'target' );
            var prefix = (target == 'creative-market') ? 'cm' : 'wp';

            // change tab highlight
            $( 'nav.tabs a' ).removeClass('selected');
            $this.addClass('selected');

            $( '#theme-wrapper' ).removeClass( 'creative-market wordpress' ).addClass( target );

            // show and hide accordingly
            $('.theme').hide();
            $('.theme.' + target).each(function() {
                var $this = $(this);

                // set price
                $this.find('.price').html( '$' + $this.data(prefix + '-price') );

                // set urls
                $this.find('a').attr('href', $this.data(prefix + '-url'));
            }).show();

        });

    });



    // contact form

    $(document).ready(function(){

        $( 'a.contact-form' ).on( 'click', function(e) {
            e.preventDefault();

            show_contact();
            show_overlay();
        });

        $( '.overlay-close' ).on( 'click', function(e) {
            e.preventDefault();

            hide_modal();
            hide_overlay();
        });

    });


    // showcase grid

    if ( $.isFunction( $.fn.isotope ) ) {

        $( window ).load( function() {

            var $grid = $( '.content-showcase .row' );
            $grid.isotope({
                itemSelector: '.showcase-website',
                filter: '.theme-featured'
            });


            // showcase filters

            $( '.showcase-filters a' ).on( 'click', function( e ) {

                e.preventDefault();

                var $this = $( this );
                $this.parent().find( '.selected' ).removeClass( 'selected' );
                $this.addClass( 'selected' );

                var themefilter = $this.data( 'filter' );

                if ( '' !== themefilter ) {
                    $grid.isotope({
                        filter: '.theme-' + themefilter
                    });
                } else {
                    $grid.isotope({
                        filter: ''
                    });
                }

            });

        });

    }

    // showcase popups

    $( '.showcase-website a' ).on( 'click', function( e ) {

        e.preventDefault();

        var $this = $( this );
        var modal = $( '.showcase-modal' );
        var path = $this.attr( 'href' );

        console.log( path );

        show_overlay();
        show_showcase();

        modal.find( 'h3' ).html( $this.data( 'site-name' ) );
        modal.find( 'a.showcase-buy-com' ).attr( 'href', $this.data( 'get-url-com' ) );
        modal.find( 'a.showcase-buy-org' ).attr( 'href', $this.data( 'get-url-org' ) );
        modal.find( '.iframe-wrapper' ).html( '<iframe src="' + path + '"></iframe>' );

    });




    function show_contact() {
        $('.contact-wrapper').fadeIn();
    }

    function show_showcase() {
        $('.showcase-modal').fadeIn();
    }

    function hide_modal() {
        $('.modal').fadeOut();
        $('.contact-wrapper').fadeOut();
    }

    function show_overlay() {
        $('.overlay').fadeIn();
    }

    function hide_overlay() {
        $('.overlay').fadeOut();
    }

})(jQuery);
