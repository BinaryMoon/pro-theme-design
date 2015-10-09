<?php
    include( '_partials/head.php' );
?>
    <body class="page-theme">

        <?php include( '_partials/header.php' ); ?>

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
<?php
    if ( ! empty( $theme[ 'url-wpcom' ] ) || ! empty( $theme[ 'url-wporg' ] ) ) {
?>
                        <a href="#" class="button positive get-theme"><i class="fa fa-download"></i>Get Now!</a>
<?php
    }
?>
                        <a href="<?php echo $theme[ 'url-preview' ]; ?>" class="button"><i class="fa fa-eye"></i>Preview</a>
                    </footer>
                </div>
            </section>
        </div>

        <!-- Showcase Websites -->
<?php
    $websites = website_get_by_tag( $theme_name, 3 );

    if ( $websites ) {
?>
        <div class="wrapper block-wrapper showcase-wrapper">
            <header class="block-header">
                <h2>Examples of <?php echo $theme[ 'name' ]; ?> in use <small><a href="<?php echo $theme[ 'url-showcase' ]; ?>">View More &rarr;</a></small></h2>
            </header>

<?php
        foreach ( $websites as $site ) {
?>
            <div class="block showcase-website theme-<?php echo $site['theme']; ?>">
                <a href="<?php echo $site['url-preview']; ?>" class="open">
                    <img src="<?php echo $site[ 'image_url' ]; ?>" width="400" height="300" />
                </a>
                <div class="meta">
                    <h3><?php echo $site['name']; ?></h3>
                </div>
            </div>
<?php
        }
?>
        </div>
<?php
    }
?>


        <!-- Theme Features -->
        <div class="wrapper block-wrapper">
            <header class="block-header">
                <h2><?php echo $theme[ 'name' ]; ?> Features</h2>
            </header>
<?php
    foreach( $theme[ 'supports' ] as $supports ) {

        $feature = documentation_get( $supports );

        if ( $feature && isset( $feature[ 'icon' ] ) ) {
?>
            <div class="block">
                <div class="content">
                    <i class="fa fa-<?php echo $feature[ 'icon' ]; ?> icon"></i>
                    <h3><?php echo $feature[ 'name' ]; ?></h3>
                    <p><?php echo $feature[ 'description' ]; ?></p>
                </div>
            </div>
<?php
        }
    }
?>
        </div>

        <div class="modal-wrapper theme-modal">
            <div class="modal">
                <a href="#" class="overlay-close"><i class="fa fa-times"></i></a>
<?php
    if ( ! empty( $theme[ 'url-wporg' ] ) ) {
?>
                <div class="note alt message">
                    <h3>WordPress.org - self-hosted sites</h3>
                    <span class="price"><?php echo $theme['price-wporg']; ?></span>
                    <p>Get a downloadable version of <?php echo $theme[ 'name' ]; ?> to use on your own web space.</p>
                    <a href="<?php echo $theme[ 'url-wporg' ]; ?>" target="_blank" class="button">Get for wordpress.org<i class="fa fa-external-link end"></i></a>
                </div>
<?php
    }

    if ( ! empty( $theme[ 'url-wpcom' ] ) ) {
?>

                <div class="note alt message">
                    <h3>WordPress.com - cloud hosted</h3>
                    <span class="price"><?php echo $theme['price-wpcom']; ?></span>
                    <p>Get a hosted version of <?php echo $theme[ 'name' ]; ?>. No setup or technical headaches (or theme download).</p>
                    <a href="<?php echo $theme[ 'url-wpcom' ]; ?>" target="_blank" class="button end">Get for wordpress.com<i class="fa fa-external-link end"></i></a>
                </div>
<?php
    }

    if ( ! empty( $theme[ 'url-wporg' ] ) ) {
?>

                <div class="note note-themes-club message alt">
                    <h3>Join the Theme Club</h3>
                    <p>Get access to all of our self-hosted themes for one price.</p>
                    <a href="<?php echo path( 'theme-club/' ); ?>" class="button positive">Join the Club</a>
                </div>
<?php
    }
?>
            </div>
        </div>
<?php

    include( '_partials/footer.php' );

