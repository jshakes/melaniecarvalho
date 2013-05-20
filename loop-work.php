<?php 

query_posts(array(
    'post_type' => 'work',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
));

$i = 1;
while(have_posts()):
    the_post();
    ?>
    <article class="work post<?php if($i % 6 == 1): ?> featured<?php endif; ?>" id="post-<?php the_id(); ?>">

        <?php if(has_post_thumbnail()): ?>

        <a href="<?php the_permalink(); ?>" rel="gallery">
            <div class="overlay">
                <div class="overlay-content">
                    <div class="container">
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
            </div>
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