<?php

	site_script( 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.bundle.min.js' );
	site_script( path( 'views/_tools/_build/scripts.js?d=' . DECACHE_JS ) );
	$file = $_SERVER['DOCUMENT_ROOT'] . urldecode( Flight::request()->base ) . '/assets/build/buildlog.txt';
	$data = json_decode( file_get_contents( $file ), true );

?>
<div class="wrapper text">

	<h1>Theme Build Statistics</h1>

	<p class="intro">
		To keep the themes up to date we use a build system. This page shows how often we run it.
	</p>

	<p>
		This system packages the themes, then uploads them to the theme update server so that they can be downloaded through the theme auto-update system. The benefit of a build system is that we can do <em>more frequent theme updates</em>. What used to take hours of manual effort is now done in minutes by a machine.
	</p>

	<p>
		To see what has been changed in our themes you can check out the <a href="<?php echo path( '/tools/changelogs/' ); ?>">theme changelogs</a>.
	</p>

	<p class="note icon">
		<?php draw_svg( 'alert-info', 'large' ); ?>
		If you are interested in this sort of thing then you can read more about the build process, what it does, and how it's setup, on my personal blog - <a href="https://www.binarymoon.co.uk/2016/11/automating-wordpress-development-gulp-bash-php/">Automating WordPress Development with Gulp, Bash, and PHP</a>.
	</p>

	<canvas id="buildQuantity" width="1000" height="500" style="margin:4rem 0;"></canvas>

	<ul>
		<li>
			The most recent build was run on: <strong><?php echo $data['date_last_build']; ?> GMT</strong>
		</li>
		<li>
			Total time spent updating themes: <strong><?php echo $data['total_build_duration']; ?></strong>
		</li>
		<li>
			Total number of builds executed: <strong><?php echo $data['total_build_quantity']; ?></strong>
			<br /><small>since <?php echo $data['date_first_build']; ?></small>
		</li>
	</ul>

<?php

	$keys = array();
	$total_builds = array();
	$total_duration = array();

	foreach ( $data['daily_builds'] as $build ) {
		$keys[] = $build['date'];
		$total_builds[] = $build['total_builds'];
		$total_duration[] = $build['total_duration'];
	}

?>

	<script>
		var build_keys = [ "<?php echo implode( '", "', $keys ); ?>" ];
		var build_total_builds = [ <?php echo implode( ', ', $total_builds ); ?> ];
		var build_total_duration = [ <?php echo implode( ', ', $total_duration ); ?> ];
	</script>


</div>
