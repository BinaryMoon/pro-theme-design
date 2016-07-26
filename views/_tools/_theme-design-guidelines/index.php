<div class="wrapper text">
    <?php site_breadcrumbs(); ?>

    <h1>Theme Design Guidelines</h1>

    <p class="intro">The following are a series of guidelines we use when designing themes. These are designed to ensure our themes are as flexible and easy to use as possible.</p>

    <p class="note tip">From a technical perspective, the <a href="https://developer.wordpress.com/themes/">theme developer guidelines</a> on wordpress.com should be followed.</p>

    <h2>Must Support</h2>

    <ul>
        <li>Must be attractive with and without featured images, and with no sidebars setup - this improves first impressions</li>
        <li>Jetpack <a href="<?php echo path( 'documentation/feature/infinite-scroll/' ); ?>">Infinite scroll</a> on homepage, and archive pages</li>
        <li>Custom Header Image</li>
        <li>Custom Background</li>
        <li><a href="https://codex.wordpress.org/Theme_Logo">Custom Logo</a></li>
        <li>Next and Previous post links on posts and pages</li>
        <li>Comments</li>
        <li>Tags and Category lists on posts</li>
        <li>All code &amp; assets should be GPL licensed (or compatible)</li>
        <li>At least 1 widget sidebar</li>
        <li>At least 1 custom menu</li>
        <li>Be retina ready</li>
        <li><a href="https://developer.wordpress.com/themes/#tux">Everything on the Theme UX Requirements List</a></li>
        <li><a href="https://make.wordpress.org/themes/handbook/review/accessibility/required/">Accessibility Ready</a></li>
    </ul>

    <h2>Recommended to Support</h2>

    <ul>
        <li><a href="<?php echo path( 'documentation/feature/featured-image/' ); ?>">Featured Images</a></li>
        <li>Keep featured images in consistent proportions so that users can more easily predict thumbnail shapes &amp; image crops</li>
        <li>No images should be included as part of the theme. The only images on the site should be ones uploaded by the theme user (featured images, custom header etc)</li>
        <li>Use SVGs for site icons and any visual elements that can't be reproduced through CSS</li>
        <li>Google Fonts/ default fonts. Don’t bundle fonts</li>
        <li><a href="https://jetpack.com/support/extra-sidebar-widgets/social-media-icons/">Jetpack Social media icons</a> (controlled through a custom menu)</li>
        <li>Alternate design for <a href="<?php echo path( 'documentation/feature/sticky-post/' ); ?>">sticky posts</a> on archive pages</li>
    </ul>


    <h2>Can Optionally Support</h2>

    <ul>
        <li>Jetpack <a href="<?php echo path( 'documentation/feature/featured-content/' ); ?>">Featured Content</a></li>
        <li>Jetpack <a href="<?php echo path( 'documentation/feature/testimonials/' ); ?>">Testimonials</a></li>
        <li>Jetpack <a href="<?php echo path( 'documentation/feature/portfolio/' ); ?>">Portfolios/ Projects</a></li>
        <li><a href="<?php echo path( 'documentation/feature/customizer/' ); ?>">Customizer Options</a> - options used should be kept to a minimum</li>
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
