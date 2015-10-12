<?php
    include( '_partials/head.php' );

    $themes = get_theme_data();

?>
    <body class="page-home">

        <?php include( '_partials/header.php' ); ?>

<?php
        $theme = array_shift( $themes );
?>
        <div class="wrapper block big">
            <header>
                <a href="<?php echo $theme['url']; ?>">
                    <img src="<?php echo image_path( 'devices/' . $theme['image'] ); ?>">
                </a>
            </header>
            <section>
                <div class="content sticky-footer">
                    <h3><?php echo $theme['name']; ?></h3>
                    <p><?php echo $theme['description']; ?></p>
                    <footer>
                        <a class="button" href="<?php echo $theme['url']; ?>">
                            Demo &amp; Details
                        </a>
                    </footer>
                </div>
            </section>
        </div>

        <div class="wrapper">
            <div class="note note-themes-club message">
                <h2>Join the Pro Theme Design Themes Club</h2>
                <p class="intro">Get downloads and support for all of our themes!</p>
                <a href="<?php echo path( 'theme-club/' ); ?>" class="button positive">More Info <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="theme-wrapper block-wrapper wrapper">
<?php
    foreach ( $themes as $theme ) {
?>
            <div class="block overlap-header">
                <header>
                    <a href="<?php echo $theme['url']; ?>">
                        <img src="<?php echo image_path( 'monitor/' . $theme['image'] ); ?>">
                    </a>
                </header>
                <div class="content sticky-footer">
                    <h3><?php echo $theme['name']; ?></h3>
                    <p><?php echo $theme['description']; ?></p>

                    <footer>
                        <a class="button" href="<?php echo $theme['url']; ?>">
                            Demo &amp; Details
                        </a>
                    </footer>
                </div>
            </div>
<?php
    }
?>
        </div>

<?php
    include( '_partials/footer.php' );
