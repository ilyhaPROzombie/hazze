    <!-- Footer Section Begin -->
    <section class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-option">
              <div class="fo-logo">
                <a href="/">
                  <img src="<?php echo get_field('header-logo', 'option')['url'] ?>" alt="<?php echo get_field('header-logo', 'option')['alt'] ?>">
                </a>
              </div>
              <ul>
                <?php
                if (have_rows('info-repeater', 'options')):
                  while (have_rows('info-repeater', 'options')) : the_row(); ?>
                    <?php if (!get_sub_field('is-link', 'options')) { ?>
                      <li><?php the_sub_field('first-text', 'options');  ?><?php the_sub_field('second-text', 'options');  ?></li>
                    <?php  } else { ?>
                      <li><?php the_sub_field('first-text', 'options');  ?><a href="<?php echo get_sub_field('link', 'options')['url'];  ?>"><?php echo get_sub_field('link', 'options')['title'];  ?></a></li>
                    <?php } ?>

                <?php endwhile;
                else :
                  echo 'Ошибка, поля не найдены';
                endif;
                ?>
              </ul>
              <div class="fo-social">
                
                <?php
                  if (have_rows('social-repeater', 'option')):
                    while (have_rows('social-repeater', 'option')) : the_row(); ?>

                      <a href="<?php the_sub_field('link');  ?>">
                        <i class="fa fa-<?php the_sub_field('social-choose');  ?>">
                        </i></a>

                  <?php endwhile;
                  else :
                    echo 'Ошибка, поля не найдены';
                  endif;
                  ?>
              
                <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a> -->
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="footer-widget fw-links">
              <h5><?php the_field('footer_menu-title', 'options') ?></h5>
              <?php wp_nav_menu(array(
                'container'       => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
                'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
                'theme_location'  => 'footer',              // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
              )); ?>

            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="footer-widget">
              <?php echo do_shortcode('[contact-form-7 id="31f75f3" title="Без названия html_class="news-form"]') ?>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="footer-widget">
              <h5>Instagram</h5>
              <div class="insta-pic">
                <?php

                $images = get_field('footer-gallery', 'options');

                if ($images): ?>
                  <ul>
                    <?php foreach ($images as $image): ?>
                      <li>
                        <a href="<?php echo $image['url']; ?>">
                          <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </a>
                        <p><?php echo $image['caption']; ?></p>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                <?php endif; ?>


              </div>
            </div>
          </div>
        </div>
        <div class="copyright-text">
          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </section>
    <!-- Footer Section End -->

    <?php wp_footer(); ?>

    </body>

    </html>