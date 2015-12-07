<?php
    site_script( path( 'js/vendor/quiz.js' ) );
    site_script( path( 'views/_tools/_quiz-which-wordpress/scripts.min.js' ) );
?>
<div class="quiz wrapper text">

    <?php site_breadcrumbs(); ?>

    <div class="quiz-intro note message">

        <h1>Which WordPress is Right for You?</h1>
        <p>WordPress.org? WordPress.com? Use this simple quiz to find out which is best suited to you.</p>
        <a class="quiz-button-start button fat" href="#">Start</a>

    </div>

    <div class="quiz-question">
        <div class="question">
            What is your annual budget for the site?
        </div>
        <ul class="answers">
            <li>
                <label><input data-key="a" type="radio">$0 - $150</label>
            </li>
            <li>
                <label><input data-key="b" type="radio">$150 - $1000</label>
            </li>
            <li>
                <label><input data-key="c" type="radio">$1000+</label>
            </li>
        </ul>
    </div>

    <div class="quiz-question">
        <div class="question">
            What is the purpose of your site?
        </div>
        <ul class="answers">
            <li>
                <label><input data-key="a" type="radio">A blog/ news site</label>
            </li>
            <li>
                <label><input data-key="b" type="radio">A portfolio/ business site</label>
            </li>
            <li>
                <label><input data-key="c" type="radio">An online store/ community</label>
            </li>
        </ul>
    </div>

    <div class="quiz-question">
        <div class="question">
            Who will be working on the site?
        </div>
        <ul class="answers">
            <li>
                <label><input data-key="a" type="radio">Just me</label>
            </li>
            <li>
                <label><input data-key="b" type="radio">Me and a friend</label>
            </li>
            <li>
                <label><input data-key="c" type="radio">A web dev team</label>
            </li>
            <li>
                <label><input data-key="c" type="radio">I will hire someone</label>
            </li>
        </ul>
    </div>

    <div class="quiz-question">
        <div class="question">
            What technical skills do you/ the people working on the site have?
        </div>
        <ul class="answers">
            <li>
                <label><input data-key="a" type="radio">None</label>
            </li>
            <li>
                <label><input data-key="b" type="radio">Some basic CSS, and HTML (and willing to learn)</label>
            </li>
            <li>
                <label><input data-key="c" type="radio">PHP, Git, svn, js, System Admin, the works.</label>
            </li>
        </ul>
    </div>

    <div class="quiz-question">
        <div class="question">
            Once built - how often do you plan to update the site?
        </div>
        <ul class="answers">
            <li>
                <label><input data-key="a" type="radio">Every few days</label>
            </li>
            <li>
                <label><input data-key="b" type="radio">A couple times a month</label>
            </li>
            <li>
                <label><input data-key="c" type="radio">Once or twice a year</label>
            </li>
            <li>
                <label><input data-key="d" type="radio">Never</label>
            </li>
        </ul>
    </div>

    <div class="quiz-results">
        <!-- <h1>You Scored <span class="quiz-score">0%</span></h1> -->

        <div class="quiz-bracket-com quiz-bracket note message">WordPress.com</div>
        <div class="quiz-bracket-com-org quiz-bracket note message">WordPress.com or WordPress.org</div>
        <div class="quiz-bracket-org quiz-bracket note message">WordPress.org</div>

        <a href="" class="quiz-share-twitter quiz-share button">
            <i class="fa fa-twitter"></i>
            <span>Share on Twitter</span>
        </a>
        <a href="" class="quiz-share-facebook quiz-share button">
            <i class="fa fa-facebook"></i>
            <span>Share on Facebook</span>
        </a>
        <a href="" class="quiz-share-google quiz-share button">
            <i class="fa fa-google-plus"></i>
            <span>Share on Google+</span>
        </a>
    </div>

    <div class="quiz-controls">
        <div class="quiz-controls-wrapper">
            <a class="quiz-button-prev button ghost" href="#"><i class="fa fa-arrow-left"></i>Previous</a>

            <div class="quiz-progress">
                <div></div>
            </div>

            <a class="quiz-button-next button" href="#">Next <i class="fa fa-arrow-right"></i></a>
            <a class="quiz-button-finish button" href="#">Finish <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>

    <div class="quiz-notice note">
        Please select an option
    </div>

</div>
