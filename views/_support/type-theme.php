<?php
    $doc = documentation_get( $page );
?>
    <h1><?php echo $doc[ 'name' ]; ?></h1>

    <div class="note intro breath">
        <p><?php echo $doc[ 'description' ]; ?></p>
        <p><a href="<?php echo $doc[ 'url' ]; ?>" class="button">More Info <i class="fa fa-arrow-right"></i></a></p>
    </div>

    <img src="<?php echo image_path( 'devices/' . $doc['image'] ); ?>" />

<?php
    documentation_theme_features( $doc );

    include( '_theme/' . $page . '.php' );
