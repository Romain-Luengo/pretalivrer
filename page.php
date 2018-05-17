<?php get_header(); ?>

<?php
    $pagename = $post->post_name;
    get_template_part('pages/'.$pagename);
?>

<?php get_footer(); ?>