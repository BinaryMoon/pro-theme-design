<label for="q"><h2>Search Pro Theme Design...</h2></label>
<form method="get" class="searchform" id="searchbox_<?php echo GOOGLE_CSE; ?>" action="<?php echo path( 'search' ); ?>">
	<input value="<?php echo GOOGLE_CSE; ?>" name="cx" type="hidden" />
	<input value="FORID:11" name="cof" type="hidden" />
	<input type="text" placeholder="Search..." name="q" id="q" class="text squashy" />
	<button type="submit" id="searchsubmit" class="button">
		<?php draw_svg( 'app-search', 'small' ); ?>
		<span class="screen-reader-text">Search</span>
	</button>
</form>
