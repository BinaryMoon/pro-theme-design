<div class="wrapper text">
    <?php site_breadcrumbs(); ?>

    <h1>Theme Release Checklist</h1>
    <p class="intro">Before releasing a theme I use the checklist below to ensure the theme is fully tested and prepared. There's a lot of things to remember and this makes it easier to ensure that I have covered everything I need to.</p>

    <h2>How To Use</h2>

    <p>To use the checklist I copy it into the top of my themes functions.php file as a block comment. I then work down the list, one item at a time, deleting the item as it's complete. This gives a quick and easy way to tell how much is left to test.</p>

    <h2>The Checklist</h2>

    <ul>
        <li>test theme with and without Jetpack</li>
        <li>test theme with and without infinite scroll</li>
        <li>delete unused scripts</li>
        <li>delete unused customizer controls</li>
        <li>theme tags</li>
        <li>theme description</li>
        <li>screenshot (880 x 660)</li>
        <li>check custom header size is set correctly (and other custom image sizes are set correctly)</li>
        <li>test custom header, with and without an image</li>
        <li>test responsive styles</li>
        <li>set content_width</li>
        <li>set theme_colors (WordPress.com themes only)</li>
        <li>check custom page template styles</li>
        <li>create rtl.css - <a href="http://www.rtl-er.com/">http://www.rtl-er.com/</a></li>
        <li>change google font slugs so they match the font names (in functions.php and wpcom.php)</li>
        <li>theme scan using VIP theme scanner - <a href="https://github.com/Automattic/vip-scanner">https://github.com/Automattic/vip-scanner</a></li>
        <li>test site logo</li>
        <li>update readme.txt</li>
        <li>test hiding header and description through customizer works as expected. Should not hide site logo</li>
        <li>test logo is still visible when you hide the header text</li>
        <li>test custom backgrounds</li>
        <li>check all registered menus are being used</li>
        <li>check sidebar names and that sidebar display conditions match the sidebars they display</li>
        <li>check required accessibility items - <a href="https://make.wordpress.org/themes/handbook/review/accessibility/required/">https://make.wordpress.org/themes/handbook/review/accessibility/required/</a></li>
    </ul>

</div>

<?php
    site_include_view( '_partials/more-themes.php' );
