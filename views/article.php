<?php
	include( '_partials/head.php' );
?>
	<body class="page-article">

		<?php include( '_partials/header.php' ); ?>

		<div class="wrapper text">
			<?php site_breadcrumbs(); ?>
			<h1><?php echo $article[ 'name' ]; ?></h1>
<?php
	article_display( $article[ 'path' ] );
?>

			<hr />

			<p class="note icon"><?php draw_svg( 'logo-social-twitter', 'large' ); ?>What do you think? Could we improve this? <a href="<?php echo twitter_share_link( 'I just read "' . $article[ 'name' ] . '" by @prothemedesign' ); ?>" target="_blank">Let us know on Twitter</a>.</p>

			<p class="meta">First published on: <time><?php echo $article['date']; ?></time></p>

			<hr />

			<h1>More Articles</h1>
<?php
		include( '_partials/article-listing.php' );
?>
		</div>

<?php
	include( '_partials/footer.php' );
