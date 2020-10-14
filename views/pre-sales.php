<?php
	include( '_partials/head.php' );
?>
	<body class="page-feedback">

		<?php include( '_partials/header.php' ); ?>

		<div class="wrapper text">

			<h1>Got a Question about <?php echo $theme_name; ?>?</h1>
			<p class="intro">Got a question about a theme? Let us know and we'll help as best we can.</p>
			<p><a href="<?php echo path( 'theme/' . $theme_slug . '/#theme-pricing' ); ?>">Back to <?php echo $theme_name; ?> info &rarr;</a></p>

			<hr />

			<!-- feedback form -->
			<form class="formspree form-contact" method="POST">
				<label>
					<span class="question">What would you like to know about <?php echo $theme_name; ?>?</span>
					<textarea name="question" rows="3" required class="small"></textarea>
				</label>

				<label>
					<span>Your Name</span>
					<input type="text" name="name" required placeholder="Jane Smith" />
				</label>

				<label>
					<span>Your Email Address</span>
					<input type="email" name="_replyto" required placeholder="name@domain.com" />
				</label>

				<input type="submit" value="Ask Question &rarr;" class="button" />

				<input type="hidden" name="_subject" value="Pro Theme Design Question - <?php echo date( 'j M y' ); ?> - <?php echo $theme_name; ?>" />
				<input type="hidden" name="_next" value="https://prothemedesign.com<?php echo path( 'contact/thanks/' ); ?>" />
				<input type="text" name="_gotcha" style="display:none" />
			</form>

		</div>

<?php
	include( '_partials/footer.php' );
