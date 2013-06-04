<?php 
get_header();

if ( have_posts() ): the_post();
?>
      
<article class="single work" id="post-<?php the_id(); ?>">

    <?php if(!in_category("video") && has_post_thumbnail()){

        the_post_thumbnail("case-study");
    } ?>
    
    <?php the_content(); ?>
  
</article>
	
<?php
endif;

get_footer();
?>