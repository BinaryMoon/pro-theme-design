<?php
    include( '_partials/head.php' );
?>
    <body class="page-preview">
        <header>
            <h1><?php echo $theme[ 'name' ]; ?> Demo</h1>
<?php
    if ( ! empty( $theme[ 'url-wpcom' ] ) || ! empty( $theme[ 'url-wporg' ] ) ) {
?>
            <a href="#" class="button positive get-theme"><i class="fa fa-download"></i>Get Now!</a>
<?php
    }
?>
            <a href="<?php echo $theme[ 'url' ]; ?>" class="button"><i class="fa fa-info-circle"></i>Theme Details</a>
            <div class="preview-size">
                <a href="/" class="selected" data-size="100%"><i class="fa fa-desktop"></i></a>
                <a href="/" data-size="768px"><i class="fa fa-tablet"></i></a>
                <a href="/" data-size="375"><i class="fa fa-mobile"></i></a>
            </div>
        </header>

        <div class="iframe-wrapper">
            <iframe src="https://demo.prothemedesign.com/wordpress/<?php echo strtolower( $theme_slug ); ?>/" sandbox></iframe>
        </div>

<?php
    include( '_partials/buy-now.php' );
?>

        <div class="overlay"></div>

        <script src="<?php echo js_path( 'main.min.js' ); ?>"></script>
    </body>
</html>
