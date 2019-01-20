<?php
	if ( $theme['is-free'] ) {

	} else {
?>
		<div class="pricing wrapper block-wrapper" id="theme-pricing">

			<header class="block-header">
				<h2>
					Get <?php echo $theme['name']; ?>
					<span class="small">Build a Professional Website Today!</span>
				</h2>
			</header>

			<div class="block screenshot">
				<img src="<?php echo image_path( 'theme-monitor/' . $theme['image'] ); ?>" alt="<?php echo $theme['name']; ?> Screenshot" />
			</div>

			<div class="block price-table">

				<div class="product">

<?php
	if ( ! empty( $theme['price-wporg'] ) ) {
?>
					<span data-fsc-item-path="<?php echo $theme['key']; ?>" data-fsc-item-total class="price blip positive"></span>
<?php
	}
?>

					<ul>
						<li>Lifetime usage</li>
						<li>Unlimited sites</li>
						<li>1 click admin updates</li>
						<li>1 year of support</li>
					</ul>

					<?php site_include_view( '_partials/theme-purchase-buttons.php', array( 'theme' => $theme ) ); ?>

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

				<h3>30 day Guarantee</h3>
				<p>If you have a problem with a purchase from us then let us know and we will <a href="<?php echo path('refund/' ); ?>">give you a refund</a>.</p>

				<h3>GDPR Compatible</h3>
				<p>Ready for GDPR, helping to ensure your <a href="<?php echo path( 'documentation/general/gdpr-privacy/' ); ?>">users privacy</a>.</p>

				<h3>Questions?</h3>
				<p>Want to know more about the theme? Just let us know and we'll do our best to help. <a href="<?php echo path( 'theme-question/' . $theme['name'] . '/' ); ?>">Ask a question</a>.</p>

			</div>

		</div>

<?php
	}