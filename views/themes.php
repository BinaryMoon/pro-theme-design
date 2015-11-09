<?php
    include( '_partials/head.php' );
?>
    <body class="page-home">

        <?php include( '_partials/header.php' ); ?>

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
