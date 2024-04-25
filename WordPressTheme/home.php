<?php get_header(); ?>
<?php get_template_part('inc/breadcrumbs'); ?>
<main class="p-page p-pagewithaside">
    <div class="l-layout">
        <div class="l-layout__main p-main">
            <section class="p-archive l-archive">
                <div class="l-inner">
                    <div class="p-archive__title p-pageheader l-pageheader l-pageheader--large">
                        <div class="p-pageheader__title c-sectiontitle">
                            <p class="c-sectiontitle__deco c-sectiontitle__deco--rev">NEWS</p>
                            <p class="c-sectiontitle__en c-sectiontitle__en--rev">NEWS</p>
                            <h1 class="c-sectiontitle__jp c-sectiontitle__jp--rev">お知らせ</h1>
                        </div>
                    </div>
                    <?php get_template_part('inc/archivecards'); ?>
                </div>
            </section>
        </div>
        <div class="l-layout__aside l-aside"> <?php get_sidebar(); ?></div>

    </div>

</main>
<?php get_footer(); ?>