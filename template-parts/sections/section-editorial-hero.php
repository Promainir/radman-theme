<?php
$featured_post_query = new WP_Query([
        'posts_per_page' => 1,
        'post_status'    => 'publish',
]);

$featured_post_id = 0;


if ($featured_post_query->have_posts()) {
    $featured_post_query->the_post();
    $featured_post_id = get_the_ID();
    $featured_post_query->rewind_posts();
}

?>

<section class="editorial-hero container mx-auto my-12 px-4 rtl">
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-4">

        <div class="lg:col-span-3">
            <?php
            if ($featured_post_query->have_posts()) :
                while ($featured_post_query->have_posts()) : $featured_post_query->the_post();
                    $image_url = get_post_image_url(get_the_ID());
                    ?>
                    <a href="<?php the_permalink(); ?>" class="block rounded-lg overflow-hidden shadow-lg relative h-full">
                        <?php if ($image_url): ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>"
                                 class="w-full h-full object-cover">
                        <?php else: // در صورت نبود تصویر، یک پس‌زمینه نمایش بده ?>
                            <div class="w-full h-full bg-gray-200"></div>
                        <?php endif; ?>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex flex-col justify-end p-6">
                            <h2 class="text-3xl lg:text-4xl font-bold text-white leading-tight"><?php the_title(); ?></h2>
                        </div>
                    </a>
                <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

        <div class="lg:col-span-2 grid grid-cols-2 gap-4">
            <?php
            $side_posts_query = new WP_Query([
                    'posts_per_page' => 4,
                    'post__not_in'   => [$featured_post_id],
                    'post_status'    => 'publish',
            ]);

            if ($side_posts_query->have_posts()) :
                while ($side_posts_query->have_posts()) : $side_posts_query->the_post();
                    $image_url = get_post_image_url(get_the_ID());
                    ?>
                    <a href="<?php the_permalink(); ?>" class="block rounded-lg overflow-hidden shadow-md relative">
                        <?php if ($image_url): ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>"
                                 class="w-full h-full object-cover">
                        <?php else: ?>
                            <div class="w-full h-full bg-gray-200"></div>
                        <?php endif; ?>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-4">
                            <h3 class="text-md font-semibold text-white leading-tight"><?php the_title(); ?></h3>
                        </div>
                    </a>
                <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

    </div>
</section>
