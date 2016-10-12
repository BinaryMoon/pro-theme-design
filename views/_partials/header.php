<?php
    $h = 'p';
    if ( page_is_home() ) {
        $h = 'h1';
    }
?>
        <header class="masthead" id="masthead" role="banner">

            <div class="wrapper">

                <<?php echo $h; ?> class="site-title">
                    <a href="<?php echo path(); ?>">
                    <!-- <img src="<?php echo image_path( 'website/logo.png' ); ?>" alt="Pro Theme Design Logo" style="height:3rem; margin-right:0.1em;" /> -->
                        <?php site_header_title(); ?>
                    </a>
                </<?php echo $h; ?>>

                <!-- <p class="animated fadeInUp site-description"><?php site_description(); ?></p> -->

            </div>

            <?php site_include_view( '_partials/nav.php' ); ?>

        </header>

