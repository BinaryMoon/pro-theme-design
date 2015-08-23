<?php
    $doc = documentation_get( $page );
?>
    <h1><?php echo documentation_page_name( $page ); ?></h1>

    <p class="intro"><?php echo $doc[ 'description' ]; ?> <a href="<?php echo $doc[ 'url' ]; ?>" target="_blank" class="button">Details &amp; Download</a></p>

    <a href="<?php echo $doc[ 'url' ]; ?>" target="_blank">
        <img src="<?php echo $doc[ 'image' ]; ?>">
    </a>

<?php
    include( '_plugin/' . $page . '.php' );
