<?php
    include( '_partials/head.php' );

    $site_data = website_get( $site );
    $theme_data = themes_get( $site_data['theme'] );
?>
    <body class="page-preview">
        <header>
            <h1><?php echo $site_data[ 'name' ]; ?></h1>
            <a href="<?php echo $site_data[ 'url-showcase' ]; ?>" class="button"><i class="fa fa-arrow-left"></i><?php echo $theme_data[ 'name' ]; ?> Site Showcase</a>
            <a href="<?php echo $theme_data[ 'url' ]; ?>" class="button"><?php echo $theme_data[ 'name' ]; ?> Info</a>
            <div class="preview-size">
                <a href="/" class="selected" data-size="100%"><i class="fa fa-desktop"></i></a>
                <a href="/" data-size="768px"><i class="fa fa-tablet"></i></a>
                <a href="/" data-size="375"><i class="fa fa-mobile"></i></a>
            </div>
        </header>

        <div class="iframe-wrapper">
            <iframe src="<?php echo $site_data['url']; ?>/"></iframe>
        </div>

        <script src="<?php echo js_path( 'main.min.js' ); ?>"></script>
    </body>
</html>
