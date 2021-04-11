<?php
/**
 * Display a list of resources.
 *
 * @package Ptd
 */

$resources = array(

	array(
		'Brush Ninja',
		'brush.ninja',
		'Create Animated Gifs in your Browser',
	),
	array(
		'WP Toolbelt Plugin',
		'wordpress.org/plugins/wp-toolbelt/',
		'A privacy focused replacement for Jetpack',
	),
	array(
		'Remove Background',
		'www.remove.bg',
		'Remove Backgrounds from Images',
	),
	array(
		'UI Faces',
		'uifaces.co',
		'User Interface Faces',
	),
	// array(
	// 	'Call to Idea',
	// 	'calltoidea.com',
	// 	'Interface Inspiration',
	// ),
	array(
		'Codeable',
		'codeable.io/?ref=99Tpl',
		'Fix all your WordPress problems.',
	),
	array(
		'CSS Reference',
		'cssreference.io',
		'CSS Reference',
	),
	array(
		'Screely',
		'www.screely.com',
		'Make screenshots look nice quickly.',
	),
	array(
		'Ethical.net',
		'ethical.net',
		'Ethical apps and services',
	),
	array(
		'UK Postcode',
		'postcodes.io',
		'UK Postcodes API',
	),
	array(
		'Mockup Photos',
		'mockup.photos',
		'Insert screenshots into different computing situations.',
	),
	array(
		'Map Glyphs',
		'mapglyphs.com/world-maps',
		'World Map images.',
	),
	// array(
	// 	'Hemingway App',
	// 	'hemingwayapp.com',
	// 	'An online text proof reader.',
	// ),
	array(
		'Devdocs',
		'devdocs.io',
		'API docs for everything web.',
	),
	array(
		'Brand Colors',
		'brandcolors.net',
		'Website brand colours, all in one place.',
	),
	array(
		'Audio Mass',
		'audiomass.co',
		'Browser based audio editor (like Audacity).',
	),
	array(
		'Lambda Test',
		'www.lambdatest.com',
		'An online browser testing tool.',
	),
	array(
		'Clippy',
		'bennettfeely.com/clippy',
		'A CSS clipping path generator.',
	),
	// array(
	// 	'Subtle Patterns',
	// 	'subtlepatterns.com',
	// 	'A collection of images that are great for website/ presentation backgrounds.',
	// ),
	array(
		'SVG Porn (SFW)',
		'svgporn.com',
		'A huge collection of SVG logos and icons for various companies.',
	),
	array(
		'HTAccess Tester',
		'htaccess.madewithlove.be',
		'HTAccess Tester.',
	),
	array(
		'CSS Scroll Shadows',
		'css-scroll-shadows.now.sh',
		'Auto showing/ hiding shadows in overflow scroll container.'
	),

);

?>

<div class="wrapper text">
	<?php site_breadcrumbs(); ?>

	<h1>Developer Resources</h1>
	<p>Tools and resources that help developers and designers to be more productive.</p>
	<p>I mostly built this so that I had a list of bookmarks for things I find useful.</p>
	<p>For a more comprehensive collection check out <a href="https://tiny-helpers.dev/">Tiny Helpers</a>.</p>

</div>

<div class="wrapper block-wrapper">
<?php
	foreach ( $resources as $resource ) {

		$name = $resource[0];
		$url = $resource[1];
		$description = $resource[2];

		if ( $url ) {
			$image_url = site_screenshot( $url );
?>
	<div class="block showcase-website">
		<a href="https://<?php echo $url; ?>" target="_blank" class="image" rel="noopener">
			<img src="<?php echo $image_url; ?>" width="400" height="300" alt="<?php echo $url; ?> Screenshot" />
		</a>
		<div class="meta">
			<h3><?php echo $name; ?></h3>
			<p><?php echo $description; ?></p>
		</div>
	</div>
<?php
		}
	}
?>
</div>
<?php
	site_include_view( '_partials/more-themes.php' );
