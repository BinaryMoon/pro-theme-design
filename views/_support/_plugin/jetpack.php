<h2>Problems Connecting Jetpack?</h2>

<p>To enable all of Jetpacks features you need to connect your website to WordPress.com. However, to do this, a file called xmlrpc.php needs to be active. Some webhosts disable this. In this case you will get a '403 error' when tryng to connect your site to WordPress.com.</p>

<p>If this happens then you can install an additional plugin called <a href="https://wordpress.org/plugins/jetpack-dev-mode/" target="_blank" rel="noopener">Jetpack Dev Mode</a>.</p>

<p>Once this plugin is enabled the features that do not require the WordPress.com connection will work. This includes featured content, infinite scroll, social icons, and projects (amongst others). Some of the features that won't work are Stats, and Related Content.</p>

<?php
    documentation_plugin_features( $page );
