<?php
    include( '_partials/head.php' );

    $themes = get_theme_data();

?>
    <body class="page-home">

        <?php include( '_partials/header.php' ); ?>

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
