<?php
get_header();
?>

<!-- Blog Details Hero  Section Begin -->
<section class="blog-hero-section set-bg spad" data-setbg="<?php the_field('single_background') ?>">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-9 text-center">
        <div class="bh-text categories-custom">
          <?php global $post;

          $categories = get_the_category($post->ID);

          foreach ($categories as $key => $value) {
            echo '<span>' . $value->name . '</span>';
          } ?>
          <h2><?php the_title() ?></h2>
          <ul>
            <li>
              <?php
              while (have_posts()) :
                the_post();
                echo 'By ';
                the_author();
              endwhile;
              ?>
            </li>
            <li><?php echo get_the_date(); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog Details Hero Section End -->

<!-- Blog Details Section Begin -->
<section class="blog-details-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 m-auto">
        <div class="bd-text">
          <div class="custom-content">
            <?php the_content(); ?>
          </div>
          <div class="tag-share">
            <div class="tags">
              <?php 
              $posttags = get_the_tags();
              if ($posttags) {
                foreach ($posttags as $tag) {
                  echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . '</a> ';
                }
              } ?>
            </div>
            <div class="social-share">
              <span><?php the_field('share') ?></span>
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
              <!-- <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-google-plus"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-youtube-play"></i></a> -->
            </div>
          </div>
          <?php
          while (have_posts()) :
            the_post(); ?>
            <div class="blog-author">
              <?php global $post;
              $url = get_avatar_url($post, "size=100&default=iv7601371");
              $img = '<img alt="" src="' . $url . '">';
              echo $img;
              ?>
              <h5><?php the_author() ?></h5>
              <p><?php the_author_meta('description') ?></p>
              <div class="bt-social">
                <?php
                $post_id = get_the_ID();
                $author_id = get_post_field('post_author', $post_id);

                $ourId = 'user_' . $author_id;

                if (have_rows('ourteam_repeater', $ourId)):
                  while (have_rows('ourteam_repeater', $ourId)) : the_row(); ?>

                    <a href="<?php the_sub_field('link');  ?>">
                      <i class="fa fa-<?php the_sub_field('social');  ?>">
                      </i></a>

                <?php endwhile;
                else :
                  echo 'Ошибка, поля не найдены';
                endif;
                ?>
                <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a> -->
              </div>
            </div>
          <?php
          endwhile;
          ?>
          <div class="leave-comment">
            <h2>Contact Us</h2>

            <?php echo do_shortcode('[contact-form-7 id="5f6fb07" title="Страница открытого поста" html_class="comment-form"]') ?>
            <!-- <form action="#" class="comment-form">
              <div class="row">
                <div class="col-lg-6">
                  <input type="text" placeholder="Name">
                </div>
                <div class="col-lg-6">
                  <input type="text" placeholder="Email">
                </div>
                <div class="col-lg-12">
                  <textarea placeholder="Messages"></textarea>
                  <button type="submit" class="site-btn">Send Message</button>
                </div>
              </div>
            </form> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Blog Details Section End -->

<!-- Recommend Section Begin -->
<section class="recommend-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2><?php the_field('recommended') ?></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <?php

      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 2,
        'orderby' => 'rand'
      );

      $query = new WP_Query($args);

      // Цикл
      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post(); ?>

          <div class="col-md-6">
            <div class="blog-item">
              <div class="row">
                <div class="col-lg-6">
                  <div
                    class="bi-pic set-bg"
                    data-setbg="<?php echo get_the_post_thumbnail_url() ?>"></div>
                </div>
                <div class="col-lg-6">
                  <div class="bi-text">
                    <ul>
                      <li><i class="fa fa-calendar-o"></i><?php echo get_the_date() ?></li>
                    </ul>
                    <h4>
                      <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                    </h4>
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
<!-- Recommend Section End -->


<?php
get_footer();
