<?php
	// Purchase.
	if ( ! empty( $theme['download-button'] ) ) {

		echo $theme['download-button'];

	}

	// Preview.
	if ( ! empty( $theme['url-preview'] ) ) {

?>
		<a href="<?php echo $theme['url-preview']; ?>" class="button ghost greedy preview">Preview <?php echo $theme['name']; ?></a>
<?php

	}
