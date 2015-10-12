<?php

/**
 * List of all the tools
 */
function get_tools_data() {

    $tools = array(
        // external tools
        'free-stock-photos' => array(
            'name' => 'Free Stock Photos',
            'description' => 'Stock photography for your projects.',
            'tag' => 'external',
            'icon' => 'camera',
        ),
        'free-stock-videos' => array(
            'name' => 'Free Stock Videos',
            'description' => 'Stock videos for your projects.',
            'tag' => 'external',
            'icon' => 'video-camera',
        ),
        'circular-icons' => array(
            'name' => 'Circular Icons',
            'description' => 'Tiny round bitmap icons.',
            'tag' => 'external',
            'icon' => 'circle-o',
        ),

        // internal tools
        'pattern-library' => array(
            'name' => 'Pattern Library',
            'description' => 'Pro Theme Design CSS Pattern Library.',
            'tag' => 'internal',
            'icon' => 'puzzle-piece',
        ),
        'test-suite' => array(
            'name' => 'Test Suite',
            'description' => 'Pages to test before publishing site updates.',
            'tag' => 'internal',
            'icon' => 'graduation-cap',
        ),
    );

    $processed = array();

    foreach( $tools as $key => $tool ) {

        // website url
        $tool[ 'url' ] = path( 'tools/' . $key . '/' );

        $processed[ $key ] = $tool;

    }

    return $processed;

}


/**
 * Check a tool exists and return the tool data
 */
function tool_get( $tool ) {

    $tools = get_tools_data();

    if ( isset( $tools[ $tool ] ) ) {
        return $tools[ $tool ];
    }

    return false;

}


/**
 * Display list of different types of tools
 */
function tools_display( $tag = '', $title = '' ) {

    $tools = get_tools_data();

?>
<div class="block-wrapper wrapper">
    <header class="block-header">
        <h2><?php echo $title; ?></h2>
    </header>
<?php
    foreach ( $tools as $tool ) {
        if ( $tool['tag'] === $tag && ! empty( $tool['icon'] ) ) {
?>
    <div class="block">
        <div class="content sticky-footer">
            <i class="fa fa-<?php echo $tool['icon']; ?> icon"></i>
            <h3><?php echo $tool['name']; ?></h3>
            <p><?php echo $tool['description']; ?></p>
            <footer>
                <a href="<?php echo $tool['url']; ?>" class="button">View</a>
            </footer>
        </div>
    </div>
<?php
        }
    }
?>
</div>
<?php

}
