<?php
	site_script( path( 'views/_tools/_website-tester/scripts.js' ) );
?>
<div class="wrapper text">
	<?php site_breadcrumbs(); ?>

	<h1>Website Tester</h1>

	<form>
		<textarea id="website-list">
https://www.binarymoon.co.uk/
https://masterwp.co/
https://prothemedesign.com/
		</textarea>

		<button class="button" id="website-test">Test</button>		
	</form>
</div>

<div class="website-tester iframe-preview" id="website-tester">

	<header>
		<h1>Website Preview</h1>

		<a href="" class="close-frame button-close"><?php draw_svg( 'app-close' ); ?></a>

		<div class="preview-size">
			<a href="/" class="selected" data-size="100%"><?php draw_svg( 'computer-desktop' ); ?></a>
			<a href="/" data-size="768"><?php draw_svg( 'computer-tablet' ); ?></a>
			<a href="/" data-size="375"><?php draw_svg( 'computer-phone' ); ?></i></a>
		</div>

	</header>

	<div class="iframe-wrapper" id="iframe-wrapper"></div>

</div>
<?php
	site_include_view( '_partials/more-themes.php' );
