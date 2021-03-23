<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href='css/calendar.css' rel='stylesheet' />
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="js/menu-fixed.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js" type="text/javascript"></script>
    <script src='js/calendar.js'></script>
    <script src='js/calendar-custom.js'></script>
    <script src="js/ofi.min.js"></script>
    <title>ホーム</title>
</head>

<body>
    <!-- ▼ ヘッダー : 開始-->
    <header class="header">
        <div class="header__space"></div>
        <div class="main">
            <div class="main__left">
                <div class="title">
                    <img class="title-main" src="image/title_main.png">
                    <img class="title-sub" src="image/title_sub.png">
                </div>
                <hr>
                <div class="main-info">
                    <span>
                        〒012-3456<br />
                        〇〇県〇〇市〇〇1-1-1<br />
                        営業時間：00:00〜00:00<br />
                        定休日：不定休
                    </span>
                </div>
            </div>
            <div class="main__right">
                <img class="img-main" src="image/img_oshirase.png">
                <div class="img-title">
                    <h2>店舗情報</h2>
                    <hr>
                </div>
            </div>
        </div>
        <nav class="nav">
            <ul class="nav__menu">
                <li><a href="">ホーム</a></li>
                <li><a href="">お品書き</a></li>
                <li><a href="">お知らせ</a></li>
                <li><a href="">店舗情報</a></li>
                <li>
                    <a class="nav-tel" href="tel:0123456789">0123-45-6789</a>
                </li>
            </ul>
        </nav>
    </header>
    <!-- ▲ ヘッダー : 終了-->
    <!-- ▼ コンテンツ : 開始-->
    <main>

        <div class="l-wrapper">
            <div class="l-main">
                <div class="l-container is-flex">
                    <div class="l-aside">
                        <div class="c-widget">
                            <form class="p-search-form" id="searchform">
                                <input class="p-search-form__keyword" placeholder="">
                                <input class="p-search-form__submit" id="searchsubmit" type="submit" value="検索">
                            </form>
                        </div><!-- /.c-widget -->
                        <div class="c-widget">
                            <h2 class="c-title--section">営業日のご案内</h2>
                            <div class="calendar__inner cal-small">
                                <div id="calendar-small"></div>
                                <p class="regular-holiday">店休日</p>
                            </div>
                        </div><!-- /.c-widget -->
                        <div class="c-widget">
                            <h2 class="c-title--section">カテゴリー</h2>
                            <ul>
                                <li><a href="#">お蕎麦</a></li>
                                <li><a href="#">イベント</a></li>
                                <li><a href="#">おやすみについて</a></li>
                                <li><a href="#">通販</a></li>
                            </ul>
                        </div><!-- /.widget -->
                        <div class="c-widget">
                            <h2 class="c-title--section">アーカイブ</h2>
                            <ul>
                                <li><a href="#">2020年1月</a></li>
                                <li><a href="#">2019年12月</a></li>
                                <li><a href="#">2019年11月</a></li>
                                <li><a href="#">2019年10月</a></li>
                                <li><a href="#">2019年9月</a></li>
                                <li><a href="#">2019年8月</a></li>
                                <li><a href="#">2019年7月</a></li>
                                <li><a href="#">2019年6月</a></li>
                                <li><a href="#">2019年5月</a></li>
                            </ul>
                        </div><!-- /.widget -->
                    </div><!-- /.l-aside -->

                    <div class="l-contents">
                        <h2 class="c-title--contents">お知らせ</h2>
                        <div class="c-widget sp">
                            <form class="p-search-form" id="searchform">
                                <input class="p-search-form__keyword" placeholder="">
                                <input class="p-search-form__submit" id="searchsubmit" type="submit" value="検索">
                            </form>
                        </div><!-- /.c-widget -->
                        <div class="p-post-archive">
                            <!-- ▼ 投稿 : 開始-->
                            <article class="hentry">
                                <div class="hentry-content">
                                    <header class="entry-header">
                                        <h2 class="entry-title c-title--post">
                                            <a href="#">公式ホームページ開設いたしました！！</a>
                                        </h2>
                                        <div class="entry-meta">
                                            <a href="#"><time class="entry-date published">2020年1月10日</time></a>
                                            <p class="cat-links">
                                                <a href="#" rel="category">お蕎麦</a>
                                                <a href="#" rel="category">新規開設</a>
                                            </p>
                                        </div>
                                    </header>
                                    <div class="entry-content">
                                        <img src="/image/img_sobanomi.png" alt="">
                                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <!-- ▲ 投稿 : 終了-->
                            <!-- ▼ 投稿 : 開始-->
                            <article class="hentry">
                                <div class="hentry-content">
                                    <header class="entry-header">
                                        <h2 class="entry-title c-title--post">
                                            <a href="#">タイトルが入ります</a>
                                        </h2>
                                        <div class="entry-meta">
                                            <a href="#"><time class="entry-date published">2020年1月1日</time></a>
                                            <p class="cat-links">
                                                <a href="#" rel="category">カテゴリーが入ります</a>
                                            </p>
                                        </div>
                                    </header>
                                    <div class="entry-content">
                                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <!-- ▲ 投稿 : 終了-->
                            <!-- ▼ 投稿 : 開始-->
                            <article class="hentry">
                                <div class="hentry-content">
                                    <header class="entry-header">
                                        <h2 class="entry-title c-title--post">
                                            <a href="#">新型コロナウイルスによる緊急事態宣言について</a>
                                        </h2>
                                        <div class="entry-meta">
                                            <a href="#"><time class="entry-date published">2019年12月22日</time></a>
                                            <p class="cat-links">
                                                <a href="#" rel="category">おやすみについて</a>
                                            </p>
                                        </div>
                                    </header>
                                    <div class="entry-content">
                                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                    </div>
                                </div>
                            </article>
                            <!-- ▲ 投稿 : 終了-->
                        </div><!-- /.c-post-archive -->
                        <div class="p-pagination">
                            <div class="navigation pagination" role="navigation" aria-label="投稿">
                                <h2 class="screen-reader-text">投稿ナビゲーション</h2>
                                <div class="nav-links">
                                    <a class="prev page-numbers" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6.882" height="12"
                                            viewBox="0 0 6.882 12">
                                            <g transform="translate(6.876 12.002) rotate(180)">
                                                <g transform="translate(-0.005 0.002)">
                                                    <g transform="translate(0 0)">
                                                        <rect width="1.245" height="8.487"
                                                            transform="translate(6.882 6.001) rotate(135)" />
                                                        <rect width="1.245" height="8.487"
                                                            transform="translate(0.88 12) rotate(-135)" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                    <a class="page-numbers" href="">1</a>
                                    <a class="page-numbers" href="">2</a>
                                    <span aria-current="page" class="page-numbers current">3</span>
                                    <a class="page-numbers" href="">4</a>
                                    <a class="page-numbers" href="">5</a>
                                    <span class="page-numbers dots">&hellip;</span>
                                    <a class="page-numbers" href="">12</a>
                                    <a class="next page-numbers" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="6.882" height="12"
                                            viewBox="0 0 6.882 12">
                                            <g transform="translate(0.005 -0.002)">
                                                <g transform="translate(-0.005 0.002)">
                                                    <g transform="translate(0 0)">
                                                        <rect width="1.245" height="8.487"
                                                            transform="translate(6.882 6.001) rotate(135)" />
                                                        <rect width="1.245" height="8.487"
                                                            transform="translate(0.88 12) rotate(-135)" />
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.l-contents -->
                </div><!-- /.l-container -->
            </div><!-- /.l-main -->
        </div><!-- /.l-wrapper -->
        <!-- ▲ コンテンツ : 終了-->

        <section class="p-info">
            <div class="info__inner">
                <div class="calendar__inner">
                    <div id="calendar"></div>
                    <p class="regular-holiday">店休日</p>
                </div>
                <div class="info__nav">
                    <h2 class="info-title"><img src="./image/title_info.png" alt=""></h2>
                    <address>
                        <div class="tel">
                            <p><img src="./image/call-info.png"><span>0123-45-6789</span></p>
                        </div>
                        <dl>
                            <dt>住所</dt>
                            <dd>〒012-3456 〇〇県〇〇市〇〇1-1-1</dd>
                            <dt>営業時間</dt>
                            <dd>00：00～00：00（そばが売切れ次第終了）</dd>
                            <dt>定休日</dt>
                            <dd>不定休</dd>
                            <dt>アクセス</dt>
                            <dd>
                                電車・バスでお越しの方<br>
                                〇〇線〇〇駅より徒歩〇〇分<br>
                                お車でお越しの方<br>
                                〇〇〇〇ICより〇〇分
                            </dd>
                        </dl>

                    </address>
                </div>
            </div><!-- /.info__inner -->
        </section><!-- /p-info -->
    </main>

    <footer class="footer">
        <ul class="footer-menu">
            <li><a href="">ホーム</a></li>
            <li><a href="">お品書き</a></li>
            <li><a href="">お知らせ</a></li>
            <li><a href="">店舗情報</a></li>
        </ul>
        <small>&copy;そば処〇〇屋 . All Rights Reserved</small>
    </footer>
    <script>
        objectFitImages();
    </script>
</body>

</html>