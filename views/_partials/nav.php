
<nav class="main-menu">

    <button>Menu</button>

    <ul>
        <li>
            <a href="#search" class="search-toggle">
                <i class="fa fa-search"></i>
                <span class="screen-reader-text">Search Pro Theme Design</span>
            </a>
        </li>

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
        <li class="articles">
            <a href="<?php echo path( 'articles/' ); ?>">Articles</a>
        </li>

<?php
        if ( 'dev' == ENV ) {
?>
<?php
        }
?>

        <li class="tools">
            <a href="<?php echo path( 'tools/' ); ?>">Tools</a>
        </li>
        <li class="support">
            <a href="<?php echo path( 'documentation/' ); ?>">Support</a>
        </li>


        <li>
            <a class="twitter" href="https://www.twitter.com/prothemedesign">
                <i class="fa fa-twitter"></i>
                <span class="screen-reader-text">Follow us on Twitter</span>
            </a>
        </li>
        <li>
            <a class="facebook" href="https://www.facebook.com/prothemedesign">
                <i class="fa fa-facebook"></i>
                <span class="screen-reader-text">Follow us on Facebook</span>
            </a>
        </li>
    </ul>

</nav>
