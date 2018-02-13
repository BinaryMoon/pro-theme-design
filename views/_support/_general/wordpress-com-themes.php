<p class="intro">Many of our themes are available on WordPress.com. You can see a list of the available themes below:</p>

<?php
    $themes = get_theme_data();
?>
<ul>
<?php
    foreach( $themes as $theme ) {
        if ( ! empty( $theme[ 'price-wpcom' ] ) ) {
?>
    <li><a href="<?php echo $theme[ 'url-wpcom' ]; ?>" target="_blank" rel="noopener"><strong><?php echo $theme[ 'name' ]; ?></strong> - <?php echo $theme[ 'description' ]; ?></a></li>
<?php
        }
    }
?>
</ul>
