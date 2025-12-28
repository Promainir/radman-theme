<?php
$latest_posts = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 20,
    'no_found_rows'  => true,
]);
?>

<aside class="lg:col-span-3 flex flex-col gap-6">

    <div class="bg-white rounded-lg shadow-md p-4">
        <h3 class="text-lg font-bold mb-3 border-r-4 border-blue-500 pr-3">
            درباره ما
        </h3>
        <p class="text-sm leading-relaxed text-gray-700 text-justify">
            این رسانه با هدف پوشش سریع، دقیق و بی‌طرفانه اخبار ایران و جهان فعالیت می‌کند.
            همکاری رسانه‌ای و تبادل لینک از طریق بخش همکاران امکان‌پذیر است.
        </p>
    </div>

    <div class="bg-white rounded-lg shadow-md p-4">
        <h3 class="text-lg font-bold mb-4 border-r-4 border-red-500 pr-3">
            لینک‌های همکاران
        </h3>
        <div class="space-y-3 text-sm leading-relaxed">
            <?php echo render_backlinks(); ?>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow-md p-4">
        <h3 class="text-lg font-bold mb-4 border-r-4 border-green-500 pr-3">
            آخرین اخبار
        </h3>

        <ul class="divide-y divide-gray-100 text-sm">
            <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                <li class="py-2 group">
                    <a href="<?php the_permalink(); ?>"
                       class="flex items-start gap-2 text-gray-800 hover:text-blue-600 transition">
                        <span class="mt-2 w-1.5 h-1.5 bg-gray-400 rounded-full flex-shrink-0 group-hover:bg-blue-500"></span>
                        <span class="leading-relaxed line-clamp-2">
                            <?php the_title(); ?>
                        </span>
                    </a>
                </li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    </div>

</aside>
