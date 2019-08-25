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
	'mockup.photos' => 'Insert screenshots into different computing situations.',
	'frontendmasters.com/books/front-end-handbook/2019/' => 'Documentation and reference for front end developers.',
	'facebook.design/toolsandresources/' => 'Sketch files, and resources for designing apps.',
	'mapglyphs.com/world-maps' => 'World Map images.',
	'hemingwayapp.com' => 'An online text proof reader.',
	'devdocs.io' => 'API docs for everything web.',
	'brandcolors.net' => 'Website brand colours, all in one place.',
	'cssfontstack.com' => 'A comprehensive set of CSS font stacks.',
	'browserstack.com' => 'An online browser testing tool.',
	'bennettfeely.com/clippy' => 'A CSS clipping path generator.',
	'subtlepatterns.com' => 'A collection of images that are great for website/ presentation backgrounds.',
	'colorzilla.com/gradient-editor' => 'CSS Gradient Generator.',
	'svgporn.com' => 'A huge collection of SVG logos and icons for various companies.',
	'htaccess.madewithlove.be' => 'HTAccess Tester.',
);

?>

<div class="wrapper text">
	<?php site_breadcrumbs(); ?>

	<h1>Developer Resources</h1>
	<p>Tools and resources that help developers and designers to be more productive.</p>
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
