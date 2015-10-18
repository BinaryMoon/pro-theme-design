<?php
    include( '_partials/head.php' );

    $themes = get_theme_data();

?>
    <body class="page-home">

        <?php include( '_partials/header.php' ); ?>

<?php
        $theme = array_shift( $themes );
        $template = site_view_path( '_partials/theme-big.php' );
        include( $template );
?>
        <div class="wrapper">
            <div class="note note-themes-club message">
                <h2>Join the Pro Theme Design Themes Club</h2>
                <p class="intro">Get downloads and support for all of our themes!</p>
                <a href="<?php echo path( 'theme-club/' ); ?>" class="button positive">More Info <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="theme-wrapper block-wrapper wrapper">
<?php
    $template = site_view_path( '_partials/theme-small.php' );
    foreach ( $themes as $theme ) {
        include( $template );
    }
?>
        </div>

<?php
    include( '_partials/footer.php' );
