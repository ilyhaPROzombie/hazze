
<?php echo get_field('header__logo')['url'] ?>
<?php echo get_field('header__logo')['alt'] ?>

<?php echo get_field('header-logo', 'option')['url'] ?>


<?php the_field('field') ?>


<?php echo get_field('hero_button')['url'] ?>
<?php echo get_field('hero_button')['title'] ?>


<?php
if (have_rows('repeater_field_name')):
  while (have_rows('repeater_field_name')) : the_row(); ?>

  <?php  the_sub_field('sub_field_name');  ?>

  <?php  endwhile; 
else :
  echo 'Ошибка, поля не найдены';
endif;
?>

#e32879


        <?php var_dump(get_sub_field('avatar')) ?>


        замена
        img/
        на 
        <?php echo get_template_directory_uri() ?>/img/




        <!-- /// -->
        
<?php
while (have_posts()) :
  the_post();
endwhile; // End of the loop.
?>