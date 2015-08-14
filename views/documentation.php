<?php
    include( '_partials/head.php' );
?>
    <body class="page-support">

<?php
    include( '_partials/nav.php' );
    include( '_partials/header.php' );
?>

        <div class="promo documentation">
            <div class="content-main content-text">
                <div class="row">
<?php
    SiteTemplate::breadcrumbs();

    if ( ! empty( $layout ) ) {
        include( $layout );
    }
?>
                </div>
            </div>
        </div>

        <script>
            $( '#formspree' ).attr( 'action', '//formspree.io/' + 'support' + '@' + 'prothemedesign' + '.' + 'com' );
        </script>
<?php
    include( '_partials/footer.php' );
