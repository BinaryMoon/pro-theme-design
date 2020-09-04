	<div class="wrapper text">
		<?php site_breadcrumbs(); ?>

		<h1>Modern Websafe Font Stacks</h1>
		<p class="intro">Websafe fonts are typefaces that are commonly included on computer operating systems.</p>
		<p>In the early days of the web there was a small selection of fonts available to use that were common on all computers. So CSS Font Stacks were created.</p>
		<p>These are lists of fonts that look similar. By using a collection of fonts you can be more sure that users will see what you intend. The site may not look identical on all computers, but it will be close. And it will be super fast!</p>
		<h2>What About Google Fonts?</h2>
		<p>Google fonts was an amazing tool, and it definitely improved the state of fonts on the web. However it comes with some downsides.</p>
		<p>Primarily, it slows down the web. More connections to external servers, more content to download, more content to decipher and render. All these things slow down the process of displaying your website, and in this increasingly mobile world - speed is very important.</p>
		<p>More recently there have been questions about security and privacy. By adding Google Fonts to your site you give a massive corporation a doorway into your website, and the behaviour of your website visitors. Perhaps this doesn't concern you, and if so that's your decision, but by using system fonts we remove any possible privacy and security concerns.</p>
	</div>

<?php
	$fonts = array(
		// Format = 'Font name', 'Font stack'.
		[ 'Arial', 'Arial, Helvetica Neue, Helvetica, Liberation Sans, sans-serif' ],
		[ 'Arial Black', 'Arial Black, Arial Bold, Gadget, sans-serif' ],
		[ 'Arial Narrow', 'Arial Narrow, Arial, sans-serif' ],
		[ 'Arial Rounded', 'Arial Rounded MT Bold, Arial Rounded Bold, Helvetica Rounded, Arial, sans-serif' ],
		[ 'Baskerville', 'Baskerville, Baskerville Old Face, Hoefler Text, Garamond, Times New Roman, serif' ],
		[ 'Book Antiqua', 'Book Antiqua, Palatino, Palatino Linotype, Palatino LT STD, Bitstream Charter, URW Palladio, Georgia, serif' ],
		[ 'Bookman', 'Bookman, Bookman Old Style, Book Antiqua, Palatino, URW Bookman, serif' ],
		[ 'Calibri', 'Calibri, Candara, Segoe, Segoe UI, Carlito, Roboto, Ubuntu, Optima, Arial, sans-serif' ],
		[ 'Cambria', 'Cambria, Caladea, Roboto Slab, Georgia, serif' ],
		[ 'Century Gothic', 'Century Gothic, CenturyGothic, URW Gothic, AppleGothic, sans-serif' ],
		[ 'Copperplate', 'Copperplate Light, Copperplate Gothic Light, serif' ],
		[ 'Comic Sans', 'Comic Sans, Comic Sans MS, cursive, sans-serif' ],
		[ 'Consolas', 'Consolas, monaco, Liberation Mono, monospace' ],
		[ 'Courier New', 'Courier New, Courier, Lucida Sans Typewriter, Lucida Typewriter, monospace' ],
		[ 'Franklin Gothic', 'Franklin Gothic Medium, Franklin Gothic, ITC Franklin Gothic, Arial, sans-serif' ],
		[ 'Futura', 'Futura, Trebuchet MS, Arial, sans-serif' ],
		[ 'Garamond', 'Garamond, Baskerville, Baskerville Old Face, Hoefler Text, Times New Roman, serif' ],
		[ 'Geneva', 'Geneva, Tahoma, Verdana, DejaVu Sans, Bitstream Vera Sans, sans-serif' ],
		[ 'Georgia', 'Georgia, Times, Times New Roman, serif' ],
		[ 'Gill Sans', 'Gill Sans, Gill Sans MT, Century Gothic, Calibri, sans-serif' ],
		[ 'Helvetica', 'Helvetica Neue, Helvetica, Arial, sans-serif' ],
		[ 'Hoefler', 'Hoefler Text, Baskerville Old Face, Garamond, Times New Roman, serif' ],
		[ 'Impact', 'Impact, Haettenschweiler, Franklin Gothic Bold, Charcoal, Helvetica Inserat, Bitstream Vera Sans Bold, Arial Black, sans-serif' ],
		[ 'Lucida Bright', 'Lucida Bright, Georgia, serif' ],
		[ 'Lucida Grande', 'Lucida Grande, Lucida Sans Unicode, Lucida Sans, Geneva, Verdana, sans-serif' ],
		[ 'Lucida Console', 'Lucida Console, Lucida Sans Typewriter, monaco, Bitstream Vera Sans Mono, Liberation Mono, monospace' ],
		[ 'Palatino', 'Palatino, Palatino Linotype, Palatino LT STD, Book Antiqua, URW Palladio, Georgia, serif' ],
		[ 'System', '-apple-system, BlinkMacSystemFont, Segoe UI, Helvetica, Arial, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol' ],
		[ 'System Monospace', 'SFMono-Regular, Consolas, Liberation Mono, Menlo, Courier, monospace' ],
		[ 'Tahoma', 'Tahoma, Verdana, Segoe, sans-serif' ],
		[ 'Times New Roman', 'TimesNewRoman, Times New Roman, Times, Baskerville, Georgia, Liberation Serif, FreeSerif, serif' ],
		[ 'Trebuchet', 'Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif' ],
		[ 'Verdana', 'Verdana, Geneva, DejaVu Sans, sans-serif' ],
	);
?>
	<div class="wrapper page-websafe-fonts">
		<h2>Websafe Font List</h2>
<?php
	$sentence = 'The Quick Brown Fox Jumped Over The Lazy Dog';

	foreach ( $fonts as $font ) {
		$key = $font[0];
		$family = $font[1];
		echo "<p style='font-family: {$family}'>
			<strong>{$key}</strong>
			<span class='family'>{$family}</span>
			<span style='font-weight: 900;'>{$sentence}</span>
			<span style='font-weight: 100;'>{$sentence}</span>
			<span style='font-weight: 100; font-style: italic;'>{$sentence}</span>
		</p>";
	}
?>
	</div>
