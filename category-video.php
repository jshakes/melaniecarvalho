<?php get_header(); ?>

<div class="works wrapper">
    <?php
    
    global $wp_query;

    $args = array(
        'post_type' => 'work',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );

    if(isset($wp_query->query["cat"])){

        $args["cat"] = $wp_query->query["cat"];
    }
    elseif(isset($wp_query->query["category_name"])){

        $args["category_name"] = $wp_query->query["category_name"];
    }

    query_posts($args);

    if(have_posts()):
        while(have_posts()): 
            the_post();
            ?>
            <article class="video" id="video-<?php the_id(); ?>">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
            </article>
            <?php
        endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>