<a class="p-card__link" href="<?php the_permalink(); ?>"></a>

<div class="p-card__img">

    <?php if (has_post_thumbnail()) : ?>
    <img src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="<?php the_title(); ?>" />
    <?php else : ?>
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/no-img.jpg" alt="">
    <?php endif; ?>
</div>

<div class="p-card__contents">
    <div class="p-card__meta">
        <time class="p-card__date" datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date("Y.m.d"); ?></time>
        <ul class="p-card__cat">
            <?php $terms = get_the_terms($post->ID, 'work_cat');
            foreach ($terms as $term) : ?>
            <li class="c-cat">
                <a href="<?php echo get_term_link($term->slug, 'work_cat'); ?>"><?php echo $term->name; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>

    </div>

    <p class="p-card__title"><?php the_title(); ?></p>
    <?php $terms = get_the_terms($post->ID, 'keyword');
    if ($terms) : ?>
    <ul class="p-card__keywords p-keywords">
        <?php
            foreach ($terms as $term) {
                echo '<li class="p-keywords__keyword c-keyword"><a href="' . get_term_link($term->slug, 'keyword') . '">' . $term->name . '</a></li>';
            }
            ?>
    </ul>
    <?php endif; ?>
</div>