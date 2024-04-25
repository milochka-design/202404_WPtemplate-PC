"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $(".pagetop");
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $("body,html").animate({
      scrollTop: 0
    }, 300, "swing");
    return false;
  });

  //ドロワーメニュー
  /*body no-scroll定義*/
  function disableScroll(event) {
    event.preventDefault();
  }
  $(function () {
    $(".js-drawer-open").click(function () {
      $(this).toggleClass("js-open");
      if ($(this).hasClass("js-open")) {
        $(".p-drawer").addClass("js-open");

        /*document.addEventListener("mousewheel", disableScroll, { passive: false });
        document.addEventListener("touchmove", disableScroll, { passive: false });*/
        //document.body.style.overflow = "hidden";
      } else {
        $(".p-drawer").removeClass("js-open");
        /*document.removeEventListener("mousewheel", disableScroll, { passive: false });
        document.removeEventListener("touchmove", disableScroll, { passive: false });*/
        //document.body.style.overflow = "visible";
      }
    });
  });

  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on("click", 'a[href*="#"]', function () {
    var time = 400;
    var header = $("header").innerHeight();
    var target = $(this.hash);
    if (!target.length) return;
    var targetY = target.offset().top - header;
    $("html,body").animate({
      scrollTop: targetY
    }, time, "swing");
    return false;
  });
});