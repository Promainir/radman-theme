<?php
get_header();
?>

    <main class="page">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/breadcrumbs'); ?>

            <article class="page__article">

                <h1 class="page__title"><?php the_title(); ?></h1>

                <div class="page__content">
                    <?php the_content(); ?>
                </div>

            </article>

        <?php endwhile; endif; ?>

    </main>

<?php
get_footer();
