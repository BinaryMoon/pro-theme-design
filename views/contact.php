<?php
	include( '_partials/head.php' );
?>
	<body class="page-contact">

		<?php include( '_partials/header.php' ); ?>

		<div class="wrapper text">
			<h1>How can we help?</h1>

			<div class="contact-selection">
				<a class="contact-customization" href="<?php echo path( 'theme-customization/' ); ?>">Theme Customization <?php draw_svg( 'arrow-right', 'small' ); ?></a>
				<a class="contact-documentation" href="<?php echo path( 'documentation/general/transfer-from-wordpress-com/' ); ?>">WordPress.com theme Transfer <?php draw_svg( 'arrow-right', 'small' ); ?></a>
				<a class="contact-technical" href="#">Theme Help / Question <?php draw_svg( 'arrow-right', 'small' ); ?></a>
				<a class="contact-other" href="#">Other <?php draw_svg( 'arrow-right', 'small' ); ?></a>
				<a class="contact-refund" href="<?php echo path( 'documentation/general/refunds/' ); ?>">Refund Request <?php draw_svg( 'arrow-right', 'small' ); ?></a>
			</div>

			<!-- pre sales contact form -->
			<form class="formspree form-contact-other" method="POST" action="https://formspree.io/f/xoqpvbrp">
				<label>
					<span>Your Name</span>
					<input type="text" name="name" placeholder="Jane Smith" required />
				</label>

				<label>
					<span>Your Email Address</span>
					<input type="email" name="_replyto" placeholder="name@domain.com" required />
				</label>

				<label>
					<span>Message</span>
					<textarea name="message" rows="6" required ></textarea>
				</label>

				<input type="submit" value="Send" class="button" />

				<input type="hidden" name="_subject" value="Pro Theme Design Contact - <?php echo date( 'j M y' ); ?>" />
				<input type="hidden" name="_next" value="//prothemedesign.com<?php echo path( 'contact/thanks/' ); ?>" />
				<input type="text" name="_gotcha" style="display:none" />
			</form>


			<!-- technical support contact form -->
			<form class="formspree form-contact-technical" method="POST" action="https://formspree.io/f/xoqpvbrp">
				<p>Before contacting us about a problem please ensure:</p>
				<ul>
					<li>You are running the latest version of WordPress.</li>
					<li>You have updated all themes and plugins.</li>
					<li>You have read your <a href="<?php echo path( 'documentation/theme/' ); ?>">themes documentation</a> and made sure it does not address your issue.</li>
				</ul>

				<label>
					<span>Your Name</span>
					<input type="text" name="name" placeholder="Jane Smith" required />
				</label>

				<label>
					<span>Your Email Address</span>
					<input type="email" name="_replyto" placeholder="name@domain.com" required />
				</label>

				<label>
					<span>Where did you purchase your theme?</span>
					<select name="service" required>
						<option value="" disabled selected>Select one</option>
						<option value="fastspring">ProThemeDesign.com (via Fastspring)</option>
						<option value="gumroad">ProThemeDesign.com (via Gumroad)</option>
						<option value="creative-market">Creative Market</option>
						<option value="wordpress-org">WordPress.org (self hosted)</option>
						<option value="wordpress-com">WordPress.com</option>
					</select>
				</label>

				<label>
					<span>What theme did you purchase?</span>
					<select name="theme-name" required>
						<option value="" disabled selected>Select one</option>
						<?php themes_select_box(); ?>
					</select>
				</label>

				<label>
					<span>Your Website</span>
					<input type="text" name="name" value="http://" required />
				</label>


				<label>
					<span>Message (please be as detailed as possible)</span>
					<textarea name="message" rows="6" required ></textarea>
				</label>

				<input type="submit" value="Send" class="button" />

				<input type="hidden" name="_subject" value="Pro Theme Design Technical Help - <?php echo date( 'j M y' ); ?>" />
				<input type="hidden" name="_next" value="//prothemedesign.com<?php echo path( 'contact/thanks/' ); ?>" />
				<input type="text" name="_gotcha" style="display:none" />
			</form>

		</div>

<?php
	include( '_partials/footer.php' );
