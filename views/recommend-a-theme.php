<?php
	include( '_partials/head.php' );
?>
	<body class="page-feedback">

		<?php include( '_partials/header.php' ); ?>

		<div class="wrapper text">

			<h1>Recommend a WordPress Theme</h1>
			<p class="intro">Having trouble finding a WordPress theme for your website? Fill out the form below and we will send you a personalised recommendation.</p>

			<hr />

			<!-- feedback form -->
			<form class="formspree form-contact" method="POST">

				<label>
					<span>Your Name</span>
					<input type="text" name="name" placeholder="Jane Smith" required />
				</label>

				<label>
					<span>Your Email Address</span>
					<input type="email" name="_replyto" placeholder="name@domain.com" required />
				</label>

				<label>
					<span>Current Website Url</span>
					<input type="url" name="website" placeholder="http://prothemedesign.com" required />
				</label>

				<label>
					<span>Website Goal</span>
					<p>What is the main thing you want to achieve from your website?</p>
					<textarea name="website_goal" required></textarea>
				</label>

				<label>
					<span>Website Features</span>
					<p>List any features you are keen to include in the site.</p>
					<textarea name="website_features" required></textarea>
				</label>

				<label>
					<span>Target Audience</span>
					<p>Who is your ideal customer/ fan/ reader?</p>
					<textarea name="target_audience" required></textarea>
				</label>

				<input type="submit" value="Get Recommendation &rarr;" class="button" />

				<input type="hidden" name="_subject" value="Pro Theme Design Recommend a Theme - <?php echo date( 'j M y' ); ?>" />
				<input type="hidden" name="_next" value="https://prothemedesign.com<?php echo path( 'contact/recommended/' ); ?>" />
				<input type="text" name="_gotcha" style="display:none" />
			</form>

		</div>

<?php
	include( '_partials/footer.php' );
