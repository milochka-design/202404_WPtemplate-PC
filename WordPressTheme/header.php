<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <?php wp_head(); ?>
    <?php if (is_404()) : ?>
        <meta http-equiv="refresh" content=" 3; url=<?php echo esc_url(home_url("/")); ?>">
    <?php endif; ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="p-header l-header">
        <div class="p-header__inner">
            <?php if (is_front_page()) : ?><div class="p-header__logocontainer">
                    <h1 class="p-header__logo c-logo">
                        <a class="" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/common/logo.webp" alt="HOLTS BASE"> </a>
                    </h1>
                </div>
            <?php else : ?>
                <div class="p-header__logo c-logo"><a class="" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/logo.png" alt=""></a>
                </div>
            <?php endif ?>
            <ul class="p-header__pcmenu p-pcmenu u-desktop">
                <li class="p-pcmenu__item"><a href="<?php echo esc_url(home_url('/')); ?>about/">ABOUT</a></li>
                <li class="p-pcmenu__item"><a href="<?php echo esc_url(home_url('/')); ?>work/">WORKS</a>
                </li>
                <li class="p-pcmenu__item"><a href="<?php echo esc_url(home_url('/')); ?>news/">NEWS</a></li>

            </ul>
            <div class="p-header__trigger p-trigger u-mobile">
                <div class="js-drawer-open p-trigger__button">
                    <span></span> <span></span> <span></span>
                </div>
            </div>

        </div>

        <div class="p-header__drawer p-drawer">

            <div class="p-drawer__inner">
                <div class="p-drawer__contents">
                    <ul class="p-drawer__menu p-spmenu">
                        <li class="p-spmenu__item"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
                        <li class="p-spmenu__item"><a href="<?php echo esc_url(home_url('/')); ?>about/">ABOUT</a></li>
                        <li class="p-spmenu__item"><a href="<?php echo esc_url(home_url('/')); ?>work/">WORKS</a></li>
                        <li class="p-spmenu__item"><a href="<?php echo esc_url(home_url('/')); ?>news/">NEWS</a></li>
                        <li class="p-spmenu__item p-spmenu__item--sub"><a target="_blank" rel="noopener noreferrer" href="https://www.holts.co.jp/">Holtsホームページ</a></li>
                        <li class="p-spmenu__item p-spmenu__item--sub"><a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/user/HoltsOfficialTV?themeRefresh=1">Holts公式YouTubeチャンネル</a>
                        </li>
                        <li class="p-spmenu__item p-spmenu__item--sub"><a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/musashiholts_official/">Instagram</a></li>
                        <li class="p-spmenu__item p-spmenu__item--sub"><a target="_blank" rel="noopener noreferrer" href="https://twitter.com/Holts_m/">X（旧Twitter）</a></li>
                        <li class="p-spmenu__item p-spmenu__item--sub"><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/musashi.holts/">Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>