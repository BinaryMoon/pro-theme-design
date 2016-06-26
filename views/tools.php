<?php
    include( '_partials/head.php' );
?>
    <body class="page-tools page-tools-<?php echo $slug; ?>" data-tag="<?php echo $tool['tag']; ?>">

<?php
    include( '_partials/header.php' );

    include( '_tools/' . $layout );

    include( '_partials/footer.php' );
