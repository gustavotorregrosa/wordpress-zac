<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <span class="dashicons dashicons-format-<?php echo get_post_format($post->ID); ?>" ></span>
        <?php the_title('<h1>', '</h1>'); ?>
        <p><?php echo get_post_format($post->ID); ?></p>
        <div class="byline">
            <?php esc_html_e('Author: '); ?> <?php the_author_posts_link(); ?>
        </div>
    </header>
    <div class="entry-content">
        <?php the_content(); ?>
    </div>

    <p>content...</p>

    <?php comments_template(); ?>

</article>