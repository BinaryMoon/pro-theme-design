
<div class="wrapper text">

	<?php site_breadcrumbs(); ?>

	<h1>Circular Icons Pro</h1>

	<p class="intro">A comprehensive icon set that includes more than 120 pixel icons in a variety of sizes from 16x16 up to 128x128, designed for a variety of uses from websites to apps. There are three icon packs available - all have the same icons in them, but some they include different file formats.</p>

	<p><img src="<?php echo image_path( 'website/circular-icons-screenshot.png' ); ?>" alt="Circular Icons Pro Large Screenshot" /></p>

	<p>We have download options for all your needs</p>

	<ul>
		<li><strong>PNG Pack</strong>, includes icons in 4 sizes (16x16, 32x32, 64x64, and 128x128).</li>
		<li><strong>SVG Version</strong>, includes svgs for all icons except the cd which doesn't export from Sketch properly.</li>
		<li><strong>Sketch File</strong>, the source file I used to generate the icons. If you have Sketch then you can now export the icons in whatever format you desire.</li>
	</ul>

	<p><img src="<?php echo image_path( 'website/circular-icons-pro.png' ); ?>" alt="Circular Icons Pro Demo" /></p>

	<p><a href="<?php echo path( 'assets/downloads/circular-pro-icons-png.zip' ); ?>" class="button fat greedy positive"><?php draw_svg( 'app-download', 'small' ); ?>Download Circular Icons Pro Png version</a></p>
	<p><a href="<?php echo path( 'assets/downloads/circular-pro-icons-svg.zip' ); ?>" class="button fat greedy positive"><?php draw_svg( 'app-download', 'small' ); ?>Download Circular Icons Pro SVG version</a></p>
	<p><a href="<?php echo path( 'assets/downloads/circular-pro-icons.sketch' ); ?>" class="button fat greedy positive"><?php draw_svg( 'app-download', 'small' ); ?>Download Circular Icons Pro Sketch files</a></p>

	<p>Looking for the original icons? <a href="<?php echo path( 'assets/downloads/circular-icons.zip' ); ?>">Download Circular Icons Classic</a>.</p>

	<p class="note">Released under the GPL.</p>

</div>

<?php
	site_include_view( '_partials/more-themes.php' );
