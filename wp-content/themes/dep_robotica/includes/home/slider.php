<?php

  $slider= get_field('');

 ?>

<section id="slider-home">
  <div class="container-fluid">
    <?php
 while (have_rows('slider')): the_row();
  $imagen = get_sub_field('banner');
  ?>
    <div class="slider-item">
      <img src="<?php echo $imagen ?>" alt="">
    </div>
  <?php endwhile; ?>
  </div>
</section>
