<?php
    include( '_partials/head.php' );

    $plugins = get_plugin_data();

?>
    <body class="page-plugins">

        <?php include( '_partials/header.php' ); ?>

        <!--
        <div class="tabs">
            <a href="<?php echo path( 'themes/wordpress.org/' ); ?>" class="active">Our Plugins</a><a href="<?php echo path( 'themes/wordpress.com/' ); ?>">Supported Plugins</a><a href="<?php echo path( 'themes/wordpress.com/' ); ?>">Recommended Plugins</a>
        </div>
-->

<?php

    $class = 'big';

    foreach( $plugins as $plugin ) {

        if ( 'big' === $class ) {
            $class = 'big alt';
        } else {
            $class = 'big';
        }

?>
        <div class="block <?php echo $class; ?> wrapper">

            <header>
                <a href="<?php echo $plugin[ 'url' ]; ?>" target="_blank">
                    <img src="<?php echo $plugin[ 'image' ]; ?>" alt="<?php echo $plugin['name']; ?> Cover Image" />
                </a>
            </header>

            <section>
                <div class="content">
                    <h3><?php echo $plugin[ 'name' ]; ?></h3>
                    <p><?php echo $plugin[ 'description' ]; ?></p>
                    <footer>
                        <a class="button" href="<?php echo $plugin[ 'url' ]; ?>" target="_blank">
                            More Info<i class="fa fa-arrow-right end" aria-hidden="true"></i>
                        </a>
                    </footer>
                </div>
            </section>
        </div>
<?php
    }

    include( '_partials/footer.php' );
