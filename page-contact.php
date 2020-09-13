<?php get_header(); ?>

<main>
<div class="header-image">
    <img src="<?php echo get_template_directory_uri(); ?>/images/header-contact.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/header-contact.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/header-contact@2x.jpg 2x">
    <h1 class="font-serif">CONTACT</h1>
  </div>
<?php
    if(have_posts()):
      while(have_posts()) : the_post();
  ?>
  <?php the_content(); ?>
  <?php
      endwhile;
    else:
  ?>
  <p>お探しの記事はありませんでした</p>
  <?php endif; ?>

</main>

<?php get_footer(); ?>