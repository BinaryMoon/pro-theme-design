<?php
    include( '_partials/head.php' );

    $themes = get_theme_data();

?>
    <body class="page-home masthead-tabs">

        <?php include( '_partials/header.php' ); ?>

        <div class="tabs">
            <a href="<?php echo path( 'themes/wordpress.org/' ); ?>" class="active">WordPress.org <small>Self Hosted Sites</small></a>
            <a href="<?php echo path( 'themes/wordpress.com/' ); ?>">WordPress.com <small>WordPress in the Cloud</small></a>
        </div>

<?php
        $theme = array_shift( $themes );
        include( site_view_path( '_partials/theme-big.php' ) );

        site_include_view( '_partials/theme-club.php' );
?>
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
