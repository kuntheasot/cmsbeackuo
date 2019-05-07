<?php 
include_once "function.php";
get_header();
if(have_posts()):
    while(have_posts()): the_post(); ?>
    <article class="post">
        <?php
            $args = [
                'child_of'=>get_top_ancestorID(),
                'title_li'=>''
            ];
            wp_list_pages($args);
        ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
    </article>
    <?php endwhile;
else:
    echo '<p>No Post found</p>'; 
endif;
get_footer();
?>
