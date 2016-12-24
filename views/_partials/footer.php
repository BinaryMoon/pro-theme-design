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
					<p class="location">Exeter, England</p>
					<p class="bio">Ben is a full stack developer - doing both design and development - often turning Darrens crazy ideas into real products, but not averse to designing his own themes and writing the occassional plugin. Plus he blogs about WordPress and technology at <a href="https://www.binarymoon.co.uk/">Binary Moon</a>.</p>

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
			<div class="wrapper footnote">

				<?php include( 'newsletter.php' ); ?>

				<p>
					<?php draw_svg( 'alert-question', 'small' ); ?> <a href="<?php echo path( 'why-us/' ); ?>">Why Pro theme Design?</a> <span class="sep">|</span>
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
