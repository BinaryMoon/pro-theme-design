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
                <p><?php site_description(); ?></p>
            </div>

            <nav class="social">
                <a class="twitter" href="https://www.twitter.com/prothemedesign">
                    <i class="fa fa-twitter"></i>
                </a>
                <a class="facebook" href="https://www.facebook.com/prothemedesign">
                    <i class="fa fa-facebook"></i>
                </a>
            </nav>

            <nav class="utils">
                <a href="#main-menu" class="menu-toggle">
                    <i class="fa fa-bars"></i>
                </a>
                <a href="#search" class="search-toggle">
                    <i class="fa fa-search"></i>
                </a>
            </nav>
        </header>

