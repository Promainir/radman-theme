<?php
$query = $args['query'] ?? null;

if (!$query || $query->max_num_pages <= 1) {
    return;
}
?>

<nav class="pagination-wrapper mt-14">
    <?php
    echo paginate_links([
        'total'     => $query->max_num_pages,
        'current'   => max(1, get_query_var('paged')),
        'prev_text' => 'قبلی',
        'next_text' => 'بعدی',
        'type'      => 'list',
    ]);
    ?>
</nav>
