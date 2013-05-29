<?php get_header(); ?>

<div class="works wrapper bricks" id="works">
    <?php 

    global $wp_query;
    $cat = $wp_query->query["cat"];

    query_posts(array(
        'post_type' => 'work',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'cat' => $cat
    ));

    $i = 1;
    while(have_posts()):
        the_post();
        ?>
        <article class="work post brick fancybox" id="post-<?php the_id(); ?>">

            <?php if(has_post_thumbnail()): ?>

            <a href="<?php the_permalink(); ?>"<?php if(!in_category("video")): ?> rel="gallery"<?php endif; ?>>
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