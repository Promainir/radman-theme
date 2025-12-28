<?php
get_header();
?>

    <main>

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part("template-parts/post-card"); ?>

            <?php endwhile; ?>

        <?php else : ?>

            <p>هیچ محتوایی پیدا نشد.</p>

        <?php endif; ?>
        <?php get_template_part('template-parts/pagination'); ?>
    </main>

<?php
get_footer();
