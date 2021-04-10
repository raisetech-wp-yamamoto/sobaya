<?php
/**
 * Template Name: information */
?>
<?php get_header(); ?>
    <main>
        <div class="l-wrapper">
            <div class="l-main">
                <div class="l-container is-flex">
                    <div class="l-aside">
                        <div class="c-widget top">
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
                            <form class="p-search-form" id="searchform">
                                <input class="p-search-form__keyword" placeholder="">
                                <input class="p-search-form__submit" id="searchsubmit" type="submit" value="検索">
                            </form>
                        </div><!-- /.c-widget -->
                        <div class="p-post-archive">
                            <!-- ▼ 投稿 : 開始-->
                            <!-- 全件表示の場合（カテゴリ別・月別ではない場合）-->
                            <?php
                                if( !is_category() && !is_month()) :
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
                            <?php endwhile; endif;?>
                            <!-- 全件表示でない場合（カテゴリ別ではない場合）-->
                            <?php
                                else :
                                    global $wp_query;
                                    if ( $wp_query->have_posts() ) :
                                        while ( $wp_query->have_posts() ) : $wp_query->the_post();
                                        get_template_part('card');
                                ?>
                            <?php endwhile; endif; endif;?>
                            <?php wp_reset_postdata(); ?>
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
                                    <span aria-current="page" class="page-numbers current">2</span>
                                    <a class="page-numbers" href="">3</a>
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

    <?php get_footer(); ?>