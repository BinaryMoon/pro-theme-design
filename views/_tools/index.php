    <nav class="wrapper page-menu">
        <a href="<?php echo path( 'tools/' ); ?>" class="tag-tool">Tools</a>
        <a href="<?php echo path( 'tools/resources/' ); ?>" class="tag-resources">Resources</a>
        <a href="<?php echo path( 'tools/internal/' ); ?>" class="tag-internal">Internal</a>
    </nav>

<?php
    tools_display( $tool );
