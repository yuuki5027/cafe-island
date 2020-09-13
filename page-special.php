<?php get_header(); ?>

<main>
  
<div class="header-image">
  <img src="<?php echo get_template_directory_uri(); ?>/images/header-special.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/header-special.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/header-special@2x.jpg 2x">
  <h1 class="font-serif">SPECIAL</h1>
</div>
<?php
  if(have_posts()):
    while(have_posts()) : the_post();
?>
<div class="special-list">
  <?php the_content(); ?>
</div>
<?php
    endwhile;
  else:
?>
<p>お探しの記事はありませんでした</p>
<?php endif; ?>

</main>

<?php get_footer(); ?>