<?php
	site_script( path( 'views/_tools/_ascii-entity-conversion/scripts.min.js' ) );
?>
<div class="wrapper text">
	<?php site_breadcrumbs(); ?>

	<h1>Entity Conversion Calculator</h1>

	<form class="entity-calculator">
		<label>
			<span>Paste a character to convert here:</span>
			<input type="text" id="reverse" maxlength="1" />
		</label>
		<button class="button" type="button" id="convert">Convert</button>
	</form>

	<p class="entities">
		<a href="#" data-entity="&#38">&amp;</a>
		<a href="#" data-entity="&#169">&copy;</a>
		<a href="#" data-entity="&#174">&reg;</a>
		<a href="#" data-entity="&#8592">&larr;</a>
		<a href="#" data-entity="&#8594">&rarr;</a>
		<a href="#" data-entity="&#8595">&darr;</a>
		<a href="#" data-entity="&#8593">&uarr;</a>
		<a href="#" data-entity="&#8249">&lsaquo;</a>
		<a href="#" data-entity="&#8250">&rsaquo;</a>
		<a href="#" data-entity="&#8226">&bull;</a>
	</p>

	<p class="note" id="numeric">
		Numeric Value: <code class="value">?</code>
		<span class="demo">eg <code>?</code></span>
	</p>
	<p class="note" id="css-value">
		CSS Value: <code class="value">?</code>
		<span class="demo">eg <code>?</code></span>
	</p>
	<p class="note" id="js-value">
		JS Value: <code class="value">?</code>
		<span class="demo">eg <code>?</code></span>
	</p>

</div>

<?php
	site_include_view( '_partials/more-themes.php' );
