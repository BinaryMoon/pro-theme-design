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
            <article>
                <h2><a href="<?php echo $article[ 'url' ]; ?>"><?php echo $article[ 'name' ]; ?></a></h2>
            </article>
<?php
            }
?>
        </div>

<?php
    include( '_partials/footer.php' );

