<div class="wrapper text">

	<p class="intro"><strong>Broadsheet</strong> is a newspaper theme. With 3 optional widget areas, and a huge homepage slider there are lots of options for creating interesting, immersive websites.</p>

	<img src="<?php echo image_path( 'theme-screenshot-collage/collage-broadsheet.jpg' ); ?>" class="align" />

</div>

<div class="wrapper features">

<?php
	site_include_view( '_themes/_features/responsive.php', array( 'theme' => $theme ) );
	site_include_view( '_themes/_features/code-review.php', array( 'theme' => $theme ) );
	site_include_view( '_themes/_features/social.php', array( 'theme' => $theme ) );
	site_include_view( '_themes/_features/slider.php', array( 'theme' => $theme ) );
?>

</div>
