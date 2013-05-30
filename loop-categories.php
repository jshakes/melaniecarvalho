<?php

$args = array(
    'hide_empty'    => true, 
    'exclude'       => array('uncategorized')
); 

$categories = apply_filters( 'taxonomy-images-get-terms', 'category', $args );

if(!empty($categories)):

    $i = 1;

    foreach($categories as $term):

        $attr = array(
            "onload" => "fadeOnLoad(this);",
            "title" => ""
        );
        $img = wp_get_attachment_image( $term->image_id, "post-thumbnail", false, $attr ); ?>

        <article class="term post brick hover-title featured" id="term-<?php echo $term->term_id; ?>">

            <?php if(!empty($img)): ?>

            <a href="<?php echo get_term_link($term); ?>" rel="gallery">
                <?php echo $img; ?>
            </a>
            
            <?php endif; ?>

        </article>
        <?php
        $i++;
    endforeach; 
endif; 
?>