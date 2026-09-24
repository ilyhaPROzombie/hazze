<?php 
/*
  Template Name: Шаблон вывод полей ACF
*/
get_header();
?>

<?php
// текстовое поле 
// либо так
the_field('text_field');
// либо так
// echo get_field('text_field');

// текст ареа
the_field('text_area');

// фото
// the_field('image');
var_dump( get_field('image')['sizes']['large'] );
?>
<!-- вывод картинки из ее ссылки (нужно выбрать Формат возврата url) -->
<!-- <img src="<?php #the_field('image');  ?>" alt=""> -->
<!-- вывод картинки из ее ссылки (нужно выбрать Формат возврата массив) -->
<img src="<?php echo get_field('image')['sizes']['large'];  ?>" alt="<?php echo get_field('image')['alt'];  ?>">

<!-- галерея -->
<?php 
$images = get_field('gallery');

if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<!-- повторитель -->
<?php

// проверяем есть ли в повторителе данные
if( have_rows('repeater') ):

 	// перебираем данные
    while ( have_rows('repeater') ) : the_row();

        // отображаем вложенные поля
        the_sub_field('input-text'); echo '<br>';
        the_sub_field('email');  echo '<br>';

    endwhile;

else :

    // вложенных полей не найдено

endif;

?>

<?php get_footer();