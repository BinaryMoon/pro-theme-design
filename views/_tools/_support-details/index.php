<?php
    site_script( path( 'views/_tools/_support-details/scripts.min.js' ) );

    include( 'functions.php' );
    include( 'browser.php' );

    $properties = array(
        'ip-address' => array(
            'name' => 'IP Address',
            'icon' => 'map-marker',
            'value' => sd_get_ip_address(),
            'description' => 'An IP Address (Internet Protocol address) is a numerical label assigned to each device (e.g., computer, printer) in a computer network. This can be useful for distinguishing different machines.',
        ),
        'location' => array(
            'name' => 'Location',
            'icon' => 'globe',
            'value' => sd_get_location(),
            'description' => 'The location property may not be 100% accurate, especially the city element which is often wrong. However it is useful for seeing if there is anyting wildly wrong with your computer settings (eg showing if you are in the wrong country).',
        ),
        'browser' => array(
            'name' => 'Web Browser',
            'icon' => sd_get_browser_icon(),
            'value' => sd_get_browser(),
            'description' => 'A web browser is the application you use to view the internet. Knowing exactly what this is makes it much easier for us to duplicate bugs that only happen on a specific device.'
        ),
        'browser-dimensions' => array(
            'name' => 'Browser Dimensions',
            'icon' => 'arrows-alt',
            'value' => 'n/a',
            ''
        ),
        'platform' => array(
            'name' => 'Platform',
            'icon' => 'laptop',
            'value' => sd_get_platform(),
            'description' => 'The platform is either the device/ operating system you are using.'
        ),
        'javascript' => array(
            'name' => 'Javascript',
            'icon' => 'code',
            'value' => 'disabled',
            'description' => 'Some websites required javascript enabled to function correctly.'
        ),
    );
?>
<div class="wrapper text">
    <?php site_breadcrumbs(); ?>
</div>

<div class="wrapper block-wrapper">
<?php
    foreach ( $properties as $key => $data ) {
?>
    <div class="block key-<?php echo $key; ?> invert">
        <div class="content">
<?php
        if ( isset( $data['description'] ) ) {
?>
            <a href="#help-<?php echo $key; ?>" class="tip"><i class="fa fa-question-circle"></i></a>
<?php
        }
?>
            <i class="fa fa-<?php echo $data['icon']; ?> icon"></i>
            <h3><?php echo $data['name']; ?></h3>
            <p><?php echo $data['value']; ?></p>
        </div>
    </div>
<?php
    }
?>
</div>

<div class="wrapper text">
    <h1>Support Details</h1>
    <p class="intro">The information on this page makes it easier for web developers to debug issues with websites.</p>
    <p>The more information we know, the easier it is for us to reproduce bugs, since problems that happen on one computer, may not happen on another.</p>
    <p class="note"><strong>Note</strong> no personal information is stored.</p>

    <h2>Glossary</h2>

    <ul>
<?php
        foreach ( $properties as $key => $data ) {
            if ( isset( $data[ 'description' ] ) ) {
?>
        <li id="help-<?php echo $key; ?>"><strong><?php echo $data['name']; ?></strong> <?php echo $data['description']; ?></li>
<?php
            }
        }
?>
    </ul>
</div>
<?php
    site_include_view( '_partials/more-themes.php' );
