<?php get_header(); ?>
<?php get_template_part('inc/breadcrumbs'); ?>
<main class="p-page">
    <section class="p-archive l-archive">
        <div class="l-inner">
            <?php if (is_post_type_archive('works')) : ?>
            <div class="p-archive__title p-pageheader ">
                <div class="p-pageheader__title c-sectiontitle">
                    <h1 class="c-sectiontitle__en">CustomePostType="works"<span class="c-sectiontitle__jp">記事一覧</span>
                    </h1>
                </div>
            </div>
            <?php elseif (is_tax()) : ?>
            <div class="p-archive__title p-pageheader l-pageheader ">
                <div class=" p-pageheader__title c-sectiontitle">
                    <h1 class=""><?php single_term_title(); ?>の記事一覧
                    </h1>
                </div>
            </div>
            <?php else : ?>
            <div class="p-archive__title p-pageheader l-pageheaderå">
                <div class="p-pageheader__title c-sectiontitle">
                    <h1 class="c-sectiontitle__en">通常Post<span class="c-sectiontitle__jp">記事一覧</span>
                    </h1>
                </div>
            </div>
            <?php endif; ?>

            <?php get_template_part('inc/archivecards'); ?>
        </div>
    </section>
</main>
<main class="p-page p-page--withaside l-layout">
    <div class="l-layout__main p-main">
        <section class="p-archive l-archive">
            <div class="l-inner">
                <?php if (is_post_type_archive('works')) : ?>
                <div class="p-archive__title p-pageheader ">
                    <div class="p-pageheader__title c-sectiontitle">
                        <h1 class="c-sectiontitle__en">CustomePostType="works"<span
                                class="c-sectiontitle__jp">記事一覧</span>
                        </h1>
                    </div>
                </div>
                <?php elseif (is_tax()) : ?>
                <div class="p-archive__title p-pageheader l-pageheader ">
                    <div class=" p-pageheader__title c-sectiontitle">
                        <h1 class=""><?php single_term_title(); ?>の記事一覧
                        </h1>
                    </div>
                </div>
                <?php else : ?>
                <div class="p-archive__title p-pageheader l-pageheaderå">
                    <div class="p-pageheader__title c-sectiontitle">
                        <h1 class="c-sectiontitle__en">通常Post<span class="c-sectiontitle__jp">記事一覧</span>
                        </h1>
                    </div>
                </div>
                <?php endif; ?>

                <?php get_template_part('inc/archivecards'); ?>
            </div>
        </section>
    </div>
    <div class="l-layout__aside l-aside"> <?php get_sidebar(); ?></div>


</main>
<?php get_footer(); ?>