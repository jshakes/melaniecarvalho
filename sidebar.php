<aside>
    <nav>
        <!-- Main page nav -->
        <ul>
            <?php
            $nav_args = array(
                'sort_column' => 'menu_order, post_title',
                'title_li' => false
            );
            wp_list_pages($nav_args);
            ?>
        </ul>
    </nav>
</aside>