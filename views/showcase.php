<?php

    $themes = get_theme_data();
    $websites = get_website_data();

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

    include( '_partials/header.php' );
?>

    <body class="page-theme-showcase">

        <?php include( '_partials/nav.php' ); ?>

        <header class="masthead">
            <div class="row">
                <img class="logomark" src="<?php echo $base_url; ?>/img/website/logo-ptd.png" alt="Pro Theme Design Compass Logo" />
                <h1>Pro Theme Design</h1>
                <h2>A selection of the <strong>thousands of awesome sites</strong> our customers have built!</a>
            </div>
        </header>

        <div class="promo">
            <div class="content-main content-showcase">
                <div class="showcase-filters">
                    <a href="#" data-filter="">All</a>
                    <a href="#" data-filter="featured" class="selected">Featured</a>
                    <a href="#" data-filter="puzzle">Puzzle</a>
                    <a href="#" data-filter="romero">Romero</a>
                    <a href="#" data-filter="chronicle">Chronicle</a>
                    <a href="#" data-filter="broadsheet">Broadsheet</a>
                    <a href="#" data-filter="opti">Opti</a>
                </div>
                <div class="row">
<?php
    foreach( $websites as $site ) {

        $width = 400;
        $height = 300;
        $class = '';

        if ( ! empty( $site[ 'image' ] ) ) {
            $image_url = $base_url . '/img/showcase/' . $site[ 'image' ] . '.jpg';
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

        <script src="<?php echo $base_url; ?>/js/vendor/isotope.min.js"></script>

<?php
    include( '_partials/footer.php' );
