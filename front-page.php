<?php get_header(); ?>

<?php

$featured_post = get_posts(array(
    "numberposts" => 1,
    "orderby"     => 'date',
    "order"       => 'desc',
    "tag"    => "featured"));


foreach($featured_post as $fp) {

    echo '<div class="row mb-5">';
    echo '<div class="col-6">';

    $id = get_the_ID();
    $url_thumbnail = get_the_post_thumbnail_url($fp->ID, "large");
    $excerpt = get_the_excerpt($fp->ID);
    $url_post = get_permalink($fp->ID);
    $title= $fp->post_title;
    $date= get_the_date('F j, Y', $fp->$id);
    $author_id = get_post_field( 'post_author', $id );
    $author = get_the_author_meta( 'display_name', $author_id );

    echo '<a href="'.$url_post.'" /><img src="'.$url_thumbnail.'" class="img-fluid mx-auto d-block">';

    echo '</div><div class="col-md-6">';

    echo '<h2><a class="text-decoration-none text-black" href="'.$url_post.'">'.$title.'</a></h2>';
    echo '<p>'.$date.'</p>';
    echo '<p>By '.$author.'</p>';
    echo '<p>'.$excerpt.'</p></div></div>';
}

?>

<?php 
// ------Get Category ----------
$categories = get_categories(array(
	'orderby' => 'name',
	'order'   => 'ASC'));

echo '<div class="row mb-5">';

foreach($categories as $category) {

    $category_link = get_category_link($category);
    $category_name = $category->name;
    
    $main_posts = get_posts(array(
        "numberposts" => 1,
        "orderby"     => 'date',
        "orderby"     => 'date',
        "order"       => 'desc',
        "category"    => $category->term_id));

    // ***order needs to take a look morewhite

    $posts = get_posts(array(
        "numberposts" => 2,
        "orderby"     => 'date',
        "order"       => 'desc',
        "offset"      => 1,  
        "category"    => $category->term_id));
    
    echo '<div class="col-3">';
    echo '<h3 class="mb-3"><a class="text-decoration-none text-black" href="'.$category_link.'">'.$category_name.'</a></h3>';

    foreach($main_posts as $fp) {


        $url_thumbnail = get_the_post_thumbnail_url($fp->ID, "medium");
        $url_post = get_permalink($fp->ID);
        $title= $fp->post_title;
        
        echo '<a href="'.$url_post.'" /><img src="'.$url_thumbnail.'" class="img-fluid mx-auto d-block mb-3"></a>';

        echo '<h6><a class="text-decoration-none text-black fw-bolder" href="'.$url_post.'">'.$title.'</a></h6>';

    }

    foreach($posts as $fp) {

        $url_post = get_permalink($fp->ID);
        $title= $fp->post_title;

        echo '<h6><a class="text-decoration-none text-black" href="'.$url_post.'">'.$title.'</a></h6>';
    }
    
    echo '</div>'; //col
}

echo '</div>'; //row

?>

<?php get_footer(); ?>
