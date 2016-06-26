<?php
    include( '_partials/head.php' );
?>
    <body class="page-home">

        <?php include( '_partials/header.php' ); ?>

        <nav class="wrapper page-menu">
            <a href="<?php echo path( 'themes/wordpress.org/' ); ?>" class="tag-org">WordPress.org <!-- <small>Self Hosted Sites</small> --></a>
            <a href="<?php echo path( 'themes/wordpress.com/' ); ?>" class="tag-com">WordPress.com <!-- <small>WordPress in the Cloud</small> --></a>
        </nav>

        <div class="theme-wrapper block-wrapper wrapper">
<?php
    $template = site_view_path( '_partials/theme-small.php' );
    foreach ( $themes as $theme ) {
        include( $template );
    }
?>
        </div>

<?php
    if ( 'wordpress.org' === $host ) {
        site_include_view( '_partials/theme-club.php' );
    }

    include( '_partials/footer.php' );
