<?php
    include( '_partials/head.php' );

    $themes = get_theme_data();

?>
    <body class="page-home">

        <?php include( '_partials/nav.php' ); ?>

        <header class="masthead">
            <div class="row">
                <img class="logomark" src="<?php echo image_path( 'website/logo-ptd.png' ); ?>" alt="Pro Theme Design Compass Logo" />
                <h1>Pro Theme Design</h1>
                <h2><?php SiteTemplate::description(); ?></h2>
            </div>

            <nav class="tabs">
                <a href="https://creativemarket.com/BinaryMoon?u=BinaryMoon" class="selected" data-target="creative-market">
                    <strong>WordPress.org</strong> <small>Self-Hosted Websites</small>
                </a>
                <a href="http://theme.wordpress.com/themes/by/pro-theme-design/" data-target="wordpress">
                    <strong>WordPress.com</strong> <small>WordPress in the Cloud</small>
                </a>
            </nav>
        </header>

        <div class="promo creative-market" id="theme-wrapper">
<?php

    $count_wordpress = 0;
    $count_creative_market = 0;

    foreach( $themes as $theme ) {

        $class = array(
            'row',
            'theme',
            'product',
            'wordpress',
        );

        $count_wordpress ++;

        if ( $count_wordpress % 2 == 0 ) {
            $class[] = 'wp_even';
        } else {
            $class[] = 'wp_odd';
        }

        if ( ! empty( $theme[ 'price-cm' ] ) ) {
            $class[] = 'creative-market';

            $count_creative_market ++;

            if ( $count_creative_market % 2 == 0 ) {
                $class[] = 'cm_even';
            } else {
                $class[] = 'cm_odd';
            }
        }

?>
            <div class="<?php echo implode( ' ', $class ); ?>" data-wp-price="<?php echo $theme['price-wpcom']; ?>" data-cm-price="<?php echo $theme['price-cm']; ?>" data-wp-url="<?php echo $theme['url-wpcom']; ?>" data-cm-url="<?php echo $theme['url-wporg']; ?>">
                <div class="large-8 columns image">
                    <a href="https://wordpress.com/themes/<?php echo $theme['url-wporg']; ?>" target="_blank">
                        <img src="<?php echo image_path( 'devices/' . $theme['image'] ); ?>">
                    </a>
                </div>
                <div class="large-4 columns">
                    <a class="desc" href="<?php echo $theme['url-wporg']; ?>" target="_blank">
                        <div class="price">$<?php echo $theme['price-wporg']; ?></div>
                        <h3><?php echo $theme['name']; ?></h3>
                        <p><?php echo $theme['description']; ?></p>
                        <div class="button">Demo &amp; Details</div>
                    </a>
                </div>
            </div>
<?php
    }
?>
        </div>

<?php
    include( '_partials/footer.php' );
