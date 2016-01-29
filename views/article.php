<?php
    include( '_partials/head.php' );
?>
    <body class="page-article">

        <?php include( '_partials/header.php' ); ?>

        <div class="wrapper text">
            <?php site_breadcrumbs(); ?>
            <h1><?php echo $article[ 'name' ]; ?></h1>
            <?php     site_include_view( '_articles/' . $article[ 'path' ] . '.php' ); ?>
        </div>

<?php
    include( '_partials/footer.php' );

