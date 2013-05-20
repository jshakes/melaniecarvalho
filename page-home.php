<?php 
get_header();
if ( have_posts() ) : the_post(); 
?>
    
  <div class="wrapper clearfix" id="home">

    <?php if(has_post_thumbnail()): ?>
    
        <?php the_post_thumbnail("homepage"); ?>

    <?php endif; ?>

  </div>
  
<?php
endif;
get_footer();
?>