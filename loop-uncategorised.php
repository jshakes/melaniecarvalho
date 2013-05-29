<?php
$args = array(
    "post_type" => "work",
    "posts_per_page" => -1,
    "category__not_in" => get_all_category_ids()
);

$uncategorised = new WP_Query($args);

$i = 1;

while($uncategorised->have_posts()):
    
    $uncategorised->the_post();
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