
	<h1>Documentation</h1>

	<p class="intro">Please check below for links to the theme documentation. If you'd like help with customizations then please submit a request through the <a href="<?php echo path( 'theme-customization/' ); ?>">Theme Customization page</a>.</p>

	<div class="column">
		<h2><a href="<?php echo path( 'documentation/theme/' ); ?>">Themes</a></h2>
		<?php documentation_list( 'theme', 999 ); ?>
	</div>

	<div class="column">
		<h2>Features <a href="<?php echo path( 'documentation/feature/' ); ?>" class="small">More</a></h2>
		<?php documentation_list( 'feature' ); ?>

		<h2>General <a href="<?php echo path( 'documentation/general/' ); ?>" class="small">View All</a></h2>
		<?php documentation_list( 'general' ); ?>

		<h2><a href="<?php echo path( 'documentation/plugin/' ); ?>">Plugins</a></h2>
		<?php documentation_list( 'plugin', 999 ); ?>
	</div>
