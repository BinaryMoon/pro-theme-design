<?php
	$resources = array(
		'' => '',
		'calltoidea.com' => 'Interface Inspiration',
		'cssreference.io' => 'CSS Reference',
		'place.to' => 'Insert screenshots into different computing situations.',
		'frontendhandbook.com' => 'Documentation and reference for front end developers.',
		'facebook.github.io/design/devices.html' => 'Sketch files of popular devices.',
		'mapglyphs.com/world-maps' => 'World Map images.',
		'hemingwayapp.com' => 'An online text proof reader.',
		'brandcolors.net' => 'Website brand colours, all in one place.',
		'cssfontstack.com' => 'A comprehensive set of CSS font stacks.',
		'browserstack.com' => 'An online browser testing tool.',
		'bennettfeely.com/clippy' => 'A CSS clipping path generator.',
		'subtlepatterns.com' => 'A collection of images that are great for website/ presentation backgrounds.',
		'colorzilla.com/gradient-editor' => 'CSS Gradient Generator.',
		'svgporn.com' => 'A huge collection of SVG logos and icons for various companies.',
		'fortawesome.github.io/Font-Awesome' => 'Comprehensive icon font collection.',
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
		<a href="http://<?php echo $url; ?>" target="_blank" class="image">
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
