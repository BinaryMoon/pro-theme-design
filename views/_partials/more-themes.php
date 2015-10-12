<?php
    $themes = themes_get_random();
?>
        <div class="theme-wrapper block-wrapper wrapper">
            <header class="block-header">
                <h2>Professional WordPress Themes <small><a href="<?php echo path( '' ); ?>">View All</a> <i class="fa fa-arrow-right end"></i></small></h2>
            </header>
<?php
    foreach ( $themes as $theme ) {
?>
            <div class="block overlap-header">
                <header>
                    <a href="<?php echo $theme['url']; ?>">
                        <img src="<?php echo image_path( 'monitor/' . $theme['image'] ); ?>">
                    </a>
                </header>
                <div class="content sticky-footer">
                    <h3><?php echo $theme['name']; ?></h3>
                    <p><?php echo $theme['description']; ?></p>

                    <footer>
                        <a class="button" href="<?php echo $theme['url']; ?>">
                            Demo &amp; Details
                        </a>
                    </footer>
                </div>
            </div>
<?php
    }
?>
        </div>
