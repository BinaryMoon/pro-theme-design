<?php
    $stock_sites = array(
        'videos.pexels.com' => 'Pexels Videos.',
        'coverr.co' => 'Coverr videos.',
        'videezy.com' => 'Videezy HD Stock footage.',
        'xstockvideo.com' => 'X Stock Video.',
        'vidsplay.com' => 'Vids Play, used on tv apparently.',
        'free-hd-footage.com' => 'Free HD Footage.',
        'wedistill.io' => 'We Distill.',
        'mazwai.com/#/videos' => 'Mazwai.',
        'fancyfootage.club' => 'Fancy Footage Club.',
        'splashbase.co/images?videos=true' => 'Splashbase.',
        'tanurix.com/video-stock-footage.html' => 'Tanurix, video stock footage.',
        'clipcanvas.com/free-footage' => 'Clip Canvas Free Footage.',
        'nasa.gov/multimedia/videogallery/' => 'NASA Video Gallery.',
        'videvo.net' => 'Videvo, stock footage and motion graphics.',
    );
?>

<div class="wrapper text">
    <?php SiteTemplate::breadcrumbs(); ?>

    <h1>Free Stock Videos</h1>
    <p>A current trend is to add video backgrounds to your site. This is a collection of the finest <strong>FREE</strong> stock video sites online. If you want images for your project then check out the <a href="<?php echo path( 'tools/free-stock-photos/' ); ?>">free stock photo galleries</a> as well.</p>
</div>

<div class="wrapper block-wrapper theme-wrapper">
<?php
    foreach ( $stock_sites as $url => $description ) {
        $image_url = site_screenshot( $url );
?>
    <div class="block showcase-website">
        <a href="http://<?php echo $url; ?>" target="_blank" class="image">
            <img src="<?php echo $image_url; ?>" width="400" height="300" />
        </a>
        <div class="meta">
            <h3><?php echo $url; ?></h3>
            <p><?php echo $description; ?></p>
        </div>
    </div>
<?php
    }
?>
</div>
<?php
    site_include_view( '/_partials/more-themes.php' );
