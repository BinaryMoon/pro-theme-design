<?php
    $websites = get_website_data(  );
?>

<div class="wrapper text">
    <?php site_breadcrumbs(); ?>

    <h1>Showcase Website Preview</h1>
    <p>The <a href="<?php echo path( 'theme-showcase/' ); ?>">theme showcase</a> websites can change theme. This page gives me a quick and easy way to tell which ones have changed and so need to be removed.</p>
</div>

<div class="wrapper block-wrapper">
<?php
    $count = 0;

    foreach( $websites as $key => $site ) {
?>
            <div class="block showcase-website">
                <a href="<?php echo $site[ 'url' ]; ?>" target="_blank" rel="nofollow noopener">
                    <img src="<?php echo $site[ 'image-preview' ]; ?>" width="400" alt="<?php echo $site['name']; ?> Screenshot" />
                </a>
            </div>
<?php
    }
?>
</div>
<?php
    site_include_view( '_partials/more-themes.php' );
