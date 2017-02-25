<p class="intro">After a successful theme purchase you will receive an email including your individual theme or theme bundle download link. With this link you can download the zip file that contains your theme files.</p>

<p class="note icon"><?php draw_svg( 'alert-info', 'large' ); ?>On MacOS downloaded zip files get extracted by default - so check your downloads folder for the zip file before continuing.</p>

<h2>Installation on WordPress.com</h2>

<p>Themes purchased on WordPress.com do not need to be installed. As soon as you purchase as theme it will be available to use through the theme selector in your websites admin area.</p>

<h2>Installation via the WordPress admin panel</h2>

<p>Installing a theme through the WordPress admin panel is the simplest option - however it gives you the least control. For 99% of cases this won't be a problem but if you need to change settings/ prefer to do things manually then you can install via ftp as described below.</p>

<ol>
	<li>
		After downloading the theme .zip file to your computer, please go to <em>Appearance &rarr; Themes</em> in your WordPress admin panel.
	</li>
	<li>
		Click on <em>Add New</em>.
	</li>
	<li>
		Click on <em>Upload Theme</em>.
	</li>
	<li>
		Select your theme theme file by clicking 'Choose file', and finding it on your computer.
	</li>
	<li>
		Click on <em>Install Now</em>. The thme will then be uploaded as your active theme.
	</li>
</ol>

<h2>Installation via FTP</h2>

<p>Alternatively you can also install the theme directly to your server with a FTP client (e.g. <a href="https://filezilla-project.org/">Filezilla</a>, or <a href="https://cyberduck.io/?l=en">Cyberduck</a>). Just drop the un-zipped theme folder into your <em>…/wp-content/themes/</em> folder. You can then head over to the WordPress Admin and see your installed theme in the Appearance → Themes admin screen. From there you can activate your theme by clicking on the Activate link.</p>

<h2>Theme Upgrades</h2>

<p>Assuming you are not using the <a href="<?php echo path( '/documentation/general/theme-updates/' ); ?>">theme auto updates</a> then I would recommend making a backup of your existing theme so that you can easily revert things in case of problems.</p>

<p>The easiest way to make a backup is to log in via ftp and rename the theme folder (e.g. <em>mimbopro</em> could become <em>mimbopro_backup</em>).</p>

<p>Once you have a backup you can either upload the theme files via ftp, or upload the theme through your WordPress admin.</p>

<p>If you want to do everything through the WordPress admin then you will need to delete the theme before uploading the new version.</p>
