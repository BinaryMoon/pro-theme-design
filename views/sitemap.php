<?php

    include( '_partials/head.php' );

?>
    <body class="page-sitemap">

        <?php include( '_partials/header.php' ); ?>

        <div class="wrapper text">
            <h1>Sitemap</h1>
            <ul class="tree">
                <li><a href="<?php echo path(); ?>">Home</a></li>
                <li>
                    <a href="<?php echo path(); ?>">Themes</a>
                    <ul>
                        <?php themes_sitemap(); ?>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo path( 'theme-showcase/' ); ?>">Theme Showcase</a>
                    <ul>
                        <?php website_sitemap(); ?>
                    </ul>
                </li>
                <li><a href="<?php echo path( 'theme-club/' ); ?>">Theme Club</a></li>
                <li>
                    <a href="<?php echo path( 'tools/' ); ?>">Tools</a>
                    <ul>
                        <?php tools_sitemap(); ?>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo path( 'documentation/' ); ?>">Documentation</a>
                    <ul>
                        <li>
                            <a href="<?php echo path( 'documentation/theme/' ); ?>">Themes</a>
                            <?php documentation_list( 'theme', 999 ); ?>
                        </li>
                        <li>
                            <a href="<?php echo path( 'documentation/feature/' ); ?>">Features</a>
                            <?php documentation_list( 'feature', 999 ); ?>
                        </li>
                        <li>
                            <a href="<?php echo path( 'documentation/general/' ); ?>">General</a>
                            <?php documentation_list( 'general', 999 ); ?>
                        </li>
                        <li>
                            <a href="<?php echo path( 'documentation/plugin/' ); ?>">Plugins</a>
                            <?php documentation_list( 'plugin', 999 ); ?>
                        </li>
                    </ul>
                </li>
                <li><a href="<?php echo path( 'contact/' ); ?>">Contact</a></li>
            </ul>
        </div>

<?php

    include( '_partials/footer.php' );
