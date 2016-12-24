<?php
/**
 * Display articles.
 *
 * @package ptd
 */

	include( '_partials/head.php' );
?>
	<body class="page-articles">

		<?php include( '_partials/header.php' ); ?>

		<div class="wrapper text">
			<h1>Articles</h1>

<?php
	site_include_view( '_partials/article-listing.php', array( 'articles' => $articles ) );
?>

		<p class="note icon"><?php draw_svg( 'logo-social-twitter', 'large' ); ?>What would you like to see us write about? <a href="<?php echo twitter_share_link( 'Hi @prothemedesign, I would love to know more about' ); ?>" target="_blank">Ping us on Twitter to let us know</a>.</p>

		</div>

<?php
	include( '_partials/footer.php' );
