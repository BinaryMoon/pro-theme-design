<?php
    $themes = themes_get_random();
?>
        <div class="theme-wrapper block-wrapper wrapper">
            <header class="block-header">
                <h2>Professional WordPress Themes <small><a href="<?php echo path( '' ); ?>">View All</a> <i class="fa fa-arrow-right end" aria-hidden="true"></i></small></h2>
            </header>
<?php
    $template = site_view_path( '_partials/theme-small.php' );

    foreach ( $themes as $theme ) {
        include( $template );
    }
?>
        </div>
