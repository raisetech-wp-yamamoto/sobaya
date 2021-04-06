<?php
/**
 * Template Name: menus */
?>
<?php get_header(); ?>
<main>
        <div class="l-wrapper">
            <div class="l-main">
                <div class="l-container is-flex">
                    <div class="l-aside">
                        <div class="c-widget top h100">
                            <h2 class="c-title--section">お品書き</h2>
                            <ul class="tab-menu">
                                <?php
                                // 親カテゴリーのものだけを一覧で取得
                                $args = array(
                                    'parent' => 0,
                                    'orderby' => 'term_order',
                                    'order' => 'ASC',
                                    'exclude' => '1' //今回は未分類を除外したいのでID:1をexclude
                                );
                                // $categories = get_categories($args);
                                $categories = get_terms('menus_cat',$args);
                                ?>
                                <?php foreach ($categories as $category) : $loopcount++; ?>
                                <?php if ($loopcount <= 1) : ?>
                                    <li class="menu-tab js-menu-tab js-menuActive"><span><?php echo $category->name; ?></span></li>
                                <?php else : ?>
                                    <li class="menu-tab js-menu-tab"><span><?php echo $category->name; ?></span></li>
                                <?php endif; ?>
                                <?php endforeach; ?>
                            </ul><!-- .tab-menu -->

                        </div><!-- /.widget -->
                    </div><!-- /.l-aside -->

                    <div class="l-contents">
                        <div class="p-tab-content  js-menu-panel js-menuShow">
                            <h2 class="tab-title">お食事</h2>
                            <!-- ▼ メニュータブ : 開始-->
                            <h2 class="c-title--contents"><span class="first-chara">冷</span>たいおそば</h2>
                            <ul>
                                <?php
                                    $args = array(
                                        'post_type' => 'menus',
                                        'tax_query'      => array(
                                            array(
                                                'taxonomy' => 'menus_cat',  // カスタムタクソノミー名
                                                'field'    => 'slug',  // ターム名を term_id,slug,name のどれで指定するか
                                                'terms'    => 'cold-soba' // タクソノミーに属するターム名
                                            )
                                        )
                                    );
                                    $the_query = new WP_Query($args);
                                    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                                    ?>
                                    <li class="menu-item">
                                        <div class="menu-panel accordion__content1">
                                            <p class="menu-panel__text"><?php the_field('menu-desc'); ?></P> 
                                            <p class="menu-panel__img"><img src="<?php the_field('menu-img'); ?>" /></p>
                                        </div>
                                        <dl class="menu-tab js-accordion-menu1">
                                            <dt class="meal"><?php the_title(); ?></dt>
                                            <dd class="price"><span>¥</span><?php the_field('menu-price'); ?><span>円</span></dd>
                                        </dl>
                                    </li>
                                    <?php endwhile;
                                    endif; ?>
                                <?php wp_reset_postdata(); ?>
                            </ul>
                        </div><!-- /.tab-content -->
                        <!-- ▲ メニュータブ : 終了-->
                        <!-- ▼ メニュータブ : 開始-->
                        <div class="p-tab-content  js-menu-panel">
                            <h2 class="c-title--contents"><span class="first-chara">温</span>かいおそば</h2>
                            <ul>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content2">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu2">
                                        <dt class="meal">かけそば</dt>
                                        <dd class="price"><span>¥</span>800<span>円</span></dd>
                                    </dl>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content2">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu2">
                                        <dt class="meal">たぬきそば（揚玉）</dt>
                                        <dd class="price"><span>¥</span>850<span>円</span></dd>
                                    </dl>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content2">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu2">
                                        <dt class="meal">野菜かき揚げそば</dt>
                                        <dd class="price"><span>¥</span>900<span>円</span></dd>
                                    </dl>
                                </li>
                            </ul>
                        </div><!-- /.tab-content -->
                        <!-- ▲ メニュータブ : 終了-->
                        <!-- ▼ メニュータブ : 開始-->
                        <div class="p-tab-content  js-menu-panel">
                            <h2 class="c-title--contents"><span class="first-chara">一</span>品物</h2>
                            <ul>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content3">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu3">
                                        <dt class="meal">コロッケとメンチカツ</dt>
                                        <dd class="price"><span>¥</span>450<span>円</span></dd>
                                    </dl>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content3">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu3">
                                        <dt class="meal">鶏の唐揚げ</dt>
                                        <dd class="price"><span>¥</span>500<span>円</span></dd>
                                    </dl>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content3">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu3">
                                        <dt class="meal">生玉子</dt>
                                        <dd class="price"><span>¥</span>50<span>円</span></dd>
                                    </dl>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content3">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu3">
                                        <dt class="meal">もつ煮込み</dt>
                                        <dd class="price"><span>¥</span>500<span>円</span></dd>
                                    </dl>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content3">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu3">
                                        <dt class="meal">炊き込みごはん</dt>
                                        <dd class="price"><span>¥</span>400<span>円</span></dd>
                                    </dl>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content3">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu3">
                                        <dt class="meal">炊き込みごはんセット</dt>
                                        <dd class="price"><span>¥</span>600<span>円</span></dd>
                                    </dl>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content3">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu3">
                                        <dt class="meal">野菜かき揚げ</dt>
                                        <dd class="price"><span>¥</span>100<span>円</span></dd>
                                    </dl>
                                </li>
                            </ul>
                        </div><!-- /.tab-content -->
                        <!-- ▲ メニュータブ : 終了-->
                        <!-- ▼ メニュータブ : 開始-->
                        <div class="p-tab-content  js-menu-panel">
                            <h2 class="tab-title">お飲み物</h2>
                            <h2 class="c-title--contents"><span class="first-chara">お</span>飲み物</h2>
                            <ul>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content4">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu4">
                                        <dt class="meal">ビール（大ビン）</dt>
                                        <dd class="price"><span>¥</span>680<span>円</span></dd>
                                    </dl>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content4">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu4">
                                        <dt class="meal">ドライゼロ（ノンアル）</dt>
                                        <dd class="price"><span>¥</span>350<span>円</span></dd>
                                    </dl>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content4">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu4">
                                        <dt class="meal">焼酎そば湯割り</dt>
                                        <dd class="price"><span>¥</span>400<span>円</span></dd>
                                    </dl>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content4">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu4">
                                        <dt class="meal">地酒（中乗りさん）</dt>
                                        <dd class="price"><span>¥</span>400<span>円</span></dd>
                                    </dl>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content4">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu4">
                                        <dt class="meal">コーヒー</dt>
                                        <dd class="price"><span>¥</span>300<span>円</span></dd>
                                    </dl>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content4">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu4">
                                        <dt class="meal">アイスミルク</dt>
                                        <dd class="price"><span>¥</span>300<span>円</span></dd>
                                    </dl>
                                </li>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content4">
                                        <p class="menu-panel__text">
                                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                                        </p>
                                        <p class="menu-panel__img"><img src="/image/img_zaru.png" alt=""></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu4">
                                        <dt class="meal">ジュース</dt>
                                        <dd class="price"><span>¥</span>300<span>円</span></dd>
                                    </dl>
                                </li>
                            </ul>
                        </div><!-- /.tab-content -->
                        <!-- ▲ メニュータブ : 終了-->

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
<?php get_footer(); ?>