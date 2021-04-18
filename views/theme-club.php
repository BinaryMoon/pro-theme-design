<?php
	include( '_partials/head.php' );
?>

	<body class="page-theme-club">

		<?php include( '_partials/header.php' ); ?>

		<div class="wrapper text">
			<h1>WordPress Theme Club</h1>

			<p class="note intro note-themes-club">Join the <strong>Pro Theme Design <em>Theme Club</em></strong> to get access to all of our self hosted themes. The Pro Theme Design <em>Theme Club</em> is the best value for users who run multiple sites or agencies who want to use multiple themes for different clients. You can use the themes for your client work.</p>

			<ul>
				<li><strong>Peace of mind</strong>: We've been making and selling themes since 2007 - and have no plans to stop.</li>
				<li><strong>Secure Themes</strong>: All of our themes have been code reviewed by the WordPress.com team - and they know their stuff!</li>
				<li><strong>Unlimited Sites</strong>: Use our themes on as many sites as you like.</li>
				<li><strong>All theme updates</strong>: Get all theme updates for the duration of your membership.</li>
				<li><strong>New themes</strong>: We aim to release a minimum of 2 new themes every year.</li>
			</ul>

			<?php documentation_supported_themes( 'theme-club' ); ?>

			<table id="pricing" class="comparison">
				<tr>
					<th></th>
					<th class="title">Theme Club</th>
					<th class="title">Lifetime Bundle</th>
				</tr>
				<tr>
					<td class="feature">All Themes</td>
					<td><?php draw_svg( 'app-checkmark', 'small' ); ?></i></td>
					<td><?php draw_svg( 'app-checkmark', 'small' ); ?></i></td>
				</tr>
				<tr>
					<td class="feature">Theme Updates</td>
					<td><?php draw_svg( 'app-checkmark', 'small' ); ?></td>
					<td><?php draw_svg( 'app-checkmark', 'small' ); ?></td>
				</tr>
				<tr>
					<td class="feature">Theme Additions</td>
					<td><?php draw_svg( 'app-checkmark', 'small' ); ?></td>
					<td><?php draw_svg( 'app-checkmark', 'small' ); ?></td>
				</tr>
				<tr>
					<td class="feature">Unlimited Website Usage</td>
					<td><?php draw_svg( 'app-checkmark', 'small' ); ?></i></td>
					<td><?php draw_svg( 'app-checkmark', 'small' ); ?></i></td>
				</tr>
				<tr>
					<td class="feature">Premium Technical Support</td>
					<td><?php draw_svg( 'app-checkmark', 'small' ); ?></td>
					<td><?php draw_svg( 'app-checkmark', 'small' ); ?></td>
				</tr>
				<tr>
					<td class="feature">No Subscription Fees</td>
					<td><?php draw_svg( 'app-close', 'small' ); ?></td>
					<td><?php draw_svg( 'app-checkmark', 'small' ); ?></i></td>
				</tr>
				<tr>
					<td class="feature">Cost</td>
					<td>$149 for 6 months<br />$249 for 1 year</td>
					<td>$499 one time payment</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>

			<p class="note"><strong>Note:</strong> the <em>Theme Club</em> is not available for WordPress.com - you can <a href="https://theme.wordpress.com/themes/by/pro-theme-design/" target="_blank" rel="noopener">Get our WordPress.com Themes</a> here.</p>
		</div>

<?php
	include( '_partials/footer.php' );
