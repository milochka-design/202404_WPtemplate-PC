<?php get_header(); ?>
<section class="p-404 l-404">
    <div class="l-inner">
        <h2 class="p-404__title">404 Not Found</h2>
        <p class="p-404__text">ご指定のページが見つかりませんでした。<br>
            3秒後にトップページへ自動遷移します。</p>

        <div class="p-404__button c-button"> <a class="c-button__link" href="<?php echo esc_url(home_url('/')); ?>">トップページへ戻る</a></div>
    </div>
</section>


</div>
</main>
<?php get_footer(); ?>