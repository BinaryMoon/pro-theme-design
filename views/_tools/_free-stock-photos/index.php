<?php
    $stock_sites = array(
        'unsplash.com' => 'Unsplash, the original.',
        'gratisography.com' => 'Free high-res pictures by Ryan McGuire.',
        'picjumbo.com' => 'Jumbo Photos.',
        'flickr.com/photos/wocintechchat/' => 'Women of Color in Tech',
        'minimography.com' => 'Minimography - Minimal photography',
        'images.superfamous.com' => 'Super Famous Images',
        'oldbookillustrations.com' => 'Old Book Illustrations',
        'mystock.photos' => 'My Stock Photos',
        'nos.twnsnd.co' => 'New Old Stock.',
        'imcreator.com/free' => 'Photos, icons, and more.',
        'jaymantri.com' => 'Jay Mantri.',
        'visualhunt.com' => 'Visual Hunt',
        'publicdomainarchive.com' => 'Public Domain Archive.',
        'en.freejpg.com.ar' => 'FreeJPG',
        'magdeleine.co/browse' => 'Hand picked photos.',
        'foodiesfeed.com' => 'Free food photos.',
        'picography.co' => 'Picography, free pics.',
        'isorepublic.com' => 'ISO Replublic.',
        'compfight.com' => 'Flickr Search Tool',
        'startupstockphotos.com' => 'Photos for your Startup',
        'pexels.com' => 'Pexels, pictures for projects.',
        'designerspics.com' => 'Designer Pics.',
        'crowthestone.com' => 'Crow the Stone.',
        'travelcoffeebook.com' => 'Travel Coffee Book.',
        'moveast.me' => 'Move East.',
        'barnimages.com' => 'Barn Images.',
        'freepik.com' => 'Free Pik, photos and vectors.',
        'peek.space' => 'Space Photos.',
        'freenaturestock.com' => 'Free Nature Stock.',
        'photocollections.io' => 'Photo Collections.',
        'streetwill.co' => 'Street Will.',
        'jeshoots.com' => 'Photos by Jan Vasek.',
        'lifeofpix.com' => 'Life of Pix.',
        'negativespace.co' => 'Negative Space.',
        'freeuse.io' => 'Free Use.',
        'splitshire.com' => 'Split Shire.',
        'lockandstockphotos.com' => 'Lock and Stock Photos.',
        'epicva.com' => 'Epic VA.',
    );
?>

<div class="wrapper text">
    <?php site_breadcrumbs(); ?>

    <h1>Free Stock Photos</h1>
    <p>This is a collection of the finest <strong>FREE</strong> stock photography sites online. Make sure to check the individual websites for photo license information. All sites have free photos, but some require some kind of credit.</p>
    <p>If you want something more unique then you can get some <a href="https://creativemarket.com/photos?u=BinaryMoon">fantastic stock photos at Creative Market</a>.</p>
</div>

<div class="wrapper block-wrapper">
<?php
    foreach ( $stock_sites as $url => $description ) {
        $image_url = site_screenshot( $url );
?>
    <div class="block showcase-website">
        <a href="http://<?php echo $url; ?>" target="_blank" class="image">
            <img src="<?php echo $image_url; ?>" width="400" height="300" alt="<?php echo $url; ?> Screenshot" />
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
    site_include_view( '_partials/more-themes.php' );
