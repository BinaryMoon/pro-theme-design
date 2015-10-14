<?php
    include( '_partials/head.php' );
?>
    <body class="page-contact">

        <?php include( '_partials/header.php' ); ?>

        <div class="wrapper text">
            <h1>How can we help?</h1>
            <div class="contact-selection">
                <a class="contact-customization" href="<?php echo path( 'theme-customization/' ); ?>">Theme Customization <i class="fa fa-arrow-right"></i></a>
                <a class="contact-documentation" href="<?php echo path( 'documentation/general/transfer-from-wordpress-com/' ); ?>">WordPress.com theme Transfer <i class="fa fa-arrow-right"></i></a>
                <a class="contact-technical" href="#">Theme Help / Question <i class="fa fa-arrow-right"></i></a>
                <a class="contact-other" href="#">Other <i class="fa fa-arrow-right"></i></a>
                <a class="contact-refund" href="<?php echo path( 'documentation/general/refunds/' ); ?>">Refund Request <i class="fa fa-arrow-right"></i></a>
            </div>


            <!-- pre sales contact form -->
            <form class="formspree form-contact-other" method="POST">
                <label>
                    <span>Your Name</span>
                    <input type="text" name="name" placeholder="Jane Smith" required />
                </label>

                <label>
                    <span>Your Email Address</span>
                    <input type="email" name="_replyto" placeholder="name@domain.com" required />
                </label>

                <label>
                    <span>Message</span>
                    <textarea name="message" rows="6" required ></textarea>
                </label>

                <input type="submit" value="Send" class="button" />

                <input type="hidden" name="_subject" value="Pro Theme Design Contact" />
                <input type="hidden" name="_next" value="//prothemedesign.com<?php echo path( 'contact/thanks/' ); ?>" />
                <input type="text" name="_gotcha" style="display:none" />
            </form>


            <!-- technical support contact form -->
            <form class="formspree form-contact-technical" method="POST">
                <label>
                    <span>Your Name</span>
                    <input type="text" name="name" placeholder="Jane Smith" required />
                </label>

                <label>
                    <span>Your Email Address</span>
                    <input type="email" name="_replyto" placeholder="name@domain.com" required />
                </label>

                <label>
                    <span>Where did you purchase your theme?</span>
                    <select name="service" required>
                        <option>Select one</option>
                        <option value="wordpress-com">WordPress.com</option>
                        <option value="creative-market">Creative Market</option>
                        <option value="wordpress-org">WordPress.org</option>
                    </select>
                </label>

                <label>
                    <span>What theme did you purchase?</span>
                    <select name="theme-name" required>
                        <option>Select one</option>
                        <?php themes_select_box(); ?>
                    </select>
                </label>

                <label>
                    <span>Message</span>
                    <textarea name="message" rows="6" required ></textarea>
                </label>

                <input type="submit" value="Send" class="button" />

                <input type="hidden" name="_subject" value="Pro Theme Design Technical Help" />
                <input type="hidden" name="_next" value="//prothemedesign.com<?php echo path( 'contact/thanks/' ); ?>" />
                <input type="text" name="_gotcha" style="display:none" />
            </form>


        </div>
<?php
    include( '_partials/footer.php' );
