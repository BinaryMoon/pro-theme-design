<p class="intro">All themes have full support for Localizations - and many include translations for different languages.</p>

<h2>Setting your site language</h2>

<p>When installing your WordPress site you will be asked to select your sites language, however if you want to change the language then you can do so through the Settings &rarr; General menu.</p>

<h2>Translating Your Theme</h2>

<p>If you've purchased the theme and it does not support your language then there's two things you could do.</p>

<ol>
	<li>Use translate.wordpress.com to translate the theme. This is ideal for WordPress.com</li>
	<li>Use Poedit to translate the theme. The quickest solution for a self hosted site.</li>
</ol>

<h2>Use translate.wordpress.com to translate the theme</h2>

<p>Using <em>translate.wordpress.com</em> to translate the theme will take a bit longer, however it is better in the long run since the translation will be managed by WordPress.com and so everything will be updated automatically as the theme updates.</p>

<p>To do this you should:</p>

<ol>
	<li>Create a <a href="https://wordpress.com">WordPress.com</a> account.</li>
	<li>Visit <a href="https://translate.wordpress.com/projects/wpcom/themes">translate.wordpress.com</a> whilst logged in to your WordPress.com account.</li>
	<li>Pick the theme you would like to translate.</li>
	<li>Pick the language you would like to translate the theme to.</li>
	<li>At the top of the page, press the 'Untranslated' link. This will filter the posts down to the ones that have are still in English.</li>
	<li>Double click the text you would like to change, and then enter the translation. Repeat for all texts.</li>
	<li>Once done - the translations will need to be approved (this is where we have to wait). If you <a href="<?php echo path( 'contact/' ); ?>">contact us</a> and let us know which theme and language then we can prompt someone to do it a bit quicker.</li>
	<li>Wait for the next theme update (we can send you the translation files as soon as they're ready).</li>
</ol>

<h2>Use Poedit to translate the theme</h2>

<p><a href="http://www.poedit.net/" target="_blank" rel="noopener">Poedit</a> is software that helps you to translate websites.</p>

<p>To translate using Poedit you need 2 things:</p>

<ol>
	<li>An installed copy of the <a href="http://www.poedit.net/" target="_blank" rel="noopener">Poedit</a> software.</li>
	<li>The pot file for the theme you want to translate. This can be found in the languages folder in the theme of your choice.</li>
</ol>

<p>To translate using Poedit you should:</p>

<ol>
	<li>Open up the pot file in your newly installed copy of Poedit. Use ‘New file from POT file’ in the file menu.</li>
	<li>Edit all of the text in the editor. Keep the original text (it’s needed for reference) and add the translations. The software is really simple and intuitive so this should be straight forward</li>
	<li>Once translated save the changes using the naming conventions below. When you save the file you will be given a .mo and a .po file. The mo file is the machine readable copy, and the po is for people. Once you have the po file you can open that to edit further and you will see your existing changes.</li>
	<li>Upload the mo and po files to the languages directory within the theme files.</li>
	<li>If you haven't already then select the language within WordPress.</li>
</ol>

<h2>Filename Conventions</h2>

<p>This can be a little confusing so I will explain it to the best of my ability. The idea is that the file is saved using the 2 letter language code followed by the 2 letter country code, separated by an underscore (_). For example I speak English and I am from Great Britain so I would use the file name en_GB. The default WordPress language is US English – or en_US. Many countries, such as Germany, speak their own language, so the German language file would be saved as de_DE.</p>
