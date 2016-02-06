<?php
    include( '_partials/head.php' );
?>
    <body class="page-articles">

        <?php include( '_partials/header.php' ); ?>

        <div class="wrapper text">
            <h1>Articles</h1>
<?php
            foreach ( $articles as $article ) {
?>
            <article class="summary">
                <i class="fa fa-<?php echo $article[ 'icon' ]; ?>"></i>
                <h2><a href="<?php echo $article[ 'url' ]; ?>"><?php echo $article[ 'name' ]; ?></a></h2>
<?php
                if ( ! empty( $article['description'] ) ) {
?>
                <p><?php echo $article['description']; ?></p>
<?php
                }
?>
            </article>
<?php
            }
?>
        <p class="note twitter">What would you like to see us write about? <a href="<?php echo twitter_share_link( 'Hi @prothemedesign, I would love to know more about' ); ?>" target="_blank">Ping us on Twitter to let us know</a>.</p>

        </div>

<?php
    include( '_partials/footer.php' );

