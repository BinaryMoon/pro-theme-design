
<nav>
    <ul class="nav">
        <li class="themes"><a href="<?php echo path(); ?>">Themes</a></li>
        <li class="theme-club"><a href="<?php echo path( 'theme-club/' ); ?>">Theme Club</a></li>
        <li class="theme-showcase"><a href="<?php echo path( 'theme-showcase/' ); ?>">Showcase</a></li>
        <li class="wordpress-plugins"><a href="<?php echo path( 'wordpress-plugins/' ); ?>">Plugins</a></li>
<?php
    if ( 'dev' == ENV ) {
?>
        <li class="support"><a href="<?php echo path( 'documentation/' ); ?>">Support</a></li>
        <li class="tools"><a href="<?php echo path( 'tools/' ); ?>">Tools</a></li>
<?php
    }
?>
    </ul>
</nav>

<ul class="social">
    <li>
        <a class="social twitter" href="http://www.twitter.com/prothemedesign">
            <span class="fa-stack fa-med">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
            </span>
        </a>
    </li>
    <li>
        <a class="social facebook" href="http://www.facebook.com/prothemedesign">
            <span class="fa-stack fa-med">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
            </span>
        </a>
    </li>
</ul>
