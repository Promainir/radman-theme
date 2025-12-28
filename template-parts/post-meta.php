<div class="post-meta flex flex-wrap items-center gap-x-3 gap-y-1 text-xs text-gray-500">

    <time class="post-meta__date whitespace-nowrap"
          datetime="<?php echo esc_attr(get_the_date('c')); ?>">
        <?php echo esc_html(get_jalali_date_from_timestamp(get_post_timestamp(), "Y/m/d H:i")); ?>
    </time>
    <span class="opacity-40">•</span>
    <?php
    $categories = get_the_category();
    if (!empty($categories)) :
        ?>
        <span class="post-meta__categories flex flex-wrap gap-x-2">
            <?php foreach ($categories as $cat) : ?>
                <a href="<?php echo esc_url(get_category_link($cat)); ?>"
                   class="hover:text-red-600 transition-colors">
                    <?php echo esc_html($cat->name); ?>
                </a>
            <?php endforeach; ?>
        </span>
    <?php endif; ?>

</div>
