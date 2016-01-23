
<nav class="main-menu drawer">
    <a href="#" class="drawer-close" rel="nofollow">
        <i class="fa fa-times"></i>
        <span class="screen-reader-text">Close Menu</span>
    </a>

    <ul class="tree alt large">
        <li class="themes menu-item-has-children">
            <a href="<?php echo path(); ?>">Themes</a>
            <ul>
                <li class="theme-showcase">
                    <a href="<?php echo path( 'theme-showcase/' ); ?>">Showcase</a>
                </li>
<?php
    if ( ! DISABLE_GUMROAD ) {
?>
                <li class="theme-club">
                    <a href="<?php echo path( 'theme-club/' ); ?>">Theme Club</a>
                </li>
<?php
    }
?>
            </ul>
        </li>
        <li class="wordpress-plugins">
            <a href="<?php echo path( 'wordpress-plugins/' ); ?>">Plugins</a>
        </li>
        <li class="tools">
            <a href="<?php echo path( 'tools/' ); ?>">Tools</a>
        </li>
        <li class="support">
            <a href="<?php echo path( 'documentation/' ); ?>">Support</a>
        </li>
<?php
        if ( 'dev' == ENV ) {
?>
<?php
        }
?>
    </ul>
</nav>
