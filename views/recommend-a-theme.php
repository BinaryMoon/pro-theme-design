<?php
	include( '_partials/head.php' );
?>
	<body class="page-feedback">

		<?php include( '_partials/header.php' ); ?>

		<div class="wrapper text">

			<h1>Get a personalised WordPress theme recommendation</h1>
			<p class="intro">Having trouble finding the right WordPress theme for your website? Fill out the form below and we'll assess your requirements and send you a personalised recommendation within 24 hours.</p>

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

			<hr />

			<p>We made this service as a freebie to help people through what can be a confusing experience. There are hundreds of thousands of WordPress themes available online and selecting the right one for you, especially if you're not experienced with WordPress, can be hard.</p>

			<p>The service is personalised so each request will take into account the requirements of the project. It's totally free and you are under no obligation to do anything with the information provided.</p>
			
			<p>Each request is reviewed personally, so please allow up to 24 hours for a response, Monday to Friday.</p>

		</div>

<?php
	include( '_partials/footer.php' );
