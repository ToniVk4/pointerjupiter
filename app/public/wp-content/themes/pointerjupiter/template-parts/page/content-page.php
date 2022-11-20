<?php
/**
 * Template part to display content in page.php
 */

 ?>

 <article id="post-<?php the_ID(); ?>">
    <?php
        if(has_post_thumbnail()) :
            the_post_thumbnail('full');
        endif;
    ?>
    <div class="page-content-entry">
        <?php
        the_content();

        wp_link_pages(array(
            'before' => '<div class="page-links">'. esc_html__('Pages:','pj'),
            'after' => '</div>',
        ));
       ?>
    </div>
</article>