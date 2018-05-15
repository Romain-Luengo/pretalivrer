<?php

session_start();

function displayCategoriesMenu() {
    $taxonomy = 'product_cat';
    $orderby = 'name';  
    $show_count = 0;
    $pad_counts = 0;
    $hierarchical = 1;
    $title = '';  
    $empty = 1;
    
    $args = array(
            'taxonomy'     => $taxonomy,
            'orderby'      => $orderby,
            'show_count'   => $show_count,
            'pad_counts'   => $pad_counts,
            'hierarchical' => $hierarchical,
            'title_li'     => $title,
            'hide_empty'   => $empty
    );
    $all_categories = get_categories( $args );
    foreach ($all_categories as $cat) {
        if($cat->category_parent == 0) {
            $category_id = $cat->term_id;       
            echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'"><i class="fas fa-'.get_field( "icon", "product_cat_".$cat->term_id ).'"></i> '. $cat->name .'</a></li>';
            $args2 = array(
                    'taxonomy'     => $taxonomy,
                    'child_of'     => 0,
                    'parent'       => $category_id,
                    'orderby'      => $orderby,
                    'show_count'   => $show_count,
                    'pad_counts'   => $pad_counts,
                    'hierarchical' => $hierarchical,
                    'title_li'     => $title,
                    'hide_empty'   => $empty
            );
            $sub_cats = get_categories( $args2 );
            if($sub_cats) {
                foreach($sub_cats as $sub_category) {
                    echo  $sub_category->name ;
                }   
            }
        }       
    }
}

?>
