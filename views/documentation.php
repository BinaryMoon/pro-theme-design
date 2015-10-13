<?php
    include( '_partials/head.php' );
?>
    <body class="page-support">

<?php
    include( '_partials/header.php' );
?>

        <div class="wrapper text">
<?php
    site_breadcrumbs();

    if ( ! empty( $layout ) ) {
        include( $layout );
    }

    documentation_customization();

?>
        </div>

<?php
    include( '_partials/footer.php' );
