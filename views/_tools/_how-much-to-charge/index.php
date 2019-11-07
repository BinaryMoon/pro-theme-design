<?php
	site_script( path( 'views/_tools/_how-much-to-charge/scripts.min.js' ) );
?>
<div class="wrapper text">
	<?php site_breadcrumbs(); ?>

	<h1>WordPress Freelance Pricing Calculator</h1>

	<form class="entity-calculator">

		<div class="hourly-rate group">

			<label for="hourly-value">

				<span>Your hourly rate?</span>

			</label>

			<div class="row">

				<select id="currency" data-size="short">
					<option value="$">$</option>
					<option value="£">£</option>
					<option value="€">€</option>
					<option value="¥">¥</option>
				</select>

				<input type="number" step="10" min="10" id="rate" value="150" class="hourly-value" id="hourly-value" />

			</div>

			<p class="hint">You can <a href="http://motivapp.com/freelance-hourly-rate-calculator" target="_blank" rel="noopener">calculate your rate here</a></p>

		</div>

		<label class="group">
			<span>Approximate how many hours will the project take to complete?</span>
			<input type="number" step="1" min="1" id="duration" value="20" />
			<p class="hint">Make sure to include time for everything - emails, calls, meetings etc</p>
		</label>

		<label class="group group-expenses">
			<span>What are your expenses?</span>
			<span class="symbol">$</span>
			<input type="number" step="1" min="1" id="expenses" value="0" />
			<p class="hint">For example any software/ <a href="<?php echo path( '/themes/' ); ?>">WordPress themes</a>/ plugins you need to buy, contractor costs, travel for meetings etc.</p>
		</label>

		<label>
			<span>Who is the project for?</span>
		</label>

		<div class="radio-group">
			<label>
				Charity
				<input type="radio" name="client" value="0" />
			</label>
			<label>
				Individual
				<input type="radio" name="client" value="0.2" />
			</label>
			<label class="checked">
				Small/ Medium Business
				<input type="radio" name="client" value="0.4" checked />
			</label>
			<label>
				Large Company
				<input type="radio" name="client" value="0.6" />
			</label>
		</div>

		<label>
			<span>Your Interest in the project?</span>
		</label>

		<div class="radio-group">
			<label>
				No Interest
				<input type="radio" name="interest" value="0.6" checked />
			</label>
			<label class="checked">
				Could be fun
				<input type="radio" name="interest" value="0.4" checked />
			</label>
			<label>
				Good learning excercise
				<input type="radio" name="interest" value="0.2" />
			</label>
			<label>
				Dream Project
				<input type="radio" name="interest" value="0" />
			</label>
		</div>

		<div class="note message">
			<p class="quote">You should quote: <span>?</span></p>
			<p class="quote-addendum">With a base price (break even) of: <span>?</span></p>
		</div>

	</form>


	<h2>The Theory</h2>
	<p>The base price is calculated by multiplying your hourly rate by your time estimate. We then add some extra time for contingency in case of unexpected problems. Finally we round the base price, to make it look nicer.</p>
	<p>Next we look at how important the job and client are to you and adjust the rate accordingly.</p>
	<p>This gives you a base rate - and an ideal rate. You should <strong>quote the ideal rate</strong> - knowing that you can drop to the base rate and still get a fair deal. Of course, you should always stick to the ideal rate if you can!</p>
	<p>Read more on how to <a href="<?php echo path( 'how-to/earn-more-as-a-wordpress-freelancer/' ); ?>">charge more as a WordPress freelancer</a>.</p>



</div>

<?php
	site_include_view( '_partials/more-themes.php' );
