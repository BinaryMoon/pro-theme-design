
    <h1>Documentation</h1>

    <h2><a href="<?php echo path( 'documentation/theme/' ); ?>">Themes</a></h2>
    <?php documentation_list( 'theme', 999 ); ?>

    <h2><a href="<?php echo path( 'documentation/feature/' ); ?>">Features <small>View All &rarr;</small></a></h2>
    <?php documentation_list( 'feature' ); ?>

    <h2><a href="<?php echo path( 'documentation/general/' ); ?>">General <small>View All &rarr;</small></a></h2>
    <?php documentation_list( 'general' ); ?>

    <h2><a href="<?php echo path( 'documentation/plugin/' ); ?>">Plugins <small>View All &rarr;</small></a></h2>
    <?php documentation_list( 'plugin' ); ?>
