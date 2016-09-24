<h2>Customizer Settings</h2>

<img src="<?php echo image_path( 'docs/carmack-customizer.png' ); ?>" class="align-right" />

<ul>
    <li><strong>Display Featured Posts in Infinite Scroll</strong> - by default Carmack will show extra featured content each time infinite scroll loads new posts. This helps give the posts more exposure.</li>
    <li><strong>Featured Post Area Title</strong> - Title to display on the featured content that get displayed during infinite scroll.</li>
    <li><strong>Latest News Title</strong> - Title to display after the featured content has displayed, before the actual blog posts start.</li>
    <li><strong>Display triangular background overlay</strong> - This setting allows you to show/ hide the transparent background triangle.</li>
    <li><strong>Autoplay the Featured Content Slider</strong> - Disable this setting to stop the slider from playing automatically. The slider navigation still allows you to change the current slide.</li>
</ul>

<h2>Post CSS Styles</h2>

<p>To enhance Carmack, we have included some styles that can be reused in your blog posts and pages.</p>

<h3>Intro Paragraph</h3>

<img src="<?php echo image_path( 'docs/carmack-code-intro.png' ); ?>" class="align-center" />

<p>Making the first paragraph in an article larger than the others is a nice, simple way to pull the reader’s attention to your articles. To do this, add the ‘intro’ class to your first paragraph.</p>

<pre>&lt;p class="intro">The first paragraph in an article is the hardest.&lt;/p></pre>

<h3>Text Highlight</h3>

<img src="<?php echo image_path( 'docs/carmack-code-highlight.png' ); ?>" class="align-center" />

<p>Apply a highlighter to your text, by wrapping your text in a span with the class ‘highlight’.</p>

<pre>&lt;span class="highlight">This text is highlighted&lt;/span>.</pre>

<h3>Drop Caps</h3>

<img src="<?php echo image_path( 'docs/carmack-code-drop-cap.png' ); ?>" class="align-center" />

<p>A drop cap is a large letter at the beginning of a paragraph. To add a drop cap, wrap the first character in a block of text in a span with the class ‘dropcap’. See below for an example:</p>

<pre>&lt;span class="dropcap">T&lt;/span>his is how you drop cap.</pre>

<h2>Custom Post Formats</h2>

<p>Carmack supports some of the available Post Formats, and styles each differently on the blog, archive, and search pages. Using the different formats will visually distinguish your types of content.</p>

<img src="<?php echo image_path( 'docs/carmack-post-formats.png' ); ?>" class="align-center" />

<ol>
    <li><strong>Standard</strong> — The default blog post format displays the content as a news article, with an optional featured image positioned on the left.</li>
    <li><strong>Quote</strong> — The quote post format will highlight the first blockquote found in your blog post. If there’s no blockquote, then it will display the entire blog post.</li>
    <li><strong>Audio</strong> — The audio post format will highlight the first audio file found in your blog post.</li>
    <li><strong>Video</strong> — The video post format will display your video and the post title. It supports YouTube, Vimeo, and hosted videos; and the theme will automatically display the first video that’s added to the post content.</li>
    <li><strong>Image</strong> — The image post format displays a large featured image and the post title. Posts with the image format need a featured image assigned to display properly.</li>
    <li><strong>Gallery</strong> — Gallery posts will display a gallery of images from the gallery you’ve added to the post content.</li>
</ol>

<h2>Sidebars</h2>

<p>Carmack has 3 optional sidebars. They will only display if they contain widgets.</p>

<ul>
    <li><strong>Sidebar Widgets</strong> - this displays on the right hand side of every page.</li>
    <li><strong>Footer Widgets</strong> - this displays in the footer and uses javascript to intelligently position the widgets to make sure they slot together nicely.</li>
    <li><strong>Overlay Widgets</strong> - this is an optional sidebar that will display in a page overlay, accessed from the menu button next to the site title.</li>
</ul>

<h2>Custom Templates</h2>

<p>Carmack has 4 <a href="<?php echo path( 'documentation/feature/custom-page-templates/' ); ?>">Custom Page Templates</a>. These can be used as different layouts for your websites pages, or as a <a href="<?php echo path( 'documentation/feature/custom-front-page/' ); ?>">Custom Front Page</a>.</p>

<ul>
    <li><strong>Contributors</strong> — A list of all of the contributors to your website sorted based on how many posts each person has published. Great for magazines and other multi-author blogs.</li>
    <li><strong>Full-Width Page</strong> — Displays a normal page, but with the sidebars removed so that you can have content that stretches the full width of the site.</li>
    <li><strong>Projects</strong> – Lists all the projects that have been added to your portfolio.</li>
    <li><strong>Child Page Grid</strong> – Lists all of the pages that are children of the current page. This is handy if you want to create an index of pages.</li>
</ul>
