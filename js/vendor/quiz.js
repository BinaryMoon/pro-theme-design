/* globals jQuery, window */

;( function( $ ) {

    $.fn.elementalQuiz = function( options ) {

        var defaults = {
            answers: [],
            brackets: {},
            score_max: null,
            score_suffix: '%',
            title: 'awesome',
            share_extras: '',
            share_url: window.location.href,
            share_message: 'I got {score} on the {title} quiz!'
        };

        options = $.extend( defaults, options );

        return this.each( function() {

            var quiz = $( this ),
                progress = quiz.find( '.quiz-progress div' ),
                notice = quiz.find( '.quiz-notice' ),
                controls = quiz.find( '.quiz-controls' ),
                user_answers = [],
                questionsAnswered = 0,
                questionLength = quiz.find( '.quiz-question' ).length;

            /**
             * Check to see what answers are correct
             *
             * @returns {array} A list showing if each question is right or not.
             */
            var check_answers = function () {

                // reset user answers list
                user_answers = [];

                // summarize users answers
                quiz.find( '.quiz-question input[type=radio]:checked' ).each( function() {
                    user_answers.push( $( this ).data( 'key' ) );
                } );

                var results = [],
                    score = 0;

                // check correct answers against users answers
                for ( var i = 0; i < user_answers.length; i++ ) {

                    score = 0;

                    // if is string
                    if ( 'string' === typeof options.answers[i] ) {
                        if ( options.answers[i] === user_answers[i] ) {
                            score = 1;
                        }
                    }

                    // if is list of scores
                    if ( 'object' === typeof options.answers[i] ) {
                        // check if selected property has score value
                        if ( null !== typeof options.answers[i][ user_answers[i] ] ) {
                            score = options.answers[i][ user_answers[i] ];
                        }
                    }

                    results.push( score );

                }

                return results;

            };


            /**
             * Round number to specified decimal places
             *
             * @param   {float}  num Number to round
             * @param   {int}    dec Numer of decimal places
             * @returns {number} Numer to return
             */
            var round_decimal = function ( num, dec ) {

                var result = Math.round( num * Math.pow( 10, dec ) ) / Math.pow( 10, dec );
                return result;

            };


            /**
             * Update the progress bar position and button visibility
             *
             * @param {number} change How many questions to change the number by.
             */
            var update_progress = function ( change ) {

                questionsAnswered = questionsAnswered + change;

                quiz.find( '.quiz-button-prev' ).show();
                quiz.find( '.quiz-button-next' ).show();
                quiz.find( '.quiz-button-finish' ).hide();

                // first question
                if ( 0 === questionsAnswered ) {
                    quiz.find( '.quiz-button-prev' ).hide();
                }

                // last question
                if ( questionsAnswered === ( questionLength - 1 ) ) {
                    quiz.find( '.quiz-button-next' ).hide();
                    quiz.find( '.quiz-button-finish' ).show();
                }

                // set prograss bar position
                var percentage = Math.round( ( questionsAnswered + 1) / ( questionLength + 1 ) * 100 );
                progress.css( 'width', percentage + '%' );

            };


            // Change question status when questions are clicked
            quiz.find( '.answers input' ).click( function() {

                $( this ).parents( '.answers' ).children( 'li' ).removeClass( 'selected' );
                $( this ).parents( 'li' ).addClass( 'selected' );

            } );


            // Start the quiz
            quiz.find( '.quiz-button-start' ).click( function() {

                // group question inputs so only one can be selected at a time
                var question = 0;

                quiz.find( '.answers' ).each( function() {

                    $( this ).find( 'input' ).each( function() {
                        $( this ).attr( 'name', 'question-' + question );
                    } );

                    question ++;

                } );

                // Ensure none of the quiz options have been checked
                $( '.quiz .answers input' ).prop( 'checked', false );

                // hide intro
                $( this ).parents( '.quiz-intro' ).hide();

                // show first question
                $( '.quiz-question' ).first().addClass( 'active' );

                // show controls
                controls.show();

                // reset the progress bar
                update_progress( 0 );

                // check max question quantity
                if ( null === options.score_max ) {
                    options.score_max = questionLength;
                }

                return false;

            } );


            // next question button
            quiz.find( '.quiz-button-next' ).click( function() {

                check_answers();

                // check an answer has been selected
                var selected_answer = quiz.find( '.quiz-question.active input[type=radio]:checked' );

                if ( 0 === selected_answer.length ) {
                    notice.show();
                    return false;
                }

                // make sure the error notice is hidden
                notice.hide();

                // move to the next question
                quiz.find( '.quiz-question.active' ).removeClass( 'active' ).next().addClass( 'active' );

                // update progress bar
                update_progress( +1 );

                return false;

            } );


            // previous question button
            $( this ).find( '.quiz-button-prev' ).click( function() {

                // hide the error notice
                notice.hide();

                // move to previous question
                quiz.find( '.quiz-question.active' ).removeClass( 'active' ).prev().addClass( 'active' );

                // update progress bar
                update_progress( -1 );

            } );


            // finish the quiz and get the results and share now stuff
            quiz.find( '.quiz-button-finish' ).click( function() {

                // check an answer has been selected
                var selected_answer = quiz.find( '.quiz-question.active input[type=radio]:checked' );

                if ( 0 === selected_answer.length ) {
                    notice.show();
                    return false;
                }

                // hide interface that's not needed anymore
                quiz.find( '.quiz-question' ).hide();
                controls.hide();

                // show results
                quiz.find( '.quiz-results' ).show();

                var results = check_answers(),
                    score = 0,
                    scorePercentage;

                // see how many answers are correct
                for ( var i = 0; i < results.length; i++ ) {
                    score += results[i];
                }

                // calculate percentage correct and apply to results screen
                scorePercentage = round_decimal( score / options.score_max * 100, 2 );
                quiz.find( '.quiz-score' ).html( scorePercentage + options.score_suffix );

                // display brackets
                var bracket = '';
                for ( var key in options.brackets ) {
                    if ( scorePercentage <= parseInt( key ) && '' === bracket ) {
                        bracket = options.brackets[ key ];
                    }
                }

                $( '.quiz-bracket-' + bracket ).show();

                // social sharing

                var share_message = options.share_message;
                share_message = share_message.replace( '{title}', options.title );
                share_message = share_message.replace( '{score}', scorePercentage + options.score_suffix );
                share_message = share_message.replace( '{url}', options.share_url );

                $( '.quiz-share-twitter' ).attr( 'href', 'https://twitter.com/intent/tweet?text=' + encodeURI( share_message ) + '&url=' + encodeURI( options.share_url ) + options.share_extras  );
                $( '.quiz-share-google' ).attr( 'href', 'https://plus.google.com/share?url=' + '' );
                $( '.quiz-share-facebook' ).attr( 'href', 'https://www.facebook.com/sharer/sharer.php?u=' + '' );

                return false;

            } );

        } );

    };

} )( jQuery );
