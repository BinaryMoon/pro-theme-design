<?php
    include( '_partials/head.php' );
?>
    <body class="page-plugins">

        <?php include( '_partials/header.php' ); ?>

        <div class="wrapper text">
            <?php include( '_partials/google-search.php' ); ?>

<script>
  (function() {
    var cx = '010164663960188762731:aajo_mt5e2a';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchresults-only></gcse:searchresults-only>

        </div>

<?php
    include( '_partials/footer.php' );
