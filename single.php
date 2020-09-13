<?php get_header(); ?>

<main>
<div class="header-image">
    <img src="<?php echo get_template_directory_uri(); ?>/images/header-single.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/header-single.jpg 1x,<?php echo get_template_directory_uri(); ?>/images/header-single@2x.jpg 2x">
</div>
<div class="column-center entry-content">
    <?php
      if(have_posts()):
        while(have_posts()) : the_post();
    ?>
    <h1><?php the_title(); ?></h1>
    <ul class="entry-info-list">
      <li><img src="<?php echo get_template_directory_uri(); ?>/images/icon-date.png" srcset="<?php echo get_template_directory_uri(); ?>/images/icon-date.png 1x,<?php echo get_template_directory_uri(); ?>/images/icon-date.png 2x" width="14" height="15"><?php the_time('Y/n/j'); ?></li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-directory.png" srcset="<?php echo get_template_directory_uri(); ?>/images/icon-directory.png 1x,<?php echo get_template_directory_uri(); ?>/images/icon-directory.png 2x" width="15" height="14"><?php
          $postcategories = get_the_category();
          $count = count($postcategories);
          $loop = 0;
          if ($postcategories) {
            foreach ($postcategories as $category) {
            $loop++;
              if ($count == $loop){
                echo $category->name . '';
              } else {
                echo $category->name . ',';
              }
            }
          }?>
      </li>
      <li>
        <?php
          $posttags = get_the_tags();
          if($posttags){
            ?><img src="<?php echo get_template_directory_uri(); ?>/images/icon-tag.png" srcset="<?php echo get_template_directory_uri(); ?>/images/icon-tag.png 1x,<?php echo get_template_directory_uri(); ?>/images/icon-tag.png 2x" width="15" height="15"><?php 
            $count = count($posttags);
            $loop = 0;
            if ($posttags) {
              foreach ($posttags as $tag) {
              $loop++;
                if ($count == $loop){
                  echo $tag->name . '';
                } else {
                  echo $tag->name . ',';
                }
              }
            }
          }
        ?>
      </li>
    </ul>
    <?php the_content(); ?>
    <?php
        endwhile;
      else:
    ?>
    <p>お探しの記事はありませんでした</p>
    <?php endif; ?>

  </div>
<nav class="posts-navigation">
    <div class="nav-links">
      <?php 
          if(get_next_post()):
            echo '<div class="nav-left">';
            next_post_link('%link', '');
            echo '</div>';
          else:
            echo '<div class="nav-left off">';
            echo '<span></span>';
            echo '</div>';
          endif;
        ?>
      <div class="nav-page">
        <a href="/news/">一覧へ</a>
      </div>
      <?php 
      if(get_previous_post()):
        echo '<div class="nav-right">';
        previous_post_link('%link', '');
        echo '</div>'; 
      else:
        echo '<div class="nav-right off">';
        echo '<span></span>';
        echo '</div>'; 
      endif;
      ?>
    </div>
  </nav>
</main>


<?php get_footer(); ?>