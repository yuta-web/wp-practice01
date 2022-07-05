<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="ゲストハウス Nakanoya 吉兵衛 - 公式ホームページ"/>
  <meta property="og:description" content="ゲストハウス Nakanoya吉兵衛の公式ホームページです。国内で本土から少し離れた異国情緒たっぷりな宮古島。海の青さと南国の空気に触れ、ホット身体を潤し、癒してみませんか？"/>
  <meta property="og:type" content="website"/>
  <meta property="og:url" content="https://nakanoya-kichibee.com"/>
  <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri());?>/assets/images/logo_sp.svg"/>
  <meta property="og:site_name" content="Nakanoya 吉兵衛 - 公式ホームページ"/>
  <meta property="og:locale" content="ja_JP"/>
  <meta name="keywords" content="ゲストハウス,宿泊施設,宿,Nakanoya吉兵衛"/>
  <meta name="description" content="ゲストハウス Nakanoya吉兵衛の公式ホームページです。国内で本土から少し離れた異国情緒たっぷりな宮古島。海の青さと南国の空気に触れ、ホット身体を潤し、癒してみませんか？">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"/>
  <?php wp_head(); ?>
</head>
<body id="top" <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <header>
    <div class="sp">
      <div class="ham_btn">
        <div class="top_line"></div>
        <div class="mdl_line1"></div>
        <div class="mdl_line2"></div>
        <div class="btm_line"></div>
      </div>
      <nav>
        <ul class="slide_nav">
          <li><a href="#top"><img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/logo_sp.svg" alt="ロゴ" width="98" height="98"></a></li>
          <li><a href="#about">Nakanoya<span class="hira">吉兵衛</span>について</a></li>
          <li><a href="#info">インフォメーション</a></li>
          <li><a href="#access">アクセス</a></li>
          <li><a href="#contact">お問い合わせ</a></li>
          <li><a href="#reserve" class="reserve">ご予約</a></li>
        </ul>
      </nav>
    </div>

    <div class="pc">
      <div class="header_nav">
        <a class="logo" href="#top">
          <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/pc_logo.svg" alt="ロゴ" width="50" height="50">
        </a>
        <ul class="nav_lists">
          <li><a href="#about">Nakanoya<span class="hira">吉兵衛</span>について</a></li>
          <li><a href="#info">インフォメーション</a></li>
          <li><a href="#access">アクセス</a></li>
          <li><a href="#contact">お問い合わせ</a></li>
          <li><a href="#reserve" class="reserve">ご予約</a></li>
        </ul>
      </div>
    </div>
  </header>

  <main>
    <div class="kv">
      <div class="fade_img01">
        <div class="fade_item item01"></div>
        <div class="fade_item item02"></div>
      </div>
      <img class="kv_logo" src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/kv_logo.svg" alt="ロゴ Nakanoya吉兵衛" width="268" height="268">
    </div>

    <section class="about" id="about">
      <h2 class="sec_ttl target">
        Nakanoya<span class="hira">吉兵衛</span>について
        <span class="gold">ABOUT</span>
      </h2>
      <?php
        $args = array(
          'post_type' => 'about'
        );
        $the_query = new WP_Query($args);
        if($the_query->have_posts()):
      ?>
      <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
      <div class="container">
        <div class="image">
          <img src="<?php echo esc_url(CFS()->get('about_img')); ?>" alt="<?php the_title(); ?>" width="520" height="535">
        </div>
        <div class="about_text">
          <p>
            <?php echo CFS()->get('about_lead') ?>
          </p>
          <p><?php echo CFS()->get('about_text') ?></p>
          <a href="#reserve">ご予約はこちら</a>
        </div>
      </div>
      <?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
    </section>

    <section class="info" id="info">
      <h2 class="sec_ttl">
        インフォメーション
        <span class="gold">information</span>
      </h2>
      <h3 class="room_info">お部屋情報</h3>
      <div class="room_contents">
      <?php
        $args = array(
          'post_type' => 'information_room'
        );
        $the_query = new WP_Query($args);
        if($the_query->have_posts()):
      ?>
      <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
        <div class="room_item">
          <div class="room_image">
            <img src="<?php echo esc_url(CFS()->get('information_room_img')); ?>" alt="<?php the_title(); ?>" width="520" height="520">
          </div>
          <div class="room_text">
            <h4 class="room_name"><?php echo CFS()->get('information_room_name'); ?></h4>
            <p class="room_ex"><?php echo CFS()->get('information_room_description'); ?></p>
            <p class="money"><?php echo CFS()->get('information_room_price') ?></p>
            <h5>お部屋詳細 </h5>
            <dl>
              <dt>定員</dt>
              <dd><?php echo CFS()->get('information_room_capacity'); ?></dd>
            </dl>
            <dl>
              <dt>トイレ・シャワー</dt>
              <dd><?php echo CFS()->get('information_room_shower'); ?></dd>
            </dl>
            <dl>
              <dt>喫煙</dt>
              <dd><?php echo CFS()->get('information_room_tabaco'); ?></dd>
            </dl>
            <dl>
              <dt>チェックイン・アウト</dt>
              <dd><?php echo CFS()->get('information_room_checkin'); ?></dd>
            </dl>
          </div>
        </div>
        <?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
      </div>

      <div class="activity_contents">
        <h3 class="activity">設備</h3>
        <div class="act_items">
        <?php
          $args = array(
            'post_type' => 'amenity'
          );
          $the_query = new WP_Query($args);
          if($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
           <p class="amenity_text"><?php echo CFS()->get('amenity_text'); ?></p>
        <?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
        </div>
      </div>

      <!-- <div class="activity_contents">
        <h3 class="activity">アクテビティ</h3>
        <div class="act_items">
        <?php
          $args = array(
            'post_type' => 'activity'
          );
          $the_query = new WP_Query($args);
          if($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <div class="item">
          <img src="<?php echo esc_url(CFS()->get('activity_img')); ?>" alt="<?php the_title(); ?>" width="520" height="281">
            <div class="text">
              <h4 class="act_name"><?php echo CFS()->get('activity_lead'); ?></h4>
              <p class="act_ex"><?php echo CFS()->get('activity_text'); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
        </div>
      </div> -->

      <div class="menu_contents">
        <h3 class="menu">お食事メニュー</h3>
        <div class="menu_items">
        <?php
          $args = array(
            'post_type' => 'menu'
          );
          $the_query = new WP_Query($args);
          if($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <div class="menu_item">
            <img src="<?php echo esc_url(CFS()->get('menu_img')); ?>" alt="<?php the_title(); ?>" width="346" height="231">
            <h4 class="menu_name"><?php echo CFS()->get('menu_lead'); ?></h4>
            <p class="menu_ex"><?php echo CFS()->get('menu_text'); ?></p>
            <p class="menu_price"><?php echo CFS()->get('menu_price'); ?></p>
          </div>
        <?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
        </div>
      </div>

      <!-- <div class="rental_contents">
        <h4 class="rental">レンタルルーム</h4>
        <div class="rental_items">
        <?php
          $args = array(
            'post_type' => 'rental'
          );
          $the_query = new WP_Query($args);
          if($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <div class="item">
            <img src="<?php echo esc_url(CFS()->get('rental_img')); ?>" alt="<?php the_title(); ?>" width="520" height="390">
            <div class="rental_text">
              <p><?php echo CFS()->get('rental_lead'); ?></p>
              <p><?php echo CFS()->get('rental_text'); ?></p>
              <p class="rental_price"><?php echo CFS()->get('rental_price'); ?></p>
            </div>
          </div>
        <?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
        </div>
      </div> -->

      <div class="activity_contents">
        <h3 class="activity">注意事項</h3>
        <div class="act_items">
        <?php
          $args = array(
            'post_type' => 'attention'
          );
          $the_query = new WP_Query($args);
          if($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <p class="amenity_text"><?php echo CFS()->get('attention_text'); ?></p>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else: ?>
        <?php endif; ?>
        </div>
      </div>
    </section>

    <section class="access" id="access">
      <h2 class="sec_ttl">
        アクセス
        <span class="gold">Access</span>
      </h2>
      <?php
          $args = array(
            'post_type' => 'access'
          );
          $the_query = new WP_Query($args);
          if($the_query->have_posts()):
        ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
      <div class="adress">
        <h5>住所</h5>
        <p>〒906-0007</p>
        <p>沖縄県宮古島市平良東仲宗根95</p>
        <p><?php echo CFS()->get('access_text'); ?></p>
      </div>
      <?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else: ?>
				<?php endif; ?>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.701700672847!2d125.28095451500182!3d24.805665984079855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34f453d0646d823f%3A0xc04c031dde4d13c1!2zbmFrYW5veWEg5ZCJ5YW16KGb!5e0!3m2!1sja!2sjp!4v1655881508898!5m2!1sja!2sjp"
        class="map"
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </section>

    <section class="reserve" id="reserve">
      <h2 class="sec_ttl">
        ご予約
        <span class="gold">Reservation</span>
      </h2>
      <p>ご予約は公式LINEから承ります。</p>
      <p>下記ボタンより友達追加お願いいたします。</p>
      <a href="https://lin.ee/fLDmnjI" target="_blank">友だち追加</a>
      <p>LINEの登録ができない場合は、電話でのお問い合わせも可能です。</p>
    </section>

    <?php
      $args = array(
        'post_type' => 'contact'
      );
      $the_query = new WP_Query($args);
      if($the_query->have_posts()):
    ?>
    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
    <section class="contact" id="contact">
      <h2 class="sec_ttl">
        お問い合わせ
        <span class="gold">Contact</span>
      </h2>
      <div class="tel">
        <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/tel.svg" alt="電話アイコン" width="48" height="48">
        <a href="tel:<?php echo CFS()->get('contact_tel'); ?>"><?php echo CFS()->get('contact_tel'); ?></a>
      </div>
      <p>お問い合わせ時間</p>
      <p><?php echo CFS()->get('contact_time'); ?></p>
    </section>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php else: ?>
    <?php endif; ?>

  </main>

  <footer>
    <div class="footer_contents">
      <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/images/logo_sp.svg" alt="ロゴ" width="50" height="50">
      <ul class="footer_nav">
        <li><a href="#about">Nakanoya<span class="hira">吉兵衛</span>について</a></li>
        <li><a href="#info">インフォメーション</a></li>
        <li><a href="#access">アクセス</a></li>
        <li><a href="#contact">お問い合わせ</a></li>
        <li><a href="#reserve" class="reserve">ご予約</a></li>
      </ul>
      <?php
        $args = array(
          'post_type' => 'footer'
        );
        $the_query = new WP_Query($args);
        if($the_query->have_posts()):
      ?>
      <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
      <div class="infomation">
        <p>〒906-0007</p>
        <p>沖縄県宮古島市平良字東仲宗根95</p>
        <p><?php echo CFS()->get('footer_tel'); ?></p>
        <p><?php echo CFS()->get('footer_mail'); ?></p>
      </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else: ?>
      <?php endif; ?>
      <small>&copy; Nakanoya-Kitibe . All RightsReserved.</small>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</body>
</html>