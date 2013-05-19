<?php 
if ( have_posts() ): the_post();
?>
      
<article class="single work" id="post-<?php the_id(); ?>">

    <h3><?php the_title(); ?></h3>

    <?php the_content(); ?>
  
</article>
	
<?php
endif;
?>