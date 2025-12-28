<?php
$paged = max(1, get_query_var('paged'));

$news_query = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => 24,
        'paged'          => $paged,
        'post_status'    => 'publish',
]);

?>

<section class="container mx-auto my-12 px-4">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

        <div class="lg:col-span-9">

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php if ($news_query->have_posts()) : ?>
                    <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                        <?php get_template_part('template-parts/post-card'); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <?php
            get_template_part(
                    'template-parts/pagination',
                    null,
                    ['query' => $news_query]
            );
            ?>

            <?php wp_reset_postdata(); ?>
        </div>

        <div class="lg:col-span-3">
            <div class="sticky top-24">
                <?php get_template_part('template-parts/sidebar-main'); ?>
            </div>
        </div>

    </div>
</section>
