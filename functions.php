<?php
    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );

function my_scripts() {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'calendar', get_template_directory_uri() . '/css/calendar.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/css/slick.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'calendar', get_template_directory_uri() . '/css/calendar.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
  wp_enqueue_style( 'font-awesome5', '//use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.0.0' );
  wp_enqueue_script( 'menu-fixed', get_template_directory_uri() . '/js/menu-fixed.js', array( 'jquery' ), '1.0.0', false );
  wp_enqueue_script( 'moment', '//cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js', array( '' ), '2.20.1');
  wp_enqueue_script( 'ofi.min', get_template_directory_uri() . '/js/ofi.min.js', array( 'jquery' ), '1.0.0', false );
  wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array( 'jquery' ), '1.0.0', false );
  wp_enqueue_script( 'slick.min', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.0.0', false );
  wp_enqueue_script( 'my-slick', get_template_directory_uri() . '/js/my-slick.js', array( 'jquery' ), '1.0.0', false );
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

/* 管理画面の「投稿」の名称を「お知らせ」に変更 */
function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = 'お知らせ';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = $name.'新規追加';
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = 'お知らせ';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );


/* 表示件数を指定 */
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    
    $query->set( 'posts_per_page', '5' );
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

/* 検索結果を投稿のみ */
function SearchFilter( $query ) {
	if ( $query -> is_search ) {
		$query -> set( 'post_type', 'post' );
	}
	return $query;
}
add_filter( 'pre_get_posts', 'SearchFilter' );

/* wp-pagenaviカスタマイズ */
function custom_wp_pagenavi_class( $class_name ) {
    switch( $class_name ) {
      case 'current':
        $class_name = 'current page-numbers';
        break;
      case 'page':
        $class_name = 'page page-numbers';
        break;
      case 'larger':
        $class_name = 'page larger page-numbers';
        break;
      case 'previouspostslink':
        $class_name = 'prev page-numbers';
        break;
      case 'nextpostslink':
        $class_name = 'next page-numbers';
        break;
      case 'extend':
        $class_name = 'extend page-numbers dots';
        break;
      case 'first':
        $class_name = 'first page-numbers';
        break;
      case 'last':
        $class_name = 'last page-numbers';
        break;
    }
    return $class_name;
  }
  
  add_filter( 'wp_pagenavi_class_current', 'custom_wp_pagenavi_class' );
  add_filter( 'wp_pagenavi_class_previouspostslink', 'custom_wp_pagenavi_class' );
  add_filter( 'wp_pagenavi_class_nextpostslink', 'custom_wp_pagenavi_class' );
  add_filter( 'wp_pagenavi_class_page', 'custom_wp_pagenavi_class' );
  add_filter( 'wp_pagenavi_class_larger', 'custom_wp_pagenavi_class' );
  add_filter( 'wp_pagenavi_class_extend', 'custom_wp_pagenavi_class' );
  add_filter( 'wp_pagenavi_class_last', 'custom_wp_pagenavi_class' );
  add_filter( 'wp_pagenavi_class_first', 'custom_wp_pagenavi_class' );