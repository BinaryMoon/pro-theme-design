<?php
	include( '_partials/head.php' );
?>
	<body class="page-plugins">

		<?php include( '_partials/nav.php' ); ?>

		<header class="masthead">
			<div class="row">
				<img class="logomark" src="<?php echo image_path( 'website/logo-ptd.png' ); ?>" alt="Pro Theme Design Compass Logo" />
				<h1>Pro Theme Design</h1>
				<h2>Plugins for creating the perfect WordPress site.</h2>
			</div>
		</header>


		<div class="promo wordpress">
			<?php include( '_partials/google-search.php' ); ?>

<script>
  (function() {
	var cx = '010164663960188762731:aajo_mt5e2a';
	var gcse = document.createElement('script');
	gcse.type = 'text/javascript';
	gcse.async = true;
	gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
		'//cse.google.com/cse.js?cx=' + cx;
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchresults-only></gcse:searchresults-only>

		</div>

<?php
	include( '_partials/footer.php' );
