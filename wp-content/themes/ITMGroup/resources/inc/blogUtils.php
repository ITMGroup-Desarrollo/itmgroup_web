<?php
namespace Blog;

// Theme setup
add_action('after_setup_theme', function(){
    // Add support for post formats
    add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat']);

    // Add support for automatic feed links
    add_theme_support('automatic-feed-links');
});

// Custom excerpt length
add_filter('excerpt_length', function($length){
    return 15; // Number of words
});

// Excerpt More
add_filter('excerpt_more', function($more) {
    return '...'; // Customize read more text
});


// Pinned Posts Query
function getPinnedPosts($numPosts = -1) {
    $args = array(
        'posts_per_page' => $numPosts,
        'post_status'    => 'publish',
        'post__in'  => get_option('sticky_posts'),
        'ignore_sticky_posts' => 1,
        'fields'  => 'ids',
    );

    // Add language filter if Polylang is active
    if (function_exists('pll_current_language')) {
        $args['lang'] = pll_current_language(); 
    }

    return get_posts($args);
}

function getPosts($numPosts = -1 , $prioritizeSticky = false) {
    $args = array(
        'posts_per_page' => $numPosts,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
        'fields'         => 'ids',
    );

    if ($prioritizeSticky) {
        $args['ignore_sticky_posts'] = false;
        $args['post__in'] = get_option('sticky_posts');
    } else {
        $args['ignore_sticky_posts'] = true;
    }
    
    // Add language filter if Polylang is active
    if (function_exists('pll_current_language')) {
        $args['lang'] = pll_current_language(); 
    }


    return get_posts($args);
}




function getQueryPosts($query = '') {
    
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );

    if (function_exists('pll_current_language')) {
        $args['lang'] = pll_current_language(); 
    }

    $posts = get_posts($args);
    $data = array();

    foreach ($posts as $post) {
        $title = $post->post_title;
        if ($query) {
            // Calculate the Levenshtein distance
            $distance = levenshtein($query, $title);
            // If the distance is less than or equal to a threshold (e.g., 3), consider it a match
            if ($distance <= 3 || stripos($title, $query) !== false) {
                $data[] = $post->ID;
            }
        } else {
            $data[] = $post->ID;
        }
    }

    return $data;
}





function getRandPosts($postId, $numPosts = -1) {
    $args = array(
        'posts_per_page' => $numPosts,
        'post_status'    => 'publish',
        'post_type'      => 'post',
        'orderby'        => 'rand', // Order posts randomly
        'post__not_in'   => array($postId),
        'fields'         => 'ids',
    );

    // Get current post categories and set them in the query
    $categories = wp_get_post_categories($postId);
    if (!empty($categories)) {
        $args['category__in'] = $categories;
    }

    // Add language filter if Polylang is active
    if (function_exists('pll_current_language')) {
        $args['lang'] = pll_current_language();
    }

    // Get related posts
    $related_posts = get_posts($args);

    return $related_posts;
}


function getPostData($postId) {
    // Ensure the $post_id is an integer
    $postId = intval($postId);

    // Check if the post exists
    if (!get_post($postId)) {
        return null; // Return null if the post doesn't exist
    }

    $thumbnail_url = get_the_post_thumbnail_url($postId, 'full');

    $postData = array(
        'img'       => $thumbnail_url ? $thumbnail_url : null,
        'title'     => get_the_title($postId),
        'categories'=> wp_get_post_categories($postId, array('fields' => 'names')),
        'excerpt'   => get_the_excerpt($postId),
        'content'   => apply_filters('the_content', get_post_field('post_content', $postId)),
        'permalink' => get_the_permalink($postId),
        'date'      => get_the_date('d/m/Y', $postId)
    );

    return $postData;
}



function getPostYears() {
    // Query for the newest post
    $newest_posts = get_posts([
        'post_type' => 'post',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC',
        'fields' => 'ids'
    ]);

    // Query for the oldest post
    $oldest_posts = get_posts([
        'post_type' => 'post',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'ASC',
        'fields' => 'ids'
    ]);

    $newest_year = null;
    $oldest_year = null;

    if (!empty($newest_posts)) {
        $newest_year = (int) get_the_date('Y', $newest_posts[0]);
    }

    if (!empty($oldest_posts)) {
        $oldest_year = (int) get_the_date('Y', $oldest_posts[0]);
    }

    if ($newest_year !== null && $oldest_year !== null) {
        return range($oldest_year, $newest_year);
    }

    return [];
}


