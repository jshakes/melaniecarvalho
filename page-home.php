<?php 
get_header();
if ( have_posts() ) : the_post(); 
?>
    
  <div class="wrapper clearfix" id="home">
    
        <section class="s1" id="content">
            <?php the_content(); ?>
        </section>
        
        <?php if(has_post_thumbnail()): ?>
        <section class="s3">
            <?php the_post_thumbnail("homepage"); ?>
        </section>
        <?php endif; ?>
  </div>
  
<?php
endif;
get_footer();
?>