<?php get_header(); ?>

<main class="bg-gray-100 py-10">


    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

            <div class="lg:col-span-9">

                <div class="bg-white rounded-xl px-6 py-5 mb-6">
                    <h1 class="text-xl font-bold">
                        نتیجه جستجو برای:
                        <span class="text-blue-600">
                            <?php echo esc_html(get_search_query()); ?>
                        </span>
                    </h1>
                </div>

                <?php if (have_posts()) : ?>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('template-parts/post-card'); ?>
                        <?php endwhile; ?>

                    </div>

                    <div class="mt-8">
                        <?php get_template_part('template-parts/pagination'); ?>
                    </div>

                <?php else : ?>

                    <div class="bg-white rounded-xl px-6 py-10 text-center text-gray-600">
                        نتیجه‌ای برای جستجوی شما پیدا نشد.
                    </div>

                <?php endif; ?>

            </div>

            <div class="lg:col-span-3">
                <div class="sticky top-6">
                    <?php get_template_part('template-parts/sidebar-main'); ?>
                </div>
            </div>

        </div>
    </div>

</main>

<?php get_footer(); ?>
