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
		'how-much-to-charge' => array(
			'name' => 'WordPress Pricing Calculator',
			'description' => 'Calculate how much to charge for a WordPress job.',
			'tag' => 'tool',
			'icon' => 'money',
		),
		'support-details' => array(
			'name' => 'Support Details',
			'description' => 'Information to help debugging website problems.',
			'tag' => 'tool',
			'icon' => 'info-circle',
		),
		'ascii-entity-conversion' => array(
			'name' => 'Entity Conversion',
			'description' => 'Convert an ascii character into a code suitable for CSS, JS and HTML.',
			'tag' => 'tool',
			'icon' => 'calculator',
		),
		'color-picker' => array(
			'name' => 'Color Picker',
			'description' => 'A browser based colour picker.',
			'tag' => 'tool',
			'icon' => 'eyedropper',
		),
		'translation-page-generator' => array(
			'name' => 'Translation Page Generator',
			'description' => 'Generate the HTML needed to translate your website.',
			'tag' => 'tool',
			'icon' => 'globe',
		),
		'website-tester' => array(
			'name' => 'Website Tester',
			'description' => 'Continuous visual previews of web pages.',
			'tag' => 'tool',
			'icon' => 'eye',
		),
		'free-stock-photos' => array(
			'name' => 'Free Stock Photos',
			'description' => 'Stock photography for your projects.',
			'tag' => 'resources',
			'icon' => 'camera',
		),
		'free-stock-videos' => array(
			'name' => 'Free Stock Videos',
			'description' => 'Stock videos for your projects.',
			'tag' => 'resources',
			'icon' => 'video-camera',
		),
		'developer-resources' => array(
			'name' => 'Developer Resources',
			'description' => 'Handy Resources for designers and developers.',
			'tag' => 'resources',
			'icon' => 'wrench',
		),
		'circular-icons' => array(
			'name' => 'Circular Icons',
			'description' => 'Round icons for a multitude of uses.',
			'tag' => 'resources',
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
		'theme-release-checklist' => array(
			'name' => 'Theme Release Checklist',
			'description' => 'A ToDo list to follow before releasing a new product.',
			'tag' => 'internal',
			'icon' => 'check',
		),
		'dev-kit' => array(
			'name' => 'How We Build Pro Theme Design',
			'description' => 'The tools and websites that build Pro Theme Design.',
			'tag' => 'internal',
			'icon' => 'briefcase',
		),
		'build' => array(
			'name' => 'Build Updates',
			'description' => 'Statistics showing how we often we build our themes.',
			'tag' => 'internal',
			'icon' => 'briefcase',
		),
		'changelogs' => array(
			'name' => 'Theme Changelogs',
			'description' => 'Keep track of the changelogs for all our themes.',
			'tag' => 'internal',
			'icon' => 'briefcase',
		),

	);

	if ( 'dev' === ENV ) {
		$tools[ 'quiz-test' ] = array(
			'name' => 'Quiz Test',
			'description' => 'Test the quiz system.',
			'tag' => 'tool',
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
 * Get the data for the specified tag.
 *
 * @param  string $tag The tag to load data for.
 * @return array  The tag information, or null if it doesn't exist.
 */
function tool_group( $tag ) {

	$tools = array(
		'tool' => 'Tools',
		'resources' => 'Resources',
		'internal' => 'Internal Tools',
	);

	if ( ! empty( $tools[ $tag ] ) ) {

		return array(
			'title' => $tools[ $tag ],
			'tag' => $tag,
		);

	} else {

		return null;

	}

}


/**
 * Display list of different types of tools
 * @param string [$tag         = ''] Group of tools to retrieve
 * @param string [$title       = ''] Title of tools group
 */
function tools_display( $tool_data ) {

	$tools = get_tools_data();

?>
<div class="block-wrapper wrapper">
<?php
	foreach ( $tools as $tool ) {
		if ( $tool['tag'] === $tool_data['tag'] && ! empty( $tool['icon'] ) ) {
?>
	<div class="block">
		<div class="content">
			<i class="fa fa-<?php echo $tool['icon']; ?> icon"></i>
			<h3><a href="<?php echo $tool['url']; ?>"><?php echo $tool['name']; ?></a></h3>
			<p><?php echo $tool['description']; ?></p>
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
