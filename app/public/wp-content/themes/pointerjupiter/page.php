<?php
/**
 * Template for displaying all pages
 */
get_header();

?>

<div id="" class="page-content">
    <main id="page-main" class="site-main">
        <?php
            while(have_posts()) :
                the_post();
                get_template_part('template-parts/page/content-page','page');
            endwhile;    
        ?>
    </main>
</div>
<?php
    get_footer();