<?php 
get_header(); 

if ( have_posts() ): 

    /*
      First get all the categories, then we'll output the uncategorised works to place alongside them
    */
?>
    <div class="bricks wrapper">        

        <?php get_template_part('loop', 'categories'); ?>
        <?php get_template_part('loop', 'uncategorised'); ?>

    </div>

<?php
endif;

get_footer(); ?>