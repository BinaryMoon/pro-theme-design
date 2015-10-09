<?php
    include( '_partials/head.php' );

    $theme_data = themes_get( $theme );
?>
    <body class="page-preview">
        <header>
            <h1><?php echo $theme_data[ 'name' ]; ?></h1>
            <a href="<?php echo $theme_data[ 'url' ]; ?>" class="button"><i class="fa fa-info-circle"></i>Theme Details</a>
            <div class="preview-size">
                <a href="/" class="selected" data-size="100%"><i class="fa fa-desktop"></i></a>
                <a href="/" data-size="768px"><i class="fa fa-tablet"></i></a>
                <a href="/" data-size="375"><i class="fa fa-mobile"></i></a>
            </div>
        </header>

        <div class="iframe-wrapper">
            <iframe src="http://demo.prothemedesign.com/wordpress/<?php echo strtolower( $theme ); ?>/"></iframe>
        </div>

        <script src="<?php echo js_path( 'main.min.js' ); ?>"></script>
    </body>
</html>
