<?php if (have_posts()) : ?>
<div class="p-archive__cards p-cards">
    <?php while (have_posts()) : ?>
    <?php the_post(); ?>

    <div class="p-cards__card p-card">

        <?php if (is_home()) :
                    get_template_part('inc/newscard');
                else :
                    get_template_part('inc/card');
                endif; ?>
    </div>
    <?php endwhile; ?>
</div>
<!-- wp-pagenaviの記述 -->
<div class="p-archive__pagenavi p-pagenavi">
    <?php if (function_exists('wp_pagenavi')) {
            wp_pagenavi();
        } ?></div>
<!-- wp-pagenaviの記述ここまで -->
<?php else : ?>
<p class="p-archive__text">該当する記事が存在しません。</p>
<?php endif; ?>