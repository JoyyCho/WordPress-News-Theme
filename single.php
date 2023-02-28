<?php
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

        <?php 


    $id = get_the_ID();
    $title = get_the_title($id);
    $author = get_the_author($id);
    $date= get_the_date('', $id);
    $content = get_the_content($id);
    $url_post = get_permalink($id);
    $url_thumbnail = get_the_post_thumbnail_url($id, "large");
    
    echo '<div class="row"><div class="col">';
    echo '<img src="'. $url_thumbnail .'" class="img-fluid mx-auto d-block mb-3"></div></div>';
    echo '<div class="row mb-5"><div class="col">';
    echo '<h2><a class="text-decoration-none text-black" href="'. $url_post .'">'. $title . '</a></h2>';
    echo '<p>'.$author.' - '.$date .'</p>';
    echo '<p>'. $content . '</p>';
    echo '</div></div>';

    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;

get_footer.php();
?>
