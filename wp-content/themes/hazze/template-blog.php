<?php
/*
  Template Name: Шаблон Blog
*/
get_header();
?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="breadcrumb-option">
          <?php if (function_exists('kama_breadcrumbs')) kama_breadcrumbs(''); ?>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 text-right">
        <div class="breadcrumb-text">
          <h3><?php the_title() ?></h3>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<div class="blog-section spad">
  <div class="container">
    <div class="row">

      <?php

      $args = [
        'posts_per_page' => 20,
        'post_type' => 'post',
      ];

      $query = new WP_Query($args);
      $count = 1;

      // Цикл
      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post(); ?>

          <?php add_filter('excerpt_length', function () {
            return 30;
          }); ?>

          <?php if ($count % 4 == 3) { ?>

            <!-- СВЕТЛЫЙ БЛОК (без картинки) -->

            <?php add_filter('excerpt_length', function () {
              return 30;
            }); ?>

            <div class="col-lg-6">
              <div class="blog-item solid-bg">
                <div class="bi-text">
                  <ul>
                    <li><i class="fa fa-calendar-o"></i> <?php echo get_the_date() ?></li>
                  </ul>
                  <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                  <?php the_excerpt() ?>
                  <div class="bt-author">
                    <div class="ba-pic">
                      <?php global $post;
                      $url = get_avatar_url($post, "size=100&default=iv7601371");
                      $img = '<img alt="" src="' . $url . '">';
                      echo $img;
                      ?>
                    </div>
                    <div class="ba-text">
                      <h5><?php the_author() ?></h5>
                      <span><?php echo wp_roles()->roles['administrator']['name']; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php } else { ?>

            <!-- ТЁМНЫЙ БЛОК (с картинкой) -->

            <?php add_filter('excerpt_length', function () {
              return 10;
            }); ?>

            <div class="col-lg-6">
              <div class="blog-item">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="bi-pic set-bg" data-setbg="<?php echo get_the_post_thumbnail_url() ?>"></div>
                  </div>
                  <div class="col-lg-6">
                    <div class="bi-text">
                      <ul>
                        <li><i class="fa fa-calendar-o"></i> <?php echo get_the_date() ?></li>
                      </ul>
                      <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                      <?php the_excerpt() ?>
                      <div class="bt-author">
                        <div class="ba-pic">
                          <?php global $post;
                          $url = get_avatar_url($post, "size=100&default=iv7601371");
                          $img = '<img alt="" src="' . $url . '">';
                          echo $img;
                          ?>
                        </div>
                        <div class="ba-text">
                          <h5><?php the_author() ?></h5>
                          <span><?php echo wp_roles()->roles['administrator']['name']; ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php } ?>

          <?php $count++; // ← инкремент на КАЖДОЙ итерации, вне if/else 
          ?>

      <?php }
      } else {
        // Постов не найдено
      }

      // Возвращаем оригинальные данные поста. Сбрасываем $post.
      wp_reset_postdata(); ?>

    </div> <!-- закрываем первый row -->

    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="blog-btn">
          <a href="<?php the_field('button') ?>" class="primary-btn"><?php the_field('text_btn') ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Blog Section End -->

<?php get_footer(); ?>