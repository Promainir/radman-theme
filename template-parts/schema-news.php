<?php
if (!is_single()) {
    return;
}

$image = get_post_image_url();
$published = get_the_date('c');
$modified  = get_the_modified_date('c');
?>

<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NewsArticle",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?php echo esc_url(get_permalink()); ?>"
  },
  "headline": "<?php echo esc_js(get_the_title()); ?>",
    <?php if ($image) : ?>
  "image": ["<?php echo esc_url($image); ?>"],
  <?php endif; ?>
    "datePublished": "<?php echo esc_js($published); ?>",
  "dateModified": "<?php echo esc_js($modified); ?>",
  "author": {
    "@type": "Person",
    "name": "<?php echo esc_js(get_the_author()); ?>"
  },
  "publisher": {
    "@type": "Organization",
    "name": "<?php echo esc_js(get_bloginfo('name')); ?>",
    "logo": {
      "@type": "ImageObject",
      "url": "<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>"
    }
  }
}
</script>
