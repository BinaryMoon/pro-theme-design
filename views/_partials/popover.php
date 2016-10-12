<?php
    if ( ! site_popover() ) {
        return;
    }
?>

    <section class="popover">

        <header>Feedback</header>

        <button class="close-button" rel="nofollow">
            <i class="fa fa-times" aria-hidden="true"></i>
            <span class="screen-reader-text">Close Feedback Panel</span>
        </button>

        <div class="body">
            <p>We'd love to get some feedback to help us create the things you want.</p>
            <p><a href="<?php echo path( 'feedback/' ); ?>" class="button greedy">Give Feedback</a></p>
        </div>

    </section>
