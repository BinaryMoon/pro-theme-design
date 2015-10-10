<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <title><?php SiteTemplate::title(); ?></title>

        <link rel="stylesheet" href="<?php echo css_path( 'css/styles.css' ); ?>" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,900" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

        <meta name="google-site-verification" content="VDLz-TZD53CTCmTol81Cd1UoOyz5RuAjdyjiP4irmsk" />
<?php
    if ( 'prod' == ENV ) {
?>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga( 'create', 'UA-55722-9', 'auto' );
            ga( 'send', 'pageview' );
        </script>
<?php
    }
?>
    </head>
