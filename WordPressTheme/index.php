<?php get_header(); ?>
<main>
    <secition class="p-pagetitle">
        <h1 class="p-pagetitle__title">index.php</h1>
    </secition>
    <section class="p-sample l-sample">
        <div class="l-inner">
            <h2 class="p-sample__title">3カラムカードセクション</h2>
            <?php
            $news_query = new WP_Query(
                array(
                    'post_type'      => 'column',
                    'posts_per_page' => 3,
                )
            );
            ?>
            <?php if ($news_query->have_posts()) : ?>
                <div class="p-sample__cards">
                    <?php while ($news_query->have_posts()) : ?>
                        <?php $news_query->the_post(); ?>

                        <?php get_template_part('inc/card'); ?>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>


        </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>