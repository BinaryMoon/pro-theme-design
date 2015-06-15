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
                <img id="ava-darren" class="pos avatar" src="<?php echo $request->base; ?>/img/ava-darren.jpg" alt="Darren Hoyt">
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
                <img id="ava-ben" class="pos avatar" src="<?php echo $request->base; ?>/img/ava-ben.jpg" alt="Ben Gillbanks">
                <h5 class="pink">Ben Gillbanks</h5>
                <p class="location">Exeter, England</p>
                <p class="bio">Ben is a WordPress ninja, best known for creating <a href="http://www.binarymoon.co.uk/projects/regulus/">Regulus</a>. More recently he took over the development of the image-resize script <a href="http://code.google.com/p/timthumb/">TimThumb</a>. He spends his time at Pro Theme Design turning Darren's ideas into reality.</p>
                 <a href="http://www.binarymoon.co.uk" target="_blank" class="social">
                    <span class="fa-stack fa-med">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-link fa-stack-1x fa-inverse"></i>
                    </span>
                    Personal Site
                    </a>
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
          <section class="newsletter">
          <form action="http://prothemedesign.us5.list-manage2.com/subscribe/post?u=45aef63185bbec7c729059160&amp;id=04983a7171" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
          <label for="mce-EMAIL">WordPress Tips &amp; News in Your Inbox</label>
          <div class="mce-wrap">
          <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your Email Address" required="">
          <input type="submit" value="Subscribe" name="subscribe" class="mc-embedded-subscribe">
          </div>
          </form>
          </section>

            <p class="copyright">&copy; 2007-2014 Pro Theme Design, All Rights Reserved <span class="sep">|</span> <i class="fa fa-wordpress"></i> <a href="http://www.wordpress.com"> WordPress.com</a> <span class="sep">|</span> <i class="fa fa-envelope"></i> <a href="#" class="contact-form">Contact</a></p>

        <p class="copyright"><a href="https://www.digitalocean.com/?refcode=d4442740ec05" target="_blank">Web hosting by Digital Ocean</a></p>

  </footer>

        <div class="overlay"></div>

        <div class="contact-wrapper">
            <div class="contact">
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



    <script src="<?php echo $request->base; ?>/js/vendor/jquery.js"></script>
    <script>
        ;(function($){
            $('nav.tabs a').on('click', function(e) {
                e.preventDefault();

                var $this = $(this);
                var target = $this.data('target');
                var prefix = (target == 'creative-market') ? 'cm' : 'wp';

                // change tab highlight
                $('nav.tabs a').removeClass('selected');
                $this.addClass('selected');

                // show and hide accordingly
                $('.theme').hide();
                $('.theme.' + target).each(function() {
                    var $this = $(this);

                    // set price
                    $this.find('.price').html( '$' + $this.data(prefix + '-price') );

                    // set urls
                    $this.find('a').attr('href', $this.data(prefix + '-url'));
                }).show();

            });

            $('a.contact-form').on('click', function(e) {
                e.preventDefault();

                show_contact();
                show_overlay();
            });

            $('.overlay-close').on('click', function(e) {
                e.preventDefault();

                hide_contact();
                hide_overlay();
            });


            function show_contact() {
                $('.contact-wrapper').fadeIn();
            }

            function hide_contact() {
                $('.contact-wrapper').fadeOut();
            }

            function show_overlay() {
                $('.overlay').fadeIn();
            }

            function hide_overlay() {
                $('.overlay').fadeOut();
            }
        })(jQuery);
    </script>
  </body>
</html>
