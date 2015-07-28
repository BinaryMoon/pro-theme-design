<?php
    include( '_partials/head.php' );
?>
    <body class="page-contact">

        <?php include( '_partials/nav.php' ); ?>
        <?php include( '_partials/header.php' ); ?>

        <div class="promo contact">
            <div class="content-main content-text">
                <div class="row">
                    <p class="intro">Thanks for the message. We'll get back to you as soon as we can.</p>
                    <p>Please note we don't have advertising on Pro Theme Design and will ignore any messages about it.</p>
                </div>
            </div>
        </div>

        <script>
            $( '#formspree' ).attr( 'action', '//formspree.io/' + 'support' + '@' + 'prothemedesign' + '.' + 'com' );
        </script>
<?php
    include( '_partials/footer.php' );
