<?php get_header('splash'); ?>
<div id="primary" class="content-area excerpt">
    <main id="main" class="site-main" role="main">
        <?php wp_title(); ?>
        <p><?php esc_html_e('Posts only!', 'wphierarchy') ?></p>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
           <?php get_template_part('template-parts/content', 'posts'); ?>
        <?php endwhile; else: ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
     

        <p>Template archive.php</p>
    </main>
</div>

<?php get_sidebar(); ?>
    
<?php get_footer('splash'); ?>    
