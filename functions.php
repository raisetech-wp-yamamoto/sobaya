<?php
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );

function my_scripts() {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'calendar', get_template_directory_uri() . '/css/calendar.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
  wp_enqueue_script( 'menu-fixed', get_template_directory_uri() . '/js/menu-fixed.js', array( 'jquery' ), '1.0.0', false );
  wp_enqueue_script( 'moment', '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js', array( '' ), '2.20.1');
  wp_enqueue_script( 'gkey', get_template_directory_uri() . '/js/gkey.js', array(), '1.0.0', false );
  wp_enqueue_script( 'calendar', get_template_directory_uri() . '/js/calendar.js', array( 'jquery'), '1.0.0', false );
  wp_enqueue_script( 'calendar-custom', get_template_directory_uri() . '/js/calendar-custom.js', array( 'jquery'), '1.0.0', false );
  wp_enqueue_script( 'ofi.min', get_template_directory_uri() . '/js/ofi.min.js', array( 'jquery' ), '1.0.0', false );
  wp_enqueue_script( 'tab', get_template_directory_uri() . '/js/tab.js', array( 'jquery' ), '1.0.0', false );
  wp_enqueue_script( 'accordion.js', get_template_directory_uri() . '/js/accordion.js', array( 'jquery' ), '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );


add_action('init', 'custom_post_type');
function custom_post_type()
{
    // menus
    register_post_type(
        'menus', // カスタム投稿タイプのスラッグ
        array(
            'labels' => array(
                'name' => __('お品書き'),          // メニューに表示される名称
                'singular_name' => __('menus'), // 単体系の名称
                'all_items' => __('お品書き一覧'),
                'add_new' => _x('新規追加', 'menus'),
                'add_new_item' => __('新規追加'),
                'name_admin_bar' => ('お品書き')
            ),
            'public' => true,
            'has_archive' => true,            // アーカイブを有効に
            'hierarchical' => false,          // ページ階層の指定
            'menu_position' => 5,              // 管理画面上の配置指定
            'menu_icon' => 'dashicons-admin-post',  // アイコン指定
            'supports' => array('title', 'editor', 'revisions'), // サポート指定
            'show_in_rest' => true,
        )
    );

    // カスタムタクソノミーの追加
    // menus
    register_taxonomy( //カテゴリー形式
        'menus_cat', //カスタムタクソノミー名
        'menus', //★紐づける投稿タイプ名、デフォルト分類に使う場合はpost、page
        array(
            'label' => 'お品書き分類',  //★管理画面で表示する名前
            'labels' => array(
                'add_new_item' => '新規分類を追加' //★管理画面で表示する名前
            ),
            'public' => true, //投稿タイプをパブリックにするか (true/false)
            'hierarchical' => false, //カテゴリーのような階層構造にするかどうか (true/false)
            'show_in_rest' => true, //新エディタ Gutenberg を有効化
            'show_admin_column' => true, //管理画面の記事一覧に項目を作るか (true/false)
            'hierarchical' => true,
        )
    );
}

/* 表示件数を指定 */
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    
    $query->set( 'posts_per_page', '5' );
}
add_action( 'pre_get_posts', 'change_posts_per_page' );