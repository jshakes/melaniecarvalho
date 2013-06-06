<?php

$args = array(
    "post_type" => "work",
    "posts_per_page" => -1,
    "category_name" => "homepage"
);

$homepage_items = new WP_Query($args);

$i = 1;

while($homepage_items->have_posts()):
    
    $homepage_items->the_post();
    $fullsize = wp_get_attachment_image_src(get_post_thumbnail_id(), "case-study");
    ?>
    <article class="work post brick fancybox" id="post-<?php the_id(); ?>">

        <?php if(has_post_thumbnail()): ?>

        <a href="<?php echo $fullsize[0]; ?>">
            <?php 
            $attrs = array(
                "onload" => "fadeOnLoad(this);"
            );
            the_post_thumbnail("post-thumbnail", $attrs); 
            ?>
            <div class="caption"><?php echo get_the_content(); ?></div>
        </a>

        <?php endif; ?>

    </article>
    <?php
    $i++;
endwhile; ?>