<?php
get_header();
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
            <?php get_template_part('template-parts/sections/section-latest-news'); ?>
        </div>
    </main>

<?php

get_footer();
