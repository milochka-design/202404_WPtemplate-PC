<footer class="p-footer l-footer">
    <div class="l-inner">
        <div class="p-footer__menucontainer">
            <ul class="p-footer__menu p-footermenu">
                <li class="p-footermenu__item">
                    <a href="<?php echo esc_url(home_url('/')); ?>">TOP</a>
                </li>
                <li class="p-footermenu__item">
                    <a href="<?php echo esc_url(home_url('/')); ?>about/">ABOUT</a>
                </li>

                <li class="p-footermenu__item">
                    <a href="<?php echo esc_url(home_url('/')); ?>news/">NEWS</a>
                </li>
            </ul>


            <ul class="p-footermenu__links p-links">
                <li class="p-links__item"><a target="_blank" rel="noopener noreferrer"
                        href="https://www.holts.co.jp/">Holtsホームページ</a></li>
                <li class="p-links__item"><a target="_blank" rel="noopener noreferrer"
                        href="https://www.youtube.com/user/HoltsOfficialTV?themeRefresh=1"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/common/snsicon01.svg"
                            alt="">Holts公式<br class="u-mobile">
                        YouTubeチャンネル</a></li>
                <li class="p-links__item"><a target="_blank" rel="noopener noreferrer"
                        href="https://www.instagram.com/musashiholts_official/"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/common/snsicon02.svg"
                            alt="">Instagram</a></li>
                <li class="p-links__item"><a target="_blank" rel="noopener noreferrer"
                        href="https://twitter.com/Holts_m/"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/common/snsicon03.svg"
                            alt="">X（旧Twitter）</a></li>
                <li class="p-links__item"><a target="_blank" rel="noopener noreferrer"
                        href="https://www.facebook.com/musashi.holts/"><img
                            src="<?php echo get_template_directory_uri() ?>/assets/images/common/snsicon04.svg"
                            alt="">Facebook</a></li>
            </ul>
        </div>
    </div>
    <div class="p-footer__lower">
        <a target="_blank" rel="noopener noreferrer" href="https://www.holts.co.jp/">
            <div class="p-footer__logo c-footerlogo">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/logo.webp" alt="">
            </div>
        </a>

        <p class="p-footer__copyright">&copy;<?php echo date('Y'); ?> COPYRIGHT</p>
    </div>
</footer>

<?php wp_footer(); ?>
<?php if (is_front_page()) : ?>
<script>
const swipermv = new Swiper("#js-swiper-slider-mv", {

    slidesPerView: 1,
    loop: true,
    speed: 900,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    autoplay: { // 自動再生
        delay: 5000, // 1秒後に次のスライド（初期値：3000）
        disableOnInteraction: false, // 矢印をクリックしても自動再生を止めない
    },

});
</script>
<?php endif; ?>
</body>

</html>