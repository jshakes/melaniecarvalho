<aside>
    <nav>
        <!-- Main page nav -->
        <ul>
            <?php
            if(is_category()){

                //our category page for later in the loop
                $single_cat_title = single_cat_title("", false);
            }
            else{
                
                $page_id = get_the_id();
            }

            $args = array(
                "post_type" => "page",
                "posts_per_page" => -1
            );

            $pages = new WP_Query($args);

            while($pages->have_posts()):

                $pages->the_post();
                ?>

                <li <?php if(isset($page_id) && get_the_id() == $page_id): ?>class="current_page_item"<?php endif; ?>>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php if(isset($single_cat_title) && get_the_title() == "Works"): ?>
                    <ul>
                        <li class="current_page_item"><?php echo $single_cat_title; ?></li>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php
            endwhile;
            ?>
        </ul>
    </nav>
</aside>