        <footer id="footer">
<?php
    if ( page_is_home() ) {
?>
            <div class="wrapper map">

                <section class="origin">
                    <h5>About Us</h5>
                    <h4 id="about-lead">Pro Theme Design began in 2007 as a collaboration between two web designers</h4>
                </section>

                <div class="blurb blurb-ben">

                    <img id="ava-ben" class="avatar" src="<?php echo image_path( 'website/ava-ben.jpg' ); ?>" alt="Ben Gillbanks">
                    <h5>Ben Gillbanks</h5>
                    <p class="location">Exeter, England</p>
                    <p class="bio">Ben is a full stack developer - doing both design and development - often turning Darrens crazy ideas into real products, but not averse to designing his own themes and writing the occassional plugin. Plus he blogs about WordPress and technology at <a href="https://www.binarymoon.co.uk/">Binary Moon</a>.</p>

                    <a href="https://www.binarymoon.co.uk" target="_blank" class="link">
                        <i class="fa fa-link"></i> Personal Site
                    </a>
                    <a href="https://twitter.com/binarymoon" target="_blank" class="link">
                        <i class="fa fa-twitter"></i> Follow Me on Twitter
                    </a>

                </div>

                <div class="blurb blurb-darren">

                    <img id="ava-darren" class="pos avatar" src="<?php echo image_path( 'website/ava-darren.jpg' ); ?>" alt="Darren Hoyt">
                    <h5>Darren Hoyt</h5>
                    <p class="location">Brooklyn, NY</p>
                    <p class="bio">Established in the WordPress community for projects like <strong>Mimbo</strong> and <a href="http://www.smashingmagazine.com/2008/09/08/agregado-a-free-wordpress-theme/">Agregado</a>, Darren also has 14 years experience designing websites for businesses and startups. His role at Pro Theme is taking what Ben builds and making it beautiful and simple to use.</p>

                    <a href="http://www.darrenhoyt.com" target="_blank" class="link" >
                        <i class="fa fa-link"></i> Personal Site
                    </a>
                    <a href="http://www.twitter.com/darrenhoyt" target="_blank" class="link" >
                        <i class="fa fa-twitter"></i> Follow Me on Twitter
                    </a>

                </div>

            </div>
<?php
    }
?>
            <div class="wrapper footnote">

                <?php include( 'newsletter.php' ); ?>

                <p>
                    <i class="fa fa-question-circle"></i> <a href="<?php echo path( 'why-us/' ); ?>">Why Pro theme Design?</a> <span class="sep">|</span>
                    <i class="fa fa-sitemap"></i> <a href="<?php echo path( 'sitemap/' ); ?>">Sitemap</a> <span class="sep">|</span>
                    <!-- <i class="fa fa-wordpress"></i> <a href="https://theme.wordpress.com/themes/by/pro-theme-design/"> WordPress.com</a> <span class="sep">|</span> -->
                    <i class="fa fa-envelope"></i> <a href="<?php echo path( 'contact/' ); ?>">Contact</a> <span class="sep">|</span>
                    <i class="fa fa-check"></i> <a href="<?php echo path( 'policies/' ); ?>">Policies</a>
                </p>

                <p>&copy; 2007 - <?php echo date( 'Y' ); ?> Pro Theme Design, All Rights Reserved</p>

                <p><i class="fa fa-server"></i> <a href="https://www.digitalocean.com/?refcode=d4442740ec05" target="_blank">Web hosting by Digital Ocean</a></p>
                <p>
                    <a href="#masthead" class="scroll-to scroll-to-top">
                        <i class="fa fa-arrow-up"></i>
                        <span class="screen-reader-text">Scroll to Top</span>
                    </a>
                </p>
            </div>

        </footer>

        <div class="modal-wrapper newsletter-modal">
            <div class="modal">
                <a href="#" class="close-button"><i class="fa fa-times"></i></a>
                <?php include( 'newsletter.php' ); ?>
            </div>
        </div>

        <?php include( 'nav.php' ); ?>

        <?php include( 'popover.php' ); ?>

        <div class="drawer drawer-search">
            <a href="#" class="drawer-close" rel="nofollow"><i class="fa fa-times"></i></a>
            <?php include( 'google-search.php' ); ?>
        </div>

        <div class="overlay"></div>

        <?php site_script(); ?>

    </body>
</html>
