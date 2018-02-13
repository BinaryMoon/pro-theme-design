<?php
	include( '_partials/head.php' );
?>
	<body class="page-plugins">

<?php
	include( '_partials/header.php' );

	site_page_nav();

	$class = 'big';

	foreach( $plugins as $plugin ) {

		if ( 'big' === $class ) {
			$class = 'big alt';
		} else {
			$class = 'big';
		}

?>
		<div class="block <?php echo $class; ?> wrapper">

			<header>
				<a href="<?php echo $plugin[ 'url' ]; ?>" target="_blank" rel="noopener">
					<img src="<?php echo $plugin[ 'image' ]; ?>" alt="<?php echo $plugin['name']; ?> Cover Image" />
				</a>
			</header>

			<section>
				<div class="content">
					<h3><?php echo $plugin[ 'name' ]; ?></h3>
					<p><?php echo $plugin[ 'description' ]; ?></p>
					<footer>
						<a class="button" href="<?php echo $plugin[ 'url' ]; ?>" target="_blank" rel="noopener">
							More Info<i class="fa fa-arrow-right end" aria-hidden="true"></i>
						</a>
					</footer>
				</div>
			</section>
		</div>
<?php
	}

	include( '_partials/footer.php' );
