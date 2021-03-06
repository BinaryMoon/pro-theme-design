<h2>Shortcode Preview</h2>

<pre>
// basic shot 600px wide
[browser-shot url="https://link-to-website" width="600"]

// shot with link to other website
[browser-shot url="https://link-to-website" width="700" link="https://www.binarymoon.co.uk/"]

// shot with caption (uses default WordPress caption styles)
[browser-shot url="https://link-to-website" width="700"]Add Caption[/browser-shot]
</pre>

<h2>Available Parameters</h2>

<ul>
	<li><strong>url <em>(required)</em></strong> - the url of the link to shorten</li>
	<li><strong>width</strong> - the width of the image</li>
	<li><strong>height</strong> - the height of the image</li>
	<li><strong>alt</strong> - the image alt text</li>
	<li><strong>link</strong> - where the image links. Left blank it will point to the website from which the screenshot is being taken</li>
	<li><strong>target</strong> - browser target. Set to <em>_blank</em> to open in a new window</li>
</ul>

<h2>Multisite Compatibility</h2>

<p>The Browser Shots plugin is compatibly with WordPress Multisite, just use the Network Activate feature to enable the shortcode on every site. If you only want to enable the shortcode for a specific site, activate the plugin for that site only.</p>
