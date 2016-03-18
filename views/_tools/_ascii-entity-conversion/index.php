<?php
    site_script( path( 'views/_tools/_ascii-entity-conversion/scripts.min.js' ) );
?>
<div class="wrapper text">
    <?php site_breadcrumbs(); ?>

    <div class="wrapper text">

        <h1>Entity Conversion Calculator</h1>

        <form class="entity-calculator">
            <label>
                <span>Paste a character to convert here:</span>
                <input type="text" id="reverse" size="2" maxlength="1" value="&" />
            </label>
            <button class="button" type="button" id="convert">Convert</button>
        </form>
        <p class="entities">
            <a href="#" data-entity="&">&amp;</a>
            <a href="#" data-entity="©">&copy;</a>
            <a href="#" data-entity="←">&larr;</a>
            <a href="#" data-entity="→">&rarr;</a>
            <a href="#" data-entity="‹">&lsaquo;</a>
            <a href="#" data-entity="›">&rsaquo;</a>
            <a href="#" data-entity="•">&bull;</a>
        </p>

        <p class="note" id="numeric">
            Numeric Value: <code class="value">?</code>
            <span class="demo">eg <code>?</code></span>
        </p>
        <p class="note" id="css-value">
            CSS Value: <code class="value">?</code>
            <span class="demo">eg <code>?</code></span>
        </p>
        <p class="note" id="js-value">
            JS Value: <code class="value">?</code>
            <span class="demo">eg <code>?</code></span>
        </p>
    </div>
</div>

<?php
    site_include_view( '_partials/more-themes.php' );
