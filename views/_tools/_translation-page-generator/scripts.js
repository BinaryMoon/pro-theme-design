( function( $ ) {

	var translate_url = 'https://translate.google.com/translate?hl=[LANGUAGE]&langpair=en%7Caz&u=[WEBSITE]';

	var languages = [
		[ 'af', 'Afrikaans' ],
		[ 'sq', 'Albanian' ],
		[ 'ar', 'Arabic' ],
		[ 'hy', 'Armenian' ],
		[ 'az', 'Azerbaijani' ],
		[ 'eu', 'Basque' ],
		[ 'be', 'Belarusian' ],
		[ 'bg', 'Bulgarian' ],
		[ 'ca', 'Catalan' ],
		[ 'zh-CN', 'Chinese (S)' ],
		[ 'zh-TW', 'Chinese (T)' ],
		[ 'hr', 'Croatian' ],
		[ 'cs', 'Czech' ],
		[ 'da', 'Danish' ],
		[ 'nl', 'Dutch' ],
		[ 'et', 'Estonian' ],
		[ 'en', 'English' ],
		[ 'tl', 'Filipino' ],
		[ 'fi', 'Finnish' ],
		[ 'fr', 'French' ],
		[ 'gl', 'Galician' ],
		[ 'de', 'German' ],
		[ 'ka', 'Georgian' ],
		[ 'el', 'Greek' ],
		[ 'iw', 'Hebrew' ],
		[ 'hi', 'Hindi' ],
		[ 'hu', 'Hungarian' ],
		[ 'is', 'Icelandic' ],
		[ 'id', 'Indonesian' ],
		[ 'ga', 'Irish' ],
		[ 'it', 'Italian' ],
		[ 'ja', 'Japanese' ],
		[ 'ko', 'Korean' ],
		[ 'lv', 'Latavian' ],
		[ 'lt', 'Lithuanian' ],
		[ 'mk', 'Macedonian' ],
		[ 'ms', 'Malay' ],
		[ 'mt', 'Maltese' ],
		[ 'no', 'Norwegian' ],
		[ 'fa', 'Persian' ],
		[ 'pl', 'Polish' ],
		[ 'pt', 'Portuguese' ],
		[ 'ro', 'Romanian' ],
		[ 'ru', 'Russian' ],
		[ 'sr', 'Serbian' ],
		[ 'sk', 'Slovak' ],
		[ 'sl', 'Slovenian' ],
		[ 'es', 'Spanish' ],
		[ 'sw', 'Swahili' ],
		[ 'sv', 'Swedish' ],
		[ 'th', 'Thai' ],
		[ 'tr', 'Turkish' ],
		[ 'uk', 'Ukrainian' ],
		[ 'ur', 'Urdu' ],
		[ 'vi', 'Vietnamese' ],
		[ 'cy', 'Welsh' ],
		[ 'yi', 'Yiddish' ]
	];

	// add languages to the select box

	var language_select = $( '#language' );

	for ( var i = 0; i < languages.length; i++ ) {

		language_select
			.append( $( '<option>', { value: languages[ i ][ 0 ] } )
				.text( languages[ i ][ 1 ] )
			);

	}

	// generate html when the settings are changed

	$( '#language, #website' ).on( 'change', function() {

		var website = $( '#website' ).val();
		var language = $( '#language' ).val();

		var html = '<ul>' + "\n";

		for ( var i = 0; i < languages.length; i++ ) {
			var url = translate_url;
			url = url.replace( '[WEBSITE]', website );
			url = url.replace( '[LANGUAGE]', languages[ i ][ 0 ] );
			html = html + '<li><a href="' + url + '">' + languages[ i ][ 1 ] + '</a></li>' + "\n";
		}

		html = html + '</ul>';

		$( '#translation-html' ).val( html );
		$( '#translation-preview' ).html( html );

	} );

	$( '#language' ).val( 'en' ).change();

} )( jQuery );
