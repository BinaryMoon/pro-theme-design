        <section class="wrapper">
            <div class="note message">
                <h2>Get <?php echo $theme['name']; ?> for WordPress.org</h2>

<?php
    if ( ! empty( $theme[ 'url-wporg' ] ) ) {
?>
            <a href="#" class="button fat positive get-theme"><i class="fa fa-download"></i>Get <?php echo $theme['name']; ?> Now!</a>
<?php
    }

    if ( ! empty( $theme[ 'url-preview' ] ) ) {
?>
            <a href="<?php echo $theme[ 'url-preview' ]; ?>" class="button fat ghost"><i class="fa fa-eye"></i>Preview <?php echo $theme['name']; ?></a>
<?php
    }
?>
            </div>
        </section>
