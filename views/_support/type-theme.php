<?php
    $doc = documentation_get( $page );
?>
    <h1><?php echo $doc[ 'name' ]; ?></h1>
    <p class="intro"><?php echo $doc[ 'description' ]; ?></p>
<?php
    if ( $doc[ 'url-wporg' ] ) {
?>
        <a href="<?php echo $doc[ 'url-wporg' ]; ?>" class="button">Get for WordPress.org</a>
<?php
    }

    if ( $doc[ 'url-wpcom' ] ) {
?>
        <a href="<?php echo $doc[ 'url-wpcom' ]; ?>" class="button">Get for WordPress.com</a>
<?php
    }
?>

    <img src="<?php echo image_path( 'devices/' . $doc['image'] ); ?>" />

<?php
    documentation_theme_features( $doc );

    include( '_theme/' . $page . '.php' );
