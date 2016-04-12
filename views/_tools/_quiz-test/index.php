<?php
    site_script( path( 'js/vendor/quiz.js' ) );
    site_script( path( 'views/_tools/_quiz-test/scripts.min.js' ) );
?>
<div class="quiz wrapper text">

    <div class="quiz-intro note message">

        <h1>Test Quiz</h1>
        <a class="quiz-button-start button fat" href="#">Start</a>

    </div>

    <div class="quiz-question">
        <div class="question">
            CSS is used to...
        </div>
        <ul class="answers">
            <li>
                <label><input data-key="a" type="radio">lend structure to the document</label>
            </li>
            <li>
                <label><input data-key="b" type="radio">mold the presentation of the document</label>
            </li>
            <li>
                <label><input data-key="c" type="radio">script the interactions on the page</label>
            </li>
            <li>
                <label><input data-key="d" type="radio">You're crafty! This is a trick question.</label>
            </li>
        </ul>
    </div>

    <div class="quiz-question">
        <div class="question">
            The C in CSS stands for?
        </div>
        <ul class="answers">
            <li>
                <label><input data-key="a" type="radio">Crysis</label>
            </li>
            <li>
                <label><input data-key="b" type="radio">Crocodile</label>
            </li>
            <li>
                <label><input data-key="c" type="radio">Consistent</label>
            </li>
            <li>
                <label><input data-key="d" type="radio">Cascading</label>
            </li>
        </ul>
    </div>

    <div class="quiz-question">
        <div class="question">
            The correct way to link to a stylesheet in the head is?
        </div>
        <ul class="answers">
            <li>
                <label><input data-key="a" type="radio">&lt;link rel="stylesheet" href="styles.css" /&gt;</label>
            </li>
            <li>
                <label><input data-key="b" type="radio">&lt; stylesheet src="styles.css"&gt;</label>
            </li>
            <li>
                <label><input data-key="c" type="radio">&lt; link src="styles.css"&gt;</label>
            </li>
            <li>
                <label><input data-key="d" type="radio">&lt; css href="styles.css"&gt;</label>
            </li>
        </ul>
    </div>

    <div class="quiz-question">
        <div class="question">
            Which of these is not a valid CSS selector?
        </div>
        <ul class="answers">
            <li>
                <label><input data-key="a" type="radio">#x</label>
            </li>
            <li>
                <label><input data-key="b" type="radio">.x</label>
            </li>
            <li>
                <label><input data-key="c" type="radio">x ) y</label>
            </li>
            <li>
                <label><input data-key="d" type="radio">x:first-child</label>
            </li>
        </ul>
    </div>

    <div class="quiz-results">
        <h1>You Scored <span class="quiz-score">0%</span></h1>

        <div class="quiz-bracket-wizard quiz-bracket">Wizard</div>
        <div class="quiz-bracket-genius quiz-bracket">Genius</div>
        <div class="quiz-bracket-average quiz-bracket">average</div>
        <div class="quiz-bracket-poor quiz-bracket">poor</div>
        <div class="quiz-bracket-beginner quiz-bracket">beginner</div>

        <a href="" class="quiz-share-twitter quiz-share button">
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <span>Share on Twitter</span>
        </a>
        <a href="" class="quiz-share-facebook quiz-share button">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <span>Share on Facebook</span>
        </a>
        <a href="" class="quiz-share-google quiz-share button">
            <i class="fa fa-google-plus" aria-hidden="true"></i>
            <span>Share on Google+</span>
        </a>
    </div>

    <div class="quiz-controls">
        <div class="quiz-controls-wrapper">
            <a class="quiz-button-prev button ghost" href="#"><i class="fa fa-arrow-left" aria-hidden="true"></i>Previous</a>

            <div class="quiz-progress">
                <div></div>
            </div>

            <a class="quiz-button-next button" href="#">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            <a class="quiz-button-finish button" href="#">Finish <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
        </div>
    </div>

    <div class="quiz-notice note">
        Please select an option
    </div>

</div>
