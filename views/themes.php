<?php
    include( '_partials/head.php' );
?>
    <body class="page-home masthead-tabs">

        <?php include( '_partials/header.php' ); ?>

        <div class="tabs">
            <a href="<?php echo path( 'themes/wordpress.org/' ); ?>" <?php echo ($host === 'wordpress.org') ? 'class="active"': ''; ?>>WordPress.org <small>Self Hosted Sites</small></a>
            <a href="<?php echo path( 'themes/wordpress.com/' ); ?>" <?php echo ($host === 'wordpress.com') ? 'class="active"': ''; ?>>WordPress.com <small>WordPress in the Cloud</small></a>
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
    if ( 'wordpress.org' === $host ) {
        site_include_view( '_partials/theme-club.php' );
    }

    include( '_partials/footer.php' );
