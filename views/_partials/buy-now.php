		<div class="modal-wrapper theme-modal">
			<div class="modal">
				<button type="button" class="close-button" rel="nofollow">
					<?php draw_svg( 'app-close-alt', 'small' ); ?>
					<span class="screen-reader-text">Close Purchase Window</span>
				</button>
<?php
	if ( ! empty( $theme[ 'url-wporg' ] ) ) {
?>
				<div class="note alt message">
					<h3>WordPress.org - self-hosted sites</h3>
					<span class="blip price"><?php echo $theme['price-wporg']; ?></span>
					<p>Get a downloadable version of <?php echo $theme[ 'name' ]; ?> to use on your own web space.</p>
					<a href="<?php echo $theme[ 'url-wporg' ]; ?>" target="_blank" class="button">Get theme<?php draw_svg( 'app-external', 'small' ); ?></a>
				</div>
<?php
	}

	if ( ! DISABLE_THEME_CLUB && ! empty( $theme[ 'url-wporg' ] ) && 'free!' !== $theme['price-wporg'] ) {
?>

				<div class="note note-themes-club message">
					<h3>Join the Theme Club</h3>
					<p>Get access to all of our self-hosted themes for one price.</p>
					<a href="<?php echo path( 'theme-club/' ); ?>" class="button positive">More Info</a>
				</div>
<?php
	}
?>
			</div>
		</div>
