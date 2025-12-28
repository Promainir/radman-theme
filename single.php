<?php get_header();
$paged = max(1, get_query_var('paged'));

$news_query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 24,
        'paged' => $paged,
        'post_status' => 'publish',
]);
?>
<main class="bg-gray-100 py-5">
    <div class="container mx-auto px-4 mb-6">
        <div class="bg-white rounded-xl px-6 py-4">
            <div class="breadcrumb-wrapper">
                <nav class="breadcrumb">
                    <?php get_template_part('template-parts/breadcrumbs'); ?>
                </nav>
            </div>
        </div>
    </div>
    <section class="container mx-auto my-12 px-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            <div class="lg:col-span-9">
                <section class="lg:col-span-8 order-1 lg:order-2">
                    <div class="bg-white rounded-xl px-6 lg:px-10 py-8">

                        <?php while (have_posts()) : the_post(); ?>

                            <div class="flex items-start justify-between gap-4">
                                <div class="min-w-0">
                                    <h1 class="text-2xl lg:text-3xl font-bold leading-tight mb-3">
                                        <?php the_title(); ?>
                                    </h1>

                                    <div class="text-sm text-gray-500">
                                        <?php get_template_part('template-parts/post-meta'); ?>
                                    </div>
                                </div>

                                <a href="#"
                                   class="mt-2 w-9 h-9 rounded-lg bg-gray-100 flex items-center justify-center hover:bg-gray-200 transition"
                                   aria-label="اشتراک‌گذاری">
                                    <span class="text-gray-500 text-lg">⤴</span>
                                </a>
                            </div>

                            <?php
                            $img = get_post_image_url();
                            if ($img):
                                ?>
                                <div class="mt-6">
                                    <img
                                            src="<?= esc_url($img); ?>"
                                            alt="<?php the_title_attribute(); ?>"
                                            class="w-full rounded-xl object-cover"
                                            loading="eager"
                                    >
                                </div>
                            <?php endif; ?>

                            <div class="mt-8 prose prose-lg max-w-none
                                    prose-p:leading-8
                                    prose-img:rounded-xl
                                    prose-blockquote:rounded-xl
                                    prose-blockquote:bg-gray-50
                                    prose-blockquote:border-r-4
                                    prose-blockquote:border-primary
                                    prose-li:my-1
                                    prose-li:marker:text-primary">
                                <?php the_content(); ?>
                            </div>

                            <?php // get_template_part('template-parts/author-box'); ?>
                            <?php // get_template_part('template-parts/related-posts'); ?>
                            <?php // comments_template(); ?>

                        <?php endwhile; ?>

                    </div>
                </section>

            </div>


            <?php get_template_part('template-parts/sidebar-main'); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>
