<?php
    site_script( path( 'views/_tools/_website-tester/scripts.js' ) );
?>
<div class="wrapper text">
    <?php site_breadcrumbs(); ?>

    <h1>Website Tester</h1>

    <textarea id="website-list">
https://www.binarymoon.co.uk/
https://masterwp.co/
https://prothemedesign.com/
    </textarea>
    <button class="button" id="website-test">Test</button>
</div>

<div class="website-tester" id="website-tester">

    <header>
        <h1>Website Preview</h1>

        <a href="" class="close-frame button-close"><i class="fa fa-times" aria-hidden="true"></i></a>
        <div class="preview-size">
            <a href="/" class="selected" data-size="100%"><i class="fa fa-desktop" aria-hidden="true"></i></a>
            <a href="/" data-size="768px"><i class="fa fa-tablet" aria-hidden="true"></i></a>
            <a href="/" data-size="375"><i class="fa fa-mobile" aria-hidden="true"></i></a>
        </div>
    </header>

    <div class="iframe-wrapper" id="iframe-wrapper"></div>

</div>
<?php
    site_include_view( '_partials/more-themes.php' );
