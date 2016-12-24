<?php
	if ( ! site_popover() ) {
		return;
	}
?>

	<section class="popover">

		<header>Feedback</header>

		<button class="close-button" rel="nofollow">
			<?php draw_svg( 'app-close-alt', 'small' ); ?>
			<span class="screen-reader-text">Close Feedback Panel</span>
		</button>

		<div class="body">
			<p>We'd love to get some feedback to help us create better themes.</p>
			<p><a href="<?php echo path( 'feedback/' ); ?>">Give Feedback</a></p>
		</div>

	</section>
