<?php
/*
Plugin Name: カスタム投稿タイプ
Plugin URI: https://studio-gate.tokyo
Description: カスタム投稿タイプを追加します
Version: 1.0
Author: we are creators
Author URI: https://wearecreators0107.com
License: None
*/

function create_post_type(){
  $supports = array(
    'title',
    'editor'
  );

  register_post_type('about',
    array(
      'label' => 'Nakanoya吉兵衛について',
      'public' => true,
      'supports' => $supports
    )
  );

  register_post_type('information_room',
    array(
      'label' => 'お部屋情報',
      'public' => true,
      'supports' => $supports
    )
  );

  register_post_type('amenity',
    array(
      'label' => '設備',
      'public' => true,
      'supports' => $supports
    )
  );

  register_post_type('activity',
    array(
      'label' => 'アクテビティ',
      'public' => true,
      'supports' => $supports
    )
  );

  register_post_type('menu',
    array(
      'label' => 'お食事メニュー',
      'public' => true,
      'supports' => $supports
    )
  );

  register_post_type('attention',
    array(
      'label' => '注意事項',
      'public' => true,
      'supports' => $supports
    )
  );

  register_post_type('rental',
    array(
      'label' => 'レンタルルーム',
      'public' => true,
      'supports' => $supports
    )
  );

  register_post_type('access',
    array(
      'label' => 'アクセス',
      'public' => true,
      'supports' => $supports
    )
  );

  register_post_type('contact',
    array(
      'label' => 'お問い合わせ',
      'public' => true,
      'supports' => $supports
    )
  );

  register_post_type('footer',
    array(
      'label' => 'フッター',
      'public' => true,
      'supports' => $supports
    )
  );

}
add_action('init','create_post_type');
?>