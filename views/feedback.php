<?php
	include( '_partials/head.php' );
?>
	<body class="page-feedback">

		<?php include( '_partials/header.php' ); ?>

		<div class="wrapper text">

			<h1>Pro Theme Design Feedback</h1>
			<p class="intro">Hi there, thanks for agreeing to give us some feedback. We love getting feedback and use it to ensure we make the best products possible.</p>
			<p>Click here if you're looking for <a href="<?php echo path( '/contact/' ); ?>">customer support</a>.</p>

			<hr />

			<!-- feedback form -->
			<form class="formspree form-contact" method="POST">
				<?php include( $questions ); ?>

				<label>
					<span>Your Name (optional)</span>
					<input type="text" name="name" placeholder="Jane Smith" />
				</label>

				<label>
					<span>Your Email Address (optional)</span>
					<input type="email" name="_replyto" placeholder="name@domain.com" />
				</label>

				<input type="submit" value="Send Feedback &rarr;" class="button" />

				<input type="hidden" name="_subject" value="Pro Theme Design Feedback - <?php echo date( 'j M y' ); ?>" />
				<input type="hidden" name="_next" value="https://prothemedesign.com<?php echo path( 'contact/thanks/' ); ?>" />
				<input type="text" name="_gotcha" style="display:none" />
			</form>

		</div>

<?php
	include( '_partials/footer.php' );
