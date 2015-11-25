
    <meta itemprop="name" content="<?php site_title(); ?>">
    <meta itemprop="description" content="<?php site_description( '', true ); ?>">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@prothemedesign">
    <meta name="twitter:title" content="<?php site_title(); ?>">
    <meta name="twitter:description" content="<?php site_description( '', true ); ?>">
    <meta name="twitter:url" content="<?php echo path( ltrim( Flight::request()->url, '/' ) ); ?>">

    <!-- Open Graph data -->
    <meta property="og:title" content="<?php site_title(); ?>">
    <meta property="og:url" content="<?php echo path( ltrim( Flight::request()->url, '/' ) ); ?>">
    <meta property="og:description" content="<?php site_description( '', true ); ?>">
    <meta property="og:site_name" content="Pro Theme Design">
    <meta property="fb:admins" content="507302231">

<?php
    site_meta_image();

    site_meta();
