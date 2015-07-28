<?php

    $themes = get_theme_data();

/**
 * Vision
 * http://culturadeco.com/
 * http://sanalsaray.net/
 * https://ajspages.wordpress.com/
 * http://blog.creditsavvy.com.au/
 * http://lliayu.com/
 * http://ilonarubesova.cz/
 *
 * Lens
 * https://vaultsoftheorder.wordpress.com/
 * https://helensjournal.wordpress.com/
 * http://blog.midwestlifeshots.com/
 * http://thewordwalk.com/
 * http://deneoto.com/
 * https://foodlancer.wordpress.com/
 * http://sterlingimageworks.com/
 * http://goodnessmefood.com/
 * http://hoperoad.co.za/
 * https://renatoartes.wordpress.com/
 *
 */

    include( '_partials/head.php' );
?>

    <body class="page-theme-showcase" data-tag="<?php echo $tag; ?>">

        <?php include( '_partials/nav.php' ); ?>
        <?php include( '_partials/header.php' ); ?>

        <div class="promo">
            <div class="content-main content-showcase">
                <div class="showcase-filters">
                    <a href="<?php echo path( 'theme-showcase/' ); ?>" class="tag-">Recent</a>
                    <a href="<?php echo path( 'theme-showcase/featured/' ); ?>" class="tag-featured">Featured</a>
                    <a href="<?php echo path( 'theme-showcase/puzzle/' ); ?>" class="tag-puzzle">Puzzle</a>
                    <a href="<?php echo path( 'theme-showcase/romero/' ); ?>" class="tag-romero">Romero</a>
                    <a href="<?php echo path( 'theme-showcase/chronicle/' ); ?>" class="tag-chronicle">Chronicle</a>
                    <a href="<?php echo path( 'theme-showcase/broadsheet/' ); ?>" class="tag-broadsheet">Broadsheet</a>
                    <a href="<?php echo path( 'theme-showcase/opti/' ); ?>" class="tag-opti">Opti</a>
                </div>

                <div class="row">
<?php
    foreach( $websites as $site ) {

        $width = 400;
        $height = 300;
        $class = '';

        if ( ! empty( $site[ 'image' ] ) ) {
            $image_url = image_path( 'showcase/' . $site[ 'image' ] . '.jpg' );
        } else {
            $image_url = 'https://s0.wordpress.com/mshots/v1/' . urlencode( $site['url'] ) . '?w=' . $width . '&h=' . $height;
        }

        if ( isset( $site['featured'] ) ) { $class = 'theme-featured'; }

?>
                    <div class="showcase-website theme-<?php echo $site['theme']; ?> <?php echo $class; ?>">
                        <a href="<?php echo $site['url']; ?>"
                           data-theme="<?php echo ucwords( $site['theme'] ); ?>"
                           data-site-name="<?php echo ucwords( $site['name'] ); ?>"
                           data-get-url-org="<?php echo $themes[ $site[ 'theme' ] ][ 'url-wporg' ]; ?>"
                           data-get-url-com="<?php echo $themes[ $site[ 'theme' ] ][ 'url-wpcom' ]; ?>"
                        >
                            <img src="<?php echo $image_url; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />
                            <div class="meta">
                                <h3><?php echo $site['name']; ?></h3>
                                <span class="theme"><?php echo ucwords( $site['theme'] ); ?></span>
                            </div>
                        </a>
                    </div>
<?php

    }
?>
                </div>
            </div>
        </div>

        <div class="showcase-wrapper modal-wrapper">
            <div class="showcase-modal modal">
                <header>
                    <h3 class="showcase-theme-name">Pro Theme Design</h3>
                    <a href="#" class="showcase-get-theme showcase-buy-com" target="_blank">Buy on WordPress.com <i class="fa fa-arrow-right"></i></a>
                    <a href="#" class="showcase-get-theme showcase-buy-org" target="_blank">Get for WordPress.org <i class="fa fa-arrow-right"></i></a>
                    <a href="/" class="overlay-close">&times;</a>
                </header>
                <div class="iframe-wrapper"></div>
            </div>
        </div>

<?php
    include( '_partials/footer.php' );
