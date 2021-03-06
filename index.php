<?php get_header(); ?>

<div class="container content">
    <div class="main block">

        <?php if (have_posts) : ?>
            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('content', get_post_format()); ?>

            <?php endwhile; ?>

        <?php else : ?>
            <?php echo apautop('Sorry, no posts found'); ?>
        <?php endif; ?>

    </div><!-- .main .block -->

    <div class="side">
        <div class="block">
            <?php if (is_active_sidebar('sidebar')) : ?>
                <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
        </div>
    </div>

</div><!-- .container .content -->

<?php get_footer(); ?>