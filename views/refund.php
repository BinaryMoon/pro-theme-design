<?php
	include( '_partials/head.php' );
?>
	<body class="page-refund">

		<?php include( '_partials/header.php' ); ?>

		<div class="wrapper text">

			<h1>Refund Request</h1>
			<p class="intro">Really sorry to hear you're not happy with the theme - however we totally understand. We have a <strong>30 day refund policy for all themes purchased through Fastspring</strong>. <em>For other payment providers please see the <a href="<?php echo path( 'documentation/general/refunds/' ); ?>">refunds page</a></em>.</p>

			<hr />

			<!-- pre sales contact form -->
			<form class="formspree form-contact" method="POST" action="https://formspree.io/f/xoqpvbrp">
				<label>
					<span>Your Name</span>
					<input type="text" name="name" placeholder="Jane Smith" required />
				</label>

				<label>
					<span>Your Purchase Email Address</span>
					<input type="email" name="_replyto" placeholder="name@domain.com" required />
				</label>

				<label>
					<span>Theme Purchased</span>
					<select name="theme-name" required>
						<option value="" disabled selected>Select one</option>
						<?php themes_select_box(); ?>
					</select>
				</label>

				<label>
					<span>Purchase Date</span>
					<input type="text" name="date" placeholder="<?php echo date( 'd F Y' ); ?>" required />
				</label>

				<label>
					<span>Reason for wanting a refund (the more information the better)</span>
					<textarea name="message" rows="6" required ></textarea>
				</label>

				<input type="submit" value="Send" class="button" />

				<input type="hidden" name="_subject" value="Pro Theme Design Refund Request - <?php echo date( 'j M y' ); ?>" />
				<input type="hidden" name="_next" value="//prothemedesign.com<?php echo path( 'contact/thanks/' ); ?>" />
				<input type="text" name="_gotcha" style="display:none" />
			</form>

		</div>

<?php
	include( '_partials/footer.php' );
