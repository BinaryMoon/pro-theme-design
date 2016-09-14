<?php
    if ( ! empty( $theme[ 'url-wporg' ] ) ) {
?>
        <section class="wrapper">
            <div class="note message">
                <h2>Get <?php echo $theme['name']; ?> for WordPress.org</h2>

                <a href="<?php echo $theme[ 'url-wporg' ]; ?>" class="button fat positive event" data-event="getTheme" data-gumroad-single-product="true"><i class="fa fa-download" aria-hidden="true"></i>Get <?php echo $theme['name']; ?> Now!</a>
<?php
        if ( ! empty( $theme[ 'url-preview' ] ) ) {
?>
                <a href="<?php echo $theme[ 'url-preview' ]; ?>" class="button fat ghost"><i class="fa fa-eye" aria-hidden="true"></i>Preview <?php echo $theme['name']; ?></a>
<?php
        }
?>
            </div>
        </section>
<?php
    }
