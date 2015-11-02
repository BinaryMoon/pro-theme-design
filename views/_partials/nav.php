
<nav class="main-menu">
    <a href="#" class="menu-close"><i class="fa fa-times"></i></a>

    <ul>
        <li class="themes menu-item-has-children">
            <a href="<?php echo path(); ?>">Themes</a>
            <ul>
                <li class="theme-showcase">
                    <a href="<?php echo path( 'theme-showcase/' ); ?>">Showcase</a>
                </li>
                <li class="theme-club">
                    <a href="<?php echo path( 'theme-club/' ); ?>">Theme Club</a>
                </li>
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
