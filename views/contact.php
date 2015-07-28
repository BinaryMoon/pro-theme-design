<?php
    include( '_partials/head.php' );
?>
    <body class="page-contact">

        <?php include( '_partials/nav.php' ); ?>
        <?php include( '_partials/header.php' ); ?>

        <div class="promo contact">
            <div class="content-main content-text">
                <div class="row">
                    <!-- <p class="intro">Got a question about a theme or need some .</p> -->

                    <form id="formspree" method="POST">
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
                        <input type="hidden" name="_next" value="//prothemedesign.com<?php echo path( 'contact/thanks/' ); ?>" />
                        <input type="text" name="_gotcha" style="display:none" />
                    </form>
                </div>
            </div>
        </div>

        <script>
            $( '#formspree' ).attr( 'action', '//formspree.io/' + 'support' + '@' + 'prothemedesign' + '.' + 'com' );
        </script>
<?php
    include( '_partials/footer.php' );
