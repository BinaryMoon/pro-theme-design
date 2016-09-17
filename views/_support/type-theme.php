<?php
    $doc = documentation_get( $page );

    $install_url = path( 'documentation/general/theme-installation/' );

    if ( ! empty( $doc[ 'parent-theme' ] ) ) {
        $install_url = path( 'documentation/general/child-theme-installation/' );
    }
?>

    <h1><?php echo $doc[ 'name' ]; ?> Documentation</h1>

    <div class="note intro breath">
        <p><?php echo $doc[ 'description' ]; ?></p>
        <p><a href="<?php echo $doc[ 'url-details' ]; ?>" class="button">More Info <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
    </div>
<?php
    if ( ! site_include_exists( '_support/_theme/' . $page . '.php' ) ) {
?>
    <img src="<?php echo image_path( 'devices/' . $doc['image'] ); ?>" alt="<?php echo $doc['name']; ?> Screenshot" />
<?php
    }
?>
    <h2>Getting Started</h2>

    <ul>
        <li><a href="https://codex.wordpress.org/Installing_WordPress" target="_blank">Getting Started with WordPress</a></li>
        <li><a href="https://codex.wordpress.org/First_Steps_With_WordPress" target="_blank">First Steps with WordPress</a></li>
        <li><a href="<?php echo $install_url; ?>">Installing <?php echo $doc[ 'name' ]; ?></a></li>
        <li><a href="<?php echo $doc[ 'url-demo-content' ]; ?>"><?php echo $doc['name']; ?> Demo Content</a> - <a href="<?php echo path( 'documentation/general/demo-content/' ); ?>">More about demo content</a></li>
    </ul>

    <p class="note tip"><a href="https://wordpress.com/themes/<?php echo $page; ?>/support/">Documentation for WordPress.com is available here.</a></p>

<?php
    site_include_view( '_support/_theme/' . $page . '.php' );

    documentation_theme_features( $doc );
?>

    <h2>Changelog</h2>
<?php
    include( $doc[ 'path-changelog'] );
