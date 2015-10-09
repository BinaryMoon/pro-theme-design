<?php
    include( '_partials/head.php' );
?>
    <body class="page-styleguide">

        <?php include( '_partials/header.php' ); ?>

        <div class="wrapper">
            <h1>Pro Theme Design Styleguide</h1>

            <h2>Brand Colours</h2>

            <div class="colours">
                <div class="colour grey-100"></div>
                <div class="colour grey-90"></div>
                <div class="colour grey-80"></div>
                <div class="colour grey-70"></div>
                <div class="colour grey-60"></div>
                <div class="colour grey-50"></div>
                <div class="colour grey-40"></div>
                <div class="colour grey-30"></div>
                <div class="colour grey-20"></div>
                <div class="colour grey-10"></div>
            </div>

            <h2>Pro Theme Design Pattern Library</h2>
<?php
    $path = Flight::get( 'flight.views.path' ) . '/_styleguide';
    $files = array();
    $handle = opendir( $path );

    while ( false !== ( $file = readdir( $handle ) ) ) {
        if ( substr( $file, -5 ) == '.html' ) {
            $files[] = $file;
        }
    }

    natsort( $files );

    foreach ( $files as $file ) {
        $name = $file;

        $name = str_replace( '--', ' : ', $name );
        $name = str_replace( '-', ' ', $name );
        $name = str_replace( '.html', '', $name );
        $name = ucwords( $name );
?>
            <div class="pattern">
                <h3><?php echo $name; ?>
                    <small>
                        <a href="<?php echo $path . '/' . $file ?>"><i class="fa fa-file"></i><?php echo $file; ?></a>
                        <a href="#" class="toggle"><i class="fa fa-code"></i>Code</a>
                    </small>
                </h3>
                <div class="pattern-wrapper">
                    <div class="display">
                        <?php include( $path . '/' . $file ); ?>
                    </div>
                    <div class="source">
                        <textarea><?php echo trim( htmlspecialchars( file_get_contents( $path . '/' . $file ) ) ); ?></textarea>
                    </div>
                </div>
            </div>
<?php
    }
?>
        </div>
<?php
    include( '_partials/footer.php' );

