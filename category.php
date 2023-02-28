<?php
get_header();

$category_name = single_cat_title('', false);

echo '<h2>'. $category_name .'</h2><br>';

if ( have_posts() ) :

    while ( have_posts() ) : the_post();

    $id = get_the_ID();
    $title = get_the_title($id);
    $author = get_the_author($id);
    $date= get_the_date('', $id);
    $excerpt = get_the_excerpt($id);
    $url_post = get_permalink($id);
    $url_thumbnail = get_the_post_thumbnail_url($id, "medium");
    
    echo '<div class="row mb-5"><div class="col-md-3">';
    echo '<img src="'. $url_thumbnail .'" class="img-fluid"></div><div class="col-md-9">';
    echo '<h3><a href="'. $url_post .'" class="text-decoration-none text-black">'. $title . '</a></h3>';
    echo '<p>'.$date.'</p><p>'.$author.'</p>';
    echo '<p>'. $excerpt . '</p>';
    echo '</div></div><br>';

    endwhile;

else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;

get_footer();
?>