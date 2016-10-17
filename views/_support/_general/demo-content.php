<p class="intro">Theme Demo content is useful for recreating the theme demos we use to showcase our products. You can use this as a starting point for your sites and then edit the content to fit your requirements. It's a great way to get started quickly.</p>

<h2>Posts and Pages</h2>

<p>The <em>WordPress Demo Content</em> for each theme is an xml file. This is a text file that describes the site data in a way that can be imported by WordPress. The demo content does not include image files however, once the import process has completed, the image files will have been loaded onto your site.</p>

<p>The demo content import works best when you are importing the content into a fresh WordPress install. If you are importing it into an install that already had content then you may see some issues with importing the media and with featured images being assigned.</p>

<p>To import the Demo Content xml file you should:</p>

<ol>
    <li>Download the file relevant to your theme - <a href="#demo-content" class="scroll-to">xml links are below</a>.</li>
    <li>Go to you WordPress site admin and make sure you have installed the <a href="https://wordpress.org/plugins/wordpress-importer/">WordPress Importer Plugin</a>.</li>
    <li>Go to Tools &rarr; Import &rarr; WordPress</li>
    <li>Select the file that you downloaded, then press <em>'Upload file and import'</em>.</li>
    <li>Follow the instructions on screen.</li>
    <li>The import process may take a while, but once complete you will have all of the posts, pages, and media from the demo site on your local WordPress install.</li>
</ol>

<p class="note">Please note: The demo content only covers blog posts, pages, and (if supported) testimonials and projects. It does not cover the theme settings. Please check the relevant <a href="<?php echo path( 'documentation/theme/' ); ?>">theme documentation</a> to see how to configure your theme.</p>

<h2>Widgets</h2>

<p>Widget content can be imported using the <a href="https://wordpress.org/plugins/widget-settings-importexport/">Widget Settings Import/ Export</a> plugin. To import the content you should:</p>

<ol>
    <li>Download the file relevant to your theme - <a href="#demo-content" class="scroll-to">widget json links are below</a>.</li>
    <li>Go to you WordPress site admin and make sure you have installed the <a href="https://wordpress.org/plugins/widget-settings-importexport/">Widget Settings Import/ Export Plugin</a>.</li>
    <li>Go to Tools &rarr; Widget Settings Import</li>
    <li>Select the file that you downloaded, then press <em>'Show Widget Settings'</em>.</li>
    <li>Select the widgets you want to import and then press <em>'Import Widget Settings'</em>.</li>
</ol>

<h2 id="demo-content">Demo Content</h2>

<p>To download the demo content you can either right click the file link and <em>'save link as'</em>, or open the page in your browser and 'save the page as'.</p>

<?php
    $themes = get_theme_data();
?>
<ul>
<?php
    foreach( $themes as $theme ) {
        if ( ! empty( $theme[ 'download-button' ] ) ) {
?>
    <li>
        <a href="<?php echo $theme[ 'url-demo-content' ]; ?>" target="_blank"><?php echo $theme[ 'name' ]; ?> posts XML</a> -
        <a href="<?php echo $theme[ 'url-demo-widgets' ]; ?>" target="_blank"><?php echo $theme[ 'name' ]; ?> Widget JSON</a> -
        <a href="<?php echo $theme['url-documentation']; ?>">Theme Documentation</a>
    </li>
<?php
        }
    }
?>
</ul>


