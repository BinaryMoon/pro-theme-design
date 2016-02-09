<p class="intro">Theme Demo content is useful for recreating the theme demos we use to showcase our products. You can use this as a starting point for your sites and then edit the content to fit your requirements. It's a great way to get started quickly.</p>

<p>The <em>WordPress Demo Content</em> for each theme is an xml file. This is a text file that describes the site data in a way that can be imported by WordPress. The demo content does not include image files however, once the import process has completed, the image files will have been loaded onto your site.</p>

<p>The demo content import works best when you are importing the content into a fresh WordPress install. If you are importing it into an install that already had content then you may see some issues with importing the media and with featured images being assigned.</p>

<p>To import the Demo Content xml file you should:</p>

<ol>
    <li>Download the file relevant to your theme - <a href="#demo-content" class="scroll-to">xml links are below</a>.</li>
    <li>Go to you WordPress site admin and make sure you have installed the <a href="https://wordpress.org/plugins/wordpress-importer/">WordPress Importer Plugin</a>.</li>
    <li>Go to Tools &rarr; Import &rarr; WordPress</li>
    <li>Select the file that you downloaded, then press 'Upload file and import'.</li>
    <li>Follow the instructions.</li>
</ol>

<p class="note">Please note: The demo content only covers blog posts, pages, and (if supported) testimonials and projects. It does not cover the theme settings. Please check the relevant <a href="<?php echo path( 'documentation/theme/' ); ?>">theme documentation</a> to see how to configure your theme.</p>

<h2 id="demo-content">Demo Content</h2>

<p>To download the demo content you can either right click the XML link and 'save link as', or open the page in your browser and 'save the page as'.</p>

<?php
    $themes = get_theme_data();
?>
<ul>
<?php
    foreach( $themes as $theme ) {
?>
    <li><a href="<?php echo $theme[ 'url-demo-content' ]; ?>" target="_blank"><?php echo $theme[ 'name' ]; ?> XML</a> - <a href="<?php echo $theme['url-documentation']; ?>">Theme Documentation</a></li>
<?php
    }
?>
</ul>
