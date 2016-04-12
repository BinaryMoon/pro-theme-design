<?php
    foreach ( $articles as $article ) {
?>
            <article class="summary">
                <i class="fa fa-<?php echo $article[ 'icon' ]; ?>" aria-hidden="true"></i>
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
