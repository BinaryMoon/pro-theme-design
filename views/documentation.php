<?php
    include( '_partials/head.php' );
?>
    <body class="page-support">

<?php
    include( '_partials/nav.php' );
    include( '_partials/header.php' );
?>

        <div class="documentation">
            <div class="content-main content-text">
                <div class="row">
<?php
    SiteTemplate::breadcrumbs();

    if ( ! empty( $layout ) ) {
        include( $layout );
    }

    documentation_customization();

?>
                </div>
            </div>
        </div>
<?php
    include( '_partials/footer.php' );
