<div class="wrapper text">
    <?php site_breadcrumbs(); ?>

    <h1>Theme Design Guidelines</h1>
    <p class="intro">The following are a series of guidelines we use when designing themes. These are designed to ensure our themes are as flexible and easy to use as possible.</p>

    <p class="note tip">From a technical perspective, the <a href="https://developer.wordpress.com/themes/">theme developer guidelines</a> on wordpress.com should be followed.</p>
    <h2>Must Support</h2>

    <ul>
        <li>Must be presentable with and without featured images, and with no sidebars setup - this improves first impressions</li>
        <li>Jetpack Infinite scroll on homepage, and archive pages</li>
        <li>Custom Header Image</li>
        <li>Custom Background</li>
        <li>Jetpack Site Logo</li>
        <li>Next and Previous post links on posts and pages</li>
        <li>Comments</li>
        <li>Tags and Category lists on posts</li>
        <li>All code &amp; assets should be GPL licensed (or compatible)</li>
        <li>At least 1 widget sidebar</li>
        <li>At least 1 custom menu</li>
        <li>Be retina ready</li>
    </ul>

    <h2>Recommended to Support</h2>

    <ul>
        <li>Featured Images</li>
        <li>Keep featured images in consistent proportions so that users can more easily predict thumbnail shapes</li>
        <li>No images should be included as part of the theme. The only images on the site should be ones uploaded by the theme user (featured images, custom header etc)</li>
        <li>Use Genericons for theme icons</li>
        <li>Use SVGs for any visual elements that can't be reproduced through CSS</li>
        <li>Google Fonts/ default fonts. Don’t bundle fonts</li>
        <li>Social link icons (controlled through a custom menu)</li>
    </ul>


    <h2>Can Optionally Support</h2>

    <ul>
        <li>Jetpack Featured Content</li>
        <li>Jetpack Testimonials</li>
        <li>Jetpack Portfolios/ Projects</li>
        <li>Customiser Options (definitely no admin options, options used should be kept to a minimum)</li>
    </ul>

    <h2>Must not Support</h2>

    <ul>
        <li>Admin options page</li>
        <li>Bundled plugins</li>
        <li>Anything that changes the default admin experience</li>
    </ul>

</div>
<?php
    site_include_view( '_partials/more-themes.php' );
