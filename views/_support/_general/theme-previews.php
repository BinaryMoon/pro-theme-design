<p class="intro">For quick access, we've added a list of all the available theme previews below:</p>

<?php
    $themes = get_theme_data();
?>
<ul>
<?php
    foreach( $themes as $theme ) {
        if ( ! empty( $theme[ 'url-preview' ] ) ) {
?>
    <li><a href="<?php echo $theme[ 'url-preview' ]; ?>"><?php echo $theme[ 'name' ]; ?></a></li>
<?php
        }
    }
?>
</ul>
