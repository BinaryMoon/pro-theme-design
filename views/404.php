<?php
    include( '_partials/header.php' );
?>

    <body class="page-404">

        <?php include( '_partials/nav.php' ); ?>

        <header class="masthead">
            <div class="row">
                <img class="logomark" src="<?php echo image_path( 'website/logo-ptd.png' ); ?>" alt="Pro Theme Design Compass Logo" />
                <h1>404</h1>
                <h2>Sorry about this - we've changed things up around here.</h2>
                <h2><a href="<?php echo path(); ?>">Visit the homepage &rsaquo;</a></h2>
            </div>
        </header>

<?php
    include( '_partials/footer.php' );
