<?php get_header(); ?>

<div class="works wrapper bricks" id="works">
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

    $i = 1;
    while(have_posts()):
        the_post();
        ?>
        <article class="work post brick fancybox" id="post-<?php the_id(); ?>">

            <?php if(has_post_thumbnail()): ?>

            <a href="<?php the_permalink(); ?>" rel="gallery">
                <?php 
                $attrs = array(
                    "onload" => "fadeOnLoad(this);"
                );
                the_post_thumbnail("post-thumbnail", $attrs); 
                ?>
            </a>

            <?php endif; ?>

        </article>
        <?php
        $i++;
    endwhile; ?>
</div>

<p><a href="/">&larr; Back to all works</a></p>

<?php get_footer(); ?>