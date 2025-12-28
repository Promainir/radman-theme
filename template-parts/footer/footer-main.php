<footer class="bg-white mt-24">

    <div class="container mx-auto px-4 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-y-16 gap-x-12 items-start">

            <div class="lg:col-span-3 text-right">
                <img
                        src="<?= get_template_directory_uri(); ?>/assets/image/logo.png"
                        alt="<?= get_bloginfo('name'); ?>"
                        class="w-20 mb-4"
                >


                <p class="text-sm text-gray-600 leading-7">
                    این رسانه با هدف پوشش سریع، دقیق و بی‌طرفانه اخبار ایران و جهان فعالیت می‌کند
                    و تلاش دارد محتوایی متنوع و کاربردی ارائه دهد.
                </p>
            </div>

            <div class="lg:col-span-3 text-right">
                <h4 class="font-bold mb-6">آخرین اخبار</h4>

                <?php
                $news_1 = new WP_Query([
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                        'no_found_rows'  => true,
                ]);
                ?>

                <div class="space-y-5">
                    <?php while ($news_1->have_posts()) : $news_1->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="flex items-center gap-3">
                            <img
                                    src="<?= esc_url(get_post_image_url()); ?>"
                                    alt="<?php the_title_attribute(); ?>"
                                    class="w-9 h-9 rounded-full object-cover flex-shrink-0"
                            >
                            <span class="text-sm text-gray-700 leading-6">
                                <?php the_title(); ?>
                            </span>
                        </a>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

            <div class="lg:col-span-3 text-right">
                <h4 class="font-bold mb-6">سبک زندگی</h4>

                <?php
                $news_2 = new WP_Query([
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                        'offset'         => 3,
                        'no_found_rows'  => true,
                ]);
                ?>

                <div class="space-y-5">
                    <?php while ($news_2->have_posts()) : $news_2->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="flex items-center gap-3">
                            <img
                                    src="<?= esc_url(get_post_image_url()); ?>"
                                    alt="<?php the_title_attribute(); ?>"
                                    class="w-9 h-9 rounded-full object-cover flex-shrink-0"
                            >
                            <span class="text-sm text-gray-700 leading-6">
                                <?php the_title(); ?>
                            </span>
                        </a>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>

            <div class="lg:col-span-3 text-center">
                <img
                        src="<?= get_template_directory_uri(); ?>/assets/image/resaneh.png"
                        alt="Rasaneh"
                        class="mx-auto w-20 mb-6"
                >

                <?php get_template_part('partials/social-icons'); ?>
            </div>

        </div>
    </div>

    <div class="text-center text-xs text-gray-400 py-6">
        کلیه حقوق این سایت محفوظ است | طراحی و توسعه توسط رادمان
    </div>

</footer>
