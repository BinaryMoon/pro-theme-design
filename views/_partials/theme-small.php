            <div class="block overlap-header">

                <header>
                    <a href="<?php echo $theme['url']; ?>" class="screenshot">
                        <img src="<?php echo image_path( 'monitor/' . $theme['image'] ); ?>" alt="<?php echo $theme['name']; ?> Screenshot" />
                    </a>
                </header>

                <div class="content sticky-footer">
                    <h3>
                        <a href="<?php echo $theme['url']; ?>"><?php echo $theme['name']; ?></a>
                    </h3>
                    <p><?php echo $theme['description']; ?></p>
<?php
        if ( page_is_themes() ) {
?>
                    <a class="button ghost greedy" href="<?php echo $theme['url-details']; ?>" title="<?php echo $theme['name']; ?> Details">
                        Demo &amp; Details
                    </a>
<?php
        }
?>

                    <footer>
                        <a class="button" href="<?php echo $theme['url']; ?>" title="<?php echo $theme['name']; ?> Details" target="<?php echo $theme[ 'link-target' ]; ?>">
                            <?php echo $theme['text-details']; ?>
                        </a>
                    </footer>
                </div>
            </div>
