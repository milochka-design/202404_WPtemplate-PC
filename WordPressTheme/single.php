<?php get_header(); ?>
<?php get_template_part('inc/breadcrumbs'); ?>
<main class="p-post p-pagewithaside">
    <div class="l-layout">
        <?php if (is_object_in_term($post->ID, 'work_cat', 'special')) : ?>
            <div class="l-layout__main p-main p-main--special">
            <?php else : ?>
                <div class="l-layout__main p-main">
                <?php endif; ?>
                <div class="l-inner">
                    <section class="p-single l-single">
                        <div class="p-single__header p-postheader">
                            <div class="p-postheader__meta">
                                <p class="p-postheader__date">
                                    <?php echo get_the_date(); ?>
                                </p>
                                <?php $terms = get_the_terms($post->ID, 'work_cat');
                                if ($terms) : ?>
                                    <ul class="p-postheader__kind">
                                        <?php
                                        foreach ($terms as $term) : ?>
                                            <li class="c-kind">
                                                <a href="<?php echo get_term_link($term->slug, 'work_cat'); ?>"><?php echo $term->name; ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php
                                    if (!($term->slug == 'special')) : ?>
                                        <ul class="p-postheader__cat">
                                            <?php $terms = get_the_terms($post->ID, 'articles_cat');
                                            foreach ($terms as $term) :
                                                $cat_color = get_field('cat_color', 'articles_cat_' . $term->term_id);
                                                $this_term_name  = $term->name; ?>
                                                <li class="c-cat">
                                                    <a href="<?php echo get_term_link($term->slug, 'articles_cat'); ?>"><span class="c-cat__circle" style="background:<?php echo $cat_color; ?>"></span><?php echo $this_term_name; ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul> <?php endif; ?>
                                <?php endif; ?>

                            </div>

                            <h1 class="p-postheader__title"><?php the_title(); ?></h1>
                            <?php $terms = get_the_terms($post->ID, 'keyword');
                            if ($terms) : ?>
                                <ul class="p-postheader__keywords p-keywords">
                                    <?php
                                    foreach ($terms as $term) {
                                        echo '<li class="p-keywords__keyword c-keyword"><a href="' . get_term_link($term->slug, 'keyword') . '">' . $term->name . '</a></li>';
                                    }
                                    ?>
                                </ul><?php endif; ?>

                        </div>
                        <div class="p-single__thumbnail">

                            <?php $img = get_field('thumb_img');
                            if ($img) : ?>
                                <img src="<?php echo $img; ?>" alt="">
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/no-img.jpg" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="p-single__contents p-contents">
                            <?php the_content(); ?>
                        </div>
                    </section>
                    <?php
                    if (is_singular('article')) :
                        $this_obj = get_queried_object();
                        $post_type = $this_obj->post_type;
                        $post_id = $this_obj->ID;
                        $terms = get_the_terms($post_id, 'articles_cat');
                        $term_slug = $terms[0]->slug;
                        $current_post_id = get_the_ID();
                        $related_query = new WP_Query(
                            array(
                                'post_type'      => $post_type,
                                'posts_per_page' => 3,
                                "post__not_in" => [$current_post_id], // 除外する記事のIDを指定（配列）
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'articles_cat', //カスタムタクソノミー
                                        'field' => 'slug',
                                        'terms' => $term_slug,

                                    )
                                )
                            )
                        );
                    ?>
                        <?php if ($related_query->have_posts()) : ?>
                            <section class="p-related l-related">
                                <h2 class="p-related__title c-tagtitle">関連記事</h2>
                                <div class="p-related__cards p-cards">
                                    <?php while ($related_query->have_posts()) : ?>
                                        <?php $related_query->the_post(); ?>
                                        <div class="p-cards__card p-card">
                                            <?php get_template_part('inc/card'); ?>
                                        </div>

                                    <?php endwhile; ?>
                                </div>
                            </section> <?php endif; ?>
                    <?php wp_reset_postdata();
                    endif; ?>
                </div>

                </div>
                <div class="l-layout__aside l-aside"> <?php get_sidebar(); ?></div>


            </div>

</main>
<?php get_footer(); ?>