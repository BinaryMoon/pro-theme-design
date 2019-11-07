<?php

	site_script( 'https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js' );
	site_script( path( 'js/vendor/colorwheel.min.js' ) );
	site_script( path( 'views/_tools/_color-picker/scripts.min.js' ) );

?>

<div class="wrapper text">

	<?php site_breadcrumbs(); ?>

	<h1>HTML Color Picker</h1>

	<div class="color-container">
		<div class="colorwheel"></div>
		<form>
			<input type="text" class="color" name="color" value="#268ebe" />
		</form>
	</div>

	<p>A handy tool for picking colors when you are customizing WordPress themes. Great for use with the Additional CSS section of the WordPress customizer.</p>

</div>

<?php

	site_include_view( '_partials/more-themes.php' );
