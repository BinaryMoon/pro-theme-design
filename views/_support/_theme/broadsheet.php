<h2>Homepage Layout</h2>

<img src="<?php echo image_path( 'docs/layout-broadsheet.png' ); ?>" alt="Broadsheet Homepage Layout" />

<ol>
    <li><strong>Featured Content</strong> The 4 Featured Posts are controlled with <?php echo documentation_link( 'featured-content' ); ?> functionality.</li>
    <li><strong>Homepage Slider</strong> The slider is controlled via a property set in the Customizer. Blog posts require <?php echo documentation_link( 'featured-image' ); ?> to display here.</li>
    <li><strong>Featured Categories</strong> The categories used in the third column are controlled with the Customizer. Blog posts require <?php echo documentation_link( 'featured-image' ); ?> to display here. Blog posts will only be shown once in the featured categories column. Some categories may not display. This will be because either there are no posts in the category, the posts in the category do not have featured images, or the posts in the category have been displayed in a different category already.</li>
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
