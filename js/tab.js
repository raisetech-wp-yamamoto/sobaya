jQuery(function ($) {
    $('.js-menu-tab1').click(function () {
        $('.js-menuActive1').removeClass('js-menuActive1');
        $(this).addClass('js-menuActive1');
        $('.js-menuShow1').removeClass('js-menuShow1');
        // クリックしたタブからインデックス番号を取得
        const index = $(this).index();
        // クリックしたタブと同じインデックス番号をもつコンテンツを表示
        $('.js-menu-panel1').eq(index).addClass('js-menuShow1');
    });
});

jQuery(function ($) {
    $('.js-menu-tab2').click(function () {
        $('.js-menuActive2').removeClass('js-menuActive2');
        $(this).addClass('js-menuActive2');
        $('.js-menuShow2').removeClass('js-menuShow2');
        // クリックしたタブからインデックス番号を取得
        const index = $(this).index();
        // クリックしたタブと同じインデックス番号をもつコンテンツを表示
        $('.js-menu-panel2').eq(index).addClass('js-menuShow2');
    });
});

jQuery(function ($) {
    $('.js-menu-tab3').click(function () {
        $('.js-menuActive3').removeClass('js-menuActive3');
        $(this).addClass('js-menuActive3');
        $('.js-menuShow3').removeClass('js-menuShow3');
        // クリックしたタブからインデックス番号を取得
        const index = $(this).index();
        // クリックしたタブと同じインデックス番号をもつコンテンツを表示
        $('.js-menu-panel3').eq(index).addClass('js-menuShow3');
    });
});

jQuery(function ($) {
    $('.js-menu-tab4').click(function () {
        $('.js-menuActive4').removeClass('js-menuActive4');
        $(this).addClass('js-menuActive4');
        $('.js-menuShow4').removeClass('js-menuShow4');
        // クリックしたタブからインデックス番号を取得
        const index = $(this).index();
        // クリックしたタブと同じインデックス番号をもつコンテンツを表示
        $('.js-menu-panel4').eq(index).addClass('js-menuShow4');
    });
});

document.addEventListener('DOMContentLoaded', () => {
    // タブメニュークラス'.js-tab-trigger'を持つ要素を取得
    const tabTriggers = document.querySelectorAll('.js-tab-trigger');
    // タブコンテンツクラス'.js-tab-target'を持つ要素を取得
    const tabTargets = document.querySelectorAll('.js-tab-target');

    // 要素の数の分だけループ処理をして値を取り出す
    for (let i = 0; i < tabTriggers.length; i++) {
        // タブメニュークリック時
        tabTriggers[i].addEventListener('click', (e) => {
            // クリックされた要素（メニュー要素[トリガー要素]）を取得
            let currentMenu = e.currentTarget;
            // ターゲットとなる要素（タブメニューdata属性値と等しいid値を持つコンテンツ要素[ターゲット要素]）を取得
            let currentContent = document.getElementById(currentMenu.dataset.id);

            // すべてのタブメニューの'is-active'クラスを削除
            for (let i = 0; i < tabTriggers.length; i++) {
                tabTriggers[i].classList.remove('js-tabActive');
            }
            // クリックしたタブメニューに'is-active'クラスを追加
            currentMenu.classList.add('js-tabActive');

            // タブコンテンツを非アクティブにする
            for (let i = 0; i < tabTargets.length; i++) {
                tabTargets[i].classList.remove('js-tabActive');
            }
            // 対象コンテンツ(指定したIDの要素があったら)を表示させる
            if (currentContent !== null) {
                currentContent.classList.add('js-tabActive');
            }
        });
    }
});