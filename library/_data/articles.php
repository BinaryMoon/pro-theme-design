<?php

/**
 *
 */
function get_article_data() {

    $articles = array(

        'article-1' => array(
            'name' => 'Article Name 1',
            'date' => '2016-01-28',
        ),


    );


    // process them
    $processed = array();

    foreach( $articles as $key => $article ) {

        $article[ 'url' ] = path( 'article/' . $key . '/' );
        $article[ 'path' ] = $article[ 'date' ] . '-' . $key;

        $processed[ $key ] = $article;

    }

    return $processed;

}


/**
 * Create an unordered list showing the available docs
 */
function article_list( $limit = 5, $page = 0 ) {

    $docs = get_article_data();

    // reduce list to just list of content from specified page
    $docs = array_slice( $docs, ( $page * $limit ), $limit );

    if ( $doc_list ) {
        echo '<ul>';
        foreach( $doc_list as $d ) {
?>
    <li><a href="<?php echo $d[ 'url' ]; ?>"><?php echo $d[ 'name' ]; ?></a></li>
<?php
        }
        echo '</ul>';

    }

}


/**
 * Check to see if the specified page exists
 */
function article_get( $page ) {

    $docs = get_article_data();

    if ( $docs[ $page ] ) {
        return $docs[ $page ];
        break;
    }

    return false;

}


/**
 * get the name of the specified page
 */
function article_page_name( $page ) {

    $docs = get_article_data();

    if ( ! empty( $docs[ $page ] ) ) {
        return $docs[ $page ][ 'name' ];
    }

    return '';

}

