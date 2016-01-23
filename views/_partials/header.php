<?php
    $h = 'p';
    if ( page_is_home() ) {
        $h = 'h1';
    }
?>
        <header class="masthead" id="masthead">
            <div class="wrapper">
                <<?php echo $h; ?> class="site-title">
                    <a href="<?php echo path(); ?>">
                        <?php site_header_title(); ?>
                    </a>
                </<?php echo $h; ?>>
                <p class="animated fadeInUp"><?php site_description(); ?></p>
            </div>

            <nav class="social">
                <a class="twitter" href="https://www.twitter.com/prothemedesign">
                    <i class="fa fa-twitter"></i>
                    <span class="screen-reader-text">Follow us on Twitter</span>
                </a>
                <a class="facebook" href="https://www.facebook.com/prothemedesign">
                    <i class="fa fa-facebook"></i>
                    <span class="screen-reader-text">Follow us on Facebook</span>
                </a>
            </nav>

            <nav class="utils">
                <a href="#main-menu" class="menu-toggle">
                    <i class="fa fa-bars"></i>
                    <span class="screen-reader-text">Go to menu</span>
                </a>
                <a href="#search" class="search-toggle">
                    <i class="fa fa-search"></i>
                    <span class="screen-reader-text">Search Pro Theme Design</span>
                </a>
            </nav>
        </header>

