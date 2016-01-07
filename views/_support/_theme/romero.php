<h2>Homepage Layout</h2>

<img src="<?php echo image_path( 'docs/layout-romero.png' ); ?>" alt="Romero Homepage Layout" />

<ol>
    <li><strong>Featured Content</strong> The large headline image, and up to 6 smaller posts on a white background are all controlled with <?php echo documentation_link( 'featured-content' ); ?> functionality. The most recent of the featured posts will be the large featured image. To look their best you should make sure all featured posts have a <?php echo documentation_link( 'featured-image' ); ?>.</li>
    <li><strong>Sidebar Widgets</strong> The left sidebar is controlled with Sidebar widgets. If the sidebar has no widgets then the blog posts will expand to fill the available space.</li>
</ol>

<h2>Sidebars</h2>

<p>Romero has 5 optional sidebars. They will only display if they contain widgets.</p>

<ul>
    <li><strong>Sidebar Widgets</strong> - this displays on the left hand side of the homepage, and the right hand side of blog posts and pages.</li>
    <li><strong>Footer Widgets</strong> - this displays in the footer and uses javascript to intelligently position the widgets to make sure they slot together nicely.</li>
    <li><strong>Menu Widgets 1, 2, and 3</strong> - these display in columns in a block underneath the menu that appears from the arrow to the right of the navigation.</li>
</ul>
