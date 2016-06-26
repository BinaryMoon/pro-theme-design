<?php
    include( '_partials/head.php' );
?>
    <body class="page-plugins" data-tag="<?php echo $tag; ?>">

        <?php include( '_partials/header.php' ); ?>

        <nav class="wrapper page-menu">
            <a href="<?php echo path( 'wordpress-plugins/' ); ?>" class="tag-ours">Our Plugins</a>
            <a href="<?php echo path( 'wordpress-plugins/supported/' ); ?>" class="tag-supported">Supported Plugins</a>
        </nav>

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
