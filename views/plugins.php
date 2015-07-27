<?php
    include( '_partials/header.php' );

    $plugins = get_plugin_data();

?>
    <body class="page-plugins">

        <?php include( '_partials/nav.php' ); ?>

        <header class="masthead">
            <div class="row">
                <img class="logomark" src="<?php echo image_path( 'website/logo-ptd.png' ); ?>" alt="Pro Theme Design Compass Logo" />
                <h1>Pro Theme Design</h1>
                <h2>Plugins for creating the perfect WordPress site</a></h2>
            </div>
        </header>


        <div class="promo wordpress" id="plugin-wrapper">
<?php

    foreach( $plugins as $plugin ) {
?>
            <div class="product plugin">
                <div class="large-8 columns image">
                    <a href="<?php echo $plugin[ 'url' ]; ?>" target="_blank">
                        <img src="<?php echo $plugin[ 'image' ]; ?>">
                    </a>
                </div>
                <div class="large-4 columns">
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

    <div>

<?php
    include( '_partials/footer.php' );
