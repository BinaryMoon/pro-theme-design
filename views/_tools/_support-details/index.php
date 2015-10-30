<?php
    include( 'functions.php' );
    include( 'browser.php' );

    $properties = array(
        'ip-address' => array(
            'name' => 'IP Address',
            'icon' => 'map-marker',
            'value' => sd_get_ip_address(),
        ),
        'country' => array(
            'name' => 'Country',
            'icon' => 'globe',
            'value' => sd_get_country(),
        ),
        'city' => array(
            'name' => 'City',
            'icon' => 'building',
            'value' => sd_get_city(),
        ),
        'browser' => array(
            'name' => 'Browser',
            'icon' => 'home',
            'value' => sd_get_browser(),
        ),
        'browser_version' => array(
            'name' => 'Browser Version',
            'icon' => 'home',
            'value' => sd_get_browser_version(),
        ),
        'platform' => array(
            'name' => 'Platform',
            'icon' => 'laptop',
            'value' => sd_get_platform(),
        ),
        /**
        '' => array(
            'name' => '',
            'icon' => 'facebook',
            'value' => '',
        ),
        */
    );
?>
<div class="wrapper text">
    <?php site_breadcrumbs(); ?>

    <h1>Computer Details</h1>
</div>

<div class="wrapper block-wrapper theme-wrapper">
<?php
    foreach ( $properties as $key => $data ) {
?>
    <div class="block key-<?php echo $key; ?> invert">
        <div class="content">
            <i class="fa fa-<?php echo $data['icon']; ?> icon"></i>
            <h3><?php echo $data['name']; ?></h3>
            <p><?php echo $data['value']; ?></p>
        </div>
    </div>
<?php
    }
?>
    <script>
        (function() {
            var properties = [
                'ip-address': '<?php echo sd_get_ip_address(); ?>',
                'country': '<?php echo sd_get_country(); ?>',
                'city': '<?php echo sd_get_city(); ?>',
                'browser': '<?php echo sd_get_browser(); ?>',
                'browser_version': '<?php echo sd_get_browser_version(); ?>',
                'platform': '<?php echo sd_get_platform(); ?>',
            ];
        })();
    </script>
</div>
<?php
    site_include_view( '_partials/more-themes.php' );
