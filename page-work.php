<?php 
get_header(); 

if ( have_posts() ): 
?>
    
    <div class="wrapper" id="works">  
        
        <?php get_template_part('loop', 'work'); ?>
    </div>
      
<?php
endif;

get_footer(); ?>