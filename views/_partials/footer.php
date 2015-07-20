<footer>
<?php
    if ( '/' ===  $request->url ) {
?>
    <div class="row">

        <div class="map">
            <section class="origin">
                <h5 class="pink">About Us</h5>
                <h4 id="about-lead">Pro Theme Design began in 2007 as a collaboration between two web designers&mdash;</h4>
            </section>

            <div id="blurb-darren" class="pos">
                <img id="ava-darren" class="pos avatar" src="<?php echo $base_url; ?>/img/website/ava-darren.jpg" alt="Darren Hoyt">
                <h5 class="pink">Darren Hoyt</h5>
                <p class="location">Brooklyn, NY</p>
                <p class="bio">Established in the WordPress community for projects like <a href="http://www.darrenhoyt.com/2007/08/05/wordpress-magazine-theme-released/">Mimbo</a> and <a href="http://www.smashingmagazine.com/2008/09/08/agregado-a-free-wordpress-theme/">Agregado</a>, Darren also has 14 years experience designing websites for businesses and startups. His role at Pro Theme is taking what Ben builds and making it beautiful and simple to use.</p>

                <a href="http://www.darrenhoyt.com" target="_blank">
                    <span class="fa-stack fa-med">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-link fa-stack-1x fa-inverse"></i>
                    </span>
                    Personal Site
                </a>

                <br />

                <a href="http://www.twitter.com/darrenhoyt" target="_blank">
                    <span class="fa-stack fa-med">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                    Follow Me on Twitter
                </a>

            </div>

            <div id="blurb-ben" class="pos">
                <img id="ava-ben" class="pos avatar" src="<?php echo $base_url; ?>/img/website/ava-ben.jpg" alt="Ben Gillbanks">
                <h5 class="pink">Ben Gillbanks</h5>
                <p class="location">Exeter, England</p>
                <p class="bio">Ben is a full stack developer - doing both design and development - often turning Darrens crazy ideas into real products, but not averse to designing his own themes and writing the occassional plugin. Plus he blogs about WordPress and technology at <a href="http://www.binarymoon.co.uk/">Binary Moon</a>.</p>
                 <a href="http://www.binarymoon.co.uk" target="_blank" class="social">
                    <span class="fa-stack fa-med">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-link fa-stack-1x fa-inverse"></i>
                    </span>
                    Personal Site
                <a>

                <br />

                <a href="http://www.twitter.com/binarymoon" target="_blank" class="social">
                    <span class="fa-stack fa-med">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                    Follow Me on Twitter
                </a>

            </div>
        </div>
<?php
    }
?>

        <div id="newsletter-footer">
            <?php include( 'newsletter.php' ); ?>

            <p class="copyright">&copy; 2007 - <?php echo date( 'Y' ); ?> Pro Theme Design, All Rights Reserved <span class="sep">|</span> <i class="fa fa-wordpress"></i> <a href="https://theme.wordpress.com/themes/by/pro-theme-design/"> WordPress.com</a> <span class="sep">|</span> <i class="fa fa-envelope"></i> <a href="#" class="contact-form">Contact</a> <span class="sep">|</span> <a href="<?php echo $base_url; ?>/policies/">Policies</a></p>

            <p class="copyright"><a href="https://www.digitalocean.com/?refcode=d4442740ec05" target="_blank">Web hosting by Digital Ocean</a></p>

        </footer>


        <div class="contact-wrapper modal-wrapper">
            <div class="contact modal">
                <a href="/" class="overlay-close">&times;</a>
                <h1>Contact Us</h1>
                <form action="//formspree.io/support@prothemedesign.com" method="POST">
                    <label>
                        Name
                        <input type="text" name="name" placeholder="Jane Smith" required />
                    </label>

                    <label>
                        Email
                        <input type="email" name="_replyto" placeholder="name@domain.com" required />
                    </label>

                    <label>
                        Message
                        <textarea name="message" rows="6" required ></textarea>
                    </label>

                    <input type="submit" value="Send" class="button" />

                    <input type="hidden" name="_subject" value="Pro Theme Design Contact" />
                    <input type="text" name="_gotcha" style="display:none" />
                </form>
            </div>
        </div>



        <div class="newsletter-wrapper modal-wrapper">
            <div class="newsletter-modal modal">
                <a href="/" class="overlay-close">&times;</a>
                <?php include( 'newsletter.php' ); ?>
                <p>Be the first to hear about the latest Pro Theme Design news and offers, including theme and plugin releases.</p>
            </div>
        </div>


        <div class="overlay"></div>

        <script src="<?php echo $base_url; ?>/js/vendor/jquery.cookie.js"></script>
        <script src="<?php echo $base_url; ?>/js/main.js?d=1"></script>
    </body>
</html>
