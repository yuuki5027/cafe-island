<?php get_header(); ?>

<main>
<div class="header-image">
  <img src="<?php echo get_template_directory_uri(); ?>/images/header-news.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/header-news.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/header-news@2x.jpg 2x">
  <h1 class="font-serif">NEWS</h1>
</div>
<article>
  <ul class="news-list column-center">
    <?php
    $args = array(
      'post_type' => 'post', 
      'posts_per_page' => 5,
      'paged' => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
      'no_found_rows' => false,
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
    while ($the_query->have_posts()) : $the_query->the_post();
    ?>
      <li class="news-list-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php
        endwhile;
      else:
    ?>
      <li class="news-list-item">お探しの記事はありませんでした</li>
    <?php endif; ?>
  </ul>
</article>

  <?php $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages; ?>
  <nav class="posts-navigation">
    <div class="nav-links">
      <?php
      if(get_query_var('paged') > 0):
        echo '<div class="nav-first"><a href="/news/">最初へ</a></div>';
      else:
        echo '<div class="nav-first off"><span></span></div>';
      endif;
      ?>
      <?php 
      if(get_previous_posts_link()):
        echo '<div class="nav-left">';
        echo '</div>'; 
      else:
        echo '<div class="nav-left off">';
        echo '<span></span>';
        echo '</div>'; 
      endif;
      ?>
      <div class="nav-page">
        <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $max_page = $wp_query->max_num_pages;
          echo $paged.' / '.$max_page;  
        ?>
      </div>
      <?php 
        if(get_next_posts_link()):
          echo '<div class="nav-right">';
          echo '</div>';
        else:
          echo '<div class="nav-right off">';
          echo '<span></span>';
          echo '</div>';
        endif;
      ?>
      <?php
      if(get_query_var('paged') < $max_page && $max_page != 1):
        echo '<div class="nav-last"><a href="/news/page/'.$max_page.'/"></a></div>';
      else:
        echo '<div class="nav-last off"><span></span></div>';
      endif;
      ?>
    </div>
  </nav>
  <?php wp_reset_postdata(); ?>
</main>

<?php get_footer(); ?>