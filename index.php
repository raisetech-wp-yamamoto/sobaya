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
                                        <dd class="price"><span>¥</span><?php the_field('menu-price'); ?></dd>
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
                            <?php
                                $args = array(
                                    'post_type' => 'menus',
                                    'tax_query'      => array(
                                        array(
                                            'taxonomy' => 'menus_cat',  // カスタムタクソノミー名
                                            'field'    => 'slug',  // ターム名を term_id,slug,name のどれで指定するか
                                            'terms'    => 'hot-soba' // タクソノミーに属するターム名
                                        )
                                    )
                                );
                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                                ?>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content2">
                                        <p class="menu-panel__text"><?php the_field('menu-desc'); ?></P> 
                                        <p class="menu-panel__img"><img src="<?php the_field('menu-img'); ?>" /></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu2">
                                        <dt class="meal"><?php the_title(); ?></dt>
                                        <dd class="price"><span>¥</span><?php the_field('menu-price'); ?></dd>
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
                        <h2 class="c-title--contents"><span class="first-chara">一</span>品物</h2>
                        <ul>
                            <?php
                                $args = array(
                                    'post_type' => 'menus',
                                    'tax_query'      => array(
                                        array(
                                            'taxonomy' => 'menus_cat',  // カスタムタクソノミー名
                                            'field'    => 'slug',  // ターム名を term_id,slug,name のどれで指定するか
                                            'terms'    => 'food' // タクソノミーに属するターム名
                                        )
                                    )
                                );
                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                                ?>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content3">
                                        <p class="menu-panel__text"><?php the_field('menu-desc'); ?></P> 
                                        <p class="menu-panel__img"><img src="<?php the_field('menu-img'); ?>" /></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu3">
                                        <dt class="meal"><?php the_title(); ?></dt>
                                        <dd class="price"><span>¥</span><?php the_field('menu-price'); ?></dd>
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
                        <h2 class="tab-title">お飲み物</h2>
                        <h2 class="c-title--contents"><span class="first-chara">お</span>飲み物</h2>
                        <ul>
                            <?php
                                $args = array(
                                    'post_type' => 'menus',
                                    'tax_query'      => array(
                                        array(
                                            'taxonomy' => 'menus_cat',  // カスタムタクソノミー名
                                            'field'    => 'slug',  // ターム名を term_id,slug,name のどれで指定するか
                                            'terms'    => 'drink' // タクソノミーに属するターム名
                                        )
                                    )
                                );
                                $the_query = new WP_Query($args);
                                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
                                ?>
                                <li class="menu-item">
                                    <div class="menu-panel accordion__content4">
                                        <p class="menu-panel__text"><?php the_field('menu-desc'); ?></P> 
                                        <p class="menu-panel__img"><img src="<?php the_field('menu-img'); ?>" /></p>
                                    </div>
                                    <dl class="menu-tab js-accordion-menu4">
                                        <dt class="meal"><?php the_title(); ?></dt>
                                        <dd class="price"><span>¥</span><?php the_field('menu-price'); ?></dd>
                                    </dl>
                                </li>
                                <?php endwhile;
                                endif; ?>
                            <?php wp_reset_postdata(); ?>
                        </ul>
                    </div><!-- /.tab-content -->
                    <!-- ▲ メニュータブ : 終了-->
                </div><!-- /.l-contents -->
            </div><!-- /.l-container -->
        </div><!-- /.l-main -->
    </div><!-- /.l-wrapper -->
    <!-- ▲ コンテンツ : 終了-->
</main>
<?php get_footer(); ?>