<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホーム</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="header__space"></div>
        <div class="main">
            <div class="main__left">
                <div class="title">
                    <img class="title-main" src="<?php echo get_template_directory_uri(); ?>/image/title_main.png">
                    <img class="title-sub" src="<?php echo get_template_directory_uri(); ?>/image/title_sub.png">
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
                <img class="img-main" src="<?php echo get_template_directory_uri(); ?>/image/img_main.png">
            </div>
        </div>
        <?php 
            $args = array(
                'container'       => 'nav',
                'container_class' => 'nav',
                'menu_class'      => 'nav__menu'
            );
            wp_nav_menu( $args );
        ?>
    </header>