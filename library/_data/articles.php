<?php

/**
 *
 */
function get_article_data() {

    $articles = array(

        'make-money-with-wordpress' => array(
            'name' => 'Ways to Make Money With WordPress',
            'date' => '01 February 2016',
            'prefix' => '0001',
            'description' => 'A variety of suggestions on how to earn money from your favorite open source software.',
            'icon' => 'money',
        ),

        'be-a-wordpress-implementer' => array(
            'name' => 'What it takes to be a WordPress Implementer',
            'date' => '05 February 2016',
            'prefix' => '0002',
            'description' => 'The differences between WordPress Implementors and WordPress Developers.',
            'icon' => 'wrench',
        ),

    );

    if ( 'dev' == ENV ) {

        $draft_articles = array(

        );

        $articles = array_merge( $articles, $draft_articles );

    }


    // process them
    $processed = array();

    foreach( $articles as $key => $article ) {

        $article[ 'url' ] = path( 'how-to/' . $key . '/' );
        $article[ 'path' ] = $article[ 'prefix' ] . '-' . $key;

        if ( empty( $article['icon'] ) ) {
            $article['icon'] = 'file-text-o';
        }

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

    if ( isset( $docs[ $page ] ) ) {
        return $docs[ $page ];
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


/**
 * Create a list of articles for the sitemap.
 */
function articles_sitemap() {

    $articles = get_article_data();

    foreach ( $articles as $article ) {
?>
    <li><a href="<?php echo $article[ 'url' ]; ?>"><?php echo $article['name']; ?></a></li>
<?php
    }

}
