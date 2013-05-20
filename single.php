<?php 
if ( have_posts() ): the_post();
?>
      
<article class="single work" id="post-<?php the_id(); ?>">

    <?php the_content(); ?>
  
</article>
	
<?php
endif;
?>