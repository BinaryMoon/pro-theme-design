<?php
	$doc = documentation_get( $page );
?>
	<h1><?php echo documentation_page_property( $page ); ?></h1>

	<p class="intro"><?php echo $doc[ 'description' ]; ?></p>
	<p><a href="<?php echo $doc[ 'plugin-url' ]; ?>" target="_blank" class="button" rel="noopener">Details &amp; Download</a></p>

	<a href="<?php echo $doc[ 'plugin-url' ]; ?>" target="_blank" class="plugin-image" rel="noopener">
		<img src="<?php echo $doc[ 'image' ]; ?>" alt="<?php echo documentation_page_property( $page ); ?> Cover Image">
	</a>

<?php
	$template = site_view_path( '_support/_plugin/' . $page . '.php' );

	include( $template );
