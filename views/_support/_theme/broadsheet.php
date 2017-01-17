<h2>Homepage Layout</h2>

<img src="<?php echo image_path( 'docs/layout-broadsheet.png' ); ?>" alt="Broadsheet Homepage Layout" />

<ol>
	<li>
		<strong>Featured Content</strong> The 4 Featured Posts are controlled with <?php echo documentation_link( 'featured-content' ); ?> functionality.
	</li>
	<li>
		<strong>Homepage Slider</strong> The slider is controlled via a property set in the Customizer. Blog posts require <?php echo documentation_link( 'featured-image' ); ?> to display here. A maximum of 6 posts at a time will display in the slider.
	</li>
	<li>
		<strong>Small Left Widgets</strong> A sidebar that can be edited in the Customizer. Will be hidden on smaller screens.
	</li>
	<li>
		<strong>Blog posts</strong> A reverse chronological list of blog posts. Perfect for news items.
	</li>
	<li>
		<strong>Featured Categories</strong> The categories used in the third column are controlled with the Customizer. Blog posts require <?php echo documentation_link( 'featured-image' ); ?> to display here. Blog posts will only be shown once in the featured categories column. Some categories may not display. This will be because either there are no posts in the category, the posts in the category do not have featured images, or the posts in the category have been displayed in a different category already.
	</li>
	<li>
		<strong>Sidebar Widgets</strong> A large widget sidebar.
	</li>
</ol>

<h2>Customizer Settings</h2>

<img src="<?php echo image_path( 'docs/customizer-broadsheet.png' ); ?>" alt="Broadsheet Customizer Screenshot" class="align-right"/>

<ul>
	<li><strong>Display Date and Social Links in Header</strong> - allows you to hide the date from the site header.</li>
	<li><strong>Date Format</strong> - change the date format/ order used.</li>
	<li><strong>Homepage Slider Category</strong> Here you can select the category used for the Homepage Slider.</li>
	<li><strong>Featured Categories</strong> Here you can add and rearrange the categories displayed in the third column on the homepage.</li>
	<li><strong>Maximum Featured Category Amount</strong> - Maximum number of posts to display in each featured category.</li>
</ul>

<h2>Sidebars</h2>

<p>Broadsheet has 3 optional sidebars. They will only display if they contain widgets.</p>

<p>The footer sidebar is on all pages. The right-hand sidebar is on all pages except the full-width page template. The left-hand sidebar is displayed on the homepage, blog posts, and regular pages.</p>

<h2>Custom Templates</h2>

<p>Broadsheet has 2 <a href="<?php echo path( 'documentation/feature/custom-page-templates/' ); ?>">Custom Page Templates</a>. These can be used as different layouts for your websites pages, or as a <a href="<?php echo path( 'documentation/feature/custom-front-page/' ); ?>">Custom Front Page</a>.</p>

<ul>
	<li><strong>Full Width</strong> - this lets you display your page content full width, with no sidebar.</li>
	<li><strong>Contributors</strong> - this page displays a list of all the people who have published content on your blog.</li>
</ul>

<h2>Image Sizes</h2>

<p>All featured Images are generated from the same initial image so make sure to keep the focus of the image in the center as the surrounding content may be cropped.</p>

<ul>
	<li>The recommended header image size is <code>1140</code> wide by <code>150</code> high.</li>
	<li>The featured category post thumbnails (on the homepage) are <code>350</code> pixels wide by <code>150</code> pixels high.</li>
	<li>The blog post thumbnails are <code>100</code> pixels wide by <code>80</code> pixels high.</li>
	<li>The featured content area uses images sized <code>200</code> x <code>125</code>.</li>
	<li>The post slider uses images sized <code>1200</code> x <code>400</code>.</li>
	<li>The site logo uses an image sized <code>360</code> x <code>360</code>.</li>
</ul>
