<?php
/*
  Template Name: Шаблон About us
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

<!-- About Us Section Begin -->
<section class="about-us-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="as-pic">
          <img src="<?php echo get_field('pic')['url'] ?>" alt="<?php echo get_field('pic')['alt'] ?>">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="as-text ap-text">
          <div class="section-title">
            <span><?php the_field('subtiltle') ?></span>
            <h2><?php the_field('title') ?></h2>
          </div>
          <p class="s-para"><?php the_field('desc') ?></p>
          <div class="about-counter">
            <?php
            if (have_rows('numbers-repeater')):
              while (have_rows('numbers-repeater')) : the_row(); ?>

                <div class="ac-item">
                  <h2 class="ab-count"><?php the_sub_field('quantity') ?></h2>
                  <p><?php the_sub_field('branch') ?></p>
                </div>

            <?php endwhile;
            else :
              echo 'Ошибка, поля не найдены';
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!-- About Us Section End -->

<!-- Member Section Begin -->
<section class="member-section spad ap-member">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <span><?php the_field('ourteam_subtitle') ?></span>
          <h2><?php the_field('ourteam_title') ?></h2>
        </div>
      </div>
    </div>
    <div class="row">

      <?php

      $args = [
        'posts_per_page' => get_field('ourteam_amount'),
        'post_type' => 'our-team',
      ];

      $query = new WP_Query($args);

      // Цикл
      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post(); ?>

          <div class="col-lg-4 col-md-6">
            <div
              class="member-item set-bg"
              data-setbg="<?php echo get_the_post_thumbnail_url() ?>">
              <div class="mi-text <?php the_field('ourteam_theme');  ?>">
                <?php the_content() ?>
                <div class="mt-title">
                  <h4><?php the_title() ?></h4>
                  <span><?php the_field('ourteam_position') ?></span>
                </div>
                <div class="mt-social">

                  <?php
                  if (have_rows('ourteam_repeater')):
                    while (have_rows('ourteam_repeater')) : the_row(); ?>

                      <a href="<?php the_sub_field('link');  ?>">
                        <i class="fa fa-<?php the_sub_field('social');  ?>">
                        </i></a>

                  <?php endwhile;
                  else :
                    echo 'Ошибка, поля не найдены';
                  endif;
                  ?>

                </div>
              </div>
            </div>
          </div>

      <?php
        }
      } else {
        // Постов не найдено
      }

      // Возвращаем оригинальные данные поста. Сбрасываем $post.
      wp_reset_postdata(); ?>

    </div>
  </div>
</section>
<!-- Member Section End -->

<!-- Call To Action Section Begin -->
<?php echo do_shortcode('[pink-banner]') ?>
<!-- Call To Action Section End -->

<!-- Blog Section End -->
<?php get_footer(); ?>