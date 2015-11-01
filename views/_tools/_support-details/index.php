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
            'name' => 'Location',
            'icon' => 'globe',
            'value' => sd_get_location(),
        ),
        'browser' => array(
            'name' => 'Web Browser',
            'icon' => sd_get_browser_icon(),
            'value' => sd_get_browser(),
        ),
        'browser-dimensions' => array(
            'name' => 'Browser Dimensions',
            'icon' => 'arrows-alt',
            'value' => 'n/a',
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
            <a href="#" class="tip"><i class="fa fa-question-circle"></i></a>
            <i class="fa fa-<?php echo $data['icon']; ?> icon"></i>
            <h3><?php echo $data['name']; ?></h3>
            <p><?php echo $data['value']; ?></p>
        </div>
    </div>
<?php
    }
?>
</div>
<?php
    site_include_view( '_partials/more-themes.php' );
