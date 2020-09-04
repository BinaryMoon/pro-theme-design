<?php
/**
 * Display a list of resources.
 *
 * @package Ptd
 */

$resources = array(
	'www.remove.bg' => 'Remove Backgrounds from Images',
	'uifaces.co' => 'User Interface Faces',
	'calltoidea.com' => 'Interface Inspiration',
	'cssreference.io' => 'CSS Reference',
	'ethical.net' => 'Ethical apps and services',
	'postcodes.io' => 'UK Postcodes API',
	'mockup.photos' => 'Insert screenshots into different computing situations.',
	'mapglyphs.com/world-maps' => 'World Map images.',
	'hemingwayapp.com' => 'An online text proof reader.',
	'devdocs.io' => 'API docs for everything web.',
	'brandcolors.net' => 'Website brand colours, all in one place.',
	'cssfontstack.com' => 'A comprehensive set of CSS font stacks.',
	'audiomass.co' => 'Browser based audio editor (like Audacity).',
	'www.lambdatest.com' => 'An online browser testing tool.',
	'bennettfeely.com/clippy' => 'A CSS clipping path generator.',
	'subtlepatterns.com' => 'A collection of images that are great for website/ presentation backgrounds.',
	'svgporn.com' => 'A huge collection of SVG logos and icons for various companies.',
	'htaccess.madewithlove.be' => 'HTAccess Tester.',
	'www.screely.com' => 'Make screenshots look nice quickly.',
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
	foreach ( $resources as $url => $description ) {
		if ( $url ) {
			$image_url = site_screenshot( $url );
?>
	<div class="block showcase-website">
		<a href="http://<?php echo $url; ?>" target="_blank" class="image" rel="noopener">
			<img src="<?php echo $image_url; ?>" width="400" height="300" alt="<?php echo $url; ?> Screenshot" />
		</a>
		<div class="meta">
			<h3><?php echo $url; ?></h3>
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
