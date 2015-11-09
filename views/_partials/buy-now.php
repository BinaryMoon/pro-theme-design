        <div class="modal-wrapper theme-modal">
            <div class="modal">
                <a href="#" class="overlay-close"><i class="fa fa-times"></i></a>
<?php
    if ( ! empty( $theme[ 'url-wporg' ] ) ) {
?>
                <div class="note alt message">
                    <h3>WordPress.org - self-hosted sites</h3>
                    <span class="price"><?php echo $theme['price-wporg']; ?></span>
                    <p>Get a downloadable version of <?php echo $theme[ 'name' ]; ?> to use on your own web space.</p>
                    <a href="<?php echo $theme[ 'url-wporg' ]; ?>" target="_blank" class="button">Get for wordpress.org<i class="fa fa-external-link end"></i></a>
                </div>
<?php
    }

    if ( ! DISABLE_THEME_CLUB && ! empty( $theme[ 'url-wporg' ] ) && 'free!' !== $theme['price-wporg'] ) {
?>

                <div class="note note-themes-club message alt">
                    <h3>Join the Theme Club</h3>
                    <p>Get access to all of our self-hosted themes for one price.</p>
                    <a href="<?php echo path( 'theme-club/' ); ?>" class="button positive">More Info <i class="fa fa-arrow-right end"></i></a>
                </div>
<?php
    }

    if ( ! empty( $theme[ 'url-wpcom' ] ) ) {
?>
                <!--

                <div class="note alt message">
                    <p><strong>WordPress.com - cloud hosted</strong>: Get a hosted version of <?php echo $theme[ 'name' ]; ?>. No setup or technical headaches (or theme download).</p>
                    <a href="<?php echo $theme[ 'url-wpcom' ]; ?>" target="_blank" class="button end">Get for wordpress.com<i class="fa fa-external-link end"></i></a>
                </div>

                -->
<?php
    }
?>
            </div>
        </div>
