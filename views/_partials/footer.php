		<footer id="footer">
<?php
	// if ( page_is_home() ) {
		// include( 'about-us.php' );
	// }
?>

			<div class="wrapper block-wrapper compact">

				<div class="block comfortable">
					<div class="content">
						<h3>Pro Theme Design</h3>
						<p>
							We create pre-built premium themes for self hosted WordPress websites. We focus on simple, beautiful products without the bloat. Find out <a href="<?php echo path( 'why-us/' ); ?>">why you should choose Pro theme Design</a>.
						</p>
						<p class="social-links">
							<?php include( 'social.php' ); ?>
						</p>
					</div>
				</div>

				<div class="block compact">
					<div class="content">
						<h3>Our Products</h3>
						<ul class="simple">
							<li><a href="<?php echo path( 'themes/' ); ?>">Themes</a></li>
							<li><a href="<?php echo path( 'wordpress-plugins/' ); ?>">Plugins</a></li>
							<li><a href="<?php echo path( 'articles/' ); ?>">How To Guides</a></li>
							<li><a href="<?php echo path( 'tools/' ); ?>">Tools</a></li>
						</ul>
					</div>
				</div>

				<div class="block compact">
					<div class="content">
						<h3>Theme Help</h3>
						<ul class="simple">
							<li><a href="<?php echo path( 'documentation/theme/' ); ?>">Theme Documentation</a></li>
							<li><a href="<?php echo path( 'documentation/feature/' ); ?>">Theme Features</a></li>
							<li><a href="<?php echo path( 'contact/' ); ?>">Contact</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="wrapper footnote">

				<p>
					<?php draw_svg( 'app-sitemap', 'small' ); ?> <a href="<?php echo path( 'sitemap/' ); ?>">Sitemap</a> <span class="sep">|</span>
					<?php draw_svg( 'app-mail', 'small' ); ?> <a href="<?php echo path( 'contact/' ); ?>">Contact</a> <span class="sep">|</span>
					<?php draw_svg( 'app-lock', 'small' ); ?> <a href="<?php echo path( 'privacy-policy/' ); ?>">Privacy</a> <span class="sep">|</span>
					<?php draw_svg( 'app-checkmark', 'small' ); ?> <a href="<?php echo path( 'policies/' ); ?>">Terms</a>
				</p>

				<p>&copy; 2007 - <?php echo date( 'Y' ); ?> Pro Theme Design, All Rights Reserved</p>

				<p>
					<a href="#masthead" class="scroll-to scroll-to-top">
						<?php draw_svg( 'chevron-top' ); ?>
						<span class="screen-reader-text">Scroll to Top</span>
					</a>
				</p>
			</div>

		</footer>

		<?php include( 'popover.php' ); ?>

		<div class="modal-wrapper search-modal">
			<div class="modal">
				<button type="button" class="close-button" rel="nofollow">
					<?php draw_svg( 'app-close-alt', 'small' ); ?>
					<span class="screen-reader-text">Close Search Form</span>
				</button>
				<?php include( 'google-search.php' ); ?>
			</div>
		</div>

		<div class="overlay"></div>

<?php
	if ( 'prod' == ENV ) {
		// include( 'tracking.php' );
	}

	site_script();
?>

		<script src="<?php echo path( 'js/vendor/instantpage.js' ); ?>" type="module"></script>


	</body>
</html>
