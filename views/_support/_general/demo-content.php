<p class="intro">Theme Demo content is useful for recreating the theme demos we use to showcase our products. You can use this as a starting point for your sites and then edit the content to fit your requirements. It's a great way to get started quickly.</p>

<p class="note">Please note: The demo content only covers blog posts, pages, and (if supported) testimonials and projects. It does not cover the theme settings. Please check the relevant <a href="<?php echo path( 'documentation/theme/' ); ?>">theme documentation</a> to see how to configure your theme.</p>

<?php
    $themes = get_theme_data();
?>
<ul>
<?php
    foreach( $themes as $theme ) {
?>
    <li><a href="<?php echo $theme[ 'url-demo-content' ]; ?>" target="_blank"><?php echo $theme[ 'name' ]; ?></a> - <a href="<?php echo $theme['url']; ?>">Theme Documentation</a></li>
<?php
    }
?>
</ul>
