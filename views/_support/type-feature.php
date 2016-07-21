    <h1><?php echo documentation_page_property( $page ); ?></h1>

<?php
    documentation_required_plugin( $page );

    site_include_view( '_support/_feature/' . $page . '.php' );

    documentation_supported_themes( $page );

    documentation_related( $page );
