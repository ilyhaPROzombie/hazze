<?php
/*
  Template Name: Шаблон contact
*/
get_header();
?>

<!-- Map Section Begin -->
<!-- <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3029.131590048758!2d-75.49285368518825!3d40.60492025209744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c439862c390e25%3A0xd8a76e7325ce28ea!2sLiberty%20St%2C%20Allentown%2C%20PA%2C%20USA!5e0!3m2!1sen!2sbd!4v1580135217665!5m2!1sen!2sbd"
            height="500" style="border:0;" allowfullscreen=""></iframe>
    </div> -->
<?php echo get_field('map'); ?>
<!-- Map Section End -->

<!-- Contact Section Begin -->
<section class="contact-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="contact-text">
          <h4>Contacts Us</h4>

          <?php
          if (have_rows('repeater')):
            while (have_rows('repeater')) : the_row(); ?>

              <div class="ct-item">
                <div class="ci-icon">
                  <span class="<?php the_sub_field('pic') ?>"></span>
                </div>
                <div class="ci-text">
                  <ul>
                    <li>
                      <span><?php the_sub_field('title') ?></span>
                      <?php the_sub_field('desc') ?>
                    </li>
                  </ul>
                </div>
              </div>

          <?php endwhile;
          else :
            echo 'Ошибка, поля не найдены';
          endif;
          ?>

        </div>
      </div>
      <div class="col-lg-7">
        <div class="contact-option">
          <h4><?php the_field('subtitle') ?></h4>
          <?php echo do_shortcode('[contact-form-7 id="f6261ef" title="Contact" html_class="comment-form contact-form"]') ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Contact Section End -->

<?php get_footer(); ?>