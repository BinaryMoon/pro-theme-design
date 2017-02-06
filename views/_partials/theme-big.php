<?php

	$tags = 'tag-' . implode( ' tag-', $theme['tags'] );

?>

		<div class="wrapper block big <?php echo $tags; ?>">
			<header>
				<a href="<?php echo $theme['url']; ?>">
					<img src="<?php echo image_path( 'theme-devices/' . $theme['image'] ); ?>" alt="<?php echo $theme['name']; ?> Screenshot" />
				</a>
			</header>
			<section>
				<div class="content">
					<h3>
						<a href="<?php echo $theme['url']; ?>"><?php echo $theme['name']; ?></a>
					</h3>
					<p><?php echo $theme['description']; ?></p>

					<footer>
						<a class="button greedy" href="<?php echo $theme['url']; ?>" title="<?php echo $theme['name']; ?> Details">
							Demo &amp; Details
						</a>
					</footer>
				</div>
			</section>
		</div>
