<?php
    site_script( path( 'views/_tools/_translation-page-generator/scripts.min.js' ) );
?>
<div class="wrapper text">
    <?php site_breadcrumbs(); ?>

    <h1>Translation Page Generator</h1>

    <p class="intro">Generate the HTML needed to add a translation page to your website. Makes use of Google Translate.</p>

    <form class="entity-calculator">
        <label>
            <span>Your hourly rate?</span>
            <input value="https://prothemedesign.com" id="website" type="url" />
        </label>

        <label>
            <span>What language is your site currently written in?</span>
            <select id="language"></select>
        </label>
    </form>

    <h2>Translation Page HTML</h2>
    <textarea id="translation-html"></textarea>

    <p class="tip note">There's information about how and why to use this in our help doc - <a href="<?php echo path( 'documentation/general/translating-your-website-content/' ); ?>">Translating Your Website Content</a></p>

    <h2>Translation Page Preview</h2>

    <div id="translation-preview"></div>
</div>

<?php
    site_include_view( '_partials/more-themes.php' );
