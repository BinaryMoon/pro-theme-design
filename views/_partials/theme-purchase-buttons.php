<?php
	if ( ! empty( $theme['download-button'] ) ) {
?>
		<section class="wrapper">

			<div class="note message">

				<h2>Get <?php echo $theme['name']; ?> for WordPress.org</h2>

<?php
		echo $theme['download-button'];

		if ( ! empty( $theme[ 'url-preview' ] ) ) {
?>
				<a href="<?php echo $theme[ 'url-preview' ]; ?>" class="button fat ghost">Preview <?php echo $theme['name']; ?></a>
<?php
		}
?>
			</div>

		</section>
<?php
	}
