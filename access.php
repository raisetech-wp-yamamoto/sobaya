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
    <title>アクセス</title>
</head>
<body>
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
                        〒012-3456<br/>
                        〇〇県〇〇市〇〇1-1-1<br/>
                        営業時間：00:00〜00:00<br/>
                        定休日：不定休
                    </span>
                </div> 
            </div>
            <div class="main__right">
                <img class="img-main" src="image/img_access.png">
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
    <main>
        <section class="l-wrapper">
            <div class="l-main">
                <div class="l-contents u-margin-auto">
                    <h2 class="c-title--contents">店舗情報</h2>
                    <dl class="access-info">
                        <dt>店名</dt>
                        <dd>そば処○○屋</dd>
                        <dt>住所</dt>
                        <dd>〒012-3456 〇〇県〇〇市〇〇1-1-1</dd>
                        <dt>電話番号</dt>
                        <dd><a href="tel:0123-45-6789" >0123-45-6789</a></dd>
                        <dt>営業時間</dt>
                        <dd>00：00～00：00（そばが売切れ次第終了）</dd>
                        <dt>定休日</dt>
                        <dd>不定休</dd>
                        <dt>支払方法</dt>
                        <dd>現金のみ</dd>
                        <dt>アクセス</dt>
                        <dd>電車・バスでお越しの方<br>
                            〇〇線〇〇駅より徒歩〇〇分<br><br>
                            お車でお越しの方<br>
                            〇〇〇〇ICより〇〇分
                        </dd>
                      <dl>
                </div>
            </div>
        </section>
        <section class="p-map">
            <img src="image/bg_map.png" alt="">
            <div class="resize-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477985332994!2d139.7432442154142!3d35.658584838820786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1616406395262!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <img src="image/bg_map.png" alt="">
        </section>
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
    <script> objectFitImages(); </script>
</body>
</html>