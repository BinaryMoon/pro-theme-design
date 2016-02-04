<?php
    $download_url = path( 'assets/downloads/circular-icons.zip' );

    if ( ! DISABLE_GUMROAD ) {

        $download_url = 'https://gum.co/aNAW';
        site_enable_gumroad();

    }
?>
<div class="wrapper text">
    <?php site_breadcrumbs(); ?>

    <h1>Circular Icons Pro</h1>
    <p class="intro">A comprehensive icon set that includes more than 120 pixel icons in a variety of sizes from 16x16 up to 128x128, designed for a variety of uses from websites to apps. There are three icon packs available - all have the same icons in them, but some they include different file formats.</p>
    <p><a href="<?php echo $download_url; ?>"><img src="<?php echo image_path( 'website/circular-icons-screenshot.png' ); ?>" alt="Circular Icons Pro Large Screenshot" /></a></p>
    <ul>
        <li><strong>PNG Pack (free)</strong>, includes icons in 4 sizes (16x16, 32x32, 64x64, and 128x128).</li>
        <li><strong>SVG Pack ($10)</strong>, includes pngs, and svgs for all icons (the cd icon does not work as an svg).</li>
        <li><strong>Sketch Pack ($20)</strong>, includes icons as png, svg, and the sketch files - so you can edit them and add new icons that fit the same style.</li>
    </ul>
    <p><a href="<?php echo $download_url; ?>"><img src="<?php echo image_path( 'website/circular-icons-pro.png' ); ?>" alt="Circular Icons Pro Demo" /></a></p>
    <p><a href="<?php echo $download_url; ?>" class="button fat greedy positive"><i class="fa fa-download"></i>Download Circular Icons Pro</a></p>
    <p class="note">Released under the GPL.</p>
</div>

<?php
    site_include_view( '_partials/more-themes.php' );
