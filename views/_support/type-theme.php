<?php
    $doc = documentation_get( $page );
?>
    <h1><?php echo $doc[ 'name' ]; ?></h1>
    <img src="<?php echo image_path( 'devices/' . $doc['image'] ); ?>" />

<?php
    documentation_theme_features( $doc );

    include( '_theme/' . $page . '.php' );
