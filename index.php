<?php get_header(); ?>
    <main>
        <section class="sec1">
            <div class="bg-filter"></div>
            <div class="sec1__contents">
                <img class="sec1__contetns__img"src="<?php echo get_template_directory_uri(); ?>/image/img_discription1.png">
                <span class="sec1__contents__discription">
                    <h2>和</h2>
                    <p>テキストが入りますテキストが入ります</p>
                    <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります</p>
                </span>
            </div>
        </section>
        <section class="sec2">
            <div class="sec2__contents">
                <span class="sec2__contents__discription">
                    <h2><strong >テ</strong>キストが入ります</h2>
                    <h3>テキストテキスト</h3>
                    <p>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                        テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                        </p>
                </span>
                <img class="sec2__contetns__img"src="<?php echo get_template_directory_uri(); ?>/image/img_discription2.png">
            </div>
        </section>
        <section class="sec3">
            <div class="sec3__contents">
                <div class="pagenavi-content">
                    <h3>お品書き</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/image/img_oshinagaki.png">
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="pagenavi-btn">お品書き</button>
                </div>
                <div class="pagenavi-content">
                    <h3>お知らせ</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/image/img_oshirase.png">
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="pagenavi-btn">お知らせ</button>
                </div>
                <div class="pagenavi-content">
                    <h3>店舗情報</h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/image/img_tenpo.png">
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    <button class="pagenavi-btn">店舗情報</button>
                </div>
            </div>
        </section>
        <section class="p-info">
            <div class="info__inner">
                <div class="calendar__inner">
                    <div id="calendar"></div>
                    <p class="regular-holiday">店休日</p>
                </div>
                <div class="info__nav">
                    <h2 class="info-title"><img src="<?php echo get_template_directory_uri(); ?>/image/title_info.png" alt=""></h2>
                    <address>
                        <div class="tel">
                            <p><img src="<?php echo get_template_directory_uri(); ?>/image/call-info.png"><span>0123-45-6789</span></p>
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
<?php get_footer(); ?>