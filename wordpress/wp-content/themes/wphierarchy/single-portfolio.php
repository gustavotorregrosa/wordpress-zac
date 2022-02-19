<?php get_header('splash'); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        
           <?php get_template_part('template-parts/content', 'posts'); ?>
        <?php endwhile; else: ?>
            <?php get_template_part('template-parts/content', 'none'); ?>
        <?php endif; ?>
        
        <?php if(comments_open()) : ?>
            <?php comments_template(); ?>
        <?php endif; ?>

        <p>Skills: 
            <?php the_terms($post->ID, 'skills'); ?>

        </p>

        <p>Template single-portfolio.php</p>
    </main>
</div>

<?php get_sidebar(); ?>
    
<?php get_footer(); ?>    
