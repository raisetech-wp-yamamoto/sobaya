/* メニューを固定させるためのJQuery
 * 正常に動作させるためにナビゲーションメニュー以下のHTMLタグ全体を
 *  <main>タグで囲むようにしてください。
*/
(function($) {
$(function() {
    var $win = $(window),
        $main = $('main'),
        $nav = $('nav'),
        navHeight = $nav.outerHeight(),
        navPos = $main.offset().top - navHeight,
        fixedClass = 'is-fixed';

    $win.resize(function() {
      navHeight = $nav.outerHeight();
      navPos = $main.offset().top - navHeight;
      var value = $(this).scrollTop();
      if ( value > navPos ) {
        $nav.addClass(fixedClass);
        $main.css('margin-top', navHeight);
      } else {
        $nav.removeClass(fixedClass);
        $main.css('margin-top', '0');
      }
    });
  
    $win.on('load scroll', function() {
      var value = $(this).scrollTop();
      if ( value > navPos ) {
        $nav.addClass(fixedClass);
        $main.css('margin-top', navHeight);
      } else {
        $nav.removeClass(fixedClass);
        $main.css('margin-top', '0');
      }
    });
  });

})( jQuery );