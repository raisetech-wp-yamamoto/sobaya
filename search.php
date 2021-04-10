<?php get_header(); ?>
    <main>
        <div class="l-wrapper">
            <div class="l-main">
                <div class="l-container is-flex">
                    <div class="l-aside">
                        <div class="c-widget top">
                            <form class="p-search-form" id="searchform" method="get" action="<?php echo home_url('/'); ?>">
                                <input class="p-search-form__keyword" placeholder=""  name="s" id="s">
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
                                <?php
                                    $categories = get_categories();
                                    foreach($categories as $category) {
                                    echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
                                }
                                ?>
                            </ul>
                        </div><!-- /.widget -->
                        <div class="c-widget h100">
                            <h2 class="c-title--section">アーカイブ</h2>
                            <ul>
                                <?php wp_get_archives(); ?>
                            </ul>
                        </div><!-- /.widget -->
                    </div><!-- /.l-aside -->

                    <div class="l-contents">
                        <h2 class="c-title--contents"><span class="first-chara">お</span>知らせ</h2>
                        <div class="c-widget sp">
                            <form class="p-search-form" id="searchform" method="get" action="<?php echo home_url('/'); ?>">
                                <input class="p-search-form__keyword" placeholder=""  name="s" id="s">
                                <input class="p-search-form__submit" id="searchsubmit" type="submit" value="検索">
                            </form>
                        </div><!-- /.c-widget -->
                        <div class="p-post-archive">
                            <!-- ▼ 投稿 : 開始-->
                            <?php
                                if( !is_category() && !is_month() && !is_search()) :
                                    $paged = (int) get_query_var('paged');
                                    $args = array(
                                        'posts_per_page' => 5,
                                        'paged' => $paged,
                                        'orderby' => 'post_date',
                                        'order' => 'DESC',
                                        'post_type' => 'post',
                                        'post_status' => 'publish'
                                    );
                                    $the_query = new WP_Query($args);
                                    if ( $the_query->have_posts() ) :
                                        while ( $the_query->have_posts() ) : $the_query->the_post();
                                        get_template_part('card');
                                ?> 
                                <!-- 全件表示の場合（カテゴリ別・月別・検索結果ではない場合）-->
                            <?php endwhile; else : ?>
                            <p style="font-size: 20px; margin-top: 30px;">表示する記事がありません。</p>
                            <?php endif;?>
                            <?php
                                else :
                                    global $wp_query;
                                    if ( $wp_query->have_posts() ) :
                                        while ( $wp_query->have_posts() ) : $wp_query->the_post();
                                        get_template_part('card');
                                ?>
                                <!-- 全件表示でない場合（カテゴリ別・月別・検索結果の場合）-->
                            <?php endwhile; else : ?>
                            <p style="font-size: 20px; margin-top: 30px;">表示する記事がありません。</p>
                            <?php endif;?>
                            <?php endif;?>
                            <!-- ▲ 投稿 : 終了-->
                        </div><!-- /.c-post-archive -->
                        <div class="p-pagination">
                            <div class="navigation pagination" role="navigation" aria-label="投稿">
                                <h2 class="screen-reader-text">投稿ナビゲーション</h2>
                                <?php
                                    if( !is_category() && !is_month() && !is_search()){
                                        wp_pagenavi(array('query' => $the_query,'wrapper_class' => 'nav-links'));
                                    } else {
                                        wp_pagenavi(array('wrapper_class' => 'nav-links'));
                                    }
                                ?>
                            </div>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    </div><!-- /.l-contents -->
                </div><!-- /.l-container -->
            </div><!-- /.l-main -->
        </div><!-- /.l-wrapper -->
        <!-- ▲ コンテンツ : 終了-->

    <?php get_footer(); ?>