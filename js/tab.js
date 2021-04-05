jQuery(function ($) {
    $('.js-menu-tab').click(function () {
        $('.js-menuActive').removeClass('js-menuActive');
        $(this).addClass('js-menuActive');
        $('.js-menuShow').removeClass('js-menuShow');
        // クリックしたタブからインデックス番号を取得
        const index = $(this).index();
        // クリックしたタブと同じインデックス番号をもつコンテンツを表示
        $('.js-menu-panel').eq(index).addClass('js-menuShow');
    });
});