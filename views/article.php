<?php
    include( '_partials/head.php' );
?>
    <body class="page-article">

        <?php include( '_partials/header.php' ); ?>

        <div class="wrapper text">
            <?php site_breadcrumbs(); ?>
            <h1><?php echo $article[ 'name' ]; ?></h1>
            <?php site_include_view( '_articles/' . $article[ 'path' ] . '.php' ); ?>

            <p class="note twitter">What do you think? Could we improve this? <a href="<?php echo twitter_share_link( 'I just read "' . $article[ 'name' ] . '" by @prothemedesign' ); ?>" target="_blank">Let us know on Twitter</a>.</p>

            <p class="meta">First published on: <time><?php echo $article['date']; ?></time></p>
        </div>

<?php
    include( '_partials/footer.php' );

