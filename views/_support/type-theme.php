<?php
    $doc = documentation_get( $page );
?>
    <h1><?php echo $doc[ 'name' ]; ?></h1>
    <img src="<?php echo image_path( 'devices/' . $doc['image'] ); ?>" />

<?php
    if ( ! empty( $doc[ 'related' ][ 'features' ] ) ) {
?>
    <h2>Features</h2>
    <ul>
<?php
?>
    </ul>
<?php
    }

    //include( '_theme/' . $page . '.php' );
