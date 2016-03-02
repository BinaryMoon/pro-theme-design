<div class="wrapper text">
    <?php site_breadcrumbs(); ?>

    <h1>How We Build Pro Theme Design</h1>

    <p class="intro">I have chosen to build Pro Theme Design in the open. I like to use the right tool for the job - and feel WordPress is overkill for this type of site. So I've put together this page to show what we use and why.</p>

    <h2>Development Software</h2>

    <ul>
        <li><a href="http://brackets.io/">Brackets</a> - for code editing.</li>
        <li><a href="https://www.sketchapp.com/">Sketch</a> - for UI and design things.</li>
        <li><a href="http://flyingmeat.com/acorn/">Acorn</a> - for photo editing.</li>
        <li><a href="https://incident57.com/codekit/">Codekit</a> - for processing LESS files, and linting JS.</li>
    </ul>

    <h2>Web Technologies</h2>

    <p class="intro">The site is built using HTML5, and CSS3, and javascript. That's all pretty standard these days though. We also use:</p>

    <h3>FlightPHP</h3>

    <p><a href="http://flightphp.com/">FlightPHP</a> is a PHP microframework. Essentially it's a simple system that allows us to add route (page paths) and create different views (templates). The Framework is easy to use and allows me to iterate quickly. We use it instead of WordPress because it removes the data layer, and it allows us to be more flexible with templating and routes.</p>

    <h3>JQuery</h3>

    <p>All web developers know about <a href="http://jquery.com">JQuery</a>, it's a javascript library that makes things a lot easier. We've considered going framework free, or using a slimmer framework like Zepto, however the convenience and flexibility of JQuery is worth more than the effort required to switch.</p>

    <h3>Font Awesome</h3>

    <p><a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a> is a massive, comprehensive, icon font library. We've used them librally around the site. They are a quick and easy way to make the site look more interesting - without adding a huge overhead.</p>

    <h3>Google Fonts</h3>

    <p><a href="https://www.google.com/fonts">Google Fonts</a> are awesome. We use <a href="https://www.google.com/fonts#QuickUsePlace:quickUse/Family:Lato">Lato</a>.</p>

    <h2>Third Party Services</h2>

    <p class="intro">There seems to be an obsession in the WordPress world of doing everything yourself. We feel this is more often than not a poor choice. You can probably find a plugin that does everything you want, however these will often not be as good as a third party service that is constantly developed and maintained.</p>

    <h3>Contact Forms - Formspree</h3>

    <p><a href="https://formspree.io/">Formspree</a> is a flexible hosted contact forms service. It's free to sign up to and use with premium options if you want a bit more flexibility. We've found the free version to be plenty good enough.</p>

    <p class="note tip">I have written a short tutorial on <a href="https://www.binarymoon.co.uk/2015/06/how-to-add-a-contact-form-to-your-website-using-formspring/">using Formspree for contact forms</a> on my personal site.</p>

    <h3>Newsletter - Mailchimp</h3>

    <p><a href="http://mailchimp.com">Mailchimp</a> is a great service for newsletters. We love their flexibility and wealth of features.</p>

    <h3>Online Store - Gumroad (and Creative Market)</h3>

    <p>Many people use WooCommerce or Easy Digital Downloads for selling things online, but these can be complex to setup and maintain. Using a third party service designed for selling products removes all maintanence, and security concerns. If you chose the right services then it also removes VATMOSS requirements (particularly important for people in the EU).</p>

    <p>We sell our products through 2 services. <a href="http://gumroad.com">GumRoad</a>, and <a href="https://creativemarket.com/BinaryMoon?u=BinaryMoon">Creative Market</a>.</p>

    <h3>Analytics - Google Analytics</h3>

    <p>For website analytics, I'm not sure why you'd want to use anything other than <a href="http://analytics.google.com/">Google Analytics</a>. There are services that simplify the data, but GA is super powerful and does everything you could ever need.</p>

    <h3>Version Control - Github</h3>

    <p><a href="https://github.com/binarymoon/pro-theme-design">Pro Theme Design is stored in a public Github repository</a>. This repository includes everything. For example this is a flat site - there's no database. We store data in arrays, that reference flat text/ html files that store the actual content.</p>

    <p class="note tip">We'd be happy to receive pull requests and issues.</p>

    <h3>Site Search - Google Custom Search Engine</h3>

    <p>Since the Pro Theme Design site doesn't use a database we can't easily integrate a database powered search - so we're using <a href="https://cse.google.com">Google Custom Search</a>. Google indexes our site anyway so making use of their search engine saves a lot of time.</p>

    <p>You can see how we integrate with Google Custom Search in the following files.</p>

    <ul>
        <li><a href="https://github.com/BinaryMoon/pro-theme-design/blob/master/views/_partials/google-search.php">Search Form</a></li>
        <li><a href="https://github.com/BinaryMoon/pro-theme-design/blob/master/views/search.php">Search Results Page</a></li>
        <li><a href="https://github.com/BinaryMoon/pro-theme-design/blob/master/styles/less/_page/search.less">CSS styles that override default Search Results design</a></li>
    </ul>

</div>

<?php
    site_include_view( '_partials/more-themes.php' );
