<?php get_header(); ?>

<main>
<div class="header-image">
  <img src="<?php echo get_template_directory_uri(); ?>/images/header-menu.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/header-menu.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/header-menu@2x.jpg 2x">
  <h1 class="font-serif">MENU</h1>
</div>
<article class="menu-list">
    <?php
      if(have_posts()):
        while(have_posts()) : the_post();
        ?>
        <section class="menu-list-item">
        <a href="<?php the_permalink(); ?>"><img src="<?php the_field('image'); ?>" width=154 height=154></a>
          <h2><?php the_title(); ?></h2>
          <p class="menu-list-item-price"><?php the_field('price'); ?>yen</p>
          <p class="menu-list-item-description"><?php the_field('description'); ?></p>
        </section>
    <?php
        endwhile;
      else:
    ?>
    <p>お探しの記事はありませんでした</p>
    <?php endif; ?>
  </article>


</main>

<?php get_footer(); ?>