<?php
	/**
	 * TODO
	 * Docs for How to cancel renewal
	 * Privacy policy info for cancelling (link to renewal cancellation doc)
	 */
	$themes_count = themes_count();

	if ( $theme['is-free'] ) {
		return;
	}
?>
		<div class="pricing wrapper block-wrapper relaxed" id="theme-pricing">

			<header class="block-header">
				<h2>
					Join the Theme Club!
					<span class="small">Get <strong><?php echo $theme['name']; ?></strong> and <strong><?php echo ( $themes_count - 1 ); ?></strong> other themes!</span>
				</h2>
			</header>

			<div class="block price-table">

				<div class="product">

					<div class="price-tag">
						<span data-fsc-item-path="themes-club" data-fsc-item-total class="price"></span>
						<span class="yearly">Billed Yearly</span>
					</div>

					<ul>
						<li>Download all <?php echo $themes_count; ?> Pro Theme Design themes.</li>
						<li>12 months of free updates &amp; new products.</li>
						<li>12 months of helpful support.</li>
						<li>One-click admin updates.</li>
						<li>30 day money back guarantee.</li>
					</ul>

<?php
	printf(
		THEME_PURCHASE,
		'themes-club',
		''
	);
?>

				</div>

				<p class="secure">
					<?php draw_svg( 'app-lock' ); ?> Secure payments by Fastspring
				</p>

				<div class="payment-methods">
					<img src="<?php echo image_path( 'credit-cards/light-visa.png' ); ?>" title="Visa" />
					<img src="<?php echo image_path( 'credit-cards/light-mastercard.png' ); ?>" title="Mastercard" />
					<img src="<?php echo image_path( 'credit-cards/light-paypal.png' ); ?>" title="Paypal" />
				</div>

				<p class="terms">
					<small><a href="<?php echo path( 'policies/' ); ?>" class="terms">Terms</a></small>
					<span class="sep"> | </span>
					<small><a href="<?php echo path( 'privacy-policy/' ); ?>" class="terms">Privacy</a></small>
				</p>
			</div>

			<div class="block faq">

				<h3>Peace of Mind</h3>
				<p>This is a subscription product which will renewal automatically each year. However if you decide to end your membership, you can <a href="<?php echo path( '/documentation/general/cancel-subscription-renewal/' ); ?>">cancel the renewal</a> any time.</p>

				<h3>GDPR Compatible</h3>
				<p>Our themes support WordPress privacy functionality, so are ready for GDPR, helping to ensure your <a href="<?php echo path( 'documentation/general/gdpr-privacy/' ); ?>">users privacy</a>.</p>

				<h3>Questions?</h3>
				<p>Want to know more about the theme club? See our <a href="#theme-club-faq" class="scroll-to">FAQ below</a> or, if you still need help, you can <a href="<?php echo path( 'theme-question/' . $theme['key'] . '/' ); ?>">ask us a question</a>.</p>

			</div>

		</div>

		<div class="wrapper compact relaxed block-wrapper" id="theme-club-faq">

			<div class="block">
				<div class="content">
					<h3>What do I get?</h3>
					<p>Joining the Pro Theme Design Theme Club gets you 12 months access to our <a href="<?php echo path( '/themes/' ); ?>">WordPress theme library</a>. This includes any new themes &amp; plugins we may release.</p>
					<p>You will also get 12 months of theme updates and support. <a href="<?php echo path( '/policies/#policy-support' ); ?>">Support</a> is given by Ben Gillbanks, developer of the themes.</p>
				</div>
			</div>

			<div class="block">
				<div class="content">
					<h3>What is your refund policy?</h3>
					<p>We offer a 30 day money back guarantee, no questions asked. If there's a problem with the themes then please let us know and we will do our best to fix them!</p>
				</div>
			</div>

			<div class="block">
				<div class="content">
					<h3>What happens if I cancel the subscription?</h3>
					<p>Your site and theme will continue to work, however you will no longer receive theme updates or support. Unfortunately we cannot guarantee 100% compatability for all future versions of WordPress should you stop updating your themes.</p>
				</div>
			</div>

			<div class="block">
				<div class="content">
					<h3>Why a subscription?</h3>
					<p>A subscription means we can continue offering quality products for the long term.</p>
					<p>By becoming a subscriber you allow us to continue to offer timely support, and give us the ability to continue updating themes, and creating new products.</p>
				</div>
			</div>

		</div>
