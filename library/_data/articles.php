<?php

/**
 *
 */
function get_article_data() {

    $articles = array(

        'make-money-with-wordpress' => array(
            'name' => 'Ways to Make Money With WordPress',
            'date' => '1st February 2016',
            'prefix' => '0001',
            'description' => 'A variety of suggestions on how to earn money from your favorite open source software.',
            'icon' => 'money',
        ),

        'be-a-wordpress-implementer' => array(
            'name' => 'What it takes to be a WordPress Implementer',
            'date' => '5th February 2016',
            'prefix' => '0002',
            'description' => 'The differences between WordPress Implementors and WordPress Developers.',
            'icon' => 'wrench',
        ),

    );

    if ( 'dev' == ENV ) {

        $draft_articles = array(

        'earn-more-as-a-wordpress-freelancer' => array(
            'name' => 'Earn more as a WordPress Freelancer',
            'date' => '26th February 2016',
            'prefix' => '0003',
            'description' => 'Increase your income whilst keeping your clients happy.',
            'icon' => 'smile-o',
        ),

        'develop-with-wordpress' => array(
            'name' => 'Improve Your WordPress Development',
            'date' => '26th February 2016',
            'prefix' => '0004',
            'description' => 'Tips and Tricks to improve how you build things with WordPress.',
            'icon' => 'laptop',
        ),

        'make-beautiful-coherent-wordpress-designs' => array(
            'name' => 'Make Beautiful WordPress Designs',
            'date' => '26th February 2016',
            'prefix' => '0005',
            'description' => 'Tips and Tricks to improve how you build things with WordPress.',
            'icon' => 'paint-brush',
        ),

        'well-being-for-web-developers' => array(
            'name' => 'Stay healthy as a WordPress Developer',
            'date' => '26th February 2016',
            'prefix' => '0006',
            'description' => 'Tips and Tricks to improve how you build things with WordPress.',
            'icon' => 'heartbeat',
        ),

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
