<?php get_header('splash'); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
           <?php get_template_part('template-parts/content', 'posts'); ?>
        <?php endwhile; else: ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>

        <p>Template page.php</p>
    </main>
</div>

<?php get_sidebar('page'); ?>
    
<?php get_footer('splash'); ?>    
