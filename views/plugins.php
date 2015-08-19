<?php
    include( '_partials/head.php' );

    $plugins = get_plugin_data();

?>
    <body class="page-plugins">

        <?php include( '_partials/nav.php' ); ?>
        <?php include( '_partials/header.php' ); ?>

        <div class="promo wordpress" id="plugin-wrapper">
<?php

    foreach( $plugins as $plugin ) {
?>
            <div class="product plugin">
                <div class="large-7 columns image">
                    <a href="<?php echo $plugin[ 'url' ]; ?>" target="_blank">
                        <img src="<?php echo $plugin[ 'image' ]; ?>">
                    </a>
                </div>
                <div class="large-5 columns">
                    <a class="desc" href="<?php echo $plugin[ 'url' ]; ?>" target="_blank">
                        <h3><?php echo $plugin[ 'name' ]; ?></h3>
                        <p><?php echo $plugin[ 'description' ]; ?></p>
                        <div class="button">More Info &rsaquo;</div>
                    </a>
                </div>
            </div>
<?php
    }
?>
        </div>

<?php
    include( '_partials/footer.php' );
