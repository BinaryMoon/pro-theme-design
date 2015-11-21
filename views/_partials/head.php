<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <title><?php site_title(); ?></title>

        <link rel="stylesheet" href="<?php echo css_path( 'css/styles.css' ); ?>" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,900,400italic" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

        <link type="text/plain" rel="author" href="<?php echo path( 'humans.txt' ); ?>" />

        <meta name="google-site-verification" content="VDLz-TZD53CTCmTol81Cd1UoOyz5RuAjdyjiP4irmsk" />
        <meta name="description" content="<?php site_description( '', true ); ?>">

        <script>
            var GUMROAD_ACTIVE = '<?php echo (DISABLE_GUMROAD) ? 'true' : 'false'; ?>';
        </script>
<?php
    if ( 'prod' == ENV ) {
        include( 'tracking.php' );
    }
?>

    </head>
