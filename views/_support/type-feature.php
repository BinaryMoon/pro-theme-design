    <h1><?php echo documentation_page_name( $page ); ?></h1>

<?php
    documentation_required_plugin( $page );

    include( '_feature/' . $page . '.php' );

    documentation_supported_themes( $page );

    documentation_related( $page );
