<?php

$titulo=get_field('titutlo_que_hacemos');

 ?>

<section id="que-hacemos">
  <header>
    <h1><?php echo $titulo ?></h1>
  </header>
  <?php
  while (have_rows('que_hacemos')): the_row();
    $fondo = get_sub_field('fondo');
    $texto = get_sub_field('texto');
  ?>
  <div class="item" style="background-image:url('<?php echo $fondo; ?>')">
    <h1><?php echo $texto; ?></h1>
  </div>
<?php endwhile; ?>
</section>
