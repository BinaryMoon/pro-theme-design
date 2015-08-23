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
 *
 * Exhibit
 * https://paproductdesign.wordpress.com/
 * http://lovelymixture.com/
 * http://inspiringcompletewellbeing.com/
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
                    <a href="<?php echo path( 'theme-showcase/monet/' ); ?>" class="tag-monet">Monet</a>
                    <a href="<?php echo path( 'theme-showcase/romero/' ); ?>" class="tag-romero">Romero</a>
                    <a href="<?php echo path( 'theme-showcase/chronicle/' ); ?>" class="tag-chronicle">Chronicle</a>
                    <a href="<?php echo path( 'theme-showcase/broadsheet/' ); ?>" class="tag-broadsheet">Broadsheet</a>
                    <a href="<?php echo path( 'theme-showcase/opti/' ); ?>" class="tag-opti">Opti</a>
                </div>

<?php
    $theme_data = themes_get( $tag );

    if ( $theme_data ) {
?>
                <div class="showcase-description">
                    <h1><?php echo $theme_data[ 'name' ]; ?></h1>
                    <p><?php echo $theme_data[ 'description' ]; ?></p>
<?php
        if ( $theme_data[ 'url-wporg' ] ) {
?>
                    <a href="<?php echo $theme_data[ 'url-wporg' ]; ?>" class="button">Get for WordPress.org</a>
<?php
        }
        if ( $theme_data[ 'url-wpcom' ] ) {
?>
                    <a href="<?php echo $theme_data[ 'url-wpcom' ]; ?>" class="button">Get for WordPress.com</a>
<?php
        }
?>
                </div>
<?php
    }

    $count = 0;

    foreach( $websites as $site ) {

        $width = 400;
        $height = 300;
        $count ++;

        if ( ! empty( $site[ 'image' ] ) ) {
            $image_url = image_path( 'showcase/' . $site[ 'image' ] . '.jpg' );
        } else {
            $image_url = 'https://s0.wordpress.com/mshots/v1/' . urlencode( $site['url'] ) . '?w=' . $width . '&h=' . $height;
        }
?>
                    <div class="showcase-website theme-<?php echo $site['theme']; ?>">
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

        if ( $count == 6 ) {
?>
                    <div class="showcase-share">
                        <a href="<?php twitter_share_link( '@prothemedesign: Check out the site I made with your theme - ' ); ?>" target="_blank">
                            <i class="fa fa-twitter"></i>
                            Show us your Pro Theme Design powered site!
                        </a>
                    </div>
<?php
        }
    }
?>
                </div>
            </div>
        </div>

        <div class="showcase-wrapper modal-wrapper">
            <div class="showcase-modal modal">
                <header>
                    <h3 class="showcase-theme-name">Pro Theme Design</h3>
                    <a href="#" class="showcase-get-theme showcase-buy-com button" target="_blank">Buy on WordPress.com</a>
                    <a href="#" class="showcase-get-theme showcase-buy-org button" target="_blank">Get for WordPress.org</a>
                    <a href="/" class="overlay-close">&times;</a>
                </header>
                <div class="iframe-wrapper"></div>
            </div>
        </div>

<?php
    include( '_partials/footer.php' );
