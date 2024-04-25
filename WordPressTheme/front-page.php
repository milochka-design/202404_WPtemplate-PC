<?php get_header(); ?>
<main>
    <section class="p-mv l-mv">
        <div class="p-mv__slider swiper" id="js-swiper-slider-mv">
            <div class="swiper-wrapper">
                <div class="p-mv__slide p-mvslide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/top/mv01.jpg" alt="" />
                </div>
                <div class="p-mv__slide p-mvslide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/top/mv02.jpg" alt="" />
                </div>
                <div class="p-mv__slide p-mvslide swiper-slide">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/top/mv03.jpg" alt="" />
                </div>
            </div>
            <!-- 前後の矢印 -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <!-- ページネーション -->
            <div class="swiper-pagination"></div>
            <!-- スクロールバー -->
            <div class="swiper-scrollbar"></div>
        </div>

    </section>
    <div class="l-inner">
        <section class="p-section l-section">
            <h2 class="c-sectiontitle">SECTION TITLE</h2>
            <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>

        </section>
        <section class="p-section l-section">
            <h2 class="c-sectiontitle">SECTION TITLE</h2>
            <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
        </section>
        <section class="p-section l-section">
            <h2 class="p-section l-section__title c-sectiontitle">事例</h2>
            <?php
            $news_query = new WP_Query(
                array(
                    'post_type'      => 'work',
                    'posts_per_page' => 3,
                )
            );
            ?>
            <?php if ($news_query->have_posts()) : ?>
                <div class="p-section__cards p-cards">
                    <?php while ($news_query->have_posts()) : ?>
                        <?php $news_query->the_post(); ?>
                        <div class="p-cards__card p-card">
                            <?php get_template_part("inc/card"); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            <div class="p-section__button c-button"><a href="<?php echo esc_url(home_url('/')); ?>work/">もっと見る</a>
            </div>
        </section>
    </div>
    <div class="l-layout">
        <div class="l-layout__main">
            <section class="p-section l-section">
                <h2 class="c-sectiontitle">SECTION TITLE</h2>
                <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>

            </section>
            <section class="p-section l-section">
                <h2 class="c-sectiontitle">SECTION TITLE</h2>
                <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>

            </section>
        </div>
        <div class="l-layout__aside l-aside">
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>