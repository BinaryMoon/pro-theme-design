<h2>Sell our WordPress Themes</h2>

<p>We are more than happy for people to sell our themes as affiliates. Since we do all of our sales through <strong>Creative Market</strong> you will need to setup a Creative Market account and then <a href="https://creativemarket.com/partners" target="_blank">apply to be a partner</a>. Once that's done you can link to our products on the links below - replacing </em>BinaryMoon</em> with your affiliate id.</p>

<?php
    $themes = get_theme_data();
?>
<ul>
<?php
    foreach( $themes as $theme ) {
        if ( ! empty( $theme[ 'price-cm' ] ) ) {
?>
    <li><a href="<?php echo $theme[ 'url-wporg' ]; ?>" target="_blank"><?php echo $theme[ 'name' ]; ?> - <?php echo $theme[ 'url-wporg' ]; ?></a></li>
<?php
        }
    }
?>
    <li><a href="https://creativemarket.com/BinaryMoon/316584-All-WordPress-Themes-Bundle?u=BinaryMoon">Themes Bundle - https://creativemarket.com/BinaryMoon/316584-All-WordPress-Themes-Bundle?u=BinaryMoon</a></li>
</ul>
