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

        <?php include( '_partials/header.php' ); ?>

        <nav class="wrapper page-menu">
            <a href="<?php echo path( 'theme-showcase/' ); ?>" class="tag-">Recent</a>
            <a href="<?php echo path( 'theme-showcase/featured/' ); ?>" class="tag-featured">Featured</a>
            <a href="<?php echo path( 'theme-showcase/puzzle/' ); ?>" class="tag-puzzle">Puzzle</a>
            <a href="<?php echo path( 'theme-showcase/monet/' ); ?>" class="tag-monet">Monet</a>
            <a href="<?php echo path( 'theme-showcase/romero/' ); ?>" class="tag-romero">Romero</a>
            <a href="<?php echo path( 'theme-showcase/chronicle/' ); ?>" class="tag-chronicle">Chronicle</a>
            <a href="<?php echo path( 'theme-showcase/broadsheet/' ); ?>" class="tag-broadsheet">Broadsheet</a>
            <a href="<?php echo path( 'theme-showcase/opti/' ); ?>" class="tag-opti">Opti</a>
        </nav>

<?php
    $theme_data = themes_get( $tag );

    if ( $theme_data ) {
?>
        <div class="wrapper showcase-description">
            <div class="note message">
                <h1><?php echo $theme_data[ 'name' ]; ?></h1>
                <p class="intro"><?php echo $theme_data[ 'description' ]; ?></p>
                <a href="<?php echo $theme_data[ 'url' ]; ?>" class="button positive">More info <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
<?php
    }
?>
        <div class="wrapper block-wrapper theme-wrapper">
<?php
    $count = 0;

    foreach( $websites as $key => $site ) {

        $count ++;
?>
            <div class="block showcase-website theme-<?php echo $site['theme']; ?>">
                <a href="<?php echo $site[ 'url-preview' ]; ?>" class="image">
                    <img src="<?php echo $site[ 'image_url' ]; ?>" width="400" height="300" alt="<?php echo $site['name']; ?> Screenshot" />
                </a>
                <div class="meta">
                    <h3><?php echo $site['name']; ?></h3>
                    <a href="<?php echo path( 'theme/' . $site['theme'] . '/' ); ?>" class="theme"><?php echo ucwords( $site['theme'] ); ?></a>
                </div>
            </div>
<?php
    }
?>
        </div>

<?php
    include( '_partials/footer.php' );
