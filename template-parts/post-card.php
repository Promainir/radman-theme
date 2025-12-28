<article class="post-card bg-white rounded-lg shadow-sm overflow-hidden flex flex-col h-full">

    <?php
    $image = get_post_image_url();
    if ($image) :
        ?>
        <div class="relative aspect-[4/3] overflow-hidden">
            <a href="<?php the_permalink(); ?>">
            <img
                    src="<?php echo esc_url($image); ?>"
                    alt="<?php echo esc_attr(get_the_title()); ?>"
                    loading="lazy"
                    decoding="async"
                    class="absolute inset-0 w-full h-full object-cover"
            >
            </a>
        </div>
    <?php endif; ?>

    <div class="post-card__content p-4 flex flex-col gap-3 flex-1">

        <h2 class="font-bold text-base leading-snug line-clamp-2">
            <a href="<?php the_permalink(); ?>" class="hover:text-red-600 transition">
                <?php the_title(); ?>
            </a>
        </h2>

        <div class="text-sm leading-relaxed text-gray-700 text-justify line-clamp-3">
            <?php the_excerpt(); ?>
        </div>

        <div class="mt-auto pt-3 border-t border-gray-100 flex items-center justify-between">
            <?php get_template_part('template-parts/post-meta'); ?>

            <a href="<?php the_permalink(); ?>"
               class="text-xs font-semibold text-blue-600 hover:text-blue-700 transition">
                ادامه مطلب →
            </a>
        </div>

    </div>

</article>
