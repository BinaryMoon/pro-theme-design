<?php
    $h = 'p';
    if ( page_is_home() ) {
        $h = 'h1';
    }
?>
        <header class="masthead" id="masthead">
            <?php site_include_view( '_partials/nav.php' ); ?>
            <div class="wrapper">
                <<?php echo $h; ?> class="site-title">
                    <a href="<?php echo path(); ?>">
                        <?php site_header_title(); ?>
                    </a>
                </<?php echo $h; ?>>
                <p class="animated fadeInUp site-description"><?php site_description(); ?></p>
            </div>
        </header>

