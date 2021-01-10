<?php get_header(); ?>

<div class="kv">
  <img src="<?php echo get_template_directory_uri(); ?>/images/top-logo.png" srcset="<?php echo get_template_directory_uri(); ?>/images/top-logo.png 1x,<?php echo get_template_directory_uri(); ?>/images/top-logo@2x.png 2x">
</div>

<article class="top-news">
    <h2 class="text-center font-serif">NEWS</h2>
    <ul class="top-news-list column-center">
      <?php
      $args = array(
        'post_type' => 'post', 
        'posts_per_page' => 3,
     );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post();
      ?>
        <li class="top-news-list-item"><a href="<?php the_permalink(); ?>"><?php the_time('Y/n/j'); ?>　<?php the_title(); ?></a></li>
      <?php
          endwhile;
        else:
      ?>
        <li>お探しの記事はありませんでした</li>
      <?php endif; ?>
    </ul>
  </article>

  <article class="top-feature">
  <section class="top-feature-list-item">
    <img src="<?php echo get_template_directory_uri(); ?>/images/top1.png" srcset="<?php echo get_template_directory_uri(); ?>/images/top1.png 1x,<?php echo get_template_directory_uri(); ?>/images/top1@2x.png 2x">
    <h3>深い味わい、こだわりのエスプレッソ</h3>
    <p>当店のエスプレッソは、お客様にオーダーを頂いてから一杯ずつ丁寧に抽出しております。たっぷりとミルクを注いだシアトルスタイルでお召し上がりください。</p>
  </section>
  <section class="top-feature-list-item">
    <img src="<?php echo get_template_directory_uri(); ?>/images/top2.png" srcset="<?php echo get_template_directory_uri(); ?>/images/top2.png 1x,<?php echo get_template_directory_uri(); ?>/images/top2@2x.png 2x">
    <h3>高速Wi-Fi、全席電源完備</h3>
    <p>店内には高速のインターネット環境を用意。また全席に電源を完備しております。貸出用の充電ケーブルも各種用意しておりますので、スタッフまでお気軽にお声がけください。</p>
  </section>
  <section class="top-feature-list-item">
    <img src="<?php echo get_template_directory_uri(); ?>/images/top3.png" srcset="<?php echo get_template_directory_uri(); ?>/images/top3.png 1x,<?php echo get_template_directory_uri(); ?>/images/top3@2x.png 2x">
    <h3>店内は完全禁煙</h3>
    <p>当店は完全禁煙となっております。<br>※喫煙の際は店外にございます灰皿をご利用ください。</p>
  </section>
</article>

<article class="top-menu">
    <h2 class="font-serif">MENU</h2>
    <a href="/menu/" class="arrow-right pc-only top-menu-more">もっと見る</a>
    <ul class="top-menu-list">
    <?php
      $args = array(
        'post_type' => 'menu', 
        'posts_per_page' => 6,
     );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
      while ($the_query->have_posts()) : $the_query->the_post();
      ?>
        <li class="top-menu-list-item">
        <a href="<?php the_permalink(); ?>"><img src="<?php the_field('image'); ?>" width=154 height=154></a><br>
          <?php the_title(); ?>
        </li>
      <?php
          endwhile;
        else:
      ?>
        <li>お探しの記事はありませんでした</li>
      <?php endif; ?>
  </ul>
  <div class="text-center">
    <a href="/menu/" class="arrow-right sp-only top-menu-more">もっと見る</a>
  </div>
  </article>

  <article class="top-special">
    <h2 class="text-center font-serif">SPECIAL CONTENTS</h2>
    <ul class="top-special-list">
      <li class="top-special-list-item">
        <a href="https://cafe-island.wonderful-life.fun/special1/"><img src="<?php echo get_template_directory_uri(); ?>/images/sp3.png" srcset="<?php echo get_template_directory_uri(); ?>/images/sp3.png 1x,<?php echo get_template_directory_uri(); ?>/images/sp3@2x.png 2x"></a>
      </li>
      <li class="top-special-list-item">
        <a href="https://cafe-island.wonderful-life.fun/special2/"><img src="<?php echo get_template_directory_uri(); ?>/images/sp2.png" srcset="<?php echo get_template_directory_uri(); ?>/images/sp2.png 1x,<?php echo get_template_directory_uri(); ?>/images/sp2@2x.png 2x"></a>
      </li>
      <li class="top-special-list-item">
        <a href="https://cafe-island.wonderful-life.fun/special3/"><img src="<?php echo get_template_directory_uri(); ?>/images/sp1.png" srcset="<?php echo get_template_directory_uri(); ?>/images/sp1.png 1x,<?php echo get_template_directory_uri(); ?>/images/sp1@2x.png 2x"></a>
      </li>
    </ul>
  </article>
  <?php get_footer(); ?>
