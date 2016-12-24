<?php
/**
 * List all articles.
 * Skips an article if it's currently being viewed.
 *
 * @package ptd
 */

	$current_url = Flight::request()->url;

	foreach ( $articles as $article ) {

		if ( false === strpos( $article['url'], $current_url ) ) {
?>
			<article class="summary">
				<?php draw_svg( $article['icon'], 'large' ); ?>
				<h2><a href="<?php echo $article['url']; ?>"><?php echo $article['name']; ?></a></h2>
<?php
			if ( ! empty( $article['description'] ) ) {
?>
				<p><?php echo $article['description']; ?></p>
<?php
			}
?>
			</article>
<?php
		}
	}
