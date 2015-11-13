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
                        Pro Theme Design
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

            <nav class="menu-toggle">
                <a href="#main-menu">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
        </header>

