<?php

/**
 * List of all the tools
 */
function get_tools_data() {

    $tools = array(
        // quizes
        'quiz-which-wordpress' => array(
            'name' => 'Which WordPress?',
            'description' => 'Which version of WordPress is right for you? WordPress.org or WordPress.com?',
            'tag' => 'quiz',
            'icon' => 'question-circle',
        ),

        // external tools
        'support-details' => array(
            'name' => 'Support Details',
            'description' => 'Information to help debugging website problems.',
            'tag' => 'external',
            'icon' => 'info-circle',
        ),
        'developer-resources' => array(
            'name' => 'Developer Resources',
            'description' => 'Handy Resources for designers and developers.',
            'tag' => 'external',
            'icon' => 'wrench',
        ),
        'free-stock-photos' => array(
            'name' => 'Free Stock Photos',
            'description' => 'Stock photography for your projects.',
            'tag' => 'external',
            'icon' => 'camera',
        ),
        'color-picker' => array(
            'name' => 'Color Picker',
            'description' => 'A browser based colour picker.',
            'tag' => 'external',
            'icon' => 'eyedropper',
        ),
        'free-stock-videos' => array(
            'name' => 'Free Stock Videos',
            'description' => 'Stock videos for your projects.',
            'tag' => 'external',
            'icon' => 'video-camera',
        ),
        'circular-icons' => array(
            'name' => 'Circular Icons',
            'description' => 'Round icons for a multitude of uses.',
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
        'website-preview' => array(
            'name' => 'Website Preview',
            'description' => 'Live screenshots of the theme showcase websites.',
            'tag' => 'internal',
            'icon' => 'eye',
        ),
        'theme-design-guidelines' => array(
            'name' => 'Theme Design Guidelines',
            'description' => 'Rules to ensure our themes are as good as can be.',
            'tag' => 'internal',
            'icon' => 'book',
        ),

    );

    if ( 'dev' === ENV ) {
        $tools[ 'quiz-test' ] = array(
            'name' => 'Quiz Test',
            'description' => 'Test the quiz system.',
            'tag' => 'external',
            'icon' => 'eye',
        );
    }

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
 * @param  string        $tool Tool key to retrieve
 * @return boolean|array The data for specified tool, or false if tool does not exist
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
 * @param string [$tag         = ''] Group of tools to retrieve
 * @param string [$title       = ''] Title of tools group
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
            <h3><a href="<?php echo $tool['url']; ?>"><?php echo $tool['name']; ?></a></h3>
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


/**
 * Output a list of tools for use on the sitemap
 */
function tools_sitemap() {

    $tools = get_tools_data();

    foreach ( $tools as $tool ) {
?>
    <li><a href="<?php echo $tool[ 'url' ]; ?>"><?php echo $tool['name']; ?></a></li>
<?php
    }

}
