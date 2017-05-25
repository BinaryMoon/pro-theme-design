		<footer id="footer">
<?php
	if ( page_is_home() ) {
?>
			<div class="wrapper map">

				<section class="origin">
					<h4 class="minor">About Us</h4>
					<h4 id="about-lead">Pro Theme Design began in 2007 as a collaboration between two web designers</h4>
				</section>

				<div class="blurb blurb-ben">

					<img id="ava-ben" class="avatar" src="<?php echo image_path( 'website/ava-ben.jpg' ); ?>" alt="Ben Gillbanks">
					<h5>Ben Gillbanks</h5>
					<p class="location">Devon, England</p>
					<p class="bio">Ben is a full stack developer - doing both design and development - often turning Darrens ideas into real products, but not averse to designing his own themes and writing the occassional plugin. Plus he blogs about WordPress and tech at <a href="https://www.binarymoon.co.uk/">Binary Moon</a> and runs <a href="https://masterwp.co">MasterWP - WordPress newsletter</a>.</p>

					<ul>
						<li>
							<?php draw_svg( 'media-link', 'small' ); ?>
							<a href="https://www.binarymoon.co.uk" target="_blank" class="link">
								 Personal Site
							</a>
						</li>
						<li>
							<?php draw_svg( 'logo-social-twitter', 'small' ); ?>
							<a href="https://twitter.com/binarymoon" target="_blank" class="link">
								Follow Me on Twitter
							</a>
						</li>
					</ul>

				</div>

				<div class="blurb blurb-darren">

					<img id="ava-darren" class="pos avatar" src="<?php echo image_path( 'website/ava-darren.jpg' ); ?>" alt="Darren Hoyt">
					<h5>Darren Hoyt</h5>
					<p class="location">Brooklyn, NY</p>
					<p class="bio">Established in the WordPress community for projects like <strong>Mimbo</strong> and <strong>Agregado</strong>, Darren also has 14 years experience designing websites for businesses and startups. His role at Pro Theme Design is taking what Ben builds and making it beautiful and simple to use.</p>

					<ul>
						<li>
							<?php draw_svg( 'media-link', 'small' ); ?>
							<a href="http://www.darrenhoyt.com" target="_blank" class="link" >
								Personal Site
							</a>
						</li>
						<li>
							<?php draw_svg( 'logo-social-twitter', 'small' ); ?>
							<a href="http://www.twitter.com/darrenhoyt" target="_blank" class="link" >
								Follow Me on Twitter
							</a>
						</li>
					</ul>


				</div>

			</div>
<?php
	}
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

				<?php include( 'newsletter.php' ); ?>

				<p>
					<?php draw_svg( 'app-sitemap', 'small' ); ?> <a href="<?php echo path( 'sitemap/' ); ?>">Sitemap</a> <span class="sep">|</span>
					<?php draw_svg( 'app-mail', 'small' ); ?> <a href="<?php echo path( 'contact/' ); ?>">Contact</a> <span class="sep">|</span>
					<?php draw_svg( 'app-checkmark', 'small' ); ?> <a href="<?php echo path( 'policies/' ); ?>">Policies</a>
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

		<div class="modal-wrapper newsletter-modal">
			<div class="modal">
				<button type="button" class="close-button" rel="nofollow">
					<?php draw_svg( 'app-close-alt', 'small' ); ?>
					<span class="screen-reader-text">Close Newsletter Popup</span>
				</button>
				<?php include( 'newsletter.php' ); ?>
			</div>
		</div>

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
		include( 'tracking.php' );
	}

	site_script();
?>

	</body>
</html>
