<?php
    include( '_partials/head.php' );

    $theme_data = themes_get( $theme );
?>
    <body class="page-theme-preview">
        <header>
            <h1><?php echo $theme_data[ 'name' ]; ?></h1>
<?php
    if ( ! empty( $theme_data[ 'url-cm' ] ) ) {
?>
            <a href="https://creativemarket.com/BinaryMoon/<?php echo $theme_data[ 'url-cm' ]; ?>" class="button"><?php printf( 'Get %s on Creative Market', $theme_data[ 'name' ] ); ?></a>
<?php
    }
?>
            <div class="preview-size">
                <a href="/" class="selected" data-size="100%"><i class="fa fa-desktop"></i></a>
                <a href="/" data-size="768px"><i class="fa fa-tablet"></i></a>
                <a href="/" data-size="375"><i class="fa fa-mobile"></i></a>
            </div>
        </header>
        <div class="iframe-wrapper">
            <iframe src="//demo.prothemedesign.com/wordpress/<?php echo strtolower( $theme ); ?>" class="preview"></iframe>
        </div>
    </body>
</html>

<script>
    $(document).ready(function() {
        $( '.preview-size a' ).on( 'click', function( e ) {
            e.preventDefault();

            $( '.preview-size a' ).removeClass( 'selected' );
            $( this ).addClass( 'selected' );

            var new_size = $( this ).data( 'size' );
            $( '.iframe-wrapper iframe' ).css( 'max-width', new_size );
        });
    });

</script>
