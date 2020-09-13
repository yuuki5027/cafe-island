<?php get_header(); ?>

<main>
<div class="header-image">
  <img src="<?php echo get_template_directory_uri(); ?>/images/header-shop.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/header-shop.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/header-shop@2x.jpg 2x">
  <h1 class="font-serif">SHOP</h1>
</div>
<!-- <?php
      if (have_posts()) :
      while (have_posts()) : the_post();
      ?>
        <?php the_content(); ?>
      <?php
          endwhile;
        else:
      ?>
        <li>お探しの記事はありませんでした</li>
      <?php endif; ?> -->

<div class="column-center">
  <table class="shop-table">
    <tr>
      <th>営業時間</th>
      <td>早朝 6:00 - 22:00</td>
    </tr>
    <tr>
      <th>電話番号</th>
      <td>03-2525-2525</td>
    </tr>
    <tr>
      <th>住所</th>
      <td>東京都千代田区丸の内１−２−３　SUGOIビルディング１F</td>
    </tr>
  </table>
</div>

<div class="shop-map column-center">
  <img src="<?php echo get_template_directory_uri(); ?>/images/map.png" srcset="<?php echo get_template_directory_uri(); ?>/images/map.png 1x,<?php echo get_template_directory_uri(); ?>/images/map@2x.png 2x">
  <p>東京駅から徒歩３分</p>
</div>
</main>

<?php get_footer(); ?>